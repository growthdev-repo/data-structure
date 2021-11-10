<?php

declare(strict_types=1);

namespace Growthdev\DataStructure\Stack;

class Stack implements Collection, Countable, Iterator
{
    private int $count = 0;
    private int $position = 0;
    private ?Node $node = null;
    private ?Node $lastNode = null;

    public function peek(): ?ValueObject
    {
        return $this->node->getValue();
    }

    public function push(ValueObject $value): void
    {
        $this->node = new Node($value, $this->node);
        $this->lastNode = $this->node;

        $this->count++;
    }

    public function pop(): ?ValueObject
    {
        if ($this->count === 0) {
            return null;
        }

        $node = $this->node;
        $this->node = $this->node->getNext();
        $this->count--;

        return $node->getValue();
    }

    public function count(): int
    {
        return $this->count;
    }

    public function hasNext(): bool
    {
        return $this->position < $this->count;
    }

    public function current(): ?ValueObject
    {
        return $this->node->getValue();
    }

    public function next(): void
    {
        $this->node = $this->node->getNext();
        $this->position++;
    }

    public function rewind(): void
    {
        $this->position = 0;
        $this->node = $this->lastNode;
        printf("\n 🔥 Rewind the Iterator to the first element...\n");
    }

    public function isEmpty(): bool
    {
        return $this->count === 0;
    }
}
