<?php

namespace App\Http\Controllers;

use Illuminate\Http\request;

Class Main extends Controller
{
    public function __construct()
    {
        $output  = array(
                   "main_css"  => 'backend.main_css',
                   "css"       => '',
                   "navbar"    => 'backend.navbar',
                   "footer"    => 'backend.footer',
                   "main_aset" => 'backend.main_aset',
                   "aset"      => ''
        );
        $this->output = $output;
    }
    public function index(){
        $output = $this->output;

        $output['content'] = 'backend.dashboard.dashboard';
        $output['aset'] = 'backend.dashboard.dashboard_aset';
        return view('backend/index',$output);
    }

    public function dashboard(){
        return view('dashboard');
    }
    public function dashboard_test(){
        $output = $this->output;

        $output['content'] = 'backend.dashboard.dashboard';
        return view('backend/index',$output);
    }
}