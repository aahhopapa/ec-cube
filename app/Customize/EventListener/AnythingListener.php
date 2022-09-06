<?php

namespace Customize\EventListener;

use Eccube\Event\TemplateEvent;
use Eccube\Event\EccubeEvents;
use Eccube\Event\EventArgs;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Doctrine\Common\EventSubscriber;
use Customize\Repository\AnythingRepository;

class AnythingListener implements EventSubscriberInterface
{

    /**
     * @var AnythingRepository
     */
    protected $anythingRepository;

    /**
     * EntryController constructor.
     *
     * @param AnythingRepository $anythingRepository
     */
    public function __construct(
        AnythingRepository $anythingRepository
    ) {
        $this->anythingRepository = $anythingRepository;
    }


    public static function getSubscribedEvents()
    {
        return [
            // EccubeEvents::FRONT_ANYTHING_INDEX_INITIALIZE => 'anythingEvent',
            'front.anything.index.initialize' => 'anythingEvent'
        ];
        
    }


    public function anythingEvent(EventArgs $eventArgs)
    {
        // $data = $event->getData();

        // dump($eventArgs);
        // dump($eventArgs->getRequest());
        dump('event');
    }

    

    // public static function getSubscribedEvents()
    // {
    //     return [
    //         EccubeEvents::FRONT_ANYTHING_INDEX_INITIALIZE => 'anythingEvent',
    //         //FormEvents::POST_SET_DATA => 'anythingEvent2',
    //     ];
    // }

    // public function anythingEvent(FormEvent $event): void
    // {
    //     dump('event');
    // }
}
