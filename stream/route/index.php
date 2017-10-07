<?php

Router::connect('/streams/last', array('controller' => 'streams', 'action' => 'last'));
Router::connect('/streams/new/:id', array('controller' => 'streams', 'action' => 'new'), array('pass' => array('id')));
