jQuery(document).ready(function () {  
  //if(window.innerWidth  < 768){
  if (
    window.location.href.indexOf("page") > -1 ||
    window.location.href.indexOf("blog") > -1 ||
    window.location.href.indexOf("deal-makers") > -1 ||
    window.location.href.indexOf("gp-guide") > -1 ||
    window.location.href.indexOf("agora-news") > -1 ||
    window.location.href.indexOf("research-and-reports") > -1
  ) {
    //setSearchFocus();
  }
  //}
 

  if (window.location.href.indexOf("?search=") > -1) {
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const product = urlParams.get("search");
    $("#search").val(product);
  }
  $.urlParam = function (url, name) {
    var results = new RegExp("[?&]" + name + "=([^&#]*)").exec(url);
    return results[1] || 0;
  };
  $(document).on("click", "#blog_list_pagination a", function (e) {
    if (
      window.location.href.indexOf("resources") > -1 ||
      window.location.href.indexOf("page") > -1 ||
      window.location.href.indexOf("blog") > -1 ||
      window.location.href.indexOf("deal-makers") > -1 ||
      window.location.href.indexOf("gp-guide") > -1 ||
      window.location.href.indexOf("agora-news") > -1 ||
      window.location.href.indexOf("research-and-reports") > -1
    ) {
      //setSearchFocus();
    }
  });
  $(document).on("click", "#blog_category_list_pagination a", function (e) {

    if (
      window.location.href.indexOf("page") > -1 ||
      window.location.href.indexOf("blog") > -1 ||
      window.location.href.indexOf("deal-makers") > -1 ||
      window.location.href.indexOf("gp-guide") > -1 ||
      window.location.href.indexOf("agora-news") > -1 ||
      window.location.href.indexOf("research-and-reports") > -1
    ) {
      //setSearchFocus();
    }
  });
  $(document).on("click", ".filter .blog-cat-filter a", function () {
    $("#loader_explore").show();
    $(".tags li.active").removeClass("active");
    var cat_id = $(this).attr("data-catid");
    var cat_url = $(this).attr("data-caturl");
    $(".tab_filter_" + cat_id).addClass("active");
    if (window.innerWidth < 768 && $(".filter .tags").length > 0) {
      var $element = $(".filter .tags li.active");
      $element.removeClass("active");
      $element.addClass("active");
      var elOffset = $element.offset().left;
      var elWidth = $element.outerWidth(true);
      var menuScrollLeft = $(".filter .tags").scrollLeft();
      var menuWidth = $(".filter .tags").width();
      var myScrollPos =
        elOffset + elWidth + menuScrollLeft - menuWidth / 2 - 70;
      $(".filter .tags").scrollLeft(myScrollPos);
    }
 
    ajax_blog_list_agora(cat_url, cat_id, 1);
  });
  $(document).on("click", ".filter .resource-blog-cat-filter a", function () {
    $("#loader_explore").show();
    $(".tags li.active").removeClass("active");
    var cat_id = $(this).attr("data-catid");
    var cat_url = $(this).attr("data-caturl");
    $(".tab_filter_" + cat_id).addClass("active");
    if (window.innerWidth < 768 && $(".filter .tags").length > 0) {
      var $element = $(".filter .tags li.active");
      $element.removeClass("active");
      $element.addClass("active");
      var elOffset = $element.offset().left;
      var elWidth = $element.outerWidth(true);
      var menuScrollLeft = $(".filter .tags").scrollLeft();
      var menuWidth = $(".filter .tags").width();
      var myScrollPos =
        elOffset + elWidth + menuScrollLeft - menuWidth / 2 - 70;
      $(".filter .tags").scrollLeft(myScrollPos);
    }
   
    ajax_resource_blog_list_agora(cat_url, cat_id, 1);
   
  });
  $(document).on("submit", "#blog-list-search-form", function (e) {

    var search_val = $("#search").val();
    if (search_val == "") {
      var surl = window.location.href;
      newurl = surl.slice(0, surl.indexOf("?search="));
     
    }
  });

  let currentPage = 1;
  let loaded_blogs = [];  
  $(document).on("click", "#read_more_author_blog_btn", function () {    
    currentPage++; 
    $("#loader_explore").show();      
    $("#read_more_author_blog_btn").hide();      
    var blog_authid = $('#blog_authid').val();
    $("#blog_category_list_ajax_response [class*='col-']").each(function(){
      let currentVal = $(this).data('blogid');
      loaded_blogs.push(currentVal)
    })
    
    jQuery.ajax({
      type: "post",
      dataType: "json",
      url: myAjax.ajaxurl,
      data: {
        blog_authid: blog_authid,
        loaded_blogs: loaded_blogs,  
        paged: currentPage,
        action: "ajax_blog_list_agora_acc_author"       
      },
      beforeSend: function () {},
      success: function (response) {
        $("#loader_explore").hide();
        $("#read_more_author_blog_btn").show();      
        if(response.max == 1) {
          $("#read_more_author_blog_btn").hide();
        }
        $("#blog_category_list_ajax_response").append(response.html);
      },
      error: function (errorThrown) {
        console.log(errorThrown);
      },
    });
  });
  let currentPage_arc = 1;
  let loaded_blogs_arc = [];  
  $('#tag_explore_more_arc_btn').on("click",function(e){
    e.preventDefault();
    currentPage_arc++; 
    var recent_post_id_hidden = $("input#recent_post_id_hidden").val();
    $("#loader_explore").show(); 
    $("#tag_explore_more_arc_btn").hide();   
   var catid =  $("#archive_field").attr("data-cat");

$("#blog_list_ajax_response [class*='col-']").each(function(){
    let currentVal = $(this).data('blogid');
    loaded_blogs_arc.push(currentVal)
  });

  var total_loaded_elem = $('.filter .search_items#blog_list_ajax_response [class*=col-]').length;
  jQuery.ajax({
    type: "post",
    dataType: "json",
    url: myAjax.ajaxurl,
    data: {   
      recent_post_id_hidden: recent_post_id_hidden,
      catid: catid,  
      loaded_blogs: loaded_blogs_arc,  
      paged: currentPage_arc,
      action: "ajax_tag_list_agora_archive"       
    },
    beforeSend: function () {},
    success: function (response) {
      $("#loader_explore").hide();
      $("#tag_explore_more_arc_btn").show();      
      if(response.max == 1) {
        $("#tag_explore_more_arc_btn").hide();
      }
      $("#blog_list_ajax_response").append(response.html);
      if (response.count_blogs == 0) {
        $("#loader_explore").hide();
        $("#tag_explore_more_arc_btn").hide();     
      }

      if(response.whole_post == total_loaded_elem){
        $("#tag_explore_more_arc_btn").hide();
      }
    },
    error: function (errorThrown) {
      console.log(errorThrown);
    },
  });

  });
});

