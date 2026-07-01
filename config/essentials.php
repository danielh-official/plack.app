<?php

declare(strict_types=1);

use NunoMaduro\Essentials\Configurables\PreventStrayRequests;
use NunoMaduro\Essentials\Configurables\Unguard;

return [
    Unguard::class => true,
    PreventStrayRequests::class => false,
];
