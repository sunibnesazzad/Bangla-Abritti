<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="/admin/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Bangla Abritti</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    

    <!-- Bootstrap core CSS     -->
    <link href="/admin/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="/admin/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="/admin/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="/admin/css/demo.css" rel="stylesheet" />

    <link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css">
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="/admin/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="/admin/css/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/admin/css/dataTables.foundation.css">
    <link rel="stylesheet" type="text/css" href="/admin/css/dataTables.jqueryui.css">
    <link rel="stylesheet" type="text/css" href="/admin/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="/admin/css/dataTables.semanticui.css">
    <!-- 
    <link rel="stylesheet" type="text/css" href="/admin/css/jquery-ui.css"> -->
<!--     <link rel="stylesheet" type="text/css" href="/admin/css/style-clndr.css"> -->
    <link rel="stylesheet" type="text/css" href="/admin/css/dash.css">
    <style type="text/css">
        .mce-notification.mce-has-close {
                padding-right: 15px;
                display: none;
            }

        .modal-content {
            position: relative;
            background-color: #fff;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
            border: 1px solid #999;
            border: 1px solid rgba(0,0,0,.2);
            border-radius: 6px;
            outline: 0;
            -webkit-box-shadow: 0 3px 9px rgba(0,0,0,.5);
            box-shadow: 0 3px 9px rgba(0,0,0,.5);
            z-index: 9999;
        }

        .modal.in .modal-dialog {
            -webkit-transform: translate(0,0);
            -ms-transform: translate(0,0);
            -o-transform: translate(0,0);
            transform: translate(0,0);
            z-index: 99;
        }

        .modal-backdrop.in {
            filter: alpha(opacity=50);
            opacity: .0;
            z-index: 0;
        }
    </style>
</head>

@include('admin.inc.sidebar')
@section('navigation')

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
             @yield('page_title')  
                </div>

                    <div>
                       <form action="/logout" method="post">
                            @csrf
                           <button class="btn btn-danger pull-right">লগ আউট</button>
                       </form>
                    </div>
                <div class="collapse navbar-collapse">
                    <!-- <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-sm hidden-xs"></b>
                                    <span class="notification hidden-sm hidden-xs">5</span>
									<p class="hidden-lg hidden-md">
										5 Notifications
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul> -->

                    <ul class="nav navbar-nav navbar-right">
                        
<!--
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Dropdown
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li>
-->
                        <li>
                            <a href="#">
                                <p></p>
                            </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>
@show


@yield('main-content')
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                           <!--  <a href="#">
                                Home
                            </a> -->
                        </li>

                    </ul>
                </nav>
                <p class="copyright ">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Biziitech Team</a>
                </p>
            </div>
        </footer>

    </div>
</div>
</body>
    
    <script src="/admin/js/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/autofill/2.3.0/css/autoFill.bootstrap.min.css"></script>
    <script src="/admin/js/dataTables.bootstrap.js"></script>
    <script src="/admin/js/dataTables.foundation.js"></script>
    <script src="/admin/js/dataTables.jqueryui.js"></script>
    <script src="/admin/js/dataTables.semanticui.js"></script>


    <script>
        $(document).ready(function(){
            $('#my_table').DataTable({
                'paging' : true,
                'info'   : false,
                'ordering' : false,
                "language": {
                        "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Bangla.json"
                    }
            });
        });
    </script>
    
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip(); 
        });
    </script>
    <script src="/admin/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Charts Plugin -->
    <script src="/admin/js/chartist.min.js"></script>


    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="/admin/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="/admin/js/demo.js"></script>
    <!-- 
    <script type="text/javascript" src="/admin/js/jquery.js"></script> -->
    <script type="text/javascript" src="/admin/js/jquery-ui-bangla.js"></script>
    <script type="text/javascript" src="/admin/js/dash.js"></script>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea#textEd' });</script>
</html>
