<!DOCTYPE html> 
<html lang="en">

<!-- Mirrored from agileui.com/demo/monarch/demo/admin-template/pie-gages.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Nov 2019 10:43:12 GMT -->
<head>

    <style>
        /* Loading Spinner */
        .spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner > div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,80%,100%{-webkit-transform:scale(0.0)}40%{-webkit-transform:scale(1.0)}}@keyframes bouncedelay{0%,80%,100%{transform:scale(0.0);-webkit-transform:scale(0.0)}40%{transform:scale(1.0);-webkit-transform:scale(1.0)}}
    </style>


    <meta charset="UTF-8">
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
<title>Dashboard</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Favicons -->

<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/icons/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/icons/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/icons/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/icons/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/icons/favicon.png">



    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css">


<!-- HELPERS -->

<link rel="stylesheet" type="text/css" href="assets/helpers/animate.css">
<link rel="stylesheet" type="text/css" href="assets/helpers/backgrounds.css">
<link rel="stylesheet" type="text/css" href="assets/helpers/boilerplate.css">
<link rel="stylesheet" type="text/css" href="assets/helpers/border-radius.css">
<link rel="stylesheet" type="text/css" href="assets/helpers/grid.css">
<link rel="stylesheet" type="text/css" href="assets/helpers/page-transitions.css">
<link rel="stylesheet" type="text/css" href="assets/helpers/spacing.css">
<link rel="stylesheet" type="text/css" href="assets/helpers/typography.css">
<link rel="stylesheet" type="text/css" href="assets/helpers/utils.css">
<link rel="stylesheet" type="text/css" href="assets/helpers/colors.css">

<!-- ELEMENTS -->

<link rel="stylesheet" type="text/css" href="assets/elements/badges.css">
<link rel="stylesheet" type="text/css" href="assets/elements/buttons.css">
<link rel="stylesheet" type="text/css" href="assets/elements/content-box.css">
<link rel="stylesheet" type="text/css" href="assets/elements/dashboard-box.css">
<link rel="stylesheet" type="text/css" href="assets/elements/forms.css">
<link rel="stylesheet" type="text/css" href="assets/elements/images.css">
<link rel="stylesheet" type="text/css" href="assets/elements/info-box.css">
<link rel="stylesheet" type="text/css" href="assets/elements/invoice.css">
<link rel="stylesheet" type="text/css" href="assets/elements/loading-indicators.css">
<link rel="stylesheet" type="text/css" href="assets/elements/menus.css">
<link rel="stylesheet" type="text/css" href="assets/elements/panel-box.css">
<link rel="stylesheet" type="text/css" href="assets/elements/response-messages.css">
<link rel="stylesheet" type="text/css" href="assets/elements/responsive-tables.css">
<link rel="stylesheet" type="text/css" href="assets/elements/ribbon.css">
<link rel="stylesheet" type="text/css" href="assets/elements/social-box.css">
<link rel="stylesheet" type="text/css" href="assets/elements/tables.css">
<link rel="stylesheet" type="text/css" href="assets/elements/tile-box.css">
<link rel="stylesheet" type="text/css" href="assets/elements/timeline.css">



<!-- ICONS -->

<link rel="stylesheet" type="text/css" href="assets/icons/fontawesome/fontawesome.css">
<link rel="stylesheet" type="text/css" href="assets/icons/linecons/linecons.css">
<link rel="stylesheet" type="text/css" href="assets/icons/spinnericon/spinnericon.css">


<!-- WIDGETS -->

<link rel="stylesheet" type="text/css" href="assets/widgets/accordion-ui/accordion.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/calendar/calendar.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/carousel/carousel.css">

<link rel="stylesheet" type="text/css" href="assets/widgets/charts/justgage/justgage.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/charts/morris/morris.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/charts/piegage/piegage.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/charts/xcharts/xcharts.css">

<link rel="stylesheet" type="text/css" href="assets/widgets/chosen/chosen.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/colorpicker/colorpicker.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/datatable/datatable.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/datepicker/datepicker.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/datepicker-ui/datepicker.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/daterangepicker/daterangepicker.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/dialog/dialog.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/dropdown/dropdown.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/dropzone/dropzone.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/file-input/fileinput.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/input-switch/inputswitch.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/input-switch/inputswitch-alt.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/ionrangeslider/ionrangeslider.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/jcrop/jcrop.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/jgrowl-notifications/jgrowl.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/loading-bar/loadingbar.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/maps/vector-maps/vectormaps.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/markdown/markdown.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/modal/modal.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/multi-select/multiselect.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/multi-upload/fileupload.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/nestable/nestable.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/noty-notifications/noty.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/popover/popover.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/pretty-photo/prettyphoto.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/progressbar/progressbar.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/range-slider/rangeslider.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/slidebars/slidebars.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/slider-ui/slider.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/summernote-wysiwyg/summernote-wysiwyg.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/tabs-ui/tabs.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/theme-switcher/themeswitcher.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/timepicker/timepicker.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/tocify/tocify.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/tooltip/tooltip.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/touchspin/touchspin.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/uniform/uniform.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/wizard/wizard.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/xeditable/xeditable.css">

