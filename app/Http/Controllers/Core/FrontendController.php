<?php

namespace App\Http\Controllers\Core;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

# Model
use Session;
use DB;
use App\Models\Categories;
use App\Models\MemberModel;

class FrontendController extends Controller
{
    public $_FOLDER_FRONTEND = "backend";
    public $_ROUTER_PREFIX = "";
    public $_SHOW_PAGING = "";
    public $_NUMBER_PER_PAGE = "";
    public $_HEADER = "";
    public $_FOOTER = "";
    public $_DATA = [];
    
    public function __construct()
    {
    	$this->_FOLDER_FRONTEND = config('constants.path.frontend');
	    $this->_ROUTER_PREFIX = config('constants.path.frontend');
	    $this->_SHOW_PAGING = config('constants.paging.show_paging');
	    $this->_NUMBER_PER_PAGE = config('constants.paging.number_per_page');
	    
	    $this->_DATA["_SELF"] = $this;
	    $this->_DATA["categories"] = Categories::all();
    	
        $this->_HEADER = $this->_FOLDER_FRONTEND."/layouts/header";
        $this->_FOOTER = $this->_FOLDER_FRONTEND."/layouts/footer";
    }
}
