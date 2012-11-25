<?php
/**
 * @Author: Cel Ticó Petit
 * @Contact: cel@cenics.net
 * @Company: Cencis s.c.p.
 */
return array(

    'controllers' => array(
        'invokables' => array(
            'QuCKEditor' => 'QuCKEditor\Controller\QuCKEditor',
        ),
    ),
    'router' => array(
        'routes' => array(
            'QuCKEditor' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/quckeditor',
                    'defaults' => array(
                        'controller' => 'QuCKEditor',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),
    'QuConfig' => array(
        'QuCKEditor' => array
        (
            'QuBasePath' =>'/qu-admin/js/plugins/ckeditor', // Require!!
            'Width'      => "100%",
            'Height'     => "340",
            'Language'   => 'es',
            'Color'      => '#F7F7F7',

            // Full toolbars
            'Toolbar'    => array
            (
                array('Source','-','DocProps','Preview','Print'),
                array('Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo'),
                array('Find','Replace','-','SelectAll','-','SpellChecker', 'Scayt'),
                array('Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField'),
                '/',
                array('Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat'),
                array('NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','CreateDiv','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl'),
                array('Link','Unlink','Anchor' ),
                array('Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak'),
                '/',
                array('Styles','Format','Font','FontSize'),
                array('TextColor','BGColor' ),
                array('Maximize', 'ShowBlocks','-','About'),
            ),
            'QuElFinderBaseURL'      => '/quelfinder/ckeditor',
            'QuElFinderWindowWidth'  => "1000",
            'QuElFinderWindowHeight' => "650",
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);