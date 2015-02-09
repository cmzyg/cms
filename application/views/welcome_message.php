<div id="body">
	<ul>
		<?php foreach($navigation as $menu_item) { ?>
	    <li><a href='<?php echo $menu_item['page_url']; ?>'>
	    	<?php echo $menu_item['page_title']; ?>
	    </a></li>
	    <?php } ?>
    </ul>
	
	<h2><?php echo $page_info['page_title']; ?></h2>
	<p><?php echo $page_info['page_content']; ?></p>
	<p style="text-align:right">Edited by <?php echo $page_info['page_author']; ?></p>
</div>