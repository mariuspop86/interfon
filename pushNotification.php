<?php
    $ch = curl_init();

    $data = [
        'title' => 'Videocom',
        'message' => 'test content',
        'url' => 'https://www.9gag.com',
    ];

    curl_setopt($ch, CURLOPT_URL, 'https://pushcrew.com/api/v1/send/all');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_SAFE_UPLOAD, false); // required as of PHP 5.6.0
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

    curl_exec($ch);
