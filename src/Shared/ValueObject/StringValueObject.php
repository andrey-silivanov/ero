<?php

declare(strict_types = 1);

namespace App\Shared\Domain\ValueObject;

/**
 * Class StringValueObject
 * @package App\Shared\Domain\ValueObject
 */
abstract class StringValueObject
{
    /** @var string */
    protected string $value;

    /**
     * StringValueObject constructor.
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function value(): string
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function __toString():string
    {
        return $this->value();
    }
}
