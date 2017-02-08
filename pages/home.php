<!--<div class="over-text">-->
<!--  <img src="img/logo.png" alt="" />-->
<!--</div>-->
<!--<div class="bgvideo">-->
<!--    <video poster="http://www.nightshiftpost.com/wp-content/uploads/2016/04/ysl-vignette-mobile-1600x0-c-default.jpg" loop="loop" autoplay preload="metadata">-->
<!--    	<source src="img/160920_WORK_LOOP_HOME.webm" type="video/webm">-->
<!--    	<source src="img/160920_WORK_LOOP_HOME.mp4" type="video/mp4">-->
<!--    </video>-->
<!--</div>-->
<!--<div class="bgvideo bgvideo2">-->
<!--    <video id="video" poster="http://www.nightshiftpost.com/wp-content/uploads/2016/04/ysl-vignette-mobile-1600x0-c-default.jpg" loop="loop" autoplay preload="metadata">-->
<!--      <source src="img/160920_WORK_LOOP_HOME.webm" type="video/webm">-->
<!--      <source src="img/160920_WORK_LOOP_HOME.mp4" type="video/mp4">-->
<!--    </video>-->
<!--</div>-->

<!--http://trainrobber.com/-->

<script src="js/greensock/EasePack.min.js"></script>
<script src="js/greensock/TweenMax.min.js"></script>
<script>
    var loaded1 = false;
    var loaded2 = false;
    var loaded3 = false;
    var loaded4 = false;
    var loaded5 = false;
    var preload;
    var preloaderTimeout = 500;
    var vid, videoType;
    var windowHeight, windowWidth, halfWindowWidth, halfWindowHeight;
    var currentPage;

    var options = {
        useEasing : true,
        useGrouping : true,
        separator : ',',
        decimal : '.',
        prefix : '',
        suffix : ''
    }
    var digitsScrolled = false;

    // PROJECTS
    var projects = ['','','','','','','','','','','','','','','','','','','','',''];
    var project1, project2, project3, project4, project5, project6, project7, project8, project9, project10, project11, project12, project13, project14, project15, project16, project17, project18, project19, project20, project21;
    var projectSet1, projectSet2, projectSet3, projectSet4, projectSet5, projectSet6, projectSet7;

    var newProjectNo1;
    var newProjectNo2;
    var newProjectNo3;

    var newProject1;
    var newProject2;
    var newProject3;

    var totalProjectsCalculated = false;
    var totalProjects;
    var totalProjectSets;

    // DIRECTORS
    var directors = ['','','','','','','','','','','','','','','','','','','',''];
    var director1, director2, director3, director4, director5, director6, director7, director8, director9, director10, director11, director12, director13, director14, director15, director16, director17, director18, director19, director20;
    var directorSet1, directorSet2, directorSet3, directorSet4, directorSet5, directorSet6, directorSet7, directorSet8, directorSet9, directorSet10, directorSet11, directorSet12, directorSet13, directorSet14, directorSet15, directorSet16, directorSet17, directorSet18, directorSet19, directorSet20;;

    var newDirectorNo1;
    var newDirectorNo2;

    var newDirector1;
    var newDirector2;
    var newDirector3;

    var totalDirectorsCalculated = false;
    var totalDirectors;
    var totalDirectorSets;

    var scrollActive = true;

    var closeMoving;

    var panoSizeX;
    var panoSizeY;
    var panoAngleIntensity

    var panoramaMouseX;
    var panoramaMouseY;
    var panoramaAngleY;
    var panoramaAngleX;
    var panoMouseXBase;
    var panoHalf;
    var panoHalfHeight;

    var panoFallback = false;
    var panoFallbackVar = 1;

    var videoSweepBrowser;
    var preloaderVidUnmask = true;

    var mouseInactive = false;

    // ELEMENT VARIABLE DECLARATION
    var wrapper = $('.wrapper');
    var mainTitle = $('.js-main-title');
    var pageTitle = $('.page-title');
    var listNav = $('.list-nav');
    var body = $('body');
    var indicatorNavWrap = $('.indicator-nav');
    var indicatorNav = $('.indicator-nav .indicator');
    var protector = $('.protector');
    var workLetterOneHitArea = $('.letter-list .letter-wrap:nth-child(1) .hit-area, .letter-list .letter-wrap:nth-child(1) .work-content');
    var workLetterTwoHitArea = $('.letter-list .letter-wrap:nth-child(2) .hit-area, .letter-list .letter-wrap:nth-child(2) .work-content');
    var workLetterThreeHitArea = $('.letter-list .letter-wrap:nth-child(3) .hit-area, .letter-list .letter-wrap:nth-child(3) .work-content');
    var fullSizeDiv = $('.js-full-size');
    var littlStar = $('.littlstar-player');
    var fillScreenVid = document.getElementById("js-vid-fill-screen");
    var fillScreenVidJQ = $('#js-vid-fill-screen');
    var mainContent = $('main');
    var bodyElement = $('body');
    var ThreeDPanoParent = $('.threed-panorama');

    var mountainsBgIMG = $('.mountains-bg-img');
    var homePanoTitle = $('.threed-panorama .main-title');
    var vidClickContainer = $('.vid-click-transition');
    var vidClickContainerVideo = $('.vid-click-transition video');
    var vidClickFallback = $('.vid-click-fallback');
    var openMap = $('.js-open-map');
    var mobRemove = $('.mob-remove');

    var youTubePlaying = true;
    var project_YouTube = $('.hero .youtube-embed');
    var project_PositionChecker = $('.position-checker');
    var project_PositionCheckerLow = $('.position-checker-low');
    var project_ParallaxHero = $('.parallax-hero');
    var turnedOff = $('*[data-turned-off="off"]');

    var mobListBtn = $('.mob-list-btn');

    var thisNodeLink
    var allHomeNodes=['', '', '', '', '', '', '', '', '', ''];
    var homeNode=['', '', '', '', '', ''];
    var overlayNodes = $('.overlay-nodes .pano-icon');
    // IN ORDER THESE MEAN:
    // NODE X POS, NODE Y POS, TITLE 1, TITLE 2, CONTENT H@
    var closeCursor = $('.close-cursor');

    var pageChangeVeil = $('.js-page-change-veil');
    var panoramaObject = $('.panorama-object');
    var innerPanoramaObject = $('.inner-panorama-object');
    var radarSpin = $('.js-radar-spin');
    var externalLink = $('.js-external-link');
    var openPanoContent = $('.js-open-pano-content');
    var closePanoContent = $('.js-close-pano-content');
    var panoContent = $('.pano-overlay-content');
    var movieBars = $('.movie-bars');
    var projectNav = $('nav.project-nav');
    var nextPrevNav = $('nav.left-nextprev');

    var openContact = $('.js-open-contact');
    var closeContact = $('.js-close-contact');
    var contactWrap = $('.contact-wrap');


    $(document).ready(function () {
        mountainsBG = $('.mountains-bg');
        radarSpin = $('.js-radar-spin');
        panoramaObject = $('.panorama-object');
        mainTitle = $('.js-main-title');
        sizeHandler();
        panoSizeHandler();
    });
    function sizeHandler() {
        windowWidth = $(window).innerWidth();
        windowHeight = $(window).height();
        halfWindowWidth = windowWidth / 2;
        halfWindowHeight = windowHeight / 2;
        fullSizeDiv.css({
            width : windowWidth,
            height : windowHeight
        });

        if( windowWidth <= 900) {
            body.addClass('touch-logic');
            videoSweepBrowser = 'false';
            mobRemove.remove();
        } else {
            body.removeClass('touch-logic');
        }
    }
    function panoSizeHandler() {
        panoSizeX = windowWidth * 0.2;
        panoSizeY = windowWidth * 0.07;
        panoHalf = windowWidth/2;
        panoHalfHeight = windowHeight/2;
        panoAngleIntensity = 1300 / windowWidth;
        panorama();
    }
    function panorama(e) {
        $( "body" ).mousemove(function(e) {
            var mouseX = e.pageX;
            var mouseY = e.pageY;
            panoramaCalcs(mouseX, mouseY, 2.5);
        });
    }

    function panoramaCalcs(mX, mY, objectsSpeed) {

        panoMouseXBase = (mX-panoHalf)/panoHalf;
        panoMouseYBase = (mY-panoHalfHeight)/panoHalfHeight;


        panoramaMouseX = panoMouseXBase * -panoSizeX;
        panoramaMouseY = ((mY - panoHalf) / panoHalf) * -panoSizeY;

        panoramaAngleX = panoramaMouseX / -4;
        panoramaAngleY = panoramaMouseY / 8;

        TweenMax.to(radarSpin,
            1, {
                rotation: panoMouseXBase*60
            }
        );
        TweenMax.to(mountainsBG,
            1.7, {
                x: panoramaMouseX,
                y: panoramaMouseY
            }
        );

        panoramaObject.each(function() {
            panoramaObjectMovement($(this), objectsSpeed);
        });
    }

    function panoramaObjectMovement(e, objectsSpeed) {
        thisX = e.attr('data-pano-x');
        thisY = e.attr('data-pano-y');
        panoObjectX = (((thisX - panoMouseXBase)*panoHalf)*1.2);
        panoObjectY = (((thisY - panoMouseYBase)*panoHalfHeight)/1.5);
        angleObjectX = ((panoObjectX/-12)*panoFallbackVar)*panoAngleIntensity;
        angleObjectY = ((panoObjectY/20)*panoFallbackVar)*panoAngleIntensity;
        TweenMax.to(e,
            objectsSpeed, {
                x: panoObjectX,
                y: panoObjectY,
                rotationY: angleObjectX,
                rotationX: angleObjectY,
                ease: 'circ.easeInOut'
                // MAKE SURE ROTATIONS ARE HANDLED SEPARATELY FOR NON-SAFARI!
            }
        );
    }
