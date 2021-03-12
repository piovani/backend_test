<?php

namespace Services\Structures;

use App\Models\Structure;

class UpdateStructure
{
    public function __invoke(Structure $structure, array $data): ?Structure
    {
        $structure->update($data);

        return $structure->save() ? $structure : null;
    }
}
