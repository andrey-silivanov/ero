<?php
declare(strict_types=1);


namespace App\Domain\Factory;


use App\Domain\Entity\User;

interface UserFactoryInterface
{
    public static function make(string $username, string $email, string $phone):User;
}