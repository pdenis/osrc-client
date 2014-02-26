osrc-client
==================

A PHP Client for [osrc.dfm.io](http://osrc.dfm.io) API

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