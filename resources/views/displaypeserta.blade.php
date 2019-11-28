<!DOCTYPE html> 
<html lang="en">

<!-- Mirrored from agileui.com/demo/monarch/demo/admin-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Nov 2019 10:40:32 GMT -->
<head>

    <style>
        /* Loading Spinner */
        .spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner > div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,80%,100%{-webkit-transform:scale(0.0)}40%{-webkit-transform:scale(1.0)}}@keyframes bouncedelay{0%,80%,100%{transform:scale(0.0);-webkit-transform:scale(0.0)}40%{transform:scale(1.0);-webkit-transform:scale(1.0)}}
    </style>

    <style type="text/css">
    .modal{
      display:none;
      position:fixed;
      z-index:1;
      left:0;
      top:0;
      width:100%;
      height:100%;
      overflow:auto;
      background-color: rgb(0,0,0);
      background-color: rgba(0,0,0,4);
    }

    .modal-content{
      background-color: #fefefe;
      /*margin: 15% auto;*/
      margin:15% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;

    }

    .close{
      color:#aaaaaa;
      float: right;
      font-size:28px;
      font-weight: bold;
    }

    .close:hover, .close:focus{
      color:black;
      text-decoration: none;
      cursor: pointer;

    }

    .close_edit{
      color:#aaaaaa;
      float: right;
      font-size:28px;
      font-weight: bold;
    }

    .close_edit:hover, .close_edit:focus{
      color:black;
      text-decoration: none;
      cursor: pointer;

    }
	.bt_edit{
        background-color: #008fe2;
        border-radius: 2px;
        border-color: #008fe2;
        border: 0px;
        color:white;
    }

    .bt_lihat{
        background-color: green;
        border-radius: 2px;
        border-color: #008fe2;
        border: 0px;
        color:white;
    }

    .bt_hapus{
        background-color: red;
        border-radius: 2px;
        border-color: red;
        border: 0px;
        color: white;
    }

  </style>



    <meta charset="UTF-8">
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
<title> Sistem Informasi Taspen Corpu </title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Favicons -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/images/icons/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/images/icons/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/images/icons/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="/assets/images/icons/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="/assets/images/icons/favicon.png">



    <link rel="stylesheet" type="text/css" href="/assets/bootstrap/css/bootstrap.css">


<!-- HELPERS -->

<link rel="stylesheet" type="text/css" href="/assets/helpers/animate.css">
<link rel="stylesheet" type="text/css" href="/assets/helpers/backgrounds.css">
<link rel="stylesheet" type="text/css" href="/assets/helpers/boilerplate.css">
<link rel="stylesheet" type="text/css" href="/assets/helpers/border-radius.css">
<link rel="stylesheet" type="text/css" href="/assets/helpers/grid.css">
<link rel="stylesheet" type="text/css" href="/assets/helpers/page-transitions.css">
<link rel="stylesheet" type="text/css" href="/assets/helpers/spacing.css">
<link rel="stylesheet" type="text/css" href="/assets/helpers/typography.css">
<link rel="stylesheet" type="text/css" href="/assets/helpers/utils.css">
<link rel="stylesheet" type="text/css" href="/assets/helpers/colors.css">

<!-- ELEMENTS -->

<link rel="stylesheet" type="text/css" href="/assets/elements/badges.css">
<link rel="stylesheet" type="text/css" href="/assets/elements/buttons.css">
<link rel="stylesheet" type="text/css" href="/assets/elements/content-box.css">
<link rel="stylesheet" type="text/css" href="/assets/elements/dashboard-box.css">
<link rel="stylesheet" type="text/css" href="/assets/elements/forms.css">
<link rel="stylesheet" type="text/css" href="/assets/elements/images.css">
<link rel="stylesheet" type="text/css" href="/assets/elements/info-box.css">
<link rel="stylesheet" type="text/css" href="/assets/elements/invoice.css">
<link rel="stylesheet" type="text/css" href="/assets/elements/loading-indicators.css">
<link rel="stylesheet" type="text/css" href="/assets/elements/menus.css">
<link rel="stylesheet" type="text/css" href="/assets/elements/panel-box.css">
<link rel="stylesheet" type="text/css" href="/assets/elements/response-messages.css">
<link rel="stylesheet" type="text/css" href="/assets/elements/responsive-tables.css">
<link rel="stylesheet" type="text/css" href="/assets/elements/ribbon.css">
<link rel="stylesheet" type="text/css" href="/assets/elements/social-box.css">
<link rel="stylesheet" type="text/css" href="/assets/elements/tables.css">
<link rel="stylesheet" type="text/css" href="/assets/elements/tile-box.css">
<link rel="stylesheet" type="text/css" href="/assets/elements/timeline.css">



