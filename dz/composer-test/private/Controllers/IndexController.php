<?php
use Alex\Test\Models\IndexModel;

class IndexController
{
    function indexAction() {
        $model = new IndexModel();
        $model->indexModel();
    }
}
?>