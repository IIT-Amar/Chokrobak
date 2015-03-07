<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: IIT
 * Date: 3/7/15
 * Time: 2:33 PM
 */
class Newspaper extends CI_Controller {
    public function index($page = 'newspaper')
    {
        $this->load->view($page);
    }
}