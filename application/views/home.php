<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Home</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="kazisrabon">
    <link rel="shortcut icon" href="http://localhost/chokrobak/assets/images/favicon.ico">
    <link href="http://localhost/chokrobak/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost/chokrobak/assets/css/bootstrap-theme.min.css" rel="stylesheet">

    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<style>
    .captionOrange, .captionBlack
    {
        color: #fff;
        font-size: 20px;
        line-height: 30px;
        text-align: center;
        border-radius: 4px;
    }
    .captionOrange
    {
        background: #EB5100;
        background-color: rgba(235, 81, 0, 0.6);
    }
    .captionBlack
    {
        font-size:16px;
        background: #000;
        background-color: rgba(0, 0, 0, 0.4);
    }
    a.captionOrange, A.captionOrange:active, A.captionOrange:visited
    {
        color: #ffffff;
        text-decoration: none;
    }
    a.captionOrange:hover
    {
        color: #eb5100;
        text-decoration: underline;
        background-color: #eeeeee;
        background-color: rgba(238, 238, 238, 0.7);
    }
    .bricon
    {
        background: url(http://localhost/chokrobak/assets/assets/images/browser-icons.png);
    }
</style>
<!-- use jssor.slider.min.js instead for release -->
<!-- jssor.slider.min.js = (jssor.core.js + jssor.utils.js + jssor.slider.js) -->
<script type="text/javascript" src="http://localhost/chokrobak/assets/js/jssor.core.js"></script>
<script type="text/javascript" src="http://localhost/chokrobak/assets/js/jssor.slider.js"></script>
<script type="text/javascript" src="http://localhost/chokrobak/assets/js/jssor.utils.js"></script>
<script>
    jssor_sliderb_starter = function (containerId) {
        //Reference http://www.jssor.com/development/slider-with-slideshow-no-jquery.html
        //Reference http://www.jssor.com/development/tool-slideshow-transition-viewer.html

        var _SlideshowTransitions = [
            //Fade in R
            {$Duration: 1200, x: -0.3, $During: { $Left: [0.3, 0.7] }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade out L
            , { $Duration: 1200, x: 0.3, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
        ];

        var options = {
            $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
            $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
            $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
            $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

            $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
            $SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
            $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
            //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
            //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
            $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
            $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
            $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
            $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
            $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
            $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

            $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
            },

            $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                $SpacingX: 10,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                $SpacingY: 10                                    //[Optional] Vertical space between each item in pixel, default value is 0
            },

            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                $ChanceToShow: 2,                                //[Required] 0 Never, 1 Mouse Over, 2 Always
                $AutoCenter: 2                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
            },

            $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                $ActionMode: 0,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                $DisableDrag: true                              //[Optional] Disable drag or not, default value is false
            }
        };

        var jssor_sliderb = new $JssorSlider$(containerId, options);
        //responsive code begin
        //you can remove responsive code if you don't want the slider scales while window resizes
        function ScaleSlider() {
            var parentWidth = jssor_sliderb.$Elmt.parentNode.clientWidth;
            if (parentWidth)
                jssor_sliderb.$SetScaleWidth(Math.min(parentWidth, 600));
            else
                $JssorUtils$.$Delay(ScaleSlider, 30);
        }

        ScaleSlider();
        $JssorUtils$.$AddEvent(window, "load", ScaleSlider);


        if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
            $JssorUtils$.$OnWindowResize(window, ScaleSlider);
        }

        //if (navigator.userAgent.match(/(iPhone|iPod|iPad)/)) {
        //    $JssorUtils$.$AddEvent(window, "orientationchange", ScaleSlider);
        //}
        //responsive code end
    };
