<?php

namespace App\Http\Controllers;

use App\Models\Costumer;
use Illuminate\Http\Request;

class CostumerController extends Controller
{
    private Costumer $costumer;

    public function __construct(Costumer $costumer)
    {
        $this->costumer = $costumer;
    }

    public function index()
    {
        return response()->json($this->costumer->get(['id', 'name', 'cpf']));
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
