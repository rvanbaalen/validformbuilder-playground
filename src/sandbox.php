<?php

use ValidFormBuilder\ValidForm;
use ValidFormBuilder\ValidWizard;

require_once('../vendor/autoload.php');

/**
 * Use this file to create your own ValidForm Builder forms or wizards.
 *
 * The code below serves as an example to get you started.
 * This file is included in index.php and your form will show there.
 */

$form = new ValidForm('formName');
$form->addField('name', 'Name', ValidForm::VFORM_STRING);

//*** Output submitted data or the form

$output = "No form created yet.";

if ($form->isSubmitted() && $form->isValid()) {
    echo $form->valuesAsHtml();
} else {
    echo $form->toHtml();
}