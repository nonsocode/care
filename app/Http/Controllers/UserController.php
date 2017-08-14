<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Notifications\NewUser;
use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['headTitle'] = "User Management";
        $data['users'] = $this->buildUserQuery($request)->paginate();
        return view('admin.users.index' , $data);
    }

    public function buildUserQuery(Request $request)
    {
        $query = User::query();
        if ($request->has('blocked')) {
            $query->whereBlocked((boolean) $request->blocked);
        }
        return $query;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {
        $data = $request->except('password');
        $random = str_random(6);
        $data['password'] = bcrypt($random);
        $user = User::create($data);
        $user->notify(new NewUser($user,$random));
        return back()->with('success','User Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::pluck('name')->all();
        $permissions = Permission::pluck('name')->all();
        $user->load('roles','permissions');
        return view('admin.users.edit',compact('user','roles','permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,User $user)
    {
        $this->validate($request,[
            'roles' => 'array',
            'permissions' => 'array',
            'blocked' => 'required'
        ]);
        $user->syncRoles($request->roles ? $request->roles : []);
        $user->syncPermissions($request->permissions?$request->permissions:[]);
        $user->blocked = $request->blocked;
        $user->save();
        return back()->with('success','User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
