<?php
return array(
    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter' => function ($sm) {
                $config = $sm->get('Configuration');
                if(!isset($config['db'])){
                    return false;
                }
                if(class_exists('DbProfiler\Db\Adapter\ProfilingAdapter')){
                    $adapter = new DbProfiler\Db\Adapter\ProfilingAdapter($config['db']);
                    $adapter->setProfiler(new DbProfiler\Db\Profiler\Profiler);
                    $adapter->injectProfilingStatementPrototype();
                } else {
                    $adapter = new Zend\Db\Adapter\Adapter($config['db']);
                }
                return $adapter;
            },
        ),
    ),
);
