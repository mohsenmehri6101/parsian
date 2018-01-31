@extends('layouts.adminLayouts')

@section('title')
    ایجاد رزومه
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
    <div>
        <div class="alert alert-success" style="text-align: center;">
            <h3>ثبت شد</h3>
        </div>
        <a class="btn btn-primary" href="<?=  Url('admin/cv/create') ?>" style="color: white;">بازگشت</a>
    </div>
@endsection