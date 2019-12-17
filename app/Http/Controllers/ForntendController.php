<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForntendController extends Controller {
    
	public function index() {
		return view('forntend_component.forntend.home');
	}
    
	public function product() {
		return view('forntend_component.forntend.product');
	}
}
