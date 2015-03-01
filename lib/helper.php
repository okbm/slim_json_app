<?php
/**
 * よく使いそうな関数入れる
 */

function h($str){
    return htmlspecialchars($str, ENT_QUOTES, "UTF-8");
}
