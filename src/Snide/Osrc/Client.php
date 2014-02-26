<?php

/*
 * This file is part of the Snide osrc-httpClient package.
 *
 * (c) Pascal DENIS <pascal.denis.75@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Snide\Osrc;

use Snide\Osrc\Model\User;
use Snide\Osrc\Hydrator\SimpleHydrator;
use Guzzle\Http\Client as GuzzleClient;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Class Client
 *
 * @author Pascal DENIS <pascal.denis.75@gmail.com>
 */
class Client
{
    /**
     * API URL
     *
     * @var string
     */
    protected $endpoint = 'http://osrc.dfm.io';

    /**
     * Object Hydrator
     *
     * @var SimpleHydrator
     */
    protected $hydrator;

    /**
     * Guzzle Client
     *
     * @var \Guzzle\Http\Client
     */
    protected $httpClient;

    /**
     * Constructor
     *
     * @param Hydrator\SimpleHydrator $hydrator
     */
    public function __construct(SimpleHydrator $hydrator = null)
    {
        if (null === $hydrator) {
            $hydrator = new SimpleHydrator();
        }

        $this->setHydrator($hydrator);

        $this->httpClient = new GuzzleClient($this->endpoint, array());
    }

    /**
     * Fetch data from User URL
     *
     * @param Model\User $user
     * @return Model\User
     */
    public function fetchUser(User $user)
    {
        $response = $this->getResponse(
            sprintf('%s.json',
                $user->getUsername()
            )
        );

        return $this->hydrator->hydrate($user, $response);
    }

    /**
     * Getter hydrator
     *
     * @return SimpleHydrator
     */
    public function getHydrator()
    {
        return $this->hydrator;
    }

    /**
     * Setter hydrator
     *
     * @param SimpleHydrator $hydrator
     */
    public function setHydrator(SimpleHydrator $hydrator)
    {
        $this->hydrator = $hydrator;
    }

    /**
     * Add Http client subscriber
     *
     * @param EventSubscriberInterface $subscriber
     */
    public function addSubscriber(EventSubscriberInterface $subscriber)
    {
        $this->httpClient->addSubscriber($subscriber);
    }

    /**
     * Get Response from API
     * Response is an array (Result of json_decode)
     *
     * @param string $uri API URI
     * @param array $queryParams Query params
     * @return mixed
     */
    protected function getResponse($uri, array $queryParams = array())
    {
        $request = $this->httpClient->get($uri, array(), array('query' => $queryParams));

        return $request->send()->json();
    }
}
