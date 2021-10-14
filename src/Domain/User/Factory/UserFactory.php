<?php
declare(strict_types=1);


namespace App\Domain\User\Factory;


use App\Domain\User\Entity\User;
use App\Domain\User\VO\UserPhoneVO;

class UserFactory implements UserFactoryInterface
{
    public static function make(string $username, string $email, string $phone, string $password): User
    {
        return new User(
            $username,
            $email,
            new UserPhoneVO($phone),
            $password
        );
    }
}