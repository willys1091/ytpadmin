<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\admin;
use App\Models\user;
use App\Models\destination;
use App\Models\post_hdr;

class MainController extends Controller{
    use \App\Traits\General;
    public function index(){
        $data['title'] = "Login | Tangan Pengharapan";
        if(Session::has('id')){
            return redirect('dashboard');
        }else{
            return view('main.login', $data);
        }
    }

    public function auth(Request $request){
        $admin = admin::where(['email' => $request->email, 'password' => md5($request->password)]);
        if ($admin->count() > 0) {
            if ($admin->where('active','1')->count() > 0){
                $data = $admin->first();
                $ses = array(
                    'id' => $data->id,
                    'email' => $data->email,
                    'name' => $data->name,
                );
                Session::put($ses);
                return redirect('dashboard');
            }else{
                session::flash('error', 'danger');
                session::flash('message', 'Login Failed! Your Account is Inactive');
                return redirect('/');
            }
        }else{
            session::flash('error', 'danger');
            session::flash('message', 'Login Failed! Check Your Email and Password');
            return redirect('/');
        }
    }

    public function dashboard(){
        $data['title'] = "Dashboard| Tangan Pengharapan";
        return view('main.dashboard', $data);
    }

    public function forgot(){
        $data['title'] = "Forgot Password| Tangan Pengharapan";
        return view('main.forgot', $data);
    }

    public function logout(){
        $this->log_system('login', 'Admin Logged Out', Session::get('id'));
        $ses = array('id', 'roleid', 'type', 'title', 'avatar', 'email', 'name');
        Session::forget($ses);
        return redirect('/');
    }
}
