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

use Snide\Osrc\Hydrator\SimpleHydrator;

/**
 * Class RepositoryTest
 *
 * @author Pascal DENIS <pascal.denis@businessdecision.com>
 */
class RepositoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var User
     */
    protected $object;

    /**
     * Json data
     *
     * @var string
     */
    protected $json;

    /**
     * @var SimpleHydrator
     */
    protected $hydrator;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new User();
        $this->hydrator = new SimpleHydrator();

        $this->json = '{
              "connected_users": [
                {
                  "name": "pderoubaix",
                  "username": "pderoubaix"
                },
                {
                  "name": "Pascal Borreli",
                  "username": "pborreli"
                },
                {
                  "name": "Lukas Kahwe Smith",
                  "username": "lsmith77"
                },
                {
                  "name": "Christophe Coevoet",
                  "username": "stof"
                },
                {
                  "name": "Markus Staab",
                  "username": "staabm"
                }
              ],
              "gravatar": "2d381bfb272b280a63a96afdb94dc260",
              "name": "Pascal DENIS",
              "repositories": [
                {
                  "count": 42,
                  "repo": "itkg/consumer"
                },
                {
                  "count": 37,
                  "repo": "pdenis/scrutinizer-client"
                },
                {
                  "count": 35,
                  "repo": "pdenis/monitoring"
                },
                {
                  "count": 33,
                  "repo": "pdenis/TravinizerBundle"
                },
                {
                  "count": 31,
                  "repo": "pdenis/SnideTravinizerBundle"
                }
              ],
              "similar_users": [
                {
                  "name": "Pierre Klink",
                  "username": "pklink"
                },
                {
                  "name": "Mathieu Gagnon",
                  "username": "4d47"
                },
                {
                  "name": "CertaiN",
                  "username": "certainist"
                },
                {
                  "name": "Malte N",
                  "username": "hice3000"
                },
                {
                  "name": "AlloVince",
                  "username": "allovince"
                }
              ],
              "timezone": null,
              "usage": {
                "day": [
                  20,
                  25,
                  39,
                  32,
                  25,
                  50,
                  53,
                  44,
                  57,
                  40,
                  32,
                  43,
                  95,
                  90,
                  15,
                  12,
                  9,
                  2,
                  0,
                  0,
                  0,
                  1,
                  4,
                  9
                ],
                "events": [
                  {
                    "day": [
                      2,
                      16,
                      12,
                      21,
                      8,
                      28,
                      39,
                      28,
                      36,
                      32,
                      18,
                      26,
                      67,
                      70,
                      12,
                      11,
                      6,
                      1,
                      0,
                      0,
                      0,
                      0,
                      0,
                      0
                    ],
                    "total": 433,
                    "type": "PushEvent",
                    "week": [
                      110,
                      61,
                      44,
                      59,
                      40,
                      58,
                      61
                    ]
                  },
                  {
                    "day": [
                      11,
                      5,
                      17,
                      7,
                      14,
                      11,
                      10,
                      11,
                      14,
                      7,
                      11,
                      9,
                      20,
                      14,
                      3,
                      0,
                      2,
                      1,
                      0,
                      0,
                      0,
                      1,
                      4,
                      7
                    ],
                    "total": 179,
                    "type": "WatchEvent",
                    "week": [
                      43,
                      35,
                      22,
                      11,
                      21,
                      24,
                      23
                    ]
                  },
                  {
                    "day": [
                      7,
                      4,
                      3,
                      1,
                      2,
                      8,
                      4,
                      5,
                      6,
                      1,
                      2,
                      8,
                      7,
                      4,
                      0,
                      1,
                      1,
                      0,
                      0,
                      0,
                      0,
                      0,
                      0,
                      2
                    ],
                    "total": 66,
                    "type": "CreateEvent",
                    "week": [
                      10,
                      14,
                      10,
                      5,
                      8,
                      12,
                      7
                    ]
                  },
                  {
                    "day": [
                      0,
                      0,
                      5,
                      3,
                      0,
                      0,
                      0,
                      0,
                      0,
                      0,
                      1,
                      0,
                      1,
                      0,
                      0,
                      0,
                      0,
                      0,
                      0,
                      0,
                      0,
                      0,
                      0,
                      0
                    ],
                    "total": 10,
                    "type": "GistEvent",
                    "week": [
                      0,
                      1,
                      0,
                      0,
                      1,
                      8,
                      0
                    ]
                  },
                  {
                    "day": [
                      0,
                      0,
                      2,
                      0,
                      0,
                      3,
                      0,
                      0,
                      1,
                      0,
                      0,
                      0,
                      0,
                      1,
                      0,
                      0,
                      0,
                      0,
                      0,
                      0,
                      0,
                      0,
                      0,
                      0
                    ],
                    "total": 7,
                    "type": "DeleteEvent",
                    "week": [
                      0,
                      3,
                      0,
                      0,
                      2,
                      1,
                      1
                    ]
                  }
                ],
                "languages": [
                  {
                    "count": 513,
                    "language": "PHP",
                    "quantile": 21
                  },
                  {
                    "count": 71,
                    "language": "JavaScript",
                    "quantile": 100
                  },
                  {
                    "count": 44,
                    "language": "CSS",
                    "quantile": 100
                  },
                  {
                    "count": 4,
                    "language": "C",
                    "quantile": 100
                  },
                  {
                    "count": 3,
                    "language": "Shell",
                    "quantile": 100
                  },
                  {
                    "count": 3,
                    "language": "CoffeeScript",
                    "quantile": 100
                  },
                  {
                    "count": 2,
                    "language": "Ruby",
                    "quantile": 100
                  },
                  {
                    "count": 1,
                    "language": "Scala",
                    "quantile": 100
                  },
                  {
                    "count": 1,
                    "language": "Python",
                    "quantile": 100
                  },
                  {
                    "count": 1,
                    "language": "Perl",
                    "quantile": 100
                  },
                  {
                    "count": 1,
                    "language": "Java",
                    "quantile": 100
                  },
                  {
                    "count": 1,
                    "language": "Io",
                    "quantile": 100
                  },
                  {
                    "count": 1,
                    "language": "C++",
                    "quantile": 100
                  }
                ],
                "total": 697,
                "week": [
                  163,
                  114,
                  76,
                  76,
                  72,
                  104,
                  92
                ]
              },
              "username": "pdenis",
              "unknown_key": "fake"
            }';
    }

    public function testLoad()
    {
        $data = json_decode($this->json, true);
        $this->object = $this->hydrator->hydrate(new User(), $data);

        $this->assertEquals($data['connected_users'], $this->object->getConnectedUsers());
        $this->assertEquals($data['username'], $this->object->getUsername());
        $this->assertEquals($data['gravatar'], $this->object->getGravatar());
        $this->assertEquals($data['timezone'], $this->object->getTimezone());
        $this->assertEquals($data['name'], $this->object->getName());
        $this->assertEquals($data['similar_users'], $this->object->getSimilarUsers());
        $this->assertEquals($data['repositories'], $this->object->getRepositories());
        $this->assertEquals($data['usage']['languages'], $this->object->getLanguages());
        $this->assertEquals($data['usage']['events'][0], $this->object->getPushEvents());
        $this->assertEquals($data['usage']['events'][1], $this->object->getWatchEvents());
        $this->assertEquals($data['usage']['events'][2], $this->object->getCreateEvents());
        $this->assertEquals($data['usage']['events'][3], $this->object->getGistEvents());
        $this->assertEquals($data['usage']['events'][4], $this->object->getDeleteEvents());
    }
}