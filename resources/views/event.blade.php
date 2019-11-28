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
      /*opacity: 50%;*/
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

<link rel="stylesheet" type="text/css" href="/assets/widgets/accordion-ui/accordion.css">
<link rel="stylesheet" type="text/css" href="/assets/widgets/calendar/calendar.css">
<link rel="stylesheet" type="text/css" href="/assets/widgets/carousel/carousel.css">

<link rel="stylesheet" type="text/css" href="/assets/widgets/charts/justgage/justgage.css">
<link rel="stylesheet" type="text/css" href="/assets/widgets/charts/morris/morris.css">
<link rel="stylesheet" type="text/css" href="/assets/widgets/charts/piegage/piegage.css">
<link rel="stylesheet" type="text/css" href="/assets/widgets/charts/xcharts/xcharts.css">

<link rel="stylesheet" type="text/css" href="/assets/widgets/chosen/chosen.css">
<link rel="stylesheet" type="text/css" href="/assets/widgets/colorpicker/colorpicker.css">
<link rel="stylesheet" type="text/css" href="/assets/widgets/datatable/datatable.css">
<link rel="stylesheet" type="text/css" href="/assets/widgets/datepicker/datepicker.css">
<link rel="stylesheet" type="text/css" href="/assets/widgets/datepicker-ui/datepicker.css">
<link rel="stylesheet" type="text/css" href="/assets/widgets/daterangepicker/daterangepicker.css">
<link rel="stylesheet" type="text/css" href="/assets/widgets/dialog/dialog.css">
<link rel="stylesheet" type="text/css" href="/assets/widgets/dropdown/dropdown.css">
<link rel="stylesheet" type="text/css" href="/assets/widgets/dropzone/dropzone.css">
<link rel="stylesheet" type="text/css" href="/assets/widgets/file-input/fileinput.css">
<link rel="stylesheet" type="text/css" href="/assets/widgets/input-switch/inputswitch.css">
<link rel="stylesheet" type="text/css" href="/assets/widgets/input-switch/inputswitch-alt.css">
<link rel="stylesheet" type="text/css" href="/assets/widgets/ionrangeslider/ionrangeslider.css">
<link rel="stylesheet" type="text/css" href="/assets/widgets/jcrop/jcrop.css">
<link rel="stylesheet" type="text/css" href="/assets/widgets/jgrowl-notifications/jgrowl.css">
<link rel="stylesheet" type="text/css" href="/assets/widgets/loading-bar/loadingbar.css">
<link rel="stylesheet" type="text/css" href="/assets/widgets/maps/vector-maps/vectormaps.css">
<link rel="stylesheet" type="text/css" href="/assets/widgets/markdown/markdown.css">
<link rel="stylesheet" type="text/css" href="/assets/widgets/modal/modal.css">
<link rel="stylesheet" type="text/css" href="/assets/widgets/multi-select/multiselect.css">
<link rel="stylesheet" type="text/css" href="/assets/widgets/multi-upload/fileupload.css">
<link rel="stylesheet" type="text/css" href="/assets/widgets/nestable/nestable.css">
<link rel="stylesheet" type="text/css" href="/assets/widgets/noty-notifications/noty.css">
<link rel="stylesheet" type="text/css" href="/assets/widgets/popover/popover.css">
<link rel="stylesheet" type="text/css" href="/assets/widgets/pretty-photo/prettyphoto.css">
<link rel="stylesheet" type="text/css" href="/assets/widgets/progressbar/progressbar.css">
<link rel="stylesheet" type="text/css" href="/assets/widgets/range-slider/rangeslider.css">
<link rel="stylesheet" type="text/css" href="/assets/widgets/slidebars/slidebars.css">
<link rel="stylesheet" type="text/css" href="/assets/widgets/slider-ui/slider.css">
<link rel="stylesheet" type="text/css" href="/assets/widgets/summernote-wysiwyg/summernote-wysiwyg.css">
<link rel="stylesheet" type="text/css" href="/assets/widgets/tabs-ui/tabs.css">
<link rel="stylesheet" type="text/css" href="/assets/widgets/theme-switcher/themeswitcher.css">
<link rel="stylesheet" type="text/css" href="/assets/widgets/timepicker/timepicker.css">
<link rel="stylesheet" type="text/css" href="/assets/widgets/tocify/tocify.css">
<link rel="stylesheet" type="text/css" href="/assets/widgets/tooltip/tooltip.css">
<link rel="stylesheet" type="text/css" href="/assets/widgets/touchspin/touchspin.css">
<link rel="stylesheet" type="text/css" href="/assets/widgets/uniform/uniform.css">
<link rel="stylesheet" type="text/css" href="/assets/widgets/wizard/wizard.css">
<link rel="stylesheet" type="text/css" href="/assets/widgets/xeditable/xeditable.css">

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
        <a href="event" title="Dashboard boxes">
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


