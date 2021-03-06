<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function indexAdmin()
    {
        //admin
//        $categories = Category::all();
        $categories = DB::table('categories')
            ->where('categories.deleted_at','=',null)
            ->paginate(10);
        return view('admin.category.index', compact('categories'));
    }

    public function getCategoriesName()
    {
        $categories_name = DB::table('users')
            ->select('name', 'id')
            ->get();
        return view('admin.product.create', compact('categories_name'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $get_parent_category = DB::table('categories')->where('parent_id', '=', null)->get();
        return view('admin.category.create', compact('get_parent_category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $newImageName = time() . '-' . $request->name . '.' . $request->thumbnail->extension();
        $request->thumbnail->move(public_path('assets/img/category'), $newImageName);
        $main_category_url = CategoryController::getMainCategoryUrl($request->parent_id);
        $new_url = $main_category_url . CategoryController::convertNameToUrl($request->name);
        if (!CategoryController::checkNameExist($request->name)) {
            $category = Category::create([
                'name' => $request->name,
                'code' => $request->code,
                'parent_id' => $request->parent_id,
                'thumbnail' => $newImageName,
                'url' => $new_url,
            ]);
            return redirect()->route('admin-category-index')->with('message', 'Create category success');
        } else {
            return redirect()->route('admin-category-index')->with('failed', 'Create category fail, category name already exist');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public
    function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Category $category
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        $get_parent_category = DB::table('categories')->where('parent_id', '=', null)->get();
        return view('admin.category.edit', compact('category', 'get_parent_category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $old_name = $category->name;
        $category->name = $request->input('name');
        $category->code = $request->input('code');
        $main_category_url = CategoryController::getMainCategoryUrl($request->parent_id);
        $new_url = $main_category_url . CategoryController::convertNameToUrl($request->name);
        $category->url = $new_url;
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('assets/img/category', $filename);
            $category->thumbnail = $filename;
        }
        if ($request->name == $old_name) {
            $category->save();
            return redirect()->route('admin-category-index', '', 201)->with('message', 'Update category success');
        }
        if (!CategoryController::checkNameExist($request->name)) {
            $category->save();
            return redirect()->route('admin-category-index', '', 201)->with('message', 'Update category success');
        } else {
            return redirect()->route('admin-category-index', '', 201)->with('failed', 'Update category failed, category name already exist');
        }

//        $category = Category::find($id);
//        $category->name = $request->input('name');
//        $category->code = $request->input('code');
//        $category->url = CategoryController::convertNameToUrl($category->name);
//        if ($request->hasFile('thumbnail')) {
//            $file = $request->file('thumbnail');
//            $extension = $file->getClientOriginalExtension();
//            $filename = time() . '.' . $extension;
//            $file->move('assets/img/category', $filename);
//            $category->thumbnail = $filename;
//        }
//        $category->save();
//        return redirect()->route('admin-category-index', '', 201)->with('message', 'Update category success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {

    }

    public function trash($id)
    {
        Category::where('id', $id)->delete();
        return redirect()->route('admin-category-index', '', 201);
    }

    public function convertNameToUrl($name)
    {
        return ('/' . mb_strtolower(str_replace(' ', '-', $name)));
    }

    public function checkNameExist($name)
    {
        $get_list_name = DB::table('categories')->select('name')->get();
        foreach ($get_list_name as $item) {
            if ($name == $item->name)
                return true;
        }
        return false;
    }

    public function getMainCategoryUrl($parent_id)
    {
        $record = DB::table('categories')
            ->where('id', '=', $parent_id)
            ->select('url')
            ->get()->first();
        return $record->url;
    }

}
