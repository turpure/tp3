<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.0.2
Version: 1.5.4
Author: KeenThemes
Website: http://www.keenthemes.com/
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>毛利润报表</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <meta name="MobileOptimized" content="320">
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="/Public/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
    <link href="/Public/assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <link href="/Public/assets/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/assets/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL PLUGIN STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link href="/Public/assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/assets/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/assets/css/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/assets/css/pages/tasks.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="/Public/assets/css/custom.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="stylesheet" type="text/css" href="/Public/css/bootstrap-select.min.css">


</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse navbar-fixed-top">
    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class="header-inner">
        <!-- BEGIN LOGO -->
        <a class="navbar-brand" href="index.html">
            <img src="/Public/assets/img/logo.png" alt="logo" class="img-responsive" />
        </a>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <img src="/Public/assets/img/menu-toggler.png" alt="" />
        </a>
        <a href="<?php echo U('home/Ulist/index');?>">查看用户列表</a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN TOP NAVIGATION MENU -->
        <ul class="nav navbar-nav pull-right">
            <!-- END TODO DROPDOWN -->
            <!-- BEGIN USER LOGIN DROPDOWN -->
            <li class="dropdown user">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                    <img alt="" src="/Public/assets/img/avatar1_small.jpg"/>
                    <span class="username"><?php echo ($username); ?></span>
                    <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="login.html"><i class="fa fa-key"></i>退出登录</a></li>
                </ul>
            </li>
            <!-- END USER LOGIN DROPDOWN -->
        </ul>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->


