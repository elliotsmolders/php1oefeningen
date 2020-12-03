<?php

function PrintHead() {
    echo file_get_contents("./templates/header.html");
}

function PrintJumbo() {
    echo file_get_contents("./templates/jumbo.html");
}