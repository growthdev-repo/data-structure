<?php

declare(strict_types=1);

namespace Growthdev\DataStructure\Stack;

class Stack implements Collection, Countable, Iterator
{
    private int $count = 0;
    private int $position = 0;
    private ?Item $item = null;

    public function peek(): ?object
    {
        return $this->item->getValue();
    }

    public function push(object $item): void
    {
        $this->item = new Item($item, $this->item);
        $this->count++;
    }

    public function pop(): ?object
    {
        if ($this->count === 0) {
            return null;
        }

        $item = $this->item;
        $this->item = $this->item->getNext();
        $this->count--;

        return $item->getValue();
    }

    public function count(): int
    {
        return $this->count;
    }

    public function hasNext(): bool
    {
        return $this->count > $this->position;
    }

    public function current(): ?object
    {
        return $this->item->getValue();
    }

    public function next(): void
    {
        $this->item = $this->item->getNext();
        $this->position++;
    }

    public function isEmpty(): bool
    {
        return $this->count === 0;
    }
}
