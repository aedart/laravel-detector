## Laravel-Detector ##

Utility for detecting if a Laravel application is available or not. Can be used to determine a given component must perform logic based current Laravel application settings or not.

## Contents ##

[TOC]

## When to use this ##

When you need to determine if a Laravel application instance is available or not and perform some kind of logic, depending on the application's availability.

## How to install ##

### For Laravel version 5.1.x ###

```
#!console

composer require aedart/laravel-detector 1.1.*
```

### For Laravel version 5.0.x ###

```
#!console

composer require aedart/laravel-detector 1.0.*
```

This package uses [composer](https://getcomposer.org/). If you do not know what that is or how it works, I recommend that you read a little about, before attempting to use this package.

## Quick start ##

In you component, use the `ApplicationDetectorTrait` and invoke the `isApplicationAvailable()` method

```
#!php
<?php
use Aedart\Laravel\Detector\Traits\ApplicationDetectorTrait;

class MyHandler {

    use ApplicationDetectorTrait;

    public function doSomething(){
        if($this->isApplicationAvailable()){
            // ... Laravel specific logic - not shown here ... //
        
            return true;
        }
        
        // ... Non-Laravel specific logic - not shown here ... //
        
        return false
    }
}
```

## Acknowledgement ##
 
[Taylor Otwell et al.](http://laravel.com/) for one of the best PHP frameworks ever created.

## License ##

[BSD-3-Clause](http://spdx.org/licenses/BSD-3-Clause), Read the LICENSE file included in this package
