
<?php 

if (function_exists('opcache_reset')) {
    opcache_reset();
}

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');


  
// Include the configuration file  

//require  'config.php'; 
define('PAYPAL_SANDBOX', FALSE); //TRUE=Sandbox | FALSE=Production 
define('PAYPAL_SANDBOX_CLIENT_ID', 'Adhfl3fJc7gOXxkUTAtTrTp528VOS0t8phs-eXMR_kUONU4LTC3KOeL9pmVjrhJX-bCm98mVPIx6vRL4'); 
define('PAYPAL_SANDBOX_CLIENT_SECRET', 'EE1-BONXp1Q3bii1V1swkT5IQA9xkb8BGJDRPqkVlcaz5iD-WqA_AwC0llGPJ7B_mncmp3vuyQY69o04'); 
define('PAYPAL_SANDBOX_URL', 'https://api.sandbox.paypal.com'); 


define('PAYPAL_PROD_CLIENT_ID', 'AWpw8_C93g28a_mpq76N_emSySJp7SvKJUB7kSHE7QjGJYyUStieN8dYoHWPDOb57RL6rE0cGLQh8Mx0'); 
define('PAYPAL_PROD_CLIENT_SECRET', 'EAK8Z08f055nEy_aE5ivaZvRp8CGvMWiER136vibYj23otGPWiZxx4JJXq1Py0u3_kvnQUlguG706cqp'); 
define('PAYPAL_PROD_URL', 'https://api-m.paypal.com'); 

if(!empty($_GET['sp']) && $_GET['sp']==true){
  $itemPrice-=1;
}

$country = isset($_GET['c']) ? strtoupper($_GET['c']) : 'MY';

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Checkout</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #007cba;
    padding: 20px;
  }
  .container {
    max-width: 600px;
    margin: auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
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
  }
  
  table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
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

label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }
    input[type="text"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    #card-field-submit-button {
      width: 100%;
      padding: 15px;
      background-color: #0070ba;
      color: #fff;
      border: none;
      border-radius: 4px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    #card-field-submit-button:hover {
      background-color: #005c99;
    }
    #result-message {
      text-align: center;
      margin-top: 20px;
      font-size: 16px;
      color: #333;
    }
    
    .select-box {
            width: 97%;
        position: relative;
        margin: auto;
        margin-bottom: 17px;
        }
        .select-box select {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #818181;
            border-radius: 4px;
            background-color: #fff;
            padding: 18px 11px;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
        }
        .select-box::after {
            content: '\25BC';
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            pointer-events: none;
        }
</style>
<?php require_once 'header.php' ?>
<script>
    fbq('track', 'AddToCart');
    
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const cValue = urlParams.get('c');
    
</script>
</head>
<body>
    <div style="text-align:center;display:none"><img style="width: 180px;" src="images/logo.png" /></div>
  <h2 style="color:white;font-size: 1.5em;">PayPal Checkout <br><span style="font-size:0.8em"> The Safer, Easier Way to Pay</span></h2>
