<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; 
use App\Model\admin\Admin;
use App\Model\admin\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Admin::all();
        return view('admin.user.index', compact('users')); 
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
         return view('admin.user.create', compact('roles'));  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'phone' => 'required|numeric',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required',
        ]);

        $request['password'] = bcrypt($request->password);  
        $admin = Admin::create($request->all()); 

        $admin->roles()->sync($request->role);     
     
        return redirect(route('user.index'))->with('message', 'User created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         return view('admin.tag.show'); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Admin::find($id);
        $roles = Role::all();
         return view('admin.user.edit', compact('user', 'roles')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'      => 'required|string|max:255',
            'email'     => "required|string|email|max:255|unique:admins,id,$id", 
            'phone'     => 'required|numeric',
        ]);

        $request->status ? $request['status'] = 1 : $request['status'] = 0; 
        $user = Admin::where('id', $id)->update($request->except('_token', '_method', 'role'));  //problem with status
        
        Admin::find($id)->roles()->sync($request->role);      
        
        //long waya
        /* $user = Admin::find($id); 
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->status = $request->status; 
        $user->save(); 
        $user->roles()->sync($request->role);    */


        return redirect(route('user.index'))->with('message', 'User updated successfully');     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Admin::where('id', $id)->delete();

        return redirect(route('user.index'))->with('message', 'User deleted successfully');
    }
}
