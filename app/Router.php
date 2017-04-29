<?php

use Core\M;

//--------------------------------------------------------------------------
// Admin
//--------------------------------------------------------------------------

M::Route()->get('/admin', 'DefaultController', 'home');
M::Route()->get('/admin/subpage', 'DefaultController', 'subPage');

M::Route()->get('/admin.*', 'DefaultController', 'notFound');
M::Route()->post('/admin.*', 'DefaultController', 'notFound');
M::Route()->delete('/admin.*', 'DefaultController', 'notFound');
M::Route()->put('/admin.*', 'DefaultController', 'notFound');

//--------------------------------------------------------------------------
// Web
//--------------------------------------------------------------------------

M::Route()->get('/', 'DefaultController', 'home');
M::Route()->get('/subpage', 'DefaultController', 'subPage');

M::Route()->get('.*', 'DefaultController', 'notFound');
M::Route()->post('.*', 'DefaultController', 'notFound');
M::Route()->delete('.*', 'DefaultController', 'notFound');
M::Route()->put('.*', 'DefaultController', 'notFound');
