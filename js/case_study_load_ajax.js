// jQuery(function($){
// 	let canBeLoaded = true // this param allows to initiate the AJAX call only if necessary
// 	const bottomOffset = 2000 // the distance (in px) from the page bottom when you want to load more posts
// 	let loaded_blogs_cs = [];
// 	var cur_page = 2;
// 	$(window).scroll(function(){		
// 		if( $(document).scrollTop() > (($('.filter + .pos_rel').offset().top / 2) + 100) && canBeLoaded == true ){			
// 			$("#blog_category_list_ajax_response [class*='col-']").each(function(){
// 				let currentVal = $(this).data('blogid');
// 				loaded_blogs_cs.push(currentVal)
// 			  });
// 			var learn_more = $('input#learn_more').val();
// 			var maxpages = $('#blog_category_list_ajax_response').data('maxpages');
// 			if(cur_page <= maxpages){
// 				$('.divbtn img#loader_explore').hide();				
// 				$.ajax({
// 					type:'POST',
// 					dataType: "json",
// 					url : casestudyAjax.ajaxurl,
// 					data: {  
// 						query: casestudyAjax.posts,
// 						loaded_blogs_cs: loaded_blogs_cs,
// 						learn_more: learn_more,
// 						page : cur_page,
// 						action : 'casestudy_load_agora',
// 					},
					
// 					beforeSend: function(){					
// 						canBeLoaded = false
// 					},
// 					success:function(data){
// 						if( data ) {	
// 							$('.divbtn img#loader_explore').hide();						
// 							$("#blog_category_list_ajax_response").append(data.html);
// 							loaded_blogs_cs.splice(0, loaded_blogs_cs.length);
// 							canBeLoaded = true // the ajax is completed, now we can run it again
// 							cur_page++
// 						}
// 					}
// 				})
		
// 			}

			
			
// 		}
// 	})
// });

	jQuery(function($){
	var canBeLoaded = true // this param allows to initiate the AJAX call only if necessary
		var loaded_blogs = [];
		var loaded_blogs_cs = [];
		
	
		
		if($('.page-id-35,.category-learn.category-140').length > 0){
			$(window).scroll(function(){
				var get_term_id = $('#get_termid').val();
			
				if($(document).scrollTop() > (($('.filter + .pos_rel').offset().top / 2) + 100) && canBeLoaded == true){	
					var topHeight = $(document).scrollTop()
					
					//console.log('topHeight :', topHeight)
					//console.log('current Next offset :', $('.filter + .pos_rel').offset().top)
					
					//console.log('status :',$(document).scrollTop() > $('.filter + .pos_rel').offset().top )
					$("#blog_category_list_ajax_response [class*='col-']").each(function(){
						let currentVal = $(this).data('blogid');
						loaded_blogs_cs.push(currentVal)
					  });
					if(get_term_id != 140){
						var cur_page_cs = 2;
						var learn_more_cs = $('input#learn_more').val();
						var maxpages_cs = $('#blog_category_list_ajax_response').data('maxpages');
						if(cur_page_cs <= maxpages_cs){
							$('.divbtn img#loader_explore').show();				
							$.ajax({
								type:'POST',
								dataType: "json",
								url : casestudyAjax.ajaxurl,
								data: {  
									query: casestudyAjax.posts,
									loaded_blogs_cs: loaded_blogs_cs,
									learn_more: learn_more_cs,
									page : cur_page_cs,
									action : 'casestudy_load_agora',
								},
								
								beforeSend: function(){					
									canBeLoaded = false
								},
								success:function(data){
									if( data ) {	
										$('.divbtn img#loader_explore').hide();						
										$("#blog_category_list_ajax_response").append(data.html);
										loaded_blogs_cs.splice(0, loaded_blogs_cs.length);
										canBeLoaded = true // the ajax is completed, now we can run it again
										cur_page_cs++;
										
									}
								}
							})		
						}	
					}else{
						//for learn category infinite scroll ajax js
						var cur_page_ls = 2;
						//alert('hello');
						$("#blog_list_ajax_response [class*='col-']").each(function(){
							let currentVal = $(this).data('blogid');
							loaded_blogs.push(currentVal)
						});
						var learn_more_ls = $('input#learn_more').val();
						var maxpages_ls = $('#blog_list_ajax_response').data('maxpages');			
						if(cur_page_ls <= maxpages_ls){
							console.log('here');
							$('.divbtn img#loader_explore').show();				
						
		
							var recent_post_id_hidden_ls = $("input#recent_post_id_hidden").val();
							var catid =  $("#archive_field").attr("data-cat");
							jQuery.ajax({
								type: "post",
								dataType: "json",
								url: casestudyAjax.ajaxurl,
								data: {   
								recent_post_id_hidden: recent_post_id_hidden_ls,
								catid: catid,  
								loaded_blogs: loaded_blogs,  
								paged: cur_page_ls,
								action: "ajax_blog_list_agora_acc_archive"       
								},
								beforeSend: function () {
									canBeLoaded = false
								},
								success: function (response) {
								$("#loader_explore").hide();
								$("#explore_more_arc_btn").show();      
								if(response.max == 1) {
									$("#explore_more_arc_btn").hide();
								}
								$("#blog_list_ajax_response").append(response.html);
								if (response.count_blogs == 0) {
									$("#loader_explore").hide();
									$("#explore_more_arc_btn").hide();     
								}
							
								//   if(response.whole_post == total_loaded_elem){
								// 	$("#explore_more_arc_btn").hide();
								//   }
								canBeLoaded = true // the ajax is completed, now we can run it again
								cur_page_ls++
								},
								error: function (errorThrown) {
								console.log(errorThrown);
								},
							});
						}		
					
					}
					
					
					
					
				} 
			})
		}
	
	});
	