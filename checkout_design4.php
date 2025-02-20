
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
  .form-group input[type="tel"],
  .form-group select{
    width: 93%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-left: 10px;
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

html{
    background:#f4f4f0;
}
  body {
    font-family: sans-serif;
    margin:auto;
  }
  
  .maincontainer{
        max-width:1200px;
        margin:auto;
  }
 
 
.container {
    display: grid;
    grid-template-columns: 2fr 1fr; /* Two columns */
    gap: 2em; /* Space between the boxes */
    padding: 20px;
}

.box {
    color: black; /* White text */
    border-radius: 5px;
    
}

.box2{
    border: 1px solid;
    border-radius: 5px;
    background: white;
}

h1{
    font-weight: normal;
    margin: 1.1em 1em;
    font-family: sans-serif;
}



.cart[role=list] > [role=listitem] {
    display: grid;
}

.cart > .cart-summary {
    display: grid;
    gap: 1rem;
        padding: 1.5rem 18px
}

.cart[role=list] > [role=listitem] > :first-child {
    display: grid;
    grid-template-columns: 132px 1fr auto;
    gap: 1rem;
    border-bottom: 1px solid black;
}

.cart[role=list] > [role=listitem] > :first-child > figure {
      padding: 0px;
    margin: 0px;
}

.cart[role=list] > [role=listitem] > :first-child > figure img {
    width: 100%;
    height: 100%;
}


.cart[role=list] > [role=listitem] > :first-child > section {
    display: flex;
    flex-direction: column;
    gap: .25rem;
}

.cart[role=list] > [role=listitem] > :first-child > section footer {
    margin-top: auto;
}

.cart[role=list] > [role=listitem] > :first-child > section:last-child {
    align-items: end;
}


.cart > .cart-summary > * {
    display: grid;
    gap: 1rem;
    grid-auto-flow: column;
    justify-content: space-between;
}

.cart > .cart-summary h4 {
   margin:0px;
   font-weight:normal;
}

/* Responsive styles */
@media (max-width: 600px) {
    .container {
        grid-template-columns: 1fr; /* Stack in one column */
    }
}

.stack {
    display: grid;
    border-radius: .25rem;
       
}

.stack > div{
     padding: 18px;
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
<body >
    
  <div class="maincontainer">
    <h1>Checkout</h1>
  </div>
  
  <hr />
  
  <div class="maincontainer">  
      <div class="container">
        <div class="box box1">
           <div style="display: grid; gap: var(--spacer-5);    border: 1px solid;
    border-radius: 5px;
    background: white;">
            <div class="cart" role="list">
                <div role="listitem">
                    <section>
                        <figure>
                            <a href="https://busybrainy.gumroad.com/l/enhoc?_gl=1*1m5gbpu*_ga*NzY0NTgyMDMxLjE3MjY1ODI4MzM.*_ga_6LJN6D94N6*MTcyNjY1NDYxOC41LjEuMTcyNjY1NDYxOS4wLjAuMA..">
                                <img src="https://public-files.gumroad.com/ihfu6jiy7x5lvcljvf07r5nbg412" alt="Primary Learning Bundle">
                            </a>
                        </figure>
                        <section style="text-align: left;">
                           
                                <h4>Primary Learning Bundle</h4>
                         
                            Busy Brainy
                        </section>
                        <section>
                            <span class="current-price" aria-label="Price" style="    margin: 21px 20px;">$15</span>
                        </section>
                    </section>
                </div>
                
                <div class="cart-summary">
                    <div>
                        <h4>Subtotal</h4>
                        <div>$15</div>
                    </div>
                    <div>
                        <h4>Shipping Charges</h4>
                        <div>0</div>
                    </div>
                   
                </div>
                
                  <div class="cart-summary" style="border-top:1px solid black;font-size: 1.3em;"> 
                    
                    <div >
                        <h4>Total</h4>
                        <div>$15</div>
                    </div>
                </div>
        
                
            </div>
        </div>

        
        </div>
        <div class="box box2">
            <div class="stack" aria-label="Payment form">
       
                    <div class="form-group">
                      <label for="email">Email Address</label>
                        <span id="display-span1" style="    float: right;color: grey;"></span>
                
                      <input type="email" id="email" name="email" required placeholder="Your email address">
                    </div>
               
                
                <div style="border-top:1px solid black">
                   <h4 >Pay with</h4>
                    <div id="paypal-button-container"></div>
                </div>
                
                 <div class="form-group" style="border-top:1px solid black">
                      <label for="country">Country</label>
                        <span id="display-span1" style="    float: right;color: grey;"></span>
                
                      <!--<input type="email" id="country" name="country" value="Malaysia">-->
                      <select id="country" disabled name="country" value="Malaysia"><option>Malaysia</option></select>
                    </div>
            </div>
        </div>
      </div>
        
  </div>
    
   

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
    createOrder: function(data, actions) {
        return actions.order.create({
            purchase_units: [{
                amount: {
                    currency_code: '<?php echo $currency; ?>',
                    value: <?php echo $itemPrice; ?>
                },
            }],
            application_context: {
                shipping_preference: "NO_SHIPPING"
              }
        });
    },
    onApprove: function(data, actions) {
        return actions.order.capture().then(function(orderData) {
            var postData = { paypal_order_check: 1, order_id: orderData.id };
            fetch('paypal_checkout_validate', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: encodeFormData(postData)
            })
            .then(function(response) {
                return response.json();
            })
            .then(function(result) {
                if (result.status == 1) {
                    window.location.href = "payment-status.php?checkout_ref_id=" + result.ref_id;
                } else {
                    const messageContainer = document.querySelector("#paymentResponse");
                    messageContainer.classList.remove("hidden");
                    messageContainer.textContent = result.msg;
                    setTimeout(function() {
                        messageContainer.classList.add("hidden");
                    }, 5000);
                }
            })
            .catch(function(error) {
                console.error('Error:', error);
            });
        });
    }
}).render('#paypal-button-container');



</script>

</body>
</html>
