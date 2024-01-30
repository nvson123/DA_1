<?php
require_once 'Models/UserModel.php';
function listUser()
{
    $users = selectAllUser();
    include_once "Views/Users/ListUser.php";
}
function deleteUser($id)
{
    delUser($id);
    header('Location:index.php?url=list-user');
    exit();
}