<div class="clearfix"></div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu">
            <li>
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler hidden-phone"></div>
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            </li>
            <li>
                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                <form class="sidebar-search" action="extra_search.html" method="POST">
                    <div class="form-container">
                        <div class="input-box">
                            <a href="javascript:;" class="remove"></a>
                            <input type="text" placeholder="Search..."/>
                            <input type="button" class="submit" value=" "/>
                        </div>
                    </div>
                </form>
                <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>
            <li class=" ">
            <!--start active 这是类的属性-->
            <a href="#" id="saler-netprofit-btn">
                <i class="fa fa-home"></i>
                <span class="title">销售毛利润报表</span>
                <span class="selected"></span>
            </a>
        </li>
            <li class="">
            <a id="exchangeRate-btn">
            <i class="fa fa-briefcase"></i>
            <span class="title">美元汇率</span>

            </a>

            </li>

            <li class=" " >
                <a href="<?php echo U('Demo/index/index');?>" id="dev-netprofit-btn" >
                    <!--<?php echo U('Demo/index/index');?>-->
                <i class="fa fa-bar-chart-o"></i>
                <span class="title">开发毛利润报表</span>
                </a>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN PAGE -->
    <div class="page-content">
        <!--<div class="row">-->
            <!--<div class="col-md-12">用户管理 对用户增删查改  查看用户列表，添加，删除，编辑，修改</div>-->
            <!--<a herf="<?php echo U('Home/Ulist/index');?>">查看用户列表</a>-->
            <!--<a herf="Home/Ulist/index">查看用户列表</a>-->
        <!--</div>-->


        <!-- BEGIN PAGE HEADER-->
        <div class="row page">
            <div class="col-md-12">
                <form class="form-horizontal myclass"  action="<?php echo U('Home/Product/index');?> " method="post">
                    <div class="portlet box red">
                        <div class="portlet-title">
                            <div class="caption"><i class="fa fa-globe"></i>毛利报表</div>
                            <div class="tools">
                                <a  href="<?php echo U('Home/Product/showUploadForm');?>">退款费用</a>|
                                <a  href="<?php echo U('Home/Product/diebasefee');?>">死库费用</a>
                                <a href="javascript:;" class="reload"></a>
                                <a href="javascript:;" class="remove"></a>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="form-group" >
                                <label for="pingtai" class="col-sm-1 control-label" >平台</label>
                                <div class="col-sm-2 " >
                                    <select  name="pingtai" class="form-control">
                                        <option value=""></option>

                                        <?php if(is_array($plat)): $i = 0; $__LIST__ = $plat;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["pingtai"]); ?>"><?php echo ($vo["pingtai"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>

                                </div>
                                <label for="saler" class="col-sm-1 control-label" >销售员</label>
                                <div class="col-sm-2" >
                                    <select name="saler[]"  class="form-control selectpicker"  multiple data-actions-box="true" >
                                        <?php if(is_array($salesman)): $i = 0; $__LIST__ = $salesman;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["salesman"]); ?>"><?php echo ($vo["salesman"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>

                                    </select>
                                </div>
                                <!--<label class="col-sm-1 control-label">发货时间</label>-->
                                <div class="col-sm-2">
                                    <select name="DateFlag" class="col-sm-2 form-control">
                                        <option value="1">发货时间</option>
                                        <option value="0">交易时间</option>
                                    </select>
                                </div>
                                <div class="col-sm-2">
                                    <input type="date" name="BeginDate" class="form-control" required/>
                                    <!--<input id="d11" type="text" name="BeginDate" class="form-control" placeholder="BeginDate" required="required">-->
                                    <!--<img onclick="WdatePicker({el:'d11'})" src="/Public/My97DatePicker/skin/datePicker.gif" width="16" height="22" align="absmiddle">-->
                                </div>
                                <div class="col-sm-2">
                                    <input type="date" name="EndDate" class="form-control" required/>
                                    <!--<input id="d12" type="text" name="EndDate" class="form-control"  placeholder="EndDate" required="required">-->
                                    <!--<img onclick="WdatePicker({el:'d12'})" src="/Public/My97DatePicker/skin/datePicker.gif" width="16" height="22" align="absmiddle">-->
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-1 control-label" >账号</label>

                                <div class="col-sm-2 " >
                                    <select  name="suffix[]" class="form-control selectpicker" multiple data-actions-box="true">
                                        <?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$p): $mod = ($i % 2 );++$i;?><option class="<?php echo ($p["pingtai"]); ?>" value="<?php echo ($p["suffix"]); ?>"><?php echo ($p["suffix"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>


                                </div>
                                <label for="StoreName" class="col-sm-1 control-label" >出货仓库</label>
                                <div class="col-sm-2" >
                                    <select name="StoreName[]"  class="form-control selectpicker"  multiple data-actions-box="true" >
                                        <option value="义乌仓">义乌仓</option>
                                        <option value="FBW仓库">FBW仓库</option>
                                        <option value="AMZ上海仓">AMZ上海仓</option>
                                        <option value="FBA仓库">FBA仓库</option>
                                        <option value="4PXUS">4PXUS</option>
                                    </select>
                                </div>
                                <!--<div class="col-sm-2" >-->
                                    <!--<input  type="text" name="ExchangeRate" class="form-control"   placeholder="美元汇率">-->
                                <!--</div>-->
                                <div class="col-sm-1" >
                                    <input  name="button" type="submit" class="btn btn-default btn-primary btn-lg btn-block"  id="form-sale-btn" value="查询">
                                </div>


                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row exchange-rate" style="display:none" >
            <div class="col-md-12 ">
                <form class="form-horizontal ">
                    <div class="portlet box red">
                        <div class="portlet-title">
                            <div class="caption"><i class="fa fa-globe"></i>汇率管理</div>
                            <div class="tools">
                                <a href="javascript:;" class="reload"></a>
                                <a href="javascript:;" class="remove"></a>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="form-group" >
                                <label  class="col-sm-1 control-label" >销售汇率</label>
                                <div class="col-sm-2" >
                                    <input  type="text" name="SalerRate" class="form-control"  id="salerrate" placeholder="<?php echo ($rate[0]['salerrate']); ?>">

                                </div>
                                <div class="col-sm-1" >
                                    <input  name="button" type="button" class="btn btn-default btn-primary btn-lg btn-block"  id="save-salerrate" value="保存">
                                </div>
                            </div>
                            <div class="form-group">

                                <label  class="col-sm-1 control-label" >开发汇率</label>
                                <div class="col-sm-2" >
                                    <input  type="text" name="DevRate" class="form-control" id="devrate"  placeholder="<?php echo ($rate['devrate']); ?>">
                                </div>
                                <div class="col-sm-1" >
                                    <input  name="button" type="button" class="btn btn-default btn-primary btn-lg btn-block" id="save-devrate" value="保存">
                                </div>

                            </div>

                        </div>
                    </div>
                </form>
            </div>

        </div>





        <div>
        </div>


    </div>
    <!-- END PAGE -->

</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="footer">
    <div class="footer-inner">
        2013 &copy; Metronic by keenthemes.
    </div>
    <div class="footer-tools">
			<span class="go-top">
			<i class="fa fa-angle-up"></i>
			</span>
    </div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

<script src="//cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="/Public/js/jquery.min.js"></script>
<script src="http://libs.baidu.com/jquery/1.10.0/jquery.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="/Public/js/bootstrap-select.min.js"></script>
<script src="/Public/js/moment.min.js"></script>
<script src="/Public/js/zh-cn.js"></script>
<script src="/Public/js/sidebar.js"></script>
<script src="/Public/js/jquery_chained.js"></script>


<script type="text/javascript">
    $(function(){
        $("#series").chained("#mark");
    });
</script>

<script>
    $(document).ready(function(){
        //显示汇率管理页面
        $('#exchangeRate-btn').click(function(){
            $('.page').hide();
            $('.devcondition-page').hide();
            $.ajax({
                url:"<?php echo U('home/ExchangeRateM/as_rate');?>",
                success:function(data){
                    var da =JSON.parse(data);
                    $('#salerrate').attr('placeholder',da[0].salerrate);
                    $('#devrate').attr('placeholder',da[0].devrate);
                    $('#salerrate').attr('value',da[0].salerrate);
                    $('#devrate').attr('value',da[0].devrate);
                    //data可能是xmlDoc、jsonObj、html、text等等
                    //this;  //调用本次ajax请求时传递的options参数
                }
            })
            $('.exchange-rate').show();


        });
        //更新销售汇率
        $('#save-salerrate').click(function(){
            var darate =$("input[name='SalerRate']").val();
//            console.log(darate);
            $.ajax({
                type:'POST',
                url:"<?php echo U('home/ExchangeRateM/update_salerrate');?>",
                data:{'salerrate':darate},
                success:function(msg){
                    alert(msg);
                }

            })
        });

        //更新开发汇率
        $('#save-devrate').click(function(){
            var devrate =$("input[name='DevRate']").val();
            $.ajax({
                type:'post',
                url:"<?php echo U('home/ExchangeRateM/update_devrate');?>",
                data:{'devrate':devrate},
                success:function(msg){
                    alert(msg);
                }

            })
        });


        //nav切换
        $('#saler-netprofit-btn').click(function(){
            $('.page').show();
            $('.exchange-rate').hide();

        })

        //开发毛利表
        $('#dev-netprofit-btn').click(function(){

            $('.page').hide();
            $('.exchange-rate').hide();
            $('.devcondition-page').show();

            $('#form-dev-btn').click(function(){
                console.log(888);
                var data = $('#partment option:selected').text();
                console.log(data);
                $.ajax({
                type: "GET",
                url: "<?php echo U('Demo/index/index');?>",
                data:{part:data},
                success: function(data) {

                        if(data == "false"){
                            window.location.href="<?php echo U('Demo/index/index');?>";
                        }else if (data == "true"){
                            window.location.href="<?php echo U('Demo/index/index');?>";
                        }
                    }
                })
            })

        })

    });
</script>