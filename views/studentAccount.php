<?php 
  function dateConvert($date){
        $Month = date("F", strtotime($date));
        $Date = date("d", strtotime($date));
        $Year = date("y", strtotime($date));
        return $Month.' '.$Date.', 20'.$Year;
    }
  ?>
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
    <style type="text/css">
      /* FontAwesome for working BootSnippet :> */

@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
#team {
    background: #eee !important;
}

.btn-primary:hover,
.btn-primary:focus {
    background-color: #108d6f;
    border-color: #108d6f;
    box-shadow: none;
    outline: none;
}

.btn-primary {
    color: #fff;
    background-color: #007b5e;
    border-color: #007b5e;
}

section {
    padding: 60px 0;
}

section .section-title {
    text-align: center;
    color: #007b5e;
    margin-bottom: 50px;
    text-transform: uppercase;
}

#team .card {
    border: none;
    background: #ffffff;
}

.image-flip:hover .backside,
.image-flip.hover .backside {
    -webkit-transform: rotateY(0deg);
    -moz-transform: rotateY(0deg);
    -o-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    transform: rotateY(0deg);
    border-radius: .25rem;
}

.image-flip:hover .frontside,
.image-flip.hover .frontside {
    -webkit-transform: rotateY(180deg);
    -moz-transform: rotateY(180deg);
    -o-transform: rotateY(180deg);
    transform: rotateY(180deg);
}

.mainflip {
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -ms-transition: 1s;
    -moz-transition: 1s;
    -moz-transform: perspective(1000px);
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
    position: relative;
}

.frontside {
    position: relative;
    -webkit-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    z-index: 2;
    margin-bottom: 30px;
}

.backside {
    position: absolute;
    top: 0;
    left: 0;
    background: white;
    -webkit-transform: rotateY(-180deg);
    -moz-transform: rotateY(-180deg);
    -o-transform: rotateY(-180deg);
    -ms-transform: rotateY(-180deg);
    transform: rotateY(-180deg);
    -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
}

.frontside,
.backside {
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -moz-transition: 1s;
    -moz-transform-style: preserve-3d;
    -o-transition: 1s;
    -o-transform-style: preserve-3d;
    -ms-transition: 1s;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
}

.frontside .card,
.backside .card {
    min-height: 312px;
}

.backside .card a {
    font-size: 18px;
    color: #007b5e !important;
}

.frontside .card .card-title,
.backside .card .card-title {
    color: #007b5e !important;
}

.frontside .card .card-body img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
}
    </style>
	<div class="container">
		<div class="user-profile">
	        <div class="row">
	            <div class="col-md-12">
	                <div class="profile-info-right">
	                    <ul class="nav nav-pills nav-pills-custom-minimal custom-minimal-bottom">
	                        <li class="active"><a href="#activities" class="dashboard" data-toggle="tab">Dashboard</a></li>
	                        <!-- <li><a href="#followers" data-toggle="tab">Requests</a></li> -->
	                        <li><a href="javascript://" class="upcoming-sessions-student" data-toggle="tab">Sessions</a></li>
	                        <li><a href="javascript://" class="student-messages" data-toggle="tab">Messages</a></li>
	                        <li><a href="javascript://" class="student-profile" data-toggle="tab">Profile</a></li>
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
  														                	<h1 class="heading-2">Welcome To Stellar Prep !</h1>
  														                	<h3 class="heading-3 is-gray-extra-dark-text-color">Find your best coach by sending or a request. You'll get notified by an email.</h3>
  														                </div>
  														            </header> 
  														            <div class="student-dashboard-steps" style="display: flex;align-items: center;justify-content: center;">
  														            	<div class="student-dashboard-step is-active">
  														            		<figure class="student-dashboard-step-figure">
  														            			<img src="<?=IMG?>step-1.jpg">
  														            		</figure> 
  														            		<div class="student-dashboard-step-content">
  														            			<header class="student-dashboard-step-header">1. Request A Tutor</header> 
  														            			<a href="requestATutor" class="student-dashboard-step-cta goo-button is-secondary is-small">Send
  														                			request
  														                		</a>
  														                	</div>
  														                </div>
  														            </div> 
  														            <!-- <section class="student-dashboard-lanes">
  														            	<div class="student-dashboard-lane">
  														            		<header class="student-dashboard-lane-header">
  														            			<h3 class="heading-4">Active requests</h3>
  														            			<a href="/learn/requests" class="goo-link is-alternate student-dashboard-lane-header-link">See all
  														                    	</a>
  														                    </header> 
  														                    <div class="student-dashboard-lane-list">
  														                    	<div class="is-full"><div>
  														                    		<p>You have no active requests.</p> 
  														                    		<p><a href="requestATutor" class="goo-link">Request a Tutor</a>
  														                    		</p>
  														                    	</div>
  														                    </div>
  														                </div>
  														            </div> 
  														            <div class="student-dashboard-lane">
  														            	<header class="student-dashboard-lane-header">
  														            		<h3 class="heading-4">Sessions</h3> 
  														            		<a href="javascript://" class="upcoming-sessions-student goo-link is-alternate student-dashboard-lane-header-link">See all
  														                    </a>
  														                </header> 
  														                <div class="student-dashboard-lane-list">
  														                	<div class="is-full"><div>
  														                		<p>You have no upcoming sessions or session alerts.</p></div>
  														                	</div>
  														                </div>
  														            </div> 
  														            <div class="student-dashboard-lane">
  														            	<header class="student-dashboard-lane-header">
  														            		<h3 class="heading-4">Recent feedback</h3>
  														            	</header> 
  														            	<div class="student-dashboard-lane-list">
  														            		<div class="is-full"><div>
  														            			<p>You have no recent feedback.</p>
  														            		</div>
  														            	</div>
  														            </div>
  														        </div>
  														    </section> -->
  														</div> 
  													</div>
  												</main>
  											</div>
										</div>
									</div>
								</div>

	                        </div>

                <div id="upcoming-sessions-student" style="display: none;">
                                    <style type="text/css">

