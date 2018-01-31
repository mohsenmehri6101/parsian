@extends('layouts.adminLayouts')
@section('title')
    ویرایش
@endsection

@section('script')
    <script src="<?= Url('assets/plugins/ckeditor/ckeditor.js'); ?>"></script>
@endsection

@section('content')
<div class="row">
    <div class="col-sm-12">
        <h2> ویرایش {{$record->title}}</h2>

        <hr>
     </div>
</div>
<div class="row">
    <!-- CV_ -->
    <div class="col-lg-12">
        {!! Form::model($record,['method'=>'PATCH','route'=>['admin.cv_.update',$record->id]]) !!}
        <div class="form-group">
            <div class="row">
                <label class="control-label col-sm-2" for="input1">عنوان</label>
                <div class="col-sm-10">
                    {{Form::text('title',null,['class'=>'form-control','id'=>'input1','placeholder'=>'عنوان','style'=>'color:gray;'])}}
                </div></div>
        </div>
        <div class="form-group">
            <div class="row">
                {!! Form::label('input9','متن ',['class'=>'col-sm-2 control-label']) !!}
                <div class="col-sm-10">
                    {{Form::textarea('content',null,['class'=>'form-control ckeditor','placeholder'=>'متن ','id'=>'input9','style'=>'color:gray;'])}}
                </div></div>

        </div>
        <input type="hidden"  class="form-control" name="_token" value="<?php echo csrf_token(); ?>">
        <div class="form-group">
            <div class="row">
                <div class="col-sm-offset-2 col-sm-12">
                    <button type="submit" class="btn btn-primary"> ثبت و ذخیره</button>
                </div></div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
    </div>
    </div>
@endsection