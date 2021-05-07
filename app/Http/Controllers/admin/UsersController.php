<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;



class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $users = User::All();

        //$users = User::paginate(1);

        return view('admin/users/all', [
            'users' => $users
        ]);
    }
    public function create(){
        $roles = Role::All();
        return view('admin/users/create', [
            'roles' => $roles
        ]);
    }
    public function store(){


        // user::create([
        //     'fname' => request('fname'),
        //     'lname' => request('lname'),
        //     'email' => request('email'),
        //     'password' => Hash::make(request('lname')),
        // ]);


        $user = new User();
        $user->fname = request('fname');
        $user->lname = request('lname');
        $user->email = request('email');
        $user->password = Hash::make(request('password'));
        $user->save();
        $user->roles()->attach(request('role_id', 'user_id'));


        return redirect('/admin/users');
    }
    public function edit($id){

        $user = User::find($id);
        $roles = Role::All();

        return view('admin/users/edit', [
            'user' => $user,
            'roles' => $roles
        ]);
    }

    public function update($id){
        request()->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role_id' => ['required'],
        ]);


        $user = User::find($id);
        $user->fname = request('fname');
        $user->lname = request('lname');
        $user->email = request('email');
        $user->password = Hash::make(request('password'));
        $user->save();
        //will drop roles and add new ones
        // $user->roles()->sync([request('role_id', 'user_id')]);
        //to sync and keep other roles
        $user->roles()->syncWithoutDetaching([request('role_id')]);

        return redirect('admin/users');
        // $user = User::find($id);
        // $roles = Role::All();

        // return view('admin/users/edit', [
        //     'user' => $user,
        //     'roles' => $roles
        // ]);
    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return redirect('/admin/users');
    }
}
