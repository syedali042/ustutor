<form action="javascript://" method="POST">
  <div class="row">
    <div class="col-md-6" style="display: inline-block;width: 50%;">
      <input type="hidden" id="req_id" value="<?=$req['req_id']?>">
      <label style="font-size: 18px;">Tutoring Type</label><br>
        <input type="text" class="form-control" id="req_tutoring_type" value="<?=$req['req_tutoring_type']?>"><br>
        <label style="font-size: 18px;">Student Name</label><br>
        <input type="text" class="form-control" id="req_name" value="<?=$req['req_name']?>"><br>
        <label style="font-size: 18px;">Contact</label><br>
        <input type="text" id="req_contact" class="form-control" value="<?=$req['req_contact']?>"><br>
        <label style="font-size: 18px;">Email</label><br>
        <input type="text" class="form-control" id="req_email" value="<?=$req['req_email']?>"><br>
        <label style="font-size: 18px;">Assigned Tutor</label><br>
        <select id="req_assigned_tutor" class="form-control">
          <option value="<?=$tutor['tutor_id']?>"><?=$tutor['tutor_name']?></option>
          <?php foreach ($tutors as $key => $row): ?>
            <option value="<?=$row['tutor_id']?>"><?=$row['tutor_name']?></option>
          <?php endforeach ?>
        </select>
      </div>
    <div class="col-md-6" style="display: inline-block;width: 50%;">
      <label style="font-size: 18px;">Objectives</label><br>
        <input type="text" class="form-control" id="req_objective" value="<?=$req['req_objective']?>"><br>
        <label style="font-size: 18px;">Session Date</label><br>
        <input type="text" class="form-control" id="req_session_date" value="<?=$req['req_session_date']?>"><br>
        <label style="font-size: 18px;">Tutoring Time</label><br>
        <input type="text" class="form-control" id="req_session_time" value="<?=$req['req_session_time']?>"><br>
        <label style="font-size: 18px;">Zip Code</label><br>
        <input type="text" class="form-control" id="req_zip" value="<?=$req['req_zip']?>"><br>
        <label style="font-size: 18px;">Session Hours</label><br>
        <input type="text" class="form-control" id="req_session_hour" value="<?=$req['req_session_hour']?>"><br>
      </div>
  </div><br>
        <center><input type="submit" id="updateThisRequest" value="Update" class="btn btn-primary btn-sm"></center><br>
</form>
<script src="<?=ADMINVENDOR?>jquery/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#updateThisRequest').click(function() {
        var req_id = $('#req_id').val();
        var req_tutoring_type = $('#req_tutoring_type').val();
        var req_name = $('#req_name').val();
        var req_contact = $('#req_contact').val();
        var req_email = $('#req_email').val();
        var req_assigned_tutor = $('#req_assigned_tutor').val();
        var req_objective = $('#req_objective').val();
        var req_session_date = $('#req_session_date').val();
        var req_session_hour = $('#req_session_hour').val();
        var req_session_time = $('#req_session_time').val();
        var req_zip = $('#req_zip').val();
        var action = 'updateThisRequest';
        var data = {req_tutoring_type:req_tutoring_type, req_name:req_name, req_contact:req_contact, req_email:req_email, req_assigned_tutor:req_assigned_tutor, req_objective:req_objective, req_session_date:req_session_date, req_session_time:req_session_time, req_session_hour:req_session_hour, req_zip:req_zip, action:action};
        $.post('<?=ADMINAJAX?>adminAjax.php', {data:data}, function(resp) {
          
          resp = $.parseJSON(resp);
          if(resp.status==true){
            window.open('tutoringRequests','_self');
          }

        });     
    });
  });
</script>