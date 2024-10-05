<?php

namespace App\serviceContainerTest;

class Myclass
{

    public $message;

    public function __construct(Message $message){

        $this->message = $message;

    }

    public function run(){

        $this->message->send();

    }
   
}