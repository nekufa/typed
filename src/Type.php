<?php

declare(strict_types=1);

namespace Spatie\Typed;

use Spatie\Typed\Types\NullType;

interface Type
{
    public function nullable(): NullType;
}
