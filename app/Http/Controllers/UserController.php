<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Hasil;
use App\Models\ModelUser;

class UserController extends Controller
{
    public function index(Request $request){
        if(!session('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            $items = Hasil::all();
            $kerusakan1 = Hasil::where('kesimpulan','Kerusakan pada busi')->count('kesimpulan');
            $kerusakan2 = Hasil::where('kesimpulan','Injektor Bermasalah')->count('kesimpulan');
            $kerusakan3 = Hasil::where('kesimpulan','Premature Ignition')->count('kesimpulan');
            $kerusakan4 = Hasil::where('kesimpulan','Kerusakan pada AC dan Freon AC habis')->count('kesimpulan');
            $kerusakan5 = Hasil::where('kesimpulan','Kerusakan Rem')->count('kesimpulan');
            $kerusakan6 = Hasil::where('kesimpulan','Mesin Overheat')->count('kesimpulan');
            $kerusakan7 = Hasil::where('kesimpulan','Kerusakan Transmisi')->count('kesimpulan');
            $kerusakan8 = Hasil::where('kesimpulan','Kerusakan Accu dan Engine mounting')->count('kesimpulan');
            $kerusakan9= Hasil::where('kesimpulan','Tangki bahan bakar mengalami kerusakan')->count('kesimpulan');
            $kerusakan10 = Hasil::where('kesimpulan','Pompa Oli Mengalami Kerusakan')->count('kesimpulan');
            $kerusakan11 = Hasil::where('kesimpulan','Radiator mengalami kebocoran')->count('kesimpulan');
            $kerusakan12 = Hasil::where('kesimpulan','Alternator rusak')->count('kesimpulan');
            $kerusakan13 = Hasil::where('kesimpulan','Kopling rusak dan kampas kopling sudah aus')->count('kesimpulan');
            $total = Hasil::count('kesimpulan');

            return view('adminpage',compact('items','kerusakan1','kerusakan2','kerusakan3','kerusakan4','kerusakan5','kerusakan6','kerusakan7','kerusakan8','kerusakan9','kerusakan10','kerusakan11','kerusakan12','kerusakan13','total'));
        }
    }
    public function indexhasildiagnosa(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('hasildiagnosa');
        }
    }

    public function login(){
        if(session('login')){
            return redirect('/home_user');

        }
        else{
            return view('FormLogin');
        }

    }

    public function loginPost(Request $request){

        $email = $request->email;
        $password = $request->password;

        $data = ModelUser::where('email',$email)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                $request->session()->put('name',$data->name);
                $request->session()->put('email',$data->email);
                $request->session()->put('login',TRUE);
                return redirect('home_user');
            }
            else{
                return redirect('login');
            }
        }
        else{
            return redirect('login')->with('alert',' Email, Salah!');
        }
    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect('login')->with('alert','Kamu sudah logout');
    }

    public function register(Request $request){
        return view('register');
    }

    public function registerPost(Request $request){
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|min:4|email|unique:users',
            'password' => 'required',
            'confirmation' => 'required|same:password',
        ]);

        $data =  new ModelUser();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('login')->with('alert-success','Kamu berhasil Register');
    }
}