<!-- ICONS -->

<link rel="stylesheet" type="text/css" href="/assets/icons/fontawesome/fontawesome.css">
<link rel="stylesheet" type="text/css" href="/assets/icons/linecons/linecons.css">
<link rel="stylesheet" type="text/css" href="/assets/icons/spinnericon/spinnericon.css">


<!-- WIDGETS -->

<link rel="stylesheet" type="text/css" href="/assets/widgets/accordion-ui/accordion.css"/>
<link rel="stylesheet" type="text/css" href="/assets/widgets/calendar/calendar.css"/>
<link rel="stylesheet" type="text/css" href="/assets/widgets/carousel/carousel.css"/>

<link rel="stylesheet" type="text/css" href="/assets/widgets/charts/justgage/justgage.css"/>
<link rel="stylesheet" type="text/css" href="/assets/widgets/charts/morris/morris.css"/>
<link rel="stylesheet" type="text/css" href="/assets/widgets/charts/piegage/piegage.css"/>
<link rel="stylesheet" type="text/css" href="/assets/widgets/charts/xcharts/xcharts.css"/>

<link rel="stylesheet" type="text/css" href="/assets/widgets/chosen/chosen.css"/>
<link rel="stylesheet" type="text/css" href="/assets/widgets/colorpicker/colorpicker.css"/>
<link rel="stylesheet" type="text/css" href="/assets/widgets/datatable/datatable.css"/>
<link rel="stylesheet" type="text/css" href="/assets/widgets/datepicker/datepicker.css"/>
<link rel="stylesheet" type="text/css" href="/assets/widgets/datepicker-ui/datepicker.css"/>
<link rel="stylesheet" type="text/css" href="/assets/widgets/daterangepicker/daterangepicker.css"/>
<link rel="stylesheet" type="text/css" href="/assets/widgets/dialog/dialog.css"/>
<link rel="stylesheet" type="text/css" href="/assets/widgets/dropdown/dropdown.css"/>
<link rel="stylesheet" type="text/css" href="/assets/widgets/dropzone/dropzone.css"/>
<link rel="stylesheet" type="text/css" href="/assets/widgets/file-input/fileinput.css"/>
<link rel="stylesheet" type="text/css" href="/assets/widgets/input-switch/inputswitch.css"/>
<link rel="stylesheet" type="text/css" href="/assets/widgets/input-switch/inputswitch-alt.css"/>
<link rel="stylesheet" type="text/css" href="/assets/widgets/ionrangeslider/ionrangeslider.css"/>
<link rel="stylesheet" type="text/css" href="/assets/widgets/jcrop/jcrop.css"/>
<link rel="stylesheet" type="text/css" href="/assets/widgets/jgrowl-notifications/jgrowl.css"/>
<link rel="stylesheet" type="text/css" href="/assets/widgets/loading-bar/loadingbar.css"/>
<link rel="stylesheet" type="text/css" href="/assets/widgets/maps/vector-maps/vectormaps.css"/>
<link rel="stylesheet" type="text/css" href="/assets/widgets/markdown/markdown.css"/>
<link rel="stylesheet" type="text/css" href="/assets/widgets/modal/modal.css"/>
<link rel="stylesheet" type="text/css" href="/assets/widgets/multi-select/multiselect.css"/>
<link rel="stylesheet" type="text/css" href="/assets/widgets/multi-upload/fileupload.css"/>
<link rel="stylesheet" type="text/css" href="/assets/widgets/nestable/nestable.css"/>
<link rel="stylesheet" type="text/css" href="/assets/widgets/noty-notifications/noty.css"/>
<link rel="stylesheet" type="text/css" href="/assets/widgets/popover/popover.css"/>
<link rel="stylesheet" type="text/css" href="/assets/widgets/pretty-photo/prettyphoto.css"/>
<link rel="stylesheet" type="text/css" href="/assets/widgets/progressbar/progressbar.css"/>
<link rel="stylesheet" type="text/css" href="/assets/widgets/range-slider/rangeslider.css"/>
<link rel="stylesheet" type="text/css" href="/assets/widgets/slidebars/slidebars.css"/>
<link rel="stylesheet" type="text/css" href="/assets/widgets/slider-ui/slider.css"/>
<link rel="stylesheet" type="text/css" href="/assets/widgets/summernote-wysiwyg/summernote-wysiwyg.css"/>
<link rel="stylesheet" type="text/css" href="/assets/widgets/tabs-ui/tabs.css"/>
<link rel="stylesheet" type="text/css" href="/assets/widgets/theme-switcher/themeswitcher.css"/>
<link rel="stylesheet" type="text/css" href="/assets/widgets/timepicker/timepicker.css"/>
<link rel="stylesheet" type="text/css" href="/assets/widgets/tocify/tocify.css"/>
<link rel="stylesheet" type="text/css" href="/assets/widgets/tooltip/tooltip.css"/>
<link rel="stylesheet" type="text/css" href="/assets/widgets/touchspin/touchspin.css"/>
<link rel="stylesheet" type="text/css" href="/assets/widgets/uniform/uniform.css"/>
<link rel="stylesheet" type="text/css" href="/assets/widgets/wizard/wizard.css"/>
<link rel="stylesheet" type="text/css" href="/assets/widgets/xeditable/xeditable.css"/>

