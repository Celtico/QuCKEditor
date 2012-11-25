<?php
/**
 * @Author: Cel Ticó Petit
 * @Contact: cel@cenics.net
 * @Company: Cencis s.c.p.
 */

namespace QuCKEditor\View\Helper;

use Zend\View\Helper\AbstractHelper;

class QuCKEditor extends AbstractHelper
{

    /**
     * @var
     */
    protected $Config;

    /**
     * @param $Config
     */
    public function __construct($Config)
    {
       $this->Config = $Config;
    }

    /**
     * @param $name
     * @param $options
     *
     * @return string
     */
    public function __invoke($name,$options)
    {
        return $this->QuCKEditor($name,$options);
    }

    /**
     * @param $name
     * @param $options
     *
     * @return string
     */
    public function QuCKEditor($name,$options = array()) {

        $CKEditor = new \CKEditor();

        $CKEditor->returnOutput = true;

        /*
         * General module configurations
         */
        if(isset($this->Config['QuBasePath']))             $CKEditor->basePath                          = $this->Config['QuBasePath'].'/';
        if(isset($this->Config['Toolbar']))                $CKEditor->config['toolbar']                 = $this->Config['Toolbar'];
        if(isset($this->Config['Width']))                  $CKEditor->config['width']                   = $this->Config['Width'];
        if(isset($this->Config['Height']))                 $CKEditor->config['height']                  = $this->Config['Height'];
        if(isset($this->Config['Language']))               $CKEditor->config['language']                = $this->Config['Language'];
        if(isset($this->Config['Color']))                  $CKEditor->config['uiColor']                 = $this->Config['Color'];

        // El Finder
        if(isset($this->Config['QuElFinderBaseURL']))      $CKEditor->config['filebrowserBrowseUrl']    = $this->Config['QuElFinderBaseURL'];
        if(isset($this->Config['QuElFinderWindowWidth']))  $CKEditor->config['filebrowserWindowWidth']  = $this->Config['QuElFinderWindowWidth'];
        if(isset($this->Config['QuElFinderWindowHeight'])) $CKEditor->config['filebrowserWindowHeight'] = $this->Config['QuElFinderWindowHeight'];

        /*
         * Especial confirmations in your form
         */
        if(isset($options['QuBasePath']))                  $CKEditor->basePath                          = $options['QuBasePath'].'/';
        if(isset($options['Toolbar']))                     $CKEditor->config['toolbar']                 = $options['Toolbar'];
        if(isset($options['toolbar']))                     $CKEditor->config['toolbar']                 = $options['toolbar'];
        if(isset($options['Width']))                       $CKEditor->config['width']                   = $options['Width'];
        if(isset($options['Height']))                      $CKEditor->config['height']                  = $options['Height'];
        if(isset($options['Language']))                    $CKEditor->config['language']                = $options['Language'];
        if(isset($options['Color']))                       $CKEditor->config['uiColor']                 = $options['Color'];

        // El Finder
        if(isset($options['QuElFinderBaseURL']))           $CKEditor->config['filebrowserBrowseUrl']    = $options['QuElFinderBaseURL'];
        if(isset($options['QuElFinderWindowWidth']))       $CKEditor->config['filebrowserWindowWidth']  = $options['QuElFinderWindowWidth'];
        if(isset($options['QuElFinderWindowHeight']))      $CKEditor->config['filebrowserWindowHeight'] = $options['QuElFinderWindowHeight'];

        echo $CKEditor->replace($name);
    }
}