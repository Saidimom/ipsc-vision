<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationData;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Image;

class UsersController extends MainController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::withTrashed()->get();
        $this->content = $this->getContent('users.index', ['users' => $users]);
        return $this->renderOutput();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $this->content = $this->getContent('users.create');
        return $this->renderOutput();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        //
        //dd($request->all());
        $password = bcrypt($request->get('password'));
        $data = $request->except('_token', 'role_id');
        $data['password'] = $password;
        if ($user = User::create($data)) {
            $user->assignRole($request->get('role_id'));
            return redirect(route('users.index'))->with('status', 'success_created');
        }
        return back()->with('error', 'something_is_wrong');
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
        $this->content = $this->getContent('users.show', ['user' => User::findOrFail($id)]);
        return $this->renderOutput();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = User::withTrashed()->findOrFail($id);
        $this->content = $this->getContent('users.edit', ['user' => $user]);
        return $this->renderOutput();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        //
        $user = User::withTrashed()->findOrFail($id);
        if ($user->trashed()){
            $user->restore();
        }
        $data = $request->except(['_method', '_token', 'password', 'password_confirmation', 'role_id', 'image']);
        $password = $request->get('password');
        if (!is_null($password)){
            $data['password'] = bcrypt($password);
        }
        if ($request->hasFile('image')){
            $image = $request->file('image');
            if ($image->isValid()){
                $picture = str_random(8).'_profile.jpg';
                //dd($user);
                if ($user->image !== ''){
                    if (file_exists(public_path(env('THEME').'/images/profiles/'.$user->image))){
                        unlink(public_path(env('THEME').'/images/profiles/'.$user->image));
                    }
                }
                $img = Image::make($image);
                $img->fit(550, 550)->save(public_path(env('THEME').'/images/profiles/'.$picture));
                $data['image'] = $picture;
            }
        }
        if ($user->fill($data)->update()){
            $user->syncRoles($request->get('role_id'));
            return back()->with(['status' => 'success_updated']);
        }
        return back()->withErrors(['error' => 'something_went_wrong']);
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
        $user = User::findOrFail($id);
        $user->delete();
        return redirect(route('users.index'))->with(['status' => 'success_deleted']);
    }


    /**
     * Profile page
     *
     * @return $this
     */
    public function profile(){
        $this->content = $this->getContent('users.profile');
        return $this->renderOutput();
    }

    /**
     *
     * RolesAndPermissions Settings
     *
     */

    public function permissions(){
        $roles = Role::all();
        $permissions = Permission::all();
        $this->content = $this->getContent('users.permissions', ['roles' => $roles, 'permissions' => $permissions]);
        return $this->renderOutput();
    }


    public function updatePermissions(Request $request){
        $data = $request->except('_token', 'DataTables_Table_0_length');
        $roles = Role::all();
        foreach ($roles as $role){
            $role->revokePermissionTo($role->permissions);
            if (isset($data[$role->id])){
                $role->givePermissionTo($data[$role->id]);
            }
        }
        return redirect()->back()->with(['status' => 'Success updated']);
    }



}
