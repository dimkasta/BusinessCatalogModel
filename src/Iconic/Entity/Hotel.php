<?php


namespace Iconic\Entity;


class Hotel
{
    public function __construct($identifier = null)
    {
        $this->id = $identifier;
    }

    //region Main Properties
    public $published;
    public $id;
    public $title;
    public $slug;
    public $rank;
    public $rankType;
    //endregion

    //region Actions
    public $bookingLink;
    public $tripAdvisorLink;
    public $expediaLink;
    //endregion

    //region Address
    public $address;
    public $number;
    public $area;
    public $city;
    public $state;
    public $country;
    //endregion

    //region Contact Info
    public $phone1;
    public $phone2;
    public $fax;
    public $email;
    public $website;
    //endregion

}