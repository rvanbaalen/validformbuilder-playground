<?php

use ValidFormBuilder\ValidForm;

require_once('../vendor/autoload.php');

$form = new ValidForm('formName');
$form->addField('name', 'Name', ValidForm::VFORM_STRING);