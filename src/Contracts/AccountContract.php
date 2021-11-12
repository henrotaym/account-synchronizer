<?php
namespace Deegitalbe\TrustupProAppCommon\Contracts;

use Illuminate\Support\Carbon;

/**
 * Representing an account that's storable.
 */
interface AccountContract
{
    /**
     * Account uuid that should be used to retrieve account details.
     * @return string
     */
    public function getUuid(): string;
    
    /**
     * Application key linked to account.
     * @return string
     */
    public function getAppKey(): string;

    /**
     * Professional authorization_key linked to account.
     * @return string
     */
    public function getAuthorizationKey(): string;

    /**
     * Subscription id linked to account.
     * @return string|null
     */
    public function getSubscriptionId(): ?string;

    /**
     * Subscription status linked to account.
     * @return string|null
     */
    public function getSubscriptionStatus(): ?string;

    /**
     * Account creation date.
     * @return Carbon
     */
    public function getCreatedAt(): Carbon;

    /**
     * Getting first account matching given uuid.
     * 
     * @param string $uuid
     * @return AccountContract|null Null if no account found.
     */
    public static function firstMatchingUuid(string $uuid): ?AccountContract;
}