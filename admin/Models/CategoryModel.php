<?php
require_once "BaseModel.php";
function selectAllCategory()
{
    $sql = "SELECT * FROM category";
    return getData($sql);
}
function delCategory($id)
{
    $sql = "DELETE FROM category WHERE id = $id";
    return getData($sql);
}
function insertCategory($name, $description)
{
    $sql = "INSERT INTO category (name, description) VALUES ('$name', '$description')";
    return getData($sql);
}
function selectOneCategory($id)
{
    $sql = "SELECT * FROM category WHERE id = $id";
    return getData($sql);
}
function updateCate($id, $name, $description)
{
    $sql = "UPDATE category SET name = '$name', description = '$description' WHERE id = $id";
    return getData($sql);
}
function checkNameCate($name)
{
    $sql = "SELECT * FROM category WHERE name = '$name'";
    return getData($sql);
}