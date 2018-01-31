@extends('layouts.adminLayouts')
@section('title')
    ایجاد رزومه کتبی
@endsection
@section('script')
    <script src="<?= Url('assets/plugins/ckeditor/ckeditor.js'); ?>"></script>
@endsection
@section('content')
        <!-- save_CV_  -->
        <div class="row">
            <div class="col-sm-12">
                <h3>ثبت رزومه کتبی</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12"> <div style="border:1px solid lightgrey;margin-bottom:15px;"></div>
            </div>
        </div>
        <div class="row">
            <!-- CV_ -->
            <div class="col-lg-12">
                {!! Form::open(['url'=>'admin/cv_','class'=>'form-horizontal']) !!}
                <div class="form-group">
                    <label class="control-label col-sm-2" for="input1">عنوان</label>
                    <div class="col-sm-10">
                        <input name="title" type="text" class="form-control" id="input1" placeholder="عنوان ">
                        @if($errors->has('title'))
                            <div class="alert alert-danger" style="opacity:0.7;margin-top:3px;padding-top:6px;height:36px !important;">
                                <a href="#"  class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <div style="opacity:0.8; ">{!! $errors->first('name_company') !!}</div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('input9','متن',['class'=>'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">
                        {{Form::textarea('content',null,['class'=>'form-control ckeditor','placeholder'=>'متن خود را وارد کنید...','id'=>'input9'])}}
                    </div>
                </div>
                <input type="hidden"  class="form-control" name="_token" value="<?php echo csrf_token(); ?>">
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button id="mam_" type="submit" class="btn btn-primary"  >ثبت و ذخیره</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
@endsection