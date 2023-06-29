<div class="table">
	<ul>
		<?php while($content = $list->hasNext()):?>
		<li>
			<?php if($board->id == '1'): ?>
				<span class="<?php echo $content->option->{'status'}=='매입완료'?'complete':'receipt' ?>"><a href="#"><span class="icon"><?php echo $content->option->{'status'}?></span></a></span>
			<? endif?>
			<span class="content">
				<a href="<?php echo $url->getDocumentURLWithUID($content->uid)?>"><?php echo $content->title?></a>
			</span>
			<span class="date"><a href="<?php echo $url->getDocumentURLWithUID($content->uid)?>"><?php echo $content->getDate()?></a></span>
		</li>
		<?php endwhile?>
	</ul>
</div>