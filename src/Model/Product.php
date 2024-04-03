<?php

namespace App\Model;

class Product
{

    private string $fullname;

    private string $type;

    private string $version;
    private string $SAS;

    private string $generation;

    private string $link;
    private string $title;


    /**
     * @param string $fullname
     * @param string $type
     * @param string $version
     * @param string $SAS
     * @param string $generation
     */
    public function __construct(string $fullname, string $type, string $version, string $SAS, string $generation)
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

    public function getGeneration(): string
    {
        return $this->generation;
    }

    public function setGeneration(string $generation): void
    {
        $this->generation = $generation;
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




}