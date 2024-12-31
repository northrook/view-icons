<?php

declare( strict_types = 1 );

namespace Core\View;

use Core\View\Html\Attributes;
use Core\View\Template\View;
use Override;
use Support\Normalize;

final class Icon extends View
{
    public readonly Attributes $attributes;

    public readonly bool $isValid;

    /**
     * @param string                                                               $svg
     * @param array<string, null|array<array-key, string>|bool|string>|Attributes  $attributes
     */
    public function __construct(
            private string     $svg,
            array | Attributes $attributes = [],
    )
    {
        $this->attributes = Attributes::from( $attributes );

        $this->svg = Normalize::whitespace( $this->svg );

        $this->isValid = !empty( $this->svg );

        if ( $this->isValid ) {
            $this->attributes->class->add( 'icon', true );
        }
    }

    /**
     *
     * @return string valid `svg` element, or empty on error
     */
    #[Override]
    public function __toString()
    {
        if ( !$this->isValid ) {
            return '';
        }
        return "<svg{$this->attributes}>{$this->svg}</svg>";
    }
}
