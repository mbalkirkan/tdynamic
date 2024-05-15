<?php

namespace App\Http\Controllers\Component;

use App\Http\Controllers\Controller;
use App\Models\Component\Reference;
use Illuminate\Http\Request;

class ReferenceController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index(Request $request)
    {
        $references = Reference::all();
        return view('admin.component.reference', compact('references'));
    }

    public function add(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('image');
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/reference'), $image_name);

        Reference::create([
            'title' => $request->input('title'),
            'image' => $image_name,
        ]);

        return redirect()->back()->with('success', 'Referans başarıyla eklendi.');

    }

    public function delete(Request $request, $id)
    {
        $reference = Reference::find($id);

        $image_path = public_path('uploads/reference/' . $reference->image);
        if (file_exists($image_path))
            unlink($image_path);
        $reference->delete();

        return redirect()->back()->with('success', 'Referans başarıyla silindi.');
    }

}
