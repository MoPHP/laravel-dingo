<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Bican\Roles\Models\Role;

use Bican\Roles\Models\Permission;
use App\User;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createRole()
    {
      // $adminRole = Role::create([
      //     'name' => 'Admin',
      //     'slug' => 'admin',
      //     'description' => '', // optional
      //     'level' => 1, // optional, set to 1 by default
      // ]);


      // $createUsersPermission = Permission::create([
      //     'name' => 'Create users2',
      //     'slug' => 'create.users2',
      //     'description' => '', // optional
      // ]);
      //
      // $deleteUsersPermission = Permission::create([
      //     'name' => 'Delete users2',
      //     'slug' => 'delete.users2',
      // ]);


      $user = User::find(5);

      $user->attachRole(1);

      echo 'done';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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
        //
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
