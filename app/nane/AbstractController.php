<?php
 
namespace Nane;
 
abstract class AbstractController
{
    private $templateEngine;
 
    public function __construct() 
    {
        $loader = new \Twig\Loader\FilesystemLoader(dirname(dirname(__DIR__)) . '/templates');
        $this->templateEngine = new \Twig\Environment($loader);
        $this->flash = new Flashbag();
    }
    public function flash()
    {
        return $this->flash;
    }
 
    protected function render($view, $vars = [])
    {
        return $this->templateEngine->render($view.'.html.twig', $vars);
    }

    public function redirectTo($url)
    {
        header("Location: /".$url);
    }
}