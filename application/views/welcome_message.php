


	<div id="body">
		
		<?php echo $page_info['page_content']; ?>


		<p>Edited by <?php echo $page_info['page_author']; ?></p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

