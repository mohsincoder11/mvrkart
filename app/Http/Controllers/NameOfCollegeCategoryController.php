<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NameOfCollegeCategory;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class NameOfCollegeCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = NameOfCollegeCategory::all();
        return view('college.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('college.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new NameOfCollegeCategory();
        $category->name_of_category = $request->input('name_of_category');
        $category->number_of_inputs = $request->input('number_of_inputs');
        $category->save();
        return redirect()->route('college.index')->with(['success'=> 'Category created successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = NameOfCollegeCategory::findOrFail($id);
        return view('college.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = NameOfCollegeCategory::findOrFail($id);
        return view('college.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = NameOfCollegeCategory::findOrFail($id);
        $category->name_of_category = $request->input('name_of_category');
        $category->number_of_inputs = $request->input('number_of_inputs');
        $category->save();
        return redirect()->route('college.index')->with(['success'=> 'Category updated successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = NameOfCollegeCategory::findOrFail($id);
        $category->delete();
        return redirect()->route('college.index')->with(['error'=> 'Category deleted successfully.']);
    }
}
