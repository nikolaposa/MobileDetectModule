# MobileDetectModule

MobileDetectModule is a ZF2 Module which facilitates integration of a PHP MobileDetect class 
([http://mobiledetect.net](http://mobiledetect.net)).

## Installation

Installation of this module should be performed via composer:

Add this project into your composer.json:

```json
"require": {
    "nikolaposa/mobile-detect-module": "dev-master"
}
```

Tell composer to download MobileDetectModule by running update command:

```bash
$ php composer.phar update
```
    
For more information about composer itself, please refer to [getcomposer.org](http://getcomposer.org/).

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

The actual Mobile_Detect class instance will be available under the `MobileDetect` service. Refer to 
the [Mobile Detect](http://mobiledetect.net/) project documenation for more information about its features.

### View helper

View helper - `mobileDetect` is available for providing access to the MobileDetect service on the 
view layer:
```php
$this->mobileDetect()->isTablet();
```

### Controller plugin

Controller plugin - `mobileDetect` is available for providing access to the MobileDetect service on 
the controller layer:
```php
if ($this->mobileDetect()->isTablet()) {
    //do something
}
```