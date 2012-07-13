<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '322984877792474', // App ID
	  channelUrl : '//show.me/channel.html', // Channel File
      status     : true, // check login status
      cookie     : true, // enable cookies to allow the server to access the session
      xfbml      : true  // parse XFBML
    });

    // Additional initialization code here
  };

  // Load the SDK Asynchronously
  (function(d){
     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement('script'); js.id = id; js.async = true;
     js.src = "//connect.facebook.net/en_US/all.js";
     ref.parentNode.insertBefore(js, ref);
   }(document));
   
   function fb_signup(){
		FB.login(function(response) {
                          if (response.authResponse) {
                                  $.ajax({            
                                      url: '/user/signup/',
                                      type: 'POST',          
                                    data: {
                                        fbID: response.authResponse.userID,
                                        accessToken:    response.authResponse.accessToken
                                        },
	                               error:function() {
	                                alert("sorry, something went wrong!");
	                                },
	                                success: function(html) {
	                                	//alert(html);
	                                    if(html=='Signed In'){
	                                    	//alert('Signed In');
	                                    	window.location=window.location;
	                                    }
	                                }                                       
                                  });
                          } else {
                            // user cancelled login
                          }
                        });
            }
</script>
<div class="transbox">

<h1>Show.me</h1>
<p> Get videos you would LIKE to watch.</p>
<p> Get Started: 
<fb:login-button onlogin='fb_signup()' size="large" v="2" scope="email,user_checkins,user_likes"><span style="font-size: 16px; opacity: 0.0">Connect with Facebook</span></fb:login-button></p> 
</div>