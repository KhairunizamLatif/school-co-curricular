<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="../../css/dashboard.css">
<link rel="stylesheet" href="../../css/table.css">
<script src="../../js/dashboard.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>TechnoGeeK | Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet" type="text/css" >


</head>

<body>

<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1><i class="fa fa-university" aria-hidden="true"></i> School <small>co curricular</small></h1>
            </div>
        </div>
    </div>
</header>
<br>

<section id="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li class="active">Dashboard</li>
        </ol>
    </div>
</section>


<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="../dashboard/dashboard.php" class="list-group-item active main-color-bg"><em class="fa fa-tachometer"></em> Dashboard <span class="badge">12</span></a>
                    <a href="../class/classes-list-page.php" class="list-group-item"><em class="fa fa-files-o"></em> Class<span class="badge">25</span></a>
                    <a href="list-student-name-page.php" class="list-group-item"><em class="fa fa-plus"></em> Student<span class="badge">126</span></a>
                    <a href="../user/user-list-page-dashboard.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Users <span class="badge">12</span></a>
                    <a href="../user/user-list-page-dashboard.php" class="list-group-item"><em class="fa fa-users"></em> Users <span class="badge">12</span></a>
                </div>

                <div class="well">
                    <h4>Disk Space Used</h4>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                        </div>
                    </div>
                    <h4>Bandwidth Used</h4>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                            40%
                        </div>
                    </div>
                </div>
            </div>
            <!--Latest User-->
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:  #333333;">
                        <h3 class="panel-title">List Of Students</h3>
                    </div>
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-5">
                                <input id="myInput" type="text" class="form-control" placeholder="Search..">
                            </div>
                            <div class="col col-xs-7 text-right">
                                <button type="button" class="btn btn-sm btn-primary btn-create" data-toggle="modal" data-target="#myModal">Create New</button>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-list">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>IC</th>
                                <th>Class</th>
                                <th><em class="fa fa-cog"></em></th>
                            </tr>
                            </thead>
                            <tbody id="myTable">
                            <?Php include 'table_std.php'?>
                            </tbody>
                        </table>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Modal Header</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal" role="form" method="POST" action="/register">
                                        <div class="row">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-6">
                                                <h2>Register New User</h2>
                                                <hr>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 field-label-responsive">
                                                <label for="name">Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                                                        <input type="text" name="name" class="form-control" id="name"
                                                               placeholder="John Doe" required autofocus>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put name validation error messages here -->
                        </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 field-label-responsive">
                                                <label for="name">Class</label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-graduation-cap"></i></div>
                                                        <input type="text" name="Class" class="form-control" id="class"
                                                               placeholder="Class" required autofocus>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put name validation error messages here -->
                        </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 field-label-responsive">
                                                <label for="password">Password</label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                                                        <input type="password" name="password" class="form-control" id="password"
                                                               placeholder="Password" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-control-feedback">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-6">
                                                <button type="submit" class="btn btn-success"><i class="fa fa-user-plus"></i> Register</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Modal -->

                    <!-- Modal-edit -->
                    <div class="modal fade" id="myEdit" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Modal Header</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal" role="form" method="POST" action="/register">
                                        <div class="row">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-6">
                                                <h2>Register New User</h2>
                                                <hr>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 field-label-responsive">
                                                <label for="name">Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                                                        <input type="text" name="edit-name" class="form-control" id="edit-name"
                                                               placeholder="John Doe" required autofocus>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put name validation error messages here -->
                        </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 field-label-responsive">
                                                <label for="name">Class</label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-graduation-cap"></i></div>
                                                        <input type="text" name="edit-class" class="form-control" id="edit-class"
                                                               placeholder="Class" required autofocus>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put name validation error messages here -->
                        </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 field-label-responsive">
                                                <label for="password">Password</label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                                                        <input type="password" name="edit-password" class="form-control" id="edit-password"
                                                               placeholder="Password" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-control-feedback">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-6">
                                                <button type="submit" class="btn btn-success"><i class="fa fa-user-plus"></i> Register</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Modal-edit -->

                    <!-- Modal-delete -->
                    <div class="modal fade" id="myDelete" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Delete</h4>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Modal-delete -->
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col col-xs-4">Page 1 of 5
                            </div>
                            <div class="col col-xs-8">
                                <ul class="pagination hidden-xs pull-right">
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                </ul>
                                <ul class="pagination visible-xs pull-right">
                                    <li><a href="#">«</a></li>
                                    <li><a href="#">»</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>


<footer id="footer">
    <p>Copyright : Khairunizamlatif<br>2018</p>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="dist/js/bootstrap.min.js"></script>
</body>
</html>
