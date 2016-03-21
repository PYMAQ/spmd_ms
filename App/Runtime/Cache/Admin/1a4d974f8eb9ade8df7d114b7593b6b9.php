<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE HTML>
<html>
 <head>
  <title>后台管理--党员发展评估系统</title>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <link href="__PUBLIC__/bui-bootstrap/assets/css/dpl-min.css" rel="stylesheet" type="text/css" />
  <link href="__PUBLIC__/bui-bootstrap/assets/css/bui-min.css" rel="stylesheet" type="text/css" />
   <link href="__PUBLIC__/bui-bootstrap/assets/css/main-min.css" rel="stylesheet" type="text/css" />
 </head>
 <body>

  <div class="header">
    
      <div class="dl-title">
       <!--<img src="/chinapost/Public/__PUBLIC__/bui-bootstrap/assets/img/top.png">-->
      </div>

    <div class="dl-log">欢迎您，<span class="dl-log-user"><?php echo ($username); ?></span><a href="<?php echo U('Home/Login/logout');?>" title="退出系统" class="dl-log-quit">[退出]</a>
    </div>
  </div>
   <div class="content">
    <div class="dl-main-nav">
      <div class="dl-inform"><div class="dl-inform-title"><s class="dl-inform-icon dl-up"></s></div></div>
      <ul id="J_Nav"  class="nav-list ks-clear">
        		<li class="nav-item dl-selected"><div class="nav-item-inner nav-home">系统管理</div></li>	
            <li class="nav-item dl-selected"><div class="nav-item-inner nav-order">发展管理</div></li> 
            <li class="nav-item dl-selected"><div class="nav-item-inner nav-inventory">评估管理</div></li>      

      </ul>
    </div>
    <ul id="J_NavContent" class="dl-tab-conten">

    </ul>
   </div>
  <script type="text/javascript" src="__PUBLIC__/bui-bootstrap/assets/js/jquery-1.8.1.min.js"></script>
  <script type="text/javascript" src="__PUBLIC__/bui-bootstrap/assets/js/bui-min.js"></script>
  <script type="text/javascript" src="__PUBLIC__/bui-bootstrap/assets/js/common/main-min.js"></script>
  <script type="text/javascript" src="__PUBLIC__/bui-bootstrap/assets/js/config-min.js"></script>
  <script>
  var node = "<?php echo U('Admin/Rbac/node');?>",
      role = "<?php echo U('Admin/Rbac/role');?>",
      user = "<?php echo U('Admin/Rbac/user');?>",
      task = "<?php echo U('Admin/Rbac/task');?>",
      sysconf = "<?php echo U('Admin/Rbac/sysConf');?>",

      Account = "<?php echo U('Home/Account/userinfo');?>",
      password = "<?php echo U('Home/Account/updateinfo');?>?type=password",
      query = "<?php echo U('Admin/Query/index');?>",
      checkTask = "<?php echo U('Admin/Check/index');?>",
      checkActivity = "<?php echo U('Admin/Check/activity');?>",
      video = "<?php echo U('Admin/Video/index');?>",
      fields = "<?php echo U('Admin/Fields/index');?>",
      classes = "<?php echo U('Admin/Rbac/classes');?>",
      registerCheck = "<?php echo U('Admin/Check/registerCheck');?>",
      
      addstudy = "<?php echo U('Admin/Assess/addStudy');?>",
      importstudy = "<?php echo U('Admin/Assess/importStudy');?>",
      addthink = "<?php echo U('Admin/Assess/addThink');?>",
      importthink = "<?php echo U('Admin/Assess/importThink');?>"
    BUI.use('common/main',function(){
      var config = 
      [{id:'100',homePage : '103',menu:[
          {text:'系统管理',
           items:[{id:'101',text:'节点管理',href:node},
                  {id:'102',text:'角色管理',href:role},
                  {id:'103',text:'用户管理',href:user},
                  {id:'104',text:'字段管理',href:fields},
                  {id:'105',text:'专业班级',href:classes},
                  {id:'106',text:'流程管理',href:task},
                  {id:'107',text:'系统配置',href:sysconf}

                  ]},


          {text:'个人管理',
           items:[{id:'106',text:'账户管理',href:Account},
                  {id:'107',text:'修改密码',href:password}
                  ]}
                  ]},
      {id:'200',homePage : '201',menu:[{text:'发展管理',
           items:[{id:'201',text:'查询业务',href:query},
                  {id:'202',text:'任务审核',href:checkTask},
                  {id:'203',text:'活动审核',href:checkActivity},
                  {id:'204',text:'视频学习',href:video},
                  {id:'205',text:'通知公告',href:'/pmd/index.php/Admin/Notice/index'},
                  {id:'206',text:'注册审核',href:registerCheck}
                  ]}]},
        {id:'300',homePage : '301',menu:[{text:'学习相关',
           items:[{id:'301',text:'编辑',href:addstudy},
                  {id:'302',text:'导入',href:importstudy}
                 
                  ]},
                  {text:'思想相关',
           items:[{id:'303',text:'编辑',href:addthink},
                  {id:'304',text:'导入',href:importthink}
                  ]}

                  ]}
                  ];
      new PageUtil.MainPage({
        modulesConfig : config
      });
    });
  </script>
 </body>
</html>