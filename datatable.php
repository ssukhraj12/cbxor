<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ULTIMO Admin Dashboard Template</title>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/animate.css" rel="stylesheet" type="text/css" />
<link href="css/admin.css" rel="stylesheet" type="text/css" />
<link href="plugins/data-tables/DT_bootstrap.css" rel="stylesheet">
<link href="plugins/advanced-datatable/css/demo_table.css" rel="stylesheet">
<link href="plugins/advanced-datatable/css/demo_page.css" rel="stylesheet">
</head>
<body class="light_theme  fixed_header left_nav_fixed">
<div class="wrapper">
  <!--\\\\\\\ wrapper Start \\\\\\-->
  <div class="header_bar">
    <!--\\\\\\\ header Start \\\\\\-->
    <div class="brand">
      <!--\\\\\\\ brand Start \\\\\\-->
      <div class="logo" style="display:block"><span class="theme_color">ULTIMO</span> Admin</div>
      <div class="small_logo" style="display:none"><img src="images/s-logo.png" width="50" height="47" alt="s-logo" /> <img src="images/r-logo.png" width="122" height="20" alt="r-logo" /></div>
    </div>
    <!--\\\\\\\ brand end \\\\\\-->
    <div class="header_top_bar">
      <!--\\\\\\\ header top bar start \\\\\\-->
      <a href="javascript:void(0);" class="menutoggle"> <i class="fa fa-bars"></i> </a>
      <div class="top_left">
        <div class="top_left_menu">
          <ul>
            <li> <a href="javascript:void(0);"> <i class="fa fa-repeat"></i> </a> </li>
            <li> <a href="javascript:void(0);"> <i class="fa fa-th-large"></i> </a> </li>
          </ul>
        </div>
      </div>
      <a href="javascript:void(0);" class="add_user" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus-square"></i> <span> New Task</span> </a>
      <div class="top_right_bar">
        <div class="top_right">
          <div class="top_right_menu">
            <ul>
              <li class="dropdown"> <a href="javascript:void(0);" data-toggle="dropdown"> Tasks <span class="badge badge">8</span> </a>
                <ul class="drop_down_task dropdown-menu">
                  <div class="top_pointer"></div>
                  <li>
                    <p class="number">You have 7 pending tasks</p>
                  </li>
                  <li> <a href="task.php" class="task">
                    <div class="green_status task_height" style="width:80%;"></div>
                    <div class="task_head"> <span class="pull-left">Task Heading</span> <span class="pull-right green_label">80%</span> </div>
                    <div class="task_detail">Task details goes here</div>
                    </a> </li>
                  <li> <a href="task.php" class="task">
                    <div class="yellow_status task_height" style="width:50%;"></div>
                    <div class="task_head"> <span class="pull-left">Task Heading</span> <span class="pull-right yellow_label">50%</span> </div>
                    <div class="task_detail">Task details goes here</div>
                    </a> </li>
                  <li> <a href="task.php" class="task">
                    <div class="blue_status task_height" style="width:70%;"></div>
                    <div class="task_head"> <span class="pull-left">Task Heading</span> <span class="pull-right blue_label">70%</span> </div>
                    <div class="task_detail">Task details goes here</div>
                    </a> </li>
                  <li> <a href="task.php" class="task">
                    <div class="red_status task_height" style="width:85%;"></div>
                    <div class="task_head"> <span class="pull-left">Task Heading</span> <span class="pull-right red_label">85%</span> </div>
                    <div class="task_detail">Task details goes here</div>
                    </a> </li>
                  <li> <span class="new"> <a href="task.php" class="pull_left">Create New</a> <a href="task.php" class="pull-right">View All</a> </span> </li>
                </ul>
              </li>
              <li class="dropdown"> <a href="javascript:void(0);" data-toggle="dropdown"> Mail <span class="badge badge color_1">4</span> </a>
                <ul class="drop_down_task dropdown-menu">
                  <div class="top_pointer"></div>
                  <li>
                    <p class="number">You have 4 mails</p>
                  </li>
                      <li> <a href="readmail.php" class="mail"> <span class="photo"><img src="images/user.png" /></span> <span class="subject"> <span class="from">sarat m</span> <span class="time">just now</span> </span> <span class="message">Hello,this is an example msg.</span> </a> </li>
                  <li> <a href="readmail.php" class="mail"> <span class="photo"><img src="images/user.png" /></span> <span class="subject"> <span class="from">sarat m</span> <span class="time">just now</span> </span> <span class="message">Hello,this is an example msg.</span> </a> </li>
                  <li> <a href="readmail.php" class="mail red_color"> <span class="photo"><img src="images/user.png" /></span> <span class="subject"> <span class="from">sarat m</span> <span class="time">just now</span> </span> <span class="message">Hello,this is an example msg.</span> </a> </li>
                  <li> <a href="readmail.php" class="mail"> <span class="photo"><img src="images/user.png" /></span> <span class="subject"> <span class="from">sarat m</span> <span class="time">just now</span> </span> <span class="message">Hello,this is an example msg.</span> </a> </li>
              
                </ul>
              </li>
              <li class="dropdown"> <a href="javascript:void(0);" data-toggle="dropdown"> notification <span class="badge badge color_2">6</span> </a>
                <div class="notification_drop_down dropdown-menu">
                  <div class="top_pointer"></div>
                  <div class="box"> <a href="inbox.php"> <span class="block primery_6"> <i class="fa fa-envelope-o"></i> </span> <span class="block_text">Mailbox</span> </a> </div>
                  <div class="box"> <a href="calendar.php"> <span class="block primery_2"> <i class="fa fa-calendar-o"></i> </span> <span class="block_text">Calendar</span> </a> </div>
                  <div class="box"> <a href="maps.php"> <span class="block primery_4"> <i class="fa fa-map-marker"></i> </span> <span class="block_text">Map</span> </a> </div>
                  <div class="box"> <a href="todo.php"> <span class="block primery_3"> <i class="fa fa-plane"></i> </span> <span class="block_text">To-Do</span> </a> </div>
                  <div class="box"> <a href="task.php"> <span class="block primery_5"> <i class="fa fa-picture-o"></i> </span> <span class="block_text">Tasks</span> </a> </div>
                  <div class="box"> <a href="timeline.php"> <span class="block primery_1"> <i class="fa fa-clock-o"></i> </span> <span class="block_text">Timeline</span> </a> </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="user_admin dropdown"> <a href="javascript:void(0);" data-toggle="dropdown"><img src="images/user.png" /><span class="user_adminname">John Doe</span> <b class="caret"></b> </a>
          <ul class="dropdown-menu">
            <div class="top_pointer"></div>
            <li> <a href="profile.php"><i class="fa fa-user"></i> Profile</a> </li>
            <li> <a href="help.php"><i class="fa fa-question-circle"></i> Help</a> </li>
            <li> <a href="settings.php"><i class="fa fa-cog"></i> Setting </a></li>
            <li> <a href="login.php"><i class="fa fa-power-off"></i> Logout</a> </li>
          </ul>
        </div>
        <a href="javascript:;" class="toggle-menu menu-right push-body jPushMenuBtn rightbar-switch"><i class="fa fa-comment chat"></i></a>
      </div>
    </div>
    <!--\\\\\\\ header top bar end \\\\\\-->
  </div>
  <!--\\\\\\\ header end \\\\\\-->
  <div class="inner">
    <!--\\\\\\\ inner start \\\\\\-->
    <div class="left_nav">
      <!--\\\\\\\left_nav start \\\\\\-->
      <div class="search_bar"> <i class="fa fa-search"></i>
        <input name="" type="text" class="search" placeholder="Search Dashboard..." />
      </div>
      <div class="left_nav_slidebar">
        <ul>
          <li><a href="javascript:void(0);"><i class="fa fa-home"></i> DASHBOARD <span class="left_nav_pointer"></span> <span class="plus"><i class="fa fa-plus"></i></span> </a>
            <ul>
              <li> <a href="index.php" class="left_nav_sub_active"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Dashboard</b> </a> </li>
              <li> <a href="settings.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Settings</b> </a> </li>
              <li> <a href="layouts.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Layouts</b> </a> </li>
              <li> <a href="themes.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Themes</b> </a> </li>
              <li> <a href="widgets.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Widgets</b> </a> </li>
              <li> <a href="animations.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Animations</b> </a> </li>
            </ul>
          </li>
          <li> <a href="javascript:void(0);"> <i class="fa fa-edit"></i> UI KIT <span class="plus"><i class="fa fa-plus"></i></span></a>
            <ul>
              <li> <a href="typography.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Typography</b> </a> </li>
              <li> <a href="buttons.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Buttons</b> </a> </li>
              <li> <a href="icons.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Icons</b> </a> </li>
              <li> <a href="grid.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Grid</b> </a> </li>
              <li> <a href="alert.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Alert & Notification</b> </a> </li>
              <li> <a href="tabs.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Tabs & Accordion</b> </a> </li>
              <li> <a href="tree.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Tree View</b> </a> </li>
              <li> <a href="list.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>List Group</b> </a> </li>
              <li> <a href="portlets.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Portlets</b> </a> </li>
              <li> <a href="general.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>General</b> </a> </li>
            </ul>
          </li>
          <li> <a href="javascript:void(0);"> <i class="fa fa-tasks"></i> Forms <span class="plus"><i class="fa fa-plus"></i></span></a>
            <ul>
              <li> <a href="components.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Components</b> </a> </li>
              <li> <a href="validation.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Validation</b> </a> </li>
              <li> <a href="multi-upload.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Multi-upload</b> </a> </li>
              <li> <a href="other-forms.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Others</b> </a> </li>
            </ul>
          </li>
          <li> <a href="javascript:void(0);"> <i class="fa fa-users icon"></i> APPS <span class="plus"><i class="fa fa-plus"></i></span> </a>
            <ul>
              <li> <a href="todo.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>To-Do</b> </a> </li>
              <li> <a href="task.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Task</b> </a> </li>
              <li> <a href="notes.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Notes</b> </a> </li>
              <li> <a href="media.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Media Manager</b> </a> </li>
              <li> <a href="calendar.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Calendar</b> </a> </li>
              <li> <a href="ticket.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Ticket Support</b> </a> </li>
              <li> <a href="invoice.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Invoice</b> </a> </li>
            </ul>
          </li>
          <li> <a href="javascript:void(0);"> <i class="fa fa-envelope"></i> EMAIL <span class="plus"><i class="fa fa-plus"></i></span> </a>
            <ul>
              <li> <a href="inbox.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Inbox</b> </a> </li>
              <li> <a href="compose.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Compose</b> </a> </li>
              <li> <a href="readmail.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Read Mail</b> </a> </li>
            </ul>
          </li>
          <li> <a href="javascript:void(0);"> <i class="fa fa-folder-open-o"></i> PAGES <span class="plus"><i class="fa fa-plus"></i></span> </a>
            <ul>
              <li> <a href="login.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Login</b> </a> </li>
              <li> <a href="registration.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Registration</b> </a> </li>
              <li> <a href="lockscreen.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Lock Screen</b> </a> </li>
              <li> <a href="blankpage.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Blank Page</b> </a> </li>
              <li> <a href="404error.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>404 Error</b> </a> </li>
              <li> <a href="500error.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>500 Error</b> </a> </li>
              <li> <a href="search.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Search</b> </a> </li>
              <li> <a href="about.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>About</b> </a> </li>
              <li> <a href="contact.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Contact</b> </a> </li>
            </ul>
          </li>
          <li class="left_nav_active theme_border"> <a href="javascript:void(0);"> <i class="fa fa-th"></i> TABLES <span class="plus"><i class="fa fa-plus"></i></span> </a>
            <ul class="opened"  style="display:block">
              <li> <a href="statictable.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Static Table</b> </a> </li>
              <li> <a href="datatable.php"> <span>&nbsp;</span> <i class="fa fa-circle theme_color"></i> <b class="theme_color">Data Table</b> </a> </li>
            </ul>
          </li>
          <li> <a href="javascript:void(0);"> <i class="fa fa-glass"></i> EXTRA <span class="plus"><i class="fa fa-plus"></i></span></a>
            <ul>
              <li> <a href="timeline.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Timeline</b> </a> </li>
              <li> <a href="profile.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Profile</b> </a> </li>
              <li> <a href="contactlist.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Contact List</b> </a> </li>
              <li> <a href="maps.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Maps</b> </a> </li>
              <li> <a href="gallery.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Gallery</b> </a> </li>
              <li> <a href="help.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Help</b> </a> </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <!--\\\\\\\left_nav end \\\\\\-->
    <div class="contentpanel">
      <!--\\\\\\\ contentpanel start\\\\\\-->
      <div class="pull-left breadcrumb_admin clear_both">
        <div class="pull-left page_title theme_color">
          <h1>Data Table</h1>
          <h2 class="">Subtitle goes here...</h2>
        </div>
        <div class="pull-right">
          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">TABLES</a></li>
            <li class="active">Data Table</li>
          </ol>
        </div>
      </div>
      <div class="container clear_both padding_fix">
        <!--\\\\\\\ container  start \\\\\\-->
      
      
      
      
      
      
      
      
      
      
      
      
      
       <div id="main-content">
    <div class="page-content">
      
      
      <div class="row">
        <div class="col-md-12">
          <div class="block-web">
           <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="refresh" href="#"><i class="fa fa-repeat"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header">Data Table</h3>
            </div>
         <div class="porlets-content">
            <div class="table-responsive">
                <table  class="display table table-bordered table-striped" id="dynamic-table">
                  <thead>
                    <tr>
                      <th>Rendering engine</th>
                      <th>Browser</th>
                      <th>Platform(s)</th>
                      <th class="hidden-phone">Engine version</th>
                      <th class="hidden-phone">CSS grade</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="gradeX">
                      <td>Trident</td>
                      <td>Internet
                        Explorer 4.0</td>
                      <td>Win 95+</td>
                      <td class="center hidden-phone">4</td>
                      <td class="center hidden-phone">X</td>
                    </tr>
                    <tr class="gradeC">
                      <td>Trident</td>
                      <td>Internet
                        Explorer 5.0</td>
                      <td>Win 95+</td>
                      <td class="center hidden-phone">5</td>
                      <td class="center hidden-phone">C</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Trident</td>
                      <td>Internet
                        Explorer 5.5</td>
                      <td>Win 95+</td>
                      <td class="center hidden-phone">5.5</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Trident</td>
                      <td>Internet
                        Explorer 6</td>
                      <td>Win 98+</td>
                      <td class="center hidden-phone">6</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Trident</td>
                      <td>Internet Explorer 7</td>
                      <td>Win XP SP2+</td>
                      <td class="center hidden-phone">7</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Trident</td>
                      <td>AOL browser (AOL desktop)</td>
                      <td>Win XP</td>
                      <td class="center hidden-phone">6</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Firefox 1.0</td>
                      <td>Win 98+ / OSX.2+</td>
                      <td class="center hidden-phone">1.7</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Firefox 1.5</td>
                      <td>Win 98+ / OSX.2+</td>
                      <td class="center hidden-phone">1.8</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Firefox 2.0</td>
                      <td>Win 98+ / OSX.2+</td>
                      <td class="center hidden-phone">1.8</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Firefox 3.0</td>
                      <td>Win 2k+ / OSX.3+</td>
                      <td class="center hidden-phone">1.9</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Camino 1.0</td>
                      <td>OSX.2+</td>
                      <td class="center hidden-phone">1.8</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Camino 1.5</td>
                      <td>OSX.3+</td>
                      <td class="center hidden-phone">1.8</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Netscape 7.2</td>
                      <td>Win 95+ / Mac OS 8.6-9.2</td>
                      <td class="center hidden-phone">1.7</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Netscape Browser 8</td>
                      <td>Win 98SE+</td>
                      <td class="center hidden-phone">1.7</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Netscape Navigator 9</td>
                      <td>Win 98+ / OSX.2+</td>
                      <td class="center hidden-phone">1.8</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Mozilla 1.0</td>
                      <td>Win 95+ / OSX.1+</td>
                      <td class="center hidden-phone">1</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Mozilla 1.1</td>
                      <td>Win 95+ / OSX.1+</td>
                      <td class="center hidden-phone">1.1</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Mozilla 1.2</td>
                      <td>Win 95+ / OSX.1+</td>
                      <td class="center hidden-phone">1.2</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Mozilla 1.3</td>
                      <td>Win 95+ / OSX.1+</td>
                      <td class="center hidden-phone">1.3</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Mozilla 1.4</td>
                      <td>Win 95+ / OSX.1+</td>
                      <td class="center hidden-phone">1.4</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Mozilla 1.5</td>
                      <td>Win 95+ / OSX.1+</td>
                      <td class="center hidden-phone">1.5</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Mozilla 1.6</td>
                      <td>Win 95+ / OSX.1+</td>
                      <td class="center hidden-phone">1.6</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Mozilla 1.7</td>
                      <td>Win 98+ / OSX.1+</td>
                      <td class="center hidden-phone">1.7</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Mozilla 1.8</td>
                      <td>Win 98+ / OSX.1+</td>
                      <td class="center hidden-phone">1.8</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Seamonkey 1.1</td>
                      <td>Win 98+ / OSX.2+</td>
                      <td class="center hidden-phone">1.8</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Epiphany 2.20</td>
                      <td>Gnome</td>
                      <td class="center hidden-phone">1.8</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Webkit</td>
                      <td>Safari 1.2</td>
                      <td>OSX.3</td>
                      <td class="center hidden-phone">125.5</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Webkit</td>
                      <td>Safari 1.3</td>
                      <td>OSX.3</td>
                      <td class="center hidden-phone">312.8</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Webkit</td>
                      <td>Safari 2.0</td>
                      <td>OSX.4+</td>
                      <td class="center hidden-phone">419.3</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Webkit</td>
                      <td>Safari 3.0</td>
                      <td>OSX.4+</td>
                      <td class="center hidden-phone">522.1</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Webkit</td>
                      <td>OmniWeb 5.5</td>
                      <td>OSX.4+</td>
                      <td class="center hidden-phone">420</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Webkit</td>
                      <td>iPod Touch / iPhone</td>
                      <td>iPod</td>
                      <td class="center hidden-phone">420.1</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Webkit</td>
                      <td>S60</td>
                      <td>S60</td>
                      <td class="center hidden-phone">413</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Presto</td>
                      <td>Opera 7.0</td>
                      <td>Win 95+ / OSX.1+</td>
                      <td class="center hidden-phone">-</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Presto</td>
                      <td>Opera 7.5</td>
                      <td>Win 95+ / OSX.2+</td>
                      <td class="center hidden-phone">-</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Presto</td>
                      <td>Opera 8.0</td>
                      <td>Win 95+ / OSX.2+</td>
                      <td class="center hidden-phone">-</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Presto</td>
                      <td>Opera 8.5</td>
                      <td>Win 95+ / OSX.2+</td>
                      <td class="center hidden-phone">-</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Presto</td>
                      <td>Opera 9.0</td>
                      <td>Win 95+ / OSX.3+</td>
                      <td class="center hidden-phone">-</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Presto</td>
                      <td>Opera 9.2</td>
                      <td>Win 88+ / OSX.3+</td>
                      <td class="center hidden-phone">-</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Presto</td>
                      <td>Opera 9.5</td>
                      <td>Win 88+ / OSX.3+</td>
                      <td class="center hidden-phone">-</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Presto</td>
                      <td>Opera for Wii</td>
                      <td>Wii</td>
                      <td class="center hidden-phone">-</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Presto</td>
                      <td>Nokia N800</td>
                      <td>N800</td>
                      <td class="center hidden-phone">-</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Presto</td>
                      <td>Nintendo DS browser</td>
                      <td>Nintendo DS</td>
                      <td class="center hidden-phone">8.5</td>
                      <td class="center hidden-phone">C/A<sup>1</sup></td>
                    </tr>
                    <tr class="gradeC">
                      <td>KHTML</td>
                      <td>Konqureror 3.1</td>
                      <td>KDE 3.1</td>
                      <td class="center hidden-phone">3.1</td>
                      <td class="center hidden-phone">C</td>
                    </tr>
                    <tr class="gradeA">
                      <td>KHTML</td>
                      <td>Konqureror 3.3</td>
                      <td>KDE 3.3</td>
                      <td class="center hidden-phone">3.3</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>KHTML</td>
                      <td>Konqureror 3.5</td>
                      <td>KDE 3.5</td>
                      <td class="center hidden-phone">3.5</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeX">
                      <td>Tasman</td>
                      <td>Internet Explorer 4.5</td>
                      <td>Mac OS 8-9</td>
                      <td class="center hidden-phone">-</td>
                      <td class="center hidden-phone">X</td>
                    </tr>
                    <tr class="gradeC">
                      <td>Tasman</td>
                      <td>Internet Explorer 5.1</td>
                      <td>Mac OS 7.6-9</td>
                      <td class="center hidden-phone">1</td>
                      <td class="center hidden-phone">C</td>
                    </tr>
                    <tr class="gradeC">
                      <td>Tasman</td>
                      <td>Internet Explorer 5.2</td>
                      <td>Mac OS 8-X</td>
                      <td class="center hidden-phone">1</td>
                      <td class="center hidden-phone">C</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Misc</td>
                      <td>NetFront 3.1</td>
                      <td>Embedded devices</td>
                      <td class="center hidden-phone">-</td>
                      <td class="center hidden-phone">C</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Misc</td>
                      <td>NetFront 3.4</td>
                      <td>Embedded devices</td>
                      <td class="center hidden-phone">-</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeX">
                      <td>Misc</td>
                      <td>Dillo 0.8</td>
                      <td>Embedded devices</td>
                      <td class="center hidden-phone">-</td>
                      <td class="center hidden-phone">X</td>
                    </tr>
                    <tr class="gradeX">
                      <td>Misc</td>
                      <td>Links</td>
                      <td>Text only</td>
                      <td class="center hidden-phone">-</td>
                      <td class="center hidden-phone">X</td>
                    </tr>
                    <tr class="gradeX">
                      <td>Misc</td>
                      <td>Lynx</td>
                      <td>Text only</td>
                      <td class="center hidden-phone">-</td>
                      <td class="center hidden-phone">X</td>
                    </tr>
                    <tr class="gradeC">
                      <td>Misc</td>
                      <td>IE Mobile</td>
                      <td>Windows Mobile 6</td>
                      <td class="center hidden-phone">-</td>
                      <td class="center hidden-phone">C</td>
                    </tr>
                    <tr class="gradeC">
                      <td>Misc</td>
                      <td>PSP browser</td>
                      <td>PSP</td>
                      <td class="center hidden-phone">-</td>
                      <td class="center hidden-phone">C</td>
                    </tr>
                    <tr class="gradeU">
                      <td>Other browsers</td>
                      <td>All others</td>
                      <td>-</td>
                      <td class="center hidden-phone">-</td>
                      <td class="center hidden-phone">U</td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Rendering engine</th>
                      <th>Browser</th>
                      <th>Platform(s)</th>
                      <th class="hidden-phone">Engine version</th>
                      <th class="hidden-phone">CSS grade</th>
                    </tr>
                  </tfoot>
                </table>
              </div><!--/table-responsive-->
            </div><!--/porlets-content-->
            
            
          </div><!--/block-web--> 
        </div><!--/col-md-12--> 
      </div><!--/row-->
      
       <div class="row">
        <div class="col-md-12">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="refresh" href="#"><i class="fa fa-repeat"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header">Editable Table</h3>
            </div>
         <div class="porlets-content">
          <div class="adv-table editable-table ">
                          <div class="clearfix">
                              <div class="btn-group">
                                  <button id="editable-sample_new" class="btn btn-primary">
                                      Add New <i class="fa fa-plus"></i>
                                  </button>
                              </div>
                              <div class="btn-group pull-right">
                                  <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
                                  </button>
                                  <ul class="dropdown-menu pull-right">
                                      <li><a href="#">Print</a></li>
                                      <li><a href="#">Save as PDF</a></li>
                                      <li><a href="#">Export to Excel</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="margin-top-10"></div>
                          <table class="table table-striped table-hover table-bordered" id="editable-sample">
                              <thead>
                              <tr>
                                  <th>Username</th>
                                  <th>Full Name</th>
                                  <th>Points</th>
                                  <th>Notes</th>
                                  <th>Edit</th>
                                  <th>Delete</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr class="">
                                  <td>John Doe</td>
                                  <td>Stephan Myburgh</td>
                                  <td>12345</td>
                                  <td class="center">super user</td>
                                  <td><a class="edit" href="javascript:;">Edit</a></td>
                                  <td><a class="delete" href="javascript:;">Delete</a></td>
                              </tr>
                              <tr class="">
                                  <td>Admin</td>
                                  <td>Tom Cooper</td>
                                  <td>216</td>
                                  <td class="center">new user</td>
                                  <td><a class="edit" href="javascript:;">Edit</a></td>
                                  <td><a class="delete" href="javascript:;">Delete</a></td>
                              </tr>
                              <tr class="">
                                  <td>Admin</td>
                                  <td> Shakib Al Hasan</td>
                                  <td>432</td>
                                  <td class="center">super user</td>
                                  <td><a class="edit" href="javascript:;">Edit</a></td>
                                  <td><a class="delete" href="javascript:;">Delete</a></td>
                              </tr>
                              <tr class="">
                                  <td>Admin</td>
                                  <td>WebPro</td>
                                  <td>856</td>
                                  <td class="center">elite user</td>
                                  <td><a class="edit" href="javascript:;">Edit</a></td>
                                  <td><a class="delete" href="javascript:;">Delete</a></td>
                              </tr>
                              <tr class="">
                                  <td>Admin</td>
                                  <td> WebPro</td>
                                  <td>675</td>
                                  <td class="center">new user</td>
                                  <td><a class="edit" href="javascript:;">Edit</a></td>
                                  <td><a class="delete" href="javascript:;">Delete</a></td>
                              </tr>
                              <tr class="">
                                  <td>Admin</td>
                                  <td>Alex Hales</td>
                                  <td>423</td>
                                  <td class="center">new user</td>
                                  <td><a class="edit" href="javascript:;">Edit</a></td>
                                  <td><a class="delete" href="javascript:;">Delete</a></td>
                              </tr>
                              <tr class="">
                                  <td>John Doe</td>
                                  <td>John Doe </td>
                                  <td>1234</td>
                                  <td class="center">super user</td>
                                  <td><a class="edit" href="javascript:;">Edit</a></td>
                                  <td><a class="delete" href="javascript:;">Delete</a></td>
                              </tr>
                              <tr class="">
                                  <td>Admin</td>
                                  <td>Alex Hales</td>
                                  <td>642</td>
                                  <td class="center">new user</td>
                                  <td><a class="edit" href="javascript:;">Edit</a></td>
                                  <td><a class="delete" href="javascript:;">Delete</a></td>
                              </tr>
                              <tr class="">
                                  <td>Admin</td>
                                  <td> Aaron Finch</td>
                                  <td>157</td>
                                  <td class="center">super user</td>
                                  <td><a class="edit" href="javascript:;">Edit</a></td>
                                  <td><a class="delete" href="javascript:;">Delete</a></td>
                              </tr>
                              <tr class="">
                                  <td>Admin</td>
                                  <td>Virat Kohli</td>
                                  <td>468</td>
                                  <td class="center">elite user</td>
                                  <td><a class="edit" href="javascript:;">Edit</a></td>
                                  <td><a class="delete" href="javascript:;">Delete</a></td>
                              </tr>
                              <tr class="">
                                  <td>Admin</td>
                                  <td> WebPro</td>
                                  <td>953</td>
                                  <td class="center">new user</td>
                                  <td><a class="edit" href="javascript:;">Edit</a></td>
                                  <td><a class="delete" href="javascript:;">Delete</a></td>
                              </tr>
                              <tr class="">
                                  <td>Admin</td>
                                  <td>Glenn Maxwell</td>
                                  <td>546</td>
                                  <td class="center">new user</td>
                                  <td><a class="edit" href="javascript:;">Edit</a></td>
                                  <td><a class="delete" href="javascript:;">Delete</a></td>
                              </tr>
                              </tbody>
                          </table>
                      </div>
 
            </div><!--/porlets-content-->  
          </div><!--/block-web--> 
        </div><!--/col-md-12--> 
      </div><!--/row-->
      
      
       <div class="row">
        <div class="col-md-12">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="refresh" href="#"><i class="fa fa-repeat"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header">Responsive Table With Expandable details</h3>
            </div>
         <div class="porlets-content">
         
         <div class="table-responsive">
                <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                  <thead>
                    <tr>
                      <th>Rendering engine</th>
                      <th>Browser</th>
                      <th class="hidden-phone">Platform(s)</th>
                      <th class="hidden-phone">Engine version</th>
                      <th class="hidden-phone">CSS grade</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="gradeX">
                      <td>Trident</td>
                      <td>Internet
                        Explorer 4.0</td>
                      <td class="hidden-phone">Win 95+</td>
                      <td class="center hidden-phone">4</td>
                      <td class="center hidden-phone">X</td>
                    </tr>
                    <tr class="gradeC">
                      <td>Trident</td>
                      <td>Internet
                        Explorer 5.0</td>
                      <td class="hidden-phone">Win 95+</td>
                      <td class="center hidden-phone">5</td>
                      <td class="center hidden-phone">C</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Trident</td>
                      <td>Internet
                        Explorer 5.5</td>
                      <td class="hidden-phone">Win 95+</td>
                      <td class="center hidden-phone">5.5</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Trident</td>
                      <td>Internet
                        Explorer 6</td>
                      <td class="hidden-phone">Win 98+</td>
                      <td class="center hidden-phone">6</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Trident</td>
                      <td>Internet Explorer 7</td>
                      <td class="hidden-phone">Win XP SP2+</td>
                      <td class="center hidden-phone">7</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Trident</td>
                      <td>AOL browser (AOL desktop)</td>
                      <td class="hidden-phone">Win XP</td>
                      <td class="center hidden-phone">6</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Firefox 1.0</td>
                      <td class="hidden-phone">Win 98+ / OSX.2+</td>
                      <td class="center hidden-phone">1.7</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Firefox 1.5</td>
                      <td class="hidden-phone">Win 98+ / OSX.2+</td>
                      <td class="center hidden-phone">1.8</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Firefox 2.0</td>
                      <td class="hidden-phone">Win 98+ / OSX.2+</td>
                      <td class="center hidden-phone">1.8</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Firefox 3.0</td>
                      <td class="hidden-phone">Win 2k+ / OSX.3+</td>
                      <td class="center hidden-phone">1.9</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Camino 1.0</td>
                      <td class="hidden-phone">OSX.2+</td>
                      <td class="center hidden-phone">1.8</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Camino 1.5</td>
                      <td class="hidden-phone">OSX.3+</td>
                      <td class="center hidden-phone">1.8</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Netscape 7.2</td>
                      <td class="hidden-phone">Win 95+ / Mac OS 8.6-9.2</td>
                      <td class="center hidden-phone">1.7</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Netscape Browser 8</td>
                      <td class="hidden-phone">Win 98SE+</td>
                      <td class="center hidden-phone">1.7</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Netscape Navigator 9</td>
                      <td class="hidden-phone">Win 98+ / OSX.2+</td>
                      <td class="center hidden-phone">1.8</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Mozilla 1.0</td>
                      <td class="hidden-phone">Win 95+ / OSX.1+</td>
                      <td class="center hidden-phone">1</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Mozilla 1.1</td>
                      <td class="hidden-phone">Win 95+ / OSX.1+</td>
                      <td class="center hidden-phone">1.1</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Mozilla 1.2</td>
                      <td class="hidden-phone">Win 95+ / OSX.1+</td>
                      <td class="center hidden-phone">1.2</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Mozilla 1.3</td>
                      <td class="hidden-phone">Win 95+ / OSX.1+</td>
                      <td class="center hidden-phone">1.3</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Mozilla 1.4</td>
                      <td class="hidden-phone">Win 95+ / OSX.1+</td>
                      <td class="center hidden-phone">1.4</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Mozilla 1.5</td>
                      <td class="hidden-phone">Win 95+ / OSX.1+</td>
                      <td class="center hidden-phone">1.5</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Mozilla 1.6</td>
                      <td class="hidden-phone">Win 95+ / OSX.1+</td>
                      <td class="center hidden-phone">1.6</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Mozilla 1.7</td>
                      <td class="hidden-phone">Win 98+ / OSX.1+</td>
                      <td class="center hidden-phone">1.7</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Mozilla 1.8</td>
                      <td class="hidden-phone">Win 98+ / OSX.1+</td>
                      <td class="center hidden-phone">1.8</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Seamonkey 1.1</td>
                      <td class="hidden-phone">Win 98+ / OSX.2+</td>
                      <td class="center hidden-phone">1.8</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Epiphany 2.20</td>
                      <td class="hidden-phone">Gnome</td>
                      <td class="center hidden-phone">1.8</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Webkit</td>
                      <td>Safari 1.2</td>
                      <td class="hidden-phone">OSX.3</td>
                      <td class="center hidden-phone">125.5</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Webkit</td>
                      <td>Safari 1.3</td>
                      <td class="hidden-phone">OSX.3</td>
                      <td class="center hidden-phone">312.8</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Webkit</td>
                      <td>Safari 2.0</td>
                      <td class="hidden-phone">OSX.4+</td>
                      <td class="center hidden-phone">419.3</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Webkit</td>
                      <td>Safari 3.0</td>
                      <td class="hidden-phone">OSX.4+</td>
                      <td class="center hidden-phone">522.1</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Webkit</td>
                      <td>OmniWeb 5.5</td>
                      <td class="hidden-phone">OSX.4+</td>
                      <td class="center hidden-phone">420</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Webkit</td>
                      <td>iPod Touch / iPhone</td>
                      <td class="hidden-phone">iPod</td>
                      <td class="center hidden-phone">420.1</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Webkit</td>
                      <td>S60</td>
                      <td class="hidden-phone">S60</td>
                      <td class="center hidden-phone">413</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Presto</td>
                      <td>Opera 7.0</td>
                      <td class="hidden-phone">Win 95+ / OSX.1+</td>
                      <td class="center hidden-phone">-</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Presto</td>
                      <td>Opera 7.5</td>
                      <td class="hidden-phone">Win 95+ / OSX.2+</td>
                      <td class="center hidden-phone">-</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Presto</td>
                      <td>Opera 8.0</td>
                      <td class="hidden-phone">Win 95+ / OSX.2+</td>
                      <td class="center hidden-phone">-</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Presto</td>
                      <td>Opera 8.5</td>
                      <td class="hidden-phone">Win 95+ / OSX.2+</td>
                      <td class="center hidden-phone">-</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Presto</td>
                      <td>Opera 9.0</td>
                      <td class="hidden-phone">Win 95+ / OSX.3+</td>
                      <td class="center hidden-phone">-</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Presto</td>
                      <td>Opera 9.2</td>
                      <td class="hidden-phone">Win 88+ / OSX.3+</td>
                      <td class="center hidden-phone">-</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Presto</td>
                      <td>Opera 9.5</td>
                      <td class="hidden-phone">Win 88+ / OSX.3+</td>
                      <td class="center hidden-phone">-</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Presto</td>
                      <td>Opera for Wii</td>
                      <td class="hidden-phone">Wii</td>
                      <td class="center hidden-phone">-</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Presto</td>
                      <td>Nokia N800</td>
                      <td class="hidden-phone">N800</td>
                      <td class="center hidden-phone">-</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Presto</td>
                      <td>Nintendo DS browser</td>
                      <td class="hidden-phone">Nintendo DS</td>
                      <td class="center hidden-phone">8.5</td>
                      <td class="center hidden-phone">C/A<sup>1</sup></td>
                    </tr>
                    <tr class="gradeC">
                      <td>KHTML</td>
                      <td>Konqureror 3.1</td>
                      <td class="hidden-phone">KDE 3.1</td>
                      <td class="center hidden-phone">3.1</td>
                      <td class="center hidden-phone">C</td>
                    </tr>
                    <tr class="gradeA">
                      <td>KHTML</td>
                      <td>Konqureror 3.3</td>
                      <td class="hidden-phone">KDE 3.3</td>
                      <td class="center hidden-phone">3.3</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>KHTML</td>
                      <td>Konqureror 3.5</td>
                      <td class="hidden-phone">KDE 3.5</td>
                      <td class="center hidden-phone">3.5</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeX">
                      <td>Tasman</td>
                      <td>Internet Explorer 4.5</td>
                      <td class="hidden-phone">Mac OS 8-9</td>
                      <td class="center hidden-phone">-</td>
                      <td class="center hidden-phone">X</td>
                    </tr>
                    <tr class="gradeC">
                      <td>Tasman</td>
                      <td>Internet Explorer 5.1</td>
                      <td class="hidden-phone">Mac OS 7.6-9</td>
                      <td class="center hidden-phone">1</td>
                      <td class="center hidden-phone">C</td>
                    </tr>
                    <tr class="gradeC">
                      <td>Tasman</td>
                      <td>Internet Explorer 5.2</td>
                      <td class="hidden-phone">Mac OS 8-X</td>
                      <td class="center hidden-phone">1</td>
                      <td class="center hidden-phone">C</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Misc</td>
                      <td>NetFront 3.1</td>
                      <td>Embedded devices</td>
                      <td class="center">-</td>
                      <td class="center">C</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Misc</td>
                      <td>NetFront 3.4</td>
                      <td class="hidden-phone">Embedded devices</td>
                      <td class="center hidden-phone">-</td>
                      <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeX">
                      <td>Misc</td>
                      <td>Dillo 0.8</td>
                      <td class="hidden-phone">Embedded devices</td>
                      <td class="center hidden-phone">-</td>
                      <td class="center hidden-phone">X</td>
                    </tr>
                    <tr class="gradeX">
                      <td>Misc</td>
                      <td>Links</td>
                      <td class="hidden-phone">Text only</td>
                      <td class="center hidden-phone">-</td>
                      <td class="center hidden-phone">X</td>
                    </tr>
                    <tr class="gradeX">
                      <td>Misc</td>
                      <td>Lynx</td>
                      <td class="hidden-phone">Text only</td>
                      <td class="center hidden-phone">-</td>
                      <td class="center hidden-phone">X</td>
                    </tr>
                    <tr class="gradeC">
                      <td>Misc</td>
                      <td>IE Mobile</td>
                      <td class="hidden-phone">Windows Mobile 6</td>
                      <td class="center hidden-phone">-</td>
                      <td class="center hidden-phone">C</td>
                    </tr>
                    <tr class="gradeC">
                      <td>Misc</td>
                      <td>PSP browser</td>
                      <td class="hidden-phone">PSP</td>
                      <td class="center hidden-phone">-</td>
                      <td class="center hidden-phone">C</td>
                    </tr>
                    <tr class="gradeU">
                      <td>Other browsers</td>
                      <td>All others</td>
                      <td class="hidden-phone">-</td>
                      <td class="center hidden-phone">-</td>
                      <td class="center hidden-phone">U</td>
                    </tr>
                  </tbody>
                </table>
              </div><!--/table-responsive-->
         
           </div><!--/porlets-content-->  
          </div><!--/block-web--> 
        </div><!--/col-md-12--> 
      </div><!--/row-->
      
        </div><!--/page-content end--> 
  </div><!--/main-content end--> 
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      </div>
      <!--\\\\\\\ container  end \\\\\\-->
    </div>
    <!--\\\\\\\ content panel end \\\\\\-->
  </div>
  <!--\\\\\\\ inner end\\\\\\-->
