<?php

namespace App\Http\Controllers\Curriculo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\curriculo\Curriculo;

class CriarCurriculoController extends Controller
{
    private $curriculo;

    public function __construct(Curriculo $curriculo){
        $this->curriculo = $curriculo;
    }

    public function __invoke(Request $request){
        try{
            $curriculo = $this->curriculo->create($request->only([
                'first_name',
                'last_name',
                'email',
                'confirmado'
            ]));
            return response()->json($curriculo, 201);
        } catch (Exception $e){
            return response()->json($e->getMessage());
        }
        return $request->all();
    }
}
