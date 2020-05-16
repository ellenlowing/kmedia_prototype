let lst = 0;
let ldir = 1; // 0: down, 1: up
let vidHover = false;

$(document).ready(() => {
  // find average color of first frame
  placeSubNav();
});

$('a').click( () => {
  // $('main').addClass('leaving');
  // $('main.leaving').css('animationPlayState', 'running');
});

// Resize
$(window).resize( () => {
  placeSubNav();
});

function placeSubNav() {
  $('.sub-nav-content').css('left', `${$('#nav-content').position().left + 0.0375 * window.innerWidth / 1.35}px`);
}

// Scroll Nav
window.addEventListener('scroll', scrollHandler, true);
function scrollHandler (e) {
  let st = document.body.scrollTop;
  let dir = st > lst ? 0 : 1;
  if(dir != ldir) {
    // change of state
    if(dir == 0) {
      $('.nav-container').removeClass('exposed').addClass('hidden');
    } else {
      $('.nav-container').removeClass('hidden').addClass('exposed');
    }
  }
  ldir = dir;
  lst = st <= 0 ? 0 : st;
}

// Video
let vidPlaying = false;
let vid = document.getElementById('vid');
vid.ontimeupdate = function () {
  if(!vidHover) {
    let t = vid.currentTime;
    t = Math.round(t);
    let min = Math.floor(t / 60);
    let sec = t - min * 60;
    sec = sec < 10 ? `0${sec}` : sec;
    let txt = `${min}:${sec}`;
    $('#vid-time').html(txt);
    let pct = t / vid.duration;
    let w = pct * ($('#vid').width()-$('#vid-time').width());
    $('#vid-time').css('left', `${w}px`);
  }
}
vid.addEventListener('playing', function() {
  $('#play-btn').css('visibility', 'hidden');
  $('#pause-btn').css('visibility', 'visible');
  setTimeout( () => {
    $('#pause-btn').css('visibility', 'hidden');
  }, 2000);
  vidPlaying = true;
});
vid.addEventListener('ended', function() {
  // $('#vid-placeholder').css('z-index', '2');
  $('#play-btn').css('visibility', 'visible');
});

vid.addEventListener('pause', function() {
  $('#pause-btn').css('visibility', 'hidden');
  $('#play-btn').css('visibility', 'visible');
  vidPlaying = false;
});
$('#play-btn').click(function() {
  if(vid.readyState != 4) vid.load();
  vid.play();
  // $('#vid-placeholder').css('z-index', '-1');
});
$('#pause-btn').click(function() {
  vid.pause();
});
$('#vid-wrapper').bind('mouseover', (e) => {
  if(vidPlaying) {
    $('#pause-btn').css('visibility', 'visible');
  } else {
    $('#play-btn').css('visibility', 'visible');
  }
});
$('#vid-wrapper').bind('mousemove', (e) => {
  let y = e.pageY - $(e.currentTarget).offset().top;
  let x = e.pageX - $(e.currentTarget).offset().left;
  if( y > 0.53125 * window.innerWidth ) {
    console.log('here');
    let pct = x / window.innerWidth;
    let t = Math.round(vid.duration * pct);
    let min = Math.floor(t / 60);
    let sec = t - min * 60;
    sec = sec < 10 ? `0${sec}` : sec;
    let txt = `${min}:${sec}`;
    $('#vid-time').html(txt);
    $('#vid-time').css('left', `${x - $('#vid-time').width()/2}px`);
    vidHover = true;
  } else {
    vidHover = false;
  }
});
$('#vid-wrapper').bind('mouseout', () => {
  $('#pause-btn').css('visibility', 'hidden');
  $('#play-btn').css('visibility', 'hidden');
  vidHover = false;
});
$('#vid-time').click( () => {
  if(vidHover) {
    let txt = $('#vid-time').html();
    let sec = parseInt(txt.substring(2, 4));
    let min = parseInt(txt.substring(0, 2));
    let t = min * 60 + sec;
    vid.currentTime = t;
  }
});