// Scrolling Event Js
let currentPage_arc = 1;
let loaded_blogs_arc = [];

var bottomOffset = 1000;
// track if already fetching
var isFetching = false;


function isElementInViewport(el) {
  var rect = el[0].getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}





function ajax_blog_list_agora(
  cat_url = "",
  catid = "",
  page = 1,
  page_type = "blog"
) {

  var keyword = $("input#search").val();
  var recent_post_id_hidden = $("input#recent_post_id_hidden").val(); 
  jQuery.ajax({
    type: "post",
    dataType: "json",
    url: myAjax.ajaxurl,
    data: {    
      recent_post_id_hidden: recent_post_id_hidden,
      keyword: keyword,
      catid: catid,
      page: page,
      action: "ajax_tag_list_agora",
    },
    beforeSend: function () {},
    success: function (response) {
      // $('.filter_nav.filter .tagswrap #all_filter_blogs li').removeClass('active');
      $('.filter_nav.filter .tagswrap #all_filter_blogs li').removeClass('active');
      $('.filter_nav.filter .tagswrap #all_filter_blogs li.tab_filter_'+catid).addClass('active');
      var total_loaded_elem = $('.filter .search_items#blog_list_ajax_response [class*=col-]').length;
      if (response.count_blogs == 0) {
        $("#explore_more_btn").hide();
        $("#loader_explore").hide();
      }
      if (page_type == "blog") {
        
        $("#blog_list_pagination").html(response.pagination);
        $("#blog_list_ajax_response").html(response.html);
        if( $('#archive_field').val() == "archive_field"){
          $("#explore_more_btn").attr("href", "#");
          $("#archive_field").attr("data-cat", catid);
        }else{
            $("#explore_more_btn").attr("href", response.explore_btn_url);
        }
       
        $("#loader_explore").hide();
      } else {
        // $('.filter_nav.filter .tagswrap #all_filter_blogs li.tab_filter_'+catid).addClass('active');
        $("#blog_category_list_pagination").html(response.pagination);
        $("#blog_category_list_ajax_response").html(response.html);
      }

    
      if(response.whole_post < 9){      
        $("#explore_more_arc_btn").hide();
        $("#explore_more_btn").hide();
        $("#tag_explore_more_arc_btn").hide();
      }
      
    },
    error: function (errorThrown) {
      console.log(errorThrown);
    },
  });
  if (jQuery(".cs_banner").length > 0) {
    jQuery(".cs_banner .banner").removeClass("banner_bg");
  }
}
function ajax_resource_blog_list_agora(
  cat_url = "",
  catid = "",
  page = 1,
  page_type = "blog"
) {

  var keyword = $("input#search").val();
  var recent_post_id_hidden = $("input#recent_post_id_hidden").val();
  jQuery.ajax({
    type: "post",
    dataType: "json",
    url: myAjax.ajaxurl,
    data: {
      recent_post_id_hidden: recent_post_id_hidden,
      keyword: keyword,
      catid: catid,
      page: page,
      action: "ajax_resource_blog_list_agora",
    },
    beforeSend: function () {},
    success: function (response) {
      var total_loaded_elem = $('.filter .search_items#blog_list_ajax_response [class*=col-]').length;
      if (response.count_blogs == 0) {
        $("#explore_more_btn").hide();
        $("#loader_explore").hide();
      }
      if (page_type == "blog") {
        
        $("#blog_list_pagination").html(response.pagination);
        $("#blog_list_ajax_response").html(response.html);
        if( $('#archive_field').val() == "archive_field"){
          $("#explore_more_btn").attr("href", "#");
          $("#archive_field").attr("data-cat", catid);
        }else{
            $("#explore_more_btn").attr("href", response.explore_btn_url);
        }
       
        $("#loader_explore").hide();
      } else {
        $("#blog_category_list_pagination").html(response.pagination);
        $("#blog_category_list_ajax_response").html(response.html);
      }    

      if(response.whole_post < 9){      
        $("#explore_more_arc_btn").hide();
        $("#explore_more_btn").hide();
      }
    
    },
    error: function (errorThrown) {
      console.log(errorThrown);
    },
  });
  if (jQuery(".cs_banner").length > 0) {
    jQuery(".cs_banner .banner").removeClass("banner_bg");
  }
}
function setSearchFocus() { 
  if ($(".filter").length > 0) {
    if (window.innerWidth < 768) {
      console.log("setting search focus");
      $("html, body").animate(
        { scrollTop: $(".filter").offset().top + 175 },
        "slow"
      );
    } else {
      $("html, body").animate(
        { scrollTop: $(".filter").offset().top + 410 },
        "slow"
      );
    }
    return false;
  }
}


