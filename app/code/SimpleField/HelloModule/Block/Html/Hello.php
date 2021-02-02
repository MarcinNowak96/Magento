<?php

namespace SimpleField\HelloModule\Block\Html;

use Magento\Framework\View\Element\Template;

class Hello extends Template
{
    public function getHello(): string
    {
        return "Hello";
    }
}
