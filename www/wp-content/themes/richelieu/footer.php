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
</body>
</html>