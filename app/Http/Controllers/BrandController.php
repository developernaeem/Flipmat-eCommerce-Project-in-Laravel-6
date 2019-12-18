<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;
use Session;

class BrandController extends Controller {
    /* Add Brand Function */
    public function AddBrand() {
    	return view('admin_component.admin.brand.add_brand');
    }
	
	/* Brand List Function */
    public function BrandList() {
    	$showBrand = Brand::orderBy('id', 'DESC')->get();
    	return view('admin_component.admin.brand.brand_list', compact('showBrand'));
    }

	/* Store Brand CRUD Here... */
	public function StoreBrand(Request $request) {
		$validatedData = $request->validate([
            'brand_name' => 'required|unique:brands,brand_name',
        ]);

		$brand = new Brand();
		$brand->brand_name = $request->brand_name;
		$brand->brand_slug = $this->SlugGenerator($request->brand_name);
		$brand->save();
		Session::flash('success', 'Brand Inserted Successfully');
		return Redirect()->back();

	}

	/* Edit Brand Function */
	public function EditBrand($id) {
		$brand = Brand::find($id);
    	return view('admin_component.admin.brand.edit_brand', compact('brand'));
		
	}

	/* Update Brand Function */
	public function UpdateBrand(Request $request) {
		$brand = Brand::find($request->id);

		$brand->brand_name = $request->brand_name;
		$brand->brand_slug = $this->SlugGenerator($request->brand_name);
		$brand->save();
		Session::flash('success', 'Brand Updated Successfully');
		return Redirect()->route('brand_list');
		
	}

	/* Delete Brand Function  */
	public function DeleteBrand($id) {
		$brand = Brand::find($id);
		$brand->delete();
		Session::flash('success', 'Brand Deleted Successfully');
		return Redirect()->back();
	}
	
	/*=========================== Active Inactive Function Start ==========================*/
	/* Brand Status Function  */
	public function brandStatus($id, $status) {
		$brand = Brand::find($id);
		$brand->status = $status;
		$brand->save();
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
