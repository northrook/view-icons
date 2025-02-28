<?php

namespace Core\View\Interface;

use Core\Interface\IconProviderInterface;
use Psr\Cache\CacheItemPoolInterface;

interface IconServiceInterface extends IconProviderInterface
{
    /**
     * @param CacheItemPoolInterface $cache `readonly` render cache
     */
    public function __construct( CacheItemPoolInterface $cache );
}
