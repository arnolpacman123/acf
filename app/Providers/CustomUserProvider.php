<?php

namespace App\Providers;

use Illuminate\Auth\EloquentUserProvider as UserProvider;
use Illuminate\Contracts\Auth\Authenticatable as UserContract;

class CustomUserProvider extends UserProvider
{

    /**
     * Overrides the framework defaults validate credentials method
     *
     * @param UserContract $user
     * @param array $credentials
     * @return bool
     */
    public function validateCredentials(UserContract $user, array $credentials): bool
    {
        $plain = $credentials['password'];

        // PUT YOUR CUSTOM VALIDATION HERE

        return $this->hasher->check($plain, $user->getAuthPassword());
    }

    public function retrieveByCredentials(array $credentials)
    {
        if (isset($credentials['password'])) {
            unset($credentials['password']);
        }

        return parent::retrieveByCredentials($credentials);
    }

    function retrieveById($identifier)
    {
        return $this->createModel()->newQuery()->where('ci', $identifier)->first();
    }
}
