<?php

namespace App\Http\Controllers;

use App\Models\CarouselImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarouselImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.carousel-images.index', [
            'carouselImages' => CarouselImage::get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.carousel-images.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'nullable|string',
            'image_path' => 'required|image',
            'order_position' => 'required|integer',
            'is_active' => 'boolean',
        ]);

        $data['image_path'] = $request->file('image_path')->store('images/carousel', 'public');
        // check if the order_position is already taken
        $orderPositionExists = CarouselImage::where('order_position', $data['order_position'])->exists();
        if ($orderPositionExists) {
            return back()->with('error', 'Order position already taken.');
        }
        // dd($data);
        CarouselImage::create($data);
        return redirect()->route('carousel-images.index')->with('success', 'Carousel image created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(CarouselImage $carouselImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CarouselImage $carouselImage)
    {
        return view('dashboard.carousel-images.edit', [
            'carouselImage' => $carouselImage,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CarouselImage $carouselImage)
    {
        $data = $request->validate([
            'title' => 'nullable|string',
            'image_path' => 'nullable|image',
            'order_position' => 'required|integer',
            'is_active' => 'boolean',
        ]);

        if ($request->hasFile('image_path')) {
            // Delete the old image
            Storage::delete("public/" . $carouselImage->image_path);
            // Store the new image
            $data['image_path'] = $request->file('image_path')->store('images/carousel', 'public');
        } else {
            $data['image_path'] = $carouselImage->image_path;
        }

        // check if the order_position is already taken
        $orderPositionExists = CarouselImage::where('order_position', $data['order_position'])->where('id', '!=', $carouselImage->id)->exists();
        if ($orderPositionExists) {
            return back()->with('error', 'Order position already taken.');
        }

        $data['is_active'] = $request->is_active ? true : false;
        // dd($data);
        $carouselImage->update($data);
        return redirect()->route('carousel-images.index')->with('success', 'Carousel image updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CarouselImage $carouselImage)
    {
        Storage::delete("public/" . $carouselImage->image_path);
        $carouselImage->delete();
        return redirect()->route('carousel-images.index')->with('success', 'Carousel image deleted successfully.');
    }
}