<div class="container">

    <div id="paymentResponse" class="hidden"></div>
  
  <table class="no-border">
    <tr>
      <td>Primary Learning Bundle 4000+ Printable Worksheets</td>
      <td style="text-align:right">$<?php echo $itemPrice; ?></td>
    </tr>
   
    <tr class="total">
      <td>Total</td>
      <td>$<?php echo $itemPrice; ?></td>
    </tr>
  </table>
    <div id="paypal-button-container" class="paypal-button-container"></div>
    <!-- Containers for Card Fields hosted by PayPal -->
    <div id="card-form" class="card_container">
      <div id="card-name-field-container"></div>
      <div id="card-number-field-container"></div>
      <div id="card-expiry-field-container"></div>
      <div id="card-cvv-field-container"></div>
      
      <div class="select-box">
    <select id="card-billing-address-country-code" name="card-billing-address-country-code">
               <option value="AF" <?php if(isset($country) && $country == 'AF') echo 'selected'; ?>>Afghanistan</option>
        <option value="AL" <?php if(isset($country) && $country == 'AL') echo 'selected'; ?>>Albania</option>
        <option value="DZ" <?php if(isset($country) && $country == 'DZ') echo 'selected'; ?>>Algeria</option>
        <option value="AS" <?php if(isset($country) && $country == 'AS') echo 'selected'; ?>>American Samoa</option>
        <option value="AD" <?php if(isset($country) && $country == 'AD') echo 'selected'; ?>>Andorra</option>
        <option value="AO" <?php if(isset($country) && $country == 'AO') echo 'selected'; ?>>Angola</option>
        <option value="AI" <?php if(isset($country) && $country == 'AI') echo 'selected'; ?>>Anguilla</option>
        <option value="AQ" <?php if(isset($country) && $country == 'AQ') echo 'selected'; ?>>Antarctica</option>
        <option value="AG" <?php if(isset($country) && $country == 'AG') echo 'selected'; ?>>Antigua and Barbuda</option>
        <option value="AR" <?php if(isset($country) && $country == 'AR') echo 'selected'; ?>>Argentina</option>
        <option value="AM" <?php if(isset($country) && $country == 'AM') echo 'selected'; ?>>Armenia</option>
        <option value="AW" <?php if(isset($country) && $country == 'AW') echo 'selected'; ?>>Aruba</option>
        <option value="AU" <?php if(isset($country) && $country == 'AU') echo 'selected'; ?>>Australia</option>
        <option value="AT" <?php if(isset($country) && $country == 'AT') echo 'selected'; ?>>Austria</option>
        <option value="AZ" <?php if(isset($country) && $country == 'AZ') echo 'selected'; ?>>Azerbaijan</option>
        <option value="BS" <?php if(isset($country) && $country == 'BS') echo 'selected'; ?>>Bahamas</option>
        <option value="BH" <?php if(isset($country) && $country == 'BH') echo 'selected'; ?>>Bahrain</option>
        <option value="BD" <?php if(isset($country) && $country == 'BD') echo 'selected'; ?>>Bangladesh</option>
        <option value="BB" <?php if(isset($country) && $country == 'BB') echo 'selected'; ?>>Barbados</option>
        <option value="BY" <?php if(isset($country) && $country == 'BY') echo 'selected'; ?>>Belarus</option>
        <option value="BE" <?php if(isset($country) && $country == 'BE') echo 'selected'; ?>>Belgium</option>
        <option value="BZ" <?php if(isset($country) && $country == 'BZ') echo 'selected'; ?>>Belize</option>
        <option value="BJ" <?php if(isset($country) && $country == 'BJ') echo 'selected'; ?>>Benin</option>
        <option value="BM" <?php if(isset($country) && $country == 'BM') echo 'selected'; ?>>Bermuda</option>
        <option value="BT" <?php if(isset($country) && $country == 'BT') echo 'selected'; ?>>Bhutan</option>
        <option value="BO" <?php if(isset($country) && $country == 'BO') echo 'selected'; ?>>Bolivia</option>
        <option value="BA" <?php if(isset($country) && $country == 'BA') echo 'selected'; ?>>Bosnia and Herzegovina</option>
        <option value="BW" <?php if(isset($country) && $country == 'BW') echo 'selected'; ?>>Botswana</option>
        <option value="BR" <?php if(isset($country) && $country == 'BR') echo 'selected'; ?>>Brazil</option>
        <option value="BN" <?php if(isset($country) && $country == 'BN') echo 'selected'; ?>>Brunei</option>
        <option value="BG" <?php if(isset($country) && $country == 'BG') echo 'selected'; ?>>Bulgaria</option>
        <option value="BF" <?php if(isset($country) && $country == 'BF') echo 'selected'; ?>>Burkina Faso</option>
        <option value="BI" <?php if(isset($country) && $country == 'BI') echo 'selected'; ?>>Burundi</option>
        <option value="KH" <?php if(isset($country) && $country == 'KH') echo 'selected'; ?>>Cambodia</option>
        <option value="CM" <?php if(isset($country) && $country == 'CM') echo 'selected'; ?>>Cameroon</option>
        <option value="CA" <?php if(isset($country) && $country == 'CA') echo 'selected'; ?>>Canada</option>
        <option value="CV" <?php if(isset($country) && $country == 'CV') echo 'selected'; ?>>Cape Verde</option>
        <option value="KY" <?php if(isset($country) && $country == 'KY') echo 'selected'; ?>>Cayman Islands</option>
        <option value="CF" <?php if(isset($country) && $country == 'CF') echo 'selected'; ?>>Central African Republic</option>
        <option value="TD" <?php if(isset($country) && $country == 'TD') echo 'selected'; ?>>Chad</option>
        <option value="CL" <?php if(isset($country) && $country == 'CL') echo 'selected'; ?>>Chile</option>
        <option value="CN" <?php if(isset($country) && $country == 'CN') echo 'selected'; ?>>China</option>
        <option value="CO" <?php if(isset($country) && $country == 'CO') echo 'selected'; ?>>Colombia</option>
        <option value="KM" <?php if(isset($country) && $country == 'KM') echo 'selected'; ?>>Comoros</option>
        <option value="CG" <?php if(isset($country) && $country == 'CG') echo 'selected'; ?>>Congo</option>
        <option value="CD" <?php if(isset($country) && $country == 'CD') echo 'selected'; ?>>Congo, Democratic Republic</option>
        <option value="CR" <?php if(isset($country) && $country == 'CR') echo 'selected'; ?>>Costa Rica</option>
        <option value="HR" <?php if(isset($country) && $country == 'HR') echo 'selected'; ?>>Croatia</option>
        <option value="CU" <?php if(isset($country) && $country == 'CU') echo 'selected'; ?>>Cuba</option>
        <option value="CY" <?php if(isset($country) && $country == 'CY') echo 'selected'; ?>>Cyprus</option>
        <option value="CZ" <?php if(isset($country) && $country == 'CZ') echo 'selected'; ?>>Czech Republic</option>
        <option value="DK" <?php if(isset($country) && $country == 'DK') echo 'selected'; ?>>Denmark</option>
        <option value="DJ" <?php if(isset($country) && $country == 'DJ') echo 'selected'; ?>>Djibouti</option>
        <option value="DM" <?php if(isset($country) && $country == 'DM') echo 'selected'; ?>>Dominica</option>
        <option value="DO" <?php if(isset($country) && $country == 'DO') echo 'selected'; ?>>Dominican Republic</option>
        <option value="EC" <?php if(isset($country) && $country == 'EC') echo 'selected'; ?>>Ecuador</option>
        <option value="EG" <?php if(isset($country) && $country == 'EG') echo 'selected'; ?>>Egypt</option>
        <option value="SV" <?php if(isset($country) && $country == 'SV') echo 'selected'; ?>>El Salvador</option>
        <option value="GQ" <?php if(isset($country) && $country == 'GQ') echo 'selected'; ?>>Equatorial Guinea</option>
        <option value="ER" <?php if(isset($country) && $country == 'ER') echo 'selected'; ?>>Eritrea</option>
        <option value="EE" <?php if(isset($country) && $country == 'EE') echo 'selected'; ?>>Estonia</option>
        <option value="ET" <?php if(isset($country) && $country == 'ET') echo 'selected'; ?>>Ethiopia</option>
        <option value="FJ" <?php if(isset($country) && $country == 'FJ') echo 'selected'; ?>>Fiji</option>
        <option value="FI" <?php if(isset($country) && $country == 'FI') echo 'selected'; ?>>Finland</option>
        <option value="FR" <?php if(isset($country) && $country == 'FR') echo 'selected'; ?>>France</option>
        <option value="GA" <?php if(isset($country) && $country == 'GA') echo 'selected'; ?>>Gabon</option>
        <option value="GM" <?php if(isset($country) && $country == 'GM') echo 'selected'; ?>>Gambia</option>
        <option value="GE" <?php if(isset($country) && $country == 'GE') echo 'selected'; ?>>Georgia</option>
        <option value="DE" <?php if(isset($country) && $country == 'DE') echo 'selected'; ?>>Germany</option>
        <option value="GH" <?php if(isset($country) && $country == 'GH') echo 'selected'; ?>>Ghana</option>
        <option value="GR" <?php if(isset($country) && $country == 'GR') echo 'selected'; ?>>Greece</option>
        <option value="GD" <?php if(isset($country) && $country == 'GD') echo 'selected'; ?>>Grenada</option>
        <option value="GU" <?php if(isset($country) && $country == 'GU') echo 'selected'; ?>>Guam</option>
        <option value="GT" <?php if(isset($country) && $country == 'GT') echo 'selected'; ?>>Guatemala</option>
        <option value="GN" <?php if(isset($country) && $country == 'GN') echo 'selected'; ?>>Guinea</option>
        <option value="GW" <?php if(isset($country) && $country == 'GW') echo 'selected'; ?>>Guinea-Bissau</option>
        <option value="GY" <?php if(isset($country) && $country == 'GY') echo 'selected'; ?>>Guyana</option>
        <option value="HT" <?php if(isset($country) && $country == 'HT') echo 'selected'; ?>>Haiti</option>
        <option value="HN" <?php if(isset($country) && $country == 'HN') echo 'selected'; ?>>Honduras</option>
        <option value="HK" <?php if(isset($country) && $country == 'HK') echo 'selected'; ?>>Hong Kong</option>
        <option value="HU" <?php if(isset($country) && $country == 'HU') echo 'selected'; ?>>Hungary</option>
        <option value="IS" <?php if(isset($country) && $country == 'IS') echo 'selected'; ?>>Iceland</option>
        <option value="IN" <?php if(isset($country) && $country == 'IN') echo 'selected'; ?>>India</option>
        <option value="ID" <?php if(isset($country) && $country == 'ID') echo 'selected'; ?>>Indonesia</option>
        <option value="IR" <?php if(isset($country) && $country == 'IR') echo 'selected'; ?>>Iran</option>
        <option value="IQ" <?php if(isset($country) && $country == 'IQ') echo 'selected'; ?>>Iraq</option>
        <option value="IE" <?php if(isset($country) && $country == 'IE') echo 'selected'; ?>>Ireland</option>
        <option value="IL" <?php if(isset($country) && $country == 'IL') echo 'selected'; ?>>Israel</option>
        <option value="IT" <?php if(isset($country) && $country == 'IT') echo 'selected'; ?>>Italy</option>
        <option value="JM" <?php if(isset($country) && $country == 'JM') echo 'selected'; ?>>Jamaica</option>
        <option value="JP" <?php if(isset($country) && $country == 'JP') echo 'selected'; ?>>Japan</option>
        <option value="JO" <?php if(isset($country) && $country == 'JO') echo 'selected'; ?>>Jordan</option>
        <option value="KZ" <?php if(isset($country) && $country == 'KZ') echo 'selected'; ?>>Kazakhstan</option>
        <option value="KE" <?php if(isset($country) && $country == 'KE') echo 'selected'; ?>>Kenya</option>
        <option value="KI" <?php if(isset($country) && $country == 'KI') echo 'selected'; ?>>Kiribati</option>
        <option value="KP" <?php if(isset($country) && $country == 'KP') echo 'selected'; ?>>Korea, North</option>
        <option value="KR" <?php if(isset($country) && $country == 'KR') echo 'selected'; ?>>Korea, South</option>
        <option value="KW" <?php if(isset($country) && $country == 'KW') echo 'selected'; ?>>Kuwait</option>
        <option value="KG" <?php if(isset($country) && $country == 'KG') echo 'selected'; ?>>Kyrgyzstan</option>
        <option value="LA" <?php if(isset($country) && $country == 'LA') echo 'selected'; ?>>Laos</option>
        <option value="LV" <?php if(isset($country) && $country == 'LV') echo 'selected'; ?>>Latvia</option>
        <option value="LB" <?php if(isset($country) && $country == 'LB') echo 'selected'; ?>>Lebanon</option>
        <option value="LS" <?php if(isset($country) && $country == 'LS') echo 'selected'; ?>>Lesotho</option>
        <option value="LR" <?php if(isset($country) && $country == 'LR') echo 'selected'; ?>>Liberia</option>
        <option value="LY" <?php if(isset($country) && $country == 'LY') echo 'selected'; ?>>Libya</option>
        <option value="LI" <?php if(isset($country) && $country == 'LI') echo 'selected'; ?>>Liechtenstein</option>
        <option value="LT" <?php if(isset($country) && $country == 'LT') echo 'selected'; ?>>Lithuania</option>
        <option value="LU" <?php if(isset($country) && $country == 'LU') echo 'selected'; ?>>Luxembourg</option>
        <option value="MO" <?php if(isset($country) && $country == 'MO') echo 'selected'; ?>>Macau</option>
        <option value="MK" <?php if(isset($country) && $country == 'MK') echo 'selected'; ?>>Macedonia</option>
        <option value="MG" <?php if(isset($country) && $country == 'MG') echo 'selected'; ?>>Madagascar</option>
        <option value="MW" <?php if(isset($country) && $country == 'MW') echo 'selected'; ?>>Malawi</option>
        <option value="MY" <?php if(isset($country) && $country == 'MY') echo 'selected'; ?>>Malaysia</option>
        <option value="MV" <?php if(isset($country) && $country == 'MV') echo 'selected'; ?>>Maldives</option>
        <option value="ML" <?php if(isset($country) && $country == 'ML') echo 'selected'; ?>>Mali</option>
        <option value="MT" <?php if(isset($country) && $country == 'MT') echo 'selected'; ?>>Malta</option>
        <option value="MH" <?php if(isset($country) && $country == 'MH') echo 'selected'; ?>>Marshall Islands</option>
        <option value="MR" <?php if(isset($country) && $country == 'MR') echo 'selected'; ?>>Mauritania</option>
        <option value="MU" <?php if(isset($country) && $country == 'MU') echo 'selected'; ?>>Mauritius</option>
        <option value="MX" <?php if(isset($country) && $country == 'MX') echo 'selected'; ?>>Mexico</option>
  <option value="FM" <?php if(isset($country) && $country == 'FM') echo 'selected'; ?>>Micronesia</option>
        <option value="MD" <?php if(isset($country) && $country == 'MD') echo 'selected'; ?>>Moldova</option>
        <option value="MC" <?php if(isset($country) && $country == 'MC') echo 'selected'; ?>>Monaco</option>
        <option value="MN" <?php if(isset($country) && $country == 'MN') echo 'selected'; ?>>Mongolia</option>
        <option value="ME" <?php if(isset($country) && $country == 'ME') echo 'selected'; ?>>Montenegro</option>
        <option value="MA" <?php if(isset($country) && $country == 'MA') echo 'selected'; ?>>Morocco</option>
        <option value="MZ" <?php if(isset($country) && $country == 'MZ') echo 'selected'; ?>>Mozambique</option>
        <option value="MM" <?php if(isset($country) && $country == 'MM') echo 'selected'; ?>>Myanmar</option>
        <option value="NA" <?php if(isset($country) && $country == 'NA') echo 'selected'; ?>>Namibia</option>
        <option value="NR" <?php if(isset($country) && $country == 'NR') echo 'selected'; ?>>Nauru</option>
        <option value="NP" <?php if(isset($country) && $country == 'NP') echo 'selected'; ?>>Nepal</option>
        <option value="NL" <?php if(isset($country) && $country == 'NL') echo 'selected'; ?>>Netherlands</option>
        <option value="NZ" <?php if(isset($country) && $country == 'NZ') echo 'selected'; ?>>New Zealand</option>
        <option value="NI" <?php if(isset($country) && $country == 'NI') echo 'selected'; ?>>Nicaragua</option>
        <option value="NE" <?php if(isset($country) && $country == 'NE') echo 'selected'; ?>>Niger</option>
        <option value="NG" <?php if(isset($country) && $country == 'NG') echo 'selected'; ?>>Nigeria</option>
        <option value="NO" <?php if(isset($country) && $country == 'NO') echo 'selected'; ?>>Norway</option>
        <option value="OM" <?php if(isset($country) && $country == 'OM') echo 'selected'; ?>>Oman</option>
        <option value="PK" <?php if(isset($country) && $country == 'PK') echo 'selected'; ?>>Pakistan</option>
        <option value="PW" <?php if(isset($country) && $country == 'PW') echo 'selected'; ?>>Palau</option>
        <option value="PA" <?php if(isset($country) && $country == 'PA') echo 'selected'; ?>>Panama</option>
        <option value="PG" <?php if(isset($country) && $country == 'PG') echo 'selected'; ?>>Papua New Guinea</option>
        <option value="PY" <?php if(isset($country) && $country == 'PY') echo 'selected'; ?>>Paraguay</option>
        <option value="PE" <?php if(isset($country) && $country == 'PE') echo 'selected'; ?>>Peru</option>
        <option value="PH" <?php if(isset($country) && $country == 'PH') echo 'selected'; ?>>Philippines</option>
        <option value="PL" <?php if(isset($country) && $country == 'PL') echo 'selected'; ?>>Poland</option>
        <option value="PT" <?php if(isset($country) && $country == 'PT') echo 'selected'; ?>>Portugal</option>
        <option value="PR" <?php if(isset($country) && $country == 'PR') echo 'selected'; ?>>Puerto Rico</option>
        <option value="QA" <?php if(isset($country) && $country == 'QA') echo 'selected'; ?>>Qatar</option>
        <option value="RO" <?php if(isset($country) && $country == 'RO') echo 'selected'; ?>>Romania</option>
        <option value="RU" <?php if(isset($country) && $country == 'RU') echo 'selected'; ?>>Russia</option>
        <option value="RW" <?php if(isset($country) && $country == 'RW') echo 'selected'; ?>>Rwanda</option>
        <option value="WS" <?php if(isset($country) && $country == 'WS') echo 'selected'; ?>>Samoa</option>
        <option value="SM" <?php if(isset($country) && $country == 'SM') echo 'selected'; ?>>San Marino</option>
        <option value="SA" <?php if(isset($country) && $country == 'SA') echo 'selected'; ?>>Saudi Arabia</option>
        <option value="SN" <?php if(isset($country) && $country == 'SN') echo 'selected'; ?>>Senegal</option>
        <option value="RS" <?php if(isset($country) && $country == 'RS') echo 'selected'; ?>>Serbia</option>
        <option value="SC" <?php if(isset($country) && $country == 'SC') echo 'selected'; ?>>Seychelles</option>
        <option value="SL" <?php if(isset($country) && $country == 'SL') echo 'selected'; ?>>Sierra Leone</option>
        <option value="SG" <?php if(isset($country) && $country == 'SG') echo 'selected'; ?>>Singapore</option>
        <option value="SK" <?php if(isset($country) && $country == 'SK') echo 'selected'; ?>>Slovakia</option>
        <option value="SI" <?php if(isset($country) && $country == 'SI') echo 'selected'; ?>>Slovenia</option>
        <option value="SB" <?php if(isset($country) && $country == 'SB') echo 'selected'; ?>>Solomon Islands</option>
        <option value="SO" <?php if(isset($country) && $country == 'SO') echo 'selected'; ?>>Somalia</option>
        <option value="ZA" <?php if(isset($country) && $country == 'ZA') echo 'selected'; ?>>South Africa</option>
        <option value="ES" <?php if(isset($country) && $country == 'ES') echo 'selected'; ?>>Spain</option>
        <option value="LK" <?php if(isset($country) && $country == 'LK') echo 'selected'; ?>>Sri Lanka</option>
        <option value="SD" <?php if(isset($country) && $country == 'SD') echo 'selected'; ?>>Sudan</option>
        <option value="SR" <?php if(isset($country) && $country == 'SR') echo 'selected'; ?>>Suriname</option>
        <option value="SZ" <?php if(isset($country) && $country == 'SZ') echo 'selected'; ?>>Swaziland</option>
        <option value="SE" <?php if(isset($country) && $country == 'SE') echo 'selected'; ?>>Sweden</option>
        <option value="CH" <?php if(isset($country) && $country == 'CH') echo 'selected'; ?>>Switzerland</option>
        <option value="SY" <?php if(isset($country) && $country == 'SY') echo 'selected'; ?>>Syria</option>
        <option value="TW" <?php if(isset($country) && $country == 'TW') echo 'selected'; ?>>Taiwan</option>
        <option value="TJ" <?php if(isset($country) && $country == 'TJ') echo 'selected'; ?>>Tajikistan</option>
        <option value="TZ" <?php if(isset($country) && $country == 'TZ') echo 'selected'; ?>>Tanzania</option>
        <option value="TH" <?php if(isset($country) && $country == 'TH') echo 'selected'; ?>>Thailand</option>
        <option value="TL" <?php if(isset($country) && $country == 'TL') echo 'selected'; ?>>Timor-Leste</option>
        <option value="TG" <?php if(isset($country) && $country == 'TG') echo 'selected'; ?>>Togo</option>
        <option value="TO" <?php if(isset($country) && $country == 'TO') echo 'selected'; ?>>Tonga</option>
        <option value="TT" <?php if(isset($country) && $country == 'TT') echo 'selected'; ?>>Trinidad and Tobago</option>
        <option value="TN" <?php if(isset($country) && $country == 'TN') echo 'selected'; ?>>Tunisia</option>
        <option value="TR" <?php if(isset($country) && $country == 'TR') echo 'selected'; ?>>Turkey</option>
        <option value="TM" <?php if(isset($country) && $country == 'TM') echo 'selected'; ?>>Turkmenistan</option>
        <option value="TV" <?php if(isset($country) && $country == 'TV') echo 'selected'; ?>>Tuvalu</option>
        <option value="UG" <?php if(isset($country) && $country == 'UG') echo 'selected'; ?>>Uganda</option>
        <option value="UA" <?php if(isset($country) && $country == 'UA') echo 'selected'; ?>>Ukraine</option>
        <option value="AE" <?php if(isset($country) && $country == 'AE') echo 'selected'; ?>>United Arab Emirates</option>
        <option value="GB" <?php if(isset($country) && $country == 'GB') echo 'selected'; ?>>United Kingdom</option>
        <option value="US" <?php if(isset($country) && $country == 'US') echo 'selected'; ?>>United States</option>
        <option value="UY" <?php if(isset($country) && $country == 'UY') echo 'selected'; ?>>Uruguay</option>
        <option value="UZ" <?php if(isset($country) && $country == 'UZ') echo 'selected'; ?>>Uzbekistan</option>
        <option value="VU" <?php if(isset($country) && $country == 'VU') echo 'selected'; ?>>Vanuatu</option>
        <option value="VA" <?php if(isset($country) && $country == 'VA') echo 'selected'; ?>>Vatican City</option>
        <option value="VE" <?php if(isset($country) && $country == 'VE') echo 'selected'; ?>>Venezuela</option>
        <option value="VN" <?php if(isset($country) && $country == 'VN') echo 'selected'; ?>>Vietnam</option>
        <option value="YE" <?php if(isset($country) && $country == 'YE') echo 'selected'; ?>>Yemen</option>
        <option value="ZM" <?php if(isset($country) && $country == 'ZM') echo 'selected'; ?>>Zambia</option>
        <option value="ZW" <?php if(isset($country) && $country == 'ZW') echo 'selected'; ?>>Zimbabwe</option>
    </select>
