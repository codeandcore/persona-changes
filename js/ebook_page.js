var $ = jQuery.noConflict();

(function ($) {


  $.fn.visible = function (partial) {

    var $t = $(this),
      $w = $(window),
      viewTop = $w.scrollTop(),
      viewBottom = viewTop + $w.height(),
      _top = $t.offset().top,
      _bottom = _top + $t.height(),
      compareTop = partial === true ? _bottom : _top,
      compareBottom = partial === true ? _top : _bottom;

    return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

  };

})(jQuery);


var stoper = 0;
function ebookTimer() {
  if ($(".timer_ebook").length > 0) {
    if ($(".timer_ebook").visible(true) && stoper == 0) {
      stoper = 1;
      var timeleft = 5;
      var redirectToNextEbook = setInterval(function () {
        timeleft--;
        $("#countdowntimer").text(timeleft);
        if (timeleft == 0) {
          clearInterval(redirectToNextEbook);

          if (parseInt($(".chapter_navigation .pages_count .pages_total i").text()) == parseInt($(".chapter_navigation .pages_count input#current_page").val())) {
            console.log("click is off")
            $(".chapter_navigation .pages_navigate_controls.next").off("click");
            $(".chapter_navigation .pages_navigate_controls.next").addClass("disable");
          } else {
            console.log("click is on")
            $(".chapter_navigation .pages_navigate_controls.next").trigger("click");
            return;
          }          
        }
        $(".timer_ebook .right_btn").on("click", function () {
          clearInterval(redirectToNextEbook);
          // stoper = 0;
          $(".chapter_navigation .pages_navigate_controls.next").off("click");
        });
      }, 1000);
    }
  }
}


jQuery(document).ready(function () {

  setTimeout(function () {
    var this_text = $("select#chapters option:selected").text();
    $(".scrollableList ul li").each(function (index, element) {
      var _text = $(this).text();
      // console.log(_text);
      if (_text == this_text) {
        $(this).trigger("click");
      }
    });
  }, 200);

  $(window).on('scroll',function(){
    if(stoper == 0){
        ebookTimer()
    }
  })

  $(document).on( "click", ".pages_navigate_controls.prev,.pages_navigate_controls.next", function () {
    // stoper = 0
    // ebookTimer();
    

    

    var _max = $("#current_page").attr("max");
    var _cur = $("#current_page").val();
    if ($(this).hasClass("prev")) {
      if (_cur <= 1) {
        return;
      }
      _cur--;
    } else {
      _cur++;
      if (_cur > _max) {
        return;
      }
    }
   
    $("#current_page").val(_cur);
    $("select#chapters option").removeAttr("selected");
    $("select#chapters option").each(function () {
      console.log(_cur); 
      $("select#chapters option[value=" + _cur + "]").prop("selected",true);
    });
    $(".chapter_navigation .explore .select_wrap .scrollableList .selectedOption").text($("#chapters option:selected").text());

    var chapter_no = $("#current_page").val();
    
    get_ebook_page_content_agora(chapter_no)
    var chapter_slug_val = $("option:selected", 'select#chapters').data('slug');    
    changeurl(chapter_slug_val);

  }
  );

  $(document).on("change", "select#chapters", function () {
    var chapter_no = $("option:selected", this).val();
    var chapter_slug_val = $("option:selected", this).data('slug');    
    changeurl(chapter_slug_val);
    
    $("#current_page").val(chapter_no);
    get_ebook_page_content_agora(chapter_no);

    $(".chapter_navigation .explore .down_arrow").removeClass("active")
    $(this).find(":selected").val(chapter_no);

    // stoper = 0
    // ebookTimer();
  });

  $(document).on("keyup", "input#current_page", function () {
    var _max = $("#current_page").attr("max");
    var _val = $(this).val();
    console.log(_max);
    if (parseInt(_val) > parseInt(_max)) {
      $(this).val(_max);
    }
    if (parseInt(_val) < 1) {
      $(this).val(1);
    }
    var _cur = $(this).val();
    get_ebook_page_content_agora(_cur);

    var chapter_slug_val = $("option:selected", this).data('slug');    
    changeurl(chapter_slug_val);
  });
  
  function changeurl(url)
  {
    var current_ebook_page_url = $('#current_ebook_page_url').val();
   var new_url=current_ebook_page_url+url+"/";
   window.history.pushState("data","Title",new_url);
   document.title=url;
  }
});


function get_ebook_page_content_agora(chapter_no) {
  var postid = $("#ebook_postid").val();
  var get_total_chapter = $("#get_total_chapter").val();
 
  jQuery.ajax({
    type: "post",
    dataType: "json",
    url: myAjax.ajaxurl,
    data: {
      postid: postid,
      chapter_no: chapter_no,
      get_total_chapter: get_total_chapter,   
      action: "load_page_of_ajax_ebook",

    },
    beforeSend: function () { },
    success: function (response) {

      var total_chptxxr = get_total_chapter;
      //$(".pages_total").html(total_chptr);

      var total_chptr = "/ " + '<i>' + get_total_chapter + '</i>';

      $(".pages_total").html(total_chptr);

      $("#ajax_page_ebook_content").html(response.html);
      $("input#current_page").prop("max", get_total_chapter);
      let currentVal = window.innerWidth > 767 ? jQuery("#ajax_page_ebook_content").offset().top - ($(".bannerWrap").outerHeight() - 400) : jQuery("#ajax_page_ebook_content").offset().top - ($(".bannerWrap").outerHeight() - 420);
      jQuery("html, body").animate( { scrollTop: currentVal, },1000);
      const counter = parseInt($("#current_page").val())
      setTimeout(function () { stoper = 0; }, 700);
      // ebookTimer()
      if (get_total_chapter == counter) {
        $(".timer_ebook").hide()
      } else {
        $(".timer_ebook").show()
      }

      
    },
    error: function (errorThrown) {
      console.log(errorThrown);
    },
  });
}



