<?php

declare(strict_types=1);

namespace Foo\Bar;

use PHPUnit\Framework\TestCase;

class FoobarTest extends TestCase
{
    public function test_it_should_increase_a_positive_number()
    {
        $foobar = new Foobar();
        $this->assertSame(6,$foobar->foobar(5));
        $this->assertSame(2,$foobar->foobar(1));
    }

    public function test_it_should_decrease_a_negative_number()
    {
        $foobar = new Foobar();
        $this->assertSame(-11,$foobar->foobar(-10));
        $this->assertSame(-2,$foobar->foobar(-1));
    }

    public function test_it_should_return_zero_on_zero()
    {
        $foobar = new Foobar();
        $this->assertSame(0, $foobar->foobar(0));
    }
}
