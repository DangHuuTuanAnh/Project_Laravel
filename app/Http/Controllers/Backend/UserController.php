<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Response;
use App\Models\User;
use Illuminate\Support\Facades\input;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')->orderby('updated_at','desc')->simplePaginate(5);

        return view('backend.users.index')->with([
        	'users'=>$users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        if($user->can('create')){
            return view('backend.users.create');
        }else{
            $this->authorize('create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    // public function store(Request $request)
    {

     $user = Auth::user();
     if($user->can('create')){
        $name = $request->get('name');
        $email = $request->get('email');
        $password = $request->get('password');
        $phone = $request->get('phone');
        $address = $request->get('address');
        $role =$request->get('role');

        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->phone = $phone;
        $user->address = $address;
        $user->password = md5($password);
        $user->role = $role;

        if($request->has('avatar')){
           $avatar = $request->file('avatar');
           $namefile = $avatar->getClientOriginalName();
           $avatar_user = Storage::disk('public')->putFileAs('avatars',$avatar,$namefile);
           $url = Storage::url($avatar_user);

       }else{
           $url = '/storage/avatars/avatar.jpg'; 
       }
       $user->avatar = $url;
       $user->save();
       $save = 1;

       if($save){
        $request->session()->flash('success','Tạo mới thành công');
    }else{
        $request->session()->flash('error','Tạo mới thất bại');
    }

       // return response()->json($user);

    return redirect()->route('backend.user.index');
}else{
    $this->authorize('create');
}

}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $posts = $user->posts;
        $orders = $user->orders;
        // dd($orders);
        return view('backend.users.show')->with([
            'user'=>$user,
            'posts'=>$posts,
            'orders'=>$orders,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     $user = Auth::user();
     if($user->can('create')){
         $user = User::find($id);


         return view('backend.users.edit')->with(['user'=>$user]);
     }else{
        $this->authorize('create');
    }

}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, $id)
    // public function update(Request $request, $id)
    {

        $name = $request->get('name');
        $email = $request->get('email');
        $phone = $request->get('phone');
        $address = $request->get('address');
        $password = $request->get('password');

        $user = User::find($id);
        $user->name= $name;
        $user->email= $email;
        $user->phone= $phone;
        $user->address= $address;
        $user->password= md5($password);
        if($request->has('avatar')){
           $avatar = $request->file('avatar');
           $namefile = $avatar->getClientOriginalName();
           $avatar_user = Storage::disk('public')->putFileAs('avatars',$avatar,$namefile);
           $url = Storage::url($avatar_user);

       }else{
           $url = '/storage/avatars/avatar.jpg'; 
       }
       $user->avatar = $url;
       $user->save();

       return redirect()->route('backend.user.index');

   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('backend.user.index');
    }
}
