<?php


class Core
{
    protected $currentController = 'Pages';
    protected $currentMethod = 'Index';
    protected $params = array();

    public function __construct()
    {
        $url = $this->getUrl();
        if(file_exists( '../app/controllers/'.ucwords($url[0]).'.php')){
        $this -> currentController = ucwords($url[0]);
        unset($url[0]);
    }
    // create controller object
        require_once '../app/controllers/'.$this->currentController.'.php';
        $this ->currentController = new $this->currentController();
       // check the method exists and set it up
        if(isset($url[1])){
            if( method_exists($this->currentController, $url[1])) {
                $this->currentMethod = $url[1];
                unset($url[1]);
            }
        }

        // set parameters
        $this->params = $url ? array_values($url) : array();
        // callback function with array params
        call_user_func_array(array($this->currentController, $this->currentMethod), $this->params);


    }
// get url and prepare it
    public function getUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}