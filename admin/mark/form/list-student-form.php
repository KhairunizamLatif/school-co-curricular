<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="../../../css/dashboard.css">
<link rel="stylesheet" href="../../../css/table.css">
<script src="../../../js/dashboard.js"></script>
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
                    <a href="../../../dashboard.php" class="list-group-item active main-color-bg"><em class="fa fa-tachometer"></em> Dashboard <span class="badge">12</span></a>
                    <a href="../../class/classes-list-page.php" class="list-group-item"><em class="fa fa-files-o"></em> Class<span class="badge">25</span></a>
                    <a href="#" class="list-group-item"><em class="fa fa-plus"></em> Posts<span class="badge">126</span></a>
                    <a href="#" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Users <span class="badge">12</span></a>
                    <a href="../../user/user-list-page-dashboard.php" class="list-group-item"><em class="fa fa-users"></em> Users <span class="badge">12</span></a>
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
                        <h3 class="panel-title">Students Name</h3>
                    </div>
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-5">
                                <input id="myInput" type="text" class="form-control" placeholder="Search..">
                            </div>
                            <div class="col col-xs-7 text-right">
                                <button type="button" class="btn btn-sm btn-primary btn-create">Create New</button>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-list">
                            <thead>
                            <tr>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th><center>Action</center></th>
                                <th><em class="fa fa-cog"></em></th>
                            </tr>
                            </thead>
                            <tbody id="myTable">
                            <tr>
                                <td>Raj</td>
                                <td>John Doe</td>
                                <td align="center">
                                    <a class="btn btn-default" href="form-uniformed-unit.php"><i class="fas fa-user-astronaut"></i> Uniform</a>
                                    <a class="btn btn-default" href="form-Sport.php"><i class="fas fa-bicycle"></i> Club</a>
                                    <a class="btn btn-default" href="form-club.php"><i class="fas fa-futbol"></i> Sport</a>
                                </td>
                                <td align="center">
                                    <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                                    <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Mohan</td>
                                <td>viraj</td>
                                <td align="center">
                                    <a class="btn btn-default" href="form-uniformed-unit.php"><i class="fas fa-user-astronaut"></i> Uniform</a>
                                    <a class="btn btn-default" href="form-Sport.php"><i class="fas fa-bicycle"></i> Club</a>
                                    <a class="btn btn-default" href="form-club.php"><i class="fas fa-futbol"></i> Sport</a>
                                </td>
                                <td align="center">
                                    <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                                    <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                                </td>
                            </tr>
                            <tr>
                                <td>koli</td>
                                <td>Parmar</td>
                                <td align="center">
                                    <a class="btn btn-default" href="form-uniformed-unit.php"><i class="fas fa-user-astronaut"></i> Uniform</a>
                                    <a class="btn btn-default" href="form-Sport.php"><i class="fas fa-bicycle"></i> Club</a>
                                    <a class="btn btn-default" href="form-club.php"><i class="fas fa-futbol"></i> Sport</a>
                                </td>
                                <td align="center">
                                    <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                                    <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
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