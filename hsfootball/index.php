
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <title class="match">High School Football Live Stream </title>
    <link rel="icon" sizes="180x180" href="img/maxpreps-icon-180x180.webp">
    <link href="css/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/app.css" rel="stylesheet" type="text/css">
</head>
 
 <style>
    .popup-time {
        background: url(bg_player.webp) no-repeat center center;
        background-size: cover;
    }

    .popup-container {
        background: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), url(bg_player.webp) no-repeat center center;
        background-size: cover;
    }
</style>

<body>
<div class="navbar-fixed-top">
    <div class="network-bar" data-js-hook="cbs-network-bar" id="cbs-network-bar" style="display: none;">
        <div class="inner-network-wrapper">
            <ul class="network-bar-links">
                <li><a href="register.php" rel="noopener" data-lc="Header-Navigation" data-ll="cbssports" data-la="network-bar">CBSSPORTS.COM</a></li>
                <li><a href="register.php" rel="noopener" data-lc="Header-Navigation" data-ll="247sports" data-la="network-bar">247SPORTS</a></li>
                <li class="network-bar-link-mp" data-lc="Header-Navigation" data-ll="maxpreps" data-la="network-bar"><a href="register.php">MAXPREPS</a></li>
            </ul>

            <div class="social">
                <span>FOLLOW MAXPREPS</span>

                <a class="facebook" href="register.php" rel="noopener" aria-label="MaxPreps on Facebook" data-lc="Header-Navigation" data-ll="facebook" data-la="network-bar">
                    <i class="fa fa-facebook"></i>
                </a>
                <a class="twitter" href="register.php" rel="noopener" aria-label="MaxPreps on Twitter" data-lc="Header-Navigation" data-ll="twitter" data-la="network-bar">
                    <i class="fa fa-twitter"></i>
                </a>
                <a class="instagram" href="register.php" rel="noopener" aria-label="MaxPreps on Instagram" data-lc="Header-Navigation" data-ll="instagram" data-la="network-bar">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark main-navbar">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" onclick="openNav()">
                <i class="fa fa-bars"></i>
            </button>
            <div class="header-button header-button-logo">
                <a class="logo" href="register.php"><img src="img/mp_logo.webp" alt="MaxPreps Logo"></a>
            </div>
            <div id="menubar">
                <div id="actions" class="actions" style="display: none;">
                    <a class="logo" href="register.php">
                        <img height="28" src="img/img/mp_logo.webp" alt="MaxPreps Mobile Header Logo">
                    </a>
                    <button type="button" class="close" onclick="closeNav()">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a href="register.php"><span class="header-button-text">Football</span></a></li><li class="nav-item"><a href="register.php"><span class="header-button-text">Baseball</span></a></li><li class="nav-item"><a href="register.php"><span class="header-button-text">B.Basketball</span></a></li><li class="nav-item"><a href="register.php"><span class="header-button-text">G.Basketball</span></a></li><li class="nav-item"><a href="register.php"><span class="header-button-text">G.Volleyball</span></a></li><li class="nav-item"><a href="register.php"><span class="header-button-text">...</span></a></li>              </ul>
                <div class="link-set link-set-social" id="sosmed" style="display:none">
                    <a href="register.php" rel="noopener" aria-label="MaxPreps on Facebook"><i class="fa fa-facebook"></i></a>
                    <a href="register.php" rel="noopener" aria-label="MaxPreps on Twitter"><i class="fa fa-twitter"></i></a>
                    <a href="register.php" rel="noopener" aria-label="MaxPreps on YouTube"><i class="fa fa-youtube-play"></i></a>
                    <a href="register.php" rel="noopener" aria-label="MaxPreps on Instagram"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
            <div class="header-button-membership">
                <a href="register.php"><span>SIGN IN</span></a>
            </div>
        </div>
    </nav>
</div>


<div class="ticker_wrap">
</div>


