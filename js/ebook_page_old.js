var stoper = 0;
function ebookTimer(){
    if($('.timer_ebook').length > 0){
        if($('.timer_ebook').visible(true) && stoper == 0) {
            stoper = 1;
            var timeleft = 5;
            var redirectToNextEbook = setInterval(function(){
            timeleft--;
            $("#countdowntimer").text(timeleft);
            if(timeleft == 0){
                clearInterval(redirectToNextEbook);
                $(".chapter_navigation .pages_navigate_controls.next").trigger("click")
                let currentVal = window.innerWidth > 767 ? jQuery('#ajax_page_ebook_content').offset().top - ( $('.bannerWrap').outerHeight() - 400) : jQuery('#ajax_page_ebook_content').offset().top - ( $('.bannerWrap').outerHeight() - 420)
                jQuery( 'html, body' ).animate({
                    scrollTop: currentVal,
                },1000);        
            }
            $('.timer_ebook .btn').on('click',function(){
                clearInterval(redirectToNextEbook);
                stoper = 0;
                $(".chapter_navigation .pages_navigate_controls.next").off('click')
            })
        },1000);
        }
    }   
}


jQuery(document).ready(function(){
    setTimeout(function(){
    var this_text = $('select#chapters option:selected').text();
    $('.scrollableList ul li').each(function(index,element){
        var _text = $(this).text();
        console.log(_text);
        if(_text == this_text){
            $(this).trigger('click');
        }    
    });
    }, 200);
    $(window).on('scroll',function(){
        if(stoper == 0){
            ebookTimer()
        }
    })
    $(document).on("click",".pages_navigate_controls.prev,.pages_navigate_controls.next",function() {
        stoper = 0;
        ebookTimer()
        var _max = $('#current_page').attr('max');
        var _cur = $('#current_page').val();
        if($(this).hasClass('prev')){
            if(_cur <= 1){
                return;
            }
             _cur--;
        }
        else{
            _cur++;
            if(_cur > _max){
                return;
            }
        }
        $('#current_page').val(_cur);
        get_ebook_page_content_agora(_cur);
    });
    
    $(document).on("change","select#chapters",function() {
        // var _cur = $('option:selected', this).attr('data-menu_order');
        var _cur = $('option:selected', this).val();
        console.log(_cur);
        // $(this).find(":selected").val(_cur);
        dropdown_get_ebook_page_content_agora(_cur);
        stoper = 0;
        ebookTimer()
    });

    // $(document.body).on('change','#chapters',function(){
    //     alert('Change Happened');
    // });

    $(document).on("keyup","input#current_page",function() {
        var _max = $('#current_page').attr('max');
        var _val = $(this).val();
        console.log(_max)
        if(parseInt(_val) > parseInt(_max)){
            $(this).val(_max);
        }
        if(parseInt(_val) < 1){
            $(this).val(1);
        }
        var _cur = $(this).val();
        get_ebook_page_content_agora(_cur);
    });
});
function dropdown_get_ebook_page_content_agora(_cur){
    jQuery.ajax({
        type : "post",
        dataType : "json",
        url : myAjax.ajaxurl,
        data:{
            cur_page: _cur,
            action: "load_page_of_ebook_ajax",
          },
        beforeSend: function() {
        },
        success: function(response) {
            var chapter = response.chapter;
            // $('select#chapters').val(chapter);
            $("select#chapters > option").each(function() {
                if(chapter == this.value){
                    $('.scrollableList:last').children('div.selectedOption').text(this.text);
                }
            });
            var chapter_name = response.chapter_name;
            chapter_name = chapter_name.replace('chapter-','');
            var page_name = response.page_name;
            page_name = page_name.replace('page-','');
            var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + '?chapter='+chapter_name+'&epage='+page_name;
            window.history.pushState({path:newurl},'',newurl);
            $('#current_page').val(response.selected_page);
            $('#ajax_page_ebook_content').html(response.html);
            stoper = 0;
            ebookTimer()
            
        },
        error: function(errorThrown){
            console.log(errorThrown);
        }
    });
}

jQuery(window).on('scroll',function(){
    // ebookTimer()
})


function get_ebook_page_content_agora(_cur){
        jQuery.ajax({
            type : "post",
            dataType : "json",
            url : myAjax.ajaxurl,
            data:{
                cur_page: _cur,
                action: "load_page_of_ebook_ajax_pagination",
              },
            beforeSend: function() {
            },
            success: function(response) {
                var chapter = response.chapter;
                $('select#chapters').val(chapter);
                $("select#chapters > option").each(function() {
                    if(chapter == this.value){
                        $('.scrollableList:last').children('div.selectedOption').text(this.text);
                    }
                });
                var chapter_name = response.chapter_name;
                chapter_name = chapter_name.replace('chapter-','');
                var page_name = response.page_name;
                page_name = page_name.replace('page-','');
                var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + '?chapter='+chapter_name+'&epage='+page_name;
                window.history.pushState({path:newurl},'',newurl);
                $('#ajax_page_ebook_content').html(response.html);
                stoper = 0;
                ebookTimer()
            },
            error: function(errorThrown){
                console.log(errorThrown);
            }
        });
}