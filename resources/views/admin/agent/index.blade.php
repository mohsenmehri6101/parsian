@extends('layouts.adminLayouts')
@section('title')
     نمایندگی
@endsection

@section('head')
    <link rel="stylesheet" href="<?= Url('dist/dropzone.min.css'); ?>" />
    <style>
        .modal-body{
            height: 250px;
            overflow-y: auto;
        }
        @media (min-height: 500px) {
            .modal-body { height: 400px; }
        }

        @media (min-height: 800px) {
            .modal-body { height: 600px; }
        }
    </style>
@endsection

@section('script')
    <script  src="<?= Url('dist/dropzone.min.js'); ?>"></script>
@endsection

@section('content')
        <!-- manage agent -->
        <div class="table-responsive">
            <div class="row">
                <div class="col-sm-12">
                    <h2>ویرایش و مشاهد نماینده ها</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12"> <div style="border:1px solid lightgrey;margin-bottom:20px;"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-condensed table-hover">
                        <thead>
                        <tr>
                            <th>نام شرکت</th>
                            <th>نام مدیرعامل</th>
                            <th>استان</th>
                            <th>شهرستان</th>
                            <th>جزئیات بیشتر</th>
                            <th>ویرایش</th>
                            <th>حذف</th>
                        </tr>
                        </thead>
                        @foreach($agent_db as $agent_db2)
                            <tr>
                                <td>
                                    {{ $agent_db2->name_company }}
                                </td>
                                <td>{{ $agent_db2->manage_agent }}</td>
                                <td>{{ $agent_db2->city_ }}</td>
                                <td>{{ $agent_db2->city }}</td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#{{$agent_db2->id }}">
                                        <span ><i class="icon-list"></i></span>
                                    </a>
                                </td>
                                <td>
                                    <a href="<?= Url('admin/agent/'.$agent_db2->id.'/edit') ?>">
                                        <span ><i class="icon-edit"></i></span>
                                    </a>
                                </td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#{{$agent_db2->id}}_delete">
                                        <span ><i class="glyphicon glyphicon-trash"></i></span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    @foreach($agent_db as $agent_db)
        <!-- foreach 2 -->
        <!-- modal delete -->
            <div class="row">
                <div class="col-sm-12">
                    <!-- modal delete -->
                    <div id="{{$agent_db->id}}_delete" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">حذف شرکت  {{ $agent_db->name_company }}</h4>
                                </div>
                                <div class="modal-body">
                                    <p>آیا مطمئن هستید</p>
                                </div>
                                <div class="modal-footer">
                                    <div class="row">
                                        <div class="col-lg-8"></div>
                                        <div class="col-lg-2">
                                            <form action="<?= Url('admin/agent/'.$agent_db->id); ?>" method="POST">
                                                <input type="hidden" name="_token" value="{{csrf_token()}}" >
                                                <input type="hidden" name="_method" value="DELETE" >
                                                <button type="submit" class="btn btn-danger">حذف کردن</button>
                                            </form>
                                        </div>
                                        <div class="col-lg-2">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">انصراف</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- end-modal delete -->
        <!-- modal details -->
            <div class="row">
                <div class="col-sm-12">
                    <!-- modal details -->
                    <div id="{{$agent_db->id }}" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">شرکت {{ $agent_db->name_company }}</h4>
                                </div>
                                <div class="modal-body">
                                    <a href="<?= Url('admin/agent/'.$agent_db->id.'/edit') ?>" title="  ویرایش {{ $agent_db->name_company }}" class="close" data-target="#{{$agent_db->id }}_edit">
                                        <span ><i class="glyphicon glyphicon-edit"></i></span>
                                    </a>
                                    <br>
                                    <div class="row">
                                        <div class="col-xs-3">نام مدیر عامل</div>
                                        <div class="col-xs-9">{{ $agent_db->manage_agent }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-3">شماره مدیرعامل</div>
                                        <div class="col-xs-9">{{ $agent_db->phone_manage }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-3">نام استان</div>
                                        <div class="col-xs-9">{{ $agent_db->city_ }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-3">نام شهر</div>
                                        <div class="col-xs-9">{{ $agent_db->city }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-3">توضیحات</div>
                                        <div class="col-xs-9">{{ $agent_db->explain }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-3">ایمیل</div>
                                        <div class="col-xs-9">{{ $agent_db->email }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-3">شماره ثابت</div>
                                        <div class="col-xs-9">{{ $agent_db->phone_fixed }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-3">شماره ثبت</div>
                                        <div class="col-xs-9">{{ $agent_db->number_save }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-3">کد اقتصادی</div>
                                        <div class="col-xs-9">{{ $agent_db->number_economy }}</div>
                                    </div>
                                    <a href="#" title=" حذف {{ $agent_db->name_company }}" class="close" data-dismiss="modal" data-toggle="modal" data-target="#{{$agent_db->id }}_delete">
                                        <span ><i class="glyphicon glyphicon-trash"></i></span>
                                    </a>
                                </div>
                                <script>

                                </script>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- end-modal details -->
            <!-- end-foreach 2 -->
        @endforeach
@endsection