<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Laracasts\Flash\Flash;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserEditRequest;

class UsersController extends Controller
{
    //
	public function index()
	{
		$users = User::orderBy('id', 'ASC')->paginate(5);
		return view('admin.users.index')->with('users', $users);
	}


    public function create()
    {
    	return view('admin.users.create');
    }

    public function store(UserRequest $request)
    {
    	$user = new User($request->all());
    	$user->password = bcrypt($request->password);
    	$user->save();

    	Flash::success('User registered succesfully!');
    	return redirect()->route('users.index');
    }

    public function edit($id)
    {
    	$user = User::find($id);
        //admin.users.edit
    	return view('admin.users.edit')->with('user', $user);
    }

    public function destroy($id)
    {
    	$user = User::find($id);
    	$user->delete();
    	Flash::info('User has been deleted succesfully');
    	return redirect()->route('users.index');
    }

    public function update(UserEditRequest $request, $id)
    {
    	$user = User::find($id);
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->type = $request->type;
    	$user->save();
    	Flash::info('User has been updated succesfully');
    	return redirect()->route('users.index');
    }

    public function home()
    {
        return view('admin.home');
    }
}
