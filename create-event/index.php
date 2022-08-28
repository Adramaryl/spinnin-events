<?php

require "model.php";
require "../system/form_helper.php";
require "../system/auth_helper.php";

prevent_not_connected(true);

function validateInputs($inputs) {

    $errors = [];

    if (empty(trim($inputs['title']))) {
        $errors['title'] = 'Title is required';
    }

    if (empty(trim($inputs['image']))) {
        $errors['image'] = 'Image is required';
    }

    if (empty(trim($inputs['videolink']))) {
        $errors['videolink'] = 'Video link is required';
    }

    if (empty(trim($inputs['date']))) {
        $errors['date'] = 'Date is required';
    }

    if (empty(trim($inputs['info']))) {
        $errors['info'] = 'Info is required';
    }

    if (empty(trim($inputs['ticketslink']))) {
        $errors['ticketslink'] = 'Tickets link is required';
    }

    return $errors;
}



if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $validations = validateInputs($_POST);

    $event = [
                'title' => sanitize_input($_POST['title']),
                'image' => sanitize_input($_POST['image']),
                'videolink' => sanitize_input($_POST['videolink']),
                'date' => sanitize_input($_POST['date']),
                'info' => sanitize_input($_POST['info']),
                'ticketslink' => sanitize_input($_POST['ticketslink'])
            ];

    if (sizeof($validations) === 0) {

        if(!empty($_FILES['image']['name'])) {
            $target_dir = '../images/';
            $target_file = $target_dir . $_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
            $event['image'] = $target_file;
        }
        
        try {
            createEvent($event);
            redirect('/spinnin_events');
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
    } 
}

require "view.php";