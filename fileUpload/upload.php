<?php
// echo "<pre>";
// print_r($_POST);
// print_r($_FILES);
// exit;

// Allowed extentions.
$allowedExts = array("gif", "jpeg", "jpg", "png");

// Get filename.
$temp = explode(".", $_FILES["image"]["name"]);

// Get extension.
$extension = end($temp);

// An image check is being done in the editor but it is best to
// check that again on the server side.
// Do not use $_FILES["image"]["type"] as it can be easily forged.
$finfo = finfo_open(FILEINFO_MIME_TYPE);
$mime = finfo_file($finfo, $_FILES["image"]["tmp_name"]);

if ((($mime == "image/gif") || ($mime == "image/jpeg") || ($mime == "image/pjpeg") || ($mime == "image/x-png") || ($mime == "image/png")) && in_array($extension, $allowedExts)) {
    $random_str_7 = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 7);
    $random_str_15 = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 15);
    // Generate new random name.
    $name = substr(md5(microtime()),0,10) . "." . $extension;

    $upload_url = "images/" . $name;

    // Save file in the uploads folder.
    $uploaded = move_uploaded_file($_FILES["image"]["tmp_name"], $upload_url);

    // Generate response.
    list($width, $height) = getimagesize($upload_url);
    $data = new StdClass;
    $data->id = $random_str_7;
    $data->title = '';
    $data->description = '';
    $data->datetime = time();
    $data->type = $mime;
    $data->animated = false;
    $data->width = $width;
    $data->height = $height;
    $data->size = $_FILES["image"]["size"];
    $data->views = 0;
    $data->bandwidth = 0;
    $data->vote = '';
    $data->favorite = false;
    $data->nsfw = '';
    $data->section = '';
    $data->account_url = '';
    $data->account_id = 0;
    $data->comment_preview = '';
    $data->in_gallery = false;
    $data->deletehash = $random_str_15;
    $data->name = '';
    $data->link = $upload_url;

    $response = new StdClass;
    $response->data = $data;
    $response->success = true;
    $response->status = 200;
    echo stripslashes(json_encode($response));
}