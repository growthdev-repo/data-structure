<?php

declare(strict_types=1);

namespace GrowthDev\DataStructure\Stack;

class Stack implements Collection, Countable, Iterator
{
    private int $count = 0;
    private ?object $firstItem = null;
    private ?object $nextItem = null;
    private ?object $lastItem = null;

    public function peek(): ?object
    {
        return $this->lastItem;
    }

    public function push(object $item): void
    {
        if ($this->firstItem === null) {
            $this->firstItem = $item;
            $this->lastItem = $item;
        } else {
            $this->nextItem = $item;
            $this->lastItem = $item;
        }
        $this->count++;
    }

    public function pop(): ?object
    {
        if ($this->firstItem === null) {
            return null;
        }

        $item = $this->firstItem;
        $this->firstItem = $this->nextItem;
        $this->nextItem = null;
        $this->count--;

        return $item;
    }

    public function count(): int
    {
        return $this->count;
    }

    public function hasNext(): bool
    {
        return $this->nextItem !== null;
    }

    public function current(): ?object
    {
        return $this->firstItem;
    }
}
