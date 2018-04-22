<?php namespace App\Http\Controllers;

use App\Tabletop;
use Illuminate\Http\Request;

class TabletopsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabletops = Tabletop::all();

        return view('tabletops.index', compact('tabletops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tabletops.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);

        $tabletop = Tabletop::create($request->all());

        return redirect('/tabletops/' . $tabletop->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tabletop $tabletop)
    {
        return view('tabletops.show', compact('tabletop'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tabletop $tabletop)
    {
        return view('tabletops.edit', compact('tabletop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tabletop $tabletop)
    {
        $tabletop->update($request->all());

        return redirect('/tabletops/' . $tabletop->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tabletop $tabletop)
    {
        $tabletop->delete();

        return redirect('/tabletops');
    }
}
