<?php
if ((!Auth::isAdmin() || Auth::isHR())) {
    redirectTo('index');
}

if (isset($_POST["create_new_job_offer_tokken"]) && $_POST["create_new_job_offer_tokken"] == '1') {
    $jobTitle    = $_POST['job_title'];
    $jobCategory = $_POST['job_category'];
    $jobContent  = $_POST['job_content'];

    $createJobOfferQuery = "INSERT INTO tb_job_offers (title, information) VALUES('$jobTitle', '$jobInformation')";
    Database::query($createJobOfferQuery);

    $postID = Database::getLastInsertedId();
    $createJobCategoryQuery = "INSERT INTO tb_job_roles(id_job, id_role) VALUES ($postID, $jobCategory)";
    Database::query($createJobCategoryQuery);
}