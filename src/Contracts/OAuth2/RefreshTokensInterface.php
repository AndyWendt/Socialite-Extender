<?php

namespace SocialiteProviders\Manager\Contracts\OAuth2;

use Laravel\Socialite\Two\ProviderInterface as SocialiteOauth2ProviderInterface;
use Psr\Http\Message\ResponseInterface;

interface RefreshTokensInterface extends SocialiteOauth2ProviderInterface
{
    /**
     * @param string $refreshToken
     * @return ResponseInterface
     */
    public function refreshToken(string $refreshToken) : ResponseInterface;

    /**
     * @param string $refreshToken
     * @return array
     */
    public function getRefreshTokenResponse(string $refreshToken) : array;
}
