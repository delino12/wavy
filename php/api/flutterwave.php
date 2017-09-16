<?php

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

$custId = "76464"; //your users customer id
$currency = Currencies::NAIRA; // currency to charge the card
$authModel = AuthModel::BVN; // can be BVN, NOAUTH, PIN, etc
$narration = "narration for this transaction";
$responseUrl = ""; //callback url
$country = Countries::NIGERIA;
Card::charge($card, $amount, $custId, $currency, $country, $authModel, $narration, $responseUrl);

?>