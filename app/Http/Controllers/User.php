<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Models\M_User;
use App\Models\M_User as MUser;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User extends Controller
{
    public function __construct()
    {
        $output  = array(
                   "main_css"  => 'backend.main_css',
                   "css"       => '',
                   "navbar"    => 'backend.navbar',
                   "footer"    => 'backend.footer',
                   "main_aset" => 'backend.main_aset',
                   "aset"      => 'backend.user.user_aset'
        );
        $this->output = $output;
    }

    public function index(){
        //$data = MUser::get_data();
        $output = $this->output;
        $output['content'] = "backend.user.list_data";
        $output['css'] = 'backend.user.user_css';
        //$output['data'] = $data;
        return view('backend/index',$output);

    }

    public function list_data(){
        // $data = Db::table('users')->get();
        $row[] = 1;
        $row[] = 'Tes';
        $row[] = 'tes';

        $data[] = $row;


        $output = array(
            "recordsTotal" => 1,
			"recordsFiltered" => 1,
			"data" => $data,
        );

        echo json_encode($output);
    }
}
