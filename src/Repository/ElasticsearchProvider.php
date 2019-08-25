<?php


namespace Iconic\Repository;


use Elasticsearch\ClientBuilder;
use Iconic\RepositoryProvider;

class ElasticsearchProvider implements RepositoryProvider
{
    private $client;

    public function __construct(array $hosts)
    {
        $this->client = ClientBuilder::create()->setHosts($hosts)->build();
    }
}