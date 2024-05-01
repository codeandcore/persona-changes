jQuery(window).load(function () {
  jQuery('#mammoth-docx-insert').click(function(){
    setTimeout(() => {
      //var _html = jQuery('pre#mammoth-docx-raw-preview').text();
      var _html = jQuery('#html_preview').val();
      var post_fields_length = -1;
      jQuery('.layout[data-layout="post_fields"]').each(function(){
        // Do stuff with each div
        post_fields_length++;
    });
      
      console.log('added in editor')  
       var editor_Elm = jQuery('[data-id="row-0"]').find(".acf-field-63cfecf5dbbbf textarea").val();
       if(editor_Elm != ""){
        alert("html saved to clipboard");       
        for (var n = 0; n < post_fields_length; ++n){
          var editor_Elm = jQuery('[data-id="row-'+n+'"]').find(".acf-field-63cfecf5dbbbf textarea").val();
          if(editor_Elm == ""){
            jQuery('[data-id="row-'+n+'"]').find(".acf-field-63cfecf5dbbbf textarea").val(_html);
            
          }

          jQuery('.layout[data-layout="post_fields"]').each(function(){
            var str1  = jQuery(this).attr('data-id');
            var str2 = "row-";
            if(str1.indexOf(str2) == -1){
              jQuery(this).find(".acf-field-63cfecf5dbbbf textarea").val(_html);
            }
            
          });
        }
       }else{
        jQuery('[data-id="row-0"]').find(".acf-field-63cfecf5dbbbf textarea").val(_html);
       }
    }, 100);


    //console.log(_html)
    //jQuery('[data-id="row-0"]').find(".acf-field-63cfecf5dbbbf textarea").html(_html)
    //jQuery('[data-id="row-0"]').find(".acf-field-63cfecf5dbbbf textarea").val(_html);     
    //jQuery('.acf-field-63cfecf5dbbbf,.acf-editor-wrap').find("textarea").val(_html);
      //jQuery('.acf-field-63cfecf5dbbbf,.acf-editor-wrap').find("textarea").html(_html);
    // var post_ID = jQuery('#post_ID').val();
    // jQuery.ajax({
    //   type: "POST",  
    //   dataType: "json",  
    //   url:myAjax.ajaxurl, 
    //   data:{
    //     action:"mammoth_docx_agora",    
    //     post_ID: post_ID,   
    //    },
    //   success:function(response){ 
    //     if(response.html){
    //       let tinyID = jQuery('.acf-field.acf-field-63cfecf5dbbbf').find("textarea").attr("id");
    //                     let tinyInstance = tinyMCE.editors[tinyID];
    //                     if(tinyInstance) {
    //                         tinyInstance.setContent(response.html);
    //                     }
    //     }
    //   }
    // });
  });
  /*var get_path;
  get_path = jQuery(location).attr('href');
  var incStr_post_new = get_path.includes('post-new.php');
  var incStr_post_edit = get_path.includes('action=edit');

  var get_schema_id       = myAjax.faq_schema_id;
  var get_schema_id_bread = myAjax.breadcrumb_schema_id;
  
  if(incStr_post_new || incStr_post_edit){
    
    jQuery.ajax({
      type: "POST",  
      dataType: "json",  
      url:myAjax.ajaxurl, 
      data:{
        action:"agora_enable_breadcrumb_schema_on_post",
        status:myAjax.status, 
        schema_id_faq:get_schema_id,
        schema_id_breadcrumb:get_schema_id_bread,  
        post_id:myAjax.post_get_id,
        req_from:myAjax.req_from, 
       },
      success:function(response){ 
        //var arrayloop_object = [ 4580, 4489 ];
        //var arrayloop_object = [ 4580 ];
     
        if(response.faq_has == "yes"){       
         
          
              var sch_id = response.status;
              var specific_saswp = "#saswp_specific_"+sch_id;        
              jQuery(specific_saswp+" .saswp-switch input").prop('checked', false);     
              
              jQuery(".FAQ").empty();
              jQuery(".FAQ").text('Disable FAQ on this page');
      
              jQuery(".saswp-ps-toggle[schema-id="+sch_id+"]").removeClass('saswp_hide'); 
              jQuery(".saswp-restore-schema[schema-id="+sch_id+"]").parent().removeClass('saswp_hide');
              jQuery(".saswp-modify-schema[schema-id="+sch_id+"]").parent().removeClass('saswp_hide');
              jQuery("#saswp_custom_schema_field[schema-id="+sch_id+"]").parent().removeClass('saswp_hide'); 
             
          
       
        }else{
          
          var sch_id = response.status;
          var specific_saswp = "#saswp_specific_"+sch_id;        
          jQuery(specific_saswp+" .saswp-switch input").prop('checked', true);     
          
          jQuery(".FAQ").empty();
          jQuery(".FAQ").text('Enable FAQ on this page');
  
          jQuery(".saswp-ps-toggle[schema-id="+sch_id+"]").addClass('saswp_hide'); 
          jQuery(".saswp-restore-schema[schema-id="+sch_id+"]").parent().addClass('saswp_hide');
          jQuery(".saswp-modify-schema[schema-id="+sch_id+"]").parent().addClass('saswp_hide');
          jQuery("#saswp_custom_schema_field[schema-id="+sch_id+"]").parent().addClass('saswp_hide');  
        }
          
       
  
      },
      error: function(response){                    
        console.log(response);
      }
      }); 


     
  }*/
  
});


