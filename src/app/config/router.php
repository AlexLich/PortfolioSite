<?php
namespace App\Config;
use AltoRouter;
class Router
{
  protected $router;

    function __construct()
    {
        $this->router = new AltoRouter();

        $this->router->map('get', '/', function() {
            $this->routingController('HomeController', 'index');
        });

        $this->router->map('get', '/resume', function() {
            $this->routingController('ResumeController', 'index');
        });

         $this->router->map('get', '/portfolio', function() {
             $this->routingController('PortfolioController', 'index');
         });

        $this->router->map('get', '/about', function() {
            $this->routingController('AboutController', 'index');
        });

        $this->router->map('get', '/login', function() {
            $this->routingController('AuthController', 'index');
        });

        $this->router->map('post', '/login', function() {
            $this->routingController('AuthController', 'login');
        });

        $this->router->map('get', '/logout', function() {
            $this->routingController('AuthController', 'logout');
        });

        $this->router->map('get', '/articles', function() {
            $this->routingController('ArticleController', 'getAll');
        });


        // Я не понял зачем это?

        // $this->router->map('get', '/articles/form', function() {
        //     $this->routingController('ArticleController', 'getForm');
        // });

        $this->router->map('post', '/articles', function() {
            $this->routingController('ArticleController', 'add');
        });

        $this->router->map('post', '/articles/[i:id]', function($id) {
            $this->routingController('ArticleController', 'delete', $id);
        });

        $this->router->map('get', '/articles/[i:id]/edit', function($id) {
            $this->routingController('ArticleController', 'edit', $id);
        });

        $this->router->map('post', '/articles/[i:id]/edit', function($id) {
            $this->routingController('ArticleController', 'save', $id);
        });

        $this->router->map('get', '/articles/[i:id]/read', function($id) {
            $this->routingController('ArticleController', 'read', $id);
        });
    }

    public function routing()
    {
        $match = $this->router->match();
        $target = $match['target'];
        $param = $match['params'];

        if($match && is_callable( $match['target'])) {
            call_user_func_array( $match['target'], $match['params'] );
        } else {
            // no route was matched
            $this->NotFound();
        }
    }

    public function routingController($controllerName, $action, $param = null)
    {
        $controllerName = "App\\Controller\\".$controllerName;
        if (class_exists($controllerName)) {
            $controller = new $controllerName;
            if (method_exists($controller, $action)) {
                if (is_null($param)) {
                    $controller->$action();
                }  else {
                    $controller->$action($param);
                }
            }
        } else {
            $this->NotFound();
        }
    }

    public function NotFound()
    {
        header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
        include('src/404.php');
    }
}
