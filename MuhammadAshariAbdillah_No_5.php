<?php

for($x = 1;$x < 4;++$x){

    if($x == 1){

        echo "
        
        <h4>Makanan</h4>
        <ol>
        <li>Menu Makanan Ke 1</li>
        <li>Menu Makanan Ke 2</li>
        <li>Menu Makanan Ke 3</li>
        </ol>
        
        ";
        continue;
    }else if($x == 2){

        echo "
        
        <h4>Minuman</h4>
        <ol>
        <li>Menu Minuman Ke 1</li>
        <li>Menu Minuman Ke 2</li>
        <li>Menu Minuman Ke 3</li>
        </ol>

        ";
        continue;
    }else if($x == 3){

        echo "
        
        <h4>Parsel</h4>
        <ol>
        <li>Menu Parsel Ke 1</li>
        <li>Menu Parsel Ke 2</li>
        <li>Menu Parsel Ke 3</li>
        </ol>

        ";
        continue;

    }else{
        break;
    }
}

?>