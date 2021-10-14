<?php
declare(strict_types = 1);

namespace App\Application\CommandBus\Command;


use App\Components\Traits\ConstructableFromArrayTrait;
use App\Shared\Bus\Command\Command;

abstract class AbstractCommand implements Command
{
    use ConstructableFromArrayTrait;
}