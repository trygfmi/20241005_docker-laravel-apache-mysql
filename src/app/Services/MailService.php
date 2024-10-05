<?php

namespace App\Services;

use Google_Client;
use Google_Service_Gmail;
use Google_Service_Gmail_Message;

class MailService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Google_Client();
        $this->client->setApplicationName('Laravel Gmail API');
        $this->client->setScopes(Google_Service_Gmail::GMAIL_SEND);
        // $this->client->setAuthConfig(storage_path('app/google/gmail-api.json')); // サービスアカウントのJSONファイル
        $this->client->setAuthConfig(base_path('app/google/gmail-api.json')); // サービスアカウントのJSONファイル
        $this->client->setAccessType('offline');
    }

    public function sendEmail($to, $subject, $messageText)
    {
        $service = new Google_Service_Gmail($this->client);

        $message = new Google_Service_Gmail_Message();
        $rawMessage = "To: $to\r\n";
        $rawMessage .= "Subject: $subject\r\n";
        $rawMessage .= "\r\n$messageText";
        $encodedMessage = rtrim(strtr(base64_encode($rawMessage), '+/', '-_'), '=');

        $message->setRaw($encodedMessage);

        $service->users_messages->send('me', $message);
    }
}
