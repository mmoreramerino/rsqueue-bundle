<?php

namespace Mmoreram\RSQueueBundle\Listeners;

use Doctrine\Bundle\DoctrineBundle\Registry;
use Mmoreram\RSQueueBundle\Event\RSQueueConsumerEvent;

/**
 * Class ConsumerListener
 *
 * @package Mmoreram\RSQueueBundle\Listeners
 */
class ConsumerListener
{
    /**
     * @var Registry
     */
    protected $doctrine;

    /**
     * ConsumerListener constructor.
     *
     * @param $doctrine
     */
    public function __construct($doctrine)
    {
        $this->doctrine = $doctrine;
    }

    /**
     * @param RSQueueConsumerEvent $event
     */
    public function checkRSQConsumerEvent(RSQueueConsumerEvent $event)
    {
        $this->doctrine->getManager()->clear();
    }
}