<?php
    include('connection.php');
?>

<header class="bg-success bg-gradient text-white">
    <div class="container px-4 text-center">
        <h2 class="fw-bolder"><b>Donate</b></h>

        
    </div>  
</header>


<div class="row">
    <div class="col-md-12 text-center">

<script async
  src="https://js.stripe.com/v3/buy-button.js">
</script>

<stripe-buy-button
  buy-button-id="buy_btn_1Pmg7iHACoeePYfZomofd00Q"
  publishable-key="pk_live_51PkibaHACoeePYfZ1lswjJc0giygN0xUXlVRC3VfEZpThO5U8A9VwXBYqdd7xnAnRc6btlDI7uBwCjTqU886MKpo00E7UUKqY7"
>
</stripe-buy-button>


<div id="donate-button-container">
<div id="donate-button"></div>
<script src="https://www.paypalobjects.com/donate/sdk/donate-sdk.js" charset="UTF-8"></script>
<script>
PayPal.Donation.Button({
env:'production',
hosted_button_id:'C72VKXY23PVAE',
image: {
src:'https://www.paypalobjects.com/pl_PL/PL/i/btn/btn_donateCC_LG.gif',
alt:'Przekaż darowiznę za pomocą przycisku PayPal',
title:'PayPal - The safer, easier way to pay online!',
}
}).render('#donate-button');
</script>
</div>




</div>
</div>
