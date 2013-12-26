<?php  
require_once('simpletest/autorun.php');
require_once('../quaderno_load.php');

class QuadernoApiTest extends TestSuite {
  # please use your own api_key and account_id
  const API_KEY = 'xxxxxxxxxxxxxxxxxxxx';
  const ACCOUNT_ID = 'xxxxxx';

  function __construct() {
    parent::__construct();
    QuadernoBase::init(self::API_KEY, self::ACCOUNT_ID, true);

    $this->addFile('unit/general_test.php');
    $this->addFile('unit/contact_test.php');
    $this->addFile('unit/item_test.php');
    $this->addFile('unit/invoice_test.php');
    $this->addFile('unit/expense_test.php');
    $this->addFile('unit/payment_test.php');
    $this->addFile('unit/estimate_test.php');
  }
}
?>
