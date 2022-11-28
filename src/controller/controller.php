<?php
declare(strict_types=1);

require_once('src\view\View.php');
require_once('src\Request.php');
require_once('src\model\Model.php');

class Controller
{
    public View $View;
    public Model $Model;
    public Request $Request;
    public static $configuration;
    public const DEFAULT_ACTION = "standingsAction";

    public function __construct(Request $request)
    {
        $this->Model = new Model(self::$configuration);
        $this->View = new View();
        $this->Request = $request;
    }
    public static function initConfiguration(array $config)
    {
        self::$configuration = $config;
    }
    public function run()
    {
        $methodName = $this->Request->getParam('action') . 'Action';
        
        if(!method_exists($this, $methodName))
        {
            $methodName = self::DEFAULT_ACTION;
        }
        $this->$methodName();
    }
    private function standingsAction()
    {
        $page = 'standings';
        $this->View->render($page);
    }
    private function matchesAction()
    {
        $page = 'matches';
        $this->View->render($page);
    }
    private function resultsAction()
    {                
        $page = 'results';
        $this->View->render($page);
    }

}