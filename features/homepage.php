<h1>Manage the homepage</h1>
<hr size="1">
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
    //If we have a video ID, add it.
    if (isset($_POST['video_thumb']) && strlen($_POST['video_thumb']) > 0){
    	update_option('video_thumb', $_POST['video_thumb']);
    }

    if (isset($_POST['video_title1']) && strlen($_POST['video_title1']) > 0){
    	update_option('video_title1', $_POST['video_title1']);
    }
    //If we have a video ID, add it.
    if (isset($_POST['video_ID1']) && strlen($_POST['video_ID1']) > 0){
    	update_option('video_ID1', $_POST['video_ID1']);
    }

    //If we have a video ID, add it.
    if (isset($_POST['video_thumb1']) && strlen($_POST['video_thumb1']) > 0){
    	update_option('video_thumb1', $_POST['video_thumb1']);
    }
  }
?>
<form name="form1" method="post" action="">
  <?php wp_nonce_field( 'updateHomepage'); ?>
  <!--Video Title-->
  <h2>Left homepage video:</h2>
  <p><label for="video_title">Video Title:</label> <input type="text" name="video_title" id="video_title" value="<?php echo get_option('video_title');?>" size="50" /></p>
  <p><label for="video_title">Video Thumbnail:</label> <input type="text" name="video_thumb" id="video_thumb" value="<?php echo get_option('video_thumb');?>" size="50" /></p>
  <p><label for="video_ID">Video ID:</label> youtube.com/watch?v=<input type="text" name="video_ID" id="video_ID" value="<?php echo get_option('video_ID');?>" size="18" /><br />
  <span class="description">Enter the Youtube video ID.  The ID is usually at the end of the video URL.</span></p>
  <hr />
  <h2>Right homepage video space:</h2>
  <p><label for="video_title1">Video Title:</label> <input type="text" name="video_title1" id="video_title1" value="<?php echo get_option('video_title1');?>" size="50" /></p>
  <p><label for="video_thumb1">Video Thumbnail:</label> <input type="text" name="video_thumb1" id="video_thumb1" value="<?php echo get_option('video_thumb1');?>" size="50" /></p>
  <p><label for="video_ID1">Video ID:</label> youtube.com/watch?v=<input type="text" name="video_ID1" id="video_ID1" value="<?php echo get_option('video_ID1');?>" size="18" /><br />
  <span class="description">Enter the Youtube video ID. The ID is usually at the end of the video URL.</span></p>
  <p><input id="submit" class="button button-primary" type="submit" value="Update homepage" name="submit"></p>
</form>
