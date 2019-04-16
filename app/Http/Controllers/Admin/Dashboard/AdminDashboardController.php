<?php

namespace App\Http\Controllers\Admin\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\CommentsRepository;
use App\Repositories\ContactRepository;


class AdminDashboardController extends Controller
{
    
     
    public function __construct()
    {
        $this->middleware('auth');
      

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data = array();
        
    	return view("admin.dashboard",$data);
    }
}
