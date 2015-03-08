<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: IIT
 * Date: 3/8/15
 * Time: 12:42 AM
 */
class Contributions extends CI_Controller {
    public function index()
    {
        $this->load->view('contributions');
    }
}