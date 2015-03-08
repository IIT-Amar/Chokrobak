<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: IIT
 * Date: 3/7/15
 * Time: 10:34 AM
 */
class Athlete extends CI_Controller{
    public function athlete1($page = 'athlete1')
    {
        $this->load->view("athlete/".$page);
    }
}