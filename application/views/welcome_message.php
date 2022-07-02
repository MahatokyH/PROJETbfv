<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Flexy lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Flexy admin lite design, Flexy admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description" content="Flexy Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Flexy Admin Lite Template by WrapPixel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/Flexy-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo flexy_assets("assets/images/favicon.png") ?>">
    <!-- Custom CSS -->
    <link href="<?php echo flexy_assets("assets/libs/chartist/dist/chartist.min.css") ?>" rel="stylesheet">
    <link href="<?php echo flexy_assets("assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css") ?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo flexy_assets("dist/css/style.min.css") ?>" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="<?php echo flexy_assets("assets/images/logo-bfv.png") ?>" alt="homepage" class="dark-logo" style="width: 90%;" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item" style="margin-top: 45px;"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo site_url_spx("welcome/index"); ?>" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Tableau de bord</span></a></li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="true">
                                <i class="mdi mdi-hexagon-multiple"></i><span class="hide-menu"></span>Pack</span>
                            </a>
                            <div class="collapse show" id="orders-collapse" style="">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo site_url_spx("welcome/Nouveau"); ?>" aria-expanded="false"><i class="mdi mdi-hexagon"></i><span class="hide-menu">Nouveau client</span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo site_url_spx("welcome/Liste"); ?>" aria-expanded="false"><i class="mdi mdi-hexagon"></i><span class="hide-menu">Historique</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo site_url_spx("welcome/Deconnexion"); ?>" aria-expanded="false"><i class="mdi mdi-close-circle"></i><span class="hide-menu">Deconnexion</span></a></li>

                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <?php include($vue); ?>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                Projet N-Point
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo flexy_assets("assets/libs/jquery/dist/jquery.min.js") ?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo flexy_assets("assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js") ?>"></script>
    <script src="<?php echo flexy_assets("dist/js/app-style-switcher.js") ?>"></script>
    <!--Wave Effects -->
    <script src="<?php echo flexy_assets("dist/js/waves.js") ?>"></script>
    <!--Menu sidebar -->
    <script src="<?php echo flexy_assets("dist/js/sidebarmenu.js") ?>"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo flexy_assets("dist/js/custom.js") ?>"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="<?php echo flexy_assets("assets/libs/chartist/dist/chartist.min.js") ?>"></script>
    <script src="<?php echo flexy_assets("assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js") ?>"></script>
    <script src="<?php echo flexy_assets("dist/js/pages/dashboards/dashboard1.js") ?>"></script>
    <?php if (isset($dashboard)) { ?>
        <script>
            $(function() {
                "use strict";

                var dataPHP = <?php echo json_encode(($dashboard)) ?>
                // ==============================================================
                // Newsletter
                // ==============================================================  
                var dataID = <?php echo json_encode(($dashboard_id)) ?>
                // ==============================================================
                // Newsletter
                // ==============================================================
                var lab = new Array();
                var listeData = new Array();
                for (let index = 0; index < dataID.length; index++) {
                    const element = dataID[index];
                    lab.push(element["nom"]);
                }
                var listeData = dataPHP.reduce((acc, value) => { 
                    // Group initialization
                    if (!acc[value["idpack"]]) {
                        acc[value["idpack"]] = [];
                    }

                    // Grouping
                    acc[value["idpack"]].push(Number(value["n"]));

                    return acc;
                }, {});  
                console.log((listeData));
                var chart2 = new Chartist.Bar(
                    ".amp-pxl", {
                        labels: lab,
                        series: [
                            listeData[1],
                            listeData[2],
                            listeData[3],
                            listeData[4],
                            listeData[5],
                        ],
                    }, {
                        axisX: {
                            // On the x-axis start means top and end means bottom
                            position: "end",
                            showGrid: false,
                        },
                        axisY: {
                            // On the y-axis start means left and end means right
                            position: "start",
                        },
                        high: "3",
                        low: "0",
                        plugins: [Chartist.plugins.tooltip()],
                    }
                );

                var chart = [chart2];
            });
        </script>
    <?php } ?>

</body>

</html>