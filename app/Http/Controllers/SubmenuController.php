<?php

namespace App\Http\Controllers;

use App\submenu;
use App\menu;
use Illuminate\Http\Request;

class SubmenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $submenus = submenu::with('menu')->orderBy('order','asc')->get();
        return view('BackEnd/submenu/index', compact('submenus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus= menu::pluck('name','id');
        return view('BackEnd/submenu/create', compact('menus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $submenu = $request->all();
        submenu::create($submenu);
        return redirect(route('submenu.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\submenu  $submenu
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\submenu  $submenu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menus= menu::pluck('name','id');
        $submenu=submenu::with(['menu'])->find($id);
        return view ('backend/submenu/edit',compact('submenu','menus'));
    }

/**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\submenu  $submenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $submenu = submenu::find($id);
        $data=$request->all();
        $submenu->update($data);
        session()->flash('msg','');
        return redirect(route('submenu.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\submenu  $submenu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        submenu::destroy($id);
        return redirect(route('submenu.index'));
    }
}
