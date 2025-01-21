<?php

test('example', function () {
    $response = $this->get('/admin');

    $response->assertOk();
});
