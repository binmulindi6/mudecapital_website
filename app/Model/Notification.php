<?php

namespace App\Model;

class Notificatoin extends Model
{
    protected $table_name = 'notifications';
    protected $class_name = 'App\Model\Notification';


    public $user_id;
    public $title;
    public $content;
}
