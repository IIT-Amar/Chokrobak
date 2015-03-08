<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: IIT
 * Date: 3/7/15
 * Time: 10:34 AM
 */
class Writter extends CI_Controller{
    public function writter1($page = 'writter1')
    {
        $this->load->view("writter/".$page);
    }
}