<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" >
    <meta name="viewport" >
    <!-- Main CSS-->
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main.css">
    <!-- Font-icon css-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/fontawesome-free-5.0.6/on-server/css/fontawesome.min.css">
    <title>Diciri Indonesia</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <img src="<?php echo base_url();?>assets/images/logo.png"/>
      </div>
      <div class="login-box">
        <?php echo validation_errors(); ?>
        <form class="login-form" role="form" action="<?php echo site_url('diciri/login'); ?>" method="post">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>LOGIN</h3>
          <div class="form-group">
            <label class="control-label">USERNAME</label>
            <input class="form-control" type="text" name="username" value="" placeholder="Username" autofocus required/>
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input class="form-control" type="password" name="password" placeholder="Password" required />
          </div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
              </div>
              <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Lupa Password ?</a></p>
            </div>
          </div>
          <div class="form-group btn-container">
            <button type="submit" name="submit" value="Log In" class="btn btn-info btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>LOGIN</button>
          </div>
        </form>
        <form class="forget-form" action="index.html">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Lupa Password ?</h3>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input class="form-control" type="text" placeholder="Email">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-info btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
          </div>
          <div class="form-group mt-3">
            <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Kembali ke Login</a></p>
          </div>
        </form>
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="<?php echo base_url();?>assets/js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
        $('.login-box').toggleClass('flipped');
        return false;
      });
    </script>
  </body>
</html>