<?php

namespace Src\Mailers;
use Google_Client;
use Google_Service_Gmail;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Src\Configuration;

class Client implements MailerInterface
{
    private $mail;

    public function __construct($provider, Configuration $configuration)
    {
        $scopes = implode(' ', array(
                Google_Service_Gmail::GMAIL_READONLY)
        );
        $config = [
            'client_id' => '1008853392351-r0k444kir933qo0r00ovsjf0u555q5ac.apps.googleusercontent.com',
            'client_secret' => 'f6Sqhq_VzMb8GvlF7pVzTSq6',
        ];
        $this->mail = new PHPMailer(true);
        $client = new Google_Client();
        $client->setApplicationName('test app');
        $client->setScopes($scopes);
        $client->setAuthConfig($config);
        $client->setAccessType('offline');

    }

    public function auth($params)
    {
        
    }

    public function fetchmail()
    {
        return [1];
    }

    public function reply()
    {
        
    }

    public function markAsNoSpam()
    {

    }
}