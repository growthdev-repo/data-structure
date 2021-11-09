<?php

declare(strict_types=1);

namespace GrowthDev\DataStructure\Tests\Stack;

use GrowthDev\DataStructure\Stack\Stack;
use GrowthDev\DataStructure\Stack\ValueObject;
use PHPUnit\Framework\TestCase;

final class StackTest extends TestCase
{
    private Stack $stack;

    public function setup(): void
    {
        $this->stack = new Stack();
    }

    public function testPush(): void
    {
        $this->stack->push(new ValueObject('Walmir'));
        $this->stack->push(new ValueObject('Silva'));
        $this->stack->push(new ValueObject('Growth'));
        $this->stack->push(new ValueObject('Dev'));
        $this->stack->push(new ValueObject('Example'));
        $this->stack->push(new ValueObject('Stack'));

        $this->assertEquals(7, $this->stack->count());
    }
}
