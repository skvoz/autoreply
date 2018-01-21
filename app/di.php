<?php

use function DI\object;

return [
    \Contracts\ConfigurationInterface::class => object(\Src\Configuration::class),
];