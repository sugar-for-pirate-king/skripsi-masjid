<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="robots" content="index, follow">
    <link rel="icon" href="#" type="image/x-icon">
    <title>Website Administrator Masjid Al-Hanif</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.min.login.css');?>">
    <link rel="stylesheet" href="<?php echo base_url();?>/https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,80">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Google-Style-Login.css');?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<header>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand text-success navbar-link" href="login">Control panel</a>
            </div>
        </div>
    </nav>
</header>
        <div class="row" style="margin-top: 5%">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
            <div class="login-card"><img src="assets/img/avatar.PNG" class="profile-img-card">
        <p class="profile-name-card"></p>
        <form action="<?php echo site_url('login'); ?>" class="form-signin" method="post"><span class="reauth-email"></span>
            <input class="form-control" type="text" placeholder="Username" autofocus="" name="username" value="<?php echo set_value('username');?>" required>
            <?= form_error('username'); ?>
            <input class="form-control" type="password" placeholder="Password" name="password" required>
            <?= form_error('password'); ?>
            <div class="checkbox">
                <div class="checkbox">
                    <label><input type="checkbox">Remember me</label>
                </div>
            </div>
            <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit">Login</button>
            </form>
            </div>
        </div>
    </div>
   <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <br><br>
                    <p class="text-center"><strong>Copyright &copy; 2018 Website Masjid Al-Hanif. All rights reserved.</strong></p>
                    <br>
                </div>
             </div>
        </div>
    </footer>
    <script src="<?php echo base_url('assets/plugins/bootstrap/js/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.login.js');?>"></script>
</body>
</html>