<?php

piklist('field', array(
	'type' => 'text'
,'field' => 'demo_text'
,'label' => 'Text box'
,'description' => 'Field Description'
,'value' => 'Default text'
,'attributes' => array(
		'class' => 'text'
	)
));

piklist('field', array(
	'type' => 'select'
,'field' => 'demo_select'
,'label' => 'Select box'
,'description' => 'Choose from the dropdown.'
,'attributes' => array(
		'class' => 'text'
	)
,'choices' => array(
		'option1' => 'Option 1'
	,'option2' => 'Option 2'
	,'option3' => 'Option 3'
	)
));

piklist('field', array(
	'type' => 'colorpicker'
,'field' => 'demo_colorpicker'
,'label' => 'Choose a color'
,'value' => '#aee029'
,'description' => 'Click in the box to select a color.'
,'attributes' => array(
		'class' => 'text'
	)
));