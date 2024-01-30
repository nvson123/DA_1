<?php
require_once "BaseModel.php";
function selectAllUser()
{
    $sql = "SELECT * FROM user";
    return getData($sql);
}

function delUser($id){
    $sql = "DELETE FROM user WHERE id = $id";
    return getData($sql);
}