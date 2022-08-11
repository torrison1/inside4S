<?php
namespace Services\Content;

Class Page extends \Tools\CommonCore\SmartWebsiteService {

    public function contacts(){

        $this->view->render($this->data,'Content/contacts', 'app_default_template');
    }

}