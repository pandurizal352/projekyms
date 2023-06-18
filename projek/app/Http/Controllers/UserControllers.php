<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class UserControllers extends Controller
{   
    
    public function search(Request $request)
    {
        $cari = $request->search;
        $user = User::where('nim', 'like', "%" . $cari . "%")->paginate(5);
        return view('user.index', [
            "title" => "User cari",
            "user" => $user,
        ],compact('user'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function toProfile()
    {
        $userImage = auth()->user()->image;
        return view('main-interface.profile',[
            "title" => "Profile",
            "userImage" => $userImage,
        ]);
    }
    public function index()
    {   
        $user = User::latest()->paginate(5);
        return view ('user.index',[
            "title" => "User CRUD",
            "user" => $user,
        ],compact('user'))->with('i', (request()->input('page', 1) -1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user.create', [
            "title"=> "User Create"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        // return $request->file('image')->store('post-images');

       $validatedData = $request->validate([
            'Nim' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
            'image' => 'image|file|max:1024',
            'role' => 'required',
        ]);
        //memasukan gambar ke dlam file post-images
        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('post-images');
        }
        
        User::create($validatedData);
       //User::create($request->all());

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
        return view('user.show',[
            "title"=>"User Show",
        ],compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('user.edit',[
            "title"=> "User Edit"
        ], compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 
    public function updateImage(Request $request, User $user)
    {   
        $validatedData =  $request->validate([
            
            'image' => 'image|file|max:1024',
        ]);
        
        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);    
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

          $user->update($validatedData);
        //$user->update($request->all());

        return redirect()->route('main-interface.profile')->with('succes','User Berhasil di Update');
    }
    public function update(Request $request, User $user)
    {
        $validatedData =  $request->validate([
            'Nim' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
            'image' => 'image|file|max:1024',
            'role' => 'required',
        ]);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);    
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

          $user->update($validatedData);
        //$user->update($request->all());

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
        if($user->image){
            Storage::delete($user->image);    
        }
        $user->delete();

        return redirect()->route('user.index')->with('succes','User berhasil di hapus');
    }

    public function ChangePassword()
    {
        return view('change-password',[
            "title"=> "Ubah Password",
        ]);
    }

    public function ProsesChangePassword(Request $request)
    {
        //cek passwordd nya
        $cek = Hash::check($request->old_password, auth()->user()->password);
        if(!$cek){
            return back()->with('error','Password lama tidak sesuai');
        }

        //cek password baru dengan confirm
        $cek2 = $request->New_password == $request->Reapet_password;
        
        if(!$cek2){
            return back()->with('error','Konfirmasi password salah');
        }

        auth()->user()->update([
            'password' => Hash::make($request->New_password)
        ]);

        Auth::logout();
 
        $request->session()->invalidate();
        $request->session()->regenerateToken();
     
        return redirect('/');



    }
}
