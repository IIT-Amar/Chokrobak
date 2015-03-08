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
        $data = array(
            'source' => 'http://localhost/chokrobak/assets/images/profile/Sujit%20musotafa.JPG',
            'name' => 'Shujit Mustofa',
            'profession' => 'Singer',
            'birthdate' => '...',
            'birthplace' => '...'
        );

        $this->load->view("celebrity/".$page, $data);
    }
}