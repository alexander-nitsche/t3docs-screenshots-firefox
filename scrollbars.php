<?php

require '/var/www/html/vendor/autoload.php';

use Facebook\WebDriver\Firefox\FirefoxOptions;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;

$serverUrl = 'http://firefox:4444/wd/hub';

// Firefox
$desiredCapabilities = DesiredCapabilities::firefox();
$desiredCapabilities->setCapability('acceptSslCerts', true);

$firefoxOptions = new FirefoxOptions();
$firefoxOptions->addArguments(['-headless']);
$desiredCapabilities->setCapability(FirefoxOptions::CAPABILITY, $firefoxOptions);

$driver = RemoteWebDriver::create($serverUrl, $desiredCapabilities);
$driver->get('http://t3docs-screenshots-firefox.ddev.site/scrollbars.html');
$driver->takeScreenshot('scrollbars.png');
$driver->quit();

