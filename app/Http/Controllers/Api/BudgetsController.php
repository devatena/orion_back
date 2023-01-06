<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Budget;

class BudgetsController extends Controller
{
  
    public function index()
    {
        $budget = Budget::all();
        return response([
            'budget' => $budget
        ]);
    }

    public function store(Request $request)
    {
        $budget = Budget::create($request->all());
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
        Budget::where('id', $id)->update($request->all());
        return response([
            'message' => 'dado atualizado com sucesso'
        ]); 
    }

    public function destroy($id)
    {
        Budget::where('id', $id)->delete();
        return response([
            'message' => 'Dado excluido com sucesso'
        ]);
    }
}
