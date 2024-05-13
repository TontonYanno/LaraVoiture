<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

// use App\Http\Controllers\Auth;

class AdminController extends Controller
{
    public function admin(){
        return view('admin.index');
    }

    public function owner(){
        $list=DB::table('users')->where('type','owner')->get();
        return view('admin.owner',['list' => $list]);
    }

    public function client(){
        $list= DB::table('users')->where('type','client')->get();
        return view('admin.client', ['list' => $list] );
    }

    public function login(){
        return view('admin.authentication-login');
    }

    public function dologin(Request $request):RedirectResponse{
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            if (Auth::User()->type=="admin") {
                $request->session()->regenerate();
                return redirect()->route('admin');
            }

            if (Auth::User()->type=="owner") {
                $request->session()->regenerate();
                return redirect()->route('profile');
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request): RedirectResponse{
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('adminlogin');
    }

    public function clientregister(Request $request):RedirectResponse{
        $request->validate([
            'name' => 'required|string|max:15',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[^\w\s]).{8,}$/',
            'photo' =>'required|image|nullable|mimes:png,jpg,jpeg,webp'
        ]);

        if ($request->hasFile('photo')) {
            $file=$request->file('photo');
            $extension= $file->getClientOriginalExtension();
            $filename=$extension;
            $file->move('upload/users/',$filename);
        }

        $user = new User();
        $user->name= $request->input('name');
        $user->email= $request->input('email');
        $user->type="client";
        $user->password= Hash::make($request->input('password'));
        $user->photo = '/upload/users/'.$filename;
        $user->save();

        return to_route('client')->with('success','new client is saved ');
    }

    public function ownerregister(Request $request):RedirectResponse{

        $request->validate([
            'name' => 'required|string|max:15',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[^\w\s]).{8,}$/',
            'photo'=>'required|image|nullable|mimes:png,jpg,jpeg,webp',
        ]);

        if ($request->hasFile('photo')) {

            $file= $request->file('photo');
            $extension= $file->getClientOriginalExtension();
            $filename=$extension;
            $file->move('upload/users/',$filename);
        }

        $user = new User();
        $user->name= $request->input('name');
        $user->email= $request->input('email');$user->photo ;
        $user->type="owner";
        $user->password= Hash::make($request->input('password'));
        $user->photo='upload/users/'.$filename;
        $user->save();

        return to_route('owner')->with('success','a new owner is saved ');
    }

    public function delete ($id){
        $user= User::find($id);
        $user->delete();
        if ($user->type== 'owner') {
            return redirect()->route('owner')-> with('delete', 'L\'utilisateur a été supprimé avec succès.');
        }
        return redirect()->route('client')-> with('delete', 'L\'utilisateur a été supprimé avec succès.');
    }

    public function update($id , Request $request){
        $user=User::find($id);
        return view('admin.update', compact("user"));
    }

    public function userupdate(Request $request) {
        $request->validate([
            'id' => 'required|integer',
            'name' => 'required|string|max:15',
            'email' => 'required|email|unique:users,email,'.$request->id.'|max:255',
            // 'password' => 'required|string|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[^\w\s]).{8,}$/',
            'photo'=>'required|image|nullable|mimes:png,jpg,jpeg,webp',
        ]);

        if ($request->hasFile('photo')) {

            $file= $request->file('photo');
            $extension= $file->getClientOriginalExtension();
            $filename=$extension;
            $file->move('upload/users/',$filename);
        }

        DB::table('users')
            ->where('id', $request->id)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                // 'password' => Hash::make($request->password),
                'photo'=>'upload/users/'.$filename,
            ]);

            if ($request->type==='client') {
                return redirect()->route('route')->with('update','l\'utilisateur a bien été modifier');
            }return redirect()->route('client')->with('update','l\'utilisateur a bien été modifier');


    }


}