<div id="outer_wrap" style="transform: none;">
    <div id="inner_wrap" class="inner-wrap">
        <div id="content_wrap" class="content-wrapper">
            <div class="container top">
                <div class="card">
                    <div class="card-body view-card">
                        <div class="video row">
                            <center>
                                <a href="register.php">
                                    <div class="header-wrapper" style="margin-top:10px;">
                                        <center>
                                            <h5 style="color:white;background: #e62017;padding: 10px;">  <span class="match">High School Football</span> Live Stream</h5>
                                        </center>
                                    </div>
                                    <h1 class="text-center media-heading" style="color:white;"></h1>
                                </a>
                                <div class="video-screen">
                                    <a href="register.php">
                                        <div class="overlay-video"></div>
                                        <div class="percent-container">
                                            <p><img class="loader" src="img/video-throbber.webp" alt=""></p>
                                            <p class="percent"></p>
                                        </div>
                                        <div class="popup-time">
                                            <p class="mt-3">Starts in <span id="countdown">00:03</span></p>
                                        </div>
                                    </a>
                                    <div class="popup-container">
                                        <a href="register.php">
                                            <div class="popup-text">Streaming is Only Available for Registered Users. Create Free Account to Access <span class="match">High School Football</span> Live Stream.</div>
                                        </a>
                                        <a href="register.php" class=" btn btn-primary">
                                            CONTINUE STREAMING
                                        </a>
                                    </div>
                                </div>
                                <div class="controls">
                                    <div class="small-1 medium-1 large-1 no-col-hd-pad columns pause-play"><i class="icon-play"></i><a href="register.php" class=""><i class="icon-pause"></i></a></div>
                                    <div class="small-8 medium-7 large-6 columns">
                                        <div class="time">
                                            <div class="time-full buffer-play"></div>
                                            <div class="time-buffer buffer"></div>
                                        </div>
                                    </div>
                                    <div class="small-1 medium-1 columns hide-for-large-up volume-icon"><i class="icon-vol"></i></div>
                                    <div class="small-0 medium-0 large-3 columns no-col-left-pad show-for-large-up vol-wrapper">
                                        <div class="small-0 medium-0 large-1 columns"><i class="icon-vol"></i></div>
                                        <div class="small-0 medium-0 medium-9 columns"><input type="text" data-slider="true" value="0.4" data-slider-highlight="true" style="display:none;"></div>
                                    </div>
                                    <a href="register.php" class=" fullscreen"><i class="icon-fullscreen"></i></a>
                                    <div class="small-1 medium-1 large-1 no-col-hd-pad columns live-msg">
                                        <img src="img/red-47688_1280.webp" class="red-dot" style="display: inline-block; opacity: 0.745452;"> LIVE
                                    </div>
                                </div>
                                <div class="col-6">
                                    <a href="register.php" class="btn btn-primary mt-3">SIGN UP NOW</a>
                                </div>
                                <div class="col-12">
                                    <a href="register.php">
                                        <div class="header-wrapper mt-5 mb-3" style="margin-top:10px;">
                                            <img class="hd" width="100%" src="img/hd.webp" alt="">
                                        </div>
                                    </a>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="komen col mt-4">
                    <textarea class="komentar" placeholder="Add a comment..."></textarea>
                    <div class="box">
                        <div class="kiri">
                        </div>
                        <div class="kanan">
                            <a href="register.php" class="btn btn-primary btn-sm">Post</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>
    <a class="mp-logo" href="register.php" aria-label="MaxPreps Homepage"><img src="img/mp_logo.webp" alt="MaxPreps Logo"></a>
    <div class="link-set link-set-social" data-js-hook="footer-social-links">
        <a href="register.php" aria-label="MaxPreps on Facebook" rel="noopener"><i class="fa fa-facebook"></i></a>
        <a href="register.php" aria-label="MaxPreps on Twitter" rel="noopener"><i class="fa fa-twitter"></i></a>
        <a href="register.php" aria-label="MaxPreps on YouTube" rel="noopener"><i class="fa fa-youtube-play"></i></a>
        <a href="register.php" aria-label="MaxPreps on Instagram" rel="noopener"><i class="fa fa-instagram"></i></a>
    </div>
    <div class="link-set link-set-resources">
       <span class="item support"><a href="register.php" rel="nofollow noopener">Support</a></span>
        <span class="item subscribe"><a href="register.php" rel="nofollow noopener noreferrer">Subscribe</a></span>
        <span class="item privacy"><a href="register.php" rel="nofollow noopener noreferrer">Privacy Policy</a></span>
        <span class="item cookies"><a href="register.php" rel="nofollow noopener noreferrer">Cookies Policy</a></span>
        <span class="item toc"><a href="register.php" rel="nofollow noopener noreferrer">Terms of use</a></span>
        <span class="item donotsell"><a href="register.php" rel="nofollow noopener noreferrer">Do Not Sell My Personal Information</a></span>
        <span class="item careers"><a href="register.php" rel="nofollow noopener noreferrer">Careers</a></span>
        <span class="item advertise"><a href="register.php" rel="nofollow noopener noreferrer">Advertise</a></span>
        <span class="item DMCA"><a href="register.php" rel="nofollow noopener noreferrer">DMCA</a></span>
    </div>
    <img class="cbs-sports" src="img/c-b-s-sports-digital.webp" alt="MaxPreps, a entity of CBS Sports Digital">
    <div class="legalese">
        <div class="copyright">© 2005-2022 CBS Interactive. All rights reserved.</div>
        <div class="trademark">MaxPreps is a registered trademark of CBS Broadcasting Inc. </div>
    </div>
</footer>
<script src="css/popper.min.js" ></script>
<script src="css/bootstrap.min.js"></script>
<script src="css/app.js"></script>
<script src="css/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        $('#ad-block-manager').remove();
    });
    var $ticker = $('[data-ticker="list"]'),
        tickerItem = '[data-ticker="item"]'
    itemCount = $(tickerItem).length,
        viewportWidth = 0;

    function setupViewport() {
        $ticker.find(tickerItem).clone().prependTo('[data-ticker="list"]');

        for (i = 0; i < itemCount; i++) {
            var itemWidth = $(tickerItem).eq(i).outerWidth();
            viewportWidth = viewportWidth + itemWidth;
        }

        $ticker.css('width', viewportWidth);
    }

    function animateTicker() {
        $ticker.animate({
            marginLeft: -viewportWidth
        }, 100000, "linear", function() {
            $ticker.css('margin-left', '0');
            animateTicker();
        });
    }

    function initializeTicker() {
        setupViewport();
        animateTicker();

        $ticker.on('mouseenter', function() {
            $(this).stop(true);
        }).on('mouseout', function() {
            animateTicker();
        });
    }

    initializeTicker();
</script>






<script>

if(window.location.search){
  const urlParams = new URLSearchParams(window.location.search);
  $('.match').text(urlParams.get('v'));
}
</script>


</body>
<!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,4725661,4,0,0,0,00010000']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?4725661&101" alt="" border="0"></a></noscript>
<!-- Histats.com  END  -->

</html>


