<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Prospect;

class ProspectsController extends Controller
{
   
    public function index()
    {
        $prospect = Prospect::with('client')->get();
        return response([
            'prospect' => $prospect
        ]);
    }

    public function store(Request $request)
    {
        $prospect = Prospect::create($request->all());
        return response([
            'message' => 'Cadastro realizado com sucesso'
        ]);
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $data = [
            'activityBranch' => $request->activityBranch,
            'whereFoundUs' => $request->whereFoundUs,
            'value' => $request->value,
        ];

        Prospect::where('id', $id)->update($data);
        return response([
            'message' => 'Dado atualizado com sucesso'
        ]);
    }

    public function destroy($id)
    {
        Prospect::where('id', $id)->delete();
        return response([
            'message' => 'Dado excluido com sucesso'
        ]);
    }
}
