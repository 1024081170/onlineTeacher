<div class="layui-header">
  <div class="layui-logo">哈喽</div>
  <!-- 头部区域（可配合layui已有的水平导航） -->
  <ul class="layui-nav layui-layout-left">
    <li class="layui-nav-item"><a href="">控制台</a></li>
    <li class="layui-nav-item">
      <a href="javascript:;">其它系统</a>
      <dl class="layui-nav-child">
        <dd><a href="">邮件管理</a></dd>
        <dd><a href="">消息管理</a></dd>
        <dd><a href="">授权管理</a></dd>
      </dl>
    </li>
  </ul>
  <ul class="layui-nav layui-layout-right">
    <li class="layui-nav-item">
      <a href="javascript:;">
        {{--<img src="__STATIC__/1.png" class="layui-nav-img">--}}
      </a>
      <dl class="layui-nav-child">
        <dd><a href="">基本资料</a></dd>
        <dd><a href="{:url('admin/editPass')}">修改密码</a></dd>
      </dl>
    </li>
    <li class="layui-nav-item"><a id="logout" href="{:url('login/logout')}">退出</a></li>
  </ul>
</div>
<script type="text/javascript">
$('#logout').click(function(){
  var out=confirm('确定退出');
  if (out) {
    location.href="{:url('login/logout')}";
  }else{
    return false;
  }
})
</script>