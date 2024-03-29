<?php
	// Prepare compatibility mode prefix
	$prefix                = su_cmpt();
	
	$field['animation']    = ( isset( $field['animation'] ) ) ? $field['animation'] : '';
	$classes               = classNames( "qx-element qx-element-{$type} {$field['class']}", $visibilityClasses, ["wow {$field['animation']}" => $field['animation']]);
	
	$field['thumb_resize'] = ( $field['thumb_resize'] == 1 ) ? 'yes' : 'no' ;
	
	$source                = (isset($field['source'])) ? $field['source'] : '';
	$j_category            = rtrim(implode(',', $field['j_category']), ',');
	$k2_category           = rtrim(implode(',', $field['k2_category']), ',');

	if (!isset($field['source'])) {
		if ( $field['source_type'] == 'category' ) {
		  $source = 'category: '.$j_category;
		}
		elseif ( $field['source_type'] == 'k2-category' ) {
		  $source = 'k2-category: '.$k2_category;
		}
		elseif ( $field['source_type'] == 'directory' ) {
		  $source = 'directory: '.$field['dir_path'];
		}
		elseif ( $field['source_type'] == 'media' ) {
		  $source = 'media: '.$field['med_library'];
		}
	}
	
?>

<div id="<?php echo $id; ?>" class="<?php echo $classes; ?>">
	<?php echo su_do_shortcode('['.$prefix.'photo_gallery style="'.$field['style'].'" source="'.$source.'" limit="'.$field['limit'].'" order="'.$field['order'].'" order_by="'.$field['order_by'].'" width="'.$field['width'].'" height="'.$field['height'].'" thumb_resize="'.$field['thumb_resize'].'" horizontal_gap="'.$field['horizontal_gap'].'" vertical_gap="'.$field['vertical_gap'].'" large="'.$field['large'].'" medium="'.$field['medium'].'" small="'.$field['small'].'"]'); ?>
</div>