<?php

return function ($site, $pages, $page, $args) {
    $query = get('contact');

    if (! $query) {
        return false;
    }

    if (! empty($query['antibot'])) {
        return false;
    }

    $email = email([
        'to' => $site->email(),
        'from' => $query['email'],
        'subject' => sprintf("Contact form site by %s <%s>", $query['name'], $query['email']),
        'body' => $query['message']
    ]);

    $response = ($email->send()) ? true : $email->error();

    return [
        'sending_email_response' => $response
    ];
};