<!--<link rel="stylesheet" type="text/css" href="../.."/assets/widgets/datatable/datatable.css">-->

<script type="text/javascript">

  var modal = document.getElementById("myAdd");
  var btn = document.getElementById("btn_add");
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

$(document).ready(function(){
    var date_input=$('input[name="date"]'); //our date input has the name "date"
    var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
    var options={
      format: 'mm-yyyy',
      viewMode: "months", 
    minViewMode: "months",
      container: container,
      //todayHighlight: true,
      autoclose: true,
    };
    date_input.datepicker(options);
});

</script>
<!-- Data tables -->


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
    <p><a href="{{url('/welcome')}}">Beranda</a> > Event</p>
    <br>
    <h2>Event Pelatihan & Pendidikan</h2>
</div>



<div class="panel">
<div class="panel-body">
<div class="example-box-wrapper">
@if(\Session::get('role')=="Superadmin" || \Session::get('role')=="Pejabat 1" || \Session::get('role')=="Pejabat 2")
<div class="size-md">
    <a class="btn btn-primary btn-md toggle-vis" data-column="0" id="btn_tambah">Tambah</a>
</div>
@endif
</br>

<table id="datatable-example" class="table table-striped table-bordered" cellspacing="0" width="100%">
<thead>

<tr>
    <th>Nama Pelatihan</th>
    <th>Tanggal Mulai</th>
    <th>Tanggal Akhir</th>
    <th>Tempat</th>
    <th>Provider</th>
    <th>G/L Account</th>
	<th>IO Budgeting</th>
	<th>Biaya Pelatihan</th>
	<!-- <th>Biaya SPPD</th> -->
	<th>Jumlah Peserta</th>
	<th>Jumlah Fasilitator</th>
	<th>Status</th>
	<th>Aksi</th>
</tr>
</thead>


