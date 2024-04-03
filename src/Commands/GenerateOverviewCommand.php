<?php

namespace App\Commands;

use App\Controller\FetchRSSFeed;
use App\Model\Product;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use Symfony\Component\HttpClient\HttpClient;
use Twig\Environment;


#[AsCommand(
    name: 'app:generate-overview',
    description: 'Generate overview HTML page from RSS feed',
)]
class GenerateOverviewCommand extends Command
{


    public function __construct(
        private readonly Environment $twig,
        private readonly FetchRSSFeed $fetchRSSFeed
    )
    {
        parent::__construct();
    }


    protected function execute(InputInterface $input, OutputInterface $output): int
    {

        $rss = $this->fetchRSSFeed->fetch();

        $filteredProducts=[];

        foreach ($rss->channel->item as $item) {
            $output->write('*');
            $title = str_replace(' ','',$item->title);

            $pattern = '/(RS|VPS)(\d{4})(SAS)?G(\d+)/';

            if (preg_match($pattern, $title, $matched)) {

                $product = new Product(...$matched);
                $product->setLink((string) $item->link);
                $product->setTitle((string) $item->title);

                $filteredProducts[$matched[0]] = $product;
            }
        }

        $html = $this->twig->render('rss_overview.html.twig', ['items' => $filteredProducts]);
        $outputFilePath = 'forum_feed_overview.html';
        file_put_contents($outputFilePath, $html);

        dump($filteredProducts);

        return Command::SUCCESS;
    }

}