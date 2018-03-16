<!DOCTYPE html>
<html>
  <head>
    <meta name="description" >
    <!-- Twitter meta-->
    <meta property="twitter:card" >
    <meta property="twitter:site" >
    <meta property="twitter:creator" >
    <!-- Open Graph Meta-->
    <meta property="og:type" >
    <meta property="og:site_name" >
    <meta property="og:title" >
    <meta property="og:url" >
    <meta property="og:image" >
    <meta property="og:description" >
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" >
    <meta name="viewport" >
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/fontawesome-free-5.0.6/on-server/css/fontawesome.min.css">
    
    <title>Manajer Diciri Indonesia</title>
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header">
      <a class="app-header__logo" href="<?php echo site_url('manajer/index')?>"><img src="<?php echo base_url();?>assets/images/logo.png" class="img-fluid" alt="Responsive image"/></a>

      <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>

      <ul class="app-nav"></ul>

      <!-- Sidebar toggle button-->
      <a class="app-nav__item" href="<?php echo site_url('diciri/index')?>"><i class="fa fa-sign-out fa-lg"></i> Logout</a>
    </header>
    <!-- Sidebar menu-->
    
    <aside class="app-sidebar">
      <div class="app-sidebar__user">
        <a href="<?php echo site_url('manajer/profil')?>"><img class="app-sidebar__user-avatar" src="<?php echo base_url(); ?>assets/images/nida.png" alt="User Image"></a>
        <div>
          <p class="app-sidebar__user-name">John Doe</p>
          <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
      </div>

      <ul class="app-menu">
        <li><a class="app-menu__item active" href="<?php echo site_url('manajer/index')?>"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li><a class="app-menu__item" href="<?php echo site_url('manajer/pelanggan')?>"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Pelanggan</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-tags"></i><span class="app-menu__label">Aktivitas</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?php echo site_url('manajer/berlangsung')?>"><i class="icon fa fa-tag"></i> Berlangsung</a></li>
            <li><a class="treeview-item" href="<?php echo site_url('manajer/berpotensi')?>"><i class="icon fa fa-tag"></i> Berpotensi</a></li>
          </ul>
        </li>
        <li><a class="app-menu__item" href="<?php echo site_url('manajer/projek')?>"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Projek</span></a></li>
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="app-menu__icon fa fa-user"></i>&nbsp;Profil</a></h1>
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="<?php echo base_url();?>assets/js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/chart.js"></script>
    <script type="text/javascript">
      var data = {
      	labels: ["January", "February", "March", "April", "May"],
      	datasets: [
      		{
      			label: "My First dataset",
      			fillColor: "rgba(220,220,220,0.2)",
      			strokeColor: "rgba(220,220,220,1)",
      			pointColor: "rgba(220,220,220,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(220,220,220,1)",
      			data: [65, 59, 80, 81, 56]
      		},
      		{
      			label: "My Second dataset",
      			fillColor: "rgba(151,187,205,0.2)",
      			strokeColor: "rgba(151,187,205,1)",
      			pointColor: "rgba(151,187,205,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(151,187,205,1)",
      			data: [28, 48, 40, 19, 86]
      		}
      	]
      };
      var pdata = [
      	{
      		value: 300,
      		color: "#46BFBD",
      		highlight: "#5AD3D1",
      		label: "Complete"
      	},
      	{
      		value: 50,
      		color:"#F7464A",
      		highlight: "#FF5A5E",
      		label: "In-Progress"
      	}
      ]
      
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
    </script>
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>