<?php

use ValidFormBuilder\ValidForm;

require_once('../vendor/autoload.php');

$form = new ValidForm('formName');
$form->addField('Name', 'name', ValidForm::VFORM_STRING);