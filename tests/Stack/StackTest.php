<?php

declare(strict_types=1);

namespace GrowthDev\DataStructure\Tests\Stack;

use GrowthDev\DataStructure\Stack\Stack;
use PHPUnit\Framework\TestCase;

final class StackTest extends TestCase
{
    public function testPush(): void
    {
        $stack = new Stack();
        $stack->push(1);
        $stack->push(2);
    }
}