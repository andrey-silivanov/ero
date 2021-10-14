<?php
declare(strict_types=1);


namespace App\Domain\User\Factory;


use App\Domain\User\Entity\User;

/**
 * Interface UserFactoryInterface
 * @package App\Domain\User\Factory
 */
interface UserFactoryInterface
{
    /**
     * @param string $username
     * @param string $email
     * @param string $phone
     * @param string $password
     * @return User
     */
    public static function make(string $username, string $email, string $phone, string $password): User;
}