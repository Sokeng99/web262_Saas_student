<!DOCTYPE html>
<html lang="en">

  @include('layout.head')
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="/" class="brand-logo">
                <!-- <img class="logo-abbr" src="assets/images/logo-white-2.png" alt=""> -->
                <img class="logo-compact" src="assets/images/logo-text-white1.png" alt="">
                <img class="brand-title" src="assets/images/logo-text-white1.png" alt=""> 
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
            
        <!--**********************************
            Header start(menu)
        ***********************************-->
        <div class="header">
            @include('layout.header')
        </div>

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            @include('layout.sidebar')
        </div>
       
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            @yield('dycontent')
        </div>


        <!--**********************************
            Footer start
        ***********************************-->
         @include('layout.footer')
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="assets/vendor/global/global.min.js"></script>
	<script src="assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="assets/js/custom.min.js"></script>
    <script src="assets/js/dlabnav-init.js"></script>
    <!-- Datatable -->
    <script src="assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/plugins-init/datatables.init.js"></script>
     <!-- Svganimation scripts -->
    <script src="vendor/svganimation/vivus.min.js"></script>
    <script src="vendor/svganimation/svg.animation.js"></script>
    <script src="js/styleSwitcher.js"></script>

    <!-- Chart Morris plugin files -->
    <script src="assets/vendor/raphael/raphael.min.js"></script>
    <script src="assets/vendor/morris/morris.min.js"></script>
		
	
	<!-- Chart piety plugin files -->
    <script src="assets/vendor/peity/jquery.peity.min.js"></script>
	
	<!-- Demo scripts -->
    <script src="assets/js/dashboard/dashboard-2.js"></script>
	
	<!-- Svganimation scripts -->
    <script src="assets/vendor/svganimation/vivus.min.js"></script>
    <script src="assets/vendor/svganimation/svg.animation.js"></script>
    <script src="assets/js/styleSwitcher.js"></script>
	
</body>
</html>