<?php

namespace Glugox\FileDelta\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Glugox\FileDelta\FileDeltaManager
 */
class FileDelta extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'file-delta';
    }
}
