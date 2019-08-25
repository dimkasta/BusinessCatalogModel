<?php


namespace Iconic\Projection;


/**
 * Class Search
 * @package Iconic\Projection
 */
class Search
{
    /**
     * @var int
     */
    private $page;

    /**
     * @var int
     */
    private $totalResults;

    /**
     * @var array
     */
    public $results;

    /**
     * Search constructor.
     * @param int $page
     * @param int $totalResults
     * @param array $results
     */
    public function __construct(int $page, int $totalResults, array $results)
    {
        $this->results = $results;
        $this->page = $page;
        $this->totalResults = $totalResults;
    }
}