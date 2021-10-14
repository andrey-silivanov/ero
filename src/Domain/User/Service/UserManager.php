<?php
declare(strict_types=1);

namespace App\Domain\User\Service;


use App\Domain\User\Entity\User;
use App\Domain\User\Service\Contracts\UserCreatorInterface;
use App\Domain\User\Service\Contracts\UserManagerInterface;

class UserManager implements UserManagerInterface
{
    private UserCreatorInterface $userCreator;

    private  $userRegister;

    public function __construct(UserCreatorInterface $creator)
    {
        $this->userCreator = $creator;
    }

    public function create(User $user)
    {
        return $this->userCreator->create($user);
    }

    /* @TODO rename !!!! */
    public function register(User $user)
    {
        dd('sds');
        $this->create($user);
    }
}