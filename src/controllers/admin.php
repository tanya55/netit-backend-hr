<?php
if (!(Auth::isAdmin() || Auth::isHR())) {
    redirectTo('signin');
}

if (isset($_POST['create_new_post_tokken']) && $_POST['create_new_post_tokken'] == '1') {

    Database::insert('job_offers', array(
        'title'             => $_POST['job_title'],
        'information'           => $_POST['job_information'],
    ));

    Database::insert('job_roles', array(
        'id_job'  => Database::getLastInsertedId(),
        'id_role'   => $_POST['post_category'],
    ));
}