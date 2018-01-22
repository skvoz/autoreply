<?php

namespace App\Autoreply\Commands;

use Src\Configuration;
use Src\Mailers\Client;
use Symfony\Component\Console\Output\OutputInterface;

class FetchMailCommand
{
    private $configuration;
    private $mailer;

    public function __construct(Configuration $configuration)
    {
        $this->configuration = $configuration;
        $this->mailer = new Client('gmail');
    }

    public function __invoke($id, OutputInterface $output)
    {

        $reslut = $this->mailer->send();
        die;

        foreach ($reslut as $mail) {
            $output->writeln($mail);
            die;
        }
//
//        /* connect to gmail */
//        $hostname = '{imap.gmail.com:993/imap/ssl/novalidate-cert}';
//        $username = 'skvoz.ne@gmail.com';
//        $password = $this->configuration->toArray('password');
//
//        try {
//            /* try to connect */
//            $inbox = imap_open($hostname, $username, $password) or die('Cannot connect to Gmail: ' . imap_last_error());
//            var_dump($inbox);
//            die;
//            /* grab emails */
////        $emails = imap_search($inbox,'ALL');
//
//            $sinceDate = "31 December 2015";
//            $beforeDate = "22 January 2018";
//            $emails = imap_search($inbox, 'SINCE "' . $sinceDate . '" BEFORE"' . $beforeDate . '"');
//        } catch (\Exception $e) {
//            die($e->getMessage());
//        }
//
//        /* if emails are returned, cycle through each... */
//        if ($emails) {
//
//            /* begin output var */
//            $output = '';
//
//            /* put the newest emails on top */
//            rsort($emails);
//
//            /* for every email... */
//            foreach ($emails as $email_number) {
//
//                /* get information specific to this email */
//                $overview = imap_fetch_overview($inbox, $email_number, 0);
//                $message = imap_fetchbody($inbox, $email_number, 2);
//
//                /* output the email header information */
//                $output .= '<div class="toggler ' . ($overview[0]->seen ? 'read' : 'unread') . '">';
//                $output .= '<span class="subject">' . $overview[0]->subject . '</span> ';
//                $output .= '<span class="from">' . $overview[0]->from . '</span>';
//                $output .= '<span class="date">on ' . $overview[0]->date . '</span>';
//                $output .= '</div>';
//
//                /* output the email body */
//                $output .= '<div class="body">' . $message . '</div>';
//            }
//
//            echo $output;
//        }
//
//        /* close the connection */
//        imap_close($inbox);
//
//        $output->writeln([
//            'User Creator',
//            '============',
//            '',
//        ]);
//
//        // outputs a message followed by a "\n"
//        $output->writeln('Whoa!');
//
//        // outputs a message without adding a "\n" at the end of the line
//        $output->write('You are about to ');
//        $output->write('create a user.');
    }
}