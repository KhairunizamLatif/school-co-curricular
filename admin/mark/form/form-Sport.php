<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet'
      type='text/css'>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="../../../css/dashboard.css">
<link rel="stylesheet" href="../../../css/form.css">
<script src="../../../js/dashboard.js"></script>
<script src="../../../js/calculation.js"></script>
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

    <link href="css/style.css" rel="stylesheet" type="text/css">


</head>

<body>

<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1><i class="fa fa-university" aria-hidden="true"></i> School
                    <small>co curricular</small>
                </h1>
            </div>
        </div>
    </div>
</header>
<br>

<!--<section id="breadcrumb">-->
<!--<div class="container">-->
<!--<ol class="breadcrumb">-->
<!--<li class="active">Dashboard</li>-->
<!--</ol>-->
<!--</div>-->
<!--</section>-->

<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="../../dashboard/dashboard.php" class="list-group-item active main-color-bg"><em
                            class="fa fa-tachometer"></em> Dashboard <span class="badge">12</span></a>
                    <a href="../../class/classes-list-page.php" class="list-group-item"><em class="fa fa-files-o"></em> Class<span
                            class="badge">25</span></a>
                    <a href="posts.html" class="list-group-item"><em class="fa fa-plus"></em> Posts<span class="badge">126</span></a>
                    <a href="../../user/user-list-page-dashboard.php" class="list-group-item"><span
                            class="glyphicon glyphicon-user" aria-hidden="true"></span> Users <span
                            class="badge">12</span></a>
                    <a href="../../user/user-list-page-dashboard.php" class="list-group-item"><em class="fa fa-users"></em> Users
                        <span class="badge">12</span></a>
                </div>

                <div class="well">
                    <h4>Disk Space Used</h4>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                             aria-valuemax="100" style="width: 60%;">
                            60%
                        </div>
                    </div>
                    <h4>Bandwidth Used</h4>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                             aria-valuemax="100" style="width: 40%;">
                            40%
                        </div>
                    </div>
                </div>
            </div>
            <!--Latest User-->
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:  #333333;">
                        <h3 class="panel-title">Latest Users</h3>
                    </div>
                    <div class="panel-body">
                        <div class="stepwizard">
                            <div class="stepwizard-row setup-panel">
                                <div class="stepwizard-step">
                                    <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                                    <p>Step 1</p>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-2" type="button" class="btn btn-default btn-circle"
                                       disabled="disabled">2</a>
                                    <p>Step 2</p>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-3" type="button" class="btn btn-default btn-circle"
                                       disabled="disabled">3</a>
                                    <p>Step 3</p>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-4" type="button" class="btn btn-default btn-circle"
                                       disabled="disabled">4</a>
                                    <p>Step 4</p>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-5" type="button" class="btn btn-default btn-circle"
                                       disabled="disabled">5</a>
                                    <p>Step 5</p>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-6" type="button" class="btn btn-default btn-circle"
                                       disabled="disabled">6</a>
                                    <p>Step 6</p>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-7" type="button" class="btn btn-default btn-circle"
                                       disabled="disabled">7</a>
                                    <p>Finish</p>
                                </div>
                            </div>
                        </div>
                        <form role="form">
                            <div class="row setup-content" id="step-1">
                                <div class="col-xs-12">
                                    <h3> Step 1</h3>
                                    <hr>
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="control-label">Name</label>
                                            <input maxlength="100" type="text" class="form-control"/>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Identity Number</label>
                                            <input maxlength="100" type="text" class="form-control"/>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Class</label>
                                            <input maxlength="100" type="text" class="form-control"/>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Activity</label>
                                            <input maxlength="100" type="text" class="form-control"/>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="control-label">Present :</label>
                                            <input maxlength="200" type="text" required="required"
                                                   class="form-control"
                                                   placeholder="Enter Company Name"/>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Not present :</label>
                                            <input maxlength="200" type="text" required="required"
                                                   class="form-control"
                                                   placeholder="Enter Company Address"/>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Attendance percentage :</label>
                                            <input maxlength="200" type="text" required="required"
                                                   class="form-control"
                                                   placeholder="Enter Company Address"/>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">
                                        Next
                                    </button>
                                </div>
                            </div>
                            <div class="row setup-content" id="step-2">
                                <div class="col-xs-12">
                                    <div class="col-md-12">
                                        <h3> Step 2</h3>
                                        <table class="table table-striped table-hover">
                                            <tr>
                                                <td align="center" colspan="4">Anjuran Kementerian Pendidikan Malaysia
                                                    (KPM) / Badan Bukan Kerajaan (NGO)
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Sarjan TKRS, Ketua Trup, Sarjan / Pengurus, Ketua Puteri (Mega
                                                    Puteri) / Ketua Utama Seksyen, Kemander / Pengerusi.
                                                </td>
                                                <td align="center"><input required type="radio" name="jawatan" id="001"
                                                                          value="10">
                                                    <label for="001">10 </label></td>
                                                <td width="36%">Kuartermaster Trup. Pen. Setiausaha / Bendahari, Pen
                                                    Setiausaha / Bendahari (Puteri Kejara), Pen. Setiausaha / Bendahari.
                                                </td>
                                                <td width="10%" align="center"><input required type="radio"
                                                                                      name="jawatan" id="002" value="6">
                                                    <label for="002">06 </label></td>
                                            </tr>
                                            <tr>
                                                <td>Koperal TKRS, Penolong Ketua Trup, Koperal / Naib Pengerusi, Pen.
                                                    Ketua Puteri (Puteri Megasari) , Ketua Seksyen, Naib Pengerusi.
                                                </td>
                                                <td align="center"><input type="radio" name="jawatan" id="003"
                                                                          value="8">
                                                    <label for="003">08 </label></td>
                                                <td>Ketua Patrol Ahli Jawatankuasa, Ketua Kumpulan Pasukan(Puteri
                                                    Saujana), Kuartermaster, Ketua Skuad
                                                </td>
                                                <td align="center"><input type="radio" name="jawatan" id="004"
                                                                          value="5">
                                                    <label for="004">05 </label></td>
                                            </tr>
                                            <tr>
                                                <td>Lnns Koperal TKRS, Setiausaha / Bendhari , Lans Koperal / Setiausaha
                                                    / Nemdahari, Setiausaha / Bendahari (Puteri Bistari) setiausaha /
                                                    Bendahari.

                                                </td>
                                                <td align="center"><input required type="radio" name="jawatan" id="005"
                                                                          value="7">
                                                    <label for="005">07 </label></td>
                                                <td>Pen. Ketua Patrol, Ahli Aktif, Ketua Kumpulan (Puteri Mestika),
                                                    Ketua Kumpulan , Ahli Jawatankuasa
                                                </td>
                                                <td align="center"><input required type="radio" name="jawatan" id="006"
                                                                          value="4">
                                                    <label for="006">04 </label></td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td align="center">&nbsp;</td>
                                                <td>Ahli Biasa / Ahli Berdaftar</td>
                                                <td align="center"><input type="radio" name="jawatan" id="007"
                                                                          value="2">
                                                    <label for="007">02 </label></td>
                                            </tr>
                                            <tr>
                                                <td align="center" colspan="4">Seni Bela Diri</td>
                                            </tr>
                                            <tr>
                                                <td align="top">Pengerusi : Bengkung Merah / Tali Pinggang Hitam.</td>
                                                <td align="center"><input type="radio" name="jawatan" id="008"
                                                                          value="10">
                                                    <label for="008">10 </label></td>
                                                <td>Pen. Setiausaha / Pen. Bendahari : Bengkung Hijau 1/ Tali Pinggang
                                                    Biru 2.

                                                </td>
                                                <td align="center"><input type="radio" name="jawatan" id="009"
                                                                          value="6">
                                                    <label for="009">06 </label></td>
                                            </tr>
                                            <tr>
                                                <td>Naib Pengerusi : Bengkung Hijau 3 / Tali Pinggang Merah 2</td>
                                                <td align="center"><input type="radio" name="jawatan" id="110"
                                                                          value="8">
                                                    <label for="110">08 </label></td>
                                                <td>Ahli Jawatankuasa : Cula 3 dan Tali Pinggang Biru 1.</td>
                                                <td align="center"><input type="radio" name="jawatan" id="111"
                                                                          value="5">
                                                    <label for="111">05 </label></td>
                                            </tr>
                                            <tr>
                                                <td>Setiausaha / Bendahari : Bengkung Hijau 2 / Tali Pinggang Merah 1
                                                </td>
                                                <td align="center"><input type="radio" name="jawatan" id="112"
                                                                          value="7">
                                                    <label for="112">07 </label></td>
                                                <td>Ahli aktif : Class 3, Cula 2 dan Tali Pinggang Hijau 1 dan 2</td>
                                                <td align="center"><input type="radio" name="jawatan" id="113"
                                                                          value="4">
                                                    <label for="113">04 </label></td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp</td>
                                                <td align="center">&nbsp;</td>
                                                <td>Ahli Biasa : Tali Pinggang Kuning 1 dan 2.</td>
                                                <td align="center"><input type="radio" name="jawatan" id="114"
                                                                          value="2">
                                                    <label for="114">02 </label></td>
                                            </tr>
                                        </table>
                                        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="row setup-content" id="step-3">
                                <div class="col-xs-12">
                                    <div class="col-md-12">
                                        <h3> Step 3</h3>
                                        <table class="table table-striped table-hover">
                                            <tr align="center">
                                                <td width="16%" align="center">&nbsp;</td>
                                                <td width="17%" align="center">Antarabangsa</td>
                                                <td width="17%" align="center">Kebangsaan</td>
                                                <td width="17%" align="center">Negeri</td>
                                                <td width="16%">Sabah &amp; Sarawak</td>
                                                <td width="17%" align="center">Daerah</td>
                                            </tr>
                                            <tr align="center">
                                                <td>Penglibatan 1</td>
                                                <p>
                                                <td><input type="radio" name="penglibatan" id="115" value="20">
                                                    <label for="115">20</label></td>

                                                <td><input type="radio" name="penglibatan" id="116" value="17">
                                                    <label for="116">17</label></td>

                                                <td><input type="radio" name="penglibatan" id="117" value="14">
                                                    <label for="117">14</label></td>

                                                <td><input type="radio" name="penglibatan" id="118" value="12">
                                                    <label for="118">12</label></td>

                                                <td><input type="radio" name="penglibatan" id="119" value="11">
                                                    <label for="119">11 </label></td>
                                            </tr>
                                            <tr align="center">
                                                <td>Penglibatan 2</td>
                                                <td><input type="radio" name="penglibatan" id="120" value="15">
                                                    <label for="120">15</label></td>

                                                <td><input type="radio" name="penglibatan" id="121" value="12">
                                                    <label for="121">12</label></td>

                                                <td><input type="radio" name="penglibatan" id="122" value="10">
                                                    <label for="122">10</label></td>

                                                <td><input type="radio" name="penglibatan" id="123" value="9">
                                                    <label for="123">09</label></td>

                                                <td><input type="radio" name="penglibatan" id="124" value="8">
                                                    <label for="124">08 </label></td>
                                            </tr>
                                            <tr align="center">
                                                <td>Penglibatan 3</td>
                                                <td><input type="radio" name="penglibatan" id="125" value="10">
                                                    <label for="125">10</label></td>

                                                <td><input type="radio" name="penglibatan" id="126" value="8">
                                                    <label for="126">08</label></td>

                                                <td><input type="radio" name="penglibatan" id="127" value="6">
                                                    <label for="127">06</label></td>

                                                <td><input type="radio" name="penglibatan" id="128" value="5">
                                                    <label for="128">05</label></td>

                                                <td><input type="radio" name="penglibatan" id="129" value="4">
                                                    <label for="129">04 </label></td>
                                            </tr>
                                        </table>
                                        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="row setup-content" id="step-4">
                                <div class="col-xs-12">
                                    <div class="col-md-12">
                                        <h3> Step 4</h3>
                                        <table class="table table-striped table-hover">
                                            <tr align="center">
                                                <td rowspan="2">Peringkat</td>
                                                <td colspan="5">Pencapaian</td>
                                            </tr>
                                            <tr align="center">
                                                <td>Johan&nbsp;</td>
                                                <td>Naib Johan</td>
                                                <td>Ketiga</td>
                                                <td>Keempat</td>
                                                <td>Kelima</td>
                                            </tr>
                                            <tr align="center">
                                                <td>Antarabangsa</td>
                                                <td><input type="radio" name="pencapaian" id="130" value="20">
                                                    <label for="130">20</label></td>
                                                <td><input type="radio" name="pencapaian" id="131" value="19">
                                                    <label for="131">19 </label></td>
                                                <td><input type="radio" name="pencapaian" id="132" value="18">
                                                    <label for="132">18 </label></td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr align="center">
                                                <td>Kebangsaan</td>
                                                <td><input type="radio" name="pencapaian" id="133" value="17">
                                                    <label for="133">17</label></td>
                                                <td><input type="radio" name="pencapaian" id="134" value="16">
                                                    <label for="134">16 </label></td>
                                                <td><input type="radio" name="pencapaian" id="135" value="15">
                                                    <label for="135">15 </label></td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr align="center">
                                                <td>Negeri</td>
                                                <td><input type="radio" name="pencapaian" id="136" value="14">
                                                    <label for="136">14</label></td>
                                                <td><input type="radio" name="pencapaian" id="137" value="13">
                                                    <label for="137">13</label></td>
                                                <td><input type="radio" name="pencapaian" id="138" value="12">
                                                    <label for="138">12</label></td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr align="center">
                                                <td>(Sabah &amp; Sarawak)</td>
                                                <td><input type="radio" name="pencapaian" id="139" value="12">
                                                    <label for="139">12</label></td>
                                                <td><input type="radio" name="pencapaian" id="140" value="11">
                                                    <label for="140">11</label></td>
                                                <td><input type="radio" name="pencapaian" id="141" value="10">
                                                    <label for="141">10</label></td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr align="center">
                                                <td>Daerah&nbsp;</td>
                                                <td><input type="radio" name="pencapaian" id="142" value="11">
                                                    <label for="142">11</label></td>
                                                <td><input type="radio" name="pencapaian" id="143" value="10">
                                                    <label for="143">10</label></td>
                                                <td><input type="radio" name="pencapaian" id="144" value="9">
                                                    <label for="144">09 </label></td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr align="center">
                                                <td>Sekolah</td>
                                                <td><input type="radio" name="pencapaian" id="145" value="8">
                                                    <label for="145">08</label></td>
                                                <td><input type="radio" name="pencapaian" id="146" value="7">
                                                    <label for="146">07</label></td>
                                                <td><input type="radio" name="pencapaian" id="147" value="6">
                                                    <label for="147">06</label></td>
                                                <td><input type="radio" name="pencapaian" id="148" value="5">
                                                    <label for="148">05</label></td>
                                                <td><input type="radio" name="pencapaian" id="149" value="4">
                                                    <label for="149">04</label></td>
                                            </tr>
                                        </table>
                                        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="row setup-content" id="step-5">
                                <div class="col-xs-12">
                                    <div class="col-md-12">
                                        <h3> Step 5</h3>
                                        <table class="table table-striped table-hover">
                                            <tr align="center">
                                                <td align="left">Menunjukkan Kepimpinan</td>
                                                <td><input type="checkbox" name="komitmen1" id="150" value="3">
                                                    <label for="150">03 </label></td>
                                                <td align="left">Mengemas Peralatan</td>
                                                <td><input type="checkbox" name="komitmen2" id="151" value="2">
                                                    <label for="151">02 </label></td>
                                                <td align="left">Mencuba</td>
                                                <td><input type="checkbox" name="komitmen3" id="152" value="2">
                                                    <label for="152">02 </label></td>
                                            </tr>
                                            <tr align="center">
                                                <td align="left">Menguruskan Aktviti</td>
                                                <td><input type="checkbox" name="komitmen4" id="153" value="3">
                                                    <label for="153">03</label></td>
                                                <td align="left">Menepati Waktu</td>
                                                <td><input type="checkbox" name="komitmen5" id="154" value="2">
                                                    <label for="154">02 </label></td>
                                                <td align="left">Mem. Kerjasama</td>
                                                <td><input type="checkbox" name="komitmen6" id="155" value="2">
                                                    <label for="155">02 </label></td>
                                            </tr>
                                            <tr align="center">
                                                <td align="left">Membantu Guru / Rakan</td>
                                                <td><input type="checkbox" name="komitmen7" id="156" value="2">
                                                    <label for="156">02 </label></td>
                                                <td align="left">Menunjukkan Minat</td>
                                                <td><input type="checkbox" name="komitmen8" id="157" value="2">
                                                    <label for="157">02 </label></td>
                                                <td align="left">Nilai Murni&nbsp;</td>
                                                <td><input type="checkbox" name="komitmen9" id="158" value="2">
                                                    <label for="158">02 </label></td>
                                            </tr>
                                            <tr align="center">
                                                <td align="left">Menyediakan Peralatan</td>
                                                <td><input type="checkbox" name="komitmen10" id="159" value="2">
                                                    <label for="159">02 </label></td>
                                                <td align="left">Menunjukkan Kesungguhan</td>
                                                <td><input type="checkbox" name="komitmen11" id="160" value="2">
                                                    <label for="160">02 </label></td>
                                                <td align="left">&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr align="center">
                                                <td align="left">Membersihkan Kawasan</td>
                                                <td><input type="checkbox" name="komitmen12" id="161" value="2">
                                                    <label for="161">02 </label></td>
                                                <td align="left">Mengikut Arahan</td>
                                                <td><input type="checkbox" name="komitmen13" id="162" value="2">
                                                    <label for="162">02</label></td>
                                                <td align="left">&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                        </table>
                                        <div class="col-md-3">
                                            <input type="text" name="km" class="form-control" id="km" value="">
                                        </div>
                                        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="row setup-content" id="step-6">
                                <div class="col-xs-12">
                                    <div class="col-md-12">
                                        <h3> Step 6</h3>
                                        <hr>
                                        <table class="table table-striped table-hover">
                                            <tr align="center">
                                                <td width="23%"><strong>Atlet / Peserta</strong> </td>
                                                <td width="11%"><input type="radio" name="sumbangan" id="163"
                                                                       value="10">
                                                    <label for="163">10</label></td>
                                                <td width="66%" align="left">Pelajar yang didaftarkan sebagai atlet atau
                                                    pesertan kejohanan Pertantingan
                                                </td>
                                            </tr>
                                            <tr align="center">
                                                <td><strong>Kemahiran khursus</strong></td>
                                                <td><input type="radio" name="sumbangan" id="164" value="10">
                                                    <label for="164">10</label></td>
                                                <td align="left">Melibatkan kemahiran khursus seperti refri / pengadil ,
                                                    pembantu jurulatih pasukan / aspek teknical
                                                </td>
                                            </tr>
                                            <tr align="center">
                                                <td><strong>Persembahan Selingan</strong></td>
                                                <td><input type="radio" name="sumbangan" id="165" value="8">
                                                    <label for="165">08 </label></td>
                                                <td align="left">Penglibatan pelajar yang terlibat dakam aktiviti
                                                    persembahan selingan
                                                </td>
                                            </tr>
                                            <tr align="center">
                                                <td><strong>Sokongan</strong></td>
                                                <td><input type="radio" name="166" id="166" value="5">
                                                    <label for="166">05 </label></td>
                                                <td align="left">Membantu dari segi menjayakan aktiviti kelab sukandan
                                                    aktiviti sukan sekolah (atau yang seumpama dengannya) seperti
                                                    mengambil bahagian dalam pembarisan, kumpulan sorak / penyokong,
                                                    menghias khemah rumah sukan dan yang berkaitan.
                                                    Penglibatan pelajar yang bersifat meramaikan majlis seperti sebagai
                                                    penyokong / kumpulan sorak.
                                                </td>
                                            </tr>
                                        </table>
                                        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="row setup-content" id="step-7">
                                <div class="col-xs-12">
                                    <div class="col-md-12">
                                        <h3> Step 7</h3>
                                        <hr>
                                        <table class="table table-striped table-hover">
                                            <tr>
                                                <td align="center">TOTAL MARK</td>
                                                <td><input type="text" name="total" id="textfield" class="form-control"
                                                           readonly></td>
                                                <td><input type="text" name="grade" id="textfield2" class="form-control"
                                                           readonly></td>
                                            </tr>
                                        </table>
                                        <button class="btn btn-success btn-lg pull-right" type="submit">Finish!</button>
                                    </div>
                                </div>
                            </div>
                        </form>
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
