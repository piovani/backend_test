<?php

namespace App\Http\Controllers;

use App\Http\Requests\StructureRequest;
use App\Models\Structure;
use Illuminate\Http\Request;
use Services\Structures\CreateStructure;
use Services\Structures\DeleteStructure;
use Services\Structures\UpdateStructure;

class StructureController extends Controller
{
    public function index()
    {
        return $this->jsonReponseData(Structure::all());
    }

    public function store(StructureRequest $request)
    {
        $data = $request->validated();

        return $this->jsonReponseData(call_user_func(new CreateStructure(), $data));
    }

    public function show(Structure $structure)
    {
        return $this->jsonReponseData($structure);
    }

    public function update(StructureRequest $request, Structure $structure)
    {
        $data = $request->validated();

        return $this->jsonReponseData(call_user_func(new UpdateStructure(), $structure, $data));
    }

    public function destroy(Structure $structure)
    {
        if (!call_user_func(new DeleteStructure(), $structure)) {
            return $this->jsonReponseData(null, 404);
        }

        return $this->jsonReponseData();
    }
}
