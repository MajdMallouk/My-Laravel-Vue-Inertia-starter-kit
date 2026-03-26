<?php

use Inertia\Testing\AssertableInertia as Assert;

it('renders the home inertia page', function () {
    $this->get(route('home'))
        ->assertSuccessful()
        ->assertInertia(fn (Assert $page) => $page
            ->component('Home')
            ->where('appName', config('app.name'))
        );
});
