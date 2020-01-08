<p align="center"><img src="./resources/thunder-logo.svg"></p>

<p align="center">
<a href="https://packagist.org/packages/rxthunder/react-php"><img src="https://poser.pugx.org/rxthunder/react-php/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/rxthunder/react-php"><img src="https://poser.pugx.org/rxthunder/react-php/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/rxthunder/react-php"><img src="https://poser.pugx.org/rxthunder/react-php/license.svg" alt="License"></a>
</p>
<p align="center">
<a href="https://travis-ci.org/RxThunder/ReactPHP"><img src="https://travis-ci.org/RxThunder/ReactPHP.svg?branch=master" alt="Build"></a>
<p align="center">


## Infos

The difference with [voryx/event-loop](https://packagist.org/packages/voryx/event-loop) implementation is that this one doesn't start automatically the loop.

## Installation

```
composer install rxthunder/react-php
```

## Usage

```php
use React\EventLoop\Factory;
use RxThunder\ReactPHP\EventLoop;

$ev = EventLoop::getLoop();

$other_ev = Factory::create();
EventLoop::setLoop($other_ev);
```
