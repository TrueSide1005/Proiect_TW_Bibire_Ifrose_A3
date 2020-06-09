<?php
class App
{

    protected $controller = 'home';
    protected $method = 'index';

    protected $params = [];

    public function __construct()
    {
        //Based on url decide which controller to call
        $url = $this->parseUrl();
        $this->controler($url);
    }

    public function parseUrl()
    {
        if (isset($_GET['url'])) {

            // ignoring last /
            $trimmedUrl = rtrim($_GET['url'], '/');
            $sanitizedUrl = filter_var($trimmedUrl, FILTER_SANITIZE_URL);

            // taking evry part
            return explode('/', $sanitizedUrl);
        }
    }

    public function controler($url)
    {
        //if is set after parsing url on first position is set if not is used the deafaul one
        if (isset($url[0]) && file_exists(__DIR__ . '/../controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once __DIR__ . '/../controllers/' . $this->controller . '.php';

        //new instance of controller specifed by url
        $this->controller = new $this->controller();

        if (isset($url[1]) && method_exists($this->controller, $url[1])) {
            $this->method = $url[1];
            unset($url[1]);
        }

        $this->params = $url ? array_values($url) : [];
        call_user_func_array([$this->controller, $this->method], $this->params);
    }
}
