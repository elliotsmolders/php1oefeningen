<?php

function PrintHead() {

    echo file_get_contents("./templates/header.html");
}

function PrintJumbo($title,$subtitle) {
    echo str_replace(["@Titel@", "@subtitel@"], [$title, $subtitle],file_get_contents("./templates/jumbo.html"));
}

function PrintFormInput($labelid, $label,$placeholder){
    echo str_replace(["@labelid@","@label@","@placeholder@"],[$labelid,$label,$placeholder], file_get_contents("./templates/form_input_row.html"));
}
function PrintFormStatic($labelid, $label, $placeholder){
    echo str_replace(["@labelid@", "@label@","@placeholder@"], [$labelid, $label,$placeholder],file_get_contents("./templates/form_static.html"));
}