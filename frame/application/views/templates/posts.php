
<div class="container">
	<div class="row">

          <?php
          
          $USERID = isset($userId) ? $userId : '';
          if (!empty($USERID))
          {
            ?>
            <div class="col-md-12 posts_indiv">
            <a class="btn btn-primary btn-sm" href="<?php echo site_url('posts/author_add'); ?>" role="button">ADD NEW POST</a>
            </div>
            <?php
          }
          ?>	 

          <?php
            
              foreach ($query->result() as $res) 
              {

              $post_id     = $res->id;
              $title       = trim($res->title);
              $content     = trim($res->content);
              $author_id   = trim($res->author_id);
              $fname       = trim($res->fname);
              $posted_date = trim($res->posted_date);
              $PostedDate  = date('d M Y h:i A', strtotime($posted_date));

              $Title 		 = strip_tags(trim($title));
			        $Title	     = (strlen($Title) > 60) ? substr($Title,0,60).'...' : $Title;

              $Content     = strip_tags(trim($content));
              $Content     = (strlen($Content) > 360) ? substr($Content,0,360).'...' : $Content;

              if (isset($USERID) && ($USERID == $author_id))
              $Name = '<span class="badge btn-primary">You<span>';
              else
              $Name = '<span class="badge">'.$fname.'<span>';

          	  echo '<div class="col-md-4 posts_lists">
		            <h3>'.$Title.'</h3>
		            <div style="float:left; width:100%; margin-bottom:10px;">
		            	<small style="float:left;">'.$Name.'</small>
		            	<small style="float:right;">'.$PostedDate.'</small>
		            </div>
		            <p class="posts_lists_content">'.$Content.'</p>
		            <p align="right">
		            <a class="label label-success pull-left" href="'.base_url().'index.php/posts/'.$post_id.'/&#disqus_thread"  data-disqus-identifier="'.$post_id.'" role="button">0 Comment</a>
		            <a class="btn btn-primary btn-sm" href="'.base_url().'index.php/posts/'.$post_id.'" role="button">Read More &raquo;</a></p>
		          </div>';
              }
          
         
          ?>


	</div>
</div>
