<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GraphQL\GraphQL;
use graphql\Schema; 

class GraphQlController extends Controller
{
    public function handle(Request $request)
    {
        // Obtén la consulta GraphQL de la solicitud
        $query = $request->input('query');

        // Ejecuta la consulta GraphQL
        $result = GraphQL::executeQuery(Schema::get(), $query);

        // Devuelve la respuesta en formato JSON
        return response()->json($result);
    }
}
