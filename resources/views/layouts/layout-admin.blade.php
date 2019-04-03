<!DOCTYPE html>
<!--
Template Name: BRILLIANT Bootstrap Admin Template
Version: 4.5.6
Author: WebThemez
Website: http://www.webthemez.com/
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>Bootstrap HTML5 Admin Template : Master - WebThemez</title>
	<!-- Bootstrap Styles-->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="{{asset('assets/css/custom-styles.css')}}" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        @include('layouts.topbar')
        @include('layouts.nav')
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">

          @yield('content')

          
                <footer><p>All right reserved. Template by: <a href="https://smridha.com">Salihan Mridha</a></p></footer>
          </div>

        </div>

          </div>

      <script src="{{asset('assets/js/jquery-1.10.2.js')}}"></script>
        <!-- Bootstrap Js -->
      <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
      <!-- Metis Menu Js -->
      <script src="{{asset('assets/js/jquery.metisMenu.js')}}"></script>
        <!-- Custom Js -->
      <script src="{{asset('assets/js/custom-scripts.js')}}"></script>

  </body>
  </html>
