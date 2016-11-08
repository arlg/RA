<?php
/**
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Richelieu
 */
?>

<footer>

	<div class="grid_container">
		<div class="row">
			<div class="col_6 left">
				<span>© 2016</span><span>|</span><span>Richelieu Advisors</span><span>•</span><a href="/<?php echo ( pll_current_language()."/".pll__("legalmentions")); ?>"><?php pll_e("Legal mentions"); ?></a>
			</div>
			<div class="col_6 right">
				<ul>
					<li class="icon">
                        <a href="<?php pll_e("linkedin"); ?>" class="icon-linkedin"></a>
                    </li>
                    <li class="icon">
                        <a href="<?php pll_e("twitter"); ?>" class="icon-twitter"></a>
                    </li>
                </ul>
			</div>
		</div>
	</div>


</footer>

<?php wp_footer(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-86730039-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>