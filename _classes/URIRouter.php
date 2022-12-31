<?php

class URIRouter
{
    private string $root;

    public function __construct(string $root)
    {
        $this->root = $root;
    }


    private function method()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    private array  $stack = [];

    public function page(string $method, string $name, callable $callback)
    {
        $this->stack[$method][$name] = $callback;
    }

    public function loadFile(String $file, array $vars = [])
    {
        foreach ($vars as $variable=>$valu) $$variable = $value;

        include_once $this->root . '/' . trim($file, '/');
    }

    private string $currentPage  = 'index';

    public function run()
    {
        ob_start();

        $this->currentPage = isset($_GET['page'])?  filter_var($_GET['page'], FILTER_SANITIZE_URL): 'index';

        $method      = $this->method();

        if (isset($this->stack[$method][$this->currentPage])) {
            $this->stack[$method][$this->currentPage]($this);
        }
        else {
            echo 'page '. $this->currentPage . ' not support on method: ' . $this->method();
        }

        ob_end_flush();
    }
}