<?php

namespace App\Http\Controllers\Curriculo;

use App\Http\Controllers\Controller;
use App\Models\Curriculo\Curriculo;
use Illuminate\Http\Request;

class ListarCurriculosController extends Controller
{
    private $curriculos;

    public function __construct(Curriculo $curriculos){
        $this->curriculos = $curriculos;
    }

    public function __invoke(Request $request)
    {
        $curriculos = $this->curriculos->get();
        return response() ->json ($curriculos, 200);
    }
}
