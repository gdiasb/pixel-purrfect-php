<?php 

namespace Core;

use Core\Middleware\Middleware;

class Router {

    protected $routes = []; 

    public function add(string $uri, string $controller, string $method): Router {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method, 
            'middleware' => null
        ];

        return $this;
    }

    public function get(string $uri, string $controller): Router {
        return $this->add($uri, $controller, 'GET');        
    }

    public function post(string $uri, string $controller): Router {
        return $this->add($uri, $controller, 'POST'); 
    }

    public function delete(string $uri, string $controller): Router {
        return $this->add($uri, $controller, 'DELETE');
    }

    public function patch(string $uri, string $controller): Router {
        return $this->add($uri, $controller, 'PATCH');
    }
    
    public function only(string $key): Router {
        $this->routes[array_key_last($this->routes)]['middleware'] = $key;

        return $this;
    }

    protected function abort(int $code = 404): void {
        http_response_code($code);
        require base_path("views/errors/{$code}.view.php");
        die();
    }

    public function route(string $uri, string $method): mixed {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
                Middleware::resolve($route['middleware']);
                
                return require base_path('Http/controllers/'. $route['controller']);
            }
        }
        $this->abort();
    }

    public function previousUrl(): string {
        return $_SERVER['HTTP_REFERER'];
    }

}