</script>
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
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="#" class="list-group-item active">
                        অন্যান্য
                    </a>
                    <a href="#" class="list-group-item list-group-item-success">Celebrities</a>
                    <a href="#" class="list-group-item list-group-item-info">Young Tatents</a>
                    <a href="http://localhost/chokrobak/index.php/tvChannels" class="list-group-item list-group-item-success">TV Channels</a>
                    <a href="#" class="list-group-item list-group-item-info">Radios</a>
                    <a href="#" class="list-group-item list-group-item-success">Newspaper</a>
                    <a href="#" class="list-group-item list-group-item-info">Cultural News</a>
                    <a href="#" class="list-group-item list-group-item-success">Fund Raising</a>
                </div>
            </div>
            <div class="col-md-6">
                <div id="sliderb_container" style="position: relative; width: 600px; height: 300px; overflow: hidden; ">

                    <!-- Loading Screen -->
                    <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                        <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                        </div>
                        <div style="position: absolute; display: block; background: url(http://localhost/chokrobak/assets/images/slider/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
                        </div>
                    </div>

                    <!-- Slides Container -->
                    <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px;
            overflow: hidden;">
                        <div>
                            <img u=image src="http://localhost/chokrobak/assets/images/slider/01.jpg" />
                            <div u="thumb">Do you notice it is draggable by mouse/finger?</div>
                        </div>
                        <div>
                            <img u=image src="http://localhost/chokrobak/assets/images/slider/02.jpg" />
                            <div u="thumb">Did you drag by either horizontal or vertical?</div>
                        </div>
                        <div>
                            <img u=image src="http://localhost/chokrobak/assets/images/slider/03.jpg" />
                            <div u="thumb">Do you notice navigator responses when drag?</div>
                        </div>
                        <div>
                            <img u=image src="http://localhost/chokrobak/assets/images/slider/04.jpg" />
                            <div u="thumb">Do you notice arrow responses when click?</div>
                        </div>
                    </div>

                    <!-- ThumbnailNavigator Skin Begin -->
                    <div u="thumbnavigator" class="sliderb-T" style="position: absolute; bottom: 0px; left: 0px; height:45px; width:600px;">
                        <div style="filter: alpha(opacity=40); opacity:0.4; position: absolute; display: block;
                background-color: #000000; top: 0px; left: 0px; width: 100%; height: 100%;">
                        </div>
                        <!-- Thumbnail Item Skin Begin -->
                        <div u="slides">
                            <div u="prototype" style="position: absolute; width: 600px; height: 45px; top: 0; left: 0;">
                                <thumbnailtemplate style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; font-family: verdana; font-weight: normal; color:#fff; line-height: 45px; font-size:20px; padding-left:10px;"></thumbnailtemplate>
                            </div>
                        </div>
                        <!-- Thumbnail Item Skin End -->
                    </div>
                    <!-- ThumbnailNavigator Skin End -->

                    <!-- Bullet Navigator Skin Begin -->
                    <!-- jssor slider bullet navigator skin 01 -->
                    <style>
                        /*
                        .jssorb01 div           (normal)
                        .jssorb01 div:hover     (normal mouseover)
                        .jssorb01 .av           (active)
                        .jssorb01 .av:hover     (active mouseover)
                        .jssorb01 .dn           (mousedown)
                        */
                        .jssorb01 div, .jssorb01 div:hover, .jssorb01 .av
                        {
                            filter: alpha(opacity=70);
                            opacity: .7;
                            overflow:hidden;
                            cursor: pointer;
                            border: #000 1px solid;
                        }
                        .jssorb01 div { background-color: gray; }
                        .jssorb01 div:hover, .jssorb01 .av:hover { background-color: #d3d3d3; }
                        .jssorb01 .av { background-color: #fff; }
                        .jssorb01 .dn, .jssorb01 .dn:hover { background-color: #555555; }
                    </style>
                    <!-- bullet navigator container -->
                    <div u="navigator" class="jssorb01" style="position: absolute; bottom: 16px; right: 10px;">
                        <!-- bullet navigator item prototype -->
                        <div u="prototype" style="POSITION: absolute; WIDTH: 12px; HEIGHT: 12px;"></div>
                    </div>
                    <!-- Bullet Navigator Skin End -->

                    <!-- Arrow Navigator Skin Begin -->
                    <style>
                        /* jssor slider arrow navigator skin 05 css */
                        /*
                        .jssora05l              (normal)
                        .jssora05r              (normal)
                        .jssora05l:hover        (normal mouseover)
                        .jssora05r:hover        (normal mouseover)
                        .jssora05ldn            (mousedown)
                        .jssora05rdn            (mousedown)
                        */
                        .jssora05l, .jssora05r, .jssora05ldn, .jssora05rdn
                        {
                            position: absolute;
                            cursor: pointer;
                            display: block;
                            background: url(http://localhost/chokrobak/assets/images/slider/a17.png) no-repeat;
                            overflow:hidden;
                        }
                        .jssora05l { background-position: -10px -40px; }
                        .jssora05r { background-position: -70px -40px; }
                        .jssora05l:hover { background-position: -130px -40px; }
                        .jssora05r:hover { background-position: -190px -40px; }
                        .jssora05ldn { background-position: -250px -40px; }
                        .jssora05rdn { background-position: -310px -40px; }
                    </style>
                    <!-- Arrow Left -->
        <span u="arrowleft" class="jssora05l" style="width: 40px; height: 40px; top: 123px; left: 8px;">
        </span>
                    <!-- Arrow Right -->
        <span u="arrowright" class="jssora05r" style="width: 40px; height: 40px; top: 123px; right: 8px">
        </span>
                    <!-- Arrow Navigator Skin End -->
                    <a style="display: none" href="http://www.jssor.com">javascript</a>
                    <!-- Trigger -->
                    <script>
                        jssor_sliderb_starter('sliderb_container');
                    </script>
                </div>
            </div>
            <div class="col-md-3">
                <div class="list-group">
                    <a href="#" class="list-group-item active">
                        নজরুল
                    </a>
                    <a href="#" class="list-group-item list-group-item-success">Celebrities</a>
                    <a href="#" class="list-group-item list-group-item-info">Young Tatents</a>
                    <a href="#" class="list-group-item list-group-item-success">TV Channels</a>
                        <a href="#" class="list-group-item list-group-item-info">Radios</a>
                        <a href="#" class="list-group-item list-group-item-success">Newspaper</a>
                        <a href="#" class="list-group-item list-group-item-info">Cultural News</a>
                        <a href="#" class="list-group-item list-group-item-success">Fund Raising</a>
                </div>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="http://localhost/chokrobak/assets/images/slider/05.jpg" alt="...">
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>...</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="http://localhost/chokrobak/assets/images/slider/06.jpg" alt="...">
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>...</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="http://localhost/chokrobak/assets/images/slider/07.jpg" alt="...">
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>...</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="http://localhost/chokrobak/assets/images/slider/08.jpg" alt="...">
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>...</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="http://localhost/chokrobak/assets/images/slider/05.jpg" alt="...">
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>...</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="http://localhost/chokrobak/assets/images/slider/06.jpg" alt="...">
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>...</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="http://localhost/chokrobak/assets/images/slider/07.jpg" alt="...">
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>...</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="http://localhost/chokrobak/assets/images/slider/08.jpg" alt="...">
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>...</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="http://localhost/chokrobak/assets/images/slider/05.jpg" alt="...">
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>...</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="http://localhost/chokrobak/assets/images/slider/06.jpg" alt="...">
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>...</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="http://localhost/chokrobak/assets/images/slider/07.jpg" alt="...">
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>...</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="http://localhost/chokrobak/assets/images/slider/08.jpg" alt="...">
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>...</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="http://localhost/chokrobak/assets/images/slider/05.jpg" alt="...">
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>...</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="http://localhost/chokrobak/assets/images/slider/06.jpg" alt="...">
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>...</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="http://localhost/chokrobak/assets/images/slider/07.jpg" alt="...">
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>...</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="http://localhost/chokrobak/assets/images/slider/08.jpg" alt="...">
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>...</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
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
<!-- Bootstrap Core JavaScript -->
<script src="http://localhost/chokrobak/assets/js/bootstrap.min.js"></script>


</body>
</html>