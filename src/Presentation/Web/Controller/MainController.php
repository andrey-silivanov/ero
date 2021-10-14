<?php
declare(strict_types=1);


namespace App\Presentation\Web\Controller;


use SimpleBus\SymfonyBridge\Bus\CommandBus;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Class MainController
 * @package App\Presentation\Web\Controller
 */
class MainController extends AbstractController
{
    /**
     * @var CommandBus
     */
    protected CommandBus $commandBus;

    /**
     * MainController constructor.
     * @param CommandBus $commandBus
     */
    public function __construct(CommandBus $commandBus)
    {
        $this->commandBus = $commandBus;
    }
}