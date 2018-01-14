
<div class="container">
	<div class="row">
	 

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

              if (isset($USERID) && ($USERID == $author_id))
              $Name = '<span class="badge btn-primary">You<span>';
              else
              $Name = '<span class="badge">'.$fname.'<span>';

            echo '<div class="col-md-12 posts_indiv">
                  <h3>'.$title.'</h3>
                  <div style="float:left; width:100%; margin-bottom:10px;">
                    <small style="float:left;">'.$Name.'</small>
                    <small style="float:right;">'.$PostedDate.'</small>
                  </div>
                  <p class="posts_lists_content">'.nl2br($content).'</p>
                </div>
                <input type="hidden" id="post_id" name="post_id" value="'.$post_id.'" />
                ';

            echo '
            <div id="disqus_thread"></div>

            <script>
            var disqus_developer = 1; // this would set it to developer mode
            /**
            *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
            *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
            
            var disqus_config = function () {
            this.page.url = "'.COMPANY_URL.'page=posts&aid='.$post_id.'";  // Replace PAGE_URL with your page s canonical URL variable
            this.page.identifier = '.$post_id.'; // Replace PAGE_IDENTIFIER with your page s unique identifier variable
            };
            
            (function() { // DONT EDIT BELOW THIS LINE
            var d = document, s = d.createElement(\'script\');
            s.src = \'https://blog-com-2.disqus.com/embed.js\';
            s.setAttribute(\'data-timestamp\', +new Date());
            (d.head || d.body).appendChild(s);
            })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                                        
            ';
              }
          
         
          ?>


	</div>
</div>
