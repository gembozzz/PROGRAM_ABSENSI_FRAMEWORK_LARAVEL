<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    //
    public function index()
    {
        return view('/profile');
    }

    public function edit(User $user)
    {
        //
        return view('setting_profile', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        //
        $user = user::find($request->id);
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->save();
        $users = User::All();
        return redirect('/profile')->with('pesan' ,'Ubah data user telah berhasil')->with( compact('users'));
    }

    public function edittwo(User $user)
    {
        //
        return view('edit_profile', compact('user'));
    }

    public function updatetwo(Request $request, User $user)
    {
        //
        $user = user::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->telepon = $request->telepon;
        $user->alamat = $request->alamat;
        if($request->hasFile('foto'))
        {
            $destination = 'image/'.$user->foto;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('foto');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('image/', $filename);
            $user->foto = $filename;
        }
        $user->save();
        $users = User::All();
        return redirect('/profile')->with('pesan' ,'Edit data user telah berhasil')->with( compact('users'));
    }


}
