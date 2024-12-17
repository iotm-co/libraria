<?php

namespace App\Http\Controllers;

use App\Models\Testimony;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.testimonies.index', [
            'testimonies' => Testimony::get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.testimonies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'occupation' => 'required|string',
            'testimony' => 'required',
            'avatar' => 'nullable|image',
        ]);

        Testimony::create($data);
        return redirect()->route('testimonies.index')->with('success', 'Testimony created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimony $testimony)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimony $testimony)
    {
        return view('dashboard.testimonies.edit', [
            'testimony' => $testimony,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimony $testimony)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'occupation' => 'required|string',
            'testimony' => 'required',
            'avatar' => 'nullable|image',
        ]);

        $requestFile = $request->file("avatar");
        if ($request->hasFile(key: "avatar")) {
            Storage::delete("public/" . $testimony->avatar);
            $data["avatar"] = $requestFile->store("images/testimonies", "public");
        } else {
            $data["avatar"] = $testimony->avatar;
        }

        $testimony->update($data);
        return redirect()->route('testimonies.index')->with('success', 'Testimony updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimony $testimony)
    {
        Storage::delete("public/" . $testimony->avatar);
        $testimony->delete();
        return redirect()->route('testimonies.index')->with('success', 'Testimony deleted successfully.');
    }
}