<?php
namespace Etobi\MyCustomExtension\Controller;

class ExampleController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    public function indexAction()
    {
        return 'Hello World';
    }
}