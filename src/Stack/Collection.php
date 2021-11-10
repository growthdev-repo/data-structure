<?php

declare(strict_types=1);

namespace Growthdev\DataStructure\Stack;

interface Collection
{
    public function peek(): ?ValueObject;
    
    public function push(ValueObject $item): void;

    public function pop(): ?ValueObject;
}
