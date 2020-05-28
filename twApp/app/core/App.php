<?php
class App
{

    protected $controller = 'home';
    protected $method = 'index';

    protected $params = [];

    public function __construct()
    {
        //Based on url decide whether call api or  controller 

        $url = $this->parseUrl();

        if (isset($url[0]) && $url[0] == "api")
            $this->api($url);
        else
            $this->controler($url);
    }

    public function parseUrl()
    {
        if (isset($_GET['url'])) {
            $trimmedUrl = rtrim($_GET['url'], '/');       // ignoram slash-ul de la final
            $sanitizedUrl = filter_var($trimmedUrl, FILTER_SANITIZE_URL);

            return explode('/', $sanitizedUrl);   // dupa primul / perluam bucatile ca un array  exemplu  home/pruduct/id => ['product', 'id']
        }
    }

    public function api($url)
    {
        if (isset($url[1])) { //daca e setat dupa pasarea ur-ului pe prima pozitie  si daca exista il setez daca nu ramane cel default
            require_once __DIR__ . '/../api/rest-service.php';
        }
    }

    public function controler($url)
    {
        if (isset($url[0]) && file_exists(__DIR__ . '/../controllers/' . $url[0] . '.php')) { //daca e setat dupa pasarea ur-ului pe prima pozitie  si daca exista il setez daca nu ramane cel default
            $this->controller = $url[0];
            // $this->params = array_slice($url, 1);   inlocuite de linia inainte de call
            unset($url[0]);
        }

        require_once __DIR__ . '/../controllers/' . $this->controller . '.php';

        $this->controller = new $this->controller();    // o noua instanta a controller-ului specificat de url 

        if (isset($url[1]) && method_exists($this->controller, $url[1])) {
            $this->method = $url[1];
            //  $this->params = array_slice($url, 2);    inlocuite de linia inainte de call
            unset($url[1]);
        }

        $this->params = $url ? array_values($url) : [];
        call_user_func_array([$this->controller, $this->method], $this->params);
    }
}
