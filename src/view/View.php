<?php
declare(strict_types=1);

class View 
{
    public function render(?string $page, array $viewParam = []) :void
    {
        require_once("layout.php");
    }
}