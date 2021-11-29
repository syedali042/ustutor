<br>
<main id="main">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css">
	<div class="container">
            <div class="panel panel-md-6">
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-4">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Your Email" id="student_email">
                      </div>
                      <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" class="form-control" placeholder="Full Name" id="student_name">
                      </div>
                      <div class="form-group">
                        <label>Gender</label>
                        <select class="form-control" id="student_gender">
                          <option disabled="">Gender</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Courses</label>
                        <select class="form-control" id="student_grade">
                          <option disabled="">All Courses</option>
                          <option value="SAT/PSAT Tutoring">SAT/PSAT Tutoring</option>
                          <option value="ACT Tutoring">ACT Tutoring</option>
                          <option value="GRE Tutoring">GRE Tutoring</option>
                          <option value="GMAT Tutoring">GMAT Tutoring</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Describe Yourself (300 Words)</label>
                        <textarea id="student_description" class="form-control"></textarea>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Date Of Birth</label>
                        <input type="date" class="form-control" placeholder="Your Date Of Birth" id="student_dob">
                      </div>
                      <div class="form-group">
                        <label>City</label>
                        <input type="text" class="form-control" placeholder="Your City" id="student_city">
                      </div>
                      <div class="form-group">
                        <label>Present Address</label>
                        <textarea id="student_address" class="form-control"></textarea>
                      </div>
                      <div class="form-group">
                        <label>High School Name</label>
                        <input type="text" class="form-control" placeholder="Your School Name" id="student_schoolname">
                      </div>
                      <div class="form-group" id="specializationDiv">
                        <label>Subject You Want to Take</label>
                        <select class="form-control multi-select" id="student_subjects" multiple>
                          <option value="SAT/PSAT Tutoring">SAT/PSAT Tutoring</option>
                          <option value="ACT Tutoring">ACT Tutoring</option>
                          <option value="GRE Tutoring">GRE Tutoring</option>
                          <option value="GMAT Tutoring">GMAT Tutoring</option>
                          <option value="Geometry">Geometry</option>
                          <option value="Trigonometry">Trigonometry</option>
                          <option value="Chemistry">Chemistry</option>
                          <option value="STEM">STEM</option>
                          <option value="GCSE/O Level">GCSE/O Level</option>
                          <option value="A Level">A Level</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                       <div class="form-group">
                        <label>Choose A Password</label>
                        <input type="text" class="form-control" placeholder="Choose A Password" id="student_password">
                      </div>
                      <div id="roomImageDiv" style="height: 300px;border:2px dashed grey;margin-left: 15px;margin-right: 15px;">
                          <label onMouseOver="this.style.cursor='pointer'" for="student_profile" id="addNewRoomImageTitle" style="color: grey;display: flex;justify-content: center;align-items: center;width: 100%;height: 100%;">
                              <h3><i class="fa fa-plus"></i> Profile Image</h3>
                          </label>
                          <input type="file" id="student_profile" style="display: none;">
                          <input type="hidden" id="student_profile_image" value="">
                          <img src="" id="studentUploadedImage" style="width: 100%;height: 300px;display: none;border-radius:50%;">
                      </div><br>
                        <button class="btn btn-theme btn-lg btn-t-primary btn-block studentRegistration" style="color:white;">Register</button>
                    </div>
                </div>
              </div>
            </div>

            <div class="white-space-20"></div>
            <div class="text-center color-white">By creating an account, you agree to JobPlanet <br/><a href="#" class="link-white"><strong>Terms of Service</strong></a> and consent to our <a href="#" class="link-white"><strong>Privacy Policy</strong></a>.</div>
          </div>

</main>
<script src="<?=JS?>jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.proto.min.js"></script>
  <script type="text/javascript">
    $('.multi-select').chosen();

    $(document).ready(function() {
      $("#student_profile").on('change',function(){
            $("#validateButton1").text('Wait File Is Uploading');
            var data = new FormData();
            data.append('main_image', $(this).prop('files')[0]);
            data.append('student_profile', 'student_profile');
            $.ajax({
                type: 'POST',
                processData: false,
                contentType: false,
                data: data,
                url: '<?=AJAX?>studentAjax.php',
                dataType : 'json',
                success: function(resp){
                    // resp = $.parseJSON(resp);
                    // console.log(resp.data);
                    if (resp.status == true)
                    {   
                        $("#student_profile_image").val(resp.data);
                        $("#studentUploadedImage").attr('src', '<?=IMG?>student_profile_pics/'+resp.data);
                        $("#studentUploadedImage").css('display', 'block');
                        $('#addNewRoomImageTitle').css('display','none');
                        $('#roomImageDiv').css('border','none');
                        console.log(resp.data);
                    }
                    else
                    {
                        $("#validateButton1").text('Upload An Image First');
                    }
                }
            });
        });



      $('.studentRegistration').click(function() {
        
        var student_email = $('#student_email').val();
        var student_name = $('#student_name').val();
        var student_gender = $('#student_gender').val();
        var student_city = $('#student_city').val();
        var student_address = $('#student_address').val();
        var student_grade = $('#student_grade').val();
        var student_description = $('#student_description').val();
        var student_dob = $('#student_dob').val();
        var student_schoolname = $('#student_schoolname').val();
        var student_subjects = $('#student_subjects').val();
        var student_password = $('#student_password').val();
        var student_profile_image = $('#student_profile_image').val();

        data = {student_profile_image: student_profile_image, student_name:student_name, student_gender:student_gender, student_email:student_email, student_city:student_city, student_address:student_address, student_description:student_description, action:'student_registration', student_password:student_password, student_dob:student_dob, student_subjects:student_subjects, student_schoolname:student_schoolname, student_grade:student_grade};

        if(student_name=='' || student_gender=='' || student_email=='' || student_city=='' || student_address=='' || student_description=='' || student_password=='' || student_dob=='' || student_subjects=='' || student_schoolname=='' || student_grade==''){

          $('formError').css('display', 'block');

          setTimeout(function(){
            $('formError').fadeOut('slow', function(){});            
          }, 1000);

        }else{

          $.post('<?=AJAX?>studentAjax.php', {data:data}, function(resp) {
            
            resp = $.parseJSON(resp);
            if(resp.status==true){
              console.log(resp);
              window.open('studentAccount', '_self');
            }

          });


        }

      });
    });
  </script>