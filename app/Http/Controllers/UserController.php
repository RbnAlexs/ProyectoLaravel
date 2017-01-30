<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(20);
        return view('admin.usuarios.index')->withUsers($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::where('estatus', 1)->get();
        return view('admin.usuarios.create')
            ->withRoles($roles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nombre = Input::get('nombre');
        $email = Input::get('email');
        $username = Input::get('username');
        $password = Input::get('password');
        $rpassword = Input::get('rpassword');

        $this->validate($request, [
            'nombre' => 'required',
            'email' => 'required|email',
            'username' => 'required',
            'password' => 'required',
            'rpassword' => 'required',
        ]);

        $user = new User();
        $user->name = $nombre;
        $user->email = $email;
        $user->username = $username;
        $user->password = Hash::make($password);
        $user->save();

        /* ASIGNANDO ROLES */
        foreach ($request['roles'] as $rol => $asignacion){
            if($asignacion == 1) {
                $rol = Role::find($rol);
                $name = $rol->name;
                $user->assignRole($name);
            }
        }

        Session::flash('message', array('success','Se ha creado un nuevo Usuario.'));
        return Redirect::to('/admin/usuarios');
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
        $roles = Role::where('estatus', 1)->get();
        $user_roles = $user->Roles()->get();

        return view('admin.usuarios.edit')
            ->withUser($user)
            ->withRoles($roles)
            ->withUserroles($user_roles);
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
        $user = User::find($id);
        $user->name = $request->nombre;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->estatus = $request->estatus;
        $user->password = Hash::make($request->password);
        $this->validate($request, [
            'nombre' => 'required',
            'email' => 'required|email',
            'username' => 'required',
            'password' => 'required',
            'rpassword' => 'required',
        ]);

        $user->save();

        $user->roles()->detach();

        /* ASIGNANDO ROLES */
        foreach ($request['roles'] as $rol => $asignacion){
            if($asignacion == 1) {
                $rol = Role::find($rol);
                $name = $rol->name;
                $user->assignRole($name);
            }
        }

        Session::flash('message', array('info','El Usuario se Edito Correctamente.'));
        return Redirect::to('/admin/usuarios');
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

    public function combousuarios(Request $request)
    {
        $term = $request['term'];
        $usuarios = User::where('name', 'like', '%' . $term . '%')->get();
        return response()->json($usuarios);
    }
}
