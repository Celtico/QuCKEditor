QuCKEditor 0.0.3-dev
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

0.0.3-dev

- Update CKEditor 4.1

Demo example
==================================

http://qumodules.com/

Requirements
========================
- ZendSkeletonApplication https://github.com/zendframework/ZendSkeletonApplication

Installation
========================
- Drag a folder into modules folder
- Move folder plugin in to public/js folder (look current version http://ckeditor.com/)
- Enable the module application.config.php and configure the routes module.config.php

Installation by Composer
========================

```
cd YourFolderProject/
php composer.phar self-update
php composer.phar require "qu-modules/qu-ckeditor":"dev-master"
```

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
        array('width' => "100%",
            'height' => "300",
            'uiColor'=> '#FFFFFF',
        )
    );
```