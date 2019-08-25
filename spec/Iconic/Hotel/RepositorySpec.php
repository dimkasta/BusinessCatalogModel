<?php

namespace spec\Iconic\Hotel;

use Iconic\Hotel\Repository;
use Iconic\Repository\ElasticsearchProvider;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RepositorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Repository::class);

        $repository = new Repository(new ElasticsearchProvider([]));

        $repository
            ->upsert(123)
            ->setAddressTo('asd')
            ->setBookingLinkTo('asd')
            ->save();
    }
}