</script>
                        <!--<div class="wraper">-->
                        <!--    <div class="mountains-bg">-->
                        <!--        <img src="img/1.jpg">-->
                        <!--    </div>-->
                        <!---->
                        <!--</div>-->
                        <!--<div class="radar-wrap pos-a">-->
                        <!---->
                        <!--    <ul class="radar-items full-size pos-a-t-l">-->
                        <!--        <li></li>-->
                        <!--        <li></li>-->
                        <!--        <li></li>-->
                        <!--        <li></li>-->
                        <!--        <li></li>-->
                        <!--        <li></li>-->
                        <!--        <li></li>-->
                        <!--        <li></li>-->
                        <!--        <li></li>-->
                        <!--        <li></li>-->
                        <!--    </ul>-->
                        <!--    <div class="radar-view full-size pos-a-t-l js-radar-spin">-->
                        <!--        <div class="rim full-size pos-a-t-l"></div>-->
                        <!--        <div class="sight full-size pos-a-t-l"></div>-->
                        <!--    </div>-->
                        <!---->
                        <!--    <div class="radar-ring full-size pos-a-t-l"></div>-->
                        <!--</<d>-->


<div class="wrapper">
    <div class="threed-panorama viewport-full-size">
        <div class="mountains-bg-wrap pos-a-t-l full-size">
            <div class="mountains-bg pos-a-t-l full-size">
                <div class="mountains-bg-img pos-a-t-l full-size" data-zoomed="on"></div>
            </div>
            <div class="pos-a-t-l full-size blend-multiply mountains-vid">
                <video id="" class="film-noise pos-a-t-l"  autoplay preload="auto" loop="" style="width: 100%; position: absolute;">
                    <source src="video/film_noise.webm">
                    <source src="video/film_noise.mp4">

                </video>
            </div>

            <!-- MAIN PANORAMA TITLE -->

            <div class="panorama-elements-wrap pos-a-t-l full-size">
                <div class="scroll-mouse-marque pos-f move-mouse"></div>

                <!-- PANORAMA ICON CLICKABLES -->

                <div class="overlay-nodes full-size pos-a-t-l">

                    <div class="pos-a-center pano-icon panorama-object js-open-pano-content"  data-pano-x="" data-pano-y="" data-n="1">
                        <div class="rings-icon">
                            <div class="ring-node-icon pos-a-center"></div>
                            <div class="ring-icon-content pos-a">
                                <h5 class="letter-split"></h5>
                                <h4 class="letter-split"></h4>
                            </div>
                        </div>
                    </div>
                    <div class="pos-a-center pano-icon panorama-object js-open-pano-content"  data-pano-x="" data-pano-y="" data-n="2">
                        <div class="rings-icon">
                            <div class="ring-node-icon pos-a-center"></div>
                            <div class="ring-icon-content pos-a">
                                <h5 class="letter-split"></h5>
                                <h4 class="letter-split"></h4>
                            </div>
                        </div>
                    </div>
                    <div class="pos-a-center  pano-icon panorama-object js-open-pano-content"  data-pano-x="" data-pano-y="" data-n="3">
                        <div class="rings-icon">
                            <div class="ring-node-icon pos-a-center"></div>
                            <div class="ring-icon-content pos-a">
                                <h5 class="letter-split"></h5>
                                <h4 class="letter-split"></h4>
                            </div>
                        </div>
                    </div>
                    <div class="pos-a-center  pano-icon panorama-object js-open-pano-content"  data-pano-x="" data-pano-y="" data-n="4">
                        <div class="rings-icon">
                            <div class="ring-node-icon pos-a-center"></div>
                            <div class="ring-icon-content pos-a">
                                <h5 class="letter-split"></h5>
                                <h4 class="letter-split"></h4>
                            </div>
                        </div>
                    </div>
                    <div class="pos-a-center  pano-icon panorama-object js-open-pano-content"  data-pano-x="" data-pano-y="" data-n="5">
                        <div class="rings-icon">
                            <div class="ring-node-icon pos-a-center"></div>
                            <div class="ring-icon-content pos-a">
                                <h5 class="letter-split"></h5>
                                <h4 class="letter-split"></h4>
                            </div>
                        </div>
                    </div>

                    <div class="pos-a-center pano-icon panorama-object js-open-pano-content"  data-pano-x="" data-pano-y="" data-n="6">
                        <div class="rings-icon">
                            <div class="ring-node-icon pos-a-center"></div>
                            <div class="ring-icon-content pos-a">
                                <h5 class="letter-split"></h5>
                                <h4 class="letter-split"></h4>
                            </div>
                        </div>
                    </div>

                    <div class="pos-a main-title js-main-title panorama-object" data-pano-x="0" data-pano-y="0">
                        <div class="main-lockup">
                            <div class="marque larger"></div>
                            <div class="arc-wrap large">
                                <h5 class="arc letter-split">Creators of</h5>
                            </div>
                            <h1 class="timeout-split extender-after"><span class="letter-split">Virtual</span><span class="letter-split">Reality</span></h1>
                            <!-- <div class="pano-emblem rotate-icon"></div> -->

                            <h5 class="larger">Welcome to Trainrobber | An AR &amp; VR studio</h5>
                            <a href="#" class="cta arrow-wrap js-play-home-showreel">Meet Trainrobber <span class="arrow"><span></span><span></span></span></a>
                            <!-- <h4 class="desktop-only large">Move mouse to explore content</h4> -->                                    </div>
                    </div>

                </div>

                <!-- PANORAMA LETTERFORM FOR PROJECTS -->

                <!-- PROJECT 1 -->

                <div class="letter-wrap blend-screen pos-a-center panorama-object home-proj-1-mask"  data-pano-x="0.85" data-pano-y="0.6">
                    <div class="pos-a-center mask-letter-wrap blend-lig">
                        <div class="pos-a-t-l mask-letter video-mask" data-mask-letter="">
                            <video id="work-letter-video-one" class="letter-video" poster="/img/bg/white-bg.png" autoplay preload="auto" loop="" style="width: 100%; position: absolute;">
                                <source src="video/letter-smoke.webm">
                                <source src="video/letter-smoke.mp4">
                            </video>
                        </div>
                        <div class="hit-area js-button-transition" data-transition-link=""></div>
                    </div>
                </div>

                <div class="work-content pos-a-center panorama-object home-proj-1-info js-button-transition"  data-pano-x="0.85" data-pano-y="0.3" data-transition-link="">
                    <h5 class="">Project</h5>
                    <h4 class="project-name large">MOBILE AUGMENTED REALITY EXPERIENCES</h4>
                    <a href="/work/mobile-augmented-reality-experiences" class="cta arrow-wrap js-button-transition">View Project <span class="arrow"><span></span><span></span></span></a>                            </div>

                <!-- PROJECT 2 -->

                <div class="letter-wrap blend-screen pos-a-center panorama-object home-proj-2-mask"  data-pano-x="-1.03" data-pano-y="0.6">
                    <div class="pos-a-center mask-letter-wrap blend-lig">
                        <div class="pos-a-t-l mask-letter video-mask " data-mask-letter="">
                            <video id="work-letter-video-one" class="letter-video"  autoplay preload="auto" loop="" style="width: 100%; position: absolute;">
                                <source src="video/letter-smoke.webm">
                                <source src="video/letter-smoke.mp4">
                            </video>
                        </div>
                        <div class="hit-area js-button-transition" data-transition-link=""></div>
                    </div>
                </div>

                <div class="work-content pos-a-center panorama-object home-proj-2-info js-button-transition"  data-pano-x="-1" data-pano-y="0.3" data-transition-link="">
                    <h5 class="">Project</h5>
                    <h4 class="project-name large">A Chair in a Room: Greenwater</h4>
                    <a href="/work/a-chair-in-a-room-greenwater" class="cta arrow-wrap js-button-transition">View Project <span class="arrow"><span></span><span></span></span></a>                            </div>

                <!-- H3 MINI LOCKUPS TO EXTERNAL CONTENT -->

                <div class="pos-a-center title-extender mini-title-lockup panorama-object js-button-transition" data-transition-link="/directors/" data-pano-x="-0.75" data-pano-y="0.3">
                    <div class="marque pano-emblem"></div>
                    <div class="arc-wrap">
                        <h5 class="arc letter-split">Meet our</h5>
                    </div>
                    <h3 class="">Directors</h3>
                </div>

                <div class="pos-a-center title-extender mini-title-lockup panorama-object js-button-transition" data-transition-link="/journal/"  data-pano-x="-0.83" data-pano-y="-1.05" >
                    <div class="journal-icon pano-emblem"></div>
                    <div class="arc-wrap">
                        <h5 class="arc letter-split">Read our</h5>
                    </div>
                    <h3 class="">Journal</h3>
                </div>

                <div class="pos-a-center title-extender mini-title-lockup panorama-object js-button-transition" data-transition-link="/work/"  data-pano-x="0.56" data-pano-y="-1">
                    <div class="marque pano-emblem"></div>
                    <div class="arc-wrap">
                        <h5 class="arc letter-split">View our</h5>
                    </div>
                    <h3 class="">Projects</h3>
                </div>
                <div class="pos-a-center title-extender mini-title-lockup panorama-object js-external-link" data-external-link="http://store.steampowered.com/app/427760/"  data-pano-x="1.36" data-pano-y="0.4">
                    <div class="marque pano-emblem"></div>
                    <div class="arc-wrap">
                        <h5 class="arc letter-split">Our work on</h5>
                    </div>
                    <h3>Steam</h3>
                </div>
            </div>

        </div>

        <div class="radar-wrap pos-a">

            <ul class="radar-items full-size pos-a-t-l">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <div class="radar-view full-size pos-a-t-l js-radar-spin">
                <div class="rim full-size pos-a-t-l"></div>
                <div class="sight full-size pos-a-t-l"></div>
            </div>

            <div class="radar-ring full-size pos-a-t-l"></div>
        </div>

        <ul class="movie-bars">
            <li></li>
            <li></li>
        </ul>

        <div class="pano-overlay-content pos-a-t-l generic-bg full-size"></div>

        <div class="pano-overlay-content blend-screen pos-a-t-l">

            <div class="vertical-flex-center-parent pos-a-t-l viewport-full-size">
                <div class="pos-a-center mask-letter-wrap">
                    <div class="full-size pos-a-t-l js-mask-letter-wrap">
                        <video id="work-letter-video-three" class="letter-video pos-a-t-l"  autoplay preload="auto" loop="">
                            <source src="video/letter-smoke.webm">
                            <source src="video/letter-smoke.mp4">
                        </video>
                        <div class="pos-a-t-l mask-letter video-mask mask-marque"></div>
                    </div>
                </div>
                <div class="intro-copy" data-type="news">
                    <div class="article-icon pos-a-center" data-icon-id=""></div>
                    <h4 class="slanted-type">Header here</h4>
                    <h2 class="slanted-type">Nike LA asked us to create this consumer profile to help them better understand part of their core demographic.</h2>
                    <p>We are a collective of the world’s most daring and dangerous virtual reality storytellers, banded to seize the projects that lie between impossible and beautiful. Our mission is to let you be anyone you want, one minute at a time.</p>
                    <a href="#" class="close-btn active js-close-pano-content">
                                    <span class="rings-icon">
                                        <div class="close-icon rings-icon"></div>
                                    </span>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>