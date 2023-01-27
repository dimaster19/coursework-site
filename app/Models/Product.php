<?php

namespace App\Models;

class Product
{
    protected $id;
    protected $name;
    protected $price;
    protected $count;
    protected $description;
    protected $mainImage;
    protected $categoryID;
    protected $images;

    // GET METHODS
    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getCount()
    {
        return $this->count;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getMainImage()
    {
        return $this->mainImage;
    }

    public function getCategoryID()
    {
        return $this->categoryID;
    }

    public function getImages()
    {
        return $this->images;
    }

    // SET METHODS
    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setPrice(string $price)
    {
        $this->price = $price;
    }

    public function setCount(int $count)
    {
        $this->count = $count;
    }

    public function setMainImage(string $mainImage)
    {
        $this->mainImage = $mainImage;
    }

    public function setCategoryID(string $categoryID)
    {
        $this->categoryID = $categoryID;
    }

    public function setImages($images)
    {
        $this->images = $images;
    }

    // CRUD OPERATIONS
    public function create(array $data)
    {

    }

    public function readAll()
    {   // !!!!!

        // Переделать как в read($name)

        // !!!!!
        $connect = new Connect();
        $con = $connect->db_connect();
        $query = pg_query($con, "SELECT * FROM products");
        if (!$query) {
            die("Ошибка выполнения запроса");
        }

        $connect = $connect->db_close();
        return $query;
    }

    public function read($productName)
    {

        $connect = new Connect();
        $con = $connect->db_connect();
        $query =  pg_query_params($con, 'SELECT * FROM products Where "ProductName" = $1', array($productName));
        if (!$query) {
            die("Ошибка выполнения запроса");
        }
        $result = pg_fetch_array($query);
        $this->id = $result[0];
        $this->name = $result[1];
        $this->price = $result[2];
        $this->count = $result[3];
        $this->description = $result[4];
        $this->mainImage = $result[5];
        $this->categoryID = $result[6];

        $arr = trim($result['ProductImages'], "{}"); // delete {} from arr
        $imgs = explode(",",$arr); //  breaks a string into array
        $this->images = $imgs;



        $connect = $connect->db_close();

        return $this;
    }

    public function readById($id)
    {

        $connect = new Connect();
        $con = $connect->db_connect();
        $query =  pg_query_params($con, 'SELECT * FROM products Where "ProductID" = $1', array($id));
        if (!$query) {
            die("Ошибка выполнения запроса");
        }
        $result = pg_fetch_array($query);
        $this->id = $result[0];
        $this->name = $result[1];
        $this->price = $result[2];
        $this->count = $result[3];
        $this->description = $result[4];
        $this->mainImage = $result[5];
        $this->categoryID = $result[6];

        $arr = trim($result['ProductImages'], "{}"); // delete {} from arr
        $imgs = explode(",",$arr); //  breaks a string into array
        $this->images = $imgs;



        $connect = $connect->db_close();

        return $this;
    }

    public function update(int $id, array $data)
    {

    }

    public function delete(int $id)
    {

    }
}
