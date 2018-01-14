

      <div class="row">

        <div class="col-sm-8 blog-main">

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

              $Content     = strip_tags(trim($content));
              $Content     = (strlen($Content) > 300) ? substr($Content,0,300).'...' : $Content;

              if (isset($USERID) && ($USERID == $author_id))
              $Name = '<span class="badge btn-primary">You<span>';
              else
              $Name = '<span class="badge">'.$fname.'<span>';

              echo '<div class="blog-post">
                  <h2 class="blog-post-title">'.($title).'</h2>
                  <p class="blog-post-meta">
                  '.$PostedDate.' by <a href="#">'.$Name.'</a>
                  <a class="label label-success pull-right" href="posts&aid='.$post_id.'#disqus_thread" data-disqus-identifier="'.$post_id.'" role="button">0 Comment</a>
                  </p>
                  <p>'.$Content.'</p>
                  <p align="right">
                  <a class="btn btn-primary btn-sm" href="'.base_url().'index.php/posts/'.$post_id.'" role="button">Read More &raquo;</a>
                  </p>
              </div><hr />';
              }
          
         
          ?>

          <nav class="blog-pagination">
            <a class="btn btn-primary" href="#">Older</a>
            <a class="btn btn-default disabled" href="#">Newer</a>
          </nav>

          
        </div><!-- /.blog-main -->

        <aside class="col-sm-3 ml-sm-auto blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>For Our Readers</h4>
            <p>Thanks for reading!<br /> Here's too many years of health & happiness ahead, from ours to yours!<br /><br />
              <em>Questions?</em><br /> <em>Comments?</em><br /> <em>Concerns?</em><br /><br /> We want to hear it all!<br /></p>
          </div>
          <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
              <li><a href="#">January 2018</a></li>
              <li><a href="#">December 2017</a></li>
              <li><a href="#">November 2017</a></li>
              <li><a href="#">October 2017</a></li>
              <li><a href="#">September 2017</a></li>
              <li><a href="#">August 2017</a></li>
              <li><a href="#">July 2017</a></li>
              <li><a href="#">June 2017</a></li>
              <li><a href="#">May 2017</a></li>
              <li><a href="#">April 2017</a></li>
              <li><a href="#">March 2017</a></li>
              <li><a href="#">February 2017</a></li>
              <li><a href="#">January 2017</a></li>
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->