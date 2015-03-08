<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: IIT
 * Date: 3/7/15
 * Time: 10:34 AM
 */
class Celebrity extends CI_Controller{
    public function celebrity1($page = 'celebrity1')
    {
        $this->load->view("celebrity/".$page);
    }
}