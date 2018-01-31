<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cv_Model;
use App\Http\Requests;
use Illuminate\Support\Facades\View;
use Validator;
use Auth;

class Cv_Controller extends Controller
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
        $fani_db=Cv_Model::orderby('date')->paginate(12);
        return View('admin.cv_.index',['fani_db'=>$fani_db]);
    }

    public function create()
    {
        return View('admin.cv_.create');
    }
    public function store(Request $request)
    {
        $CV_=new Cv_Model($request->all());
        if($CV_->save())
        {
            return View('admin.cv_.success');
        }
        else
        {
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $record=Cv_Model::find($id);
        return View('/admin/cv_.edit',['record'=>$record]);
    }
    public function update(Request $request, $id)
    {
        $re=Cv_Model::find($id);
        if($re->update($request->all()))
        {
            return redirect('admin/cv_');
        }
        else
        {
            return redirect('admin/cv_');
        }
    }
    public function destroy($id)
    {
        $destroy=Cv_Model::find($id)->delete();
        return redirect()->back();
    }
}