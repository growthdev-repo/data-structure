<?php

declare(strict_types=1);

namespace GrowthDev\DataStructure\Stack;

interface Iterator
{
    public function hasNext(): bool;

    public function current(): ?object;
}
