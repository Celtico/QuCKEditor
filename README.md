QuCKEditor 0.0.2-dev
========================

ZF2 module for CKEditor

Release Notes
========================

0.0.1-dev

- Initiation CKEditor in zf2

0.0.2-dev

- Initiation auto load class map
- Fixed capitalization inconsistencies
- Fixed the url of the file manager
- Optional addition of the settings in the module or directly in the helper
- Ability to configure the language and color

Requirements
========================
- ZendSkeletonApplication https://github.com/zendframework/ZendSkeletonApplication
- CKEditor http://ckeditor.com/

Installation
========================
- Drag a folder into modules folder or vendor folder
- Download the latest version CKEditor and place in the public folder (you can place in somewhere)
- Enable the module application.config.php and configure the routes module.config.php
- Check the version php

Installation by Composer
========================

In my experience, to avoid errors

- cd /Users/YourName/Desktop/YourFolderProject/
- /Applications/YourSever/bin/php/php5.3.6/bin/php /Users/YourName/Desktop/YourFolderProject/composer.phar install

In the errors check and install

- http://git-scm.com/downloads
- http://getcomposer.org/download


Integration
========================
- Instance $ this-> QuCKEditor () in your project

#Sample

```html
<textarea id="editor"></textarea>
```

```php
    $this->QuCKEditor(
        'editor',
            array('Width' => "100%",
                  'Height' => "340",
                  'Color' => "#000",
                  'Toolbar'=> array(
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
```