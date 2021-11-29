<form action="javascript://" method="POST">
  <div class="row">
    <div class="col-md-6" style="display: inline-block;width: 50%;">
      <input type="hidden" id="stu_id" value="<?=$stu['stu_id']?>">
      <label style="font-size: 18px;">Student Name</label><br>
        <input type="text" class="form-control" id="stu_name" value="<?=$stu['stu_name']?>"><br>
        <label style="font-size: 18px;">Student Email</label><br>
        <input type="text" class="form-control" id="stu_email" value="<?=$stu['stu_email']?>"><br>
        <label style="font-size: 18px;">Student Description</label><br>
        <textarea id="stu_description" class="form-control"><?=$stu['stu_description']?></textarea><br>
        <label style="font-size: 18px;">Institute Name</label><br>
        <input type="text" id="stu_institute_name" class="form-control" value="<?=$stu['stu_institute_name']?>"><br>
      </div>
    <div class="col-md-6" style="display: inline-block;width: 50%;">
      <label style="font-size: 18px;">City</label><br>
        <input type="text" class="form-control" id="stu_city" value="<?=$stu['stu_city']?>"><br>
        <label style="font-size: 18px;">Gender</label><br>
        <input type="text" class="form-control" id="stu_gender" value="<?=$stu['stu_gender']?>"><br>
        <label style="font-size: 18px;">Password</label><br>
        <input type="text" class="form-control" id="stu_password" value="<?=$stu['stu_password']?>"><br>
        <label style="font-size: 18px;">Address</label><br>
        <textarea class="form-control" id="stu_address"><?=$stu['stu_address']?></textarea><br>
      </div>
  </div>
        <center><input type="submit" id="updateThisStudent" value="Update" class="btn btn-primary btn-sm"></center><br>
</form>
<script src="<?=ADMINVENDOR?>jquery/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#updateThisStudent').click(function() {
        var stu_id = $('#stu_id').val();
        var stu_name = $('#stu_name').val();
        var stu_email = $('#stu_email').val();
        var stu_description = $('#stu_description').val();
        var stu_institute_name = $('#stu_institute_name').val();
        var stu_city = $('#stu_city').val();
        var stu_gender = $('#stu_gender').val();
        var stu_password = $('#stu_password').val();
        var stu_address = $('#stu_address').val();
        var action = 'updateThisStudent';
        var data = {stu_id:stu_id, stu_name:stu_name, stu_email:stu_email, stu_description:stu_description, stu_institute_name:stu_institute_name, stu_city:stu_city, stu_gender:stu_gender, stu_password:stu_password, stu_address:stu_address, action:action};
        $.post('<?=ADMINAJAX?>adminAjax.php', {data:data}, function(resp) {
            
          resp = $.parseJSON(resp);
          if(resp.status==true){
            window.open('students','_self');
          }

        });     
    });
  });
</script>