<?php
/**
 * Created by PhpStorm.
 * User: smarketly
 * Date: 22.01.18
 * Time: 17:31
 */

namespace Src\Mailers;

interface MailerInterface
{
    public function auth($params);

    public function fetchmail();

    public function reply();

    public function markAsNoSpam();
}