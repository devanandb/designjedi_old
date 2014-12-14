<?php 

function set_active($path, $active = 'uk-active') {

	return Request::is($path) ? $active : '';

}