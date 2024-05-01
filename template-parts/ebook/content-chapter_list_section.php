<?php
if(isset($_POST['postid'])){
    $postid         = $_POST['postid'];  
}

if(isset($_POST['chapter_no'])){
    $chapter_no         = $_POST['chapter_no']-1;
}else{
    $chapter_no = 0;
}
 $chapter_list_rows = get_sub_field('chapter_list');
 $chapter_title = $chapter_list_rows[$chapter_no]['chapter_title'];
 $chapter_content = $chapter_list_rows[$chapter_no]['chapter_content'];     
 $chapter_slug = $chapter_list_rows[$chapter_no]['chapter_slug'];     



 if($chapter_content != '' || $chapter_title != ''):

 ?>

 <?php if($chapter_title):?>

<h3 class="heading-text"><strong><?php echo $chapter_title;?></strong></h3>
<input type="hidden" name="chapter_slug" id="chapter_slug" value="<?php echo $chapter_slug;?>">

<?php endif; ?>

<?php echo $chapter_content;?>

<?php endif; ?>