<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;  
use App\Http\Requests;


class ZhiboController extends Controller{
	public function index(){
		return view('Zhibo/index');
	}
}