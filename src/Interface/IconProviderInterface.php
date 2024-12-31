<?php

namespace Core\View\Interface;

use Core\View\Icon;
use Symfony\Contracts\Cache\CacheInterface;

interface IconProviderInterface
{
    public function has( string $icon ) : bool;

    public function get( string $icon, array $attributes = [], ?string $fallback = null ) : Icon;
}
