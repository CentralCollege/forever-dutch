<h1>Manage the homepage</h1>
<hr size="1">
<h2>Change the Video:</h2>
<?php
  //verify nonce
  if(!empty( $_POST ) && check_admin_referer('updateHomepage', '_wpnonce')){
    //If we have a video title, add it.
    if (isset($_POST['video_title']) && strlen($_POST['video_title']) > 0){
    	update_option('video_title', $_POST['video_title']);
    }
    //If we have a video ID, add it.
    if (isset($_POST['video_ID']) && strlen($_POST['video_ID']) > 0){
    	update_option('video_ID', $_POST['video_ID']);
    }
  }
?>

<form name="form1" method="post" action="">
  <?php wp_nonce_field( 'updateHomepage'); ?>
  <!--Video Title-->
  <p><label for="video_title">Video Title:</label> <input type="text" name="video_title" id="video_title" value="<?php echo get_option('video_title');?>" size="50" /></p>
  <p><label for="video_ID">Video ID:</label> youtube.com/watch?v=<input type="text" name="video_ID" id="video_ID" value="<?php echo get_option('video_ID');?>" size="18" /><br />
  <span class="description">Enter the Youtube video ID.  The ID is usually at the end of the video URL.</span></p>
  <p><input id="submit" class="button button-primary" type="submit" value="Update homepage" name="submit"></p>
</form>
