<?php

function debug($data)
{
    echo '<hr><pre>';
    print_r($data);
    // var_dump($data);
    echo '<hr></pre>';
};

function moyenne($data)
{
    $value = 0;
    // for ($i = 0; $i < count($data); $i++) {
    //     $value += $data[$i];
    // }
    foreach ($data as $data) {

        echo $data . '<br>';
    }




    // echo $value / count($data);
}
