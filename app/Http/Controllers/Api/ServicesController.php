<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = Service::all();
        return response([
            'service' => $service
        ]);
    }

    public function store(Request $request)
    {
        $service = Service::create($request->all());
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
        Service::where('id', $id)->update($request->all());
        return response([
            'message' => 'Dado atualizado com sucesso'
        ]);
    }

    public function destroy($id)
    {
        Service::where('id',$id)->delete();
        return response([
            "Dado excluido com sucesso"
        ]);
    }
}
