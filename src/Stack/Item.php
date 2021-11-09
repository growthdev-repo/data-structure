<?php

declare(strict_types=1);

namespace Growthdev\DataStructure\Stack;

final class Item
{
    private ?Item $next = null;
    private ?object $value;

    public function __construct(object $value, ?Item $next = null)
    {
        $this->value = $value;
        $this->next = $next;
    }

    public function getNext(): ?Item
    {
        return $this->next;
    }
    
    public function getValue(): ?object
    {
        return $this->value;
    }
}
