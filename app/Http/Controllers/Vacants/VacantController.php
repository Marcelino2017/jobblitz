<?php

namespace App\Http\Controllers\Vacants;

use App\Http\Controllers\Controller;
use App\Models\Vacant;
use Illuminate\Http\Request;

class VacantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('vacants.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vacants.create');
    }


    /**
     * Display the specified resource.
     */
    public function show(Vacant $vacant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vacant $vacant)
    {
        $this->authorize('update', $vacant);

        return view('vacants.edit', [
            'vacant' => $vacant
        ]);
    }
}
