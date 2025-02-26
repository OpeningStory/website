// DEFERRED STUFF
$(document).on('click', '.open-menu-button', function () {
  $(this).hide();
  $('.close-menu-button').show();
  $('.page').toggleClass('menu-open');
  $('.menu-panel').toggleClass('open');
});

$(document).on('click', '.close-menu-button', function () {
  $(this).hide();
  $('.open-menu-button').show();
  $('.page').toggleClass('menu-open');
  $('.menu-panel').toggleClass('open');
});

$(document).ajaxStop(function(){

    if (document.body.classList.contains('page-work')) {
      $(".lazy").Lazy({ 
        scrollDirection: 'vertical',
        effect: 'fadeIn',
        effectTime: 500,
        threshold: 0,
        visibleOnly: true
      });
    }
    
});

$(document).ready(function() {

  // SHOWREAL PLAY/PAUSE

  var video = document.getElementById('showreel');

  $(document).on('click', '.video-container__button', function () {   
    
    $(this).toggleClass('playing');
    if ( $(this).hasClass('playing') ) {
      video.play();
    }
    else {
      video.pause();
    }

  });

  // WORKS

  if (document.body.classList.contains('page-work')) {

    var projectsData = "http://192.168.1.2:80/web/assets/data/projects.json";

    $.getJSON( projectsData, {
      format: "json",
      type: 'GET',
      dataType: 'jsonp',
      CORS: true ,
      contentType:'application/json',
      secure: true,
      headers: {
      'Access-Control-Allow-Origin': '*',
      }
    })
      .done(function( data ) {

      $.each( data.projects, function( i, project ) {

        $('.projects-feed').append(
            '<div class="container" >' +
              '<div class="row" >' +
                '<div class="col-100" >' +
                 '<a class="block-link" href="' + data.projects[i].link + '" >' +
                   '<img data-src="' + data.projects[i].image + '" alt="image for ' + data.projects[i].name + '" class="lazy fluid-img corner-radius-img medium-margin-bottom" width="1600" height="1200" >' +
                 '</a>' +
              '</div>' +
              '</div>' +
            '</div>' +
            '<div class="container-small" >' +
              '<div class="row" >' +
                '<div class="row" >' +
                  '<div class="col-25" >' +
                    '<p class="text-regular text-color-secondary small-margin-bottom line-height-100 show-on-desktop-only">' + data.projects[i].year + '</p>' +
                  '</div>' +
                  '<div class="col-75 large-margin-bottom" >' +
                    '<a class="block-link" href="' + data.projects[i].link + '" >' +
                       '<h2 class="no-margin-top">' + data.projects[i].name + '</h2>' +
                    '</a>' +
                    '<p class="text-regular text-color-secondary small-margin-bottom">' + data.projects[i].description + '</p>' +
                    '<p class="text-small text-color-secondary no-margin">' + data.projects[i].category + ' &nbsp;&nbsp;&mdash;&nbsp;&nbsp; ' + data.projects[i].type + ' </p>' +
                  '</div>' +
                '</div>' +
              '</div>' +
            '</div>'
        );

      });

    });
  }

  // SMOOTH SCROLL
  $('a[href*="#"]')
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) {
            return false;
          } else {
            $target.attr('tabindex','-1');
            $target.focus();
          };
        });
      }
    }
  });

}); // END Document.ready

// LIGHTBOX

$(document).on('click', '.zoomlightbox-trigger', function () {

  $('body').css( "overflow-y", "hidden" );

  var lightboximage = $(this).attr('src');
  var imagefilename = lightboximage.slice(lightboximage.lastIndexOf('/') + 1); // get end of the string after the last occurence of /

  $('body').prepend(
    '<div class="zoomlightbox-container">' +
      '<div class="zoomlightbox-image-name">' + imagefilename + ' </div>' +
      '<img src="' + lightboximage + '" class="zoomlightbox-image"/>' +
      '<div class="close-zoomlightbox">Click/tap to close</div>' +
    '</div>'
  );

});

$(document).on('click', '.zoomlightbox-container', function () {
  $(this).remove();
  $('body').css( 'overflow-y', 'auto' );
});

// MOMENTS

if (document.body.classList.contains('page-moments') || document.body.classList.contains('page-sketchbook')) {

  $(".lazy").Lazy({ 
    scrollDirection: 'vertical',
    effect: 'fadeIn',
    effectTime: 500,
    threshold: 0,
    visibleOnly: true
  });

}