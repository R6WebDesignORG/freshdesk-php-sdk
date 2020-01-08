<?php

namespace Freshdesk\Resources;

use Freshdesk\Resources\Traits\AllTrait;

/**
 * Survey resource
 *
 * Provides access to survey resources
 *
 * @package Api\Resources
 */
class Survey extends AbstractResource
{

    use AllTrait;

    /**
     * The resource endpoint
     *
     * @var string
     */
    protected $endpoint = '/surveys';

    /**
     * Lists satisfaction survey results
     *
     * @param array|null $query
     * @return mixed|null
     * @throws \Freshdesk\Exceptions\AccessDeniedException
     * @throws \Freshdesk\Exceptions\ApiException
     * @throws \Freshdesk\Exceptions\AuthenticationException
     * @throws \Freshdesk\Exceptions\ConflictingStateException
     * @throws \Freshdesk\Exceptions\NotFoundException
     * @throws \Freshdesk\Exceptions\RateLimitExceededException
     * @throws \Freshdesk\Exceptions\UnsupportedContentTypeException
     * @throws \Freshdesk\Exceptions\MethodNotAllowedException
     * @throws \Freshdesk\Exceptions\UnsupportedAcceptHeaderException
     * @throws \Freshdesk\Exceptions\ValidationException
     */
    public function satisfactionRatings(array $query = null)
    {
        $end = '/satisfaction_ratings';

        return $this->api()->request('GET', $this->endpoint($end), null, $query);
    }
}
