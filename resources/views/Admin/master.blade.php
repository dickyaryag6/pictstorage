
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Admin PictStorage</title>
  @csrf

  <link rel="stylesheet" href="{{asset('/css/app.css')}}">
  <link rel="stylesheet" href="{{asset('/css/admin.css')}}">

  <!-- <link rel="stylesheet" href="/css/desaintabel.css"> -->


</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <!-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->

    <!-- Right navbar links -->
     <!-- <ul class="navbar-nav ml-auto"> -->
       <!-- Messages Dropdown Menu  -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-comments-o"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item"> -->
            <!-- Message Start -->
            <!-- <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fa fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 Hours Ago</p>
              </div>
            </div> -->
            <!-- Message End -->
          <!-- </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item"> -->
            <!-- Message Start -->
            <!-- <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fa fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 Hours Ago</p>
              </div>
            </div> -->
            <!-- Message End -->
          <!-- </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item"> -->
            <!-- Message Start -->
            <!-- <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fa fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 Hours Ago</p>
              </div>
            </div> -->
            <!-- Message End -->
          <!-- </a> -->
          <!-- <div class="dropdown-divider"></div> -->
          <!-- <a href="#" class="dropdown-item dropdown-footer">See All Messages</a> -->
        <!-- </div>
      </li> -->
      <!-- Notifications Dropdown Menu -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-bell-o"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li> -->
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fa fa-th-large"></i></a>
      </li> -->
    <!-- </ul> -->
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <!-- <img src="images/navbar_logo.png" alt="" class="brand-image"
           style="background-color: #FFF"> -->
      <span class="brand-text font-weight-light">PictStorage</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!-- <div class="image">
          <img src="#" class="img-circle elevation-2" alt="User Image">
        </div> -->

        <div class="nav-item">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <!-- <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Starter Pages
                <i class="right fa fa-angle-left"></i>
              </p>
            </a> -->
            <ul class="nav nav-treeview">
              <!-- <li class="nav-item">
                <router-link href="#" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
                </router-link>
              </li> -->
              <li class="nav-item">
                <a href="{{url("/logout")}}" class="nav-link">
                  <i class="nav-icon fa fa-power-off"></i>
                  <p>Logout</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <router-view></router-view>

        <div class="row mb-2">
        <!-- /.col -->
          <div class="col-sm-6">

          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">

            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class='card-title'>Belum diverifikasi</h5>
              </div>
              <div>
                <table>
                     <thead>
                       <tr>
                         <th>No. Order</th>
                         <th>Jenis</th>
                         <th>Tanggal</th>
                         <th>Detail</th>
                         <th>Lihat Bukti Pembayaran</th>
                         <th>Verifikasi</th>
                         <th>Tolak</th>
                       </tr>
                     </thead>
                     <tbody>
                   <?php if (count($order_lists) > 0) :?>
                     <?php foreach ($order_lists as $order) : ?>
                       <?php if ($order->status === 'Sedang diverifikasi') : ?>
                       <tr>
                         <td><?php echo $order->order_id; ?></td>
                         <td><?php echo $order->order_type; ?></td>
                         <td><?php echo $order->date; ?></td>
                         <td><a href="#">Detail</a></td>
                         <td><a href="detailbuktipembayaran/<?php echo $order->order_id; ?>">Lihat Bukti Pembayaran</a></td>
                         <td><a href="/verifikasi/<?php echo $order->order_id; ?>" type="button" class="btn btn-success">Verifikasi</a></td>
                         <td><a href="/tolak/<?php echo $order->order_id; ?>" type="button" class="btn btn-danger">Tolak</a></td>
                       </tr>
                       <?php endif; ?>
                     <?php endforeach; ?>
                   <?php else : ?>
                     <tr>
                       <td>-</td>
                       <td>-</td>
                       <td>-</td>
                       <td>-</td>
                       <td>-</td>
                       <td>-</td>
                     </tr>
                  <?php endif; ?>
                    </tbody>
                </table>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class='card-title'>Sudah diverifikasi</h5>
              </div>
              <div>
                <table>
                     <thead>
                       <tr>
                         <th>No. Order</th>
                         <th>Jenis</th>
                         <th>Tanggal</th>
                         <th>Detail</th>
                         <th> </th>
                         <th> </th>
                       </tr>
                     </thead>
                     <tbody>
                   <?php if (count($order_lists) > 0) :?>
                     <?php foreach ($order_lists as $order) : ?>
                       <?php if ($order->status === 'Terverifikasi') : ?>
                       <tr>
                         <td><?php echo $order->order_id; ?></td>
                         <td><?php echo $order->order_type; ?></td>
                         <td><?php echo $order->date; ?></td>
                         <td><a href="#">Detail</a></td>
                         <?php if ($order->linkhasil === null) ?>
                         <td>
                           <form action="/linkhasil/<?php echo $order->order_id; ?>" method="post" class='col-md-9' >
                             @csrf
                               <div>
                                   <input type="text" class="form-control{{ $errors->has('linkhasil') ? ' is-invalid' : '' }}" name="linkhasil" id="linkhasil" placeholder="Link Hasil Foto">

                                   @if ($errors->has('linkhasil'))
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $errors->first('linkhasil') }}</strong>
                                       </span>
                                   @endif
                               </div>

                             <div class="col-md-8">
                                 <button type="submit" class="btn btn-primary">
                                     {{ __('Submit') }}
                                 </button>
                             </div>
                           </form>
                          </td>
                       </tr>
                       <?php endif; ?>
                     <?php endforeach; ?>
                   <?php else : ?>
                     <tr>
                       <td>-</td>
                       <td>-</td>
                       <td>-</td>
                       <td>-</td>
                       <td>-</td>
                       <td>-</td>
                     </tr>
                  <?php endif; ?>
                    </tbody>
                </table>
              </div>
            </div>


            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class='card-title'>Selesai</h5>
              </div>
              <div>
                <table>
                     <thead>
                       <tr>
                         <th>No. Order</th>
                         <th>Jenis</th>
                         <th>Tanggal</th>
                         <th>Detail</th>
                         <th> </th>
                         <th> </th>
                       </tr>
                     </thead>
                     <tbody>
                   <?php if (count($order_lists) > 0) :?>
                     <?php foreach ($order_lists as $order) : ?>
                       <?php if ($order->status === 'Selesai') : ?>
                       <tr>
                         <td><?php echo $order->order_id; ?></td>
                         <td><?php echo $order->order_type; ?></td>
                         <td><?php echo $order->date; ?></td>
                         <td><a href="#">Detail</a></td>
                       </tr>
                       <?php endif; ?>
                     <?php endforeach; ?>
                   <?php else : ?>
                     <tr>
                       <td>-</td>
                       <td>-</td>
                       <td>-</td>
                       <td>-</td>
                       <td>-</td>
                       <td>-</td>
                     </tr>
                  <?php endif; ?>
                    </tbody>
                </table>
              </div>
            </div>



            <!-- <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class='card-title'>Sudah diverifikasi</h5>
              </div>
              <div>
              <?php //if ((count($order_lists) > 0)) :?>
                <?php //foreach ($order_lists as $order) : ?>
                  <?php //if ($order->status === 'Terverifikasi') : ?>
                      <span class="btn btn-light"><?php //echo $order->order_id; ?></span>
                      <span class="btn btn-light"><?php //echo $order->order_type; ?></span>
                      <span class="btn btn-light"><?php //echo $order->date; ?></span>

                      <a href="#">Detail</a>
                      <?php //if($order->linkhasil === null) : ?>
                      <br>


                      <form action='{{url("/linkhasil")}}/<?php echo $order->order_id; ?>' method="post" class='col-md-3'>

                      <form action="/linkhasil/<?php //echo $order->order_id; ?>" method="post" class='col-md-3'>

                        @csrf
                        <div>
                          <label for="linkhasil" class="col-form-label text-md-right">Input link hasil foto :</label>
                          <div>
                              <input type="text" class="form-control{{ $errors->has('linkhasil') ? ' is-invalid' : '' }}" name="linkhasil" id="linkhasil">

                              @if ($errors->has('linkhasil'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('linkhasil') }}</strong>
                                  </span>
                              @endif
                          </div>
                        </div>
                        <div class="col-md-8" style="display:inline-block;">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Submit') }}
                            </button>
                        </div>
                      </form>
                    <?php //endif; ?>
                  <?php //endif; ?>
                <?php //endforeach; ?>
              <?php //endif; ?>
              </div>
            </div> -->

            <!-- <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class='card-title'>Sudah Selesai</h5>
              </div>
              <div>
              <?php //if ((count($order_lists) > 0)) :?>
                <?php //foreach ($order_lists as $order) : ?>
                  <?php //if ($order->linkhasil !== null) : ?>
                      <span class="btn btn-light"><?php //echo $order->order_id; ?></span>
                      <span class="btn btn-light"><?php //echo $order->order_type; ?></span>
                      <span class="btn btn-light"><?php //echo $order->date; ?></span>

                      <a href="#">Detail</a>
                      <br>
                  <?php //endif; ?>
                <?php //endforeach; ?>
              <?php //endif; ?>
              </div>
            </div> -->


<!--
            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>

                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the card's
                  content.
                </p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div><! /.card -->
          </div>
          <!-- /.col-md-6 -->
          <!-- <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h5 class="m-0">Featured</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Special title treatment</h6>

                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Featured</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Special title treatment</h6>

                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div> -->
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2018 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<script src=/js/app.js ></script>

</body>
</html>
