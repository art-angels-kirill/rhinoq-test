<?php
/**
* @subpackage Shortcode Ultimate
* @author BdThemes https://www.bdthemes.com
* @copyright Copyright (c) 2012 - 2016 BdThemes
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('restricted aceess');

if (class_exists('Su_Shortcode_super_tabs')) {
    SpAddonsConfig::addonConfig(
    	array(
            'type'       => 'wrap',
            'category'   => 'Shortcode Ultimate',
            'addon_name' => 'su_super_tabs',
            'title'      => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_SUPER_TABS'),
            'desc'       => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_SUPER_TABS_DESC'),
            'icon'       => JURI::root().'plugins/sppagebuilder/shortcode_ultimate/addons/su_super_tabs/element.svg',

    		'attr'=>array(
                'general' => array(
                    'active' => array(
                        'type'  => 'number',
                        'std'   => 1,
                        'title' => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_ACTIVE_TAB'),
                        'desc'  => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_ACTIVE_TAB_DESC')
                    ),
                    'align' => array(
                        'type'   => 'select',
                        'std'    => 'center',
                        'title'  => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_ALIGN'),
                        'desc'   => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_SUPER_TAB_ALIGN_DESC'),
                        'values' => array(
                            'left'    => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_LEFT'),
                            'center'  => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_CENTER'),
                            'right'   => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_RIGHT'),
                            'justify' => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_JUSTIFY'),
                        ),
                    ),
                    'vertical' => array(
                        'type'  => 'checkbox',
                        'std'   => '0',
                        'title' => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_VERTICAL'),
                        'desc'  => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_VERTICAL_DESC')
                    ),
                    'position' => array(
                        'type'   => 'select',
                        'std'    => 'top',
                        'title'  => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_POSITION'),
                        'desc'   => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_SUPER_TAB_POSITION_DESC'),
                        'values' => array(
                            'top'    => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_TOP'),
                            'bottom' => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_BOTTOM'),
                        ),
                    ),                
                    'speed' => array(
                        'type'  => 'number',
                        'std'   => 800,
                        'title' => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_SPEED'), 
                        'desc'  => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_SUPER_TAB_SPEED_DESC')
                    ),
                    'deeplink' => array(
                        'type'  => 'checkbox',
                        'std'   => '0',
                        'title' => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_DEEPLINK'),
                        'desc'  => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_DEEPLINK_DESC')
                    ),
                    'class' => array(
                        'type'  => 'text',
                        'title' => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_CLASS'),
                        'desc'  => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_CLASS_DESC')
                    )
                ),
                'tab' => array(
                    'tab_item' => array(
                        'attr' => array(
                            'title' => array(
                                'type'  => 'text',
                                'std'   => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_DEFAULT'),
                                'title' => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_TITLE'),
                                'desc'  => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_TITLE_DESC')
                            ),
                            'icon' => array(
                                'type'  => 'icon',
                                'title' => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_ICON'),
                                'desc'  => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_ICON_DESC')
                            ),
                            'content' =>array(
                                'type'  =>'editor',
                                'title' => 'Content',
                                'std'   =>'A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.'
                            ),
                        ),
                    ),
                ),
    			'su style' => array(
                    'style' => array(
                        'type'   => 'select',
                        'std'    => 'default',
                        'title'  => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_STYLE'),
                        'desc'   => sprintf( '%s.', JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_STYLE_DESC') ),
                        'values' => array(
                            'default'   => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_DEFAULT'),
                            'flat'      => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_FLAT'),
                            'flatbox'   => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_FLATBOX'),
                            'round'     => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_ROUND'),
                            'outline'   => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_OUTLINE'),
                            'underline' => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_UNDERLINE'),
                        ),
                    ),
                    'style_color' => array(
                        'type'  => 'color',
                        'std'   => '#4FC1E9',
                        'title' => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_STYLE_COLOR'), 
                        'desc'  => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_SUPER_TABS_STYLE_COLOR_DESC')
                    ),
                    'animation' => array(
                        'type'   => 'select',
                        'std'    => 'fade',
                        'title'  => 'Tab Animation',
                        'desc'   => sprintf( '%s.', JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_ANIMATION_DESC') ),
                        'values' => array(
                            'glueHor'     => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_GLUEHOR'),
                            'glueVer'     => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_GLUEVER'),
                            'foldHor'     => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_FOLDHOR'),
                            'foldVer'     => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_FOLDVER'),
                            'foldFromHor' => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_FOLDFROMHOR'),
                            'foldFromVer' => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_FOLDFROMVER'),
                            'roomHor'     => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_ROOMHOR'),
                            'roomVer'     => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_ROOMVER'),
                            'flitHor'     => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_FLITHOR'),
                            'flitVer'     => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_FLITVER'),
                            'hinge'       => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_HINGE'),
                            'roll'        => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_ROLL'),
                            'moveHor'     => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_MOVEHOR'),
                            'moveVer'     => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_MOVEVER'),
                            'fade'        => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_FADE'),
                            'fadeHor'     => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_FADEHOR'),
                            'fadeVer'     => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_FADEVER'),
                            'scaleInHor'  => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_SCALEINHOR'),
                            'scaleInVer'  => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_SCALEINVER'),
                            'scaleOutHor' => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_SCALEOUTHOR'),
                            'scaleOutVer' => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_SCALEOUTVER'),
                            'scalePulse'  => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_SCALEPULSE'),
                            'scaleWave'   => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_SCALEWAVE'),
                            'roEdgeHor'   => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_ROEDGEHOR'),
                            'roEdgeVer'   => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_ROEDGEVER'),
                            'newspaper'   => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_NEWSPAPER'),
                            'pushFromHor' => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_PUSHFROMHOR'),
                            'pushFromVer' => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_PUSHFROMVER'),
                            'slide'       => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_SLIDE'),
                            'fall'        => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_FALL'),
                            'pulseShort'  => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_PULSESHORT'),
                            'roSoft'      => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_ROSOFT'),
                            'roDeal'      => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_RODEAL'),
                            'wheelHor'    => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_WHEELHOR'),
                            'wheelVer'    => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_WHEELVER'),
                            'snakeHor'    => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_SNAKEHOR'),
                            'snakeVer'    => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_SNAKEVER'),
                            'shuffle'     => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_SHUFFLE'),
                            'browseLeft'  => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_BROWSELEFT'),
                            'browseRight' => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_BROWSERIGHT'),
                            'slideBehind' => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_SLIDEBEHIND'),
                            'vacuumHor'   => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_VACUUMHOR'),
                            'vacuumVer'   => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_VACUUMVER'),
                            'scaleSoft'   => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_SCALESOFT'),
                            'snapHor'     => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_SNAPHOR'),
                            'snapVer'     => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_SNAPVER'),
                            'letInHor'    => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_LETINHOR'),
                            'letInVer'    => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_LETINVER'),
                            'stickHor'    => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_STICKHOR'),
                            'stickVer'    => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_STICKVER'),
                            'growthHor'   => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_GROWTHHOR'),
                            'growthVer'   => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_GROWTHVER'),
                            'soEdgeHor'   => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_SOEDGEHOR'),
                            'soEdgeVer'   => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_SOEDGEVER'),
                            'shake'       => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_SHAKE'),
                            'tinHor'      => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_TINHOR'),
                            'tinVer'      => JText::_('PLG_SYSTEM_BDTHEMES_SHORTCODES_TINVER'),
                        ),
                    ),
                ),
    		),
    	)
    );
}