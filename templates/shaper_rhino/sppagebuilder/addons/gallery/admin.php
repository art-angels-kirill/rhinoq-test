<?php

/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
 */
//no direct accees
defined('_JEXEC') or die('restricted aceess');
require_once dirname(dirname(__DIR__)) . '/fields/rhinoicon.php';

SpAddonsConfig::addonConfig(
        array(
            'type' => 'repeatable',
            'addon_name' => 'sp_gallery',
            'category' => 'Slider',
            'title' => JText::_('COM_SPPAGEBUILDER_ADDON_GALLERY'),
            'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_GALLERY_DESC'),
            'attr' => array(
                'general' => array(
                    'admin_label' => array(
                        'type' => 'text',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL_DESC'),
                        'std' => ''
                    ),
                    'title' => array(
                        'type' => 'text',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_TITLE'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_DESC'),
                        'std' => ''
                    ),
                    'heading_selector' => array(
                        'type' => 'select',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_DESC'),
                        'values' => array(
                            'h1' => JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H1'),
                            'h2' => JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H2'),
                            'h3' => JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H3'),
                            'h4' => JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H4'),
                            'h5' => JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H5'),
                            'h6' => JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H6'),
                        ),
                        'std' => 'h3',
                        'depends' => array(array('title', '!=', '')),
                    ),
                    'title_fontsize' => array(
                        'type' => 'number',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_FONT_SIZE'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_FONT_SIZE_DESC'),
                        'std' => '',
                        'depends' => array(array('title', '!=', '')),
                    ),
                    'title_lineheight' => array(
                        'type' => 'text',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_LINE_HEIGHT'),
                        'std' => '',
                        'depends' => array(array('title', '!=', '')),
                    ),
                    'title_fontstyle' => array(
                        'type' => 'select',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_FONT_STYLE'),
                        'values' => array(
                            'underline' => JText::_('COM_SPPAGEBUILDER_GLOBAL_FONT_STYLE_UNDERLINE'),
                            'uppercase' => JText::_('COM_SPPAGEBUILDER_GLOBAL_FONT_STYLE_UPPERCASE'),
                            'italic' => JText::_('COM_SPPAGEBUILDER_GLOBAL_FONT_STYLE_ITALIC'),
                            'lighter' => JText::_('COM_SPPAGEBUILDER_GLOBAL_FONT_STYLE_LIGHTER'),
                            'normal' => JText::_('COM_SPPAGEBUILDER_GLOBAL_FONT_STYLE_NORMAL'),
                            'bold' => JText::_('COM_SPPAGEBUILDER_GLOBAL_FONT_STYLE_BOLD'),
                            'bolder' => JText::_('COM_SPPAGEBUILDER_GLOBAL_FONT_STYLE_BOLDER'),
                        ),
                        'multiple' => true,
                        'std' => '',
                        'depends' => array(array('title', '!=', '')),
                    ),
                    'title_letterspace' => array(
                        'type' => 'select',
                        'title' => JText::_('COM_SPPAGEBUILDER_GLOBAL_LETTER_SPACING'),
                        'values' => array(
                            '0' => 'Default',
                            '1px' => '1px',
                            '2px' => '2px',
                            '3px' => '3px',
                            '4px' => '4px',
                            '5px' => '5px',
                            '6px' => '6px',
                            '7px' => '7px',
                            '8px' => '8px',
                            '9px' => '9px',
                            '10px' => '10px'
                        ),
                        'std' => '0',
                        'depends' => array(array('title', '!=', '')),
                    ),
                    'title_fontweight' => array(
                        'type' => 'text',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_FONT_WEIGHT'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_FONT_WEIGHT_DESC'),
                        'std' => '',
                        'depends' => array(array('title', '!=', '')),
                    ),
                    'title_text_color' => array(
                        'type' => 'color',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_TEXT_COLOR'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_TEXT_COLOR_DESC'),
                        'depends' => array(array('title', '!=', '')),
                    ),
                    'title_margin_top' => array(
                        'type' => 'number',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_MARGIN_TOP'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_MARGIN_TOP_DESC'),
                        'placeholder' => '10',
                        'depends' => array(array('title', '!=', '')),
                    ),
                    'title_margin_bottom' => array(
                        'type' => 'number',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_MARGIN_BOTTOM'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_MARGIN_BOTTOM_DESC'),
                        'placeholder' => '10',
                        'depends' => array(array('title', '!=', '')),
                    ),
                    'class' => array(
                        'type' => 'text',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_CLASS'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_CLASS_DESC'),
                        'std' => ''
                    ),
                    // Repeatable Items
                    'sp_gallery_item' => array(
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_GALLERY_ITEMS'),
                        'attr' => array(
                            'item_icon' => array(// New Icon
                                'type' => 'select',
                                'title' => JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_RHINO_ICON_NAME'),
                                'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_RHINO_ICON_NAME_DESC'),
                                'values' => $rhinoiconslist,
                                'std' => ''
                            ),
                            'title' => array(
                                'type' => 'text',
                                'title' => JText::_('COM_SPPAGEBUILDER_ADDON_GALLERY_ITEM_TITLE'),
                                'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_GALLERY_ITEM_TITLE_DESC'),
                                'std' => 'Item 1'
                            ),
                            'sub_title' => array(
                                'type' => 'textarea',
                                'title' => JText::_('COM_SPPAGEBUILDER_ADDON_GALLERY_ITEM_SUB_TITLE'),
                                'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_GALLERY_ITEM_SUB_TITLE_DESC'),
                                'std' => 'Lorem IPsum Dolar Sit Amet'
                            ),
                            'thumb' => array(
                                'type' => 'media',
                                'title' => JText::_('COM_SPPAGEBUILDER_ADDON_GALLERY_THUMB'),
                                'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_GALLERY_THUMB_DESC'),
                            ),
                        ),
                    ),
                ),
                'style' => array(
                    'width' => array(
                        'type' => 'text',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_GALLERY_IMAGE_WIDTH'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_GALLERY_IMAGE_WIDTH_DESC'),
                        'std' => 200
                    ),
                    'height' => array(
                        'type' => 'text',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_GALLERY_IMAGE_HEIGHT'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_GALLERY_IMAGE_HEIGHT_DESC'),
                        'std' => 200
                    ),
                ),
            ),
        )
);
