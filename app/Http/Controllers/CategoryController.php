<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Session;

class CategoryController extends Controller {

	/* Add Category Function */
    public function AddCategory() {
    	return view('admin_component.admin.category.add_category');
    }
    
    /* Category List Function */
    public function CategoryList() {
    	$showCategory = Category::orderBy('id', 'DESC')->get();
    	return view('admin_component.admin.category.category_list', compact('showCategory'));
    }

    /* Store Category CRUD Here... */
	public function StoreCategory(Request $request) {
		$validatedData = $request->validate([
            'category' => 'required|unique:categories,category',
        ]);

		$category = new Category();
		$category->category = $request->category;
		$category->category_slug = $this->SlugGenerator($request->category);
		$category->save();
		Session::flash('success', 'Category Inserted Successfully');
		return Redirect()->back();

	}

	/* Edit Category Function */
	public function EditCategory($id) {
		$category = Category::find($id);
    	return view('admin_component.admin.category.edit_category', compact('category'));
		
	}

	/* Update Category Function */
	public function UpdateCategory(Request $request) {
		$category = Category::find($request->id);

		$category->category = $request->category;
		$category->category_slug = $this->SlugGenerator($request->category);
		$category->save();
		Session::flash('success', 'Category Updated Successfully');
		return Redirect()->route('category_list');
		
	}

	/* Delete Category Function  */
	public function DeleteCategory($id) {
		$category = Category::find($id);
		$category->delete();
		Session::flash('success', 'Category Deleted Successfully');
		return Redirect()->back();
	}

	/*=========================== Active Inactive Function Start ==========================*/
	/* Category Status Function  */
	public function categoryStatus($id, $status) {
		$category = Category::find($id);
		$category->status = $status;
		$category->save();
		return response()->json(['message' => 'Successfully']);
	}
	/*=========================== Active Inactive Function End ==========================*/

	/* Slug Generator Function */
	public function SlugGenerator($string) {
		$string = str_replace(' ', '-', $string);
		$string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);
		return strtolower(preg_replace('/-+/', '-', $string));
	}
}