<!-- SNIPPETS -->

<link rel="stylesheet" type="text/css" href="assets/snippets/chat.css">
<link rel="stylesheet" type="text/css" href="assets/snippets/files-box.css">
<link rel="stylesheet" type="text/css" href="assets/snippets/login-box.css">
<link rel="stylesheet" type="text/css" href="assets/snippets/notification-box.css">
<link rel="stylesheet" type="text/css" href="assets/snippets/progress-box.css">
<link rel="stylesheet" type="text/css" href="assets/snippets/todo.css">
<link rel="stylesheet" type="text/css" href="assets/snippets/user-profile.css">
<link rel="stylesheet" type="text/css" href="assets/snippets/mobile-navigation.css">

<!-- APPLICATIONS -->

<link rel="stylesheet" type="text/css" href="assets/applications/mailbox.css">

<!-- Admin theme -->

<link rel="stylesheet" type="text/css" href="assets/themes/admin/layout.css">
<link rel="stylesheet" type="text/css" href="assets/themes/admin/color-schemes/default.css">

<!-- Components theme -->

<link rel="stylesheet" type="text/css" href="assets/themes/components/default.css">
<link rel="stylesheet" type="text/css" href="assets/themes/components/border-radius.css">

<!-- Admin responsive -->

<link rel="stylesheet" type="text/css" href="assets/helpers/responsive-elements.css">
<link rel="stylesheet" type="text/css" href="assets/helpers/admin-responsive.css">

    <!-- JS Core -->

    <script type="text/javascript" src="assets/js-core/jquery-core.js"></script>
    <script type="text/javascript" src="assets/js-core/jquery-ui-core.js"></script>
    <script type="text/javascript" src="assets/js-core/jquery-ui-widget.js"></script>
    <script type="text/javascript" src="assets/js-core/jquery-ui-mouse.js"></script>
    <script type="text/javascript" src="assets/js-core/jquery-ui-position.js"></script>
    <!--<script type="text/javascript" src="assets/js-core/transition.js"></script>-->
    <script type="text/javascript" src="assets/js-core/modernizr.js"></script>
    <script type="text/javascript" src="assets/js-core/jquery-cookie.js"></script>





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
        <a href="index-2.html" class="logo-content-small" title="MonarchUI"></a>
    </div>
    <div id="header-logo" class="logo-bg">
        <a href="index-2.html" class="logo-content-big" title="MonarchUI">
            Monarch <i>UI</i>
            <span>The perfect solution for user interfaces</span>
        </a>
        <a href="index-2.html" class="logo-content-small" title="MonarchUI">
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
                <img width="28" src="assets/image-resources/gravatar.jpg" alt="Profile image">
                <span>{{Session::get('name')}}</span>
                <i class="glyph-icon icon-angle-down"></i>
            </a>
            <div class="dropdown-menu float-left">
                <div class="box-sm">
                    <div class="login-box clearfix">
                        <div class="user-img">
                            <a href="#" title="" class="change-img">Change photo</a>
                            <img src="assets/image-resources/gravatar.jpg" alt="">
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
                    <ul class="reset-ul mrg5B">
                        <li>
                            <a href="#">
                                <i class="glyph-icon float-right icon-caret-right"></i>
                                View login page example
                                
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="glyph-icon float-right icon-caret-right"></i>
                                View lockscreen example
                                
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="glyph-icon float-right icon-caret-right"></i>
                                View account details
                                
                            </a>
                        </li>
                    </ul>
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
                    
<!-- PieGage charts -->

<!--<link rel="stylesheet" type="text/css" href="assets/widgets/charts/piegage/piegage.css">-->
<script type="text/javascript" src="assets/widgets/charts/piegage/piegage.js"></script>
<script type="text/javascript" src="assets/widgets/charts/piegage/piegage-demo.js"></script>


<div id="page-title">
<p>Beranda > Dashboard > Penyerapan</p>
    <br>
    <h2>Dashboard Penyerapan Anggaran Pelatihan & Pendidikan</h2>
</div>

<!-- <div class="mrg20T text-center pad10A content-box">
    <a href="penyerapan" class="btn center-div btn-primary updateEasyPieChart">
        <i class="glyph-icon icon-refresh"></i>
        Refresh all charts
    </a>
</div> -->

