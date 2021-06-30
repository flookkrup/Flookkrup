<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Golden Tower</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <!-- Bootstrap 3.3.4 -->
  <link href="https://apm.topwork.asia/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <!-- Font Awesome Icons -->
  <link href="https://apm.topwork.asia/assets/dist/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <!-- Ionicons -->
  <link href="https://apm.topwork.asia/assets/dist/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
  <!-- Theme style -->
  <link href="https://apm.topwork.asia/assets/dist/css/AdminLTE.css" rel="stylesheet" type="text/css" />
  <!-- AdminLTE Skins. Choose a skin from the css/skins 
 folder instead of downloading all of them to reduce the load. -->
  <link href="https://apm.topwork.asia/assets/dist/css/skins/_all-skins.css" rel="stylesheet" type="text/css" />
  <!-- iCheck for checkboxes and radio inputs -->
  <link href="https://apm.topwork.asia/assets/plugins/iCheck/all.css" rel="stylesheet" type="text/css" />
  <link href="https://apm.topwork.asia/assets/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
  <link href="https://apm.topwork.asia/assets/dist/css/dataTables.responsive.css" rel="stylesheet" type="text/css" />
  <link href="https://apm.topwork.asia/assets/dist/css/dataTables.tableTools.min.css" rel="stylesheet" type="text/css" />
  <link href="https://apm.topwork.asia/assets/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- jQuery 2.1.4 -->
  <script src="https://apm.topwork.asia/assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
  <script src="https://apm.topwork.asia/assets/dist/js/printThis.js"></script>
  <script src="https://apm.topwork.asia/assets/plugins/toaster/jquery.toaster.js"></script>
  <script src="https://apm.topwork.asia/assets/plugins/chartjs/Chart.min.js" type="text/javascript"></script>
  <script src="https://apm.topwork.asia/assets/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
  <script src="https://apm.topwork.asia/assets/js/siteperformance.js" type="text/javascript"></script>
  <link href="//fonts.googleapis.com/css?family=Encode+Sans+Condensed" rel="stylesheet">
  <link href="https://apm.topwork.asia/assets/fonts/gfont/css.css" rel="stylesheet">
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="skin-green sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <header class="main-header">
      <!-- Logo -->
      <a class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><i class="fa fa-bank"></i></span> <span class="logo-lg" style="text-transform:uppercase;font-weight:bold;overflow:hidden;"><i class="fa fa-bank"></i> Golden Tower
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="hidden-xs" style="background:#000;"> <a href="javascript:;" data-toggle="modal" data-target="#available_room"><i style="font-size:18px;" class="fa fa-home"></i></a> </li>
            <li class="hidden-xs" style="background:#d73925;"> <a href="https://apm.topwork.asia/visitor/visitorlist.php"><i style="font-size:18px;" class="fa fa-user-o"></i></a> </li>
            <li class="hidden-xs" style="background:#00c0ef;"> <a href="https://apm.topwork.asia/complain/complainlist.php"><i style="font-size:18px;" class="fa fa-comments"></i></a> </li>
            <li class="hidden-xs" style="background:#e08e0b;"> <a href="https://apm.topwork.asia/mailsms/mailsms.php"><i style="font-size:18px;" class="fa fa-envelope-o"></i></a> </li>
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img class="user-image" src="https://apm.topwork.asia/img/upload/CA8D0636-E7DD-542A-8775-7CC2DA9C7739.jpg"> <span class="hidden-xs"> Alexander Pierce </span> </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header"> <img src="https://apm.topwork.asia/img/upload/CA8D0636-E7DD-542A-8775-7CC2DA9C7739.jpg" class="img-circle" alt="User Image" />
                  <p> Alexander Pierce <small>
                      Super Admin <br />
                      <span style="font-size:14px;color:#fff;">Golden Tower<span></p>
                  </small>
                </li>
                <!-- Menu Body -->
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="col-md-12" style="margin-bottom: 10px;">
                    <div style="margin-bottom:7px;"><a href="javascript:;" data-toggle="modal" data-target="#switch_language" class="btn btn-info btn-flat" style="width:100%">Switch Language</a></div>
                    <div><a href="javascript:;" data-toggle="modal" data-target="#switch_branch" class="btn btn-warning btn-flat" style="width:100%">Switch Building</a></div>
                  </div>
                  <div class="pull-left"><a data-target="#user_profile" data-toggle="modal" class="btn btn-success btn-flat">Profile</a></div>
                  <div class="pull-right"> <a href="https://apm.topwork.asia/logout.php" class="btn btn-danger btn-flat">Sign out</a> </div>
                </li>
              </ul>
            </li>
            <li class="hidden-xs"> <a href="https://apm.topwork.asia/setting/language.php"><i class="fa fa-gears"></i></a> </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- =============================================== -->
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <div class="user-panel" style="background:#000;">
        <div class="pull-left image"> <img src="https://apm.topwork.asia/img/upload/CA8D0636-E7DD-542A-8775-7CC2DA9C7739.jpg" class="img-circle" alt="User Image"> </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success" style="color:#00a65a !important;"></i> Online</a>
        </div>
      </div>
      <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="active"><a href="https://apm.topwork.asia/dashboard.php"><i class="fa fa-line-chart"></i> <span>Dashboard</span></a> </li>
          <li class="treeview "> <a href="#"> <i class="fa fa-clone"></i> <span>Floor Information</span> <i class="fa fa-angle-left pull-right"></i> </a>
            <ul class="treeview-menu">
              <li class=""><a href="https://apm.topwork.asia/floor/floorlist.php"><i class="fa fa-angle-double-right"></i>Floor List</a></li>
              <li class=""><a href="https://apm.topwork.asia/floor/addfloor.php"><i class="fa fa-angle-double-right"></i>Add Floor</a></li>
            </ul>
          </li>
          <li class="treeview "> <a href="#"> <i class="fa fa-cubes"></i> <span>Unit Information</span> <i class="fa fa-angle-left pull-right"></i> </a>
            <ul class="treeview-menu">
              <li class=""><a href="https://apm.topwork.asia/unit/unitlist.php"><i class="fa fa-angle-double-right"></i>Unit List</a></li>
              <li class=""><a href="https://apm.topwork.asia/unit/addunit.php"><i class="fa fa-angle-double-right"></i>Add Unit</a></li>
            </ul>
          </li>
          <li class="treeview "> <a href="#"> <i class="fa fa-user-o"></i> <span>Owner Information</span> <i class="fa fa-angle-left pull-right"></i> </a>
            <ul class="treeview-menu">
              <li class=""><a href="https://apm.topwork.asia/owner/ownerlist.php"><i class="fa fa-angle-double-right"></i>Owner List</a></li>
              <li class=""><a href="https://apm.topwork.asia/owner/addowner.php"><i class="fa fa-angle-double-right"></i>Add Owner</a></li>
            </ul>
          </li>
          <li class="treeview "> <a href="#"> <i class="fa fa-users"></i> <span>Tenant Information</span> <i class="fa fa-angle-left pull-right"></i> </a>
            <ul class="treeview-menu">
              <li class=""><a href="https://apm.topwork.asia/rent/rentlist.php"><i class="fa fa-angle-double-right"></i>Tenant List</a></li>
              <li class=""><a href="https://apm.topwork.asia/rent/addrent.php"><i class="fa fa-angle-double-right"></i>Add Tenant</a></li>
            </ul>
          </li>
          <li class="treeview "> <a href="#"> <i class="fa fa-user" aria-hidden="true"></i> <span>Employee Information</span> <i class="fa fa-angle-left pull-right"></i> </a>
            <ul class="treeview-menu">
              <li class=""><a href="https://apm.topwork.asia/employee/employeelist.php"><i class="fa fa-angle-double-right"></i>Employee List</a></li>
              <li class=""><a href="https://apm.topwork.asia/employee/addemployee.php"><i class="fa fa-angle-double-right"></i>Add Employee</a></li>
              <li class=""><a href="https://apm.topwork.asia/employee/employee_salary_setup.php"><i class="fa fa-angle-double-right"></i>Employee Salary</a></li>
              <li class=""><a href="https://apm.topwork.asia/employee/leave_request_list.php"><i class="fa fa-angle-double-right"></i>Employee Leave Request</a></li>
            </ul>
          </li>
          <li class="treeview "> <a href="#"> <i class="fa fa-money"></i> <span>Rent Collection</span> <i class="fa fa-angle-left pull-right"></i> </a>
            <ul class="treeview-menu">
              <li class=""><a href="https://apm.topwork.asia/fair/fairlist.php"><i class="fa fa-angle-double-right"></i>Rent List</a></li>
              <li class=""><a href="https://apm.topwork.asia/fair/addfair.php"><i class="fa fa-angle-double-right"></i>Add Rent</a></li>
            </ul>
          </li>
          <li class="treeview "> <a href="#"> <i class="fa fa-gear"></i> <span>Owner Utility</span> <i class="fa fa-angle-left pull-right"></i> </a>
            <ul class="treeview-menu">
              <li class=""><a href="https://apm.topwork.asia/owner_utility/owner_utility_list.php"><i class="fa fa-angle-double-right"></i>Owner Utility List</a></li>
              <li class=""><a href="https://apm.topwork.asia/owner_utility/add_owner_utility.php"><i class="fa fa-angle-double-right"></i>Add Owner Utility</a></li>
            </ul>
          </li>
          <li class="treeview "> <a href="#"> <i class="fa fa-cut"></i> <span>Maintenance Cost</span> <i class="fa fa-angle-left pull-right"></i> </a>
            <ul class="treeview-menu">
              <li class=""><a href="https://apm.topwork.asia/maintenance/maintenance_cost_list.php"><i class="fa fa-angle-double-right"></i>Maintenance Cost List</a></li>
              <li class=""><a href="https://apm.topwork.asia/maintenance/add_maintenance_cost.php"><i class="fa fa-angle-double-right"></i>Add Maintenance Cost</a></li>
            </ul>
          </li>
          <li class="treeview "> <a href="#"> <i class="fa fa-user"></i> <span>Management Committee</span> <i class="fa fa-angle-left pull-right"></i> </a>
            <ul class="treeview-menu">
              <li class=""><a href="https://apm.topwork.asia/management/m_committee_list.php"><i class="fa fa-angle-double-right"></i>Member List</a></li>
              <li class=""><a href="https://apm.topwork.asia/management/add_m_committee.php"><i class="fa fa-angle-double-right"></i>Add Member</a></li>
            </ul>
          </li>
          <li class="treeview "> <a href="#"> <i class="fa fa-money"></i> <span>Apartment Fund</span> <i class="fa fa-angle-left pull-right"></i> </a>
            <ul class="treeview-menu">
              <li class=""><a href="https://apm.topwork.asia/fund/fund_list.php"><i class="fa fa-angle-double-right"></i>Fund List</a></li>
              <li class=""><a href="https://apm.topwork.asia/fund/add_fund.php"><i class="fa fa-angle-double-right"></i>Add Fund</a></li>
            </ul>
          </li>
          <li class="treeview "> <a href="#"> <i class="fa fa-bank"></i> <span>Bill Deposit</span> <i class="fa fa-angle-left pull-right"></i> </a>
            <ul class="treeview-menu">
              <li class=""><a href="https://apm.topwork.asia/bill/bill_list.php"><i class="fa fa-angle-double-right"></i>Bill List</a></li>
              <li class=""><a href="https://apm.topwork.asia/bill/add_bill.php"><i class="fa fa-angle-double-right"></i>Add Bill</a></li>
            </ul>
          </li>
          <li class="treeview "> <a href="#"> <i class="fa fa-comments"></i> <span>Complain</span> <i class="fa fa-angle-left pull-right"></i> </a>
            <ul class="treeview-menu">
              <li class=""><a href="https://apm.topwork.asia/complain/complainlist.php"><i class="fa fa-angle-double-right"></i>Complain List</a></li>
              <li class=""><a href="https://apm.topwork.asia/complain/addcomplain.php"><i class="fa fa-angle-double-right"></i>Add Complain</a></li>
            </ul>
          </li>
          <li class="treeview "> <a href="#"> <i class="fa fa-car"></i> <span>Visitor</span> <i class="fa fa-angle-left pull-right"></i> </a>
            <ul class="treeview-menu">
              <li class=""><a href="https://apm.topwork.asia/visitor/visitorlist.php"><i class="fa fa-angle-double-right"></i>Visitor List</a></li>
              <li class=""><a href="https://apm.topwork.asia/visitor/addvisitor.php"><i class="fa fa-angle-double-right"></i>Add Visitor</a></li>
            </ul>
          </li>
          <li class="treeview "> <a href="#"> <i class="fa fa-handshake-o"></i> <span>Meeting</span> <i class="fa fa-angle-left pull-right"></i> </a>
            <ul class="treeview-menu">
              <li class=""><a href="https://apm.topwork.asia/meeting/meetinglist.php"><i class="fa fa-angle-double-right"></i>Meeting List</a></li>
              <li class=""><a href="https://apm.topwork.asia/meeting/addmeeting.php"><i class="fa fa-angle-double-right"></i>Add Meeting</a></li>
            </ul>
          </li>
          <li class="treeview "> <a href="#"> <i class="fa fa-bullhorn" aria-hidden="true"></i> <span>Notice Board</span> <i class="fa fa-angle-left pull-right"></i> </a>
            <ul class="treeview-menu">
              <li class=""><a href="https://apm.topwork.asia/notice/notice.php"><i class="fa fa-angle-double-right"></i>Tenant Notice Board</a></li>
              <li class=""><a href="https://apm.topwork.asia/notice/employee_notice.php"><i class="fa fa-angle-double-right"></i>Employee Notice Board</a></li>
              <li class=""><a href="https://apm.topwork.asia/notice/owner_notice.php"><i class="fa fa-angle-double-right"></i>Owner Notice Board</a></li>
            </ul>
          </li>
          <li class="treeview "> <a href="https://apm.topwork.asia/mailsms/mailsms.php"> <i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email / SMS Alert</span></a></li>
          <li class="treeview "> <a href="#"> <i class="fa fa-bar-chart-o"></i> <span>Report</span> <i class="fa fa-angle-left pull-right"></i> </a>
            <ul class="treeview-menu">
              <li class=""><a href="https://apm.topwork.asia/report/fair_report.php"><i class="fa fa-angle-double-right"></i>Rental Report</a></li>
              <li class=""><a href="https://apm.topwork.asia/report/rented_report.php"><i class="fa fa-angle-double-right"></i>Tenant Report</a></li>
              <li class=""><a href="https://apm.topwork.asia/report/visitors_report.php"><i class="fa fa-angle-double-right"></i>Visitors Report</a></li>
              <li class=""><a href="https://apm.topwork.asia/report/complain_report.php"><i class="fa fa-angle-double-right"></i>Complain Report</a></li>
              <li class=""><a href="https://apm.topwork.asia/report/unit_report.php"><i class="fa fa-angle-double-right"></i>Unit Status Report</a></li>
              <li class=""><a target="_blank" href="https://apm.topwork.asia/report/fund_status.php"><i class="fa fa-angle-double-right"></i>Fund Status</a></li>
              <li class=""><a href="https://apm.topwork.asia/report/bill_report.php"><i class="fa fa-angle-double-right"></i>Bill Report</a></li>
              <li class=""><a href="https://apm.topwork.asia/report/salary_report.php"><i class="fa fa-angle-double-right"></i>Salary Report</a></li>
            </ul>
          </li>

          <li class="treeview "> <a href="#"> <i class="fa fa-database"></i> <span>Database</span> <i class="fa fa-angle-left pull-right"></i> </a>
            <ul class="treeview-menu">
              <li class=""><a href="https://apm.topwork.asia/database/cleardata.php"><i class="fa fa-angle-double-right"></i>Clear Data</a></li>
            </ul>
          </li>
          <li class="treeview "> <a href="#"> <i class="fa fa-wrench"></i> <span>Settings</span> <i class="fa fa-angle-left pull-right"></i> </a>
            <ul class="treeview-menu">
              <li class=""><a href="https://apm.topwork.asia/setting/admin.php"><i class="fa fa-angle-double-right"></i>Admin Setup</a></li>
              <li style="display:none;" class=""><a href="https://apm.topwork.asia/building/add_building_info.php"><i class="fa fa-angle-double-right"></i>Building Details Setup</a> </li>
              <li class=""><a href="#"><i class="fa fa-angle-double-right"></i>Building <i class="fa fa-angle-left pull-right"></i> </a>
                <ul class="treeview-menu">
                  <li class=""><a href="https://apm.topwork.asia/branch/branchlist.php"><i class="fa fa-angle-double-right"></i>Building List</a></li>
                  <li class=""><a href="https://apm.topwork.asia/branch/addbranch.php"><i class="fa fa-angle-double-right"></i>Add Building</a></li>
                </ul>
              </li>
              <li class=""><a href="https://apm.topwork.asia/setting/bill_setup.php"><i class="fa fa-angle-double-right"></i>Bill Type Setup</a></li>
              <li class=""><a href="https://apm.topwork.asia/setting/utility_bill_setup.php"><i class="fa fa-angle-double-right"></i>Utility Bill Setup</a></li>
              <li class=""><a href="https://apm.topwork.asia/setting/member_type_setup.php"><i class="fa fa-angle-double-right"></i>Management Member Type</a></li>
              <li class=""><a href="https://apm.topwork.asia/setting/month_setup.php"><i class="fa fa-angle-double-right"></i>Month Setup</a></li>
              <li class=""><a href="https://apm.topwork.asia/setting/year_setup.php"><i class="fa fa-angle-double-right"></i>Year Setup</a></li>
              <li class=""><a href="https://apm.topwork.asia/setting/currency_setup.php"><i class="fa fa-angle-double-right"></i>Currency Setup</a></li>
              <li class=""><a href="https://apm.topwork.asia/setting/language.php"><i class="fa fa-angle-double-right"></i>System Setup</a></li>
            </ul>
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
    <!-- =============================================== -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Add the sidebar's background. This div must be placed
 immediately after the control sidebar -->
      <!--common lang text for js-->
      <input type="hidden" id="email_validate_text" value="Please provide a valid email address">
      <form id="updateprofile" action="https://apm.topwork.asia/ajax/updateProfile.php" method="post">
        <div class="modal fade" role="dialog" id="user_profile" aria-labelledby="gridSystemModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">Update Your Profile</h4>
              </div>
              <div class="modal-body">
                <div align="center"><img class="photo_img_round" style="width:100px;height:100px;" src="https://apm.topwork.asia/img/upload/CA8D0636-E7DD-542A-8775-7CC2DA9C7739.jpg" /></div>
                <h4 align="center">Alexander Pierce</h4>
                <h5 align="center">
                  Super Admin </h5>
                <div class="form-group">
                  <label class="control-label">Name :&nbsp;&nbsp;</label>
                  <input type="text" class="form-control" id="txtProfileName" name="txtProfileName" value="Alexander Pierce">
                </div>
                <div class="form-group">
                  <label class="control-label">Email :&nbsp;&nbsp;</label>
                  <input type="text" class="form-control" id="txtProfileEmail" name="txtProfileEmail" value="devsolver@gmail.com">
                </div>
                <div class="form-group">
                  <label class="control-label">Contact No (With Country Code) :&nbsp;&nbsp;</label>
                  <input type="text" class="form-control" id="txtProfileContact" name="txtProfileContact" value="+8801679110711">
                </div>
                <div class="form-group">
                  <label class="control-label">Password :&nbsp;&nbsp;</label>
                  <input type="text" class="form-control" id="txtProfilePassword" name="txtProfilePassword" value="123456">
                </div>
                <div style="color:orange;font-weight:bold;text-align:left;font-size:15px;">After update application will be logout automatically.</div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" onClick="javascript:$('#updateprofile').submit();"><i class="fa fa-save"></i> Update</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <input type="hidden" name="user_id" value="1">
      </form>
      <!-- Language Switch Modal -->
      <div class="modal fade" id="switch_language" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" align="center"><strong>LANGUAGE SWITCHER</strong></h4>
            </div>
            <div class="modal-body">
              <button onclick="set_language(this);" lang="English" class="btn btn-default btn-lg btn-lang-selected"><img style="width:24px;" src="https://apm.topwork.asia/language/English/flag.png"> English</button>&nbsp;&nbsp;&nbsp;
            </div>
            <div class="modal-footer"> </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->


      <!-- Language Switch Modal -->
      <div class="modal fade" id="switch_branch" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" align="center"><strong style="text-transform:uppercase;">Switch Building</strong></h4>
            </div>
            <div class="modal-body clearfix">
              <div class="col-md-4" style="margin-bottom:20px;border:solid 2px #d73925;padding:15px;cursor:pointer;text-align:center;" onClick="setBranch(8);">
                <div><img class="img-thumbnail" style="width:200px;height:200px;" src="https://apm.topwork.asia/img/upload/6F7882BD-85CD-8D98-EDCA-1FF65F0BFABA.jpg"></div>
                <div style="text-align:center;font-weight:bold;font-size:18px;">Golden Tower</div>
              </div>
              <div class="col-md-4" style="margin-bottom:20px;padding:15px;cursor:pointer;text-align:center;" onClick="setBranch(7);">
                <div><img class="img-thumbnail" style="width:200px;height:200px;" src="https://apm.topwork.asia/img/upload/E9EB1C1F-9D88-0FD8-CE34-92F3421FA31D.jpg"></div>
                <div style="text-align:center;font-weight:bold;font-size:18px;">Silver Tower</div>
              </div>
            </div>
            <div class="modal-footer"> </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

      <!-- Available room -->
      <div class="modal fade" id="available_room" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" align="center"><strong>Available Rooms List</strong></h4>
            </div>
            <div class="modal-body clearfix">
              <table class="table table-bordered table-striped table-condensed">
                <thead>
                  <tr>
                    <th>Floor Name</th>
                    <th>Unit Name</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>First Floor</td>
                    <td>Flat 1B</td>
                  </tr>
                  <tr>
                    <td>Second Floor</td>
                    <td>Flat 2A</td>
                  </tr>
                  <tr>
                    <td>Second Floor</td>
                    <td>Flat 2B</td>
                  </tr>
                <tbody>
              </table>
            </div>
            <div class="modal-footer"> </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->


      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>Golden Tower Dashboard</h1>
        <ol class="breadcrumb">
          <li><a href="https://apm.topwork.asia/dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Home</li>
        </ol>
      </section>
      <!-- Main content -->
      <section class="content">
        <!-- /.row start -->
        <div class="row home_dash_box">
          <!-- col start -->
          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
              <div class="inner">
                <h3>2</h3>
                <p>Total Floor</p>
              </div>
              <div class="icon"> <img height="80" width="80" src="img/floor.png"></a> </div>
              <a href="https://apm.topwork.asia/floor/floorlist.php" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col end -->
          <!-- col start -->
          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
              <div class="inner">
                <h3>4</h3>
                <p>Total Unit</p>
              </div>
              <div class="icon"> <img height="80" width="80" src="img/room.png"></a> </div>
              <a href="https://apm.topwork.asia/unit/unitlist.php" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col end -->
          <!-- col start -->
          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
              <div class="inner">
                <h3>1</h3>
                <p>Total Owner</p>
              </div>
              <div class="icon"> <img height="80" width="80" src="img/owner.png"></a> </div>
              <a href="https://apm.topwork.asia/owner/ownerlist.php" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col end -->
          <!-- col start -->
          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
              <div class="inner">
                <h3>1</h3>
                <p>Total Tenant</p>
              </div>
              <div class="icon"> <img height="80" width="80" src="img/rented.png"></a> </div>
              <a href="https://apm.topwork.asia/rent/rentlist.php" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col end -->
          <!-- col start -->
          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
              <div class="inner">
                <h3>1</h3>
                <p>Total Employee</p>
              </div>
              <div class="icon"> <img height="80" width="80" src="img/employee.png"></a> </div>
              <a href="https://apm.topwork.asia/employee/employeelist.php" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col end -->
          <!-- ./col end -->
          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
              <div class="inner">
                <h3>1</h3>
                <p>Total Committee</p>
              </div>
              <div class="icon"> <img height="80" width="80" src="img/comittee.png"></a> </div>
              <a href="https://apm.topwork.asia/management/m_committee_list.php" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col end -->
          <!-- col start -->
          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
              <div class="inner">
                <h3>$20000.00</h3>
                <p>Total Rent</p>
              </div>
              <div class="icon"> <img height="80" width="80" src="img/fair.png"></a> </div>
              <a href="https://apm.topwork.asia/fair/fairlist.php" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col end -->
          <!-- col start -->
          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
              <div class="inner">
                <h3>$50.00</h3>
                <p>Total Maintenance</p>
              </div>
              <div class="icon"> <img height="80" width="80" src="img/maintenance.png"></a> </div>
              <a href="https://apm.topwork.asia/maintenance/maintenance_cost_list.php" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col end -->
          <!-- col start -->
          <!-- col start -->
          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
              <div class="inner">
                <h3>$200.00</h3>
                <p>Total Fund</p>
              </div>
              <div class="icon"> <img height="80" width="80" src="img/fund.png"></a> </div>
              <a href="https://apm.topwork.asia/fund/fund_list.php" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- col start -->
          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
              <div class="inner">
                <h3>$0.00</h3>
                <p>Owner Utility</p>
              </div>
              <div class="icon"> <img height="80" width="80" src="img/money-cash.png"></a> </div>
              <a href="https://apm.topwork.asia/owner_utility/owner_utility_list.php" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col end -->
          <!-- col start -->
          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
              <div class="inner">
                <h3>$8000.00</h3>
                <p>Employee Salary</p>
              </div>
              <div class="icon"> <img height="80" width="80" src="img/cash-icon.png"></a> </div>
              <a href="https://apm.topwork.asia/employee/employee_salary_setup.php" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col end -->
          <!-- col start -->
          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
              <div class="inner">
                <h3>2</h3>
                <p>Total Complain</p>
              </div>
              <div class="icon"> <img height="80" width="80" src="img/chat-complain.png"></a> </div>
              <a href="https://apm.topwork.asia/complain/complainlist.php" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col end -->
        </div>
        <!-- /.row end -->
        <div class="row">
          <div class="col-lg-6 col-xs-12">
            <div class="box box-success">
              <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-area-chart" aria-hidden="true"></i>&nbsp;&nbsp;Monthly Deposit Bill Graph For Year 2021</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="chart">
                  <canvas id="salesChart" style="height: 180px;"></canvas>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-xs-12">
            <div class="box box-success">
              <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-area-chart" aria-hidden="true"></i>&nbsp;&nbsp;Monthly Tenant Rent Graph For Year 2021</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="chart">
                  <canvas id="salesChartRent" style="height: 180px;"></canvas>
                </div>
              </div>
            </div>
          </div>


        </div>
        <!-- /.row end -->
        <div class="row">
          <div class="col-lg-6 col-xs-12">
            <div class="box box-success">
              <div class="box-header with-border">
                <h3 class="box-title">&nbsp;&nbsp;<i class="fa fa-comments" aria-hidden="true"></i> Last 5 Complains</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body" style="height:280px;">
                <table class="table table-bordered table-striped dt-responsive">
                  <thead>
                    <tr>
                      <th>Title</th>
                      <th>Issue Date</th>
                      <th style="text-align:center;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Flat color issue</td>
                      <td>28/08/2019</td>
                      <td align="center"><a class="btn btn-success ams_btn_special" data-toggle="tooltip" href="javascript:;" onClick="$('#complain_view_36').modal('show');" data-original-title="View Details"><i class="fa fa-eye"></i></a>
                        <div style="text-align:left;" id="complain_view_36" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header green_header">
                                <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
                                <h3 class="modal-title">Complain Details</h3>
                              </div>
                              <div class="modal-body">
                                <h3 style="text-decoration:underline;">Details Infromation</h3>
                                <div class="row">
                                  <div class="col-xs-6"> <b>Issue Date :</b> 28/08/2019<br />
                                    <b>Title :</b> Flat color issue<br />
                                    <b>Month :</b> August<br />
                                    <b>Year :</b> 2019<br />
                                  </div>
                                  <div class="col-xs-6"> <b>Description :</b> How flat color condition is really bad kindly solve it.<br />
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Water Problem</td>
                      <td>27/08/2019</td>
                      <td align="center"><a class="btn btn-success ams_btn_special" data-toggle="tooltip" href="javascript:;" onClick="$('#complain_view_35').modal('show');" data-original-title="View Details"><i class="fa fa-eye"></i></a>
                        <div style="text-align:left;" id="complain_view_35" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header green_header">
                                <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
                                <h3 class="modal-title">Complain Details</h3>
                              </div>
                              <div class="modal-body">
                                <h3 style="text-decoration:underline;">Details Infromation</h3>
                                <div class="row">
                                  <div class="col-xs-6"> <b>Issue Date :</b> 27/08/2019<br />
                                    <b>Title :</b> Water Problem<br />
                                    <b>Month :</b> August<br />
                                    <b>Year :</b> 2019<br />
                                  </div>
                                  <div class="col-xs-6"> <b>Description :</b> We need to solve water issue soon.<br />
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-xs-12">
            <div class="box box-success">
              <div class="box-header with-border">
                <h3 class="box-title">&nbsp;&nbsp;<i class="fa fa-car" aria-hidden="true"></i> Last 5 Visitors</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body" style="height:280px;">
                <table class="table table-bordered table-striped dt-responsive">
                  <thead>
                    <tr>
                      <th>Last 5 Visitors</th>
                      <th>Last 5 Visitors</th>
                      <th style="text-align:center;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>27/08/2019</td>
                      <td>Kalvin Peter</td>
                      <td align="center"><a class="btn btn-success ams_btn_special" data-toggle="tooltip" href="javascript:;" onClick="$('#visitor_view_17').modal('show');" data-original-title="View Details"><i class="fa fa-eye"></i></a>
                        <div style="text-align:left;" id="visitor_view_17" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header green_header">
                                <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
                                <h3 class="modal-title">Visitor Details</h3>
                              </div>
                              <div class="modal-body">
                                <h3 style="text-decoration:underline;">Details Infromation</h3>
                                <div class="row">
                                  <div class="col-xs-6"> <b>Issue Date :</b> 27/08/2019<br />
                                    <b>Visitor Name :</b> Kalvin Peter<br />
                                    <b>Mobile :</b> 1212121212<br />
                                    <b>Address :</b> 799 Princess Drive
                                    Norwood, MA 02062<br />
                                  </div>
                                  <div class="col-xs-6"><b>Floor No :</b> First Floor<br />
                                    <b>Unit No :</b> Flat 1A<br />
                                    <b>In-Time :</b> 12:50 PM<br />
                                    <b>Out-Time :</b> 05:50 PM<br />
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </section>
      <script type="text/javascript">
        if ($('#salesChart').length > 0) {
          // Get context with jQuery - using jQuery's .get() method.
          var salesChartCanvas = $('#salesChart').get(0).getContext('2d');
          // This will get the first returned node in the jQuery collection.
          var salesChart = new Chart(salesChartCanvas);

          var salesChartData = {
            //labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July ', 'August', 'September', 'October', 'November', 'December'],
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
              label: 'Bill Report',
              fillColor: 'rgba(0, 166, 90, 1)',
              strokeColor: 'rgba(0, 166, 90, 1)',
              pointColor: '#00a65a',
              pointStrokeColor: 'rgba(0, 166, 90, 1)',
              pointHighlightFill: '#fff',
              pointHighlightStroke: 'rgba(0, 166, 90, 1)',
              data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
            }]
          };

          var salesChartOptions = {
            // Boolean - If we should show the scale at all
            showScale: true,
            // Boolean - Whether grid lines are shown across the chart
            scaleShowGridLines: true,
            // String - Colour of the grid lines
            scaleGridLineColor: 'rgba(0,0,0,.05)',
            // Number - Width of the grid lines
            scaleGridLineWidth: 1,
            // Boolean - Whether to show horizontal lines (except X axis)
            scaleShowHorizontalLines: true,
            // Boolean - Whether to show vertical lines (except Y axis)
            scaleShowVerticalLines: true,
            // Boolean - Whether the line is curved between points
            bezierCurve: true,
            // Number - Tension of the bezier curve between points
            bezierCurveTension: 0.3,
            // Boolean - Whether to show a dot for each point
            pointDot: true,
            // Number - Radius of each point dot in pixels
            pointDotRadius: 4,
            // Number - Pixel width of point dot stroke
            pointDotStrokeWidth: 1,
            // Number - amount extra to add to the radius to cater for hit detection outside the drawn point
            pointHitDetectionRadius: 20,
            // Boolean - Whether to show a stroke for datasets
            datasetStroke: true,
            // Number - Pixel width of dataset stroke
            datasetStrokeWidth: 2,
            // Boolean - Whether to fill the dataset with a color
            datasetFill: true,
            // String - A legend template
            tooltipTemplate: "<%if (label){%><%=label %>: <%}%><%= value + ' $' %>",
            //legendTemplate          : '<ul class=\'<%=name.toLowerCase()%>-legend\'><% for (var i=0; i<datasets.length; i++){%><li><span style=\'background-color:<%=datasets[i].lineColor%>\'></span><%=datasets[i].label%></li><%}%></ul>',
            // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
            maintainAspectRatio: true,
            // Boolean - whether to make the chart responsive to window resizing
            responsive: true
          };

          // Create the line chart
          salesChart.Line(salesChartData, salesChartOptions);

          // ---------------------------
          // - END MONTHLY SALES CHART -
          // ---------------------------
        }


        if ($('#salesChartRent').length > 0) {
          // Get context with jQuery - using jQuery's .get() method.
          var salesChartCanvas = $('#salesChartRent').get(0).getContext('2d');
          // This will get the first returned node in the jQuery collection.
          var salesChart = new Chart(salesChartCanvas);

          var salesChartData = {
            //labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July ', 'August', 'September', 'October', 'November', 'December'],
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
              label: 'Bill Report',
              fillColor: 'rgba(0, 166, 90, 1)',
              strokeColor: 'rgba(0, 166, 90, 1)',
              pointColor: '#00a65a',
              pointStrokeColor: 'rgba(0, 166, 90, 1)',
              pointHighlightFill: '#fff',
              pointHighlightStroke: 'rgba(0, 166, 90, 1)',
              data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
            }]
          };

          var salesChartOptions = {
            // Boolean - If we should show the scale at all
            showScale: true,
            // Boolean - Whether grid lines are shown across the chart
            scaleShowGridLines: true,
            // String - Colour of the grid lines
            scaleGridLineColor: 'rgba(0,0,0,.05)',
            // Number - Width of the grid lines
            scaleGridLineWidth: 1,
            // Boolean - Whether to show horizontal lines (except X axis)
            scaleShowHorizontalLines: true,
            // Boolean - Whether to show vertical lines (except Y axis)
            scaleShowVerticalLines: true,
            // Boolean - Whether the line is curved between points
            bezierCurve: true,
            // Number - Tension of the bezier curve between points
            bezierCurveTension: 0.3,
            // Boolean - Whether to show a dot for each point
            pointDot: true,
            // Number - Radius of each point dot in pixels
            pointDotRadius: 4,
            // Number - Pixel width of point dot stroke
            pointDotStrokeWidth: 1,
            // Number - amount extra to add to the radius to cater for hit detection outside the drawn point
            pointHitDetectionRadius: 20,
            // Boolean - Whether to show a stroke for datasets
            datasetStroke: true,
            // Number - Pixel width of dataset stroke
            datasetStrokeWidth: 2,
            // Boolean - Whether to fill the dataset with a color
            datasetFill: true,
            // String - A legend template
            tooltipTemplate: "<%if (label){%><%=label %>: <%}%><%= value + ' $' %>",
            //legendTemplate          : '<ul class=\'<%=name.toLowerCase()%>-legend\'><% for (var i=0; i<datasets.length; i++){%><li><span style=\'background-color:<%=datasets[i].lineColor%>\'></span><%=datasets[i].label%></li><%}%></ul>',
            // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
            maintainAspectRatio: true,
            // Boolean - whether to make the chart responsive to window resizing
            responsive: true
          };

          // Create the line chart
          salesChart.Line(salesChartData, salesChartOptions);

          // ---------------------------
          // - END MONTHLY SALES CHART -
          // ---------------------------
        }
      </script>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
      <div class="pull-right hidden-xs"> <b>Version</b> 3.0 </div>
      <strong>Copyright &copy; 2014-2021 <a target="_blank" href="http://sakosys.com">sakosys.com</a></strong>
    </footer>
    <!-- /.control-sidebar -->
    <div class='control-sidebar-bg'></div>
  </div>
  <!-- ./wrapper -->
  <!-- Bootstrap 3.3.2 JS -->
  <script src="https://apm.topwork.asia/assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <!-- SlimScroll -->
  <script src="https://apm.topwork.asia/assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
  <!-- FastClick -->
  <script src='https://apm.topwork.asia/assets/plugins/fastclick/fastclick.min.js'></script>
  <!-- AdminLTE App -->
  <script src="https://apm.topwork.asia/assets/dist/js/app.min.js" type="text/javascript"></script>
  <!-- Demo -->
  <script src="https://apm.topwork.asia/assets/dist/js/demo.js" type="text/javascript"></script>
  <!-- iCheck 1.0.1 -->
  <script src="https://apm.topwork.asia/assets/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
  <!-- DATA TABES SCRIPT -->
  <script src="https://apm.topwork.asia/assets/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
  <script src="https://apm.topwork.asia/assets/plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
  <!-- iCheck 1.0.1 -->
  <script src="https://apm.topwork.asia/assets/dist/js/jquery.mask.min.js"></script>
  <script src="https://apm.topwork.asia/assets/dist/js/common.js" type="text/javascript"></script>
  <script src="https://apm.topwork.asia/assets/dist/js/dataTables.responsive.min.js" type="text/javascript"></script>
  <script src="https://apm.topwork.asia/assets/dist/js/dataTables.tableTools.min.js" type="text/javascript"></script>
  <script src="https://apm.topwork.asia/assets/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
  <input type="hidden" id="web_url" value="https://apm.topwork.asia/" />
</body>

</html>