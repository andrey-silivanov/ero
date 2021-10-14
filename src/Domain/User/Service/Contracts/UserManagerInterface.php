<?php
declare(strict_types=1);


namespace App\Domain\User\Service\Contracts;


interface UserManagerInterface extends UserCreatorInterface, UserRegisterInterface, UserBlockerInterface, UserDeleterInterface
{

}