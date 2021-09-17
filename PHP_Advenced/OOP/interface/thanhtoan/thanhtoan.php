<?php

interface phuongthucthanhtoan{
    public function tratien();
}

class paypal implements phuongthucthanhtoan{
    public function tratien()
    {
        echo "thanh toan bang paypal";
    }
}
class visa implements phuongthucthanhtoan{
    public function tratien()
    {
        echo "thanh toan bang paypal";
    }
}
class tienmat implements phuongthucthanhtoan{
    public function tratien()
    {
        echo "thanh toan bang paypal";
    }
}