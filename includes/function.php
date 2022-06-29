<?php

function debug($data)
{
    echo '<hr><pre>';
    print_r($data);
    echo '<hr></pre>';
};

function moyenne($data)
{
    $value = 0;
    for ($i = 0; $i < count($data); $i++) {
        $value += $data[$i];
    }
    echo $value / count($data);
}
