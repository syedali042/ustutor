<br>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">

#msform {
    text-align: center;
    position: relative;
    margin-top: 20px
}

#msform fieldset .form-card {
    background: white;
    border: 0 none;
    border-radius: 0px;
    box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
    padding: 20px 40px 30px 40px;
    box-sizing: border-box;
    width: 94%;
    margin: 0 3% 20px 3%;
    position: relative
}

#msform fieldset {
    background: white;
    border: 0 none;
    border-radius: 0.5rem;
    box-sizing: border-box;
    width: 100%;
    margin: 0;
    padding-bottom: 20px;
    position: relative
}

#msform fieldset:not(:first-of-type) {
    display: none
}

#msform fieldset .form-card {
    text-align: left;
    color: #9E9E9E
}

#msform input,
#msform textarea {
    padding: 0px 8px 4px 8px;
    border: none;
    border-bottom: 1px solid #ccc;
    border-radius: 0px;
    margin-bottom: 25px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    font-family: montserrat;
    color: #2C3E50;
    font-size: 16px;
    letter-spacing: 1px
}

#msform input:focus,
#msform textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: none;
    font-weight: bold;
    border-bottom: 2px solid #E1245A;
    outline-width: 0
}

#msform .action-button {
    width: 100px;
    background: #E1245A;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px
}

#msform .action-button:hover,
#msform .action-button:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #E1245A
}

#msform .action-button-previous {
    width: 100px;
    background: #616161;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px
}

#msform .action-button-previous:hover,
#msform .action-button-previous:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #616161
}

select.list-dt {
    border: none;
    outline: 0;
    border-bottom: 1px solid #ccc;
    padding: 2px 5px 3px 5px;
    margin: 2px
}

select.list-dt:focus {
    border-bottom: 2px solid #E1245A
}

.card {
    z-index: 0;
    border: none;
    border-radius: 0.5rem;
    position: relative
}

.fs-title {
    font-size: 25px;
    color: #2C3E50;
    margin-bottom: 10px;
    font-weight: bold;
    text-align: left
}

#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: lightgrey
}

#progressbar .active {
    color: #000000
}

#progressbar li {
    list-style-type: none;
    font-size: 12px;
    width: 14%;
    float: left;
    position: relative
}

#progressbar #account:before {
    font-family: FontAwesome;
    content: "\f023"
}

#progressbar #personal:before {
    font-family: FontAwesome;
    content: "\f007"
}

#progressbar #payment:before {
    font-family: FontAwesome;
    content: "\f09d"
}

#progressbar #confirm:before {
    font-family: FontAwesome;
    content: "\f00c"
}

#progressbar #objective:before{
    font-family: FontAwesome;
    content: "\f19d";	
}
#progressbar #timezone:before{
    font-family: FontAwesome;
    content: "\f0ac";
    	
}
#progressbar #time:before{
    font-family: FontAwesome;
    content: "\f017";
}
#progressbar #date:before{
    font-family: FontAwesome;
    content: "\f073";	
}
#progressbar #session:before{
    font-family: FontAwesome;
    content: "\f058";   
}


#progressbar li:before {
    width: 50px;
    height: 50px;
    line-height: 45px;
    display: block;
    font-size: 18px;
    color: #ffffff;
    background: lightgray;
    border-radius: 50%;
    margin: 0 auto 10px auto;
    padding: 2px
}

#progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: lightgray;
    position: absolute;
    left: 0;
    top: 25px;
    z-index: -1
}

#progressbar li.active:before,
#progressbar li.active:after {
    background: #E1245A
}

.radio-group {
    position: relative;
    margin-bottom: 25px
}

.radio {
    display: inline-block;
    width: 204;
    height: 104;
    border-radius: 0;
    background: lightblue;
    box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
    box-sizing: border-box;
    cursor: pointer;
    margin: 8px 2px
}

.radio:hover {
    box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3)
}

.radio.selected {
    box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1)
}

