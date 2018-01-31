<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
                <head>
                    <title>
                        form
                    </title>

                    <link rel="stylesheet" type="text/css" href="dist/bootstrap.min.css">
                </head>
                <body style="background-color:ghostwhite;">
                <div>
                    @section('lmohsen')
                </div>
                <div   style="border:1px solid lightgrey; margin-top:25px; margin:15px;padding:5px;background-color:whitesmoke;">
                    <table class="table table-default">
                        <tr class="success">
                            <td>id</td>
                            <td>name</td>
                            <td>url</td>
                            <td>date</td>
                            <td>age</td>
                        </tr>
                        @foreach($value as $valu)
                            <tr>
                                <td>{{$valu->id}}</td>
                                <td>{{$valu->name}}</td>
                                <td>{{$valu->url}}</td>
                                <td>{{$valu->date}}</td>
                                <td>{{$valu->age}}</td>
                            </tr>
                        @endforeach
                    </table>
                    {{$value->appends(['id'=>'23'])->fragment('content')->render()}}
                </div>
                </body>
        </html>