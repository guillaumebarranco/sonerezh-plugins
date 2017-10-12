<?php

Router::connect('/streams/last', array('controller' => 'streams', 'action' => 'last'));
Router::connect('/streams/create/:id', array('controller' => 'streams', 'action' => 'create'), array('pass' => array('id')));
