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
        $this->router->map('get', '/news', function() {
            $this->routingController('NewsController', 'getNews');
        });

//        $this->router->map('post', '/news/[i:id]', function($id) {
//            $this->routingController('NewsController', 'deleteNew', $id);
//        });

        $this->router->map('get', '/login', function() {
            $this->routingController('AuthController', 'index');
        }); 
        
        $this->router->map('get', '/logout', function() {
            $this->routingController('AuthController', 'logout');
        });
        
        $this->router->map('get', '/admin', function() {
            $this->routingController('AdminController', 'index');
        });

        $this->router->map('post', '/login', function() {
            $this->routingController('AuthController', 'login');
        });
        
        
        $this->router->map('get', '/delnews', function() {
            $this->routingController('delNewsController', 'getNews');
        });

        $this->router->map('post', '/delnews/[i:id]', function($id) {
            $this->routingController('delNewsController', 'deleteNew', $id);
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
