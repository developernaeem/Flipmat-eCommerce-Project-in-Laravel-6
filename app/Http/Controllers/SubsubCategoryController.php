<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class SubsubCategoryController extends Controller {
	
    public function SubsubCategoryList() {
    	return view('admin_component.admin.category.sub_subcategory_list');
    }
}
