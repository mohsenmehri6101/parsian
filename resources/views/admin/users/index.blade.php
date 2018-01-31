@extends('layouts.adminLayouts')

@section('content')

<div class="col-lg-12">
	<div class="row" >
		<h1> نمایش و مدیریت کاربران سایت  <a href="<?= Url('admin/users'); ?>" class="btn btn-primary btn-sm btn-line btn-rect">افزودن کاربر </a> </h1> 
	</div>
</div>
<hr/>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                تمامی کاربران سایت
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>کد کاربر</th>
                                <th>نام </th>
                                <th>نام خانوادگی</th>
                                <th>نام کاربری</th>
                                <th> ایمیل  </th>
                                <th> تصویر کاربر </th>
                                <th> عملیات </th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach( $users as $user )
                            <tr class="gradeC">
                                <td> {{ $user->id }} </td>
                                <td> {{ $user->fname }} </td>
                                <td> {{ $user->lname }} </td>
                                <td> {{ $user->name }} </td>
                                <td> {{ $user->email }} </td>
                                <td>
                                    <img src="<?= Url('assets/imageusers/'.$user->img); ?>" width="60" height="60" alt="{{ $user->lname }}" title="{{ $user->lname }}"> 
                                </td>
                                <td>  
                                	<a href="<?= Url('admin/users/'.$user->id.'/edit'); ?>" class="btn btn-primary btn-sm btn-line">ویرایش</a>
                    				<a href="#" class="btn btn-danger btn-sm btn-line" data-toggle="modal" data-target="#delete{{ $user->id }}">حذف</a>
	                            </td>
                            </tr>
                            @endforeach
 
                        </tbody>
                    </table>
                </div>
               
            </div>

            {!! $users->render() !!}

        </div>
    </div>
</div>


<div class="row">
	<div class="col-lg-12">
    	@foreach( $users as $user )
        <div class="modal fade" id="delete{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="H2"> آیا از حذف کردن کاربر {{ $user->lname }}  اطمینان دارید ؟؟ </h4>
                    </div>
                    <div class="modal-body">

                    	<img src="<?= Url('assets/imageusers/'.$user->img); ?>" width="200" height="200" alt="{{ $user->lname }}" title="{{ $user->lname }}">
	                    
                    </div>
                    <div class="modal-footer">
                        
                        <form action="<?= Url('admin/users/'.$user->id); ?>" method="POST">
	                    	<input type="hidden" name="_token" value="{{ csrf_token() }}">  
	                    	<input type="hidden" name="_method" value="DELETE">

	                    	<input type="submit" name="btndelete" value="حذف کردن" class="btn btn-danger">
	                	</form>

                        <button type="button" class="btn btn-default" data-dismiss="modal">انصراف</button>

                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection