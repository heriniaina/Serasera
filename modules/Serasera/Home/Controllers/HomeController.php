<?php 

namespace Serasera\Home\Controllers;
use Serasera\Base\Controllers\BaseController;

class HomeController extends BaseController {

    public function index() {

        $this->data['page_title'] = lang('Home.fandraisana');
        return view('\Serasera\Home\Views\home_index', $this->data);
    }
}