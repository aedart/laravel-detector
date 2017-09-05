[![Build Status](https://travis-ci.org/aedart/laravel-detector.svg?branch=master)](https://travis-ci.org/aedart/laravel-detector)
[![Latest Stable Version](https://poser.pugx.org/aedart/laravel-detector/v/stable)](https://packagist.org/packages/aedart/laravel-detector)
[![Total Downloads](https://poser.pugx.org/aedart/laravel-detector/downloads)](https://packagist.org/packages/aedart/laravel-detector)
[![Latest Unstable Version](https://poser.pugx.org/aedart/laravel-detector/v/unstable)](https://packagist.org/packages/aedart/laravel-detector)
[![License](https://poser.pugx.org/aedart/laravel-detector/license)](https://packagist.org/packages/aedart/laravel-detector)

## Laravel-Detector ##

Utility for detecting if a Laravel application is available or not. Can be used to determine a given component must perform logic based current Laravel application settings or not.

## Contents

- [When to use this](#when-to-use-this)
- [How to install](#how-to-install)
  * [For Laravel version 5.5.x](#for-laravel-version-55x)
  * [For Laravel version 5.4.x](#for-laravel-version-54x)
  * [For Laravel version 5.3.x](#for-laravel-version-53x)
  * [For Laravel version 5.2.x](#for-laravel-version-52x)
- [Quick start](#quick-start)
- [Contribution](#contribution)
  * [Bug Report](#bug-report)
  * [Fork, code and send pull-request](#fork--code-and-send-pull-request)
- [Acknowledgement](#acknowledgement)
- [Versioning](#versioning)
- [License](#license)

## When to use this ##

When you need to determine if a Laravel application instance is available or not and perform some kind of logic, depending on the application's availability.

## How to install ##

### For Laravel version 5.5.x ###

```
composer require aedart/laravel-detector 3.*
```

### For Laravel version 5.4.x ###

```
composer require aedart/laravel-detector 2.*
```

### For Laravel version 5.3.x ###

```
composer require aedart/laravel-detector 1.4.*
```

### For Laravel version 5.2.x ###

```
composer require aedart/laravel-detector 1.3.*
```

This package uses [composer](https://getcomposer.org/). If you do not know what that is or how it works, I recommend that you read a little about, before attempting to use this package.

## Quick start ##

In you component, use the `ApplicationDetectorTrait` and invoke the `isApplicationAvailable()` method

```php
<?php
use Aedart\Laravel\Detector\Traits\ApplicationDetectorTrait;

class MyHandler
{
    use ApplicationDetectorTrait;

    public function doSomething()
    {
        if($this->isApplicationAvailable()){
            // ... Laravel specific logic - not shown here ... //
        
            return true;
        }
        
        // ... Non-Laravel specific logic - not shown here ... //
        
        return false;
    }
}
```

## Contribution

Have you found a defect ( [bug or design flaw](https://en.wikipedia.org/wiki/Software_bug) ), or do you wish improvements? In the following sections, you might find some useful information
on how you can help this project. In any case, I thank you for taking the time to help me improve this project's deliverables and overall quality.

### Bug Report

If you are convinced that you have found a bug, then at the very least you should create a new issue. In that given issue, you should as a minimum describe the following;

* Where is the defect located
* A good, short and precise description of the defect (Why is it a defect)
* How to replicate the defect
* (_A possible solution for how to resolve the defect_)

When time permits it, I will review your issue and take action upon it.

### Fork, code and send pull-request

A good and well written bug report can help me a lot. Nevertheless, if you can or wish to resolve the defect by yourself, here is how you can do so;

* Fork this project
* Create a new local development branch for the given defect-fix
* Write your code / changes
* Create executable test-cases (prove that your changes are solid!)
* Commit and push your changes to your fork-repository
* Send a pull-request with your changes
* _Drink a [Beer](https://en.wikipedia.org/wiki/Beer) - you earned it_ :)

As soon as I receive the pull-request (_and have time for it_), I will review your changes and merge them into this project. If not, I will inform you why I choose not to.

## Acknowledgement

* [Taylor Otwell](https://github.com/taylorotwell), for creating [Laravel](https://laravel.com) and especially the [Service Container](https://laravel.com/docs/5.4/container), that I'm using daily

## Versioning

This package follows [Semantic Versioning 2.0.0](http://semver.org/)

## License

[BSD-3-Clause](http://spdx.org/licenses/BSD-3-Clause), Read the LICENSE file included in this package