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

    public function show($id, Request $request)
    {
        $costumer = $this->costumer->with(['sales' => function ($query) use ($request) {
            if ($request->has(['y', 'm'])) {
                $year = substr($request->y, 1, 4);
                $yearRelation = $request->y[0];

                $month = substr($request->m, 1, 2);
                $monthRelation = $request->m[0];

                $query->whereMonth('created_at', $monthRelation, $month)
                    ->whereYear('created_at', $yearRelation, $year)
                    ->orderBy('created_at');
            }
        }])->find($id);

        if (is_null($costumer)) {
            return response()->json(['error' => 'costumer not found'], 404);
        }
        return response()->json($costumer);
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
