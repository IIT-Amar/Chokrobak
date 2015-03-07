/**
 * Created by PhpStorm.
 * User: IIT
 * Date: 3/7/15
 * Time: 10:10 AM
 */
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>একুশে টেলিভিশন</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="kazisrabon">
    <link rel="shortcut icon" href="http://localhost/chokrobak/assets/images/favicon.ico">
    <link href="http://localhost/chokrobak/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost/chokrobak/assets/css/bootstrap-theme.min.css" rel="stylesheet">
<!--    <link href="http://localhost/chokrobak/assets/css/card.css" rel="stylesheet">-->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="page-container">
    <div class="container">
        <div class="row" id="header">
            <div class="col-md-6">
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
                            <li><a href="http://localhost/chokrobak/">হোম</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">পত্রিকা<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">MAXXIS</a></li>
                                    <li><a href="#">PHP Tutorials</a></li>
                                    <li><a href="#">Javascript Tutorials</a></li>
                                    <li><a href="#">CSS Tutorials</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html">About us</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="photoGallary.html">Photo Gallary</a></li>
                        </ul>
                    </div>
                </div><!-- /.container-fluid -->
            </nav>
        </div>
        <div class="row" id="channel">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="#" class="list-group-item active">অন্যান্য</a>
                    <a href="#" class="list-group-item list-group-item-success">Celebrities</a>
                    <a href="#" class="list-group-item list-group-item-info">Young Tatents</a>
                    <a href="http://localhost/chokrobak/index.php/tvChannels" class="list-group-item list-group-item-success">TV Channels</a>
                    <a href="#" class="list-group-item list-group-item-info">Radios</a>
                    <a href="http://localhost/chokrobak/index.php/newspaper" class="list-group-item list-group-item-success">Newspaper</a>
                    <a href="#" class="list-group-item list-group-item-info">Cultural News</a>
                    <a href="#" class="list-group-item list-group-item-success">Fund Raising</a>
                </div>
            </div>
            <div class="col-md-9">
                <embed name="lsplayer" wmode="opaque" bgcolor="#000000" src="http://cdn.livestream.com/grid/LSPlayer.swf?channel=mojamojatv&amp;clip=&amp;time=&amp;allowChat=true&amp;id=player&amp;hideInfo=false&amp;autoPlay=true&amp;isPopUpPlayer=true&amp;allowShare=true&amp;t=655286" width="100%" height="100%" allowscriptaccess="always" allowfullscreen="true" type="application/x-shockwave-flash">
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
