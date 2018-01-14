<?php
require_once('tail.php');
require_once(TAIL.'config/config.php');
require_once(TAIL.'includes/function.php');
require_once(TAIL.'includes/arrays.php');

$post_id = isset($_REQUEST['post_id']) ? $_REQUEST['post_id'] : '';

$CONTENT  = '
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
echo $CONTENT;
?>