<form action="javascript://" method="POST">
  <div class="row">
    <div class="col-md-6" style="display: inline-block;width: 50%;">
      <input type="hidden" id="tutor_id" value="<?=$tutor['tutor_id']?>">
      <label style="font-size: 18px;">Tutor Name</label><br>
        <input type="text" class="form-control" id="tutor_name" value="<?=$tutor['tutor_name']?>"><br>
        <label style="font-size: 18px;">Email</label><br>
        <input type="text" class="form-control" id="tutor_email" value="<?=$tutor['tutor_email']?>"><br>
        <label style="font-size: 18px;">Description</label><br>
        <textarea id="tutor_description" class="form-control"><?=$tutor['tutor_description']?></textarea><br>
        <label style="font-size: 18px;">Specialization</label><br>
        <input type="text" id="tutor_specialization" class="form-control" value="<?=$tutor['tutor_specialization']?>"><br>
        <label style="font-size: 18px;">City</label><br>
        <input type="text" class="form-control" id="tutor_city" value="<?=$tutor['tutor_city']?>"><br>
        <label style="font-size: 18px;">Experience</label><br>
        <input type="text" class="form-control" id="tutor_experience" value="<?=$tutor['tutor_experience']?>"><br>
      </div>
    <div class="col-md-6" style="display: inline-block;width: 50%;">
      <label style="font-size: 18px;">Gender</label><br>
        <input type="text" class="form-control" id="tutor_gender" value="<?=$tutor['tutor_gender']?>"><br>
        <label style="font-size: 18px;">Password</label><br>
        <input type="text" class="form-control" id="tutor_password" value="<?=$tutor['tutor_password']?>"><br>
        <label style="font-size: 18px;">Address</label><br>
        <textarea class="form-control" id="tutor_address"><?=$tutor['tutor_address']?></textarea><br>
        <label style="font-size: 18px;">Skills</label><br>
        <input type="text" class="form-control" id="tutor_skills" value="<?=$tutor['tutor_skills']?>"><br>
        <label style="font-size: 18px;">Teaching Subjects</label><br>
        <input type="text" class="form-control" id="tutor_teaching_subjects" value="<?=$tutor['tutor_teaching_subjects']?>">
        <input type="submit" id="updateThisTutor" value="Update" class="btn btn-primary btn-sm"> 
      </div>
  </div>
</form>
<script type="text/javascript">
  $(document).ready(function() {
    $('#updateThisTutor').click(function() {
        var tutor_id = $('#tutor_id').val();
        var tutor_name = $('#tutor_name').val();
        var tutor_email = $('#tutor_email').val();
        var tutor_description = $('#tutor_description').val();
        var tutor_specialization = $('#tutor_specialization').val();
        var tutor_city = $('#tutor_city').val();
        var tutor_experience = $('#tutor_experience').val();
        var tutor_gender = $('#tutor_gender').val();
        var tutor_password = $('#tutor_password').val();
        var tutor_address = $('#tutor_address').val();
        var tutor_skills = $('#tutor_skills').val();
        var tutor_teaching_subjects = $('#tutor_teaching_subjects').val();
        var action = 'updateThisTutor';
        var data = {tutor_id:tutor_id, tutor_name:tutor_name, tutor_email:tutor_email, tutor_description:tutor_description, tutor_specialization:tutor_specialization, tutor_city:tutor_city, tutor_experience:tutor_experience, tutor_gender:tutor_gender, tutor_password:tutor_password, tutor_address:tutor_address, tutor_skills:tutor_skills, tutor_teaching_subjects:tutor_teaching_subjects, action:action};
        $.post('<?=ADMINAJAX?>adminAjax.php', {data:data}, function(resp) {
            
          resp = $.parseJSON(resp);
          if(resp.status==true){
            window.open('tutors','_self');
          }

        });     
    });
  });
</script>