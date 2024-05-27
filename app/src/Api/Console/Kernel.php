<?php

declare(strict_types=1);

namespace Api\Console;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;

final readonly class Kernel extends BaseKernel
{
    use MicroKernelTrait;
}
