<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RwRequest;
use App\Models\Rw;
use Illuminate\Http\Request;

class RwController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['rws']    = Rw::latest()->paginate(5);
        $data['title']  = 'Data RW';
        return view('admin.rw.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['title'] = 'Tambah Data RW';
        return view('admin.rw.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RwRequest $request)
    {
        Rw::create($request->validated());
        return to_route('admin.wilayah.rw.index')->with('success', 'Data RW berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rw $rw)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rw $rw)
    {
        $data['rw']    = $rw;
        $data['title']  = 'Edit Data RW';
        return view('admin.rw.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RwRequest $request, Rw $rw)
    {
        $rw->update($request->validated());
        return to_route('admin.wilayah.rw.index')->with('success', 'Data RW berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rw $rw)
    {
        $rw->delete();
        return to_route('admin.wilayah.rw.index')->with('success', 'Data RW berhasil dihapus');
    }
}
