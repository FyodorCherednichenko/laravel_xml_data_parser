<?php
declare(strict_types=1);

namespace App\QueryBuilders;

use Illuminate\Database\Eloquent\Builder;

abstract class AbstractQueryBuilder extends Builder
{
    public function existsByName(string $name): self
    {
        return $this->where('name', $name);
    }
}
