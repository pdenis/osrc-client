osrc-client
==================

A PHP Client for [osrc.dfm.io](http://osrc.dfm.io) API

[![Build Status](https://travis-ci.org/pdenis/osrc-client.png)](https://travis-ci.org/pdenis/osrc-client)
[![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/pdenis/osrc-client/badges/quality-score.png?s=ea08a9a1eacbb47bedb5f378c405d1cc5c386283)](https://scrutinizer-ci.com/g/pdenis/osrc-client/)
[![Code Coverage](https://scrutinizear-ci.com/g/pdenis/osrc-client/badges/coverage.png?s=57b976790d6e1080691391b59e991f22c991bb50)](https://scrutinizer-ci.com/g/pdenis/osrc-client/)

## Installation

### Installation by Composer

If you use composer, add osrc-client library as a dependency to the composer.json of your application

```php
    "require": {
        ...
        "snide/php-osrc-client": "dev-master"
        ...
    },

```

## Usage

To access http://osrc.dfm.io/username.json, you can do :

```php
<?php

    $client = new Snide\Osrc\Client();
    $repo = $client->fetchUser(new User('username'));
```

That's all!