.fit-image {
    width: 100%;
    object-fit: cover
}
.calendar, .calendar_weekdays, .calendar_content {
    max-width: 300px;
}
.calendar {
    margin: auto;
    font-family:'Muli', sans-serif;
    font-weight: 400;
}
.calendar_content, .calendar_weekdays, .calendar_header {
    position: relative;
    overflow: hidden;
}
.calendar_weekdays div {
    display:inline-block;
    vertical-align:top;
}
.calendar_weekdays div, .calendar_content div {
    width: 14.28571%;
    overflow: hidden;
    text-align: center;
    background-color: transparent;
    color: #6f6f6f;
    font-size: 14px;
}
.calendar_content div {
    border: 1px solid transparent;
    float: left;
}
.calendar_content div:hover {
    border: 1px solid #dcdcdc;
    cursor: default;
}
.calendar_content div.blank:hover {
    cursor: default;
    border: 1px solid transparent;
}
.calendar_content div.past-date {
    color: #d5d5d5;
}
.calendar_content div.today {
    font-weight: bold;
    font-size: 14px;
    color: #87b633;
    border: 1px solid #dcdcdc;
}
.calendar_content div.selected {
    background-color: #f0f0f0;
}
.calendar_header {
    width: 100%;
    text-align: center;
}
.calendar_header h2 {
    padding: 0 10px;
    font-family:'Muli', sans-serif;
    font-weight: 300;
    font-size: 18px;
    color: #87b633;
    float:left;
    width:70%;
    margin: 0 0 10px;
}
button.switch-month {
    background-color: transparent;
    padding: 0;
    outline: none;
    border: none;
    color: #dcdcdc;
    float: left;
    width:15%;
    transition: color .2s;
}
button.switch-month:hover {
    color: #87b633;
}


</style>
<main id="main">
	

	<div class="container-fluid" id="grad1">
    <div class="row justify-content-center mt-0">
    	<div class="col-11 col-sm-9 col-md-7 col-lg-3 text-center p-0 mt-3 mb-2"></div>
        <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
            <center id="resp" style="display: none;color: grey;"><i class="fa fa-check"></i> Request Sent Successfull !</center>
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3" id="requestForm">
                <h2><strong>Request A Tutor</strong></h2>
                <p>Fill all form field to go to next step</p>
                <div class="row">
                    
                    <div class="col-md-12 mx-0">
                        <form id="msform" action="javascript://">
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="account"><strong>Account</strong></li>
                                <li id="personal"><strong>Personal</strong></li>
                                <li id="objective"><strong>Objective</strong></li>
                                <li id="timezone"><strong>TimeZone</strong></li>
                                <li id="date"><strong>Date</strong></li>
                                <li id="time"><strong>Time</strong></li>
                                <li id="session"><strong>Session Hours</strong></li>
                            </ul> <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Select Type Of Tutoring</h2> 
                                    <button class="btn btn-default tutoring-type" style="width: 100%;">1-on-1 tutoring</button><br><br>
                                    <button class="btn btn-default tutoring-type" style="width: 100%;">Small Group Classes</button><br><br>
                                </div> <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Personal Information</h2> <input id="req_name" type="text" name="name" placeholder="Full Name" /> <input type="text" id="req_contact" name="phno" placeholder="Contact No." /> <input type="email" id="req_email" name="phno_2" placeholder="Email Address" />
                                    <input type="text" name="phno_2" id="req_zip" placeholder="Zip Code" />
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">What is your learning objective</h2>
                                    <button class="btn btn-default objective" style="width: 100%;">Academic Improvement</button><br><br>
                                    <button class="btn btn-default objective" style="width: 100%;">Exam Preparation</button><br><br>
                                    <button class="btn btn-default objective" style="width: 100%;">Homework Help</button><br><br>
                                    <button class="btn btn-default objective" style="width: 100%;">Other</button><br><br>
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Confirm Your TimeZone</h2>
                                    <p>
                                    	We'll use this information to show you accurate session times.
                                    </p>
                                    <p style="display: inline-block;">Your Detected timezone:</p> <h4 style="display: inline-block;"><strong id="req_timezone">
                                    	<script type="text/javascript">
                                    		function seconds_with_leading_zeros(dt) 
											{ 
											  return /\((.*)\)/.exec(new Date().toString())[1];
											}
											dt = new Date(); 
											document.write(seconds_with_leading_zeros(dt));
                                    	</script>
                                    </strong></h4><br>
                                    <!-- <a href="#">Get All Time Zones</a> -->
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Select Suitable Date</h2>
                                    <br>
                                    <input type="date" id="req_session_date" class="form-control">
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Choose Your Hours</h2>
                                    <input type="time" id="req_session_time" />
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Choose Your Session Duration</h2>
                                    <button style="display: inline-block;padding: 20px;" class="btn btn-default btn-sm sessionTime">1 Hour</button>
                                    <button style="display: inline-block;padding: 20px;" class="btn btn-default btn-sm sessionTime">1.5 Hours</button>
                                    <button style="display: inline-block;padding: 20px;" class="btn btn-default btn-sm sessionTime">2 Hours</button>
                                    <button style="display: inline-block;padding: 20px;" class="btn btn-default btn-sm sessionTime">2.5 Hours</button>
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" class="action-button" value="Submit" id="submitRequest" />
                            </fieldset>
                            <!-- <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Payment Information</h2>
                                    <div class="radio-group">
                                        <div class='radio' data-value="credit"><img src="https://i.imgur.com/XzOzVHZ.jpg" width="200px" height="100px"></div>
                                        <div class='radio' data-value="paypal"><img src="https://i.imgur.com/jXjwZlj.jpg" width="200px" height="100px"></div> <br>
                                    </div> <label class="pay">Card Holder Name*</label> <input type="text" name="holdername" placeholder="" />
                                    <div class="row">
                                        <div class="col-9"> <label class="pay">Card Number*</label> <input type="text" name="cardno" placeholder="" /> </div>
                                        <div class="col-3"> <label class="pay">CVC*</label> <input type="password" name="cvcpwd" placeholder="***" /> </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3"> <label class="pay">Expiry Date*</label> </div>
                                        <div class="col-9"> <select class="list-dt" id="month" name="expmonth">
                                                <option selected>Month</option>
                                                <option>January</option>
                                                <option>February</option>
                                                <option>March</option>
                                                <option>April</option>
                                                <option>May</option>
                                                <option>June</option>
                                                <option>July</option>
                                                <option>August</option>
                                                <option>September</option>
                                                <option>October</option>
                                                <option>November</option>
                                                <option>December</option>
                                            </select> <select class="list-dt" id="year" name="expyear">
                                                <option selected>Year</option>
                                            </select> </div>
                                    </div>
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="make_payment" class="next action-button" value="Confirm" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text-center">Success !</h2> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>
                                    </div> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5>You Have Successfully Signed Up</h5>
                                        </div>
                                    </div>
                                </div>
                            </fieldset> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