.row{}
.circle{
  background: #ffffff;
  padding: 35px;
  text-align: center;
  height: 250px;
  width: 250px;
    
    transition: all 0.5s;
  -moz-transition: all 0.5s; /* Firefox 4 */
  -webkit-transition: all 0.5s; /* Safari and Chrome */
  -o-transition: all 0.5s; /* Opera */
}
.circle h4{
  margin: 0;
  padding: 0;
}
.circle p{}
.circle span{}
.circle span.icon{
}
.circle span.icon i{
  font-size: 48px;
}
.circle span.price-large{
  font-size: 68px
}
.price-small{
  font-size: 24px 
}

.c1:hover{
  background: #39b3d7;
  color: #ffffff;
}
.c1 .blue{
  color: #39b3d7;
}
.c1:hover .blue{
  color: #ffffff;
}

.c2:hover{
  background: #ed9c28;
  color: #ffffff;
}
.c2 .yellow{
  color: #ed9c28;
}
.c2:hover .yellow{
  color: #ffffff;
}

.c3:hover{
  background: #47a447;
  color: #ffffff;
}
.c3 .green{
  color: #47a447;
}
.c3:hover .green{
  color: #ffffff;
}

.c4:hover{
  background: #d2322d;
  color: #ffffff;
}
.c4 .red{
  color: #d2322d;
}
.c4:hover .red{
  color: #ffffff;
}
                  </style>
                  <br><br>
                    <div class="row">
                      <?php foreach ($studentAllSessions as $key => $row): ?>
                        
                        <?php if ($row['req_status']=='Tutor Assigned') { ?>
                          <div class="col-md-3">
                              <div class="circle c1 img-circle">
                                  <h4 class="blue"><i class="fa fa-check"></i> Confirmed</h4>
                                    <!-- <span class="icon blue"></span>
                                    <span class="price-large blue">
                                    </span> -->
                                  <span class="price-small"><i class="fa fa-clock"></i> <?=$row['req_session_hour']?></span>
                                  <p style="color: grey;"><p style="color: grey;" class="session-card-time has-text-bold"><?=$row['req_session_time']?> - <?php
                                        $hours = str_replace(" Hours", '', $row['req_session_hour']);

                                        $sessionTime = strtotime($row['req_session_time']) + $hours*60*60;
                                        echo date('H:i', $sessionTime); 
                                        ?></p>
                                    <p style="color: grey;" class="session-card-date has-text-bold"><?=dateConvert($row['req_session_date'])?></p> </p><br>
                                  <button type="button" style="border-radius: 3px;" class="btn btn-info">Go to Session</button>
                              </div>
                          </div><!-- .Col-md-3 ends here -->
                        <?php  }else if($row['req_status']=='pending'){ ?>
                          <div class="col-md-3">
                              <div class="circle c2 img-circle">
                                  <h4 class="yellow"><i class="fa fa-spinner"></i> Pending</h4>
                                  <span class="price-small"><i class="fa fa-clock"></i> <?=$row['req_session_hour']?></span>
                                  <p style="color: grey;"><p style="color: grey;" class="session-card-time has-text-bold"><?=$row['req_session_time']?> - <?php
                                        $hours = str_replace(" Hours", '', $row['req_session_hour']);

                                        $sessionTime = strtotime($row['req_session_time']) + $hours*60*60;
                                        echo date('H:i', $sessionTime); 
                                        ?></p>
                                    <p style="color: grey;" class="session-card-date has-text-bold"><?=dateConvert($row['req_session_date'])?></p> </p><br>
                                  <button type="button" style="border-radius: 3px;" class="btn btn-warning">Cancel</button>
                              </div>
                          </div><!-- .Col-md-3 ends here -->
                        <?php }else if($row['req_status']=='Completed'){ ?>
                          <div class="col-md-3">
                              <div class="circle c3 img-circle">
                                  <h4 class="green">Completed</h4>
                                  <span class="price-small"><i class="fa fa-clock"></i> <?=$row['req_session_hour']?></span>
                                  
                                  <p style="color: grey;"><p style="color: grey;" class="session-card-time has-text-bold"><?=$row['req_session_time']?> - <?php
                                        $hours = str_replace(" Hours", '', $row['req_session_hour']);

                                        $sessionTime = strtotime($row['req_session_time']) + $hours*60*60;
                                        echo date('H:i', $sessionTime); 
                                        ?></p>
                                    <p style="color: grey;" class="session-card-date has-text-bold"><?=dateConvert($row['req_session_date'])?></p> </p><br>
                                  <button type="button" style="border-radius: 3px;" class="btn btn-success">Review</button>
                              </div>
                          </div><!-- .Col-md-3 ends here -->
                        <?php } ?>
                      <?php endforeach ?>
                </div>
                </div>

                <div id="student-messages" style="display: none;">
                  <br><br>
                  <style type="text/css">
                    .container{max-width:1170px; margin:auto;}
