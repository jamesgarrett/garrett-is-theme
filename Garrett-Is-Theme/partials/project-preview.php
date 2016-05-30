	<?
		$description = get_field('description');
		$thumb = get_field('thumbnail')
	?>

	<div id="grid--box" style="width:50%;">
	    <ul>
	        <? if ( $thumb ): ?><li class="thumbnail" style="float:left;"><img src="<? echo $thumb['url']; ?>" width="250" height="250px"></li><? endif ?>
	        <? if ( $description ): ?><li class="description" style="float:right;"><? echo $description; ?></li><? endif ?>
	    </ul>
	</div>