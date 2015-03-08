<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: IIT
 * Date: 3/7/15
 * Time: 10:34 AM
 */
class YoungTalent extends CI_Controller{
    public function youngtalent1($page = 'youngtalent1')
    {
        $this->load->view("youngtalent/".$page);
    }
}