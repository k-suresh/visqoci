<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mytemplate
{
    private $data;
    private $js_file;
    private $css_file;
    private $CI;

    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->helper('url');
        //$this->addJS( base_url('assets/js/jquery-1.7.1.min.js') );
        //$this->addCSS( base_url('assets/css/semantic.min.css') );
    }

    public function addJS( $name )
    {
        $this->js_file = $name;
    }

    public function addCSS( $name )
    {
        $this->css_file = $name;
    }

    public function load_JS_and_css()
    {
        $this->data['header_asset'] = '';
        if ( $this->css_file )
        {
            foreach( $this->css_file as $css )
            {
                //print_r($css);
                $this->data['header_asset'] .= "<link rel='stylesheet' type='text/css' href='".site_url()."/assets/css/".$css.".css'>". "\n";
            }
        }

        if ( $this->js_file )
        {
            foreach( $this->js_file as $js )
            {
                $this->data['header_asset'] .= "<script type='text/javascript' src='".site_url()."/assets/js/".$js.".js'></script>". "\n";
            }
        }        
        return $this->data;
    }    
}