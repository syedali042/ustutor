<main id="main">
	<?php 
	function dateConvert($date){
        $Month = date("F", strtotime($date));
        $Date = date("d", strtotime($date));
        $Year = date("y", strtotime($date));
        return $Month.' '.$Date.', 20'.$Year;
    }
	?>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<div class="tutor-dashboard view-cards-wrap" id="account">
		<link rel="stylesheet" type="text/css" href="<?=CSS?>studentAccount.css">
		<div class="view-cards">
			<header class="view-cards-section">
				<h1 class="heading-2" style="color: #3c4040;">Welcome back, <?=$_SESSION['tutor-login']['tutor_name']?> !</h1>
			</header>
			<section class="view-cards-section">
				<h1 class="heading-3" style="color: #3c4040;">Upcoming online sessions</h1>
					<ul class="dashboard-card-list">
						<?php foreach ($getUpcomingSessions as $key => $row): ?>
						<li class="dashboard-card-list-item">
							<div class="dashboard-card is-clickable session-card">
								<div class="session-card-badges">
									<p style="display: inline-block;">
					                    Online
					                    <svg version="1.1" width="16px" height="16" viewBox="0 0 24 24" class="goo-icon goo-icon-desktop-computer undefined" aria-hidden="true"><path fill-rule="evenodd" d="M6 3h12c1.105 0 2 .97 2 2.167v8.666C20 15.03 19.105 16 18 16H6c-1.105 0-2-.97-2-2.167V5.167C4 3.97 4.895 3 6 3zm0 2v9h12V5H6zM3 21a1 1 0 010-2h18a1 1 0 010 2H3z"></path></svg></p>
									<ul class="goo-tags" style="float:right;">
										<?php if ($row['req_assigned_tutor']!==''): ?>
											<li class="goo-tag is-small is-secondary">
												Confirmed
											</li>
										<?php endif ?>
									</ul>
								</div>
								<div class="session-card-content">
									<header class="session-card-content-area">
										<a href="/teach/sessions/2427" class="session-card-link">
											<br>
											<div class="session-card-header">
												<h3 class="session-card-header-left session-card-date-time body-1">
													<p style="color: #222222;" class="session-card-time has-text-bold"><?=$row['req_session_time']?> - <?php
															$hours = str_replace(" Hours", '', $row['req_session_hour']);

													 		$sessionTime = strtotime($row['req_session_time']) + $hours*60*60;
													 		echo date('H:i', $sessionTime); 
													 		?></p>
													<p style="color: #222222;" class="session-card-date has-text-bold"><?=dateConvert($row['req_session_date'])?></p> 
												</h3> 
												<div class="session-card-header-right session-card-payout body-2 has-text-right">
													<!-- <p style="color: #222222;" class="has-text-bold">$80</p>
													<p style="color: #222222;">(2 hrs)</p> -->
											
									            	<a href="#" style="font-size:13px;" target="_blank" class="goo-button is-primary btn-sm">
									            		<i class="fa fa-sign-in"></i> &nbsp;Session
									            	</a>
							            	
												</div>
											</div>
										</a>
										<div class="session-card-attendee goo-avatar-group">
						            		<div class="goo-avatar is-small">
						            			<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRg5bWFcvmd2tOjCQpJa6-EnnQ0oqvms65IZg&usqp=CAU">
						            		</div>
						            		<dl class="goo-avatar-info">
						            			<dt class="is-gray-extra-dark-text-color">Student</dt>
						            			<dd class="goo-avatar-name"><?=$row['req_name']?></dd>
						            		</dl>
					            		</div>
					            		<hr class="dashboard-card-divider goo-divider">
					            		<div class="session-card-header-bottom session-card-timezone">
													<p style="display: inline-block;" class="body-3 is-gray-extra-dark-text-color">
													    <script type="text/javascript">
				                                    		function seconds_with_leading_zeros(dt) 
															{ 
															  return /\((.*)\)/.exec(new Date().toString())[1];
															}
															dt = new Date(); 
															document.write(seconds_with_leading_zeros(dt));
				                                    	</script>
													</p>
													<p style="display: inline-block; float:right;font-size: 12px;margin-top: 3px;" class="session-card-subject"><?=$row['req_objective']?></p>
												</div>
										<div class="session-card-location body-3 is-gray-extra-dark-text-color">
					                </div>
					            </header>
					            <div class="session-card-attendees session-card-content-area">
					            </div>
					            <div class="session-card-actions session-card-content-area">
					            	<hr class="dashboard-card-divider goo-divider">
					            	<div class="session-card-buttons goo-button-group is-equal-width is-compact">
					            		
					            	</div>
					            </div>
					        </div>
					    </div>
					</li>
						<?php endforeach ?>
				</ul>
			</section>
		</div>
	</div>



	<div class="tutor-dashboard view-cards-wrap" id="logs" style="display: none;">
		<div class="view-cards">
				<!-- <section id="upcoming" class="goo-tab view-cards-section goo-tab-active">
					<header class="view-cards-section-header">
						<h2 class="view-cards-section-heading" style="color: #3c4040;">Upcoming</h2>
					</header>
					<div class="view-card-collection">
						<ul class="dashboard-card-list">
							<?php foreach ($getUpcomingSessions as $key => $row): ?>
						<li class="dashboard-card-list-item">
							<div class="dashboard-card is-clickable session-card">
								<div class="session-card-badges">
									<p style="display: inline-block;">
					                    Online
					                    <svg version="1.1" width="16px" height="16" viewBox="0 0 24 24" class="goo-icon goo-icon-desktop-computer undefined" aria-hidden="true"><path fill-rule="evenodd" d="M6 3h12c1.105 0 2 .97 2 2.167v8.666C20 15.03 19.105 16 18 16H6c-1.105 0-2-.97-2-2.167V5.167C4 3.97 4.895 3 6 3zm0 2v9h12V5H6zM3 21a1 1 0 010-2h18a1 1 0 010 2H3z"></path></svg></p>
									<ul class="goo-tags" style="float:right;">
										<?php if ($row['req_assigned_tutor']!==''): ?>
											<li class="goo-tag is-small is-secondary">
												Confirmed
											</li>
										<?php endif ?>
									</ul>
								</div>
								<div class="session-card-content">
									<header class="session-card-content-area">
										<a href="/teach/sessions/2427" class="session-card-link">
											<br>
											<div class="session-card-header">
												<h3 class="session-card-header-left session-card-date-time body-1">
													<p style="color: #222222;" class="session-card-time has-text-bold"><?=$row['req_session_time']?> - <?php
															$hours = str_replace(" Hours", '', $row['req_session_hour']);

													 		$sessionTime = strtotime($row['req_session_time']) + $hours*60*60;
													 		echo date('H:i', $sessionTime); 
													 		?></p>
													<p style="color: #222222;" class="session-card-date has-text-bold"><?=dateConvert($row['req_session_date'])?></p> 
												</h3> 
												<div class="session-card-header-right session-card-payout body-2 has-text-right">
													<p style="color: #222222;" class="has-text-bold">$80</p>
													<p style="color: #222222;">(2 hrs)</p>
												</div>
												<div class="session-card-header-bottom session-card-timezone">
													<p style="display: inline-block;" class="body-3 is-gray-extra-dark-text-color">
													    <script type="text/javascript">
				                                    		function seconds_with_leading_zeros(dt) 
															{ 
															  return /\((.*)\)/.exec(new Date().toString())[1];
															}
															dt = new Date(); 
															document.write(seconds_with_leading_zeros(dt));
				                                    	</script>
													</p>
													<p style="display: inline-block; float:right;font-size: 12px;margin-top: 3px;" class="session-card-subject"><?=$row['req_objective']?></p>
												</div>
											</div>
										</a>
										
										<div class="session-card-location body-3 is-gray-extra-dark-text-color">
					                </div>
					            </header>
					            <hr class="dashboard-card-divider goo-divider">
					            <div class="session-card-attendees session-card-content-area">
					            	<div class="session-card-attendee goo-avatar-group">
					            		<div class="goo-avatar is-small">
					            			<img src="https://s3.amazonaws.com/gooroo-static/avatars/dog.png">
					            		</div>
					            		<dl class="goo-avatar-info">
					            			<dt class="is-gray-extra-dark-text-color">Student</dt>
					            			<dd class="goo-avatar-name"><?=$row['req_name']?></dd>
					            		</dl>
					            	</div>
					            </div>
					            <div class="session-card-actions session-card-content-area">
					            	<hr class="dashboard-card-divider goo-divider">
					            	<div class="session-card-buttons goo-button-group is-equal-width is-compact">
					            		<a href="#" target="_blank" class="goo-button is-primary is-small is-full-width">Enter Session</a>
					            	</div>
					            </div>
					        </div>
					    </div>
					</li>
						<?php endforeach ?>
						</ul>
					</div>
				</section> -->
			<section id="past" class="goo-tab view-cards-section">
				<br><br><br>
				<header class="view-cards-section-header">
					<h2 class="view-cards-section-heading" style="color: #3c4040;">Past</h2>
				</header> 
				<div class="view-card-collection">
					<ul class="dashboard-card-list">
						<?php foreach ($getPreviousSessions as $key => $row): ?>
							<li class="dashboard-card-list-item">
								<div class="dashboard-card is-clickable session-card session-card-cancelled">
									<div class="session-card-content">
										<header class="session-card-content-area">
											<a href="/teach/sessions/1307" class="session-card-link">
												<div class="session-card-header">
													<h3 class="session-card-header-left session-card-date-time body-1" style="display: inline-block;">
														<p style="color: #222222;" class="session-card-time has-text-bold"><?=$row['req_session_time']?> - <?php
															$hours = str_replace(" Hours", '', $row['req_session_hour']);

													 		$sessionTime = strtotime($row['req_session_time']) + $hours*60*60;
													 		echo date('H:i', $sessionTime); 
													 		?></p>
													<p style="color: #222222;" class="session-card-date has-text-bold"><?=dateConvert($row['req_session_date'])?></p> 
													</h3>
													<div class="session-card-badges">
														<ul class="goo-tags">
															<li class="goo-tag is-small is-gray-extra-dark">Previous</li>
														</ul>
													</div> 
													<!-- <div class="session-card-header-right session-card-payout body-2 has-text-right">
														<p style="color: #3c4040;" class="has-text-bold">$90</p> 
														<p style="color: #3c4040;">(1.5 hrs)</p>
													</div>  -->
													<div class="session-card-header-bottom session-card-timezone"></div>
												</div>
											</a> 
											<p class="session-card-subject"><?=$row['req_objective']?></p> 
											<!-- <div class="session-card-location body-3 is-gray-extra-dark-text-color">
												<p class="session-card-address">79 Barlow Drive North, Brooklyn, NY, USA</p>
											</div> -->
										</header> 
										<hr class="dashboard-card-divider goo-divider"> 
										<div class="session-card-attendees session-card-content-area">
											<div class="session-card-attendee goo-avatar-group">
												<div class="goo-avatar is-small">
													<img src="https://s3.amazonaws.com/gooroo-static/avatars/crow.png">
												</div> 
												<dl class="goo-avatar-info">
													<dt class="is-gray-extra-dark-text-color">Student</dt>
													<dd class="goo-avatar-name"><?=$row['req_name']?></dd>
												</dl>
											</div>
										</div>
									</div>
								</div>
							</li>
						<?php endforeach ?>
					</ul>
				</div>
			</section>
			<section id="pending" class="goo-tab view-cards-section">
			<br><br><br>
				<header class="view-cards-section-header">
					<h2 class="view-cards-section-heading" style="color: #3c4040;">Payments</h2>
					<br>
						<div class="row">
							<?php if(count($getPayments)!==0){ ?>
							<table class="table table-responsive">
								<thead style="color: grey;font-weight: bold;">
									<th>Payment</th>
									<th>Session</th>
									<th>Amount</th>
									<th>Method</th>
									<th>Status</th>
								</thead>
								<tfoot style="color: grey;font-weight: bold;">
									<th>Payment</th>
									<th>Session</th>
									<th>Amount</th>
									<th>Method</th>
									<th>Status</th>
								</tfoot>
								<tbody style="color: grey;">
								<?php foreach ($getPayments as $key => $row): ?>
									<tr>
										<td><?=$row['payment_id']?></td>
										<td><?=$row['payment_session']?></td>
										<td><?=$row['payment_amount']?></td>
										<td><?=$row['payment_method']?></td>
										<td><?=$row['payment_status']?></td>
									</tr>
								<?php endforeach ?>
								</tbody>
							</table>
							<?php }else{ ?>
							<p class="view-cards-section-subheading" style="color: #3c4040;">
								None Of Your Payment Is Pending !
							</p>
							<?php } ?>
						</div>
				</header> 
				<!-- <header class="view-cards-section-header">
					<h2 class="view-cards-section-heading" style="color: #3c4040;">Previous Reviews</h2>
					<p class="view-cards-section-subheading" style="color: #3c4040;">
						Sorry none of your review is pending !
					</p>
				</header>  -->
				<!-- <div class="view-card-collection">
					<div></div> 
					<div class="view-card-collection-message">
						<div>
							<p class="body-1" style="color: #3c4040;">
								You don’t have any sessions needing feedback.
							</p>
						</div>
					</div>
				</div>  -->
			</section>
		</div>
	</div>

	<div class="tutor-dashboard view-cards-wrap" id="settings" style="display: none;">
		<div class="view-cards">
			<header class="view-cards-section">
				
			</header>
			<section id="settings" class="goo-tab view-cards-section goo-tab-active">
				<div style="background-color: white;border-radius: 3px;">
					<p class="heading-3" style="padding: 15px;"><i class="fa fa-settings"></i> Account Settings</p>
				</div>
				<?php $user = $_SESSION['tutor-login'] ?>
				<div style="background-color: white;border-radius: 3px;">
					<div class="row" style="padding-left:20px;padding-top:20px;">
						<div class="col-md-6">
							<label class="heading-4" style="color: black;">Name</label>
						</div>
						<div class="col-md-6">
							<h2 class="edit-parent-class" id="tutor_name" style="display: inline-block;color:grey;"><?=$user['tutor_name']?>
			                        <input type="hidden" class="edit-parent form-control" value="<?=$user['tutor_name']?>">
			                      <?php if (isset($_SESSION['tutor-login'])): ?>                         
			                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><a href="javascript://" class="editProfile"><i class="fa fa-edit"></i> Edit</a></small>
			                    <?php endif ?>
			                </h2>
						</div>
					</div>
					<div class="row" style="padding-left:20px;padding-top:20px;">
						<div class="col-md-6">
							<label class="heading-4" style="color: black;">Qualification</label>
						</div>
						<div class="col-md-6">
							<h2 class="edit-parent-class" id="tutor_qualification" style="display: inline-block;color:grey;"><?=$user['tutor_qualification']?>
			                        <input type="hidden" class="edit-parent form-control" value="<?=$user['tutor_qualification']?>">
			                      <?php if (isset($_SESSION['tutor-login'])): ?>                         
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
							<h2 class="edit-parent-class" id="tutor_address" style="display: inline-block;color:grey;"><?=$user['tutor_address']?>
			                        <input type="hidden" class="edit-parent form-control" value="<?=$user['tutor_address']?>">
			                      <?php if (isset($_SESSION['tutor-login'])): ?>                         
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
							<h2 class="edit-parent-class" id="tutor_email" style="display: inline-block;color:grey;"><?=$user['tutor_email']?>
			                        <input type="hidden" class="edit-parent form-control" value="<?=$user['tutor_email']?>">
			                      <?php if (isset($_SESSION['tutor-login'])): ?>                         
			                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><a href="javascript://" class="editProfile"><i class="fa fa-edit"></i> Edit</a></small>
			                    <?php endif ?>
			                </h2>
						</div>
					</div>
					<div class="row" style="padding-left:20px;padding-top:20px;">
						<div class="col-md-6">
							<label class="heading-4" style="color: black;">Skills</label>
						</div>
						<div class="col-md-6">
							<h2 class="edit-parent-class" id="tutor_skills" style="display: inline-block;color:grey;"><?=$user['tutor_skills']?>
			                        <input type="hidden" class="edit-parent form-control" value="<?=$user['tutor_skills']?>">
			                      <?php if (isset($_SESSION['tutor-login'])): ?>                         
			                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><a href="javascript://" class="editProfile"><i class="fa fa-edit"></i> Edit</a></small>
			                    <?php endif ?>
			                </h2>
						</div>
					</div>
                </div>
			</section>
		</div>
	</div>