</div>

      <!-- To be replaced with your own Billing Address Fields -->
      <div style="display:none">
          <div>
            <label for="card-billing-address-line-1">Billing Address</label>
            <input type="text" id="card-billing-address-line-1" name="card-billing-address-line-1" autocomplete="off" placeholder="Address line 1">
          </div>
          <div>
            <input type="text" id="card-billing-address-line-2" name="card-billing-address-line-2" autocomplete="off" placeholder="Address line 2">
          </div>
          <div>
            <input type="text" id="card-billing-address-admin-area-line-1" name="card-billing-address-admin-area-line-1" autocomplete="off" placeholder="Admin area line 1">
          </div>
          <div>
            <input type="text" id="card-billing-address-admin-area-line-2" name="card-billing-address-admin-area-line-2" autocomplete="off" placeholder="Admin area line 2">
          </div>
          <div>
            <input type="text" id="card-billing-address-country-code" name="card-billing-address-country-code" autocomplete="off" placeholder="Country code">
          </div>
          <div>
            <input type="text" id="card-billing-address-postal-code" name="card-billing-address-postal-code" autocomplete="off" placeholder="Postal/zip code">
          </div>
       </div>
      <button id="card-field-submit-button" type="button">Pay now with Card</button>
    </div>
    <p id="result-message"></p>
  </div>
  <script src="https://www.paypal.com/sdk/js?components=buttons,card-fields&client-id=<?php echo PAYPAL_SANDBOX?PAYPAL_SANDBOX_CLIENT_ID:PAYPAL_PROD_CLIENT_ID; ?>"></script>
