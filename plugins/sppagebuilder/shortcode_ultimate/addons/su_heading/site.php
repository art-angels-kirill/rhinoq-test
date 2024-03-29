<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('restricted aceess');

class SppagebuilderAddonSu_heading extends SppagebuilderAddons{

	public function render(){

		// Prepare compatibility mode prefix
		$prefix      = su_cmpt();
		
		$content     = (isset($this->addon->settings->content) && $this->addon->settings->content) ? $this->addon->settings->content : 'Your heading text';
		
		$style       = (isset($this->addon->settings->style) && $this->addon->settings->style) ? $this->addon->settings->style : '';
		$heading     = (isset($this->addon->settings->heading) && $this->addon->settings->heading) ? $this->addon->settings->heading : '';
		$style_color = (isset($this->addon->settings->style_color) && $this->addon->settings->style_color) ? $this->addon->settings->style_color : '';
		$align       = (isset($this->addon->settings->align) && $this->addon->settings->align) ? $this->addon->settings->align : '';
		$width       = (isset($this->addon->settings->width) && $this->addon->settings->width) ? $this->addon->settings->width : '';
		$size        = (isset($this->addon->settings->size) && $this->addon->settings->size) ? $this->addon->settings->size : '';
		$class       = (isset($this->addon->settings->class) && $this->addon->settings->class) ? $this->addon->settings->class : '';

		// Output
		$output  = '<div class="bdt-addon bdt-addon-heading ' . $class .'">';
		$output  .= su_do_shortcode('['.$prefix.'heading style="'.$style.'" heading="'.$heading.'" color="inherit" style_color="'.$style_color.'" align="'.$align.'" width="'.$width.'" size="'.$size.'"]'.$content.'[/'.$prefix.'heading]');
		$output .= '</div>';

		return $output;
	}
}
