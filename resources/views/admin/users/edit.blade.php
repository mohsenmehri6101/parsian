@extends('layouts.adminLayouts')



@section('head')
<link rel="stylesheet" href="<?= Url('assets/css/bootstrap-fileupload.min.css'); ?>" />
@endsection



@section('content')

<div class="col-lg-12">
	<div class="row" >
		<h1> ویرایش کاربر <span style="color:red;"> {{ $record->lname }} </span>  </h1> 
	</div>
</div>
<hr/>

<div class="row">
	<div class="col-lg-12" >


		{!! Form::model( $record , [ 'method'=>'PATCH' , 'route'=>['admin.users.update', $record->id ],'class'=>'form-horizontal','files'=>true ] ) !!}

			<div class="form-group">
				{{ Form::label('fname','نام ',['class'=>'control-label col-lg-3']) }}
				<div class="col-lg-7">
					{{ Form::text('fname',null,['class'=>'form-control','placeholder'=>'نام کاربر را وارد نمایید.']) }}
				</div>
			</div>

 
			<div class="form-group">
				{{ Form::label('lname','نام خانوادگی ',['class'=>'control-label col-lg-3']) }}
				<div class="col-lg-7">
					{{ Form::text('lname',null,['class'=>'form-control','placeholder'=>'نام خانوادگی را وارد نمایید.']) }}
				</div>
			</div>


			<div class="form-group">
				{{ Form::label('name','نام کاربری ',['class'=>'control-label col-lg-3']) }}
				<div class="col-lg-7">
					{{ Form::text('name',null,['class'=>'form-control','placeholder'=>'نام کاربری را وارد نمایید.']) }}
				</div>
			</div>


			
			{{ Form::label('email','ایمیل ',['class'=>'control-label col-lg-3']) }}
			<div class="form-group input-group col-lg-7" style="margin-right: 1px;">
				<span class="input-group-addon">@</span>
				{{ Form::text('email',null,['class'=>'form-control','placeholder'=>'ایمیل  را وارد نمایید.']) }}
			</div>


			<div class="form-group">
				{{ Form::label('mobile','تلفن همراه',['class'=>'control-label col-lg-3']) }}
				<div class="col-lg-7">
					{{ Form::text('mobile',null,['class'=>'form-control','placeholder'=>'شماره موبایل خود را وارد نمایید.']) }}
				</div>
			</div>


			<div class="form-group">
				{{ Form::label('phone','شماره ثابت',['class'=>'control-label col-lg-3']) }}
				<div class="col-lg-7">
					{{ Form::text('phone',null,['class'=>'form-control','placeholder'=>'شماره ثابت خود را وارد نمایید']) }}
				</div>
			</div>

			<div class="form-group">
				{{ Form::label('code','کد پستی',['class'=>'control-label col-lg-3']) }}
				<div class="col-lg-7">
					{{ Form::text('code',null,['class'=>'form-control','placeholder'=>'کد پستی خود را وارد نمایید.']) }}
				</div>
			</div> 

			<div class="form-group">
				{{ Form::label('password2','گذر واژه ',['class'=>'control-label col-lg-3']) }}
				<div class="col-lg-7">
					{{ Form::password('password2',null,['class'=>'form-control','placeholder'=>'گذرواژه خود را وارد نمایید.']) }}
				</div>
			</div>


			<div class="form-group">
				{{ Form::label('role','انتخاب نقش کاربر',['class'=>'control-label col-lg-3']) }}
				<div class="col-lg-7">
					{{ Form::select('role',$roles,null,['class'=>'form-control']) }}
				</div>
			</div>

			<div class="form-group">
                <label class="control-label col-lg-4">آپلود عکس</label>
                <div class="col-lg-8">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                        <div>
                            <span class="btn btn-file btn-success"><span class="fileupload-new">انتخاب عکس</span><span class="fileupload-exists">تغییر </span><input type="file" name="imguser" /></span>
                            <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">حذف</a>
                        </div>
                    </div>
                </div>
            </div>

			<div class="form-group">
				{{ Form::label('address','آدرس ',['class'=>'control-label col-lg-3']) }}
				<div class="col-lg-7">
					{{ Form::textarea('address',null,['class'=>'form-control','placeholder'=>'آدرس خود را وارد نمایید.']) }}
				</div>
			</div> 

			<div class="form-group">
				{{ Form::label('details','توضیحات ',['class'=>'control-label col-lg-3']) }}
				<div class="col-lg-7">
					{{ Form::textarea('details',null,['class'=>'form-control','placeholder'=>'توضیحات اضافی خود را وارد نمایید.']) }}
				</div>
			</div> 


			<div class="form-actions" style="text-align:center;margin-bottom:80px;">
			    {{ Form::submit('ثبت اطلاعات ویرایش شده',['class'=>'btn btn-primary btn-lg']) }}
			</div>

        {!! Form::close() !!}

	</div>
</div>


@endsection



@section('script')
<script src="<?= Url('assets/plugins/jasny/js/bootstrap-fileupload.js'); ?>"></script>
@endsection