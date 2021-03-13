<?php

namespace Services\Structures;

use App\Models\Structure;
use App\Http\Services\Structures\Structure as StructureService;

class CreateStructure extends StructureService
{
    public function __invoke(array $data): ?Structure
    {
        $structure = new Structure($data);

        $structure = $this->checkExpired($structure);

        return $structure->save() ? $structure : null;
    }
}
