<br>
<main id="main">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css">
	<div class="container">
            <formError style="display: none;padding: 10px;"><center><h3 style="color: white;"><i class="fa fa-bug"></i> Fill The Form Carefully</h3></center></formError>
            <div class="panel panel-md-12">
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-4">
                      <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" class="form-control" placeholder="Full Name" id="tutor_name">
                      </div>
                      <div class="form-group">
                        <label>Gender</label>
                        <select class="form-control" id="tutor_gender">
                          <option disabled="">Gender</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Your Email" id="tutor_email">
                      </div>
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Your Password" id="tutor_password">
                      </div>
                      <div class="form-group">
                        <label>City</label>
                        <input type="text" class="form-control" placeholder="Your City" id="tutor_city">
                      </div>
                      <div class="form-group">
                        <label>Present Address</label>
                        <textarea id="tutor_address" class="form-control"></textarea>
                      </div>
                      <div class="form-group">
                        <label>Describe Yourself (300 Words)</label>
                        <textarea id="tutor_description" class="form-control"></textarea>
                      </div>
                    </div>
                    <div class="col-md-4">

                    <!-- form login -->
                      <div class="form-group" id="specializationDiv">
                        <label>Specializaion</label>
                        <select class="form-control multi-select" id="tutor_specialization" multiple>
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
                      <div class="form-group">
                        <label>Experience</label>
                        <select class="form-control" id="tutor_experience">
                          <option disabled="">Fresh</option>
                          <option value="1 Year">1 Year</option>
                          <option value="2 Years">2 Years</option>
                          <option value="3 Years">3 Years</option>
                          <option value="4 Years">4 Years</option>
                          <option value="5 Years">5 Years</option>
                          <option value="5+ Years">5+ Years</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Skills</label><br>
                        <select class="form-control multi-select" id="tutor_skills" multiple>
                            <option value="Onoptionne Coaching">Onoptionne Coaching</option>
                        <option value="Onoptionne Classes">Onoptionne Classes </option>
                        <option value="College Essay Writing">College Essay Writing</option>
                        <option value="Admissions Counseoptionng">Admissions Counseoptionng</option>
                        <option value="Admission Consulting">Admission Consulting</option>
                          <option value="Organizational Skills">Organizational Skills</option>
                          <option value="Communication Skills">Communication Skills</option>
                          <option value="Planning Skills">Planning Skills</option>
                          <option value="Proficient in English">Proficient in English</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Subjects You Wanna Teach</label>
                        <select class="form-control multi-select" id="tutor_subjects" multiple>
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
                      <div class="form-group">
                        <label>Availability Hours</label>
                        <select class="form-control" id="tutor_availability">
                          <option value="Morning (8AM-12PM)">Morning (8AM-12PM)</option>
                          <option value="Afternoon (12PM-4PM)">Afternoon (12PM-4PM)</option>
                          <option value="Evening (4PM-7PM)">Evening (4PM-7PM)</option>
                          <option value="Last Eve. (7PM-10PM)">Last Eve. (7PM-10PM)</option>
                        </select>
                      </div>
                      <!--<div style="border: 1px dashed grey;width: 100%;height: 125px;border-radius: 5px;">-->
                      <!--  <form method='post' action='javascript://' enctype="multipart/form-data" style="display: flex;justify-content: center;align-items: center;width: 100%;height: 100%;">-->
                      <!--  <label for="files" onMouseOver="this.style.color='blue', this.style.cursor='pointer'" onMouseOut="this.style.color='black', this.style.transition='0.5s'">-->
                      <!--      <h4><i class="fa fa-plus"></i> Upload Documents</h4>-->
                      <!--  </label>-->
                      <!--      <input type="file" id='files' name="files[]" multiple style="display: none">-->
                      <!--  <center><button style="margin:10px;margin-top: -2%;" type="button" class="btn btn-primary" id="submitHotelImages"><i class="fa fa-upload"></i> Upload</button></center>-->
                      <!--  </form>-->
                      <!--</div>-->
                      <!--<div class="form-group">-->
                      <!--  <label>Tutoring Type</label>-->
                      <!--  <select class="form-control" id="tutor_tutoring_type">-->
                      <!--    <option value="">SELECT TYPE</option>-->
                      <!--    <option value="Online">Online</option>-->
                      <!--    <option value="Personel">Personel</option>-->
                      <!--  </select>-->
                      <!--</div>-->
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Fee Per Hour</label>
                        <input type="text" class="form-control" placeholder="Your Demand e.g 200, 500, 1000" id="tutor_fee">
                      </div>
                      <div class="form-group">
                        <label>Qualification</label>
                        <input type="text" class="form-control" placeholder="Your Qualification" id="tutor_qualification">
                      </div>
                      <div id="roomImageDiv" style="height: 300px;border:2px dashed grey;margin-left: 15px;margin-right: 15px;">
                          <label onMouseOver="this.style.cursor='pointer'" for="tutor_profile" id="addNewRoomImageTitle" style="color: grey;display: flex;justify-content: center;align-items: center;width: 100%;height: 100%;">
                              <h3><i class="fa fa-plus"></i> Profile Image</h3>
                          </label>
                          <input type="file" id="tutor_profile" style="display: none;">
                          <input type="hidden" id="tutor_profile_image" value="">
                          <img src="" id="tutorUploadedImage" style="width: 100%;height: 300px;display: none;border-radius:50%;">
                      </div>
                      <br>
                      <!-- <form method='post' action='javascript://' enctype="multipart/form-data" style="display: flex;justify-content: center;align-items: center;width: 100%;height: 100%;">
                        <label for="files" onMouseOver="this.style.color='blue', this.style.cursor='pointer'" onMouseOut="this.style.color='black', this.style.transition='0.5s'">
                            <h5><i class="fa fa-plus"></i>Add New Images</h5>
                        </label>
                        <input type="file" id='files' name="files[]" multiple style="display: none">
                        <center><button style="margin:10px;margin-top: -7%;" type="button" class="btn btn-primary" id="submitHotelImages"><i class="fa fa-upload"></i> Upload</button></center>
                      </form> -->
                        <button class="btn btn-theme btn-lg btn-t-primary btn-block tutorRegistration" style="color:white">Register</button>                      
                      <!-- <div class="white-space-10"></div>
                      <p class="text-center"><span class="span-line">OR</span></p>
                      <p><a href="#" class="btn btn-primary btn-theme btn-block"><i class="fa fa-facebook pull-left bordered-right"></i> Register with Facebook</a></p>
                      <p><a href="#" class="btn btn-danger btn-theme btn-block"><i class="fa fa-google-plus pull-left bordered-right"></i> Register with Google</a></p> -->
                    <!-- end buttons top -->

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
 <!--  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
  <script src="<?=PLUGIN?>multiselect/chosen.js"></script> -->
  <script type="text/javascript">
        $('.multi-select').chosen();
     $(document).ready(function(){

        $('#submitHotelImages').click(function(){
          alert('a');
           var form_data = new FormData();
           var hotel_id = $('#hotel_id').val();
           // Read selected files
           var totalfiles = document.getElementById('files').files.length;
           for (var index = 0; index < totalfiles; index++) {
              form_data.append("files[]", document.getElementById('files').files[index]);
           }
           form_data.append('hotel_id', hotel_id);
           // AJAX request
           $.ajax({
             url: '<?=AJAX?>ajaxFile.php', 
             type: 'post',
             data: form_data,
             dataType: 'json',
             contentType: false,
             processData: false,
             success: function (response) {

               for(var index = 0; index < response.length; index++) {
                 var src = response[index];
                 console.log(src);
                 $('#submitHotelImages').after('<input type="hidden" class="tutor_documents" value="'+src+'">');
                 // Add img element in <div id='preview'>
                 // $('#hotelImagesGallery').append('<figure><img src="<?=IMG?>img/hotelImages/'+src+'" alt="" /></figure>');
               }

             }
           });

        });

        $("#tutor_profile").on('change',function(){
            $("#validateButton1").text('Wait File Is Uploading');
            var data = new FormData();
            data.append('main_image', $(this).prop('files')[0]);
            data.append('tutor_profile', 'tutor_profile');
            $.ajax({
                type: 'POST',
                processData: false,
                contentType: false,
                data: data,
                url: '<?=AJAX?>tutorAjax.php',
                dataType : 'json',
                success: function(resp){
                    // resp = $.parseJSON(resp);
                    // console.log(resp.data);
                    if (resp.status == true)
                    {   
                        $("#tutor_profile_image").val(resp.data);
                        $("#tutorUploadedImage").attr('src', '<?=IMG?>tutor_profile_pics/'+resp.data);
                        $("#tutorUploadedImage").css('display', 'block');
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

      $('.tutorRegistration').click(function() {
        
        var tutor_name = $('#tutor_name').val();
        var tutor_gender = $('#tutor_gender').val();
        var tutor_email = $('#tutor_email').val();
        var tutor_city = $('#tutor_city').val();
        var tutor_address = $('#tutor_address').val();
        var tutor_description = $('#tutor_description').val();
        var tutor_specialization = $('#tutor_specialization').val();
        var tutor_experience = $('#tutor_experience').val();
        var tutor_skills = $('#tutor_skills').val();
        var tutor_teaching_subjects = $('#tutor_subjects').val();
        var tutor_availability_hours = $('#tutor_availability').val();
        var tutor_documents = $(".tutor_documents").map(function() {
               return $(this).val();
            }).get();
        var tutor_qualification = $('#tutor_qualification').val();
        var tutor_password = $('#tutor_password').val();

        var tutor_profile_image = $('#tutor_profile_image').val();
        var tutor_tutoring_type = $('#tutor_tutoring_type').val();
        var tutor_fee = $('#tutor_fee').val();

        data = {tutor_fee:tutor_fee, tutor_tutoring_type:tutor_tutoring_type,tutor_profile_image: tutor_profile_image, tutor_name:tutor_name, tutor_gender:tutor_gender, tutor_email:tutor_email, tutor_city:tutor_city, tutor_address:tutor_address, tutor_description:tutor_description, tutor_specialization:tutor_specialization, tutor_experience:tutor_experience, tutor_skills:tutor_skills, tutor_teaching_subjects:tutor_teaching_subjects, tutor_availability_hours:tutor_availability_hours, tutor_documents:tutor_documents, tutor_qualification:tutor_qualification, action:'tutor_registration', tutor_password:tutor_password};

        if(tutor_name=='' || tutor_gender=='' || tutor_email=='' || tutor_city=='' || tutor_address=='' || tutor_description=='' || tutor_specialization=='' || tutor_experience=='' || tutor_skills=='' || tutor_teaching_subjects=='' || tutor_availability_hours=='' || tutor_qualification=='' || tutor_subjects==''){

          $('formError').css('display', 'block');

          setTimeout(function(){
            $('formError').fadeOut('slow', function(){});            
          }, 1000);

        }else{

          $.post('<?=AJAX?>tutorAjax.php', {data:data}, function(resp) {
            
            resp = $.parseJSON(resp);
            if(resp.status==true){
              console.log(resp);
              window.open('tutorAccount', '_self');
            }

          });


        }

      });

    });
</script>