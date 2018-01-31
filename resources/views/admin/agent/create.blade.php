@extends('layouts.adminLayouts')

@section('title')
    ایجاد نماینده
@endsection
@section('content')
        <!-- save_agent  -->
        <div class="row">
            <div class="col-sm-12">
                <h3>ثبت نماینده</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12"> <div style="border:1px solid lightgrey;margin-bottom:15px;"></div>
            </div>
        </div>
        <div class="row">
            <!-- agent -->
            <div class="col-lg-12">
                {!! Form::open(['url'=>'admin/agent','class'=>'form-horizontal','files'=>true]) !!}
                <div class="form-group">
                    <label class="control-label col-sm-2" for="input1">نام شرکت</label>
                    <div class="col-sm-10">
                        <input name="name_company" type="text" class="form-control" id="input1" placeholder="نام شرکت">
                        @if($errors->has('name_company'))
                            <div class="alert alert-danger" style="opacity:0.7;margin-top:3px;padding-top:6px;height:36px !important;">
                                <a href="#"  class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <div style="opacity:0.8; ">{!! $errors->first('name_company') !!}</div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="input2">شماره ثبت</label>
                    <div class="col-sm-10">
                        <input name="number_save" type="text" class="form-control" id="input2" placeholder="شماره ثبت">
                        @if($errors->has('number_save'))
                            <div class="alert alert-danger" style="opacity:0.7;margin-top:3px;padding-top:6px;height:36px !important;">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <div style="opacity:0.8; ">{!! $errors->first('number_save') !!}</div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="input3">کد اقتصادی</label>
                    <div class="col-sm-10">
                        <input name="number_economy" type="text" class="form-control" id="input3" placeholder="کد اقتصادی">
                        @if($errors->has('number_economy'))
                            <div class="alert alert-danger" style="opacity:0.7;margin-top:3px;padding-top:6px;height:36px !important;">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <div style="opacity:0.8; ">{!! $errors->first('number_economy') !!}</div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="input4">نام مدیر عامل </label>
                    <div class="col-sm-10">
                        <input type="text" name="manage_agent" class="form-control" id="input4" placeholder="نام مدیر عامل">
                        @if($errors->has('manage_agent'))
                            <div class="alert alert-danger" style="opacity:0.7;margin-top:3px;padding-top:6px;height:36px !important;">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <div style="opacity:0.8; ">{!! $errors->first('manage_agent') !!}</div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="input5">شماره مدیر عامل</label>
                    <div class="col-sm-10">
                        <input type="text" name="phone_manage" class="form-control" id="input5" placeholder="شماره مدیرعامل">
                        @if($errors->has('phone_manage'))
                            <div class="alert alert-danger" style="opacity:0.7;margin-top:3px;padding-top:6px;height:36px !important;">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <div style="opacity:0.8; ">{!! $errors->first('phone_manage') !!}</div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="input6">نام استان</label>
                    <div class="col-sm-5">
                        <input name="city_" type="text" class="form-control" id="input6" placeholder="استان">
                        @if($errors->has('city_'))
                            <div class="alert-danger" style="opacity:0.7;margin-top:3px;padding-top:6px;height:36px !important;">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <div style="opacity:0.8; ">{!! $errors->first('city_') !!}</div>
                            </div>
                        @endif
                    </div>
                    <div class="col-sm-5">
                        {{Form::select('city_', [
'استان مورد نظر را انتخاب کنید','آذربایجان شرقی','آذربایجان غربی','اصفهان','اردبیل','ایلام','بوشهر','چهارمحال و بختیاری','خراسان جنوبی','خراسان رضوی','خراسان شمالی','خوزستان','زنجان','سیستان و بلوچستان','سمنان','فارس','قم','قزوین','کهکیلویه و بویراحمد','کردستان','کرمان','کرمانشاه','گیلان','گلستان','لرستان','مازندران','مرکزی','هرمزگان'
,'همدان','تهران','یزد'],null,['class'=>'form-control'])}}
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="input7">نام شهر</label>
                    <div class="col-sm-10">
                        <input name="city" type="text" class="form-control" id="input7" placeholder="شهر">
                        @if($errors->has('city'))
                            <div class="alert alert-danger" style="opacity:0.7;margin-top:3px;padding-top:6px;height:36px !important;">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <div style="opacity:0.8; ">{!! $errors->first('city') !!}</div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="input8">شماره ثابت</label>
                    <div class="col-sm-10">
                        <input name="phone_fixed" type="text" class="form-control" id="input8" placeholder="شماره تلفن ثابت">
                        @if($errors->has('phone_fixed'))
                            <div class="alert alert-danger" style="opacity:0.7;margin-top:3px;padding-top:6px;height:36px !important;">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <div style="opacity:0.8; ">{!! $errors->first('phone_fixed') !!}</div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('input9','توضیحات',['class'=>'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">
                        {{Form::textarea('explain',null,['class'=>'form-control','placeholder'=>'توضیحات بیشتر','id'=>'input9'])}}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('input9','ایمیل',['class'=>'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">
                        <input type="email" name="email" id="input9" class="form-control" placeholder="اختیاری" >
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('input10','آپلود مدرک',['class'=>'col-sm-2 control-label']) !!}
                    <div class="col-sm-10" style="border: 1px solid rgb(204,204,204);border-radius:3px;box-shadow:0  -1px 0  0  rgba(204,204,204,0.3) !important;">
                        {{Form::file('file_name',['class'=>'btn','id'=>'input10'])}}
                    </div>
                </div>
                <input type="hidden"  class="form-control" name="_token" value="<?php echo csrf_token(); ?>">
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button id="mam_" type="submit" class="btn btn-primary"  >ثبت</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>

@endsection