<tbody>
@foreach($event as $e)
<tr>
    <td>{{$e->NamaEventPelatihan}}</td>
    <td>{{$e->TglMulaiEvent}}</td>pro
    <td>{{$e->TglAkhirEvent}}</td>
    <td>{{$e->Tempat}}</td>
    <td>{{$e->Provider}}</td>
    <td>{{$e->GLAccount}}</td>
	<td>{{$e->KeteranganIOBudgeting}}</td>
	<td>{{$e->BiayaPelatihan}}</td>
	<!-- <td></td> -->
	<td>{{$e->JmlPeserta}}</td>
	<td>{{$e->JmlFasilitator}}</td>
	<td>
    @if($e->Status == 0)
    <span class="bs-label label-danger">Rencana</span>
    @elseif($e->Status == 1)
    <span class="bs-label label-warning">Pelaksanaan</span>
    @else
    <span class="bs-label label-success">Selesai</span>
    @endif
    </td>
	<td>
    <button class="bt_lihat" onclick="window.location.href='/displaypeserta/{{$e->IDEventPelatihan}}'" title="Lihat Peserta" id="btn_view"><i class="fa fa-user"></i></button>
    
     <!-- <button class="bt_lihat" onclick="window.location.href='/tambahfasilitator/{{$e->IDEventPelatihan}}'" title="Tambah Fasilitator" id="btn_view"><i class="fa fa-user"></i></button> -->
     
    <button class="bt_lihat" onclick="window.location.href='/upload/{{$e->IDEventPelatihan}}'" title="Materi " id="btn_file"><i class="fa fa-file"></i></button>
    
    @if(\Session::get('role')=="Superadmin" || \Session::get('role')=="Pejabat 1" || \Session::get('role')=="Pejabat 2")
    <button class="bt_lihat" onclick="window.location.href='{{url('/absensi/'.$e->IDEventPelatihan)}}'" title="Absensi" id="btn_view"><i class="fa fa-eye"></i></button>
    @endif
    <!-- <a href={{url('/absensi/'.$e->IDEventPelatihan)}}>{{"Absen"}}</a> -->
    <!-- @if(\Session::get('role')=="Superadmin" || \Session::get('role')=="Pejabat 1" || \Session::get('role')=="Pejabat 2" || \Session::get('role')=="Peserta")
    <form action='/displayfasilitator/{{$e->IDEventPelatihan}}' method='GET'>
    <button class="bt_edit"><i class="fa fa-user" title='Lihat Fasilitator'></i></button>
    </form>
    @endif -->

    @if(\Session::get('role')=="Superadmin" || \Session::get('role')=="Pejabat 1" || \Session::get('role')=="Pejabat 2")
    <form action="editEvent/{{$e->IDEventPelatihan}}" method='GET'>
    <input type="hidden" name="event_pelatihan" value="{{$e->NamaEventPelatihan}}">
    <input type="hidden" name="katalog_pendidikan" value="{{$e->IDPelatihan}}">
    <input type="hidden" name="date_start" value="{{$e->TglMulaiEvent}}">
    <input type="hidden" name="date_end" value="{{$e->TglAkhirEvent}}">
    <input type="hidden" name="provider" value="{{$e->Provider}}">
    <input type="hidden" name="NIK" value="{{$e->NIK}}">
    <input type="hidden" name="tempat" value="{{$e->Tempat}}">
    <input type="hidden" name="GLAccount" value="{{$e->GLAccount}}">
    <input type="hidden" name="biaya_pendidikan" value="{{$e->BiayaPelatihan}}">
    <input type="hidden" name="IOBudgeting" value="{{$e->KeteranganIOBudgeting}}">
    <button type="submit" class="bt_edit" title="Edit" id="btn_edit"><i class="fa fa-edit"></i></button>
    </form>
    @endif
    
   
    
    @if(\Session::get('role')=="Superadmin" || \Session::get('role')=="Pejabat 1")
    @if($e->JmlPeserta > 0)
    <form action='/approval1/{{$e->IDEventPelatihan}}' method='GET'>
    <input type="hidden" name="fasilitator" value="{{$e->JmlFasilitator}}">
    <input type="hidden" name="peserta" value="{{$e->JmlPeserta}}">
    <input type="hidden" name="approve1" value="{{$e->IDEventPelatihan}}">
    <button class="bt_edit"><i class="fa fa-check" title='Approval Pejabat'></i></button>
    </form>
    @endif
    @endif
    @if(\Session::get('role')=="Superadmin" || \Session::get('role')=="Pejabat 2")
    @foreach($nilai as $n)
    @if($e->IDEventPelatihan == $n->IDEventPelatihan && $n->Nilai>0)
    <form action='/approval2/{{$e->IDEventPelatihan}}' method="GET">
    <input type="hidden" name="approve2" value="{{$e->IDEventPelatihan}}">
    <button class="bt_edit"><i class="fa fa-check" title='Approval Lainnya'></i></button>
    @break
    </form>
    @endif
    @endforeach
    @endif
    @if(\Session::get('role')=="Superadmin" || \Session::get('role')=="Pejabat 1" || \Session::get('role')=="Pejabat 2")
    <form action='/hapusEvent/{{$e->IDEventPelatihan}}' method='POST'>
    <input type="hidden" name="hapus" value="{{$e->IDEventPelatihan}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <button type='submit' class="bt_hapus" title="Hapus"><i class="fa fa-trash"></i></button>
    </form>
    @endif
    </td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
</div>

