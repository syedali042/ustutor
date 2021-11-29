<br>
<?php 
	// if(!isset($_SERVER['HTTPS'] ) ) {
 //        header('Location:https://www.edu.acrobatdms.com/studentLogin');
 //    }
?>
<main id="main">
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<meta name="google-signin-client_id" content="413474367912-0hsh9n4vl8m13i2tljbftjjd4u0sa2b2.apps.googleusercontent.com">
	<script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
	<script type="text/javascript">
			

	  function statusChangeCallback(response) {  // Called with the results from FB.getLoginStatus().
	    console.log('statusChangeCallback');
	    console.log(response);                   // The current login status of the person.
	    if (response.status === 'connected') {   // Logged into your webpage and Facebook.
	      testAPI();  
	    } else {                                 // Not logged into your webpage or we are unable to tell.
	      document.getElementById('status').innerHTML = 'Please log ' +
	        'into this webpage.';
	    }
	  }


	  function checkLoginState() {               // Called when a person is finished with the Login Button.
	    FB.getLoginStatus(function(response) {   // See the onlogin handler
	      statusChangeCallback(response);
	    });
	  }


	  window.fbAsyncInit = function() {
	    FB.init({
	      appId      : '4706615882694592',
	      cookie     : true,                     // Enable cookies to allow the server to access the session.
	      xfbml      : true,                     // Parse social plugins on this webpage.
	      version    : 'v7.0'           // Use this Graph API version for this call.
	    });


	    FB.getLoginStatus(function(response) {   // Called after the JS SDK has been initialized.
	      statusChangeCallback(response);        // Returns the login status.
	    });
	  };

	  
	  (function(d, s, id) {                      // Load the SDK asynchronously
	    var js, fjs = d.getElementsByTagName(s)[0];
	    if (d.getElementById(id)) return;
	    js = d.createElement(s); js.id = id;
	    js.src = "https://connect.facebook.net/en_US/sdk.js";
	    fjs.parentNode.insertBefore(js, fjs);
	  }(document, 'script', 'facebook-jssdk'));

	 
	  function testAPI() {                      // Testing Graph API after login.  See statusChangeCallback() for when this call is made.
	    console.log('Welcome!  Fetching your information.... ');
	    FB.api('/me', function(response) {
	      console.log('Successful login for: ' + response.name);
	      document.getElementById('status').innerHTML =
	        'Thanks for logging in, ' + response.name + '!';
	    });
	  }


	  function onSuccess(googleUser) {
	      console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
	    }
	    function onFailure(error) {
	      console.log(error);
	    }
	    function renderButton() {
	      gapi.signin2.render('my-signin2', {
	        'scope': 'profile email',
	        'width': 240,
	        'height': 50,
	        'longtitle': true,
	        'theme': 'dark',
	        'onsuccess': onSuccess,
	        'onfailure': onFailure
	      });
	    }
	</script>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<div class="container">
            <div class="panel panel-md">
              <div class="panel-body">
                <div class="row">
                	<div class="col-md-4"></div>
                  <div class="col-md-4">
                  	<center>
                  	<p>
                  		<div class="fb-login-button" data-max-rows="1" data-size="large" data-width="350"   data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div>
                  	</p>
                  	</center>
                  	<center>
                    <p><div class="g-signin2" data-onsuccess="onSignIn" data-width="350" data-height="50" data-longtitle="true">
                    	</div>
                    </p>
                    </center>
                    <p class="text-center"><span class="span-line">OR</span></p>
                    <!-- form login -->
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Your Email" id="email">
                      </div>
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Your Password" id="password">
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-xs-6">
                            <div class="checkbox flat-checkbox">
                              <label>
                                <input type="checkbox"> 
                                <span class="fa fa-check"></span>
                                Remember me?
                              </label>
                            </div>
                          </div>
                          <div class="col-xs-6 text-right">
                            <p class="help-block"><a href="#myModal" data-toggle="modal">Forgot password?</a></p>
                          </div>
                        </div>
                      </div>
                      <div class="form-group no-margin">
                        <button class="btn btn-theme btn-lg btn-t-primary btn-block studentLogin" style="color: white;font-size: 20px;font-weight: bold;">Log In</button>
                      </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="white-space-20"></div>
            <div class="text-center color-white">Not a member? &nbsp; <a href="studentRegistration" class="link-white"><strong>Create an account free</strong></a></div>
          </div>

</main>
 	<script src="<?=JS?>jquery.js"></script>
      <script type="text/javascript">
        $(document).ready(function() {
          
          $('.studentLogin').click(function(){

            var email = $('#email').val();
            var password = $('#password').val();
            var action = 'student-login';

            var data = {email:email, password:password, action:action};
            $.post('<?=AJAX?>studentAjax.php', {data:data}, function(resp) {
                
                resp = $.parseJSON(resp);
                if(resp.status==true){

                  window.open('studentAccount', '_self');

                }

            });

          });
        });
        //Google Sign In
        function onSignIn(googleUser) {
		  var profile = googleUser.getBasicProfile();
		  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
		  console.log('Name: ' + profile.getName());
		  console.log('Image URL: ' + profile.getImageUrl());
		  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
		}

      </script>
      <a href="#" onclick="signOut();">Sign out</a>
		<script>
		  function signOut() {
		    var auth2 = gapi.auth2.getAuthInstance();
		    auth2.signOut().then(function () {
		      console.log('User signed out.');
		    });
		  }
		</script>