<?php

it('assert that the website is valid', function ($website) {
    // $this->assertIsString($website);
    expect($website)
        ->toBeString()
        ->toContain('.net')
        ->not->toContain('.com');
})->with(['https://laraveljutsu.net'])->only();