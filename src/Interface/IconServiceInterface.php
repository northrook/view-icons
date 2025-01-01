<?php

declare( strict_types = 1 );

namespace Core\View\Interface;

use Symfony\Contracts\Cache\CacheInterface;

interface IconServiceInterface extends IconProviderInterface
{
    /**
     * @param CacheInterface $cache `readonly` render cache
     */
    public function __construct( CacheInterface $cache );
}
