<?php
declare(strict_types=1);


namespace App\Application\CommandBus\Command;


use Symfony\Component\Validator\Constraints as Assert;

final class AuthenticateUserCommand extends AbstractCommand
{
    /**
     * @var string
     * @Assert\NotBlank()
     */
    private ?string $phone;

    private ?string $email;

    private string $password;

    public function __construct(?string $phone, ?string $email, string $password)
    {
        $this->phone = $phone;
        $this->email = $email;
        $this->password = $password;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }
}