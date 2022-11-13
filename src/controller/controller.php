<?php
declare(strict_types=1);

require_once('src\view\View.php');
require_once('src\Request.php');

class Controller
{
    public View $View;
    public Request $Request;
    public const DEFAULT_ACTION = "standingsAction";

    public function __construct(Request $request)
    {
        $this->View = new View();
        $this->Request = $request;
    }
    public function run()
    {
        $methodName = $this->Request->getParam('action') . 'Action';
        echo $methodName . "<br>";
        
        // if(!method_exists($this, $methodName))
        // {
        //     $methodName = self::DEFAULT_ACTION;
        // }
        echo $methodName;
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