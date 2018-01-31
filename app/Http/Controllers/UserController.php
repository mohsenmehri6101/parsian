<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserRequest;
use App\Http\Requests;
use Auth;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderby('id','desc')->paginate(12);
        return View('admin.users.index',['users'=>$users]);
    }
    public function create()
    {
        $roles = ['0'=>'کاربر مشترک','1'=>'مدیریت'];
        return View('admin.users.create',['roles'=>$roles]);
    }

    public function store(UserRequest $request)
    {
        $new = new User( $request->all() );
        if ( $request->hasFile('imguser') ) {
            $FileName = time().'.'.$request->file('imguser')->getClientOriginalExtension();
            if ( $request->file('imguser')->move( 'assets/imageusers',$FileName ) ) {

                $new->password = bcrypt( $request->password );
                $new->img = $FileName;
                if ( $new->save() ) {
                    return redirect('admin/users');
                }
            }
        }
    }

    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $roles = ['0'=>'کاربر مشترک','1'=>'مدیریت'];
        $record = User::find($id);

        return View('admin.users.edit',['roles'=>$roles,'record'=>$record]);
    }
    public function update(Request $request, $id)
    {
        $re = User::find( $id );
        if ( $request->hasFile('imguser') ) {
            $FileName = time().'.'.$request->file('imguser')->getClientOriginalExtension();
            if ( $request->file('imguser')->move( 'assets/imageusers',$FileName ) ) {
                $re->img = $FileName;
            }
        }
        if ( $request->has('password2') ) {
            $re->password = bcrypt( $request->password2 );
        } 

        
        if ( $re->update( $request->all() ) ) {
            return redirect('admin/users');
        }

        else{
            return redirect()->back();
        }

    }

    public function destroy($id)
    {
        $delete = User::find( $id )->delete();
        return redirect('admin/users');
    }
}
