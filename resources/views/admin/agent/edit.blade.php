@extends('layouts.adminLayouts')
@section('title')
    ویرایش نماینده
@endsection
@section('head')
    <link rel="stylesheet" href="<?= Url('dist/dropzone.min.css'); ?>" />
@endsection
@section('script')
    <script  src="<?= Url('dist/dropzone.min.js'); ?>"></script>
@endsection
@section('content')
<div class="row">
    <div class="col-sm-12">
        <h2> ویرایش شرکت {{$record->name_company}}</h2>

        <hr>
     </div>
</div>
<div class="row">
    <!-- agent -->
    <div class="col-lg-12">
        {!! Form::model($record,['method'=>'PATCH','route'=>['admin.agent.update',$record->id]]) !!}
        <div class="form-group">
            <div class="row">
                <label class="control-label col-sm-2" for="input1">نام شرکت</label>
                <div class="col-sm-10">
                    {{Form::text('name_company',null,['class'=>'form-control','id'=>'input1','placeholder'=>'نام شرکت','style'=>'color:gray;'])}}
                </div></div>
        </div>
        <div class="form-group" style="margin-bottom:15px!important;margin-top:15px!important;">
            <div class="row">
                <label class="control-label col-sm-2" for="input2">شماره ثبت</label>
                <div class="col-sm-10">
                    {{Form::text('number_save',null,['class'=>'form-control','id'=>'input2','placeholder'=>'شماره ثبت','style'=>'color:gray;'])}}
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <label class="control-label col-sm-2" for="input3">کد اقتصادی</label>
                <div class="col-sm-10">
                    {{Form::text('number_economy',null,['class'=>'form-control','id'=>'input3','placeholder'=>'کد اقتصادی','style'=>'color:gray;'])}}
                </div></div>
        </div>
        <div class="form-group">
            <div class="row">
                <label class="control-label col-sm-2" for="input4">نام مدیر عامل </label>
                <div class="col-sm-10">
                    {{Form::text('manage_agent',null,['class'=>'form-control','id'=>'input4','placeholder'=>'نام مدیر عامل','style'=>'color:gray;'])}}
                </div></div>
        </div>
        <div class="form-group">
            <div class="row">
                <label class="control-label col-sm-2" for="input5">شماره مدیر عامل</label>
                <div class="col-sm-10">
                    {{Form::text('phone_manage',null,['class'=>'form-control','id'=>'input5','placeholder'=>'شماره مدیر عامل','style'=>'color:gray;'])}}
                </div></div>
        </div>
        <div class="form-group">
            <div class="row">
                <label class="control-label col-sm-2" for="input6">نام استان</label>
                <div class="col-sm-10">
                    {{Form::text('city_',null,['class'=>'form-control','id'=>'input6','placeholder'=>'استان','style'=>'color:gray;'])}}
                </div></div>

        </div>
        <div class="form-group">
            <div class="row">
                <label class="control-label col-sm-2" for="input7">نام شهر</label>
                <div class="col-sm-10">
                    {{Form::text('city',null,['class'=>'form-control','id'=>'input7','placeholder'=>'شهر','style'=>'color:gray;'])}}
                </div></div>
        </div>
        <div class="form-group">
            <div class="row">
                <label class="control-label col-sm-2" for="input8">شماره ثابت</label>
                <div class="col-sm-10">
                    {{Form::text('phone_fixed',null,['class'=>'form-control','id'=>'input8','style'=>'color:gray;'])}}
                </div></div>

        </div>
        <div class="form-group">
            <div class="row">
                {!! Form::label('input9','توضیحات',['class'=>'col-sm-2 control-label']) !!}
                <div class="col-sm-10">
                    {{Form::textarea('explain',null,['class'=>'form-control','placeholder'=>'توضیحات بیشتر','id'=>'input9','style'=>'color:gray;'])}}
                </div></div>

        </div>
        <div class="form-group">
            <div class="row">
                {!! Form::label('input9','ایمیل',['class'=>'col-sm-2 control-label']) !!}
                <div class="col-sm-10">
                    {{Form::text('email',null,['class'=>'form-control','id'=>'input9','placeholder'=>'اختیاری','style'=>'color:gray;'])}}
                </div>
            </div></div>
        <input type="hidden"  class="form-control" name="_token" value="<?php echo csrf_token(); ?>">
        <div class="form-group">
            <div class="row">
                <div class="col-sm-offset-2 col-sm-12">
                    <button type="submit" class="btn btn-primary">ثبت</button>
                </div></div>

        </div>
        {!! Form::close() !!}
    </div>
</div>
    </div>
    </div>
@endsection