<?php

namespace App\Model;

class Payment extends Model
{


    protected $table_name = 'payments';
    protected $class_name = 'App\Model\Payment';

    public function ticket()
    {
        $ticketInstance = new Ticket();
        if (!is_null($this->ticket_id))
            return $ticketInstance->find($this->ticket_id);
        else
            return NULL;
    }

    public function event()
    {
        $eventInstance = new Event();
        if (!is_null($this->event_id))
            return $eventInstance->find($this->event_id);
        else
            return NULL;
    }
    public function method()
    {
        $paymentMethodInstance = new PaymentMethod();
        if (!is_null($this->payment_method_id))
            return $paymentMethodInstance->find($this->payment_method_id);
        else
            return NULL;
    }
}