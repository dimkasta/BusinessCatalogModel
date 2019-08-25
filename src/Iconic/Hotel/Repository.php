<?php


namespace Iconic\Hotel;


use Iconic\Entity\Hotel;

class Repository extends \Iconic\Repository
{
    public function upsert($identifier = null)
    {
        $this->item = new Hotel($identifier);
        return $this;
    }

    //region Main Properties

    public function setPublishedTo(bool $published)
    {
        $this->item->published = $published;
        return $this;
    }

    public function setTitleTo(string $title)
    {
        $this->item->title = $title;
        return $this;
    }

    public function setSlugTo(string $slug)
    {
        $this->item->slug = $slug;
        return $this;
    }

    public function setRankTo(int $rank)
    {
        $this->item->rank = $rank;
        return $this;
    }

    public function setRankTypeTo(string $rankType)
    {
        $this->item->rankType = $rankType;
        return $this;
    }

    //endregion

    //region Actions

    public function setBookingLinkTo(string $url)
    {
        $this->item->bookingLink = $url;
        return $this;
    }

    public function setTripAdvisorLinkTo(string $url)
    {
        $this->item->tripAdvisorLink = $url;
        return $this;
    }

    public function setExpediaLinkTo(string $url)
    {
        $this->item->expediaLink = $url;
        return $this;
    }

    //endregion

    //region Address

    public function setAddressTo(string $address)
    {
        $this->item->address = $address;
        return $this;
    }

    public function setNumberTo(string $number)
    {
        $this->item->number = $number;
        return $this;
    }

    public function setAreaTo(string $area)
    {
        $this->item->area = $area;
        return $this;
    }

    public function setCityTo(string $city)
    {
        $this->item->city = $city;
        return $this;
    }

    public function setStateTo(string $state)
    {
        $this->item->state = $state;
        return $this;
    }

    public function setCountryTo(string $country)
    {
        $this->item->country = $country;
        return $this;
    }

    //endregion

    //region Contact Info

    public function setPhone1To(string $phone1)
    {
        $this->item->phone1 = $phone1;
        return $this;
    }

    public function setPhone2To(string $phone2)
    {
        $this->item->phone2 = $phone2;
        return $this;
    }

    public function setFaxTo(string $fax)
    {
        $this->item->fax = $fax;
        return $this;
    }

    public function setEmailTo(string $email)
    {
        $this->item->email = $email;
        return $this;
    }

    public function setWebsiteTo(string $website)
    {
        $this->item->website = $website;
        return $this;
    }

    //endregion

}
