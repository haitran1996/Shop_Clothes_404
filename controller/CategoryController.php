<?php

namespace Controller;
class CategoryController
{
    private $categoryDB;

    public function __construct()
    {
        $this->categoryDB = new categoryDB();
    }

    public function index()
    {
        $category = $this->categoryDB->getAll();
        include "view/list.php";
    }

    public function add()
    {

    }
}