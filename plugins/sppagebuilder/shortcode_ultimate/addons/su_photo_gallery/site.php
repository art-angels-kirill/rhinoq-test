<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('restricted aceess');

class SppagebuilderAddonSu_photo_gallery extends SppagebuilderAddons{

	public function render(){

		// Prepare compatibility mode prefix
		$prefix         = su_cmpt();
		
		$limit          = (isset($this->addon->settings->limit) && $this->addon->settings->limit) ? $this->addon->settings->limit : '20';
		$width          = (isset($this->addon->settings->width) && $this->addon->settings->width) ? $this->addon->settings->width : '320';
		$height         = (isset($this->addon->settings->height) && $this->addon->settings->height) ? $this->addon->settings->height : '320';
		$vertical_gap   = (isset($this->addon->settings->vertical_gap) && $this->addon->settings->vertical_gap) ? $this->addon->settings->vertical_gap : '10';
		$horizontal_gap = (isset($this->addon->settings->horizontal_gap) && $this->addon->settings->horizontal_gap) ? $this->addon->settings->horizontal_gap : '10';
		$large          = (isset($this->addon->settings->large) && $this->addon->settings->large) ? $this->addon->settings->large : '4';
		$medium         = (isset($this->addon->settings->medium) && $this->addon->settings->medium) ? $this->addon->settings->medium : '3';
		$small          = (isset($this->addon->settings->small) && $this->addon->settings->small) ? $this->addon->settings->small : '1';
		
		$thumb_resize   = ( $this->addon->settings->thumb_resize == 1 ) ? 'yes' : 'no';
		
		$class          = (isset($this->addon->settings->class) && $this->addon->settings->class) ? $this->addon->settings->class : '';
		$style          = (isset($this->addon->settings->style) && $this->addon->settings->style) ? $this->addon->settings->style : '';
		$order          = (isset($this->addon->settings->order) && $this->addon->settings->order) ? $this->addon->settings->order : '';
		$order_by       = (isset($this->addon->settings->order_by) && $this->addon->settings->order_by) ? $this->addon->settings->order_by : '';

		if ( isset($this->addon->settings->source_type) && $this->addon->settings->source_type == 'category' ) {
			$j_category = isset($this->addon->settings->j_category) && $this->addon->settings->j_category ? rtrim(implode(',', $this->addon->settings->j_category), ',') : '';
			$source     = 'category: '.$j_category;
		}
		elseif ( isset($this->addon->settings->source_type) && $this->addon->settings->source_type == 'k2-category' ) {
			$k2_category = isset($this->addon->settings->k2_category) && $this->addon->settings->k2_category ? rtrim(implode(',', $this->addon->settings->k2_category), ',') : '';
			$source      = 'k2-category: '.$k2_category;
		}
		elseif ( isset($this->addon->settings->source_type) && $this->addon->settings->source_type == 'directory' ) {
			$source = isset($this->addon->settings->dir_path) && $this->addon->settings->dir_path ? 'directory: '.$this->addon->settings->dir_path : '';
		}
		elseif ( isset($this->addon->settings->source_type) && $this->addon->settings->source_type == 'media' ) {
			$source = isset($this->addon->settings->med_library) && $this->addon->settings->med_library ? 'media: '.$this->addon->settings->med_library : '';
		}

		// Output
		$output = '<div class="'.$class.'-addon bdt-addon-photo-gallery ' . $class .'">';
		$output .= su_do_shortcode('['.$prefix.'photo_gallery style="'.$style.'" source="'.$source.'" limit="'.$limit.'" order="'.$order.'" order_by="'.$order_by.'" width="'.$width.'" height="'.$height.'" thumb_resize="'.$thumb_resize.'" horizontal_gap="'.$horizontal_gap.'" vertical_gap="'.$vertical_gap.'" large="'.$large.'" medium="'.$medium.'" small="'.$small.'"]');
		$output .= '</div>';

		return $output;
	}
}
