<?php
declare(strict_types=1);


namespace App\Domain\Service\User;


use App\Domain\Entity\User;

/**
 * Interface UserCreatorInterface
 * @package App\Domain\Service\User
 */
interface UserCreatorInterface
{
    /**
     * @param User $user
     * @return mixed
     */
    public function create(User $user);
}