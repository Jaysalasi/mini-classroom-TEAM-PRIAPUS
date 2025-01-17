
<!DOCTYPE html>
 <html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <title>Team Priapus Mini-Classroom</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="<?= base_url()?>public/assets/img/favicon.ico">

        <!--Google Font link-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	
        <link rel="stylesheet" href="<?= base_url()?>public/assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?= base_url()?>public/assets/css/bootstrap.css">
        <link rel="stylesheet" href="<?= base_url()?>public/assets/css/bootsnav.css">
        <link rel="stylesheet" href="<?= base_url()?>public/assets/css/style2.css">
        <link rel="stylesheet" href="<?= base_url()?>public/assets/css/responsive2.css" />
    </head>
    <body data-spy="scroll" data-target=".navbar-collapse">
        <div class="culmn">
            <nav class="navbar navbar-default bootsnav navbar-fixed">
                <div class="container"> 
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
				        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>

				
				 
                        </button>
                    <h2 class="text-white" style="padding-top: 20px;">Priapus</h2>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <div class="business_btn" style="padding-bottom: 15px;">
                                <a href="<?= base_url()?>index.php/teacher/login" class="btn btn-default m-top-20">Teacher Login</a>
                                <a href="<?= base_url()?>index.php/student/login" class="btn btn-primary m-top-20">Student Login</a>
                            </div>
                        </ul>
                    </div>
                </div> 
            </nav>
            <section id="home" class="home bg-black fix">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="main_home text-center">
                            <div class="col-md-12">
                                <div class="hello_slid">
                                    <div class="slid_item">
                                        <div class="home_text ">
                                            <h2 class="text-white"><strong>Welcome to Priapus Classroom</strong></h2>
                                            <h1 class="text-white">"Teach and Take professional classes needed for a successful career in IT and digital technology"</h1>
                                        </div>
                                        <div class="home_btns m-top-40">
                                            <a href="<?= base_url()?>index.php/teacher/signup" class="btn btn-primary m-top-20">Register as a Teacher</a>
                                            <a href="<?= base_url()?>index.php/student/signup" class="btn btn-default m-top-20">Enroll as a Student</a>
                                        </div>
                                         <a href="<?= base_url()?>public/assets/home.mp4" class="btn btn-default m-top-20">Watch Video</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> 
            <footer>
                <div class="main_footer fix bg-mega text-center p-top-40 p-bottom-30 m-top-80">
                    <div class="col-md-12">
                             <?= date('Y')?> &copy; Designed with &hearts; Team Priapus 
                    </div>
                </div>
            </footer>
        </div>
        <script src="<?= base_url()?>public/assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="<?= base_url()?>public/assets/js/vendor/bootstrap.min.js"></script>
        <script src="<?= base_url()?>public/assets/js/main.js"></script>
    </body>
</html>
