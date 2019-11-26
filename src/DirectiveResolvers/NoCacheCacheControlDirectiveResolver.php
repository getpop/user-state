<?php
namespace PoP\UserState\DirectiveResolvers;

use PoP\CacheControl\DirectiveResolvers\AbstractCacheControlDirectiveResolver;

class NoCacheCacheControlDirectiveResolver extends AbstractCacheControlDirectiveResolver
{
    public static function getFieldNamesToApplyTo(): array
    {
        return [
            'me',
        ];
    }

    public function getMaxAge(): ?int
    {
        // Do not cache
        return 0;
    }
}
