@extends('layouts.adminLayouts')
@section('title')
    ویرایش خبر
@endsection

@section('script')
    <script src="<?= Url('assets/plugins/ckeditor/ckeditor.js'); ?>"></script>
@endsection

@section('content')
<div class="row">
    <div class="col-sm-12">
        <h2> ویرایش خبر {{$record->title}}</h2>

        <hr>
     </div>
</div>
<div class="row">
    <!-- news -->
    <div class="col-lg-12">
        {!! Form::model($record,['method'=>'PATCH','route'=>['admin.news.update',$record->id]]) !!}
        <div class="form-group">
            <div class="row">
                <label class="control-label col-sm-2" for="input1">عنوان خبر</label>
                <div class="col-sm-10">
                    {{Form::text('title',null,['class'=>'form-control','id'=>'input1','placeholder'=>'عنوان خبر','style'=>'color:gray;'])}}
                </div></div>
        </div>
        <div class="form-group">
            <div class="row">
                {!! Form::label('input9','متن خبر',['class'=>'col-sm-2 control-label']) !!}
                <div class="col-sm-10">
                    {{Form::textarea('content',null,['class'=>'form-control ckeditor','placeholder'=>'متن خبر','id'=>'input9','style'=>'color:gray;'])}}
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