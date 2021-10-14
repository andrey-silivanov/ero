<?php
declare(strict_types=1);


namespace App\Application\CommandBus\Handler;


use App\Application\CommandBus\Command\AuthenticateUserCommand;
use App\Application\Security\WebAuthenticator;
use App\Shared\Bus\Command\CommandHandler;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

final class AuthenticateUserCommandHandler implements CommandHandler
{
    private $authenticationUtils;

    public function __construct(AuthenticationUtils $authenticationUtils)
    {
        $this->authenticationUtils = $authenticationUtils;
    }

    public function handle(AuthenticateUserCommand $command): void
    {
        dd($this->authenticationUtils);
        // TODO: Implement handle() method.
    }
}