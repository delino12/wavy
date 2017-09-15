<!DOCTYPE html>
<html>
<head>
	<title>Ravy Wavy</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
<?php
/*
  use Flutterwave\Card;
  use Flutterwave\Flutterwave;
  use Flutterwave\AuthModel;

  $merchantkey = "744hdhhg"; //merchant key on flutterwave dev portal
  $apiKey = "58jdjdjd"; //merchant api key on flutterwave dev portal
  $env = "staging"; //can be staging or production
  Flutterwave::setMerchantCredentials($merchantKey, $apiKey, $env);

  $card = [
    "card_no" => "",
    "cvv" => "",
    "expiry_month" => "",
    "expiry_year" => ""
  ];

  $authModel = AuthModel::BVN; //this tells flutterwave how to validate the user of the card is the card owner
  //you can also use AuthModel::NOAUTH which does not need validate method call
  $validateOption = Flutterwave::SMS; //this tells flutterwave to send authentication otp via sms
  $bvn = ""; //represents the bvn number of the card owner/user
  $result = Card::tokenize($card, $authModel, $validateOption, $bvn = "");

  if ($result->isSuccessfulResponse()) {
    echo("Card was successfully tokenized");
  }

  $card = [
    "card_no" => "",
    "cvv" => "",
    "expiry_month" => "",
    "expiry_year" => "",
    "card_type" => "" //optional parameter. only needed if card was issued by diamond card
  ];
  $custId = "76464"; your users customer id
  $currency = Currencies::NAIRA; //currency to charge the card
  $authModel = AuthModel::BVN; can be BVN, NOAUTH, PIN, etc
  $narration = "narration for this transaction";
  $responseUrl = ""; //callback url
  $country = Countries::NIGERIA;
  Card::charge($card, $amount, $custId, $currency, $country, $authModel, $narration, $responseUrl);
  */
?>
<br /><br />
<div class="container">
  <div class="row">
    <div class="col-md-5">
      <form id="payment-form" method="post" action="{{url}}">
        <div class="form-group">
          <label for="card_type">Select Card Type</label>
          <select id="card_type" class="form-control">
            <option class="verve">Verve</option>
            <option class="master_card">Master Card</option>
            <option class="visa">Visa</option>
            <option class="freedom">Freedom</option>
          </select>
        </div>
        <div class="form-group">
          <label for="card_no">Card No</label>
          <input type="text" class="form-control" id="card_no" name="" placeholder="card no"> 
        </div>
        <div class="form-group">
          <label for="card_exp">Exp</label>
          <input type="date" class="form-control" id="card_exp" name="" placeholder="Exp"> 
        </div>
        <div class="form-group">
          <label for="card_cvv">CVV</label>
          <input type="password" class="form-control" id="card_cvv" name="" placeholder="cvv"> 
        </div>
        <div class="form-group">
          <button class="btn btn-primary">Pay</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php
// get payment details
$card_no = 5438898014560229;
$card_type = "Master Card";
$card_exp = "09/19";
$card_cvv = 789;
$card_year = "";


if($card_no)
{
   $card = [
    "card_no" => $card_no,
    "cvv" => $card_cvv,
    "expiry_month" => $card_exp,
    "expiry_year" => $card_year,
    "card_type" => $card_type //optional parameter. only needed if card was issued by diamond card
  ];
}

?>

</body>
</html>