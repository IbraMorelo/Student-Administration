<?php
    namespace Config;

    class Routes
    {
        public static function run(Request $request)
        {
            $controller = $request->getController() . "Controller";
            $route = ROOT . "Controllers" . DS . $controller. ".php";
            $method = $request->getMethod();
            $argument = $request->getArgument();

            if(is_readable($route))
            {
                require_once $route;
                $show =  "Controllers\\" . $controller;
                $controller = new $show;
                if(!isset($argument))
                {
                    $data = call_user_func(array($controller, $method));
                }else{
                    $data = call_user_func_array(array($controller, $method), $argument);
                    //$controller::$method($argument[0]);
                }
            }

            //Cargar Vistas
            $route = ROOT . "Views" . DS . $request->getController() . DS . $request->getMethod() . ".php";
            if(is_readable($route))
            {
                require_once($route);
            }else{
                print "There's not route";
            }
        }
    }
?>