</div>
<!--\\\\\\\ wrapper end\\\\\\-->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Compose New Task</h4>
      </div>
      <div class="modal-body"> content </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- sidebar chats -->
<nav class="atm-spmenu atm-spmenu-vertical atm-spmenu-right side-chat">
	<div class="header">
    <input type="text" class="form-control chat-search" placeholder=" Search">
  </div>
  <div href="#" class="sub-header">
    <div class="icon"><i class="fa fa-user"></i></div> <p>Online (4)</p>
  </div>
  <div class="content">
    <p class="title">Family</p>
    <ul class="nav nav-pills nav-stacked contacts">
      <li class="online"><a href="#"><i class="fa fa-circle-o"></i> Steven Smith</a></li>
      <li class="online"><a href="#"><i class="fa fa-circle-o"></i> John Doe</a></li>
      <li class="online"><a href="#"><i class="fa fa-circle-o"></i> Michael Smith</a></li>
      <li class="busy"><a href="#"><i class="fa fa-circle-o"></i> Chris Rogers</a></li>
    </ul>
    
    <p class="title">Friends</p>
    <ul class="nav nav-pills nav-stacked contacts">
      <li class="online"><a href="#"><i class="fa fa-circle-o"></i> Vernon Philander</a></li>
      <li class="outside"><a href="#"><i class="fa fa-circle-o"></i> Kyle Abbott</a></li>
      <li><a href="#"><i class="fa fa-circle-o"></i> Dean Elgar</a></li>
    </ul>   
    
    <p class="title">Work</p>
    <ul class="nav nav-pills nav-stacked contacts">
      <li><a href="#"><i class="fa fa-circle-o"></i> Dale Steyn</a></li>
      <li><a href="#"><i class="fa fa-circle-o"></i> Morne Morkel</a></li>
    </ul>
    
  </div>
  <div id="chat-box">
    <div class="header">
      <span>Richard Avedon</span>
      <a class="close"><i class="fa fa-times"></i></a>    </div>
    <div class="messages nano nscroller has-scrollbar">
      <div class="content" tabindex="0" style="right: -17px;">
        <ul class="conversation">
          <li class="odd">
            <p>Hi John, how are you?</p>
          </li>
          <li class="text-right">
            <p>Hello I am also fine</p>
          </li>
          <li class="odd">
            <p>Tell me what about you?</p>
          </li>
          <li class="text-right">
            <p>Sorry, I'm late... see you</p>
          </li>
          <li class="odd unread">
            <p>OK, call me later...</p>
          </li>
        </ul>
      </div>
    <div class="pane" style="display: none;"><div class="slider" style="height: 20px; top: 0px;"></div></div></div>
    <div class="chat-input">
      <div class="input-group">
        <input type="text" placeholder="Enter a message..." class="form-control">
        <span class="input-group-btn">
        <button class="btn btn-danger" type="button">Send</button>
        </span>      </div>
    </div>
  </div>
