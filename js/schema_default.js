jQuery(window).load(function () {
    jQuery(document).on("click",".saswp-schema-type-toggle", function(e){
      console.log('eloo');
      if (jQuery('.saswp-schema-type-toggle').prop('checked')==true){ 
        var post_ID = jQuery('#post_ID').val();
        localStorage.setItem("cbkbox", "checked");
        jQuery.ajax({
          type: "post",
          dataType: "json",
          url: myAjax.ajaxurl,
          data: { 
            cbkbox: 'checked',  
            getpostID: post_ID,      
            action: "ajax_schema_custom_func"       
          },
          beforeSend: function () {},
          success: function (response) {
         
          },
          error: function (errorThrown) {
            console.log(errorThrown);
          },
        });
      }else{
        localStorage.setItem("cbkbox", "unchecked");
        var post_ID = jQuery('#post_ID').val();
        jQuery.ajax({
          type: "post",
          dataType: "json",
          url: myAjax.ajaxurl,
          data: { 
            cbkbox: 'unchecked',  
            getpostID: post_ID,            
            action: "ajax_schema_custom_func"       
          },
          beforeSend: function () {},
          success: function (response) {
         
          },
          error: function (errorThrown) {
            console.log(errorThrown);
          },
        });
      }
    });
  
  });
  