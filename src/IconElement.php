<?php

declare(strict_types=1);

namespace Core\View;

use Core\View\Element\Attributes;

/**
 * @internal
 *
 * @author Martin Nielsen <mn@northrook.com>
 */
final class IconElement extends ViewElement
{
    public readonly bool $isValid;

    /**
     * @param string                                                              $svg
     * @param array<string, null|array<array-key, string>|bool|string>|Attributes $attributes
     */
    public function __construct( private string $svg, array|Attributes $attributes = [] )
    {
        parent::__construct( 'svg', $attributes );

        $this->isValid = $this->validate();

        if ( $this->isValid ) {
            $this->attributes->class->add( 'icon', true );
            $this->content( $this->svg );
        }
    }

    private function validate() : bool
    {
        // Normalize HTML whitespace
        $this->svg = (string) \preg_replace( '#\s+#', ' ', \trim( $this->svg ) );
        // Check viewbox
        // ensure height/width set based on viewbox if not provided
        // ensure contains valid inner HTML, path, curve, etc
        // ensure no illegal internal tags; JavaScript etc
        return true;
    }
}
