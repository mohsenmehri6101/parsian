<?php

namespace App\Http\Controllers;

use App\News_infoModel;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\NewsRequest;
use Illuminate\Support\Facades\View;
use Validator;
use Auth;

class NewsController extends Controller
{
    public  function  __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        /*
         * id 	title 	content 	role 	date 	seen
         * */
        $news_db=News_infoModel::orderby('date')->paginate(12);
        return View('admin.news.index',['news_db'=>$news_db]);
    }
    public function create()
    {
        return View('admin.news.create');
    }

    public function store(Request $request)
    {
        $request->date=time();
        $News_=new News_infoModel($request->all());
        if($News_->save()){
            return View('admin.news.success');
        }
        else
        {
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $record=News_infoModel::find($id);
        return View('/admin/news.edit',['record'=>$record]);
    }
    public function update(Request $request, $id)
    {
        $re=News_infoModel::find($id);
        if($re->update($request->all()))
        {
            return redirect('admin/news');
        }
        else
        {
            return redirect('admin/news');
        }
    }
    public function destroy($id)
    {
        $destroy=News_infoModel::find($id)->delete();
        return redirect()->back();
    }
}