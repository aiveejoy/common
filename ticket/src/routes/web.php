<?php

$route = env('PACKAGE_ROUTE', '').'/tickets/';
$controller = 'Increment\Common\Ticket\Http\TicketController@';
Route::post($route.'create', $controller."create");
Route::post($route.'retrieve', $controller."retrieve");
Route::post($route.'update', $controller."update");
Route::post($route.'update_assign', $controller."updateAssign");
Route::post($route.'delete', $controller."delete");
Route::post($route.'resolve', $controller."resolveTicket");
Route::get($route.'test', $controller."test");