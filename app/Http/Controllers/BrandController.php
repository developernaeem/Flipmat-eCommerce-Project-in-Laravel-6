<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandController extends Controller {
    
    public function AddBrand() {
    	return view('admin_component.admin.add_brand');
    }

    public function ManageBrand() {
    	return view('admin_component.admin.manage_brand');
    }
}
