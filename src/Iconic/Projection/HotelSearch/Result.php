<?php


namespace Iconic\Projection;


use Iconic\Projection\HotelSearch\ResultAction;

/**
 * Class Result
 * @package Iconic\Projection
 */
class Result
{
    /**
     * @var string
     */
    public $icon;

    /**
     * @var string
     */
    public $slug;

    /**
     * @var string
     */
    public $title;

    /**
     * @var int
     */
    public $rank;

    /**
     * @var string
     */
    public $rankType;

    /**
     * @var string
     */
    public $area;

    /**
     * @var ResultAction[]
     */
    public $actions;


    /**
     * Result constructor.
     * @param string $icon
     * @param string $slug
     * @param string $title
     * @param string $rank
     * @param string $rankType
     * @param string $area
     * @param array $actions
     */
    public function __construct(string $icon, string $slug, string $title, string $rank, string $rankType, string $area, array $actions)
    {
        $this->actions = [];
        $this->icon = $icon;
        $this->slug = $slug;
        $this->title = $title;
        $this->rank = $rank;
        $this->rankType = $rankType;
        $this->area = $area;
        $this->actions = $actions;
    }
}
