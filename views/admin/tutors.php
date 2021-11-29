          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Students</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Specialization</th>
                      <th>City</th>
                      <th>Experience</th>
                      <th>Edit</th>
                      <th>History</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Specialization</th>
                      <th>City</th>
                      <th>Experience</th>
                      <th>Edit</th>
                      <th>History</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php foreach ($tutors as $key => $row): ?>
                    <tr style="">
                      <input type="hidden" class="tutor_id" value="<?=$row['tutor_id']?>">
                      <td><?=$row['tutor_name']?></td>
                      <td><?=$row['tutor_email']?></td>
                      <td><?=$row['tutor_specialization']?></td>
                      <td><?=$row['tutor_contact']?></td>
                      <td><?=$row['tutor_experience']?></td>
                      <td><a href="editTutor?tutor_id=<?=$row['tutor_id']?>" class="editTutor btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a></td>
                      <td><a href="payments?tutor_id=<?=$row['tutor_id']?>" class="editTutor btn btn-info btn-sm"><i class="fa fa-eye"></i> History</a></td>
                    </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <script src="<?=ADMINVENDOR ?>jquery/jquery.min.js"></script>
          