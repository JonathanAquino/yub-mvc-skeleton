<?php

/**
 * Dispatches the URL to an appropriate controller.
 */
class Dispatcher {

    /** Configuration variables for the current environment. */
    protected $config;

    /**
     * Creates the dispatcher.
     *
     * @param Config $config  configuration variables for the current environment
     */
    public function __construct($config) {
        $this->config = $config;
    }

    /**
     * Dispatches the URL to an appropriate controller.
     *
     * @param string $url  a relative URL, possibly with a query string
     */
    public function dispatch($url) {
        list($controllerClass, $action) = $this->parse($url);
        $controller = new $controllerClass($this->config, new PdoSingleton($this->config));
        $controller->$action();
    }

    /**
     * Returns the name of the controller and action to use for the given URL.
     *
     * @param string $url  a relative URL, possibly with a query string
     * @return array  a controller class name and action method name
     */
    protected function parse($url) {
        if ($url == '/public/index.php') {
            header('Location: /public/index.php/welcome/show', true, 302);
            exit();
        }
        if (!preg_match('!^/public/index.php/([^/?]+)/([^/?]+)!', $url, $matches)) {
            throw new Exception('Could not parse URL ' . $url);
        }
        return array(ucfirst($matches[1]) . 'Controller', 'action_' . $matches[2]);
    }

}
