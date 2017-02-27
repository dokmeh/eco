





///////////////////////////////////////
//global functions
///////////////////////////////////////


$(document).ready(function(){

});


///////////////////////////////////////
//Pages functions
///////////////////////////////////////

//-----------Home-----------//
function home()
{
    //home page panaroma
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
}
// end of home -----------------

//-----------Projects-----------//
function projects()
{
    console.log('This is projects page!');
    $('.project-box').click(function(){
        $('title').text($(this).attr('data-title'));
        $('body').attr('data-page', $(this).attr('data-page'));
        window.history.pushState({}, $(this).attr('data-title'), $(this).attr('href'));
        loadAjax($(this).attr('href'));
        return false;
    });
}
//Project
function project()
{
    console.log('This is project page!');
}

//Contact
function contact()
{
    console.log('This is contact page!');
}

//About
function about()
{
    console.log('This is about page!');
}
