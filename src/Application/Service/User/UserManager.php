<?php
declare(strict_types=1);


namespace App\Application\Service\User;


use App\Domain\Entity\User;
use App\Domain\Service\User\UserCreatorInterface;
use App\Domain\Service\User\UserManagerInterface;
use App\Domain\Service\User\UserRegisterInterface;

class UserManager implements UserManagerInterface
{
    private  $userCreator;

    private  $userRegister;

    public function __construct(UserCreatorInterface $creator)
    {
        dd($creator);
        $this->userCreator = $creator;
        $this->userRegister = 's';
    }

    public function create(User $user)
    {
        // TODO: Implement create() method.
    }

    /* @TODO rename !!!! */
    public function register(User $user)
    {
        dd('sdad');
    }
}