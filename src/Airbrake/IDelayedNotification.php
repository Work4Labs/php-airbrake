<?php
namespace Airbrake;

/**
 * Airbrake IDelayedNotification interface.
 * 
 * An interface to create notifications to be sent later to the Airbrake API
 *
 * @package        Airbrake
 */
interface IDelayedNotification
{
    // $staticNotifyMethod will be Connection::notify
    // $xml the XML content to be sent
    // $errorNotificationCallback is a callback to handle errors (a function that takes an AirbrakeException as argument)
    // must return true iff the task was succesfully created
    public static function createDelayedNotification($staticNotifyMethod, $xml, $apiEndPoint, $timeout, $headers, $errorMessage, $errorNotificationCallback = null);
}