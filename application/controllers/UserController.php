<?php

class UserController extends Zend_Controller_Action {

    public function indexAction() {
        $muser = new Model_User;
        echo '<pre>';
        $this->view->users = $muser->listUser();
    }

    public function registerAction() {
        $request = $this->getRequest();
        echo '<pre>';
        var_dump($request);
    }

    public function insertAction() {
        echo 'test';
////        $this->getHelper('viewRenderer')->setNoRender();
//        $this->render('testrender');
    }

    function testAction() {
        $baseurl = $this->_request->getbaseurl();
        $this->view->doctype();
        $this->view->headtitle("QHOnline.Info - Chapter 3: Zend Framework");
        $this->view->headMeta()->appendName("keyword", "Zend Framework,Codeigniter,PHP Framework");
        $this->view->headMeta()->offsetSetName("1", "description", "Khoa hoc PHP Framework tai QHOnline");
        $this->view->headLink()->appendStylesheet($baseurl . "/public/css/test.css");
        $this->view->headscript()->appendFile($baseurl . "/public/js/test.js", "text/javascript");
        $this->view->headscript()->offsetSetFile("1", $baseurl . "/public/js/test2.js", "text/javascrip");
    }

}

