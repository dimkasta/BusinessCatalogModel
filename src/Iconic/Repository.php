<?php


namespace Iconic;


use Iconic\Entity\Hotel;

abstract class Repository
{

    /**
     * @var Hotel
     */
    protected $item;

    /**
     * @var RepositoryProvider
     */
    protected $repositoryProvider;

    public function __construct(RepositoryProvider $repositoryProvider)
    {
        $this->repositoryProvider = $repositoryProvider;
    }

    abstract public function upsert($identifier = null);
    public function save(){
        $this->repositoryProvider->save($this->item);
    }
}