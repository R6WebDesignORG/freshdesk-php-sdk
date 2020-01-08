<?php

namespace Freshdesk\Resources;

use Freshdesk\Resources\Traits\AllTrait;
use Freshdesk\Resources\Traits\CreateTrait;

/**
 * Conversation resource
 *
 * This provides access to the agent resources
 *
 * @package Api\Resources
 */
class SatisfactionRating extends AbstractResource
{

    use AllTrait, CreateTrait;

    /**
     * The resource endpoint
     * @internal
     * @var string
     */
    protected $endpoint = '/satisfaction_ratings';

    /**
     * The surveys resource endpoint
     *
     * @var string
     * @internal
     */
    private $surveysEndpoint = '/surveys';

    /**
     * Creates the survey endpoint
     * @return string
     * @internal
     */
    protected function surveysEndpoint()
    {
        return $this->surveysEndpoint;
    }
}
