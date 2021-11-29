          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary" style="display: inline-block;">Payments</h6>
              <div class="table-filters" style="display: inline-block;float: right;">
                <a href="javascript://" class="btn btn-danger btn-sm getPendingPayments">Pending</a>
                <a href="javascript://" class="btn btn-primary btn-sm getSentPayments">Sent</a>
              </div>
              <h6 class="m-0 font-weight-bold text-primary" id="respMsg" style="display: none;float: right;"><i class="fa fa-check"></i> Payment Sent</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Session</th>
                      <th>Amount</th>
                      <th>Status</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Session</th>
                      <th>Amount</th>
                      <th>Status</th>
                      <th>Actions</th>
                    </tr>
                  </tfoot>
                  <tbody id="tbody">
                    <?php foreach ($getPendingPayments as $key => $row): ?>
                      
                        
                    <tr>
                      <input type="hidden" class="payment_id" value="<?=$row['payment_id']?>">
                      <td><a href="javascript://" class="tutor_id" tutor-id="<?=$row['tutor_id']?>"><i class="fa fa-eye"></i> View</a></td>
                      <td><?=$row['payment_session']?></td>
                      <td>$<?=$row['payment_amount']?></td>
                      <?php 
                        if($row['payment_status']=='Pending'){
                          $payment_status = 'Pending';
                        }else{
                          $payment_status = 'Sent';
                        }
                      ?>
                      <td><?=$payment_status?></td>
                      <td>
                        <?php 
                          if($row['payment_status']=='Pending'){
                            ?>
                            <a href="javascript://" class="sendPayment btn btn-primary btn-sm"><i class="fa fa-arrow-up"></i> Sent</a>&nbsp;&nbsp;
                            <?php
                          }
                        ?>
                        <a href="javascript://" class="deletePayment btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
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
<div class="modal fade" id="payment_tutuor_modal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Tutor</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Experience</th>
                      <!-- <th>Actions</th> -->
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Experience</th>
                      <!-- <th>Actions</th> -->
                    </tr>
                  </tfoot>
                  <tbody id="tutor_tbody">
                    
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

      $(document).on('click', '.tutor_id',function(){
        $this=$(this);
        var tutor_id = $this.attr('tutor-id');
        var action = 'getPaymentTutor';
        $.post('<?=ADMINAJAX?>adminAjax.php', {tutor_id:tutor_id,action:action}, function(resp) {
          
          resp = $.parseJSON(resp);
          if(resp.status==true){
            var tutor = resp.data;
            $('#tutor_tbody').html('<tr style=""><input type="hidden" class="tutor_id" value="'+tutor.tutor_id+'"><td>'+tutor.tutor_name+'</td><td>'+tutor.tutor_email+'</td><td>'+tutor.tutor_experience+'</td></tr>');
            // <td><a href="javascript://" class="assignTutor btn btn-primary btn-sm"><i class="fa fa-plus"></i> Assign</a></td>
            $('#payment_tutuor_modal').modal('show');
            console.log(tutor);
            
          }

        });

      });

      $('.getSentPayments').on('click', function(){
        $('#tbody').empty();
        var action = 'getSentPayments';
        $.post('<?=ADMINAJAX?>adminAjax.php', {action:action}, function(resp) {
          
          resp = $.parseJSON(resp);


          if(resp.status==true){
            var requests = resp.data;
            console.log(resp);
            requests.forEach(function(e){
              var status = '';
              if(e.payment_status=='Received'){
                var status = 'Sent';
              }else if(e.payment_status=='Pending'){
                var status = 'Pending';
              }
              if(e.payment_id!==''){
              $('#tbody').append('<tr><input type="hidden" class="payment_id" value="'+e.payment_id+'"><td><a href="javascript://" class="tutor_id" tutor-id="'+e.tutor_id+'"><i class="fa fa-eye"></i> View</a></td><td>'+e.payment_session+'</td><td>$'+e.payment_amount+'</td><td>'+status+'</td><td><a href="javascript://" class="daletePayment btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a></td></tr>');
              }else{
              $('#tbody').html('<center>No Sent Payment Available</center>');
              }
            });
          }

        });

      });

      $('.getPendingPayments').on('click', function(){
        $('#tbody').empty();
      var action = 'getPendingPayments';
        $.post('<?=ADMINAJAX?>adminAjax.php', {action:action}, function(resp) {
          
          resp = $.parseJSON(resp);


          if(resp.status==true){
            var requests = resp.data;
            console.log(resp);
            var status = '';
            requests.forEach(function(e){
              if(e.payment_status=='Received'){
                var status = 'Sent';
              }else if(e.payment_status=='Pending'){
                var status = 'Pending';
              }
                if(e.payment_id!==''){
                $('#tbody').append('<tr><input type="hidden" class="payment_id" value="'+e.payment_id+'"><td><a href="javascript://" class="tutor_id" tutor-id="'+e.tutor_id+'"><i class="fa fa-eye"></i> View</a></td><td>'+e.payment_session+'</td><td>$'+e.payment_amount+'</td><td>'+status+'</td><td><a href="javascript://" class="sendPayment btn btn-primary btn-sm"><i class="fa fa-arrow-up"></i> Sent</a>&nbsp;&nbsp;<a href="javascript://" class="deletePayment btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a></td></tr>');
            }else{
              $('#tbody').html('<center>No Pending Payment Available</center>');
            }
                });
          
          }

        });

      });




      $('.assign').click(function() {
        $this = $(this);
        var req_id = $this.parent('td').parent('tr').children('.req_id').val();
        $('#assigningId').val(req_id);
      });

      $(document).on('click', '.sendPayment',function() {
        $this = $(this);
        var payment_id = $this.parent('td').parent('tr').children('.payment_id').val();
        var action = 'sendPayment';
        var data = {payment_id:payment_id, action:action};
        $.post('<?=ADMINAJAX?>adminAjax.php', {payment_id:payment_id, action:action}, function(resp) {
          resp = $.parseJSON(resp);
          if(resp.status==true){
            $this.parent('td').parent('tr').fadeOut('slow', function() {
              
            });
            
            $('#respMsg').fadeIn('slow', function() {
              
            });
            setTimeout(function(){
              $('#respMsg').fadeOut('slow', function() {});
            }, 2000);
          }
        });
      });
      $(document).on('click', '.deletePayment' ,function() {
        $this = $(this);
        var payment_id = $this.parent('td').parent('tr').children('.payment_id').val();
        var action = 'deletePayment';
        
        $.post('<?=ADMINAJAX?>adminAjax.php', {payment_id:payment_id, action:action}, function(resp) {
          resp = $.parseJSON(resp);
          if(resp.status==true){
            $this.parent('td').parent('tr').fadeOut('slow', function() {
              
            });
            
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