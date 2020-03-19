<?php
declare(strict_types=1);


namespace App\Application\Factory;


use App\Domain\Entity\User;
use App\Domain\Factory\UserFactoryInterface;
use App\Domain\VO\User\UserPhoneVO;

class UserFactory implements UserFactoryInterface
{
    public static function make(string $username, string $email, string $phone): User
    {
        return new User(
            $username,
            $email,
            new UserPhoneVO($phone)
        );
    }
}