// slideTogglebutton///////////////////////////
$(function(){
  $(".questionlist_answer").hide();
  $(".questionlist_title").click(function(){
    $(this).next(".questionlist_answer:not(:animated)").slideToggle();
    $(this).toggleClass("active");
  });
});

$(function(){
  $(".flow_list_collapse").hide();
  $(".flow_list_panel_2").click(function(){
    $(this).next(".flow_list_collapse:not(:animated)").slideToggle();
    $(this).children(".flow_list_title").toggleClass("active");
  });
});

// topへ戻るボタン//////////////////////////////
$(function() {
  var scrollTop = $(".scrollTop");

  $(window).scroll(function() {
    // declare variable
    var topPos = $(this).scrollTop();

    // if user scrolls down - show scroll to top button
    if (topPos > 100) {
      $(scrollTop).css({opacity:"1",transition: "all 0.3s"});
      } else {
      $(scrollTop).css("opacity", "0");
      }
  }); // scroll END
      //Click event to scroll to top
  $(scrollTop).click(function() {
    $('html, body').animate({
      scrollTop: 0
      }, 800);
        return false;
    }); // click() scroll top EMD
}); // ready() END

// 問合せへスクロール///////////////////////////
$(function(){
  $('a[href^="#"]').click(function(){
    var speed = 500;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;

$("html, body").animate({scrollTop:position}, speed, "swing");
return false;});
});

// キャンセルボタン_TOPに繊維/////////////////////////////
function submitAction(url) {
    $('form').attr('action', url);
    $('form').submit();
}
