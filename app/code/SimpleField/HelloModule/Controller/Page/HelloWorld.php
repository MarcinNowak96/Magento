<?php


namespace SimpleField\HelloModule\Controller\Page;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\ResponseInterface;

class HelloWorld extends Action
{

    public function execute()
    {
        return "Hello World";
    }
}
