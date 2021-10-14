<?php
declare(strict_types=1);


namespace App\Domain\User\Service;


use App\Domain\User\Entity\User;
use App\Domain\User\Repository\UserRepository;
use App\Domain\User\Repository\UserRepositoryInterface;
use App\Domain\User\Service\Contracts\UserCreatorInterface;
use Doctrine\ORM\EntityManagerInterface;

class UserCreator implements UserCreatorInterface
{
    private UserRepositoryInterface $userRepository;


    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function create(User $user)
    {
        $this->userRepository->save($user);
    }
}