<!-- SNIPPETS -->

<link rel="stylesheet" type="text/css" href="/assets/snippets/chat.css">
<link rel="stylesheet" type="text/css" href="/assets/snippets/files-box.css">
<link rel="stylesheet" type="text/css" href="/assets/snippets/login-box.css">
<link rel="stylesheet" type="text/css" href="/assets/snippets/notification-box.css">
<link rel="stylesheet" type="text/css" href="/assets/snippets/progress-box.css">
<link rel="stylesheet" type="text/css" href="/assets/snippets/todo.css">
<link rel="stylesheet" type="text/css" href="/assets/snippets/user-profile.css">
<link rel="stylesheet" type="text/css" href="/assets/snippets/mobile-navigation.css">

<!-- APPLICATIONS -->

<link rel="stylesheet" type="text/css" href="/assets/applications/mailbox.css">

<!-- Admin theme -->

<link rel="stylesheet" type="text/css" href="/assets/themes/admin/layout.css">
<link rel="stylesheet" type="text/css" href="/assets/themes/admin/color-schemes/default.css">

<!-- Components theme -->

<link rel="stylesheet" type="text/css" href="/assets/themes/components/default.css">
<link rel="stylesheet" type="text/css" href="/assets/themes/components/border-radius.css">

<!-- Admin responsive -->

<link rel="stylesheet" type="text/css" href="/assets/helpers/responsive-elements.css">
<link rel="stylesheet" type="text/css" href="/assets/helpers/admin-responsive.css">

    <!-- JS Core -->

    <script type="text/javascript" src="/assets/js-core/jquery-core.js"></script>
    <script type="text/javascript" src="/assets/js-core/jquery-ui-core.js"></script>
    <script type="text/javascript" src="/assets/js-core/jquery-ui-widget.js"></script>
    <script type="text/javascript" src="/assets/js-core/jquery-ui-mouse.js"></script>
    <script type="text/javascript" src="/assets/js-core/jquery-ui-position.js"></script>
    <!--<script type="text/javascript" src="/assets/js-core/transition.js"></script>-->
    <script type="text/javascript" src="/assets/js-core/modernizr.js"></script>
    <script type="text/javascript" src="/assets/js-core/jquery-cookie.js"></script>





    <script type="text/javascript">
        $(window).load(function(){
            setTimeout(function() {
                $('#loading').fadeOut( 400, "linear" );
            }, 300);
        });
    </script>



