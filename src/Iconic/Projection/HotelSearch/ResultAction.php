<?php


namespace Iconic\Projection\HotelSearch;


/**
 * Class ResultAction
 * @package Iconic\Projection\HotelSearch
 */
class ResultAction
{
    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $icon;

    /**
     * @var string
     */
    public $link;

    /**
     * ResultAction constructor.
     * @param string $text
     * @param $icon
     * @param string $link
     */
    public function __construct(string $text, string $icon, string $link)
    {
        $this->text = $text;
        $this->icon = $icon;
        $this->link = $link;
    }
}
