<?php 

class App{

    protected $controller = 'judet';
    protected $method = 'index';
    protected $params = [];

    public function __construct(){
        $url = $this->parseUrl();
        $pathApp = dirname(__FILE__, 2);
        if(isset($url)){
        if(file_exists( $pathApp . '/Controllers/' . $url[0] . '.php'))
        {
            $this->controller = $url[0];
            unset($url[0]);
        }
        }
        require_once $pathApp . '/Controllers/' . $this->controller . '.php';

        $this->controller = new $this->controller;

        #var_dump($this->controller);
        /*if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        */

        $this->params = $url ? array_values($url) : [];
        call_user_func_array([$this->controller, $this->method], $this->params);
    }


    public function parseUrl(){
        if(isset($_GET['url'])){
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }

}


?>