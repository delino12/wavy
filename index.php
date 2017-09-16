<!DOCTYPE html>
<html>
<head>
	<title>Money Wavy</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>

<br /><br />
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="thumbnail">
        <div class="panel-body">
          <h4>Api Response shows below..</h4>
          <div id="response"></div>
        </div>
          
      </div>
    </div>
  </div>
  <script type="text/javascript">
    $("#response").load("php/payment-gateway.php");
  </script>
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <img src="https://ae01.alicdn.com/kf/HTB1HmSlLXXXXXXUXpXXq6xXFXXXZ/9-font-b-Color-b-font-Mens-font-b-Dress-b-font-Slim-Fit-font-b.jpg" width="100%" height="100">
      </div>
      <button class="btn btn-default" id="card-payment">Pay With Card</button>
      <button class="btn btn-default">Pay With Wallet</button>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <img src="https://ae01.alicdn.com/kf/HTB1HmSlLXXXXXXUXpXXq6xXFXXXZ/9-font-b-Color-b-font-Mens-font-b-Dress-b-font-Slim-Fit-font-b.jpg" width="100%" height="100">
      </div>
      <button class="btn btn-default" id="card-payment">Pay With Card</button>
      <button class="btn btn-default">Pay With Wallet</button>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <img src="https://ae01.alicdn.com/kf/HTB1HmSlLXXXXXXUXpXXq6xXFXXXZ/9-font-b-Color-b-font-Mens-font-b-Dress-b-font-Slim-Fit-font-b.jpg" width="100%" height="100">
      </div>
      <button class="btn btn-default" id="card-payment">Pay With Card</button>
      <button class="btn btn-default">Pay With Wallet</button>
    </div>
  </div>
  <div class="row" style="display: none;" id="payment">
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
<script type="text/javascript">
  $("#card-payment").click(function (){
    $("#payment").show();
  });

  function makePayment(){
    var card_no = "5399831635507417";
    var card_type = "Master";
    var card_exp = "09/19";
    var card_cvv = "950";

    return false;
  }
</script>

</body>
</html>