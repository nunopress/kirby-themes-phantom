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

    try {
        $response = $email->send();
    } catch (Error $e) {
        $response = $e->getMessage();
    }

    return [
        'sending_email_response' => $response
    ];
};