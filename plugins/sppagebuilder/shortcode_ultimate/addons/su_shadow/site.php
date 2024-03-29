<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('restricted aceess');

class SppagebuilderAddonSu_shadow extends SppagebuilderAddons{

	public function render(){

		// Prepare compatibility mode prefix
		$prefix  = su_cmpt();
		
		$content = (isset($this->addon->settings->content) && $this->addon->settings->content) ? $this->addon->settings->content.'[/'.$prefix.'shadow]' : '';
		
		$inline  = ( $this->addon->settings->inline == 1 ) ? 'yes' : 'no';
		
		$class   = (isset($this->addon->settings->class) && $this->addon->settings->class) ? $this->addon->settings->class : '';
		$style   = (isset($this->addon->settings->style) && $this->addon->settings->style) ? $this->addon->settings->style : '';

		// Output
		$output = '<div class="bdt-addon bdt-addon-shadow ' . $class .'">';
		$output .= su_do_shortcode('['.$prefix.'shadow style="'.$style.'" inline="'.$inline.'"]'.$content);
		$output .= '</div>';

		return $output;
	}
}
