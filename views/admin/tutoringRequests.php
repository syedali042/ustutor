          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary" style="display: inline-block;">Requests</h6>
              <div class="table-filters" style="display: inline-block;float: right;">
                <a href="javascript://" class="btn btn-danger btn-sm getPendingRequests">Pending</a>
                <a href="javascript://" class="btn btn-primary btn-sm getActiveRequests">Active</a>
                <a href="javascript://" class="btn btn-success btn-sm getCompletedRequests">Completed</a>
              </div>
              <h6 class="m-0 font-weight-bold text-primary" id="respMsg" style="display: none;float: right;"><i class="fa fa-check"></i> Tutor Assigned</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Contact</th>
                      <th>Objective</th>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Contact</th>
                      <th>Objective</th>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Actions</th>
                    </tr>
                  </tfoot>
                  <tbody id="tbody">
                    <?php foreach ($tutoringRequests as $key => $row): ?>
                    <tr>
                      <input type="hidden" class="req_id" value="<?=$row['req_id']?>">
                      <td><?=$row['req_name']?></td>
                      <td><?=$row['req_email']?></td>
                      <td><?=$row['req_contact']?></td>
                      <td><?=$row['req_objective']?></td>
                      <td><?=$row['req_session_date']?></td>
                      <td><?=$row['req_session_time']?></td>
                      <td>
                        <a href="editRequest?req_id=<?=$row['req_id']?>" class="editStudent btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                        <a href="javascript://" data-toggle="modal" data-target="#myModal" class="assign btn btn-success btn-sm"><i class="fa fa-plus"></i> Tutor</a>
                      </td>
                    </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
                <input type="hidden" id="assigningId">
              </div>
            </div>
          </div>

<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>City</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>City</th>
                      <th>Actions</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    
                    <?php foreach ($tutors as $key => $row): ?>
                    <tr style="">
                      <input type="hidden" class="tutor_id" value="<?=$row['tutor_id']?>">
                      <td><?=$row['tutor_name']?></td>
                      <td><?=$row['tutor_email']?></td>
                      <td><?=$row['tutor_city']?></td>
                      <td><a href="javascript://" class="assignTutor btn btn-primary btn-sm"><i class="fa fa-plus"></i> Assign</a></td>
                    </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
  <script src="<?=ADMINVENDOR?>jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {

      $('.getActiveRequests').on('click', function(){

        var action = 'getActiveRequests';
        $.post('<?=ADMINAJAX?>adminAjax.php', {action:action}, function(resp) {
          
          resp = $.parseJSON(resp);


          if(resp.status==true){
            var requests = resp.data;
            requests.forEach(function(e){
            console.log(e);
              $('#tbody').html('<tr><input type="hidden" class="req_id" value="'+e.req_id+'"><td>'+e.req_name+'</td><td>'+e.req_email+'</td><td>'+e.req_contact+'</td><td>'+e.req_objective+'</td><td>'+e.req_session_date+'</td><td>'+e.req_session_time+'</td><td><a href="editRequest?req_id='+e.req_id+'" class="editStudent btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>&nbsp;&nbsp;<a href="javascript://" data-toggle="modal" data-target="#myModal" class="assign btn btn-success btn-sm"><i class="fa fa-arrow-up"></i> Change</a></td></tr>');
            });
          }

        });

      });

      $('.getCompletedRequests').on('click', function(){

        var action = 'getCompletedRequests';
        $.post('<?=ADMINAJAX?>adminAjax.php', {action:action}, function(resp) {
          
          resp = $.parseJSON(resp);


          if(resp.status==true){
            var requests = resp.data;
            requests.forEach(function(e){
            console.log(e);
              $('#tbody').html('<tr><input type="hidden" class="req_id" value="'+e.req_id+'"><td>'+e.req_name+'</td><td>'+e.req_email+'</td><td>'+e.req_contact+'</td><td>'+e.req_objective+'</td><td>'+e.req_session_date+'</td><td>'+e.req_session_time+'</td><td><a href="editRequest?req_id='+e.req_id+'" class="editStudent btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a></td></tr>');
            }); 
          }

        });

      });

      $('.getPendingRequests').on('click', function(){

        var action = 'getPendingRequests';
        $.post('<?=ADMINAJAX?>adminAjax.php', {action:action}, function(resp) {
          
          resp = $.parseJSON(resp);


          if(resp.status==true){
            var requests = resp.data;
            requests.forEach(function(e){
            console.log(e);
              $('#tbody').html('<tr><input type="hidden" class="req_id" value="'+e.req_id+'"><td>'+e.req_name+'</td><td>'+e.req_email+'</td><td>'+e.req_contact+'</td><td>'+e.req_objective+'</td><td>'+e.req_session_date+'</td><td>'+e.req_session_time+'</td><td><a href="editRequest?req_id='+e.req_id+'" class="editStudent btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>&nbsp;&nbsp;<a href="javascript://" data-toggle="modal" data-target="#myModal" class="assign btn btn-success btn-sm"><i class="fa fa-plus"></i> Tutor</a></td></tr>');
            }); 
          }

        });

      });




      $('.assign').click(function() {
        $this = $(this);
        var req_id = $this.parent('td').parent('tr').children('.req_id').val();
        $('#assigningId').val(req_id);
      });

      $('.assignTutor').click(function() {
        $this = $(this);
        var tutor_id = $this.parent('td').parent('tr').children('.tutor_id').val();
        var req_id = $('#assigningId').val();
        var action = 'assignTutor';
        var data = {tutor_id:tutor_id, action:action, req_id:req_id};
        $.post('<?=ADMINAJAX?>adminAjax.php', {data:data}, function(resp) {
          resp = $.parseJSON(resp);
          if(resp.status==true){
            $('#myModal').modal('hide');
            $('#respMsg').fadeIn('slow', function() {
              
            });
            setTimeout(function(){
              $('#respMsg').fadeOut('slow', function() {});
            }, 2000);
          }
        });
      });
    });
  </script>