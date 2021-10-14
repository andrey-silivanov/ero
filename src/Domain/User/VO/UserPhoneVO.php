<?php
declare(strict_types = 1);

namespace App\Domain\User\VO;

use App\Shared\Domain\ValueObject\StringValueObject;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Embeddable()
 */
class UserPhoneVO extends StringValueObject
{
    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    protected string $phone;
}