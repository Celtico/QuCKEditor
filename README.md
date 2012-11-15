QuCKEditor
========================

Zf2 module, for CKEditor

Requirements
========================
- ZendSkeletonApplication https://github.com/zendframework/ZendSkeletonApplication
- CKEditor http://ckeditor.com/

Installation
========================
- Drag a folder in modules or vendor
- Download the latest version CKEditor and placing somewhere in the public folder
- Enable and configure the module has application.config.php routes module.config.php
- Check the version the php folder
- Support for elfinder


Integration
========================
- Instance $ this-> QuCkEditor () in your project

#Sample

<textarea id="editor"></textarea>
<?
    $this->QuCkEditor(
        'editor',
            array('Width' => "100%",
                 'Height' => "340",
                 'toolbar'=> array(
                     array('Source','Maximize'),
                     array('Templates','Styles','Format'),
                     array('Bold','Italic','Underline','Subscript','Superscript'),
                     array('NumberedList','BulletedList','Outdent','Indent'),
                     array('JustifyLeft','JustifyCenter','JustifyRight'),
                     array('Link','Unlink'),
                     array('Image','Table')
                 )
            )
    );
?>

> Sorry for the spelling errors


