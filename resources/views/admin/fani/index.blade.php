@extends('layouts.adminLayouts')
@section('title')
    مدیریت
@endsection

@section('head')
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

@section('content')
    <!-- manage fani -->
    <div class="table-responsive">
        <div class="row">
            <div class="col-sm-12">
                <h2>ویرایش و مشاهده اطلاعات فنی</h2>
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
                        <th>عنوان</th>
                        <th>تاریخ</th>
                        <th>تعداد مشاهدات</th>
                        <th>جزئیات بیشتر</th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                    </thead>
                    @foreach($fani_db as $fani_db2)
                        <tr>
                            <td>
                                {{ $fani_db2->title }}
                            </td>
                            <td>{{ $fani_db2->date }}</td>
                            <td>{{ $fani_db2->seen }}</td>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#{{$fani_db2->id }}">
                                    <span ><i class="icon-list"></i></span>
                                </a>
                            </td>
                            <td>
                                <a href="<?= Url('admin/fani/'.$fani_db2->id.'/edit') ?>">
                                    <span ><i class="icon-edit"></i></span>
                                </a>
                            </td>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#{{$fani_db2->id}}_delete">
                                    <span ><i class="glyphicon glyphicon-trash"></i></span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    @foreach($fani_db as $fani_db)
        <!-- foreach 2 -->
        <!-- modal delete -->
        <div class="row">
            <div class="col-sm-12">
                <!-- modal delete -->
                <div id="{{$fani_db->id}}_delete" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">حذف {{ $fani_db->title }}</h4>
                            </div>
                            <div class="modal-body">
                                <p>آیا مطمئن هستید</p>
                            </div>
                            <div class="modal-footer">
                                <div class="row">
                                    <div class="col-lg-8"></div>
                                    <div class="col-lg-2">
                                        <form action="<?= Url('admin/fani/'.$fani_db->id); ?>" method="POST">
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
                <div id="{{$fani_db->id }}" class="modal fade" role="dialog">
                    <div class="modal-dialog" >
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title"> {{ $fani_db->title }}</h4>
                            </div>
                            <div class="modal-body">
                                <a href="<?= Url('admin/fani/'.$fani_db->id.'/edit') ?>" title="  ویرایش {{ $fani_db->title }}" class="close" data-target="#{{$fani_db->id }}_edit">
                                    <span ><i class="glyphicon glyphicon-edit"></i></span>
                                </a>
                                <br>
                                <div class="row">
                                    <div class="col-xs-12">متن</div>
                                </div>
                                <div class="row">

                                    <div class="col-xs-12">{!! $fani_db->content !!}</div>
                                </div>
                                <div class="row">
                                    <br>
                                    <br>
                                </div>
                                <a href="#" title=" حذف {{ $fani_db->title }}" class="close" data-dismiss="modal" data-toggle="modal" data-target="#{{$fani_db->id }}_delete">
                                    <span ><i class="glyphicon glyphicon-trash"></i></span>
                                </a>
                            </div>
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