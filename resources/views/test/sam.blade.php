<!DOCTYPE html>
        <html>
                <head>
                    <title>
                        form
                    </title>
                    <link rel="stylesheet" type="text/css" href="dist/bootstrap.min.css">
                </head>
                <body>

                    <div class="fluied alert alert-success">
                        <?php # echo $value; ?>
                        hello every body
                    </div>
                    <div  class="container-flueid">
                        <form class="form" action="<?= url('sam'); ?>" method="post">
                            <label class="">madrak</label>
                            <input type="text" name="madrak" class="input">
                            <input type="submit" name="Click_" class="btn btn-success" value="Ok">
                            <input type="submit" name="Click1_" class="btn btn-success" value="button2">
                            <input type="hidden"  class="form-control" name="_token" value="<?php echo csrf_token(); ?>">


                        </form>
                    </div>

                     <!--
                    <div style="width: 400px;margin:8px;padding:8px;;" class="panel panel-success">
                        <form class="form" action="<?= Url('/');?>" method="post" >
                            <table class="table">
                                @if($errors->has('name'))
                                        <tr>
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
                                        <tr>
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
                                        <tr>
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


                -->

        </html>