<?php

namespace App\Http\Controllers;
use Helpers;
use App\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontEndController extends Controller
{

    public function home()
    {
        return view('frontEnd.home');
    }
    public function serviceDetails($slug)
    {
        $services = Service::where('slug',$slug)->first();
        return view('frontEnd.serviceDetails',compact('services'));
    }

    public function create()
    {
        return view('admin.category.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
		]);
        $requestData = $request->all();

        Category::create($requestData);
        Toastr::success('Class added!', 'Done', ["positionClass" => "toast-top-right"]);
        return redirect('admin/category/create');
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);

        return view('admin.category.show', compact('category'));
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);

        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'name' => 'required',
		]);
        $requestData = $request->all();
        $category = Category::findOrFail($id);
        if (!$request->old_image='') {
            Storage::delete('public/' . $category->image);
        }
        if ($request->hasFile('image')) {
            $requestData['image'] = $request->file('image')->store('uploads', 'public');
        }
        $category->update($requestData);

        Toastr::success('Class updated!', 'Done', ["positionClass" => "toast-top-right"]);
        return redirect('admin/category');
    }

    public function destroy($id)
    {
        Category::destroy($id);
        Toastr::success('Category deleted!', 'Done', ["positionClass" => "toast-top-right"]);
        return redirect('admin/category');
    }
}
