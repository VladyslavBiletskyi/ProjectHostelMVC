<?php

return array(
    'floor/([0-9]+)' => 'floor/view/$1',
    'user/([0-9]+)' => 'user/view/$1',
    'floor' => 'floor/index',
    'signup' => 'user/signup',
    'signin' => 'user/signin',
    '' => 'site/index'
);

//дописывать по мере необходимости