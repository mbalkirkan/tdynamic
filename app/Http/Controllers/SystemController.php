<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SystemController extends Controller
{

    public function index(Request $request)
    {
        $system = \App\Models\System::first();

        return view('admin.index', compact('system'));
    }

    public function update(Request $request)
    {
        $system = \App\Models\System::first();

        if ($request->file('logo') != null) {
            $request->validate([
                'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $image = $request->file('logo');
            $logo_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/logo'), $logo_name);
            $image_path = public_path('uploads/logo/' . $system->logo);

            if (file_exists($image_path))
                unlink($image_path);
        } else
            $logo_name = $system->logo;


        if ($request->file('logo2') != null) {
            $request->validate([
                'logo2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $image = $request->file('logo2');
            $logo_name2 = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/logo'), $logo_name2);
            $image_path = public_path('uploads/logo/' . $system->logo2);

            if (file_exists($image_path))
                unlink($image_path);
        } else
            $logo_name2 = $system->logo2;

        if ($request->file('favicon') != null) {
            $request->validate([
                'favicon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $image = $request->file('favicon');
            $favicon_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/favicon'), $favicon_name);
            $image_path = public_path('uploads/favicon/' . $system->favicon);
            if (file_exists($image_path))
                unlink($image_path);
        } else
            $favicon_name = $system->favicon;


        $system->update([
            'title' => $request->input('title'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'working_hours' => $request->input('working_hours'),
            'logo' => $logo_name,
            'logo2' => $logo_name2,
            'favicon' => $favicon_name,
            'author' => $request->input('author'),
            'meta_description' => $request->input('meta_description'),
            'meta_keywords' => $request->input('meta_keywords'),
            'facebook' => $request->input('facebook'),
            'twitter' => $request->input('twitter'),
            'instagram' => $request->input('instagram'),
            'linkedin' => $request->input('linkedin'),
            'youtube' => $request->input('youtube'),
            'pinterest' => $request->input('pinterest'),
        ]);
        return redirect()->back()->with('success', 'Sistem ayarları başarıyla güncellendi.');
    }
}
