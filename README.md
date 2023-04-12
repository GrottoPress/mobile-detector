# Mobile Detector

## Description

Detect mobile devices and user agents. This is an extension of the [Mobile_Detect](https://github.com/serbanghita/Mobile-Detect) library

## Installation

Install via composer: `composer require grottopress/mobile-detector`

## Usage

```php
use GrottoPress\Mobile\Detector;

$detector = new Detector();

// Check if is iOS
if ($detector->isiOS()) {
    //
}

// Check if is android
if ($detector->isAndroidOS()) {
    //
}

// Check if is smart device
if ($detector->isSmart()) {
    //
}

// Check if is phone
if ($detector->isPhone()) {
    //
}

// Check if is tablet
if ($detector->isTablet()) {
    //
}

// Check if is Samsung tablet
if ($detector->isSamsungTablet()) {
    //
}

// Detect current device
$device = $detector->getDevice();

// Detect current browser
$browser = $detector->getBrowser();

// Detect current OS
$os = $detector->getOperatingSystem();

// More examples here: https://github.com/serbanghita/Mobile-Detect/wiki/Code-examples
```

## Development

Run tests with `composer run test`.

## Contributing

1. [Fork it](https://github.com/GrottoPress/mobile-detector/fork)
1. Switch to the `master` branch: `git checkout master`
1. Create your feature branch: `git checkout -b my-new-feature`
1. Make your changes, updating changelog and documentation as appropriate.
1. Commit your changes: `git commit`
1. Push to the branch: `git push origin my-new-feature`
1. Submit a new *Pull Request* against the `GrottoPress:master` branch.
