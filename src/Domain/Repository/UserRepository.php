<?php
declare(strict_types=1);

namespace App\Domain\Repository;


use App\Domain\Entity\User;

/**
 * Interface UserRepository
 * @package App\Domain\Repository
 */
interface UserRepository
{
    /**
     * @param User $user
     * @return mixed
     */
    public function save(User $user);
}