# MobileDetectModule

[![Build Status](https://travis-ci.org/nikolaposa/MobileDetectModule.svg?branch=master)](https://travis-ci.org/nikolaposa/MobileDetectModule)

MobileDetectModule is a ZF2 module which facilitates integration of a PHP MobileDetect class
([http://mobiledetect.net](http://mobiledetect.net)).

## Installation

Installation of this module should be performed via composer:

Add this project into your composer.json:

```json
"require": {
    "nikolaposa/mobile-detect-module": "~1.0"
}
```

Tell composer to download MobileDetectModule by running update command:

```bash
$ php composer.phar update
```

For more information about composer itself, please refer to [getcomposer.org](http://getcomposer.org/).

**Heads up! Composer autoloader must be utilized in your application so that MobileDetect dependency
of this module can be loaded properly.**

### Enable the module in your `application.config.php`:

```php
<?php
return array(
    'modules' => array(
        // ...
        'MobileDetectModule',
    ),
    // ...
);
```

## Features

* Factory for creating MobileDetect service
* View helper and controller plugin for providing easier access to the MobileDetect service

## Usage

### MobileDetect service

The actual `Mobile_Detect` class instance will be available under the `MobileDetect` service. Refer to
the [Mobile Detect](http://mobiledetect.net/) project documenation for more information about its features.
```php
$mobileDetect = $serviceLocator->get('MobileDetect'); //`Mobile_Detect` class instance
if ($mobileDetect->isMobile()) {
    //do something
}
```

### View helper

View helper - `mobileDetect` is available for providing access to the MobileDetect service on the
view layer:
```php
echo $this->mobileDetect()->version('Android');
```

### Controller plugin

Controller plugin - `mobileDetect` is available for providing access to the MobileDetect service on
the controller layer:
```php
if ($this->mobileDetect()->isTablet()) {
    //do something
}
```