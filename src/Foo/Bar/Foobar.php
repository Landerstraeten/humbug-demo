<?php

declare(strict_types=1);

namespace Foo\Bar;

class Foobar
{
    public function foobar(int $number): int
    {
        if ($number > 0) {
            return $number + 1;
        }

        if ($number === 0) {
            return 0;
        }

        return $number - 1;
    }
}
