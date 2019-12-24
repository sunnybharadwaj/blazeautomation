<?php

namespace App\Http\Controllers;

use App\PressPost;
use Illuminate\Http\Request;

class PressController extends Controller
{

    public function index()
    {
        $data = PressPost::all();
        return view('press.index', compact('data'));
    }

    public function create()
    {
        return view('press.create');
    }

    public function store(Request $request)
    {
        $data = (object)$request->all();
        $image_upload = $request->file('imagepath');
        $image_path = $image_upload->store('press/logos', ['disk' => 'public']);
        $data->imagepath = $image_path;
        PressPost::create((array)$data);
        return redirect('/api/press');

    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        return view('press.edit');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        PressPost::find($id)->delete();
        return redirect('admin/press/');
    }
}
