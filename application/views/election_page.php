<?php 
  $this->load->view('header');
?>
	<!-- ondragstart="return false" oncontextmenu="return false" onselectstart="return false" -->
	<body>
		<br>
		<div class="container">
		<div class="container">
			<!-- <div class="row">
				<h2 class="text-center">Most Valuable Player World Cup 2018</h2>
				<img src="<?php echo base_url();?>assets/img/diligent_owl.png" id="vote_logo">
			</div> -->
		<form method="post" role="form" action="<?php echo site_url('election_controller/cast_vote')?>">
			<div  id="ballot_form" class="row col-md-12">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th colspan="4" class="text-center">Most Favorite Player</th>
						</tr>
						<tr>
							<?php  
							foreach ($mfp_vote as $key): ?>
							<th class="text-center">
								<?php echo $key->fullname ?>
							</th>
							<?php endforeach ?>
						</tr>
					</thead>
					<tbody>
						<tr>
							<?php
							foreach ($mfp_vote as $key): ?>
							<td class="text-center">
								<label class="radio-inline"><input type="radio" name="mfp" value="<?php echo $key->candidate_id ?>"></label>
							</td>
							<?php endforeach ?>
						</tr>
					</tbody>
				</table>
			</div>
			<br>
			<div id="ballot_form" class="row col-md-12">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th colspan="4" class="text-center">Coach</th>
						</tr>
						<tr>
							<?php  
							foreach ($coach_vote as $key): ?>
							<th class="text-center">
								<?php echo $key->fullname ?>
							</th>
							<?php endforeach ?>
						</tr>
					</thead>
					<tbody>
						<tr>
							<?php 
							foreach ($coach_vote as $key): ?>
							<td class="text-center">
								<label class="radio-inline"><input type="radio" name="coach" value="<?php echo $key->candidate_id ?>"></label>
							</td>
							<?php endforeach ?>
						</tr>
					</tbody>
				</table>
			</div>
			<br>
			<div id="ballot_form" class="row col-md-12">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th colspan="4" class="text-center">Goal Keeper
						<tr>
							<?php  
							foreach ($gk_vote as $key): ?>
							<th class="text-center">
								<?php echo $key->fullname ?>
							</th>
							<?php endforeach ?>
						</tr>
					</thead>
					<tbody>
						<tr>
							<?php
							foreach ($gk_vote as $key): ?>
							<td class="text-center">
								<label class="radio-inline"><input type="radio" name="gk" value="<?php echo $key->candidate_id ?>"></label>
							</td>
							<?php endforeach ?>
						</tr>
					</tbody>
				</table>
			</div>
			<br>
			<div id="submission_div">
				<button allign="center" type="submit" class="btn btn-primary">Submit vote!</button>
			</div>
		</form>
	</div>
	</div>
</body