<?php
Route::get ('test', function()
{
    Event::fire ('thing.happened');
    return Redirect::to('/');
});
