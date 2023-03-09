<?php

class Reservation
{
    private $host = "Host Class";   // For Demo Purposes
    private $guest = "Guest Class";
    // cancel
    public function cancel()
    {

        $this->sendCancellationNotification();
        $this->refundGuest();

        echo 'And add a bunch of other stuff';
        // check if cancellation is an option

        // Refund the guest... if refunds applicable [Guest]
        // Make the room available again [ROOM]
        // Notify the host
            // In app notification [Notification]
            // Send them an email / sms [Email, sms]
    }

    private function sendCancellationNotification()
    {
        echo 'Sending notification to '.$this->host.'<br>';
    }

    private function refundGuest()
    {
        echo 'Refunding '.$this->guest.'<br>';
    }
}