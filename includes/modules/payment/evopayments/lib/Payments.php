<?php

namespace EvopaymentsPayments;

class Payments extends Request {

    protected $_request;

    public function __construct() {
        parent::__construct();
        $this->_request = new Request();
    }
}
