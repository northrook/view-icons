<?php

namespace Core\View\Interface;

use Core\View\Element\Attributes;
use Core\View\Icon;

interface IconProviderInterface
{
    public function has( string $icon ) : bool;

    /**
     * @param string                                                              $icon
     * @param array<string, null|array<array-key, string>|bool|string>|Attributes $attributes
     * @param null|string                                                         $fallback
     *
     * @return null|Icon
     */
    public function get( string $icon, array|Attributes $attributes = [], ?string $fallback = null ) : ?Icon;
}
