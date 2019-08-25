<?php


namespace Iconic\Hotel;


use Iconic\Entity\Hotel;

class Repository extends \Iconic\Repository
{
    /**
     * @var Hotel
     */
    private $hotel;

    public function upsert($identifier = null)
    {
        $this->hotel = new Hotel($identifier);
        return $this;
    }

    public function setTitleTo(string $title)
    {
        $this->hotel->title = $title;
        return $this;
    }

    public function save()
    {
        // TODO: Implement save() method.
    }
}
