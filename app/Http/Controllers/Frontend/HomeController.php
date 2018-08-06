<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Core\FrontendController;
use Session;
use DB;
use Response;
use App\Models\Apps;
use App\Models\MemberModel;

class HomeController extends FrontendController
{
	public function __construct()
    {
        parent::__construct();
    }
    
    public function bbpp() {
        return file_get_contents('bb-pp.html');
        
    }
    
    public function index() {
    	$this->_DATA['is_banner'] = true;
    	
    	// Get list top 
    	$this->_DATA['slideapps'] = DB::table('apps')->orderBy('app_rating_number', 'desc')->limit(10)->get();
    	$this->_DATA['newapps'] = DB::table('apps')->orderBy('created_at', 'desc')->limit(10)->get();
    	$this->_DATA['bestapps'] = DB::table('apps')->orderBy('app_rating', 'desc')->limit(10)->get();
    	
    	$this->_DATA['news'] = DB::table('news')->orderBy('created_at', 'desc')->limit(3)->get();
    	$this->_DATA['testimonials'] = DB::table('testimonials')
    									->select('testimonials.id','testimonials.comments','users.name')
										->join('users','users.id','=','testimonials.user_id')
										->orderBy('testimonials.created_at', 'desc')->limit(3)->get();
    	return view($this->_FOLDER_FRONTEND.'.home.index',$this->_DATA);
    }
    
    public function search(Request $request) {
    	$keyword = $request['keyword'];
    	$category = $request['category'];
    	$searchapps = DB::table('apps');
    	if (!empty($keyword)) {
    		$searchapps = $searchapps->where('app_title', 'like', '%' . $keyword . '%');
    	}
    	if (!empty($category) && strtolower($category) != 'categories') {
    		$searchapps = $searchapps->where('app_category_name', $category);
    	}
    	$searchapps = $searchapps->paginate(12);

    	$this->_DATA['searchapps'] = $searchapps;
    	$this->_DATA['request'] = $request;
    	return view($this->_FOLDER_FRONTEND.'.home.search',$this->_DATA);
    }
    
    public function suggest(Request $request) {
    	$keyword = $request['keyword'];
    	$searchapps = DB::table('apps');
    	$array = array();
    	if (!empty($keyword)) {
    		$searchapps = $searchapps->where('app_title', 'like', '%' . $keyword . '%');
    		$searchapps = $searchapps->limit(10)->get();
    		if ($searchapps) {
    			foreach ($searchapps as $key => $value) {
    				$array[] = array(
			            'label' => $value->app_id,
			            'value' => $value->app_title,
			        );
    			}
    		}
    	}
    	return Response::json($array);
    }
    
    public function detailapp($app_id) {
    	$this->_DATA['app_info'] = Apps::where('app_id', $app_id)->first();
    	return view($this->_FOLDER_FRONTEND.'.home.detailapp',$this->_DATA);
    }
    
    public function newsdetail($id) {
    	$this->_DATA['newsdetail'] = DB::table('news')->where('id', base64_decode($id))->first();
    	return view($this->_FOLDER_FRONTEND.'.home.newsdetail',$this->_DATA);
    }
    
}