</nav>
<!-- /sidebar chats -->   















<div class="demo"><span id="demo-setting"><i class="fa fa-cog txt-color-blueDark"></i></span> <form><legend class="no-padding margin-bottom-10" style="color:#6e778c;">Layout Options</legend><section><label><input type="checkbox" class="checkbox style-0" id="smart-fixed-header" name="subscription"><span>Fixed Header</span></label><label><input type="checkbox" class="checkbox style-0" id="smart-fixed-navigation" name="terms"><span>Fixed Navigation</span></label><label><input type="checkbox" class="checkbox style-0" id="smart-rigth-navigation" name="terms"><span>Right Navigation</span></label><label><input type="checkbox" class="checkbox style-0" id="smart-boxed-layout" name="terms"><span>Boxed Layout</span></label><span id="smart-bgimages" style="display: none;"></span></section><section><h6 class="margin-top-10 semi-bold margin-bottom-5">Clear Localstorage</h6><a id="reset-smart-widget" class="btn btn-xs btn-block btn-primary" href="javascript:void(0);"><i class="fa fa-refresh"></i> Factory Reset</a></section> <h6 class="margin-top-10 semi-bold margin-bottom-5">Ultimo Skins</h6><section id="smart-styles"><a style="background-color:#23262F;" class="btn btn-block btn-xs txt-color-white margin-right-5" id="dark_theme" href="javascript:void(0);"><i id="skin-checked" class="fa fa-check fa-fw"></i> Dark Theme</a><a style="background:#E35154;" class="btn btn-block btn-xs txt-color-white" id="red_thm" href="javascript:void(0);">Red Theme</a><a style="background:#34B077;" class="btn btn-xs btn-block txt-color-darken margin-top-5" id="green_thm" href="javascript:void(0);">Green Theme</a><a style="background:#56A5DB" class="btn btn-xs btn-block txt-color-white margin-top-5" data-skinlogo="img/logo-pale.png" id="blue_thm" href="javascript:void(0);">Blue Theme</a><a style="background:#9C6BAD" class="btn btn-xs btn-block txt-color-white margin-top-5" id="magento_thm" href="javascript:void(0);">Magento Theme</a><a style="background:#FFFFFF" class="btn btn-xs btn-block txt-color-black margin-top-5" id="light_theme" href="javascript:void(0);">Light Theme</a></section></form> </div>









<script src="js/jquery-2.1.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/common-script.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<script src="plugins/data-tables/jquery.dataTables.js"></script>
<script src="plugins/data-tables/DT_bootstrap.js"></script>
<script src="plugins/data-tables/dynamic_table_init.js"></script>
<script src="plugins/edit-table/edit-table.js"></script>
<script>
          jQuery(document).ready(function() {
              EditableTable.init();
          });
 </script>
 
 <script src="js/jPushMenu.js"></script> 
<script src="js/side-chats.js"></script>

</body>
</html>