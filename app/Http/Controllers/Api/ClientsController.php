<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientsController extends Controller
{
    
    public function index()
    {
        $client = Client::with('prospects')
        ->select('id','name', 'cpf', 'status')
        ->get();
        return response([
            'client' => $client
        ]);
    }
   
    public function store(Request $request)
    {
        $client = Client::create($request->all());

        return response([
            'message' => 'cadastro realizado com sucesso'
        ]);
    }

    public function show($name)
    {
        $client = Client::where('name', $name)
        ->select('id','name', 'cpf', 'status')
        ->get();
        return response([
            'client' => $client
        ]);
    }

    public function showId($id)
    {
        $client = Client::find($id);
        return response([
            'client' => $client
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = [
            'name' => $request->name,
            'cpf' => $request->cpf,
            'telephone' => $request->telephone
        ];

        Client::where('id', $id)->update($data);
        return response([
            'message' => 'Dado atualizado com sucesso'
        ]);
    }

    public function destroy($id)
    {
        Client::where('id', $id)->delete();
        return response([
            'message' => 'Dado deletado com sucesso'
        ]);
    }
}
