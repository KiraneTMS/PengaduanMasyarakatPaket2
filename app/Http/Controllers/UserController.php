<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

use App\Masyarakat;
use App\Petugas;
use App\Pengaduan;

class UserController extends Controller
{

	public function index(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            if (!Session::get('level') == 'super') {
        		return redirect('/');
        	}else{
        		return view('home');            
        	}         
        }
    }

    public function login(){
        if(Session::get('login')){
            return redirect('home');
        }
        else{
            return view('login');
        }  
    }

    public function loginPost(Request $request){

        $username = $request->username;
        $password = $request->password;

        $data = Petugas::where('username',$username)->first();
        if($data){ //apakah username tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('id_petugas',$data->id_petugas);
                Session::put('nama_petugas',$data->nama_petugas);
                Session::put('username',$data->username);
                Session::put('password',$data->password);
                Session::put('telp',$data->telp);
                Session::put('level',$data->level);
                Session::put('login',TRUE);
                return redirect('home');
            }
            else{
                return redirect('login')->with('alert','Password atau Username, Salah !');
            }
        }
        else{
            return redirect('login')->with('alert','Password atau Username, Salah!');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('/')->with('alert','Kamu sudah logout');
    }



    public function indexMasyarakat(){
        if(!Session::get('login')){
            return redirect('masyarakat/login')->with('alert','Kamu harus login dulu');
        }
        else{
        	if (!Session::get('nik')) {
        		return redirect('/');
        	}else{
                $data['pengaduan'] = Pengaduan::where('nik',Session::get('nik'))->get();
            	return view('masyarakat.home',$data);                    		
        	}
        }
    }

    public function loginMasyarakat(){
        if(Session::get('login')){
            return redirect('masyarakat/home');
        }
        else{
            return view('masyarakat.login');
        }  
    }

    public function loginPostMasyarakat(Request $request){

        $username = $request->username;
        $password = $request->password;

        $data = Masyarakat::where('username',$username)->first();
        if($data){ //apakah username tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('nik',$data->nik);
                Session::put('nama',$data->nama);
                Session::put('username',$data->username);
                Session::put('password',$data->password);
                Session::put('telp',$data->telp);
                Session::put('login',TRUE);
                return redirect('masyarakat/home');
            }
            else{
                return redirect('masyarakat/login')->with('alert','Password atau Username, Salah !');
            }
        }
        else{
            return redirect('masyarakat/login')->with('alert','Password atau Username, Salah!');
        }
    }

    public function logoutMasyarakat(){
        Session::flush();
        return redirect('/')->with('alert','Kamu sudah logout');
    }

    public function registerMasyarakat(Request $request){
        //
        return view('masyarakat/register');
    }

    public function registerPostMasyarakat(Request $request){
        $this->validate($request, [
        	'nik' => 'required|min:16',
            'nama' => 'required|min:4',
            'username' => 'required|min:4|unique:masyarakat',
            'password' => 'required|min:8',
            'confirmation' => 'required|same:password',
            'telp' => 'required|min:11',
        ]);

        $data =  new Masyarakat();
        $data->nik = $request->nik;
        $data->nama = $request->nama;
        $data->username = $request->username;
        $data->password = bcrypt($request->password);
        $data->telp = $request->telp;
        $data->save();
        return redirect('masyarakat/login')->with('alert-success','Kamu berhasil Register');
    }



    public function indexAdmin(){
        if(!Session::get('login')){
            return redirect('admin/login')->with('alert','Kamu harus login dulu');
        }
        else{
        	if (!Session::get('level') == 'admin') {
        		return redirect('/');
        	}else{
        		return view('admin.home');            
        	}
        }
    }

    public function loginAdmin(){
        if(Session::get('login')){
            return redirect('admin/home');
        }
        else{
            return view('admin.login');
        }  
    }

    public function loginPostAdmin(Request $request){

        $username = $request->username;
        $password = $request->password;

        $data = Petugas::where('username',$username)->first();
        if($data){ //apakah username tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('id_petugas',$data->id_petugas);
                Session::put('nama_petugas',$data->nama_petugas);
                Session::put('username',$data->username);
                Session::put('password',$data->password);
                Session::put('telp',$data->telp);
                Session::put('level',$data->level);
                Session::put('login',TRUE);
                return redirect('admin/home');
            }
            else{
                return redirect('admin/login')->with('alert','Password atau Username, Salah !');
            }
        }
        else{
            return redirect('admin/login')->with('alert','Password atau Username, Salah!');
        }
    }

    public function logoutAdmin(){
        Session::flush();
        return redirect('/')->with('alert','Kamu sudah logout');
    }

    public function registerAdmin(Request $request){
        //
        return view('admin/register');
    }

    public function registerPostAdmin(Request $request){
        $this->validate($request, [
            'nama_petugas' => 'required|min:4',
            'username' => 'required|min:4|unique:petugas',
            'password' => 'required|min:8',
            'confirmation' => 'required|same:password',
            'telp' => 'required|min:11',
            'level' => 'required',
        ]);

        $admin = new Petugas();
        $admin->nama_petugas = $request->nama_petugas;
        $admin->username = $request->username;
        $admin->password = bcrypt($request->password);
        $admin->telp = $request->telp;
        $admin->level = $request->level;
        $admin->save();
        return redirect('admin/login')->with('alert-success','Kamu berhasil Register');
    }



    public function indexPetugas(){
        if(!Session::get('login')){
            return redirect('petugas/login')->with('alert','Kamu harus login dulu');
        }
        else{
            if (!Session::get('level') == 'petugas') {
        		return redirect('/');
        	}else{
                $data['tanggapan'] = Pengaduan::get();
                
        		return view('petugas.home',$data);            
        	}         
        }
    }

    public function loginPetugas(){
        if(Session::get('login')){
            return redirect('petugas/home');
        }
        else{
            return view('petugas.login');
        }  
    }

    public function loginPostPetugas(Request $request){

        $username = $request->username;
        $password = $request->password;

        $data = Petugas::where('username',$username)->first();
        if($data){ //apakah username tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('id_petugas',$data->id_petugas);
                Session::put('nama_petugas',$data->nama_petugas);
                Session::put('username',$data->username);
                Session::put('password',$data->password);
                Session::put('telp',$data->telp);
                Session::put('level',$data->level);
                Session::put('login',TRUE);
                return redirect('petugas/home');
            }
            else{
                return redirect('petugas/login')->with('alert','Password atau Username, Salah !');
            }
        }
        else{
            return redirect('petugas/login')->with('alert','Password atau Username, Salah!');
        }
    }

    public function logoutPetugas(){
        Session::flush();
        return redirect('/')->with('alert','Kamu sudah logout');
    }






}