</head>


    <body>
    <div id="sb-site">
    <div id="loading">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <div id="page-wrapper">
        <div id="page-header" class="bg-gradient-9">
    <div id="mobile-navigation">
        <button id="nav-toggle" class="collapsed" data-toggle="collapse" data-target="#page-sidebar"><span></span></button>
        <a href="/" class="logo-content-small" title="MonarchUI"></a>
    </div>
    <div id="header-logo" class="logo-bg">
        <a href="/" class="logo-content-big" title="MonarchUI">
            Monarch <i>UI</i>
            <span>The perfect solution for user interfaces</span>
        </a>
        <a href="/" class="logo-content-small" title="MonarchUI">
            Monarch <i>UI</i>
            <span>The perfect solution for user interfaces</span>
        </a>
        <a id="close-sidebar" href="#" title="Close sidebar">
            <i class="glyph-icon icon-angle-left"></i>
        </a>
    </div>
    <div id="header-nav-left">
        <div class="user-account-btn dropdown">
            <a href="#" title="My Account" class="user-profile clearfix" data-toggle="dropdown">
                <img width="28" src="/assets/image-resources/gravatar.jpg" alt="Profile image">
                <span>{{Session::get('name')}}</span>
                <i class="glyph-icon icon-angle-down"></i>
            </a>
            <div class="dropdown-menu float-left">
                <div class="box-sm">
                    <div class="login-box clearfix">
                        <div class="user-img">
                            <a href="#" title="" class="change-img">Change photo</a>
                            <img src="/assets/image-resources/gravatar.jpg" alt="">
                        </div>
                        <div class="user-info">
                            <span>
                                {{Session::get('name')}}
                                <i>{{Session::get('role')}}</i>
                            </span>
                            <a href="#" title="Edit profile">Edit profile</a>
                            <a href="#" title="View notifications">View notifications</a>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="pad5A button-pane button-pane-alt text-center">
                        <a href="{{url('/logout')}}" class="btn display-block font-normal btn-danger">
                            <i class="glyph-icon icon-power-off"></i>
                            Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- #header-nav-left -->

    <div id="header-nav-right">
        <a href="#" class="hdr-btn popover-button" title="Search" data-placement="bottom" data-id="#popover-search">
            <i class="glyph-icon icon-search"></i>
        </a>
        <div class="hide" id="popover-search">
            <div class="pad5A box-md">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search terms here ...">
                    <span class="input-group-btn">
                        <a class="btn btn-primary" href="#">Search</a>
                    </span>
                </div>
            </div>
        </div>
        <a href="#" class="hdr-btn" id="fullscreen-btn" title="Fullscreen">
            <i class="glyph-icon icon-arrows-alt"></i>
        </a>  
        <a class="header-btn" id="logout-btn" href="lockscreen-3.html" title="Lockscreen page example">
            <i class="glyph-icon icon-linecons-lock"></i>
        </a>
    </div><!-- #header-nav-right -->
</div>
    <div id="page-sidebar">
    <div class="scroll-sidebar">
        
    <ul id="sidebar-menu">
    <li>
        <a href="{{url('welcome')}}" title="Dashboard boxes">
            <i class="glyph-icon icon-linecons-lightbulb"></i>
            <span>Beranda</span>
            <!-- <span class="bs-label label-primary">Hot</span> -->
        </a>
    </li>
    @if(\Session::get('role')=="Superadmin" || \Session::get('role')=="Pejabat 1" || \Session::get('role')=="Pejabat 2")

    <li class="header"><span>Dashboard</span></li>
    <li>
        <a href="pelaksanaan" title="Admin Dashboard">
            <i class="glyph-icon icon-linecons-tv"></i>
            <span>Pelaksanaan</span>
        </a>
    </li>
    <li>
        <a href="penyerapan" title="Admin Dashboard">
            <i class="glyph-icon icon-linecons-tv"></i>
            <span>Penyerapan</span>
        </a>
    </li>
    <li class="header"><span>Pelatihan & Pendidikan</span></li>
    <li>
        
        <a href='/katalog'" title="Elements">
            <i class="glyph-icon icon-linecons-diamond"></i>
            <span>Katalog</span>
        </a>
    </li>
    @endif
    <li>
        <a href="{{url('event')}}" title="Dashboard boxes">
            <i class="glyph-icon icon-linecons-lightbulb"></i>
            <span>Event</span>
            <!-- <span class="bs-label label-primary">Hot</span> -->
        </a>
    </li>
    @if(\Session::get('role')=="Superadmin" || \Session::get('role')=="Pejabat 1" || \Session::get('role')=="Pejabat 2")
    <li class="header"><span>Pemeliharaan</span></li>
    <li>
        <a href="#" title="Pages">
            <i class="glyph-icon icon-linecons-fire"></i>
            <span>Master Data</span>
            <!-- <span class="bs-label badge-yellow">NEW</span> -->
        </a>
         <div class="sidebar-submenu">

            <ul>
                <li><a href="jenis" title="Alternate dashboard"><span>Jenis Pelatihan</span></a></li>
                <li><a href="bentuk" title="View profile"><span>Bentuk Pelatihan</span></a></li>
                <li><a href="kategori" title="FAQ section"><span>Kategori Pelatihan</span></a></li>
            </ul>

        </div><!-- .sidebar-submenu -->
    </li>
    <li>
        <a href="#" title="Other Pages">
            <i class="glyph-icon icon-linecons-cup"></i>
            <span>Hak Akses</span>
        </a>
    </li>
    </ul>
    @endif
    <!-- #sidebar-menu -->
    </div>
