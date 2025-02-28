<?php

declare(strict_types=1);

namespace Core\View;

use Core\View\Element\Attributes;

/**
 * @internal
 *
 * @author Martin Nielsen <mn@northrook.com>
 */
final class Icon extends Element
{
    public readonly bool $isValid;

    /**
     * @param string     $svg
     * @param Attributes $attributes
     */
    public function __construct( string $svg, Attributes $attributes )
    {
        $this->isValid = $this->validate( $svg );

        $attributes->class->add( 'icon', true );
        parent::__construct( 'svg', $svg, $attributes );
    }

    private function validate( string $svg ) : bool
    {
        // Normalize HTML whitespace
        // $this->svg = (string) \preg_replace( '#\s+#', ' ', \trim( $svg ) );
        // Check viewbox
        // ensure height/width set based on viewbox if not provided
        // ensure contains valid inner HTML, path, curve, etc
        // ensure no illegal internal tags; JavaScript etc
        return true;
    }
}
