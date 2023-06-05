<?php

use Illuminate\Support\Facades\Route;

Route::group(['as' => 'postcode-nl::'], static function () {

    Route::get('postcode-nl/address/{postcode}/{houseNumber}/{houseNumberAddition?}', [
        'as' => 'address',
        'uses' => 'Carry2Web\PostcodeNl\Http\Controllers\AddressController@get'
    ]);

});
