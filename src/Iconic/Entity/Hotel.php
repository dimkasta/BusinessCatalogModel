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

    public $bookingLink;
    public $tripAdvisorLink;
    public $expediaLink;

    public $address;
    public $number;
    public $area;
    public $city;
    public $state;
    public $country;

    public $phone1;
    public $phone2;
    public $fax;
    public $email;
    public $website;

    public $published;
}