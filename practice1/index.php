<?php

class Product
{
    public $id;
    public $name;
    public $price;
    public $description;

    public function __construct($id, $name, $price, $description)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }

    public function displayDetails()
    {
        echo "Product: {$this->name} (ID: {$this->id})\n";
        echo "Price: {$this->price}\n";
        echo "Description: {$this->description}\n";
    }
}

class ShopCart
{
    public $items = [];

    public function addItemToCart(Product $product, $quantity = 1)
    {
        $this->items[] = ['product' => $product, 'quantity' => $quantity];
    }

    public function displayCart()
    {
        foreach ($this->items as $item) {
            echo "Product: {$item['product']->name}, Quantity: {$item['quantity']}\n";
        }
    }
}
class Feedback
{
    public $productId;
    public $userId;
    public $rating;
    public $score;

    public function __construct($productId, $userId, $rating, $comment)
    {
        $this->productId = $productId;
        $this->userId = $userId;
        $this->rating = $rating;
        $this->score = $comment;
    }

    public function displayReview()
    {
        echo "Product ID: {$this->productId}, User ID: {$this->userId}\n";
        echo "Rating: {$this->rating}\n";
        echo "Comment: {$this->score}\n";
    }
}

class User
{
    public $id;
    public $username;
    public $email;

    public function __construct($id, $username, $email)
    {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
    }

    public function displayProfile()
    {
        echo "User ID: {$this->id}\n";
        echo "Username: {$this->username}\n";
        echo "Email: {$this->email}\n";
    }
}

class Cookie extends Product
{
    public $firm;
    public function __construct($id, $name, $price, $description, $firm)
    {
        parent::__construct($id, $name, $price, $description);
        $this->firm = $firm;
    }
}