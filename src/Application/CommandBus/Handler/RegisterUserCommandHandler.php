<?php


namespace App\Application\CommandBus\Handler;


use App\Application\CommandBus\Command\RegisterUserCommand;
use App\Application\Factory\UserFactory;
use App\Domain\Entity\User;
use App\Domain\Service\User\UserManagerInterface;
use App\Domain\VO\User\UserPhoneVO;
use App\Shared\Bus\Command\CommandHandler;

final class RegisterUserCommandHandler implements CommandHandler
{

    private $userManager;

    /**
     * RegisterUserCommandHandler constructor.
     */
    public function __construct(UserManagerInterface $userManager)
    {
        $this->userManager = $userManager;
    }

    public function handle(RegisterUserCommand $command)
    {
        $this->userManager->register(
            UserFactory::make(
                $command->getUsername(),
                $command->getEmail(),
                $command->getPhone()
            )
        );
    }
}