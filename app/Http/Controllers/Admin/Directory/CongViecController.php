<?php

namespace App\Http\Controllers\Admin\Directory;

use App\Models\CongViec;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Admin\Directory\CongViec\CongViecStoreRequest;
use App\Http\Requests\Admin\Directory\CongViec\CongViecUpdateRequest;
use Illuminate\Http\Request;

class CongViecController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $congViec = CongViec::latest()->paginate(10);
        $value = ($request->input('page', 1) - 1) * 5;
        return view('admin.directory.cong-viec.index-work', compact('congViec'))
            ->with('i', $value);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.directory.cong-viec.create-work');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CongViecStoreRequest $congViecRequest): RedirectResponse
    {
        CongViec::create($congViecRequest->validated());
        return redirect()->back()->with('success', 'CongViec created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(CongViec $congViec): View
    {
        return view('admin.directory.cong-viec.show-work', compact('congViec'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CongViec $congViec): View
    {
        return view('admin.directory.cong-viec.edit-work', compact('congViec'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CongViecUpdateRequest $congViecRequest, CongViec $congViec): RedirectResponse
    {
        $congViec->update($congViecRequest->validated());
        return redirect()->back()->with('success', 'CongViec updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CongViec $congViec): RedirectResponse
    {
        $congViec->delete();
        return redirect()->back()->with('success', 'CongViec deleted successfully.');
    }
}
