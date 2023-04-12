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
