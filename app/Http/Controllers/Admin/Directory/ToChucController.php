<?php

namespace App\Http\Controllers\Admin\Directory;

use App\Models\ToChuc;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Admin\Directory\ToChuc\ToChucStoreRequest;
use App\Http\Requests\Admin\Directory\ToChuc\ToChucUpdateRequest;

class ToChucController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $toChuc = ToChuc::latest()->paginate(10);
        $value = ($request->input('page', 1) - 1) * 5;
        return view('admin.directory.to-chuc.index-company', compact('toChuc'))
            ->with('i', $value);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.directory.to-chuc.create-company');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ToChucStoreRequest $toChucRequest): RedirectResponse
    {
        ToChuc::create($toChucRequest->validated());
        return redirect()->back()->with('success', 'ToChuc created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(ToChuc $toChuc): View
    {
        return view('admin.directory.to-chuc.show-company', compact('toChuc'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ToChuc $toChuc): View
    {
        return view('admin.directory.to-chuc.edit-company', compact('toChuc'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ToChucUpdateRequest $toChucRequest, ToChuc $toChuc): RedirectResponse
    {
        $toChuc->update($toChucRequest->validated());
        return redirect()->back()->with('success', 'ToChuc updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ToChuc $toChuc): RedirectResponse
    {
        $toChuc->delete();
        return redirect()->back()->with('success', 'ToChuc deleted successfully.');
    }
}
