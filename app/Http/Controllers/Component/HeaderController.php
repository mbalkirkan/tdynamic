<?php

namespace App\Http\Controllers\Component;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index(Request $request)
    {
        $header = \App\Models\Component\Header::first();
        return view('admin.component.header', compact('header'));
    }

    // update
    public function update(Request $request)
    {
        $header = \App\Models\Component\Header::first();

        if ($request->file('icon') != null) {
            $request->validate([
                'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $image = $request->file('icon');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/header'), $image_name);
            $image_path = public_path('uploads/header/' . $header->icon);
            if (file_exists($image_path))
                unlink($image_path);
        } else
            $image_name = $header->icon;

        $header->update([
            'title' => $request->input('title'),
            'sub_title' => $request->input('sub_title'),
            'icon' => $image_name,
        ]);
        return redirect()->back()->with('success', 'Header başarıyla güncellendi.');

    }
}