</main>

<script src="<?=JS?>jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.raw').remove();
		$('.account-dropdown').append('<li><a class="logs">Logs & Overview</a></li><li><a href="javascript://" class="settings">Settings</a></li>')
		$(document).on('click', '.logs', function(){
			$('#account').fadeOut('fast', function(){

			});
			$('#settings').fadeOut('slow', function(){

			});
			$('#logs').fadeIn('slow', function(){

			});
		});

		$(document).on('click', '.settings', function(){
			$('#account').fadeOut('fast', function(){

			});
			$('#logs').fadeOut('slow', function(){

			});
			$('#settings').fadeIn('slow', function(){

			});
		});

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

            var table = 'tutors';
            var action = 'editTutor';
            var itemValue = $this.parent('small').parent('.edit-parent-class').children('.edit-parent').val();
            var itemName = $this.parent('small').parent('.edit-parent-class').attr('id');
            var itemId = '<?=$user['tutor_id']?>';
            var itemIdName = 'tutor_id';
            var data = {itemId:itemId, itemIdName:itemIdName, table:table, itemValue:itemValue, itemName:itemName, action:action};
            $.post('<?=AJAX?>tutorAjax.php', {data:data}, function(resp) {
              resp = $.parseJSON(resp);
              if(resp.status==true){
                $this.parent('small').parent('.edit-parent-class').children('.edit-parent').attr('type', 'hidden');
                $this.parent('small').parent('.edit-parent-class').children('.edit-parent').attr('value', resp.data.itemValue);
                $this.parent('small').parent('.edit-parent-class').html(resp.data.itemValue+'<input type="hidden" class="edit-parent form-control" value="'+resp.data.itemValue+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small style="display: inline-block;"><a href="javascript://" class="editProfile"><i class="fa fa-edit"></i> Edit</a></small>');
                console.log(resp.data.itemValue);

              }
            });

          });
	});
</script>