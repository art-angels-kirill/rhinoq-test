<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('restricted aceess');

class SppagebuilderAddonSu_exit_popup extends SppagebuilderAddons{

	public function render(){

		// Prepare compatibility mode prefix
		$prefix             = su_cmpt();
		
		$expiration_day     = (isset($this->addon->settings->expiration_day) && $this->addon->settings->expiration_day) ? $this->addon->settings->expiration_day : '7';
		$cycle              = (isset($this->addon->settings->cycle) && $this->addon->settings->cycle) ? $this->addon->settings->cycle : '0';
		$content            = (isset($this->addon->settings->content) && $this->addon->settings->content) ? $this->addon->settings->content.'[/'.$prefix.'exit_popup]' : '';
		
		$always_visible     = ( $this->addon->settings->always_visible == 1 ) ? 'yes' : 'no';
		$auto               = ( $this->addon->settings->auto == 1 ) ? 'yes' : 'no';
		
		$class              = (isset($this->addon->settings->class) && $this->addon->settings->class) ? $this->addon->settings->class : '';
		$background         = (isset($this->addon->settings->background) && $this->addon->settings->background) ? $this->addon->settings->background : '';
		$color              = (isset($this->addon->settings->color) && $this->addon->settings->color) ? $this->addon->settings->color : '';
		$border             = (isset($this->addon->settings->border) && $this->addon->settings->border) ? $this->addon->settings->border : '';
		$shadow             = (isset($this->addon->settings->shadow) && $this->addon->settings->shadow) ? $this->addon->settings->shadow : '';
		$height             = (isset($this->addon->settings->height) && $this->addon->settings->height) ? $this->addon->settings->height : '';
		$width              = (isset($this->addon->settings->width) && $this->addon->settings->width) ? $this->addon->settings->width : '';
		$overlay_background = (isset($this->addon->settings->overlay_background) && $this->addon->settings->overlay_background) ? $this->addon->settings->overlay_background : '';
		$radius             = (isset($this->addon->settings->radius) && $this->addon->settings->radius) ? $this->addon->settings->radius : '';

		// Output
		$output = '<div class="bdt-addon bdt-addon-exit-popup ' . $class .'">';
		$output .= su_do_shortcode('['.$prefix.'exit_popup background="'.$background.'" color="'.$color.'" border="'.$border.'" radius="'.$radius.'" shadow="'.$shadow.'" height="'.$height.'" width="'.$width.'" overlay_background="'.$overlay_background.'" expiration_day="'.$expiration_day.'" always_visible="'.$always_visible.'" auto="'.$auto.'" cycle="'.$cycle.'"]'.$content);
		$output .= '</div>';

		return $output;
	}
}
