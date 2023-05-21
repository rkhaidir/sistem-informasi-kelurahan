<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RtRequest;
use App\Models\Rt;
use App\Models\Rw;
use Illuminate\Http\Request;

class RtController extends Controller
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
        $data['rts']    = Rt::with('rw')->latest()->paginate(5);
        $data['title']  = 'Data RT';
        return view('admin.rt.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['rws']    = Rw::latest()->get();
        $data['title']  = 'Data RT';
        return view('admin.rt.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RtRequest $request)
    {
        Rt::create($request->validated());
        return to_route('admin.wilayah.rt.index')->with('success', 'Data RW berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rt $rt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rt $rt)
    {
        $data['rws']    = Rw::latest()->get();
        $data['rt']     = $rt;
        $data['title']  = 'Data RT';
        return view('admin.rt.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RtRequest $request, Rt $rt)
    {
        $rt->update($request->validated());
        return to_route('admin.wilayah.rt.index')->with('success', 'Data RT berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rt $rt)
    {
        $rt->delete();
        return to_route('admin.wilayah.rt.index')->with('success', 'Data RT berhasil dihapus');
    }
}
