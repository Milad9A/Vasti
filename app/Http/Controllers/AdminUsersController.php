<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminUsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::simplePaginate(10);
        return view('admin.users.index', compact('users'));
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
    public function store(Request $request)
    {
        $user = new User(request()->validate([
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:8',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]));
        if ($image = $request->file('image')) {
            $imageName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $filepath = $request->file('image')->storeAs('profiles', $imageName, 'public');
            $user['image'] = $filepath;
        }
        $user['is_admin'] = 0;
        $user['password'] = bcrypt($user['password']);
        $user->save();
        return redirect(route('admin.users.index'));
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
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *w
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        request()->validate([
            'name' => 'required',
            'password' => 'nullable|min:8',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $user->update(request()->except('password'));
        if(!empty($request->input('password'))){
            $user['password'] = bcrypt($request->input('password'));
            $user->save();
        }
        if ($image = $request->file('image')) {
            $imageName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $filepath = $request->file('image')->storeAs('profiles', $imageName, 'public');
            $user['image'] = $filepath;
            $user->update([
                'image' => $filepath,
            ]);
        }

        return redirect(route('admin.users.index'));
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
