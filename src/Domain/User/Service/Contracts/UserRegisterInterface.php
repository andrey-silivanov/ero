<?php
declare(strict_types=1);


namespace App\Domain\User\Service\Contracts;


use App\Domain\User\Entity\User;

/**
 * Interface UserRegisterInterface
 * @package App\Domain\Service\User
 */
interface UserRegisterInterface
{
    /**
     * @param User $user
     * @return mixed
     */
    public function register(User $user);
}