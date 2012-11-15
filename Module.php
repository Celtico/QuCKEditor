<?php
/**
 * Author: Cel Ticó Petit
 *
 * Company: Cencis s.p.
 * Contact: cel@cenics.net
 */
namespace QuCKEditor;

class Module
{

    /**
     * @return array
     */
    public function getViewHelperConfig()
    {
        return array(
            'factories' => array(
                'QuCkEditor' => function ($sm) {
                    $config = $sm->getServiceLocator()->get('config');
                    $QuCk = new View\Helper\QuCkEditor($config['QuConfig']['QuCKEditor']);
                    return $QuCk;
                },
            ),
        );

    }

    /**
     * @return mixed
     */
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    /**
     * @return array
     */
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
}