<div id="myAdd" class="modal">
  <div class="modal-content"  style="margin-top: 5%;">
    <span class="close">&times;</span>
      <h3>Tambah Event Pelatihan</h3>
      <br>
      <div class="form-group">   

        <div class="input-group">
                <div class="input-group-addon">
                  <!-- <i class="fa fa-calendar"></i> -->
                  <p style="width:250px;"><b>Nama Event Pelatihan</b></p>
                </div>
                <input type="text" name="event_pelatihan" id="event_pelatihan" class="form-control pull-right" placeholder="Nama Event Pelatihan">
            </div>  

            <div class="input-group">
                <div class="input-group-addon">
                  <!-- <i class="fa fa-calendar"></i> -->
                  <p style="width:250px;"><b>Katalog Pendidikan</b></p>
                </div>
                <select class="form-control pull-right" placeholder="Jenis pendidikan" name="katalog_pendidikan" id="katalog_pendidikan">
                    @foreach($katalog as $kt)
                    <option value="{{$kt->KatalogPelatihan}}">{{$kt->KatalogPelatihan}}</option>
                    @endforeach                
                </select>
			</div>  

              

              <div class="input-group">
                <div class="input-group-addon">
                  <!-- <i class="fa fa-calendar"></i> -->
                  <p style="width:250px;"><b>Tanggal mulai</b></p>
                </div>
                <input type="date" class="form-control pull-right" name="date_start" id="date_start" placeholder="Tanggal mulai" autocomplete="off">
              </div>

              <div class="input-group">
                <div class="input-group-addon">
                  <!-- <i class="fa fa-calendar"></i> -->
                  <p style="width:250px;"><b>Tanggal berakhir</b></p>
                  </div>
                  <input type="date" class="form-control pull-right" name="date_end" id="date_end" placeholder="Tanggal berakhir" autocomplete="off">
                </div>
                
              <div class="input-group">
                <div class="input-group-addon">
                  <!-- <i class="fa fa-calendar"></i> -->
                  <p style="width:250px;"><b>Provider</b></p>
                </div>
                <input type="text" class="form-control pull-right" placeholder="Provider" name="provider" id="provider">
              </div>

              <div class="input-group">
                <div class="input-group-addon">
                  <!-- <i class="fa fa-calendar"></i> -->
                  <p style="width:250px;"><b>Tempat</b></p>
                </div>
                <input type="text" class="form-control pull-right" placeholder="Tempat" name="tempat" id="tempat">
              </div>
			  <div class="input-group">
                <div class="input-group-addon">
                  <!-- <i class="fa fa-calendar"></i> -->
                  <p style="width:250px;"><b>G/L Account</b></p>
                </div>
                <select class="form-control pull-right" name="GLAccount" id="GLAccount">
                    <option>-Pilih Akun-</option>
                    <option value='612306101'>612306101 Hard Competency</option>
					<option value='612306102'>612306102 Soft Competency</option>
					<option value='612306103'>612306103 Assesment & Fit Proper Test</option>
					<option value='612306104'>612306104 CLT & Profesi</option>
                </select>
			</div> 
			<div class="input-group">
                <div class="input-group-addon">
                  <!-- <i class="fa fa-calendar"></i> -->
                  <p style="width:250px;"><b>IO Budgeting</b></p>
                </div>
                <input type="text" class="form-control pull-right" placeholder="IO Budgeting" name="IOBudgeting" id="IOBudgeting">
              </div>
              <div class="input-group">
                <div class="input-group-addon">
                  <!-- <i class="fa fa-calendar"></i> -->
                  <p style="width:250px;"><b>Biaya Pendidikan</b></p>
                </div>
                <input type="text" class="form-control pull-right" placeholder="Biaya pendidikan" name="biaya_pendidikan" id="biaya_pendidikan">
              </div>
             
             <!-- <div class="input-group">
                <div class="input-group-addon">
                  
                  <p style="width:250px;"><b>Jumlah Peserta</b></p>
                </div>
                <input type="text" class="form-control pull-right" placeholder="Jumlah peserta" name="jumlah_peserta" id="jumlah_peserta">
              </div>
             
             <div class="input-group">
                <div class="input-group-addon">
                  
                  <p style="width:250px;"><b>Jumlah Fasilitator</b></p>
                </div>
                <input type="text" class="form-control pull-right" placeholder="Jumlah fasilitator" name="jumlah_fasilitator" id="jumlah_fasilitator">
              </div> -->
             

             <div class="form-group">
             <div class="input-group">
                <div class="input-group-addon" style="background-color: white; border-radius: 0px; border:0px">
                  <!-- <i class="fa fa-calendar"></i> -->
                  <p style="width:250px;"><b></b></p>
                </div>
                
              <button class="btn btn-primary center-block" name="btn_date1" id="btn_date1">Simpan</button>
			   <button class="btn btn-danger center-block" name="btn_date" id="btn_date">Batal</button>
            </div>
      </div>
    </div>
  </div>
</div>
</div>





    <!-- WIDGETS -->

<script type="text/javascript" src="/assets/bootstrap/js/bootstrap.js"></script>

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
var btn_date = document.getElementById('btn_date1');

btn_date.onclick = function() { 
    var event_pelatihan = $("#event_pelatihan").val();
    var NIK = '000000000001';
    var katalog_pendidikan = $("#katalog_pendidikan").val();
    var date_start = $("#date_start").val();
    var date_end = $("#date_end").val();
    var provider = $("#provider").val();
    var tempat = $("#tempat").val();
    var GLAccount = $("#GLAccount").val();
    var IOBudgeting = $("#IOBudgeting").val();
    var biaya_pendidikan = $("#biaya_pendidikan").val();
    
    
    $.ajax({
      type: "GET",
      url: "{{url('tambahEvent/api')}}",
      data: {'event_pelatihan':event_pelatihan,
      'katalog_pendidikan':katalog_pendidikan,
      'NIK':NIK,
      'date_start':date_start,
      'date_end':date_end,
      'provider':provider,
      'tempat':tempat,
      'GLAccount':GLAccount,
      'IOBudgeting':IOBudgeting,
      'biaya_pendidikan':biaya_pendidikan
      },
      success: function(data){
        console.log(data);
        alert("Success");
      }
    });
}


</script>
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