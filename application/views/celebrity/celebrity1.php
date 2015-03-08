<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: IIT-->
<!-- * Date: 3/7/15-->
<!-- * Time: 2:33 PM-->
<!-- */-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Celebrities</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="kazisrabon">
    <link rel="shortcut icon" href="http://localhost/chokrobak/assets/images/favicon.ico">
    <link href="http://localhost/chokrobak/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost/chokrobak/assets/css/bootstrap-theme.min.css" rel="stylesheet">
<!--    <link href="http://localhost/chokrobak/assets/css/glyphicons.css" rel="stylesheet">-->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="http://angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.12.1.min.js"></script>
</head>
<body>
<div class="page-container">
    <div class="container">
        <div class="row" id="header">
            <div class="col-md-4 ">
                <br/>
                <br/>
                <a href="#"><img class="img-responsive img-portfolio img-hover" src="http://localhost/chokrobak/assets/images/chokrobak.jpg" alt=""></a>
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-3">
                <img class="img-responsive img-portfolio img-hover" src="http://localhost/chokrobak/assets/images/baby1.jpg" alt="">
            </div>
        </div>
        <div class="row" id="headline">
            <div class="col-md-1">
                <h3 style="display: inline;">শিরোনাম:</h3>
            </div>
            <div class="col-md-10">
                <marquee>
                    <h3 style="display: inline;"> শিরোনাম১ </h3>
                    <h3 style="display: inline;"> শিরোনাম২ </h3>
                    <h3 style="display: inline;"> শিরোনাম৩ </h3>
                    <h3 style="display: inline;"> শিরোনাম৪ </h3>
                    <h3 style="display: inline;"> শিরোনাম৫ </h3>
                    <h3 style="display: inline;"> শিরোনাম৬ </h3>
                    <h3 style="display: inline;"> শিরোনাম৭ </h3>
                    <h3 style="display: inline;"> শিরোনাম৮ </h3>
                    <h3 style="display: inline;"> শিরোনাম৯ </h3>
                    <h3 style="display: inline;"> শিরোনাম১০ </h3>
                    <h3 style="display: inline;"> শিরোনাম১১ </h3>
                    <h3 style="display: inline;"> শিরোনাম১২ </h3>
                </marquee>
            </div>
        </div>
        <div class="row" id="navigation">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="http://localhost/chokrobak/">চক্রবাক</a>
                    </div>

                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">NewsPaper<b class="caret"></b></a>
                                <!--                                <ul class="dropdown-menu">-->
                                <!--                                    <li><a href="#">MAXXIS</a></li>-->
                                <!--                                    <li><a href="#">PHP Tutorials</a></li>-->
                                <!--                                    <li><a href="#">Javascript Tutorials</a></li>-->
                                <!--                                    <li><a href="#">CSS Tutorials</a></li>-->
                                <!--                                </ul>-->
                            </li>
                            <li><a href="#">Archieve</a></li>
                            <li><a href="#">Fund Raising</a></li>
                            <li><a href="#">Future Plan</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div><!-- /.container-fluid -->
            </nav>
        </div>
        <div class="row" id="channel">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="#" class="list-group-item active">
                        অন্যান্য
                    </a>
                    <a href="http://localhost/chokrobak/index.php/celebrities" class="list-group-item list-group-item-success"> BD Celebrities</a>
                    <a href="http://localhost/chokrobak/index.php/youngtalents" class="list-group-item list-group-item-info">Young Talents</a>
                    <a href="http://localhost/chokrobak/index.php/athletes" class="list-group-item list-group-item-success">Athletes</a>
                    <a href="http://localhost/chokrobak/index.php/writters" class="list-group-item list-group-item-info">Writters</a>
                    <a href="http://localhost/chokrobak/index.php/tvChannels" class="list-group-item list-group-item-success">TV Channels</a>
                    <a href="http://localhost/chokrobak/index.php/radios" class="list-group-item list-group-item-info">Radios</a>
                    <a href="http://localhost/chokrobak/index.php/newspaper" class="list-group-item list-group-item-success">Newspaper</a>
                    <a href="http://localhost/chokrobak/index.php/achievement" class="list-group-item list-group-item-info">Achievement</a>
                    <a href="http://localhost/chokrobak/index.php/contributions" class="list-group-item list-group-item-success">Contributions</a>
                    <a href="http://localhost/chokrobak/index.php/feedback" class="list-group-item list-group-item-info">Feedback</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-4">
                        <img class="img-circle" src="<?php echo $source;?>" alt="" style="width: 240px; height: 240px;">
                    </div>
                    <br/>
                    <br/>
<!--                    <div class="col-md-1"/>-->
                    <div class="col-md-7">
                        <h3>Name: <?php echo $name;?></h3>
                        <h3>Profession: <?php echo $profession;?></h3>
                        <h3>Birth Date: <?php echo $birthdate;?></h3>
                        <h3>Birth Place: <?php echo $birthplace;?></h3>
                        <i class="icon-large icon-facebook"></i>
                    </div>
                </div>
                <br/>
                <br/>
                <div class="row">
                    <div class="col-md-12">
                        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                            <ul id="myTab" class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#about" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">About</a></li>
                                <li role="presentation"><a href="#activity" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Activity</a></li>
                                <li role="presentation"><a href="#achievement" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Achievement</a></li>
                                <li role="presentation"><a href="#contact" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Contact</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="about" aria-labelledby="home-tab">
                                    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="activity" aria-labelledby="profile-tab">
                                    <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="achievement" aria-labelledby="profile-tab">
                                    <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="contact" aria-labelledby="profile-tab">
                                    <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <div class="col-md-12">
            <p class="text-muted">
                Copyright &copy; Kazi Srabon & Shamsudduha
                <a data-toggle="modal" href="#termsAndConditionsModal">
                    Terms and Conditions
                </a>
            </p>
            <!--Modal------>

            <div class="modal fade" id="termsAndConditionsModal" tabinex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2>Terms and Conditions</h2>
                        </div>
                        <div class="modal-body">
                            <p>Terms and Conditions</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="http://localhost/chokrobak/assets/js/bootstrap.js"></script>
<script src="http://localhost/chokrobak/assets/js/jquery.js"></script>
<script src="http://localhost/chokrobak/assets/js/bootstrap.min.js"></script>
</body>
</html>