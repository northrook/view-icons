<?php

declare(strict_types=1);

namespace Core\View\Interface;

use Core\View\Html\Attributes;
use Core\View\IconView;

interface IconProviderInterface
{
    public function has( string $icon ) : bool;

    /**
     * @param string                                                              $icon
     * @param array<string, null|array<array-key, string>|bool|string>|Attributes $attributes
     * @param null|string                                                         $fallback
     *
     * @return null|IconView
     */
    public function get( string $icon, array|Attributes $attributes = [], ?string $fallback = null ) : ?IconView;
}
