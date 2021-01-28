<?php

namespace SimpleField\HomeModule\Block\Html;

use Magento\Framework\View\Element\Template;

class NewBlock extends Template
{

    /**
     * Current template name
     *
     * @var string
     */

    protected $_template = 'SimpleField_HomeModule::html/newBlock.phtml';

    public function __construct(Template\Context $context, array $data = [])
    {
        parent::__construct($context, $data);
//        var_dump($data);
//        exit();
    }
    public function getKostenloser(): string
    {
        return "KOSTENLOSER VERSAND";
    }
    public function getExpress(): string
    {
        return "EXPRESSVERSAND";
    }
    public function getNumber(): string
    {
        return "MO-FR: +49938747189";
    }
}