img{ max-width:100%;}
.inbox_people {
  background: #f8f8f8 none repeat scroll 0 0;
  float: left;
  overflow: hidden;
  width: 40%; border-right:1px solid #c4c4c4;
}
.inbox_msg {
  border: 1px solid #c4c4c4;
  clear: both;
  overflow: hidden;
}
.top_spac{ margin: 20px 0 0;}


.recent_heading {float: left; width:40%;}
.srch_bar {
  display: inline-block;
  text-align: right;
  width: 60%; padding:
}
.headind_srch{ padding:10px 29px 10px 20px; overflow:hidden; border-bottom:1px solid #c4c4c4;}

.recent_heading h4 {
  color: #05728f;
  font-size: 21px;
  margin: auto;
}
.srch_bar input{ border:1px solid #cdcdcd; border-width:0 0 1px 0; width:80%; padding:2px 0 4px 6px; background:none;}
.srch_bar .input-group-addon button {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: medium none;
  padding: 0;
  color: #707070;
  font-size: 18px;
}
.srch_bar .input-group-addon { margin: 0 0 0 -27px;}

.chat_ib h5{ font-size:15px; color:#464646; margin:0 0 8px 0;}
.chat_ib h5 span{ font-size:13px; float:right;}
.chat_ib p{ font-size:14px; color:#989898; margin:auto}
.chat_img {
  float: left;
  width: 11%;
}
.chat_ib {
  float: left;
  padding: 0 0 0 15px;
  width: 88%;
}

.chat_people{ overflow:hidden; clear:both;}
.chat_list {
  border-bottom: 1px solid #c4c4c4;
  margin: 0;
  padding: 18px 16px 10px;
}
.inbox_chat { height: 550px; overflow-y: scroll;}

.active_chat{ background:#ebebeb;}

.incoming_msg_img {
  display: inline-block;
  width: 6%;
}
.received_msg {
  display: inline-block;
  padding: 0 0 0 10px;
  vertical-align: top;
  width: 92%;
 }
 .received_withd_msg p {
  background: #ebebeb none repeat scroll 0 0;
  border-radius: 3px;
  color: #646464;
  font-size: 14px;
  margin: 0;
  padding: 5px 10px 5px 12px;
  width: 100%;
}
.time_date {
  color: #747474;
  display: block;
  font-size: 12px;
  margin: 8px 0 0;
}
.received_withd_msg { width: 57%;}
.mesgs {
  float: left;
  padding: 30px 15px 0 25px;
  width: 60%;
}

 .sent_msg p {
  background: #05728f none repeat scroll 0 0;
  border-radius: 3px;
  font-size: 14px;
  margin: 0; color:#fff;
  padding: 5px 10px 5px 12px;
  width:100%;
}
.outgoing_msg{ overflow:hidden; margin:26px 0 26px;}
.sent_msg {
  float: right;
  width: 46%;
}
.input_msg_write input {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: medium none;
  color: #4c4c4c;
  font-size: 15px;
  min-height: 48px;
  width: 100%;
}

.type_msg {border-top: 1px solid #c4c4c4;position: relative;}
.msg_send_btn {
  background: #05728f none repeat scroll 0 0;
  border: medium none;
  border-radius: 50%;
  color: #fff;
  cursor: pointer;
  font-size: 17px;
  height: 33px;
  position: absolute;
  right: 0;
  top: 11px;
  width: 33px;
}
.messaging { padding: 0 0 50px 0;}
.msg_history {
  height: 516px;
  overflow-y: auto;
}
                  </style>
                  <div class="messaging">
      <div class="inbox_msg">
        <div class="inbox_people">
          <div class="headind_srch">
            <div class="recent_heading">
              <h4>Recent</h4>
            </div>
            <div class="srch_bar">
              <div class="stylish-input-group">
                <input type="text" class="search-bar"  placeholder="Search" >
                <span class="input-group-addon">
                <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                </span> </div>
            </div>
          </div>
          <div class="inbox_chat">
            <div class="chat_list active_chat">
              <div class="chat_people">
                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="chat_ib">
                  <h5>Syed Ali <span class="chat_date">Dec 25</span></h5>
                  <p>Test, which is a new approach to have all solutions 
                    astrology under one roof.</p>
                </div>
              </div>
            </div>
            <div class="chat_list">
              <div class="chat_people">
                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="chat_ib">
                  <h5>Syed Ali <span class="chat_date">Dec 25</span></h5>
                  <p>Test, which is a new approach to have all solutions 
                    astrology under one roof.</p>
                </div>
              </div>
            </div>
            <div class="chat_list">
              <div class="chat_people">
                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="chat_ib">
                  <h5>Syed Ali <span class="chat_date">Dec 25</span></h5>
                  <p>Test, which is a new approach to have all solutions 
                    astrology under one roof.</p>
                </div>
              </div>
            </div>
            <div class="chat_list">
              <div class="chat_people">
                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="chat_ib">
                  <h5>Syed Ali <span class="chat_date">Dec 25</span></h5>
                  <p>Test, which is a new approach to have all solutions 
                    astrology under one roof.</p>
                </div>
              </div>
            </div>
            <div class="chat_list">
              <div class="chat_people">
                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="chat_ib">
                  <h5>Syed Ali <span class="chat_date">Dec 25</span></h5>
                  <p>Test, which is a new approach to have all solutions 
                    astrology under one roof.</p>
                </div>
              </div>
            </div>
            <div class="chat_list">
              <div class="chat_people">
                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="chat_ib">
                  <h5>Syed Ali <span class="chat_date">Dec 25</span></h5>
                  <p>Test, which is a new approach to have all solutions 
                    astrology under one roof.</p>
                </div>
              </div>
            </div>
            <div class="chat_list">
              <div class="chat_people">
                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="chat_ib">
                  <h5>Syed Ali <span class="chat_date">Dec 25</span></h5>
                  <p>Test, which is a new approach to have all solutions 
                    astrology under one roof.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="mesgs">
          <div class="msg_history">
            <div class="incoming_msg">
              <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
              <div class="received_msg">
                <div class="received_withd_msg">
                  <p>Test which is a new approach to have all
                    solutions</p>
                  <span class="time_date"> 11:01 AM    |    June 9</span></div>
              </div>
            </div>
            <div class="outgoing_msg">
              <div class="sent_msg">
                <p>Test which is a new approach to have all
                  solutions</p>
                <span class="time_date"> 11:01 AM    |    June 9</span> </div>
            </div>
            <div class="incoming_msg">
              <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
              <div class="received_msg">
                <div class="received_withd_msg">
                  <p>Test, which is a new approach to have</p>
                  <span class="time_date"> 11:01 AM    |    Yesterday</span></div>
              </div>
            </div>
            <div class="outgoing_msg">
              <div class="sent_msg">
                <p>Apollo University, Delhi, India Test</p>
                <span class="time_date"> 11:01 AM    |    Today</span> </div>
            </div>
            <div class="incoming_msg">
              <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
              <div class="received_msg">
                <div class="received_withd_msg">
                  <p>We work directly with our designers and suppliers,
                    and sell direct to you, which means quality, exclusive
                    products, at a price anyone can afford.</p>
                  <span class="time_date"> 11:01 AM    |    Today</span></div>
              </div>
            </div>
          </div>
          <div class="type_msg">
            <div class="input_msg_write">
              <input type="text" class="write_msg" placeholder="Type a message" />
              <button class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
            </div>
          </div>
        </div>
      </div>
      
      
      <p class="text-center top_spac"> Design by <a target="_blank" href="#">Syed Ali</a></p>
      
    </div>
  </div>

    <div id="student-profile" style="display: none;">
      <br><br>
      <section id="settings" class="goo-tab view-cards-section goo-tab-active">
        <div style="background-color: white;border-radius: 3px;">
          <p class="heading-3" style="padding: 15px;"><i class="fa fa-settings"></i> Account Settings</p>
        </div>
        <?php $user = $_SESSION['student-login'] ?>
        <div style="background-color: white;border-radius: 3px;">
          <div class="row" style="padding-left:20px;padding-top:20px;">
            <div class="col-md-6">
              <label class="heading-4" style="color: black;">Name</label>
            </div>
            <div class="col-md-6">
              <h2 class="edit-parent-class" id="stu_name" style="display: inline-block;color:grey;"><?=$user['stu_name']?>
                              <input type="hidden" class="edit-parent form-control" value="<?=$user['stu_name']?>">
                            <?php if (isset($_SESSION['student-login'])): ?>                         
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><a href="javascript://" class="editProfile"><i class="fa fa-edit"></i> Edit</a></small>
                          <?php endif ?>
                      </h2>
            </div>
          </div>
          <div class="row" style="padding-left:20px;padding-top:20px;">
            <div class="col-md-6">
              <label class="heading-4" style="color: black;">Address</label>
            </div>
            <div class="col-md-6">
              <h2 class="edit-parent-class" id="stu_address" style="display: inline-block;color:grey;"><?=$user['stu_address']?>
                              <input type="hidden" class="edit-parent form-control" value="<?=$user['stu_address']?>">
                            <?php if (isset($_SESSION['student-login'])): ?>                         
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><a href="javascript://" class="editProfile"><i class="fa fa-edit"></i> Edit</a></small>
                          <?php endif ?>
                      </h2>
            </div>
          </div>
          <div class="row" style="padding-left:20px;padding-top:20px;">
            <div class="col-md-6">
              <label class="heading-4" style="color: black;">Desired Subjects</label>
            </div>
            <div class="col-md-6">
              <h2 class="edit-parent-class" id="stu_desired_subjects" style="display: inline-block;color:grey;"><?=$user['stu_desired_subjects']?>
                              <input type="hidden" class="edit-parent form-control" value="<?=$user['stu_desired_subjects']?>">
                            <?php if (isset($_SESSION['student-login'])): ?>                         
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><a href="javascript://" class="editProfile"><i class="fa fa-edit"></i> Edit</a></small>
                          <?php endif ?>
                      </h2>
            </div>
          </div>
          <div class="row" style="padding-left:20px;padding-top:20px;">
            <div class="col-md-6">
              <label class="heading-4" style="color: black;">Grades</label>
            </div>
            <div class="col-md-6">
              <h2 class="edit-parent-class" id="stu_grades" style="display: inline-block;color:grey;"><?=$user['stu_grades']?>
                              <input type="hidden" class="edit-parent form-control" value="<?=$user['stu_grades']?>">
                            <?php if (isset($_SESSION['student-login'])): ?>                         
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><a href="javascript://" class="editProfile"><i class="fa fa-edit"></i> Edit</a></small>
                          <?php endif ?>
                      </h2>
            </div>
          </div>
          <div class="row" style="padding-left:20px;padding-top:20px;">
            <div class="col-md-6">
              <label class="heading-4" style="color: black;">Email</label>
            </div>
            <div class="col-md-6">
              <h2 class="edit-parent-class" id="stu_email" style="display: inline-block;color:grey;"><?=$user['stu_email']?>
                              <input type="hidden" class="edit-parent form-control" value="<?=$user['stu_email']?>">
                            <?php if (isset($_SESSION['student-login'])): ?>                         
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><a href="javascript://" class="editProfile"><i class="fa fa-edit"></i> Edit</a></small>
                          <?php endif ?>
                      </h2>
            </div>
          </div>
                </div>
      </section>

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
<script type="text/javascript">
        $(document).ready(function() {
          
          $(document).on('click','.editProfile',function() {

            $this = $(this);
            var itemValue = $this.parent('small').parent('.edit-parent-class').children('.edit-parent').attr('type', 'text');
            $this.text('Update');
            $this.parent('small').parent('.edit-parent-class').contents().filter(function(){
                return this.nodeType === 3;
            }).remove();
            $this.before('<a href="javascript://" class="update"><i class="fa fa-edit"></i> Update</a>');
            $this.remove();

          });


        });
          $(document).on('click', '.update', function(){
            $this = $(this);

            var table = 'students';
            var action = 'editStudent';
            var itemValue = $this.parent('small').parent('.edit-parent-class').children('.edit-parent').val();
            var itemName = $this.parent('small').parent('.edit-parent-class').attr('id');
            var itemId = '<?=$user['stu_id']?>';
            var itemIdName = 'stu_id';
            var data = {itemId:itemId, itemIdName:itemIdName, table:table, itemValue:itemValue, itemName:itemName, action:action};
            $.post('<?=AJAX?>studentAjax.php', {data:data}, function(resp) {
              resp = $.parseJSON(resp);
              if(resp.status==true){
                $this.parent('small').parent('.edit-parent-class').children('.edit-parent').attr('type', 'hidden');
                $this.parent('small').parent('.edit-parent-class').children('.edit-parent').attr('value', resp.data.itemValue);
                $this.parent('small').parent('.edit-parent-class').html(resp.data.itemValue+'<input type="hidden" class="edit-parent form-control" value="'+resp.data.itemValue+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small style="display: inline-block;"><a href="javascript://" class="editProfile"><i class="fa fa-edit"></i> Edit</a></small>');
                console.log(resp.data.itemValue);

              }
            });

          });
      </script>

      <script type="text/javascript">
        $(document).on('click', '.student-profile', function(){
          $('#student-messages').fadeOut('fast', function(){

          });
          $('#upcoming-sessions-student').fadeOut('slow', function(){

          });
          $('#activities').fadeOut('slow', function(){

          });
          $('#student-profile').fadeIn('slow', function(){

          });
          $('#activities').fadeOut('slow', function(){

          });
        });

        $(document).on('click', '.upcoming-sessions-student', function(){
          $('#student-messages').fadeOut('fast', function(){

          });
          $('#upcoming-sessions-student').fadeIn('slow', function(){

          });
          $('#activities').fadeOut('slow', function(){

          });
          $('#student-profile').fadeOut('slow', function(){

          });
          $('#activities').fadeOut('slow', function(){

          });
        });

        $(document).on('click', '.student-messages', function(){
          $('#student-messages').fadeIn('fast', function(){

          });
          $('#upcoming-sessions-student').fadeOut('slow', function(){

          });
          $('#activities').fadeOut('slow', function(){

          });
          $('#student-profile').fadeOut('slow', function(){

          });
          $('#activities').fadeOut('slow', function(){

          });
        });
        
        $(document).on('click', '.dashboard', function(){
          $('#student-messages').fadeOut('fast', function(){

          });
          $('#upcoming-sessions-student').fadeOut('slow', function(){

          });
          $('#activities').fadeOut('slow', function(){

          });
          $('#student-profile').fadeOut('slow', function(){

          });
          $('#activities').fadeIn('slow', function(){

          });
        });
      </script>