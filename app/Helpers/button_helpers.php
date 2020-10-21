<?php

function button_edit($url = '#', $label = "Edit", $class = 'btn-edit')
{
   return '<a class="btn mr-1 mb-1 btn-warning btn-sm waves-effect waves-light ' . $class . ' mt-2" href="' . $url . '">' . $label . '</a>';
}
