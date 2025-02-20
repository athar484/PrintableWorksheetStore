                            
<style>

  .price-container2 { 
        font-family: Arial, sans-serif;
    display: block;
    justify-content: center;
    align-items: center;
    margin: 0;
    text-align: center;
    /* position: relative; */
    font-size: 24px;
    margin-bottom: 59px;
    margin-top: 44px;
  }

  .strike-through2 {
    
    
      position: absolute;
    left: 0;
    right: 0;
    transform: translateY(-50%);
    font-size: 18px;
    text-decoration: line-through;
    color: #888;
    opacity: 0.7;
      display: none;

  }
 
  .pricex {
    color: #333;
    font-weight: bold;
    font-size: 36px;
    display: block;
    margin-bottom: 10px;
    position: relative; /* Ensure the current price is above the strike-through */
    z-index: 1;
    top:40px
  }

  .strike-through2:before {
    content: '';
    position: absolute;
    top: 50%;
    left: 0;
    width: 100%;
    height: 2px;
    background: linear-gradient(to right, #ccc, transparent);
    transform: translateY(-50%);
    z-index: 2;
  }
</style>
<style>
  .price2 {
    font-size: 36px;
    color: green;
    margin:auto;
        position: relative;
    top: 21px;
    font-weight: bold;

  }
  
  .offer2 {
    font-style: italic;
    color: #333;
    margin-top: 10px;
    display: none; /* Initially hidden */
        position: relative;
    top: 33px;
    padding: 0px 20px;
    color:#2a612c;

  }
</style>


<div class="price-container2">
  <span class="strike-through2" id="oldprice" >$75</span>
   <div class="price2" id="priceDisplay" style="color: red;">$75</div>
  <div class="offer2" id="offerMessage" >Congratulations! You have unlocked a special discount.</div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var priceDisplay = document.getElementById('priceDisplay');
      var offerMessage = document.getElementById('offerMessage');
        var oldprice = document.getElementById('oldprice');
      var currentPrice = 75;
      var reducedPrice = 10;
      var interval = 30; // Interval between each number change in milliseconds
      
      // Intersection Observer to trigger animation when price display becomes visible
      var observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
          if (entry.isIntersecting) {
            reducePrice();
            observer.unobserve(entry.target); // Stop observing once triggered
          }
        });
      }, { threshold: 0.5 }); // Trigger when 50% of the price display is visible
      
      observer.observe(priceDisplay); // Start observing the price display
      
      function reducePrice() {
        var timer = setInterval(function() {
          currentPrice--;
          if (currentPrice >= reducedPrice) {
            priceDisplay.textContent = '$' + currentPrice;
          } else {
            clearInterval(timer);
            priceDisplay.textContent = '$' + reducedPrice;
            priceDisplay.style.color = 'red'; // Change color to indicate final price
            offerMessage.style.display = 'block'; // Display the congratulatory message
            oldprice.style.display = 'block'; // 
          }
        }, interval);
      }
    });
  </script>
</div>

   
       <a href="checkout?c=<?php echo $country ?>" class="btn-buy" style="
    width: 89%;
    margin: auto;
    margin-bottom: 20px;
    margin-left: auto;
    margin-right: auto;
    display: block;
        font-size: 1.5em;
    font-family: 'Roboto';
        font-weight: bold;
    box-shadow: 4px 5px 7px #835e5e;
    border: 1px solid #6d6565;
">Claim This Offer Now</a>