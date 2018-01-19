<?php

require __DIR__.'/vendor/autoload.php';

use App\Commands\GmailHandlerCommand;
use Symfony\Component\Console\Application;

$application = new Application();

// ... register commands

$application->add(new GmailHandlerCommand());

$application->run();

