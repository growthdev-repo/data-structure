<?php

declare(strict_types=1);

namespace GrowthDev\DataStructure\Stack;

interface Collection
{
    public function peek(): ?object;
    
    public function push(object $item): void;

    public function pop(): ?object;
}
