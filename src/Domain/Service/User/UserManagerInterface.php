<?php
declare(strict_types=1);


namespace App\Domain\Service\User;


interface UserManagerInterface extends UserCreatorInterface, UserRegisterInterface, UserBlockerInterface, UserDeleterInterface
{

}