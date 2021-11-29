
<main id="main">
	<link rel="stylesheet" type="text/css" href="<?=CSS?>studentAccount.css">
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PLQRJ63"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <noscript>
        <img alt="fbPixel" height="1" width="1" src="https://www.facebook.com/tr?id=583491325441428&ev=PageView&noscript=1"/>
    </noscript>

<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a
        href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
    
	<div class="container">
		<div class="user-profile">
	        <div class="row">
	            <div class="col-md-12">
	                <div class="profile-info-right">
	                    <ul class="nav nav-pills nav-pills-custom-minimal custom-minimal-bottom">
	                        <li class="active"><a href="#activities" data-toggle="tab">Dashboard</a></li>
	                        <li><a href="#followers" data-toggle="tab">Requests</a></li>
	                        <li><a href="#following" data-toggle="tab">Sessions</a></li>
	                        <li><a href="#following" data-toggle="tab">Messages</a></li>
	                        <li><a href="#following" data-toggle="tab">Profile</a></li>
	                    </ul>
	                    <div class="tab-content">
	                        <!-- activities -->
	                        <div class="tab-pane fade in active" id="activities">
	                        	<div>
			                        <div class="goo-app-default goo-page">
  								    	   <div class="goo-content-wrap">
  								    		<div class="goo-toast-master">
  								    			<div class="goo-toasts">
  								    				<ul class="goo-toasts-list"></ul>
  								    			</div>
  								    		</div>
  								    		<div class="container">
  									    		<main class="goo-content-main goo-content is-full-width">
  									    			
  														    <div class="student-dashboard-wrap">
  														    	<div class="student-dashboard">
  														    		<header class="student-dashboard-header">
  														    			<!-- <div class="goo-toasts-wrap">
  														    				<div class="goo-toast is-primary-light">
  														    					<div class="goo-toast-message has-text">
  														    						<p>Download the latest <a href="https://apps.apple.com/us/app/gooroo-for-students/id1482457098?mt=8" target="_blank" class="goo-link is-black">Gooroo iPhone app</a>
  														                                for easy messaging, booking, and more!
  														                            </p>
  														                        </div>
  														                    </div>
  														                </div> -->
  														                <div class="student-dashboard-header-message">
  														                	<h1 class="heading-2">Pending Requests</h1>
  														                	<ul class="dashboard-card-list">
						<?php foreach ($getStudentUpcommingSessions as $key => $row): ?>
						
						<?php endforeach ?>
				</ul>
  														                </div>
  														            </header> 
  														            
  														        </div>
  														    </section>
  														</div> 
  													</div>
  												</main>
  											</div>
										</div>
									</div>
								</div>
                
	                        </div>
	                        <!-- end activities -->
	                       
	                    </div>

	                </div>
	            </div>
	        </div>
	    </div>
    </div>
</main>
<script src="<?=JS?>jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.raw').remove();
		$('.account-dropdown').append('<li><a class="logs">Logs & Overview</a></li><li><a href="tutorAccount">Settings</a></li>')
		$(document).on('click', '.logs', function(){
			$('#account').fadeOut('fast', function(){

			});
			$('#logs').fadeIn('slow', function(){

			});
		});
	});
</script>
