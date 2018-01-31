<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\CvModel;
use Auth;

class CvController extends Controller
{
    public function index()
    {
        $cv_db=CvModel::orderby('id','desc')->paginate(12);
        return View('admin.cv.index',['cv_db'=>$cv_db]);
    }
    public function create()
    {
        return View('admin.cv.create');
    }
    public function store(Request $request)
    {
        $cv_=new CvModel($request->all());
        if($cv_->save()){
            return View('admin.cv.success');
        }
        else
        {
            return redirect()->back();
        }
    }
    public function edit($id)
    {
        $record=CvModel::find($id);
        return View('/admin/cv.edit',['record'=>$record]);
    }
    public function update(Request $request, $id)
    {
        $re=CvModel::find($id);
        if($re->update($request->all()))
        {
            return redirect('admin/cv');
        }
        else{}
    }
    public function destroy($id)
    {
        return View('admin.cv.index');
    }
}
