<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;  
use App\Http\Requests;

class IndexController extends Controller{
	public function index(){
		return view('Index/index');
	}
}

