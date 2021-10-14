<?php
declare(strict_types=1);

namespace App\Application\CommandBus\Handler;

use App\Application\CommandBus\Command\RegisterUserCommand;
use App\Domain\User\Factory\UserFactory;
use App\Domain\User\Service\Contracts\UserManagerInterface;
use App\Shared\Bus\Command\CommandHandler;

final class RegisterUserCommandHandler implements CommandHandler
{

    private $userManager;


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
                $command->getPhone(),
                $command->getPassword()
            )
        );
    }
}