<?php


generate_file_list();

function generate_file_list() {

    $directory = '.';
    $scanned_directory = dirToArray($directory);

    // encode array to json
    $json = json_encode($scanned_directory);

//write json to file
    if (file_put_contents("current/data.json", $json))
        echo "JSON file created successfully...";
    else
        echo "Oops! Error creating json file...";

    print_r($scanned_directory);

}

function dirToArray($dir) {

    $result = array();

    $cdir = scandir($dir);
    foreach ($cdir as $key => $value)
    {
        if (!in_array($value,array(".","..",".git","vendor","mod")))
        {
            if (is_dir($dir . DIRECTORY_SEPARATOR . $value))
            {
                $result[$value] = dirToArray($dir . DIRECTORY_SEPARATOR . $value);
            }
            else
            {
                //$result[] = $value;
                $result[$value] = array("path" =>  $dir . DIRECTORY_SEPARATOR . $value, "md5" => md5_file($dir . DIRECTORY_SEPARATOR . $value));
            }
        }
    }

    return $result;
}