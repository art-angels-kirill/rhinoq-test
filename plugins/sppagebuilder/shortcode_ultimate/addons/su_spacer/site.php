<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('restricted aceess');

class SppagebuilderAddonSu_spacer extends SppagebuilderAddons{

	public function render(){

		// Prepare compatibility mode prefix
		$prefix = su_cmpt();
		
		$class  = (isset($this->addon->settings->class) && $this->addon->settings->class) ? $this->addon->settings->class : '';
		$size   = (isset($this->addon->settings->size) && $this->addon->settings->size) ? $this->addon->settings->size : '';
		$medium = (isset($this->addon->settings->medium) && $this->addon->settings->medium) ? $this->addon->settings->medium : '';
		$small  = (isset($this->addon->settings->small) && $this->addon->settings->small) ? $this->addon->settings->small : '';

		// Output
		$output = '<div class="bdt-addon bdt-addon-spacer ' . $class .'">';
		$output .= su_do_shortcode('['.$prefix.'spacer size="'.$size.'" medium="'.$medium.'" small="'.$small.'"]');
		$output .= '</div>';

		return $output;
	}
}
