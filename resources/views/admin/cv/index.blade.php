@extends('layouts.adminLayouts')

@section('title')
    رزومه
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
            <!-- manage cv -->
            <div class="table-responsive">
                <div class="row">
                    <div class="col-sm-12">
                        <h2>ویرایش و مشاهد رزومه ها</h2>
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
                                <th>جزئیات بیشتر</th>
                                <th>ویرایش</th>
                                <th>حذف</th>
                            </tr>
                            </thead>
                            @foreach($cv_db as $cv_db1)
                            <tr>
                                <td>
                                    {{ $cv_db1->title }}
                                </td>
                                <td>{{ $cv_db1->date }}</td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#{{$cv_db1->id }}">
                                        <span ><i class="icon-list"></i></span>
                                    </a>
                                </td>
                                <td>
                                    <a href="<?= Url('admin/cv/'.$cv_db1->id.'/edit') ?>">
                                        <span ><i class="icon-edit"></i></span>
                                    </a>
                                </td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#{{$cv_db1->id}}_delete">
                                        <span ><i class="glyphicon glyphicon-trash"></i></span>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                                        <!-- Trigger the modal with a button -->
                                <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>   -->
                                <!-- Modal -->
                        </table>
                    </div>
                </div>
            </div>

            @foreach($cv_db as $cv_db)
                <!-- modal details -->
                <div id="{{$cv_db->id }}" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">{{ $cv_db->title }}</h4>
                            </div>
                            <div class="modal-body">
                                <a href="#" title="  ویرایش {{ $cv_db->title }}" class="close" data-dismiss="modal" data-toggle="modal" data-target="#{{$cv_db->id }}_edit">
                                    <span ><i class="glyphicon glyphicon-edit"></i></span>
                                </a>
                                <br>
                                <div class="row">
                                    <div class="col-xs-3">معمار</div>
                                    <div class="col-xs-9">{{ $cv_db->architect }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-3">کارفرما</div>
                                    <div class="col-xs-9">{{ $cv_db->employer }}</div>
                                </div><!-- architect employer  services year_construction useri  location  -->
                                <div class="row">
                                    <div class="col-xs-3">خدمات</div>
                                    <div class="col-xs-9">{{ $cv_db->services }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-3">کاربری</div>
                                    <div class="col-xs-9">{{ $cv_db->useri }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-3">موقعیت</div>
                                    <div class="col-xs-9">{{ $cv_db->location }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-3">سال ساخت</div>
                                    <div class="col-xs-9">{{ $cv_db->year_construction }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-3">توضیحات</div>
                                    <div class="col-xs-9">{{ $cv_db->content }}</div>
                                </div>
                                <a href="#" title=" حذف {{ $cv_db->title }}" class="close" data-dismiss="modal" data-toggle="modal" data-target="#{{$cv_db->id }}_delete">
                                    <span ><i class="glyphicon glyphicon-trash"></i></span>
                                </a>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal delete -->
                <div id="{{$cv_db->id}}_delete" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">حذف{{ $cv_db->tilte }}</h4>
                            </div>
                            <div class="modal-body">
                                <p>آیا مطمئن هستید</p>
                            </div>
                            <script>
                            </script>
                            <div class="modal-footer">
                                <form action="<?= Url('admin/cv/'.$cv_db->id); ?>" method="POST">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}" >
                                    <input type="hidden" name="_method" value="DELETE" >
                                    <button type="submit" class="btn btn-danger">حذف کردن</button>
                                </form>
                                <button type="button" class="btn btn-default" data-dismiss="modal">انصراف</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

@endsection