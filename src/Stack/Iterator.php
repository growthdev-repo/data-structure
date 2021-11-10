<?php

declare(strict_types=1);

namespace Growthdev\DataStructure\Stack;

interface Iterator
{
    public function hasNext(): bool;

    public function current(): ?ValueObject;

    public function next(): void;

    public function rewind(): void;
}
