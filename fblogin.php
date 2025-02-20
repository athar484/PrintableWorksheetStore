
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1578996895980275',
      cookie     : true,
      xfbml      : true,
      version    : 'v20.0'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<fb:login-button 
  config_id="{config_id}"
  onlogin="checkLoginState();">
</fb:login-button>

<script>
function checkLoginState() {
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
}
</script>