</div>
        <div id="page-content-wrapper">
            <div id="page-content">
                
                    <div class="container">
                    

<!-- Data tables -->

<!--<link rel="stylesheet" type="text/css" href="../../assets/widgets/datatable/datatable.css">-->
<script type="text/javascript" src="../../assets/widgets/datatable/datatable.js"></script>
<script type="text/javascript" src="../../assets/widgets/datatable/datatable-bootstrap.js"></script>
<script type="text/javascript" src="../../assets/widgets/datatable/datatable-tabletools.js"></script>
<script type="text/javascript" src="../../assets/widgets/datatable/datatable-reorder.js"></script>

<script type="text/javascript">

   /* Datatables basic */

    $(document).ready(function() {
        $('#datatable-example').dataTable();
    });

    $(document).ready(function() {
        $('.dataTables_filter input').attr("placeholder", "Search...");
    });

</script>

<div id="page-title">
    <p>Beranda > Event > Lihat Peserta</p>
    <br>
    <h2>Peserta Pelatihan</h2>
</div>

<div class="panel">
<div class="panel-body">
<div class="example-box-wrapper">
<div class="form-group">     
             <!--  <div class="input-group">
                <div class="input-group-addon">
                  
                  <p style="width:250px;"><b>Event Pelatihan</b></p>
                </div>
                <select class="form-control" placeholder="Event Pelatihan" name="nama_pelatihan">
                    <option>-Pilih Event Pelatihan</option>
                    <option>Event Pelatihan 1</option>
                </select>
              </div>
              <div class="form-group">
             <div class="input-group">
                <div class="input-group-addon" style="background-color: white; border-radius: 0px; border:0px">
                  <p style="width:250px;"><b></b></p>
                </div>
                
              <button class="btn btn-primary center-block" name="btn_date" id="btn_date">Cari</button>
            </div>
 -->

  <div class="size-md">
 @if(\Session::get('role')=="Superadmin" || \Session::get('role')=="Pejabat 1" || \Session::get('role')=="Pejabat 2")
    <a class="btn btn-primary btn-md toggle-vis" data-column="0" href="/tambahpeserta/{{$id}}">Tambah</a>
@endif
<br>    
</div>
</br>
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="datatable-example">
<thead>
<tr>
    <th>No</th>
    <th>Nama Peserta</th>
    <th>Golongan</th>
    <th>Unit Kerja</th>
    <th>Jenis Kelamin</th>
    <th>Biaya SPPD</th>
    <th>Nilai</th>
    <th>Aksi</th>
</tr>
</thead>


<tbody>
@foreach($display as $d)
<tr>
    <td>{{$d->NIK}}</td>
    <td>{{$d->Nama}}</td>
    <td>{{$d->Golongan}}</td>
    <td>{{$d->UnitKerja}}</td>
    <td>{{$d->Gender}}</td>
    <td>{{$d->BiayaSPPD}}</td>
    <td>{{$d->Nilai}}</td>
    <td>
    <button onclick="window.location.href='/displayabsensi/{{$id}}'" class="bt_lihat" title="Lihat Absensi Peserta" id="btn_view"><i class="fa fa-address-book"></i></a>

     @if(\Session::get('role')=="Superadmin" || \Session::get('role')=="Pejabat 1" || \Session::get('role')=="Pejabat 2" || \Session::get('role')=="Fasilitator")
    <form action='/nilaipeserta/{{$id}}/{{$d->NIK}}' method='GET'>
    <button class="bt_edit"><i class="fa fa-pencil" title='Input nilai peserta'></i></button>
    </form>
    @endif
    <!-- <button class="bt_edit" title="Edit Peserta" id="btn_edit"><i class="fa fa-edit"></i></button>
    <button class="bt_hapus" title="Hapus Peserta"><i class="fa fa-trash"></i></button></td> -->
</tr>
@endforeach
</tbody>
</table>
</div>
</div>


 <div class="size-md">
Fasilitator
</div>
</br>
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="datatable-example">
<thead>
<tr>
    <th>NIK</th>
    <th>Nama Fasilitator</th>
    <th>Feedback</th>
    <th>Aksi</th>
</tr>
</thead>


