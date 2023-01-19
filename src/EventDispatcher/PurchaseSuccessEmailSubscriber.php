<?php

namespace App\EventDispatcher;

use App\Events\PurchaseSuccessEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class PurchaseSuccessEmailSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            'purchase.success' => 'sendSuccessEmail'
        ];
    }
    public  function sendSuccessEmail(PurchaseSuccessEvent $purchaseSuccessEvent)
    {
        dd($purchaseSuccessEvent);
    }
}