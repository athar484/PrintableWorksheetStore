<?php if (function_exists('opcache_reset')) {
    opcache_reset();
}
?>




<style>

  .price-container {
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

  .strike-through {
    position: absolute;
    
    left: 0;
    right: 0;
    transform: translateY(-50%);
    font-size: 18px;
    text-decoration: line-through;
    color: #888;
    opacity: 0.7;

  }

  .price {
    color: red;
    font-weight: bold;
    font-size: 36px;
    display: block;
    margin-bottom: 10px;
    position: relative; /* Ensure the current price is above the strike-through */
    z-index: 1;
    top:40px
  }

  .strike-through:before {
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
  
 .offer2{
     margin-top: 61px;
    margin-bottom: -29px;
        font-size: 14px;
 }
</style>


<div class="maxwidth">
<div class="price-container ">
  <span style="display:block" class="strike-through">$49</span>
  <span class="price">$15</span>
  <div style="display:block;    " class="offer2" >Congratulations! You have unlocked a special discount.</div>

</div >

   
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
">Buy Now! Save 70%</a>

</div>
<br/>