<tbody>
@foreach($displayf as $df)
<tr>
    <td>{{$df->NIK}}</td>
    <td>{{$df->Nama}}</td>
    <td>{{$df->Keterangan}}</td>
    <td>
     @if(\Session::get('role')=="Superadmin" || \Session::get('role')=="Pejabat 1" || \Session::get('role')=="Pejabat 2" || \Session::get('role')=="Peserta")
    <form action='/feedbackfasilitator/{{$id}}/{{$df->NIK}}' method='GET'>
    <button class="bt_edit"><i class="fa fa-pencil" title='Input feedback fasilitator'></i></button>
    </form>
    @endif
    <!-- <button class="bt_edit" title="Edit Peserta" id="btn_edit"><i class="fa fa-edit"></i></button>
    <button class="bt_hapus" title="Hapus Peserta"><i class="fa fa-trash"></i></button></td> -->
</tr>
@endforeach
</tbody>
</table>
</div>
</div>







    <!-- WIDGETS -->

<script type="text/javascript">

  var modal = document.getElementById("myAdd");
  var btn = document.getElementById("btn_tambah");
  var span = document.getElementsByClassName("close")[0];
  btn.onclick = function(){
    modal.style.display = "block";
  }

  span.onclick = function(){
    modal.style.display = "none";
  }

  window.onclick = function(event){
    if(event.target == modal){
      modal.style.display = "none";
    }
  }


</script>

<script type="text/javascript">

  var modal_edit = document.getElementById("myEdit");
  var btn_edit = document.getElementById("btn_edit");
  var span_edit = document.getElementsByClassName("close_edit")[0];
  btn_edit.onclick = function(){
    modal_edit.style.display = "block";
  }

  span_edit.onclick = function(){
    modal_edit.style.display = "none";
  }

  window.onclick = function(event){
    if(event.target == modal_edit){
      modal_edit.style.display = "none";
    }
  }


</script>

<script type="text/javascript" src="/assets/bootstrap/js/bootstrap.js"></script>

<!-- Bootstrap Dropdown -->

<!-- <script type="text/javascript" src="/assets/widgets/dropdown/dropdown.js"></script> -->

<!-- Bootstrap Tooltip -->

<!-- <script type="text/javascript" src="/assets/widgets/tooltip/tooltip.js"></script> -->

<!-- Bootstrap Popover -->

<!-- <script type="text/javascript" src="/assets/widgets/popover/popover.js"></script> -->

<!-- Bootstrap Progress Bar -->

<script type="text/javascript" src="/assets/widgets/progressbar/progressbar.js"></script>

<!-- Bootstrap Buttons -->

<!-- <script type="text/javascript" src="/assets/widgets/button/button.js"></script> -->

<!-- Bootstrap Collapse -->

<!-- <script type="text/javascript" src="/assets/widgets/collapse/collapse.js"></script> -->

<!-- Superclick -->

<script type="text/javascript" src="/assets/widgets/superclick/superclick.js"></script>

<!-- Input switch alternate -->

<script type="text/javascript" src="/assets/widgets/input-switch/inputswitch-alt.js"></script>

<!-- Slim scroll -->

<script type="text/javascript" src="/assets/widgets/slimscroll/slimscroll.js"></script>

<!-- Slidebars -->

<script type="text/javascript" src="/assets/widgets/slidebars/slidebars.js"></script>
<script type="text/javascript" src="/assets/widgets/slidebars/slidebars-demo.js"></script>

<!-- PieGage -->

<script type="text/javascript" src="/assets/widgets/charts/piegage/piegage.js"></script>
<script type="text/javascript" src="/assets/widgets/charts/piegage/piegage-demo.js"></script>

<!-- Screenfull -->

<script type="text/javascript" src="/assets/widgets/screenfull/screenfull.js"></script>

<!-- Content box -->

<script type="text/javascript" src="/assets/widgets/content-box/contentbox.js"></script>

<!-- Overlay -->

<script type="text/javascript" src="/assets/widgets/overlay/overlay.js"></script>

<!-- Widgets init for demo -->

<script type="text/javascript" src="/assets/js-init/widgets-init.js"></script>

<!-- Theme layout -->

<script type="text/javascript" src="/assets/themes/admin/layout.js"></script>

<!-- Theme switcher -->

<script type="text/javascript" src="/assets/widgets/theme-switcher/themeswitcher.js"></script>

</div>
</body>

<!-- Mirrored from agileui.com/demo/monarch/demo/admin-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Nov 2019 10:41:42 GMT -->
</html>