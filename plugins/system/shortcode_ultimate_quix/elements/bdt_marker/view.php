<?php
	// Prepare compatibility mode prefix
	$prefix             = su_cmpt();

	$field['animation'] = ( isset( $field['animation'] ) ) ? $field['animation'] : '';
	$classes            = classNames( "qx-element qx-element-{$type} {$field['class']}", $visibilityClasses, ["wow {$field['animation']}" => $field['animation']]);
?>

<div id="<?php echo $id; ?>" class="<?php echo $classes; ?>">
	<?php 
		$marker_return   = array();
		$marker_return[] = '['.$prefix.'marker image="' . $field['photo'] . '"]';


		foreach($field['items'] as $key => $item):

			if ($item['icon_type'] == 'fontawesome') {
				$icon = (isset($item['icon_fontawesome']) && $item['icon_fontawesome']) ? trim(str_replace('fa fa-', '', 'icon:'.$item['icon_fontawesome'])) : 'icon:map-marker';
			} elseif ($item['icon_type'] == 'lineicon') {
				$icon = (isset($item['icon_lineicon']) && $item['icon_lineicon']) ? 'licon:'.$item['icon_lineicon'] : 'licon:map-marker';
			} else {
				$icon = $item['icon_image'] ;			
			}

			$marker_return[] = '[' . $prefix . 'marker_item icon="' . $icon . '" from_left="'.$item['from_left'].'" from_top="'.$item['from_top'].'" tooltip_title="' . $item['tooltip_title'] . '" tooltip_style="' . $item['tooltip_style'] . '" link="' . $item['url'] . '"]' . su_clean_shortcodes($item['content']) . '[/' . $prefix . 'marker_item]';

		endforeach;
		
		$marker_return[] = '[/'.$prefix.'marker]';
		echo su_do_shortcode(implode("\n", $marker_return));
	?>
</div>