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
        if(method_exists($this, $this->Request->getParam('action') . 'action'))
        {
            $action = $this->Request->getParam('action') . 'action';
        }
        else
        {
            $action = self::DEFAULT_ACTION;
        }
        $this->$action();
    }
    private function standingsAction()
    {
        $this->View->render('');
    }

}