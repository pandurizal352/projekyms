<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserControllers extends Controller
{   
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::latest()->paginate(5);
        return view ('user.index',compact('user'))->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'Nim' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);
        User::create($request->all());

        return redirect()->route('user.index')->with('succes','Data Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('user.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'Nim' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        $user->update($request->all());

        return redirect()->route('user.index')->with('succes','User Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('user.index')->with('succes','User Berhasil di Hapus');
    }

    public function ChangePassword()
    {
        return view('change-password');
    }

    public function ProsesChangePassword(Request $request)
    {
        //cek passwordd nya
        $cek = Hash::check($request->old_password, auth()->user()->password);
        if(!$cek){
            return back()->with('error','password lama gak sama ama akun nya');
        }

        //cek password baru dengan confirm
        $cek2 = $request->New_password == $request->Reapet_password;
        
        if(!$cek2){
            return back()->with('error','password baru sama konfersi password nya gak sama');
        }

        auth()->user()->update([
            'password' => Hash::make($request->New_password)
        ]);

        return view('main-interface.login-landing')->with('sukses','password berhasil di ubah silahkan login kembali');



    }
}
