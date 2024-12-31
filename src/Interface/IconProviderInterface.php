<?php

namespace Core\View\Interface;

use Core\View\Html\Attributes;
use Core\View\IconView;
use Symfony\Contracts\Cache\CacheInterface;

interface IconProviderInterface
{
    public function has( string $icon ) : bool;

    public function get( string $icon, array | Attributes $attributes = [], ?string $fallback = null ) : IconView;
}
