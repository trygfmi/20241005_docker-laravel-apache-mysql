<?php

namespace App\serviceContainerTest;

class Slack implements Message
{

    public function send(){

        dd('something happens by Slack');

    }
   
}