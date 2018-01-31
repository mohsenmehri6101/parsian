<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>
        form
    </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="dist/bootstrap.min.css">
    {!! Html::style('dist/bootstrap.min.css') !!}
    <meta name="CSRF-TOKEN" content="{{Csrf_token()}}">
    <style>
        ul {
            list-style:none;
            margin:0;
            padding:0;
        }
        ul li {
            padding:3px;
            background:#EEE;
            border:1px solid #000000;
            width:200px;
            margin:2px;
        }
        .info {
            padding:5px;
            background:#FFF;
            color:#000;
            display:none;
        }
    </style>
</head>
<body>
<div  class="container-flueid">
    <form id="form1" class="form" action="{{url('/ajaxf')}}" method="post">
        <label class="text text-primary" style="margin:8px;" >name1</label>
        <input type="text" name="name1" class="input" style="margin:8px;" ><span class="error" id="name1" style="margin:8px;" ></span>
        <br>
        <label class="text text-primary" style="margin:8px;" >name2</label>
        <input type="text" name="name2" class="input" style="margin:8px;" ><span class="error" id="name2"  style="margin:8px;" ></span>
        <br>
        <input type="submit" name="Click_" class="btn btn-success" style="width:144px;height:40px;margin-left:140px;" value="Ok">
         <!-- <input type="submit" name="Click1_" class="btn btn-success" value="button2"> -->
        <input type="hidden"  class="form-control" name="_token" value="<?php echo csrf_token(); ?>">
    </form>
    <div id="result" style="color:green;" >
    </div>
    <span class="btn btn-primary" onclick="testAjax('mohsenmehri.ir')" style="margin:15px;margin-top:80px;">test ajax</span>
    <script src="/dist/jquery-1.9.1.min.js">
    </script>


    <?php $url=Url('/ajaxf'); ?>
    <script type="text/javascript">
        testAjax = function(name)
        {
            //hello all
            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN' : $('meta[name="CSRF-TOKEN"]').attr('content')
                }
            });
            $.ajax({
                url:'<?= $url ?>',
                type:'POST',
                data:'name='+ name,
                success: function (data)
                {
                    $("div#result").html(data);
                }
            });

        }
    </script>
    <script>
        $(document).ready(function()
        {
                    $("#form1").submit(function (event)
                    {
                                event.preventDefault();
                                var $this = $(this);
                                var url = $this.attr('action');
                                $.ajax(
                                        {
                                            url: url,
                                            type: 'POST',
                                            datatype: 'JSON',
                                            data: $this.serialize(),
                                        }
                                )
                                .done(function (response)
                                {
                                    $("div#result").empty();
                                    $.each(response, function (index , val)
                                    {
                                        switch (index)
                                        {
                                            case "success":
                                                $("div#result").html(val);
                                                break;

                                        }
                                    }
                                    )
                                }
                                )

                                .fail(function(){
                                    console.log('error');
                                });

                            }
                    );
        }
        );
    </script>
</div>
<div>
    <span id="ids" class="btn btn-primary" style="margin:15px;margin-top:80px;">test ajax</span>
    <script>
        $(document).ready(function() {
            $("span#ids").mouseover(function () {
               $(this).css({"margin-left":"1000px","transition":"1000ms"});
            });
        });
    </script>
</div>

<div>
    <ul>
        <li>
            <a href="http://blog.monavarian.ir" > Blog.Monavarian.ir </a>
            <div class="info">mohsen monavarian Weblog</div>
        </li>
        <li>
            <a href="http://share.wanted.ir" >wanted.ir </a>
            <div class="info">The First shared TextBoxes in Iran</div>
        </li>
        <li>
            <a href="http://www.res2ran.com" >Res2Ran.com </a>
            <div class="info">Shiraz restuarants And FastFoods Guide , Food
                instructions</div>
        </li>
    </ul>
    <script type="text/javascript">
        $(document).ready(function(){
            $('a').mouseover(function(){
                $(this).next('div.info').slideDown('slow');
            })
            $('a').mouseout(function(){
                $(this).next('div.info').slideUp('slow');
            });
        });
    </script>
</div>

</body>
</html>