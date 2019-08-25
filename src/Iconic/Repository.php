<?php


namespace Iconic;


abstract class Repository
{
    /**
     * @var RepositoryProvider
     */
    private $repositoryProvider;

    public function __construct(RepositoryProvider $repositoryProvider)
    {
        $this->repositoryProvider = $repositoryProvider;
    }

    abstract public function upsert($identifier = null);
    abstract public function save();
}