<script src="<?=JS?>jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function(){

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;

$(".next").click(function(){

current_fs = $(this).parent();
next_fs = $(this).parent().next();

//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 600
});
});

$(".previous").click(function(){

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 600
});
});

$('.radio-group .radio').click(function(){
$(this).parent().find('.radio').removeClass('selected');
$(this).addClass('selected');
});

$(".submit").click(function(){
return false;
})

});

$(document).ready(function() {
$('.objective').on('click', function(){
        $this = $(this);
        objective = $this.text();

        $('.objective').each(function(){

            if($('.objective').text()!==objective){
              $('.objective').css('background-color', 'white');
            }else{
              $('.objective').css('background-color', '#E1245A');
            }

        });
        
		$this.css('background-color', '#E1245A');
        $this.after('<input type="hidden" id="req_objective" value="'+objective+'">');

	});
	$('.tutoring-type').on('click', function(){
        $this = $(this);
        tutoring_type = $this.text();
        $('.tutoring-type').each(function(){

            if($('.tutoring-type').text()!==tutoring_type){
		      $('.tutoring_type').css('background-color', 'white');
            }else{
              $('.tutoring_type').css('background-color', '#E1245A');
            }

        });

        $this.after('<input type="hidden" id="tutoring_type" value="'+tutoring_type+'">');
	});
    $('.sessionTime').on('click', function(){
        $this = $(this);
        sessionTime = $this.text();
        $('.sessionTime').each(function(){
            $this = $(this)
            if($this.text()==sessionTime){
              $this.css('background-color', '#E1245A');
            }else{
              $this.css('background-color', 'white');
            }
        });
        $this.after('<input type="hidden" id="req_session_hour" value="'+sessionTime+'">');
    });

        $(document).on('click', '#submitRequest', function(){

            var tutoring_type = $('#tutoring_type').val();
            var req_name = $('#req_name').val();
            var req_contact = $('#req_contact').val();
            var req_email = $('#req_email').val();
            var req_zip = $('#req_zip').val();
            var req_objective = $('#req_objective').val();
            var req_timezone = $('#req_timezone').val();
            var req_session_date = $('#req_session_date').val();
            var req_session_time = $('#req_session_time').val();
            var req_session_hour = $('#req_session_hour').val();
            var action = 'tutoring-request';

            var data = {tutoring_type:tutoring_type, req_name:req_name, req_contact:req_contact, req_email:req_email, req_zip:req_zip, req_objective:req_objective, req_timezone:req_timezone, req_session_date:req_session_date, req_session_time:req_session_time, req_session_hour:req_session_hour, action:action};
            $.post('<?=AJAX?>studentAjax.php', {data:data}, function(resp) {
                
                resp = $.parseJSON(resp);
                if(resp.status==true){
                    $('#resp').fadeIn('slow', function(){});
                    $('#requestForm').fadeOut('fast', function(){});
                  window.open('studentAccount', '_self');

                }

            });

        });

});

</script>
