<?php
declare(strict_types=1);


namespace App\Domain\User\Repository;


use App\Domain\User\Entity\User;


/**
 * Interface UserRepositoryInterface
 * @package App\Domain\User\Repository
 */
interface UserRepositoryInterface
{
    /**
     * @param User $user
     * @return mixed
     */
    public function save(User $user);
}