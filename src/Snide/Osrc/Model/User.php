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
    protected $usage;

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
        $this->usage = $usage;
    }

    /**
     * @return array
     */
    public function getUsage()
    {
        return $this->usage;
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
}