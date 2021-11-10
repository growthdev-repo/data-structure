<?php

declare(strict_types=1);

namespace Growthdev\DataStructure\Stack;

final class ValueObject
{
    private string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
