<br>
<main id="main">
	
	<div class="container">
            <div class="panel panel-md">
              <div class="panel-body">
                <center><h2>Sign In As Tutor</h2></center>
                <div class="row">
                	<div class="col-md-4"></div>
                  <div class="col-md-4">
                    
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
                        <button class="btn btn-theme btn-lg btn-t-primary btn-block tutorLogin" style="color: white;font-size: 20px;font-weight: bold;">Log In</button>
                      </div>
                    </form><!-- form login -->

                  </div>
                </div>
              </div>
            </div>

            <div class="white-space-20"></div>
            <div class="text-center color-white">Not a member? &nbsp; <a href="tutorRegistration" class="link-white"><strong>Create an account free</strong></a></div>
            <br>
          </div>

</main>
 <script src="<?=JS?>jquery.js"></script>
      <script type="text/javascript">
        $(document).ready(function() {
          
          $('.tutorLogin').click(function(){

            var email = $('#email').val();
            var password = $('#password').val();
            var action = 'tutor-login';

            var data = {email:email, password:password, action:action};
            $.post('<?=AJAX?>tutorAjax.php', {data:data}, function(resp) {
                
                resp = $.parseJSON(resp);
                if(resp.status==true){

                  window.open('tutorAccount', '_self');

                }

            });

          });
        });
      </script>