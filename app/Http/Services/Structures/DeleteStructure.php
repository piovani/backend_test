<?php

namespace Services\Structures;

use App\Models\Structure;

class DeleteStructure
{
    public function __invoke(Structure $structure): bool
    {
        return $structure->delete();
    }
}
