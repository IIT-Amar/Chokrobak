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
    <title>TV Channels</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="kazisrabon">
    <link rel="shortcut icon" href="http://localhost/chokrobak/assets/images/favicon.ico">
    <link href="http://localhost/chokrobak/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost/chokrobak/assets/css/bootstrap-theme.min.css" rel="stylesheet">
    <!--    <link href="http://localhost/chokrobak/assets/css/card.css" rel="stylesheet">-->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="http://angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.12.1.min.js"></script>
</head>
<body>
    <div class="page-container">
        <div class="container">
            <div class="row" id="header">
                <div class="col-md-4">
                    <a href="#"><img class="img-responsive img-portfolio img-hover" src="http://localhost/chokrobak/assets/images/chokrobak.jpg" alt=""></a>
                </div>
                <div class="col-md-2">
                </div>
                <div class="col-md-4">
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
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">জাতীয়</a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-4">
                                            <div class="thumbnail">
                                                <img src="http://localhost/chokrobak/assets/images/tv/chokrobak.jpg" alt="...">
                                                <h3>একুশে টেলিভিশন</h3>
                                                <a href="http://localhost/chokrobak/index.php/tv/tv1" class="btn btn-primary" role="button">Watch</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="thumbnail">
                                                <img src="http://localhost/chokrobak/assets/images/tv/chokrobak.jpg" alt="...">
                                                <h3>বাংলা টেলিভিশন</h3>
                                                <a href="http://localhost/chokrobak/index.php/tv/tv2" class="btn btn-primary" role="button">Watch</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="thumbnail">
                                                <img src="http://localhost/chokrobak/assets/images/tv/chokrobak.jpg" alt="...">
                                                <h3>Thumbnail label</h3>
                                                <a href="http://localhost/chokrobak/index.php/tv/tv3" class="btn btn-primary" role="button">Watch</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">অনলাইন</a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-4">
                                            <div class="thumbnail">
                                                <img src="http://localhost/chokrobak/assets/images/tv/chokrobak.jpg" alt="...">
                                                <h3>একুশে টেলিভিশন</h3>
                                                <a href="http://localhost/chokrobak/index.php/tv/tv1" class="btn btn-primary" role="button">Watch</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="thumbnail">
                                                <img src="http://localhost/chokrobak/assets/images/tv/chokrobak.jpg" alt="...">
                                                <h3>বাংলা টেলিভিশন</h3>
                                                <a href="http://localhost/chokrobak/index.php/tv/tv2" class="btn btn-primary" role="button">Watch</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="thumbnail">
                                                <img src="http://localhost/chokrobak/assets/images/tv/chokrobak.jpg" alt="...">
                                                <h3>Thumbnail label</h3>
                                                <a href="http://localhost/chokrobak/index.php/tv/tv3" class="btn btn-primary" role="button">Watch</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">আঞ্চলিক</a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-4">
                                            <div class="thumbnail">
                                                <img src="http://localhost/chokrobak/assets/images/tv/chokrobak.jpg" alt="...">
                                                <h3>একুশে টেলিভিশন</h3>
                                                <a href="http://localhost/chokrobak/index.php/tv/tv1" class="btn btn-primary" role="button">Watch</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="thumbnail">
                                                <img src="http://localhost/chokrobak/assets/images/tv/chokrobak.jpg" alt="...">
                                                <h3>বাংলা টেলিভিশন</h3>
                                                <a href="http://localhost/chokrobak/index.php/tv/tv2" class="btn btn-primary" role="button">Watch</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="thumbnail">
                                                <img src="http://localhost/chokrobak/assets/images/tv/chokrobak.jpg" alt="...">
                                                <h3>Thumbnail label</h3>
                                                <a href="http://localhost/chokrobak/index.php/tv/tv3" class="btn btn-primary" role="button">Watch</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">ইংরেজী</a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-4">
                                            <div class="thumbnail">
                                                <img src="http://localhost/chokrobak/assets/images/tv/chokrobak.jpg" alt="...">
                                                <h3>একুশে টেলিভিশন</h3>
                                                <a href="http://localhost/chokrobak/index.php/tv/tv1" class="btn btn-primary" role="button">Watch</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="thumbnail">
                                                <img src="http://localhost/chokrobak/assets/images/tv/chokrobak.jpg" alt="...">
                                                <h3>বাংলা টেলিভিশন</h3>
                                                <a href="http://localhost/chokrobak/index.php/tv/tv2" class="btn btn-primary" role="button">Watch</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="thumbnail">
                                                <img src="http://localhost/chokrobak/assets/images/tv/chokrobak.jpg" alt="...">
                                                <h3>Thumbnail label</h3>
                                                <a href="http://localhost/chokrobak/index.php/tv/tv3" class="btn btn-primary" role="button">Watch</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">তৃতীয় বাংলা</a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-4">
                                            <div class="thumbnail">
                                                <img src="http://localhost/chokrobak/assets/images/tv/chokrobak.jpg" alt="...">
                                                <h3>একুশে টেলিভিশন</h3>
                                                <a href="http://localhost/chokrobak/index.php/tv/tv1" class="btn btn-primary" role="button">Watch</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="thumbnail">
                                                <img src="http://localhost/chokrobak/assets/images/tv/chokrobak.jpg" alt="...">
                                                <h3>বাংলা টেলিভিশন</h3>
                                                <a href="http://localhost/chokrobak/index.php/tv/tv2" class="btn btn-primary" role="button">Watch</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="thumbnail">
                                                <img src="http://localhost/chokrobak/assets/images/tv/chokrobak.jpg" alt="...">
                                                <h3>Thumbnail label</h3>
                                                <a href="http://localhost/chokrobak/index.php/tv/tv3" class="btn btn-primary" role="button">Watch</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">ওপার বাংলা</a>
                                </h4>
                            </div>
                            <div id="collapseSix" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-4">
                                            <div class="thumbnail">
                                                <img src="http://localhost/chokrobak/assets/images/tv/chokrobak.jpg" alt="...">
                                                <h3>একুশে টেলিভিশন</h3>
                                                <a href="http://localhost/chokrobak/index.php/tv/tv1" class="btn btn-primary" role="button">Watch</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="thumbnail">
                                                <img src="http://localhost/chokrobak/assets/images/tv/chokrobak.jpg" alt="...">
                                                <h3>বাংলা টেলিভিশন</h3>
                                                <a href="http://localhost/chokrobak/index.php/tv/tv2" class="btn btn-primary" role="button">Watch</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="thumbnail">
                                                <img src="http://localhost/chokrobak/assets/images/tv/chokrobak.jpg" alt="...">
                                                <h3>Thumbnail label</h3>
                                                <a href="http://localhost/chokrobak/index.php/tv/tv3" class="btn btn-primary" role="button">Watch</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">ম্যাগাজিন</a>
                                </h4>
                            </div>
                            <div id="collapseSeven" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-4">
                                            <div class="thumbnail">
                                                <img src="http://localhost/chokrobak/assets/images/tv/chokrobak.jpg" alt="...">
                                                <h3>একুশে টেলিভিশন</h3>
                                                <a href="http://localhost/chokrobak/index.php/tv/tv1" class="btn btn-primary" role="button">Watch</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="thumbnail">
                                                <img src="http://localhost/chokrobak/assets/images/tv/chokrobak.jpg" alt="...">
                                                <h3>বাংলা টেলিভিশন</h3>
                                                <a href="http://localhost/chokrobak/index.php/tv/tv2" class="btn btn-primary" role="button">Watch</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="thumbnail">
                                                <img src="http://localhost/chokrobak/assets/images/tv/chokrobak.jpg" alt="...">
                                                <h3>Thumbnail label</h3>
                                                <a href="http://localhost/chokrobak/index.php/tv/tv3" class="btn btn-primary" role="button">Watch</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseEight">বিশেষায়িত</a>
                                </h4>
                            </div>
                            <div id="collapseEight" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-4">
                                            <div class="thumbnail">
                                                <img src="http://localhost/chokrobak/assets/images/tv/chokrobak.jpg" alt="...">
                                                <h3>একুশে টেলিভিশন</h3>
                                                <a href="http://localhost/chokrobak/index.php/tv/tv1" class="btn btn-primary" role="button">Watch</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="thumbnail">
                                                <img src="http://localhost/chokrobak/assets/images/tv/chokrobak.jpg" alt="...">
                                                <h3>বাংলা টেলিভিশন</h3>
                                                <a href="http://localhost/chokrobak/index.php/tv/tv2" class="btn btn-primary" role="button">Watch</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="thumbnail">
                                                <img src="http://localhost/chokrobak/assets/images/tv/chokrobak.jpg" alt="...">
                                                <h3>Thumbnail label</h3>
                                                <a href="http://localhost/chokrobak/index.php/tv/tv3" class="btn btn-primary" role="button">Watch</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseNine">আন্তর্জাতিক</a>
                                </h4>
                            </div>
                            <div id="collapseNine" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-4">
                                            <div class="thumbnail">
                                                <img src="http://localhost/chokrobak/assets/images/tv/chokrobak.jpg" alt="...">
                                                <h3>একুশে টেলিভিশন</h3>
                                                <a href="http://localhost/chokrobak/index.php/tv/tv1" class="btn btn-primary" role="button">Watch</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="thumbnail">
                                                <img src="http://localhost/chokrobak/assets/images/tv/chokrobak.jpg" alt="...">
                                                <h3>বাংলা টেলিভিশন</h3>
                                                <a href="http://localhost/chokrobak/index.php/tv/tv2" class="btn btn-primary" role="button">Watch</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="thumbnail">
                                                <img src="http://localhost/chokrobak/assets/images/tv/chokrobak.jpg" alt="...">
                                                <h3>Thumbnail label</h3>
                                                <a href="http://localhost/chokrobak/index.php/tv/tv3" class="btn btn-primary" role="button">Watch</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTen">অন্যান্য</a>
                                </h4>
                            </div>
                            <div id="collapseTen" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-4">
                                            <div class="thumbnail">
                                                <img src="http://localhost/chokrobak/assets/images/tv/chokrobak.jpg" alt="...">
                                                <h3>একুশে টেলিভিশন</h3>
                                                <a href="http://localhost/chokrobak/index.php/tv/tv1" class="btn btn-primary" role="button">Watch</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="thumbnail">
                                                <img src="http://localhost/chokrobak/assets/images/tv/chokrobak.jpg" alt="...">
                                                <h3>বাংলা টেলিভিশন</h3>
                                                <a href="http://localhost/chokrobak/index.php/tv/tv2" class="btn btn-primary" role="button">Watch</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="thumbnail">
                                                <img src="http://localhost/chokrobak/assets/images/tv/chokrobak.jpg" alt="...">
                                                <h3>Thumbnail label</h3>
                                                <a href="http://localhost/chokrobak/index.php/tv/tv3" class="btn btn-primary" role="button">Watch</a>
                                            </div>
                                        </div>
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
