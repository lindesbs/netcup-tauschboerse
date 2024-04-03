<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpClient\HttpClient;

class FetchRSSFeed extends AbstractController
{


    public function fetch(): \SimpleXMLElement
    {
        $client = HttpClient::create();
        dump($this->getParameter('RSS_URL'));
        $response = $client->request('GET',  $this->getParameter('RSS_URL'));
        $rssContent = $response->getContent();

        $rss = simplexml_load_string($rssContent);

        return $rss;
    }
}