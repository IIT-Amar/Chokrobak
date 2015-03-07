<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: IIT
 * Date: 3/6/15
 * Time: 12:06 AM
 */
class TVChannels extends CI_Controller {
    public function index($page = 'tvChannels')
    {
        $this->load->view($page);
    }
}
