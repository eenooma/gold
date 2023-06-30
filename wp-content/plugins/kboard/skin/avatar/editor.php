<div id="kboard-avatar-editor">
	<form class="kboard-form" method="post" action="<?php echo esc_url($url->getContentEditorExecute())?>" enctype="multipart/form-data" onsubmit="return kboard_editor_execute(this);">
		<?php $skin->editorHeader($content, $board)?>
		
		<?php foreach($board->fields()->getSkinFields() as $key=>$field):?>
			<?php if(!in_array($key, array('key1','before_value1','value1','key2','before_value2','value2','key3','before_value3','value3','key4','before_value4','value4','key5','before_value5','value5'))):?>
				<?php echo $board->fields()->getTemplate($field, $content, $boardBuilder)?>
			<?php elseif(in_array($key, array('key1','key2','key3','key4','key5'))):?>
				<?php $i = str_replace('key', '', $key)?>
						
				<div class="kboard-attr-row kboard-attr-text meta-key-key<?php echo $i?>  ">
					<label class="attr-name" for="key<?php echo $i?>"><span class="field-name"><?php echo $field['field_name']?></span></label>
					<div class="attr-value">
						<input type="text" id="key<?php echo $i?>" class="" name="kboard_option_key<?php echo $i?>" value="<?php echo esc_attr($content->option->{'key'.$i})?>">
						<input type="text" id="before_value<?php echo $i?>" class="" name="kboard_option_before_value<?php echo $i?>" value="<?php echo esc_attr($content->option->{'before_value'.$i})?>">
						<input type="text" id="value<?php echo $i?>" class="" name="kboard_option_value<?php echo $i?>" value="<?php echo esc_attr($content->option->{'value'.$i})?>">
					</div>
				</div>
			<?php endif?>
		<?php endforeach?>

		<div class="kboard-control">
			<div class="left">
				<?php if($content->uid):?>
				<a href="<?php echo esc_url($url->getDocumentURLWithUID($content->uid))?>" class="kboard-avatar-button-small"><?php echo __('Back', 'kboard')?></a>
				<a href="<?php echo esc_url($url->getBoardList())?>" class="kboard-avatar-button-small"><?php echo __('List', 'kboard')?></a>
				<?php else:?>
				<a href="<?php echo esc_url($url->getBoardList())?>" class="kboard-avatar-button-small"><?php echo __('Back', 'kboard')?></a>
				<?php endif?>
			</div>
			<div class="right">
				<?php if($board->isWriter()):?>
				<button type="submit" class="kboard-avatar-button-small"><?php echo __('Save', 'kboard')?></button>
				<?php endif?>
			</div>
		</div>
	</form>
</div>

<?php wp_enqueue_script('kboard-avatar-script', "{$skin_path}/script.js", array(), KBOARD_VERSION, true)?>