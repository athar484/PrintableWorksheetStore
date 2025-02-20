
<?php 

if (function_exists('opcache_reset')) {
    opcache_reset();
}

// Enable error reporting
error_reporting(E_ALL); 
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');


  
// Include the configuration file  

require_once 'config.php'; 
if(!empty($_GET['sp']) && $_GET['sp']==true){
  $itemPrice-=1;
}

$COUNTRY = isset($_GET['c']) ? strtoupper($_GET['c']) : 'MY';

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Checkout</title>
<style>
  body {
    font-family: sans-serif;
    background-color: #fff;
    padding: 0px;
    margin:0px;
  }
  .container {
      background-color: #f5f5f5;
    /*box-shadow: 0 0 4px rgba(0, 0, 0, 0.1);*/
    padding: 8px 8px;
    color: #000000;
    border: 2px solid #dfdfdf;
    border-left: 0px;
    border-right: 0px;
    /* width: 100%; */
    line-height: 1.5em;
    font-size: 0.9em;
}
  h2 {
    text-align: center;
    margin-bottom: 30px;
  }
  .form-group {
    margin-bottom: 20px;
  }
  .form-group label {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
  }
  .form-group input[type="email"], 
  .form-group input[type="tel"] {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  #paypal-button-container {
    margin-top: 20px;
    text-align: center;
    width:90%;
    margin:auto;
  }
  
  table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 10px;
  }
  table td {
    padding: 10px;
    vertical-align: top;
  }
  .no-border td {
    border: none;
  }
  .total {
    font-weight: bold;
    text-align: right;
    font-size: 1.3em;
  }
  
  table td{
          vertical-align: middle;
  }
  
   .popup {
     position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: #fff;
  padding: 20px;
  width: 100%;
  text-align: center;
  border-radius: 8px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
  z-index:1000;
  display:none;
  }

 .popup h2 {
    color: #333;
  }

 .popup p {
    color: #666;
    margin-bottom: 20px;
  }

 .popup .button-container {
    display: flex;
    justify-content: center;
  }

 .popup .button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

.popup  .button:hover {
    background-color: #45a049;
  }

  .popup .close {
        color: white;
    font-size: 16px;
    cursor: pointer;
    background: red;
    margin: 0px 8px;
    cursor: pointer;
  }
  
  .overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.7); /* semi-transparent overlay */
  z-index: 1000; /* Ensure it's above other content */
  display:none;
}
</style>
<?php include 'header.php' ?>
<script>
    fbq('track', 'AddToCart');
    
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const cValue = urlParams.get('c');
    
</script>
</head>
<body>
    <div style="text-align:center;padding: 13px;text-align: left;;"><img style="width: 140px;" src="images/logo.png" /></div>
  <h2 style="color:white;font-size: 1.5em;display:none">PayPal Checkout <br><span style="font-size:0.8em"> The Safer, Easier Way to Pay</span></h2>
<div class="container">

  <table class="no-border">
    <tr>
      <td style="width:90px;height:90px"><img width="100%" src="images/il_794xN.5449451925_cmdn-1.webp" /></td>
      <td>Primary Learning Bundle <br>4000+  Worksheets<br>36 Weeks of Curriculum</td>
      <td style="text-align:right">$9.00</td>
    </tr>
   
    <tr class="total">
      <td style="text-align:left;height: 35px;">Total</td>
      <td></td>
      <td>$9.00</td>
    </tr>
  </table>
 </div>
 <br/>
  <div id="paymentResponse" class="hidden"></div>
  
  <!-- Customer Information Form -->
  <form id="customer-info-form" style="display:none">
    <div class="form-group">
      <label for="email" style="display: inline-block;">Email Address</label>
        <span id="display-span1" style="    float: right;color: grey;"></span>

      <input type="email" id="email" name="email" required onkeyup="updateSpan1(this.value)">
    </div>
    <div class="form-group" >
      <label for="phone" style="display: inline-block;">Phone Number</label>
        <span id="display-span2" style="    float: right;color: grey;"></span>

      <input type="tel" id="phone" name="phone" required onkeyup="updateSpan2(this.value)">
    </div>
  </form>
  
  <div style=" text-align: center; font-size: 0.9em; color: #666565; margin-bottom: 14px; margin-top: 10px; ">Express Checkout</div>
  <!-- PayPal Button Container -->
  <div id="paypal-button-container"></div>


<div class="overlay"></div>
<div class="popup"> 
  <span class="close" style="display:none">&times;</span>
  <h2>Special Discount - Last Offer!</h2>
  <p>If you buy now, we'll give you an additional $1 discount, making the final price $8 for now only!</p>
  <div class="button-container">
   
    <a href="" class="button close">Close</a>
     <a href="checkout?sp=true" class="button claim">Claim Ofer</a>
  </div>