<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">
            Anggaran
        </h3>
        <div class="example-box-wrapper">
            <div class="row">
            @foreach($anggaran1 as $a1)
                <div class="col-md-3">
                    <a href="#"  class="tile-box tile-box-alt btn-primary">
                        <div class="tile-header">
                            Beban Soft Competency
                        </div>
                        <div class="tile-content-wrapper">
                        
                            <div class="chart-alt-10" data-percent="{{$a1->Presentase}}"><span>{{$a1->Presentase}}</span>%</div>
                        @endforeach
                        </div>
                        Anggaran: {{$a1->Anggaran}}<br> 
                        Realisasi: {{$a1->Assigned}} 
                    </a>
                </div>
                <div class="col-md-3">
                @foreach($anggaran2 as $a2)
                    <a href="#" class="tile-box tile-box-alt btn-black">
                        <div class="tile-header">
                            Beban Hard Competency
                        </div>
                        <div class="tile-content-wrapper">
                        
                            <div class="chart-alt-10" data-percent="{{$a2->Presentase}}"><span>{{$a2->Presentase}}</span>%</div>
                        </div>
                        Anggaran: {{$a2->Anggaran}}<br> 
                        Realisasi: {{$a2->Assigned}} 
                        @endforeach
                    </a>
                </div>
                <div class="col-md-3">
                    @foreach($anggaran3 as $a3)
                    <a href="#" title="{{$a3->Assigned}}:{{$a3->Anggaran}}" class="tile-box tile-box-alt btn-danger">
                        <div class="tile-header">
                            Beban Assesment & Fit Proper Test
                        </div>
                        <div class="tile-content-wrapper">
                        
                            <div class="chart-alt-10" data-percent="{{$a3->Presentase}}"><span>{{$a3->Presentase}}</span>%</div>
                            Anggaran: {{$a3->Anggaran}}<br> 
                        Realisasi: {{$a3->Assigned}} 
                        @endforeach
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" title="Example tile shortcut" class="tile-box tile-box-alt btn-success">
                        <div class="tile-header">
                            Beban CLT & Profesi
                        </div>
                        <div class="tile-content-wrapper">
                        @foreach($anggaran4 as $a4)
                            <div class="chart-alt-10" data-percent="{{$a4->Presentase}}"><span>{{$a4->Presentase}}</span>%</div>
                            Anggaran: {{$a4->Anggaran}}<br> 
                        Realisasi: {{$a4->Assigned}} 
                        @endforeach
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


                    </div>

                

            </div>
        </div>
    </div>


    <!-- WIDGETS -->

<script type="text/javascript" src="assets/bootstrap/js/bootstrap.js"></script>

<!-- Bootstrap Dropdown -->

<!-- <script type="text/javascript" src="assets/widgets/dropdown/dropdown.js"></script> -->

<!-- Bootstrap Tooltip -->

<!-- <script type="text/javascript" src="assets/widgets/tooltip/tooltip.js"></script> -->

<!-- Bootstrap Popover -->

<!-- <script type="text/javascript" src="assets/widgets/popover/popover.js"></script> -->

<!-- Bootstrap Progress Bar -->

<script type="text/javascript" src="assets/widgets/progressbar/progressbar.js"></script>

<!-- Bootstrap Buttons -->

<!-- <script type="text/javascript" src="assets/widgets/button/button.js"></script> -->

<!-- Bootstrap Collapse -->

<!-- <script type="text/javascript" src="assets/widgets/collapse/collapse.js"></script> -->

<!-- Superclick -->

<script type="text/javascript" src="assets/widgets/superclick/superclick.js"></script>

<!-- Input switch alternate -->

<script type="text/javascript" src="assets/widgets/input-switch/inputswitch-alt.js"></script>

<!-- Slim scroll -->

<script type="text/javascript" src="assets/widgets/slimscroll/slimscroll.js"></script>

<!-- Slidebars -->

<script type="text/javascript" src="assets/widgets/slidebars/slidebars.js"></script>
<script type="text/javascript" src="assets/widgets/slidebars/slidebars-demo.js"></script>

<!-- PieGage -->

<script type="text/javascript" src="assets/widgets/charts/piegage/piegage.js"></script>
<script type="text/javascript" src="assets/widgets/charts/piegage/piegage-demo.js"></script>

<!-- Screenfull -->

<script type="text/javascript" src="assets/widgets/screenfull/screenfull.js"></script>

<!-- Content box -->

<script type="text/javascript" src="assets/widgets/content-box/contentbox.js"></script>

<!-- Overlay -->

<script type="text/javascript" src="assets/widgets/overlay/overlay.js"></script>

<!-- Widgets init for demo -->

<script type="text/javascript" src="assets/js-init/widgets-init.js"></script>

<!-- Theme layout -->

<script type="text/javascript" src="assets/themes/admin/layout.js"></script>

<!-- Theme switcher -->

<script type="text/javascript" src="assets/widgets/theme-switcher/themeswitcher.js"></script>

</div>
</body>

<!-- Mirrored from agileui.com/demo/monarch/demo/admin-template/pie-gages.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Nov 2019 10:43:12 GMT -->
</html>