<?php

namespace App\Model;

class Product
{

    private string $fullname;

    private string $type;

    private string $version;
    private string $SAS;

    private int $generation=0;

    private string $link;
    private string $title;


    /**
     * @param string $fullname
     * @param string $type
     * @param string $version
     * @param string $SAS
     * @param int $generation
     */
    public function __construct(string $fullname, string $type, string $version, string $SAS, int $generation)
    {
        $this->fullname = $fullname;
        $this->type = $type;
        $this->version = $version;
        $this->SAS = $SAS;
        $this->generation = $generation;
    }

    public function getFullname(): string
    {
        return $this->fullname;
    }

    public function setFullname(string $fullname): void
    {
        $this->fullname = $fullname;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    public function setVersion(string $version): void
    {
        $this->version = $version;
    }

    public function getSAS(): string
    {
        return $this->SAS;
    }

    public function setSAS(string $SAS): void
    {
        $this->SAS = $SAS;
    }



    public function getLink(): string
    {
        return $this->link;
    }

    public function setLink(string $link): void
    {
        $this->link = $link;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getGeneration(): int
    {
        return $this->generation;
    }

    public function setGeneration(int $generation): void
    {
        $this->generation = $generation;
    }




}