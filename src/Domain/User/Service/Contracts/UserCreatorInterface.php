<?php
declare(strict_types=1);


namespace App\Domain\User\Service\Contracts;


use App\Domain\User\Entity\User;

/**
 * Interface UserCreatorInterface
 * @package App\Domain\User\Service\Contracts
 */
interface UserCreatorInterface
{
    /**
     * @param User $user
     * @return mixed
     */
    public function create(User $user);
}