<?php

namespace App\Http\Services\Structures;

use App\Models\Structure as StructureModel;
use Carbon\Carbon;

class Structure
{
    protected function checkExpired(StructureModel $structure)
    {
        if ($structure->created_at->diffInMonths(Carbon::now()) > 3) {
            $structure->expired = true;
        }

        return $structure;
    }
}
