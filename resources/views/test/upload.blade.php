<!DOCTYPE html>
<html>
<head>
    <title>
        FormHtml
    </title>
    <!--
    <link rel="stylesheet" type="text/css" href="dist/bootstrap.min.css">
    -->
    {!! Html::style('dist/bootstrap.min.css') !!}
</head>
<body>
    {!! Form::open(['url'=>'/upload','files'=>true,]) !!}
        {{Form::file('fupload',['style'=>'padding:9px;margin:9px;','class'=>'btn btn-default'])}}
        {{Form::submit('upload',['style'=>'padding:9px;margin:9px;','class'=>'btn btn-default btn-primary'])}}
    {!! Form::close() !!}
    <div class="alert alert-success">
        <?php
            echo $va;
        ?>

    </div>
</body>
</html>