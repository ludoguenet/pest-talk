<?php

it('has a homepage', function () {
    $this->get('/')->assertOk();
});
