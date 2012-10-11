<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap {

    protected function _initDoctype() {
        $this->bootstrap('view');
        $view = $this->getResource('view');
        $view->doctype('XHTML1_STRICT');
    }

    protected function _initDatabase() {
        $db_dapt = $this->getPluginResource('db')->getDbAdapter();
        Zend_Registry::set('db_dapt', $db_dapt);
    }

    protected function _initAutoload() {
        $autoloader = new Zend_Application_Module_Autoloader(array(
                    'namespace' => '',
                    'basePath' => dirname(__FILE__),
                ));
        return $autoloader;
    }

}