</div> 

<!-- PayPal JavaScript SDK -->
<script src="https://www.paypal.com/sdk/js?locale=en_<?php echo $COUNTRY ?>&client-id=<?php echo PAYPAL_SANDBOX?PAYPAL_SANDBOX_CLIENT_ID:PAYPAL_PROD_CLIENT_ID; ?>&currency=<?php echo $currency; ?>"></script>



<script>
function showPopup() {
    // Get the popup element
    const popup = document.querySelector('.popup');
    const overlay = document.querySelector('.overlay');

    
    // Get close buttons
    const closeButton = popup.querySelector('.close');
    const claimButton = popup.querySelector('.claim');

    // Close popup when close button is clicked
    closeButton.addEventListener('click', function() {
      popup.style.display = 'none';
      overlay.style.display = 'none';
    });

    // Handle claim button click
    //claimButton.addEventListener('click', function() {
      // Handle claiming action (e.g., redirect to checkout page)
     // alert('Congratulations! You claimed the special discount.');
     // popup.style.display = 'none'; // Close popup after claiming
    //});

    // Show the popup
    popup.style.display = 'block';
    overlay.style.display='block';
  }


function encodeFormData(data) {
    const params = [];
    
    for (let [key, value] of Object.entries(data)) {
        params.push(encodeURIComponent(key) + '=' + encodeURIComponent(value));
    }
    
    return params.join('&');
}

let formSubmitted = false;

// Event listener for beforeunload
window.addEventListener('beforeunloadx', function(event) {
    if (!formSubmitted) {
        // Cancel the event
        event.preventDefault();
        // Chrome requires returnValue to be set
        event.returnValue = '';

 // Display a confirmation message
        const confirmationMessage = 'Are you sure you want to leave? Your changes may not be saved.';
        event.returnValue = confirmationMessage; // For older browsers
        //return 1; // For modern browsers
        
        // Call your callback function here
        yourCallbackFunction();
        
        return false;
    }
});

function yourCallbackFunction() {
    let url = window.location.href;

    // Create a URLSearchParams object from the URL
    let searchParams = new URLSearchParams(url);
    
    // Check if the URL contains the query parameter '?sp=true'
    if (searchParams.has('sp')) {
        console.log('URL contains ?sp=true');
        
        showPopup();
        
        //return false;
    } else {
        console.log('URL does not contain ?sp=true');
        
        return false;
    }

}


 function updateSpan1(value) {
    document.getElementById('display-span1').textContent = value;
  }
   function updateSpan2(value) {
    document.getElementById('display-span2').textContent = value;
  }
  // Render PayPal button
 paypal.Buttons({
    // Sets up the transaction when a payment button is clicked
    
    createOrder: (data, actions) => {
        return actions.order.create({
            "purchase_units": [{
                "custom_id": "<?php echo $itemNumber; ?>",
                "description": "<?php echo $itemName; ?>",
                "amount": {
                    "currency_code": "<?php echo $currency; ?>",
                    "value": <?php echo $itemPrice; ?>,
                    "breakdown": {
                        "item_total": {
                            "currency_code": "<?php echo $currency; ?>",
                            "value": <?php echo $itemPrice; ?>
                        }
                    }
                },
                "items": [
                    {
                        "name": "<?php echo $itemName; ?>",
                        "description": "<?php echo $itemName; ?>",
                        "unit_amount": {
                            "currency_code": "<?php echo $currency; ?>",
                            "value": <?php echo $itemPrice; ?>
                        },
                        "quantity": "1",
                        "category": "DIGITAL_GOODS"
                    },
                ]
            }]
        });
    },
    
    // Finalize the transaction after payer approval
    onApprove: (data, actions) => {
        return actions.order.capture().then(function(orderData) {
            //setProcessing(true);

            var postData = {paypal_order_check: 1, order_id: orderData.id};
            fetch('paypal_checkout_validate', {
                method: 'POST',
                 headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                body: encodeFormData(postData)
            })
            .then((response) => response.json())
            .then((result) => {

                if(result.status == 1){
                    window.location.href = "payment-status.php?checkout_ref_id="+result.ref_id;
                }else{
                    const messageContainer = document.querySelector("#paymentResponse");
                    messageContainer.classList.remove("hidden");
                    messageContainer.textContent = result.msg;
                    
                    setTimeout(function () {
                        messageContainer.classList.add("hidden");
                        //messageText.textContent = "";
                    }, 5000);
                }
               // setProcessing(false);
            })
            .catch(error => console.log(error));
        });
    }
}).render('#paypal-button-container');

</script>

</body>
</html>
