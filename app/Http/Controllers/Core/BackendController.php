<?php

namespace App\Http\Controllers\Core;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BackendController extends Controller
{
    public $_FOLDER_BACKEND = Config::get('constants.path.backend');
    public $_ROUTER_PREFIX = Config::get('constants.path.backend');
    public $_SHOW_PAGING = Config::get('constants.paging.show_paging');
    public $_NUMBER_PER_PAGE = Config::get('constants.paging.number_per_page');
    public $_DATA = [];
}
