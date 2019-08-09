<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="{{asset('admin/login/css/normalize.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin/login/css/demo.css')}}" />
    <!--必要样式-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/login/css/component.css')}}" />
    <link rel="stylesheet" href="{{asset('layui/css/layui.css')}}">
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('layui/layui.js')}}"></script>
    <!--[if IE]>
    <script src="__STATIC__/admin/login/js/html5.js"></script>
    <![endif]-->
    <style>
        input::-webkit-input-placeholder{
            color:rgba(0, 0, 0, 0.726);
        }
        input::-moz-placeholder{   /* Mozilla Firefox 19+ */
            color:rgba(0, 0, 0, 0.726);
        }
        input:-moz-placeholder{    /* Mozilla Firefox 4 to 18 */
            color:rgba(0, 0, 0, 0.726);
        }
        input:-ms-input-placeholder{  /* Internet Explorer 10-11 */
            color:rgba(0, 0, 0, 0.726);
        }
    </style>
</head>
<body>
<div class="container demo-1">
    <div class="content">
        <div id="large-header" class="large-header">
            <canvas id="demo-canvas"></canvas>
            <div class="logo_box">
                <h3>教师注册</h3>
                <form  method="post"  class="layui-form">
                    <div class="input_outer">
                        <span class="u_user"></span>
                        <input id="username" name="name" class="text" lay-verify="required" style="color: #000000 !important" type="text" placeholder="请输入名称">
                    </div>
                    <div class="input_outer">
                        <span class="us_uer"></span>
                        <input id="pwd" name="pwd" class="text" lay-verify="required" style="color: #000000 !important; position:absolute; z-index:100;"value="" type="password" placeholder="请输入密码">
                    </div>
                    <div class="input_outer">
                        <span class="us_uer"></span>
                        <input name="phone" class="text" lay-verify="required" style="color: #000000 !important; position:absolute; z-index:100;"value="" type="text" placeholder="请输入手机号">
                    </div>
                    <div class="mb2">
                        <a class="act-but submit" lay-submit lay-filter="*" href="javascript:;"  style="color: #FFFFFF">提交审核</a>
                    </div>
                    <div class="mb2">
                        <a class="act-but submit" href="/log/login"  style="color: #FFFFFF">登录</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><!-- /container -->
<script src="{{asset('admin/login/js/TweenLite.min.js')}}"></script>
<script src="{{asset('admin/login/js/EasePack.min.js')}}"></script>
<script src="{{asset('admin/login/js/rAF.js')}}"></script>
<script src="{{asset('admin/login/js/demo-1.js')}}"></script>
<script src="{{asset('admin/login/js/Longin.js')}}"></script>
<div style="text-align:center;">
</div>
</body>
</html>
<script type="text/javascript">
    layui.use(['layer','form'],function(){
        var layer = layui.layer;
        var form = layui.form;

        form.on('submit(*)',function(data){
            $.ajax({
                url:"/log/doregister",
                method:'post',
                data:data.field,
                success:function(msg){
                    console.log(msg);
                    if (msg.code == 1) {
                        layer.msg(msg.font,{icon:msg.code},function(){
                            location.href="/log/login";
                        });
                    }else if(msg.code == 2){
                        layer.msg(msg.font,{icon:msg.code});
                    }
                },
                dataType:'json'
            });
        });
    });
</script>