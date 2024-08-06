<?php

namespace App\Http\Controllers\Admin\Directory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Directory\TuKhoa\TuKhoaStoreRequest;
use App\Http\Requests\Admin\Directory\TuKhoa\TuKhoaUpdateRequest;
use App\Models\TuKhoa;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TuKhoaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $tuKhoa = TuKhoa::latest()->paginate(5);
        $value = ($request->input('page', 1) - 1) * 5;
        return view('admin.directory.tukhoa.index', compact('tuKhoa'))
            ->with('i', $value);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.directory.tukhoa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TuKhoaStoreRequest $tuKhoaRequest): RedirectResponse
    {
        TuKhoa::create($tuKhoaRequest->validated());
        return redirect()->route('admin.directory.tukhoa.index')
                        ->with('success', 'TuKhoa created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(TuKhoa $tuKhoa): View
    {
        return view('admin.directory.tukhoa.show', compact('tuKhoa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TuKhoa $tuKhoa): View
    {
        return view('admin.directory.tukhoa.show', compact('tuKhoa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TuKhoaUpdateRequest $tuKhoaRequest, TuKhoa $tuKhoa): RedirectResponse
    {
        $tuKhoa->update($tuKhoaRequest->validated());
        return redirect()->route('admin.directory.tukhoa.index')
                        ->with('success', 'TuKhoa updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TuKhoa $tuKhoa): RedirectResponse
    {
        $tuKhoa->delete();
        return redirect()->route('admin.directory.tukhoa.index')
                        ->with('success', 'TuKhoa deleted successfully.');
    }
}
