<?php
require_once "Models/FeedbackModel.php";

function listFeedback()
{
    $feedbacks = selectAllFeedback();
    include_once "Views/Feedback/ListFeedback.php";
}

function deleteFeedback()
{
    $id = $_GET['id'];
    delFeedback($id);
    header("Location:index.php?url=list-feedback");
}