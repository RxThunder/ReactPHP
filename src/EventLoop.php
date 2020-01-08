<?php

declare(strict_types=1);

/*
 * This file is part of the Thunder micro CLI framework.
 * (c) Jérémy Marodon <marodon.jeremy@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace RxThunder\ReactPHP;

use React\EventLoop\Factory;
use React\EventLoop\LoopInterface;

final class EventLoop
{
    private static ?LoopInterface $loop = null;

    /**
     * @throws \Exception
     */
    public static function replaceLoop(LoopInterface $loop): void
    {
        if (static::$loop === null) {
            static::$loop = $loop;
        }

        if (static::$loop !== $loop) {
            throw new \Exception('Two different loop instances created. Something is not right.');
        }
    }

    public static function loop(): LoopInterface
    {
        if (static::$loop) {
            return static::$loop;
        }

        static::$loop = Factory::create();

        return static::$loop;
    }
}
