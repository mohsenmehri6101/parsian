<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\AgentRequest;
use App\AgentModel;
use Illuminate\Support\Facades\View;
use Validator;
use Auth;
class AgentController extends Controller
{
    public function index()
    {
        $agent_db=AgentModel::orderby('date')->paginate(12);
        return View('admin.agent.index',['agent_db'=>$agent_db]);
    }
    public function create()
    {
        return View('admin.agent.create');

    }
    public function store(AgentRequest $request)
    {
        if($request->hasFile('file_name'))
        {
            $name_file='time['.time().']file_name['.$request->file('file_name')->getClientOriginalName().'].'.$request->file('file_name')->getClientOriginalExtension();
            if($request->file('file_name')->move('agent',$name_file))
            {
            }
        }
        $agent_=new AgentModel($request->all());
        if($agent_->save()){
            return View('admin.agent.success');
        }
        else
        {
            return redirect()->back();
        }
    }
    public function edit($id)
    {
        $record=AgentModel::find($id);
        return View('/admin/agent.edit',['record'=>$record]);
    }
    public function update(Request $request, $id)
    {
        $re=AgentModel::find($id);
        if($re->update($request->all()))
        {
            return redirect('admin/agent');
        }
        else{}
    }
    public function destroy($id)
    {
        $destroy=AgentModel::find($id)->delete();
        return redirect()->back();
    }
}