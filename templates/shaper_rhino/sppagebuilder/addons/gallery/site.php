<?php

/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
 */
//no direct accees
defined('_JEXEC') or die('restricted aceess');

class SppagebuilderAddonGallery extends SppagebuilderAddons {

    public function render() {

        $class = (isset($this->addon->settings->class) && $this->addon->settings->class) ? $this->addon->settings->class : '';
        $title = (isset($this->addon->settings->title) && $this->addon->settings->title) ? $this->addon->settings->title : '';
        $sub_title = (isset($this->addon->settings->sub_title) && $this->addon->settings->sub_title) ? $this->addon->settings->sub_title : '';
        $heading_selector = (isset($this->addon->settings->heading_selector) && $this->addon->settings->heading_selector) ? $this->addon->settings->heading_selector : 'h3';

        //Options
        $width = (isset($this->addon->settings->width) && $this->addon->settings->width) ? $this->addon->settings->width : 200;
        $height = (isset($this->addon->settings->height) && $this->addon->settings->height) ? $this->addon->settings->height : 200;

        $output = '<div class="sppb-addon sppb-addon-gallery ' . $class . '">';
        $output .= ($title) ? '<' . $heading_selector . ' class="sppb-addon-title">' . $title . '</' . $heading_selector . '>' : '';
        $output .= '<div class="sppb-addon-content">';
        $output .= '<ul class="sppb-gallery clearfix">';

        foreach ($this->addon->settings->sp_gallery_item as $key => $value) {
            if ($value->thumb) {
                $output .= '<li>';
                $output .= '<img class="sppb-img-responsive" src="' . $value->thumb . '" width="' . $width . '" height="' . $height . '" alt="' . $value->title . '" style="width:' . $width . 'px;">';
                $output .= '<div class="gallery-info-wrap">';
                $output .= '<i class="rhino-icon ' . $value->item_icon . '"></i>';
                $output .= '<h3 class="sppb-gallery-image-title">' . $value->title . ' </h3>';
                $output .= '<p class="sppb-gallery-image-subtitle">' . $value->sub_title . ' </p>';
                $output .= '</div>'; //.End:: gallery-info-wrap

                $output .= '</li>';
            }
        }

        $output .= '</ul>';
        $output .= '</div>';
        $output .= '</div>';

        return $output;
    }

    public static function getTemplate() {
        $output = '
            <#
            var contentClass = (!_.isEmpty(data.class)) ? data.class : "";
            var title = (!_.isEmpty(data.title)) ? data.title : "";
            var sub_title = (!_.isEmpty(data.sub_title)) ? data.sub_title : "";
            var heading_selector = (!_.isEmpty(data.heading_selector)) ? data.heading_selector : "h3";
            var width = (!_.isEmpty(data.width)) ? data.width : 200;
            var height = (!_.isEmpty(data.height)) ? data.height : 200;
            #>

        <div class="sppb-addon sppb-addon-gallery {{contentClass}}">
        <# if(title){ #>
        <{{heading_selector}} class="sppb-addon-title">{{{title}}}</{{heading_selector}}>
        <# } #>
        <div class="sppb-addon-content">
        <ul class="sppb-gallery clearfix">

        <# _.each (data.sp_gallery_item, function(gallery_item) { #>
            <# if (gallery_item.thumb) { #>
                <li>
                <img class="sppb-img-responsive" src="{{gallery_item.thumb}}" width="{{width}}" height="{{height}}" alt="{{gallery_item.title}}" style="width:{{width}}px;">
                <div class="gallery-info-wrap">
                <i class="rhino-icon {{gallery_item.item_icon}}"></i>
                <h3 class="sppb-gallery-image-title">{{{gallery_item.title}}}</h3>
                <p class="sppb-gallery-image-subtitle">{{{gallery_item.sub_title}}}</p>
                </div>
                </li>
            <# } #>
        <# }) #>
        </ul>
        </div>
        </div>
        ';
        return $output;
    }

}
