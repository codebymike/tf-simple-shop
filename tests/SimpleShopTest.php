<?php

namespace TF;

class SimpleShopTest extends \PHPUnit\Framework\TestCase
{
    public function test_that_empty_checkout_is_zero()
    {
        $this->assertTrue( SimpleShop::calculateTotal([]) === "£0.00" );
    }

    /* uncomment when ready
    public function test_that_single_item_totals_correctly()
    {
        $this->assertTrue( SimpleShop::calculateTotal(["Apple"]) === "£0.60" );
    }
    */

    /* uncomment when ready
    public function test_that_multiple_items_total_correctly()
    {
        $this->assertTrue( SimpleShop::calculateTotal(["Apple", "Orange"]) === "£0.85" );
    }
    */

    // ... further tests definitely required ...
}