</body>

  
  <script>
    async function createOrderCallback() {
      try {
        const response = await fetch("/api?act=orders", {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
          },
          // use the "body" param to optionally pass additional order information
          // like product ids and quantities
          body: JSON.stringify({
            cart: [
              {
                id: "digi123",
                quantity: "1",
              },
            ],
          }),
        });
    
        const orderData = await response.json();
    
        if (orderData.id) {
          return orderData.id;
        } else {
          const errorDetail = orderData?.details?.[0];
          const errorMessage = errorDetail
            ? `${errorDetail.issue} ${errorDetail.description} (${orderData.debug_id})`
            : JSON.stringify(orderData);
    
          throw new Error(errorMessage);
        }
      } catch (error) {
        console.error(error);
        resultMessage(`Could not initiate PayPal Checkout...<br><br>${error}`);
      }
    }
    
    async function onApproveCallback(data, actions) {
      try {
        const response = await fetch(`/api?act=capture&orderid=${data.orderID}`, {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
          },
        });
    
        const orderData = await response.json();
        // Three cases to handle:
        //   (1) Recoverable INSTRUMENT_DECLINED -> call actions.restart()
        //   (2) Other non-recoverable errors -> Show a failure message
        //   (3) Successful transaction -> Show confirmation or thank you message
    
        const transaction =
          orderData?.purchase_units?.[0]?.payments?.captures?.[0] ||
          orderData?.purchase_units?.[0]?.payments?.authorizations?.[0];
        const errorDetail = orderData?.details?.[0];
    
        // this actions.restart() behavior only applies to the Buttons component
        if (errorDetail?.issue === "INSTRUMENT_DECLINED" && !data.card && actions) {
          // (1) Recoverable INSTRUMENT_DECLINED -> call actions.restart()
          // recoverable state, per https://developer.paypal.com/docs/checkout/standard/customize/handle-funding-failures/
          return actions.restart();
        } else if (
          errorDetail ||
          !transaction ||
          transaction.status === "DECLINED"
        ) {
          // (2) Other non-recoverable errors -> Show a failure message
          let errorMessage;
          if (transaction) {
            errorMessage = `Transaction ${transaction.status}: ${transaction.id}`;
          } else if (errorDetail) {
            errorMessage = `${errorDetail.description} (${orderData.debug_id})`;
          } else {
            errorMessage = JSON.stringify(orderData);
          }
    
          throw new Error(errorMessage);
        } else {
          // (3) Successful transaction -> Show confirmation or thank you message
          // Or go to another URL:  actions.redirect('thank_you.html');
          window.location.replace('payment-status?checkout_ref_id='+orderData.id);

          resultMessage(
            `Transaction ${transaction.status}: ${transaction.id}<br><br>See console for all available details`,
          );
          console.log(
            "Capture result",
            orderData,
            JSON.stringify(orderData, null, 2),
          );
        }
      } catch (error) {
        console.error(error);
        resultMessage(
          `Sorry, your transaction could not be processed...<br><br>${error}`,
        );
      }
    }
    
    window.paypal
      .Buttons({
        createOrder: createOrderCallback,
        onApprove: onApproveCallback,
      })
      .render("#paypal-button-container");
    
    const cardField = window.paypal.CardFields({
      createOrder: createOrderCallback,
      onApprove: onApproveCallback,
    });
    
    // Render each field after checking for eligibility
    if (cardField.isEligible()) {
      const nameField = cardField.NameField();
      nameField.render("#card-name-field-container");
    
      const numberField = cardField.NumberField();
      numberField.render("#card-number-field-container");
    
      const cvvField = cardField.CVVField();
      cvvField.render("#card-cvv-field-container");
    
      const expiryField = cardField.ExpiryField();
      expiryField.render("#card-expiry-field-container");
    
      // Add click listener to submit button and call the submit function on the CardField component
      document
        .getElementById("card-field-submit-button")
        .addEventListener("click", () => {
          cardField
            .submit({
              // From your billing address fields
              billingAddress: {
                addressLine1: document.getElementById("card-billing-address-line-1")
                  .value,
                addressLine2: document.getElementById("card-billing-address-line-2")
                  .value,
                adminArea1: document.getElementById(
                  "card-billing-address-admin-area-line-1",
                ).value,
                adminArea2: document.getElementById(
                  "card-billing-address-admin-area-line-2",
                ).value,
                countryCode: document.getElementById(
                  "card-billing-address-country-code",
                ).value,
                postalCode: document.getElementById(
                  "card-billing-address-postal-code",
                ).value,
              },
            })
            .catch((error) => {
              resultMessage(
                `Sorry, your transaction could not be processed...<br><br>${error}`,
              );
            });
        });
    } else {
      // Hides card fields if the merchant isn't eligible
      document.querySelector("#card-form").style = "display: none";
    }
    
    // Example function to show a result to the user. Your site's UI library can be used instead.
    function resultMessage(message) {
      const container = document.querySelector("#result-message");
      container.innerHTML = message;
    }

  </script>
</html>