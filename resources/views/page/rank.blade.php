<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ela Admin - HTML5 Admin Template</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{asset('cms/assets/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('cms/assets/css/style.css')}}">
      <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{asset('novena/plugins/bootstrap/css/bootstrap.min.css')}}">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="{{asset('novena/plugins/icofont/icofont.min.css')}}">
  <!-- Slick Slider  CSS -->
  <link rel="stylesheet" href="{{asset('novena/plugins/slick-carousel/slick/slick.css')}}">
  <link rel="stylesheet" href="{{asset('novena/plugins/slick-carousel/slick/slick-theme.css')}}">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{asset('novena/css/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>

    @include('page.header')
    <div class="content">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Custom Table</strong>
                        </div>
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th class="serial">#</th>
                                        <th class="avatar">Avatar</th>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="serial">1.</td>
                                        <td class="avatar">
                                            <div class="round-img">
                                                <a href="#"><img class="rounded-circle" src="images/avatar/1.jpg" alt=""></a>
                                            </div>
                                        </td>
                                        <td> #5469 </td>
                                        <td>  <span class="name">Louis Stanley</span> </td>
                                        <td> <span class="product">iMax</span> </td>
                                        <td><span class="count">231</span></td>
                                        <td>
                                            <span class="badge badge-complete">Complete</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="serial">2.</td>
                                        <td class="avatar">
                                            <div class="round-img">
                                                <a href="#"><img class="rounded-circle" src="images/avatar/2.jpg" alt=""></a>
                                            </div>
                                        </td>
                                        <td> #5468 </td>
                                        <td>  <span class="name">Gregory Dixon</span> </td>
                                        <td> <span class="product">iPad</span> </td>
                                        <td><span class="count">250</span></td>
                                        <td>
                                            <span class="badge badge-complete">Complete</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="serial">3.</td>
                                        <td class="avatar">
                                            <div class="round-img">
                                                <a href="#"><img class="rounded-circle" src="images/avatar/3.jpg" alt=""></a>
                                            </div>
                                        </td>
                                        <td> #5467 </td>
                                        <td>  <span class="name">Catherine Dixon</span> </td>
                                        <td> <span class="product">SSD</span> </td>
                                        <td><span class="count">250</span></td>
                                        <td>
                                            <span class="badge badge-complete">Complete</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="serial">4.</td>
                                        <td class="avatar">
                                            <div class="round-img">
                                                <a href="#"><img class="rounded-circle" src="images/avatar/4.jpg" alt=""></a>
                                            </div>
                                        </td>
                                        <td> #5466 </td>
                                        <td>  <span class="name">Mary Silva</span> </td>
                                        <td> <span class="product">Magic Mouse</span> </td>
                                        <td><span class="count">250</span></td>
                                        <td>
                                            <span class="badge badge-pending">Pending</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- /.table-stats -->
                    </div>
                </div>
                <!-- <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Basic Table</strong>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">First</th>
                                      <th scope="col">Last</th>
                                      <th scope="col">Handle</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Stripped Table</strong>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Table Dark</strong>
                        </div>
                        <div class="card-body">
                            <table class="table table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Table Head</strong>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
                </div>




                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Bordered Table</strong>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td colspan="2">Larry the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Bordered Dark Table</strong>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td colspan="2">Larry the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> -->

            </div>
        </div><!-- .animated -->
    </div><!-- .content -->
    @include('page.footer')

</div><!-- /#right-panel -->

<!-- Right Panel -->

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="{{asset('cms/assets/js/main.js')}}"></script>
<!-- Main jQuery -->
<script src="{{asset('novena/plugins/jquery/jquery.js')}}"></script>
<!-- Bootstrap 4.3.2 -->
<script src="{{asset('novena/plugins/bootstrap/js/popper.js')}}"></script>
<script src="{{asset('novena/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('novena/plugins/counterup/jquery.easing.js')}}"></script>
<!-- Slick Slider -->
<script src="{{asset('novena/plugins/slick-carousel/slick/slick.min.js')}}"></script>
<!-- Counterup -->
<script src="{{asset('novena/plugins/counterup/jquery.waypoints.min.js')}}"></script>

<script src="{{asset('novena/plugins/shuffle/shuffle.min.js')}}"></script>
<script src="{{asset('novena/plugins/counterup/jquery.counterup.min.js')}}"></script>
<!-- Google Map -->
<script src="{{asset('novena/plugins/google-map/map.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>    

<script src="{{asset('novena/js/script.js')}}"></script>
<script src="{{asset('novena/js/contact.js')}}"></script>


</body>
</html>
