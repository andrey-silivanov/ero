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
    protected $username;

    private $email;

    private $phone;

    public function __construct($username, $email, $phone)
    {
        $this->username = $username;
        $this->email = $email;
        $this->phone = $phone;
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
}