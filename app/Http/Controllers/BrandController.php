<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller {
    /* Add Brand Function */
    public function AddBrand() {
    	return view('admin_component.admin.add_brand');
    }
	
	/* Manage Brand Function */
    public function ManageBrand() {
    	return view('admin_component.admin.manage_brand');
    }

	/* Store Brand CRUD Here... */
	public function StoreBrand(Request $request) {
		$brand = new Brand();
		$brand->brand_name = $request->brand_name;
		$brand->brand_slug = $this->SlugGenerator($request->brand_name);
		$brand->save();

		return 'Success';

	}
	







	/* Slug Generator Function */
	public function SlugGenerator($string) {
		$string = str_replace(' ', '-', $string);
		$string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);
		return strtolower(preg_replace('/-+/', '-', $string));
	}

}
