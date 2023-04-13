<?php 

Class Product {
    private $productName;
    private $monthlyFee;

    public function __construct($productName = null, $monthlyFee = null)
    {
        $this->productName = $productName;
        $this->monthlyFee = $monthlyFee;

    }

    public function getProductName ($productName)
    {
        return $this->productName;
    }

    public function setProductName ($productName)
    {
        $this->productName = $productName;
    }

    public function getMonthlyFee ($monthlyFee)
    {
        return $this->monthlyFee;
    }

    public function setMonthlyFee ($monthlyFee)
    {
        $this->monthlyFee = $monthlyFee;
    }
}