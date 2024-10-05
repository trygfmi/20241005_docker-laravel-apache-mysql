<?php

namespace App\serviceContainerTest;

class Mail implements Message
{

    public function send(){

        dd('something happens by Mail');

    }
   
}