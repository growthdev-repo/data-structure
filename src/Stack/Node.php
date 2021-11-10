<?php

declare(strict_types=1);

namespace Growthdev\DataStructure\Stack;

final class Node
{
    private ?ValueObject $value;
    private ?Node $next;

    public function __construct(ValueObject $value, ?Node $next = null)
    {
        $this->value = $value;
        $this->next = $next;
    }

    public function getNext(): ?Node
    {
        return $this->next;
    }
    
    public function getValue(): ?ValueObject
    {
        return $this->value;
    }
}
