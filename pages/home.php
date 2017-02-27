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


<script>

    // 2. This code loads the IFrame Player API code asynchronously.
    var tag = document.createElement('script');

    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    // 3. This function creates an <iframe> (and YouTube player)
    //    after the API code downloads.
    var homePlayer;
    function onYouTubeIframeAPIReady() {
        homePlayer = new YT.Player('home-player', {
            videoId: 'mt0aRV10vpE',
            suggestedQuality: 'hd1080',

            playerVars: { 'autoplay': 0, 'controls': 0, 'showinfo': 0, 'start': 0, 'wmode':'opaque' },
            events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
            }
        });
    }

    // 4. The API will call this function when the video player is ready.
    function onPlayerReady(event) {
    }

    // 5. The API calls this function when the player's state changes.
    //    The function indicates that when playing a video (state=1),
    //    the player should play for six seconds and then stop.
    var done = false;
    function onPlayerStateChange(event) {
        if (event.data == 1) {
        }
        if (event.data == 0) {
        }
    }

</script>

<div class="wrapper">
    <div class="threed-panorama viewport-full-size">
        <div class="mountains-bg-wrap pos-a-t-l full-size">
            <div class="mountains-bg pos-a-t-l full-size">
                <div class="mountains-bg-img pos-a-t-l full-size" data-zoomed="on"></div>
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
                                <img src="img/logo.png"
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
<!--                <div class="intro-copy" data-type="news">-->
<!--                    <div class="article-icon pos-a-center" data-icon-id=""></div>-->
<!--                    <h4 class="slanted-type">Header here</h4>-->
<!--                    <h2 class="slanted-type">Nike LA asked us to create this consumer profile to help them better understand part of their core demographic.</h2>-->
<!--                    <p>We are a collective of the world’s most daring and dangerous virtual reality storytellers, banded to seize the projects that lie between impossible and beautiful. Our mission is to let you be anyone you want, one minute at a time.</p>-->
<!--                    <a href="#" class="close-btn active js-close-pano-content">-->
<!--                                    <span class="rings-icon">-->
<!--                                        <div class="close-icon rings-icon"></div>-->
<!--                                    </span>-->
<!--                    </a>-->
<!--                </div>-->
            </div>
        </div>

    </div>
</div>
