<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class SubCategoryController extends Controller {
	
    public function SubCategoryList() {
    	return view('admin_component.admin.category.subcategory_list');
    }
}
