<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FaniModel;
use App\Http\Requests;
use App\Http\Requests\FaniRequest;
use Illuminate\Support\Facades\View;
use Validator;
use Auth;

class FaniController extends Controller
{
    public  function  __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        /*
         * id 	title 	content 	date 	seen
         * */
        $fani_db=FaniModel::orderby('date')->paginate();
        return View('admin.fani.index',['fani_db'=>$fani_db]);
    }

    public function create()
    {
        return View('admin.fani.create');
    }
    public function store(Request $request)
    {
        if($request->hasFile('img'))
        {
            $name_file='time['.time().']file_name_'.$request->file('img')->getClientOriginalName();
            if($request->file('img')->move('img',$name_file))
            {
                $request->img=$name_file;
            }
        }
        $Fani=new FaniModel($request->all());
        if($Fani->save())
        {
            return View('admin.fani.success');
        }
        else
        {
            return redirect()->back();
        }
        /*
        $fani=new FaniModel($request->all());
        $fani_db=FaniModel::find($request->title);
        if($fani->save())
        {
            return View('admin.fani.success',['fani_db'=>$fani_db]);
        }
        else
        {
            return redirect()->back();
        }
        */
    }

    public function edit($id)
    {
        $record=FaniModel::find($id);
        return View('/admin/fani.edit',['record'=>$record]);
    }
    public function update(Request $request, $id)
    {
        $re=FaniModel::find($id);

        if($re->update($request->all()))
        {
            return redirect('admin/fani');
        }
        else
        {
            return redirect('admin/fani');
        }
    }
    public function destroy($id)
    {
        $destroy=FaniModel::find($id)->delete();
        return redirect()->back();
    }
}
