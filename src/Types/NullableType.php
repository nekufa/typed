<?php

declare(strict_types=1);

namespace Spatie\Typed\Types;

final class NullableType implements Type
{
    /**
     * @var Type|callable
     */
    private $type;

    public function __construct(Type $type)
    {
        $this->type = $type;
    }

    public function __invoke($value)
    {
        if ($value === null) {
            return;
        }

        return ($this->type)($value);
    }

    public function getType(): Type
    {
        return $this->type;
    }

    public function nullable(): self
    {
        return $this;
    }
}
