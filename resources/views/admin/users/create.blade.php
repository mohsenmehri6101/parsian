@extends('layouts.adminLayouts')

@section('head')
<link rel="stylesheet" href="<?= Url('assets/css/bootstrap-fileupload.min.css'); ?>" />
@endsection

@section('content')

<div class="col-lg-12">
	<div class="row" >
		<h1> اضافه کردن کاربر جدید به سایت  </h1> 
	</div>
</div>
<hr/>
<div class="row">
	<div class="col-lg-12" >
		@if($errors->has('email'))
		<div class="panel-body no-margin-top">
		    <div class="alert alert-danger alert-dismissable">
		        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		            {!! $errors->first('email') !!}
		    </div>
		</div>
		@endif
		@if($errors->has('password'))
		<div class="panel-body">
		    <div class="alert alert-danger alert-dismissable">
		        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		            {!! $errors->first('password') !!}
		    </div>
		</div>
		@endif
		@if($errors->has('fname'))
		<div class="panel-body">
		    <div class="alert alert-danger alert-dismissable">
		        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		            {!! $errors->first('fname') !!}
		    </div>
		</div>
		@endif
		@if($errors->has('lname') )
		<div class="panel-body">
		    <div class="alert alert-danger alert-dismissable">
		        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		            {!! $errors->first('lname') !!}
		    </div>
		</div>
		@endif
		@if( $errors->has('img') )
		<div class="panel-body">
		    <div class="alert alert-danger alert-dismissable">
		        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		            {!! $errors->first('img') !!}
		    </div>
		</div>
		@endif
		{!! Form::open(['url'=>'admin/users','class'=>'form-horizontal','files'=>true]) !!}

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
			{{ Form::label('email','ایمیل ',['class'=>'control-label col-lg-3']) }}
			<div class="form-group input-group col-lg-7" style="margin-right: 1px;">
				<span class="input-group-addon">@</span>
				{{ Form::text('email',null,['class'=>'form-control','placeholder'=>'ایمیل  را وارد نمایید.']) }}
			</div>
			<div class="form-group">
				{{ Form::label('password','گذر واژه ',['class'=>'control-label col-lg-3']) }}
				<div class="col-lg-7">
					<div  style="border: 1px solid rgb(204,204,204);border-radius:3px;box-shadow:0  -1px 0  0  rgba(204,204,204,0.3) !important;">
					{{ Form::password('password',null,['class'=>'form-control','placeholder'=>'گذرواژه خود را وارد نمایید.']) }}
				</div></div>
			</div>
			<div class="form-group">
                <label class="control-label col-lg-4">آپلود عکس</label>
                <div class="col-lg-8">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                        <div>
                            <span class="btn btn-file btn-success"><span class="fileupload-new">انتخاب عکس</span><span class="fileupload-exists">تغییر </span><input type="file" name="img" /></span>
                            <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">حذف</a>
                        </div>
                    </div>
                </div>
            </div>
			<div class="form-group">
				{{ Form::label('details','توضیحات ',['class'=>'control-label col-lg-3']) }}
				<div class="col-lg-7">
					{{ Form::textarea('details',null,['class'=>'form-control','placeholder'=>'توضیحات اضافی خود را وارد نمایید.']) }}
				</div>
			</div>
			<div class="form-actions" style="text-align:center;margin-bottom:80px;">
			    {{ Form::submit('ثبت اطلاعات کاربر',['class'=>'btn btn-primary btn-lg']) }}
			</div>
        {!! Form::close() !!}
	</div>
</div>


@endsection


@section('script')
<script src="<?= Url('assets/plugins/jasny/js/bootstrap-fileupload.js'); ?>"></script>
@endsection