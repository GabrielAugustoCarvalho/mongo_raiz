<?php 
    $manager=new \MongoDB\Driver\Manager("mongodb://localhost:27017");

    $up=new \MongoDB\Driver\BulkWrite;

    $up->update(['nome'=>'Gabriel Augusto de Carvalho'],['$set'=>['nome'=>'Gabriel Augusto de Carvalho']]);

    $manager->executeBulkWrite('raiz.academicos', $up);