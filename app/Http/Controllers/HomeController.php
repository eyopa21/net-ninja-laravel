<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        //Role::create(['name'=>'admin']);
        //Permission::create(['name' => 'publish post']);
        $role=Role::findById(4);
        $permission=Permission::findById(3);
        //$role->givePermissionTo($permission);
        //$permission->removeRole($role);
        //$role->revokePermissionTo($permission);
        //auth()->user()->givePermissionTo($permission);
       //auth()->user()->assignRole($role);

        //return auth()->user()->getAllPermissions();
        return view('home');
    }
}
