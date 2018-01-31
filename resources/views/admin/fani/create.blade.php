@extends('layouts.adminLayouts')

@section('title')
    ایجاد اطلاعات فنی
@endsection

@section('head')
    <link rel="stylesheet" href="<?= Url('assets/css/bootstrap-fileupload.min.css'); ?>" />
@endsection

@section('script')
    <script src="<?= Url('assets/plugins/ckeditor/ckeditor.js'); ?>"></script>
    <script src="<?= Url('assets/plugins/jasny/js/bootstrap-fileupload.js'); ?>"></script>
@endsection

@section('content')
        <!-- save_fani  -->
        <div class="row">
            <div class="col-sm-12">
                <h3>ثبت اطلاعات فنی</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12"> <div style="border:1px solid lightgrey;margin-bottom:15px;"></div>
            </div>
        </div>
        <div class="row">
            <!-- fani -->
            <div class="col-lg-12">
                {!! Form::open(['url'=>'admin/fani','class'=>'form-horizontal','files'=>true]) !!}
                <div class="form-group">
                    <label class="control-label col-sm-2" for="input1">عنوان اطلاعات فنی</label>
                    <div class="col-sm-10">
                        <input name="title" type="text" class="form-control" id="input1" placeholder="عنوان اطلاعات فنی">
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
                <div class="form-group">
                    <label class="control-label col-sm-2">آپلود عکس</label>
                    <div class="col-sm-10">
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                            <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                            <div>
                                <span class="btn btn-file btn-success"><span class="fileupload-new">انتخاب عکس</span><span class="fileupload-exists">تغییر </span><input type="file" name="img" /></span>
                                <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">حذف</a>
                            </div>
                        </div>
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