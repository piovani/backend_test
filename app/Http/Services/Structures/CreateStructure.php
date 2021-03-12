<?php

namespace Services\Structures;

use App\Models\Structure;

class CreateStructure
{
    public function __invoke(array $data): ?Structure
    {
        $structure = new Structure($data);

        return $structure->save() ? $structure : null;
    }
}
