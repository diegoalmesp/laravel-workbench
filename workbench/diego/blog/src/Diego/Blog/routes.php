<?php

Route::get( 'posts', [ 'uses' => 'BlogController@getIndex' ] );