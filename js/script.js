$(document).ready(function(){
  $('.menu-icon').click(function() {
      $(this).toggleClass('open');
      $('.menu').toggleClass('menu-op');
      $('.bgvideo').toggleClass('bg-gray');
      $('.menu-sec a').click(function () {
        $('.menu').removeClass('menu-op');
        $('.menu-icon.open').removeClass('open');
      });
  })
    window[$('body').attr('data-page')]();
    $('nav.menu ul li a').click(function(){
        $('title').text($(this).attr('data-title'));
        $('body').attr('data-page', $(this).attr('data-page'));
        window.history.pushState({}, $(this).attr('data-title'), $(this).attr('href'));
        loadAjax($(this).attr('href'));
        return false;
    });
    $(window).on('popstate', function(){
        url = window.location.href.replace($('base').attr('href'), '');
        loadAjax(url);
    });
});

function loadAjax(url)
{
    $.ajax({
        url: url,
        type: 'post',
        dataType: 'html',
        cache: false,
        beforeSend: function(xhr){
            $('.inner-ajax *').off();
        },
        success: function(result, status, xhr){
            $('.inner-ajax').html(result);
            window[$('body').attr('data-page')]();
        }
    });
}

//Pages functions
//Home
function home()
{
    console.log('This is home page!');
    ion.sound({
    sounds: [

        {
            name: "sound_03",
            volume: 0,
            preload: false,
            loop: true
        }
    ],
    volume: 0.5,
    path: "sound/",
    preload: true
});
    var foo = 0;
    ion.sound.play("sound_03", {
        volume: 1
    });
    $('body').click(function() {
        foo ^= 1;
        if(foo == 1){
          ion.sound.play("sound_03", {
              volume: 1
          });
        }else{
          ion.sound.pause("sound_03");
        }
    })
}
//Projects
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
//service
function service()
{
    console.log('This is service page!');
}
