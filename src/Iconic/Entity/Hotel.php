<?php


namespace Iconic\Entity;


class Hotel
{
    public function __construct($identifier = null)
    {
        $this->id = $identifier;
    }

    public $id;
    public $title;
    public $slug;
    public $rank;
    public $rankType;
    public $actions;
}