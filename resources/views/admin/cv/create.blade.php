@extends('layouts.adminLayouts')
@section('title')
    ایجاد رزومه
@endsection
@section('head')
    <link rel="stylesheet" href="<?= Url('assets/css/bootstrap-fileupload.min.css'); ?>" />
@endsection
@section('script')
    <script src="<?= Url('assets/plugins/ckeditor/ckeditor.js'); ?>"></script>
    <script src="<?= Url('assets/plugins/jasny/js/bootstrap-fileupload.js'); ?>"></script>
@endsection

@section('content')
        <!-- save_CV  -->
        <div class="row">
            <div class="col-sm-12">
                <h3>ثبت رزومه</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12"> <div style="border:1px solid lightgrey;margin-bottom:15px;"></div>
            </div>
        </div>
        <div class="row">
            <!-- cv -->
            <div class="col-lg-12">
                {!! Form::open(['url'=>'admin/cv','class'=>'form-horizontal','files'=>true]) !!}
                <div class="form-group">
                    <label class="control-label col-sm-2" for="input1">عنوان</label>
                    <div class="col-sm-10">
                        <input name="title" type="text" class="form-control" id="input1" placeholder="عنوان رزومه">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="input2">معمار</label>
                    <div class="col-sm-10">
                        <input name="architect" type="text" class="form-control" id="input1" placeholder="معمار">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="input3">کارفرما</label>
                    <div class="col-sm-10">
                        <input name="employer" type="text" class="form-control" id="input3" placeholder="کارفرما">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="input5">خدمات</label>
                    <div class="col-sm-10">
                        <input name="services" type="text" class="form-control" id="input5" placeholder="خدمات">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="input6">کاربری</label>
                    <div class="col-sm-10">
                        <input name="useri" type="text" class="form-control" id="input6" placeholder="کاربری">
                        @if($errors->has('name_company'))
                            <div class="alert alert-danger" style="opacity:0.7;margin-top:3px;padding-top:6px;height:36px !important;">
                                <a href="#"  class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <div style="opacity:0.8; ">{!! $errors->first('title') !!}</div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="input7">موقعیت</label>
                    <div class="col-sm-10">
                        <input name="location" type="text" class="form-control" id="input7" placeholder="موقعیت">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="input8">سال ساخت</label>
                    <div class="col-sm-10">
                        <input name="year_construction" type="text" class="form-control" id="input8" placeholder="سال ساخت">
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('input9','توضیحات',['class'=>'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">
                        {{Form::textarea('content',null,['class'=>'form-control','placeholder'=>'متن پروژه','id'=>'input9'])}}
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" id="input34"> آپلود عکس اول</label>
                    <div class="col-sm-10">
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                            <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                            <div>
                                <span class="btn btn-file btn-success"><span class="fileupload-new">انتخاب عکس</span><span class="fileupload-exists">تغییر </span>{{Form::file('img_1',['id'=>'input34'])}}</span>
                                <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">حذف</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" id="input10">آپلود عکس دوم</label>
                    <div class="col-sm-10">
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                            <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                            <div>
                                <span class="btn btn-file btn-success"><span class="fileupload-new">انتخاب عکس</span><span class="fileupload-exists">تغییر </span>{{Form::file('img_2',['id'=>'input10'])}}</span>
                                <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">حذف</a>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden"  class="form-control" name="_token" value="<?php echo csrf_token(); ?>">
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">ثبت</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
@endsection