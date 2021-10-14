<?php
declare(strict_types=1);

namespace App\Application\CommandBus\Command;


use Symfony\Component\Validator\Constraints as Assert;


final class RegisterUserCommand extends AbstractCommand
{
    /**
     * @var string
     * @Assert\NotBlank()
     */
    private $username;

    private $email;

    private $phone;

    private $password;

    public function __construct($username, $email, $phone, $password)
    {
        $this->username = $username;
        $this->email = $email;
        $this->phone = $phone;
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    public function getPassword()
    {
        return $this->password;
    }
}