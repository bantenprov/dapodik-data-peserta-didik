<?php

Route::group(['prefix' => 'dd-peserta-didik'], function() {
    Route::get('demo', 'Bantenprov\DDPesertaDidik\Http\Controllers\DDPesertaDidikController@demo');
});
