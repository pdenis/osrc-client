<?php

/*
 * This file is part of the Snide osrc-client package.
 *
 * (c) Pascal DENIS <pascal.denis.75@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Snide\Osrc\Model;

/**
 * Class User
 *
 * @author Pascal DENIS <pascal.denis.75@gmail.com>
 */
class User
{
    /**
     * @var string
     */
    protected $username;

    /**
     * @var string
     */
    protected $gravatar;

    /**
     * @var array
     */
    protected $connectedUsers;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var array
     */
    protected $repositories;

    /**
     * @var array
     */
    protected $similarUsers;

    /**
     * @var string
     */
    protected $timezone;

    /**
     * @var array
     */
    protected $pushEvents;

    /**
     * @var array
     */
    protected $watchEvents;

    /**
     * @var array
     */
    protected $createEvents;

    /**
     * @var array
     */
    protected $gistEvents;

    /**
     * @var array
     */
    protected $deleteEvents;

    /**
     * @var array
     */
    protected $languages;

    /**
     * Constructor
     *
     * @param string $username
     */
    public function __construct($username = null)
    {
        $this->username = $username;
    }

    /**
     * @param array $connectedUsers
     */
    public function setConnectedUsers($connectedUsers)
    {
        $this->connectedUsers = $connectedUsers;
    }

    /**
     * @return array
     */
    public function getConnectedUsers()
    {
        return $this->connectedUsers;
    }

    /**
     * @param string $gravatar
     */
    public function setGravatar($gravatar)
    {
        $this->gravatar = $gravatar;
    }

    /**
     * @return string
     */
    public function getGravatar()
    {
        return $this->gravatar;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param array $repositories
     */
    public function setRepositories($repositories)
    {
        $this->repositories = $repositories;
    }

    /**
     * @return array
     */
    public function getRepositories()
    {
        return $this->repositories;
    }

    /**
     * @param array $similarUsers
     */
    public function setSimilarUsers($similarUsers)
    {
        $this->similarUsers = $similarUsers;
    }

    /**
     * @return array
     */
    public function getSimilarUsers()
    {
        return $this->similarUsers;
    }

    /**
     * @param string $timezone
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;
    }

    /**
     * @return string
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * @param array $usage
     */
    public function setUsage($usage)
    {
        $this->loadEvents($usage['events']);
        $this->setLanguages($usage['languages']);
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param array $createEvents
     */
    public function setCreateEvents($createEvents)
    {
        $this->createEvents = $createEvents;
    }

    /**
     * @return array
     */
    public function getCreateEvents()
    {
        return $this->createEvents;
    }

    /**
     * @param array $deleteEvents
     */
    public function setDeleteEvents($deleteEvents)
    {
        $this->deleteEvents = $deleteEvents;
    }

    /**
     * @return array
     */
    public function getDeleteEvents()
    {
        return $this->deleteEvents;
    }

    /**
     * @param array $gistEvents
     */
    public function setGistEvents($gistEvents)
    {
        $this->gistEvents = $gistEvents;
    }

    /**
     * @return array
     */
    public function getGistEvents()
    {
        return $this->gistEvents;
    }

    /**
     * @param array $languages
     */
    public function setLanguages($languages)
    {
        $this->languages = $languages;
    }

    /**
     * @return array
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * @param array $pushEvents
     */
    public function setPushEvents($pushEvents)
    {
        $this->pushEvents = $pushEvents;
    }

    /**
     * @return array
     */
    public function getPushEvents()
    {
        return $this->pushEvents;
    }

    /**
     * @param array $watchEvents
     */
    public function setWatchEvents($watchEvents)
    {
        $this->watchEvents = $watchEvents;
    }

    /**
     * @return array
     */
    public function getWatchEvents()
    {
        return $this->watchEvents;
    }

    /**
     * Load events
     *
     * @param array $events
     */
    protected function loadEvents(array $events = array())
    {
        foreach ($events as $event) {
            $method = 'set'.$event['type'].'s';
            $this->$method($event);
        }
    }
}