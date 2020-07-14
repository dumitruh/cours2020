<?php 

require_once "formhelper.class.php";

$cars = array(
    "Mercedes", "BMW", "Suzuki", "Honda", "Honda1", " suzuki1"
);

$trucks = array(
    "SCANIA", "MAN", "IVECO"
);



$form = new FormHelper ("GET", "index.php?other_page=1");
$form->select($cars, "cars", 4);
$form->select($trucks, "trucks", 2);
$form->input('text', 'my_text');
$form->input('checkbox', 'my_checkbox');
$form->input('button', 'my_button' ,'button');
$form->close_tag();