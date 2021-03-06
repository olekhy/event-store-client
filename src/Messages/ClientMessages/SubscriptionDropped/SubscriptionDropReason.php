<?php
/**
 * This file is part of the prooph/event-store-client.
 * (c) 2018-2018 prooph software GmbH <contact@prooph.de>
 * (c) 2018-2018 Sascha-Oliver Prolic <saschaprolic@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);
// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: ClientMessageDtos.proto

namespace Prooph\EventStoreClient\Messages\ClientMessages\SubscriptionDropped;

/**
 * Protobuf type <code>Prooph.EventStoreClient.Messages.ClientMessages.SubscriptionDropped.SubscriptionDropReason</code>
 */
class SubscriptionDropReason
{
    /**
     * Generated from protobuf enum <code>Unsubscribed = 0;</code>
     */
    const Unsubscribed = 0;
    /**
     * Generated from protobuf enum <code>AccessDenied = 1;</code>
     */
    const AccessDenied = 1;
    /**
     * Generated from protobuf enum <code>NotFound = 2;</code>
     */
    const NotFound = 2;
    /**
     * Generated from protobuf enum <code>PersistentSubscriptionDeleted = 3;</code>
     */
    const PersistentSubscriptionDeleted = 3;
    /**
     * Generated from protobuf enum <code>SubscriberMaxCountReached = 4;</code>
     */
    const SubscriberMaxCountReached = 4;
}

// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(SubscriptionDropReason::class, \Prooph\EventStoreClient\Messages\ClientMessages\SubscriptionDropped_SubscriptionDropReason::class);
