<?php

public function make_slug($string) {
    $make_string = str_replace('?', ' ', $string);
    return preg_replace('/\s+/u', '-', trim($make_string));
}
