<?php

namespace SocialiteProviders\Manager\Contracts\OAuth2;

use Laravel\Socialite\Two\ProviderInterface as SocialiteOauth2ProviderInterface;
use Psr\Http\Message\ResponseInterface;

interface RevokeTokensInterface extends SocialiteOauth2ProviderInterface
{
    /**
     * @param string $token
     * @param string $hint optional hint, either 'access_token' or 'refresh_token'
     * @return ResponseInterface
     */
    public function revokeToken(string $token, string $hint = '') : ResponseInterface;

    /**
     * @param string $token
     * @param string $hint optional hint, either 'access_token' or 'refresh_token'
     * @return array
     */
    public function getRevokeTokenResponse(string $token, string $hint = '') : array;
}
