<?php
require_once "BaseModel.php";

function selectAllFeedback()
{
    $sql = "SELECT feedback.id, feedback.content,feedback.created_at, feedback.updated_at, user.username, user.fullname, user.email, user.phone_number, user.address, product.name
    FROM feedback
    INNER JOIN user ON feedback.user_id = user.id
    INNER JOIN product ON feedback.product_id = product.id";
    return getData($sql);
}

function delFeedback($id)
{
    $sql = "DELETE FROM feedback WHERE id = $id";
    return getData($sql);
}