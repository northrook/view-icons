<?php

declare(strict_types=1);

namespace Core\View;

use Core\View\{Template\View, Html\Attributes};
use Support\Normalize;

final class IconView extends View
{
    public readonly Attributes $attributes;

    public readonly bool $isValid;

    /**
     * @param string                                                              $svg
     * @param array<string, null|array<array-key, string>|bool|string>|Attributes $attributes
     */
    public function __construct(
        private string   $svg,
        array|Attributes $attributes = [],
    ) {
        $this->attributes = Attributes::from( $attributes );

        $this->svg = Normalize::whitespace( $this->svg );

        $this->isValid = $this->validate();

        if ( $this->isValid ) {
            $this->attributes->class->add( 'icon', true );
        }
    }

    /**
     * Returns a valid `<svg..>` HTML element if {@see self::$isValid}, else empty string.
     *
     * @return string
     */
    public function __toString()
    {
        if ( ! $this->isValid ) {
            return '';
        }
        return "<svg{$this->attributes}>{$this->svg}</svg>";
    }

    private function validate() : bool
    {
        // Check viewbox
        // ensure height/width set based on viewbox if not provided
        // ensure contains valid inner HTML, path, curve, etc
        // ensure no illegal internal tags; JavaScript etc
        return true;
    }
}
