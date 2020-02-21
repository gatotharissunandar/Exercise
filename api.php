<?php
if ((isset($_POST['name'])) || (isset($_POST['phone']))) {
    echo check_blacklist($_POST['name'], $_POST['phone']);
}

function check_blacklist($name = '', $phone = '')
{
    $file_handle = fopen("blacklist.txt", "rb");
    while (!feof($file_handle)) {
        $line_of_text = fgets($file_handle);
        $parts = explode(' ', $line_of_text);
        $parts[1] = trim(preg_replace('/\n/', '', $parts[1]));
        if (($parts[0] == $name) || ($parts[1] == $phone)) {
            return true;
        }
    }
    fclose($file_handle);
}
