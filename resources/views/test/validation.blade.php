<!DOCTYPE html>
        <html>
                <head>
                    <title>
                        form
                    </title>
                    <link rel="stylesheet" type="text/css" href="dist/bootstrap.min.css">
                </head>
                <body style="text-align:center;">
                    <?php
                            #echo $avalid;
                            #var_dump($avalid->all());
                    ?>
                    <div style="width: 400px;margin:8px;padding:8px;;" class="panel panel-success">
                        <form class="form" action="<?= Url('/vali');?>" method="post" >
                            <table class="table">
                                @if($errors->has('name'))
                                        <tr style="color:red;">
                                            <td>name</td>
                                            <td><input  class="form-control alert-danger"  type="text" name="name" placeholder="{{$errors->first('name')}}">
                                            </td>
                                        </tr>
                                @else
                                    <tr>
                                        <td>name</td>
                                        <td><input  class="form-control "  type="text" name="name"></td>
                                    </tr>
                                @endif
                                @if($errors->has('name'))
                                        <tr style="color:red;">
                                            <td>lname</td>
                                            <td><input  class="form-control alert-danger"  type="text" name="lname" placeholder="{{$errors->first('lname')}}">
                                            </td>
                                        </tr>
                                @else
                                        <tr>
                                            <td>lname</td>
                                            <td><input  class="form-control "  type="text" name="lname"></td>
                                        </tr>
                                    @endif
                                    @if($errors->has('name'))
                                        <tr style="color:red;transition:5s;">
                                            <td>name</td>
                                            <td><input  class="form-control alert-danger"  type="text" name="year" placeholder="{{$errors->first('year')}}">
                                            </td>
                                        </tr>
                                    @else
                                        <tr>
                                            <td>name</td>
                                            <td><input  class="form-control "  type="text" name="year"></td>
                                        </tr>
                                    @endif
                            </table>
                            <input type="hidden"  class="form-control" name="_token" value="<?php echo csrf_token(); ?>">

                            <input  class="btn btn-success" type="submit" name="BtnClick">
                        </form>
                    </div>

                </body>

        </html>