<div id="registration_form">
	<div class="field" id="profile-roles">
		<h2>Account Type</h2>
		<div class="roles-field"><div class="roles-option"><?php print drupal_render($form['account']['roles'][5]); ?></div><div class="info">Full Access</div></div>
		<div class="roles-field"><div class="roles-option"><?php print drupal_render($form['account']['roles'][4]); ?></div><div class="info">Cannot create admin accounts or edit other user accounts</div></div>
		<div class="roles-field"><div class="roles-option"><?php print drupal_render($form['account']['roles'][3]); ?></div><div class="info">Can only view information about his/her account events and resources</div></div>
	</div>
	
	<div class="half-field field">
		<?php $form['Address']['profile_fname']['#description'] = ''; 
		print drupal_render($form['Address']['profile_fname']); ?>
	</div>
	<div class="half-field field">
		<?php $form['Address']['profile_lname']['#description'] = '';
		print drupal_render($form['Address']['profile_lname']); ?>
	</div>
	<div class="half-field field">
		<?php $form['account']['mail']['#description'] = '';
		print drupal_render($form['account']['mail']); ?>
	</div>
	<div class="half-field field">
		<?php $form['Address']['profile_mobile_phone']['#description'] = '';
		print drupal_render($form['Address']['profile_mobile_phone']); ?>
	</div>
	<div class="half-field field">
		<?php $form['Address']['profile_work_phone']['#description'] = '';
		print drupal_render($form['Address']['profile_work_phone']); ?>
	</div>
	
  <div class="half-field field">
    <?php
    	$form['account']['name']['#description'] = '';
      print drupal_render($form['account']['name']); // prints the username field
    ?>
  </div>
  <div class="half-field field">
    <?php
      print drupal_render($form['account']['pass']['pass1']); // print the password field
    ?>
  </div>
  <div class="half-field field">
    <?php
      print drupal_render($form['account']['pass']['pass2']); // print the password field
    ?>
  </div>
  
  <div class="clear-block"></div>
  
  <?php 
  $form['Address']['#collapsible'] = true;
  $form['Address']['#collapsed'] = true;
  $form['Address']['profile_address']['#description'] = '';
  $form['Address']['profile_city']['#description'] = '';
  $form['Address']['profile_state']['#description'] = '';
  $form['Address']['profile_zip']['#description'] = '';
  print drupal_render($form['Address']); ?>
  
  <?php
  $form['Location Preference']['#collapsible'] = true;
  $form['Location Preference']['#collapsed']   = true;
  $form['Location Preference']['#prefix']			 = '<div id="location">';
  $form['Location Preference']['#suffix']			 = '</div>';
  $form['Location Preference']['#title']			 = t('Location Preference (trainers only)');
  $form['Location Preference']['profile_location_any']['#description']	= '';
	$form['Location Preference']['profile_location_any']['#weight']				= 1;
  $form['Location Preference']['profile_location_central']['#description']	= '';
  $form['Location Preference']['profile_location_central']['#weight']				= 2;
  $form['Location Preference']['profile_location_ce']['#description']	= '';
  $form['Location Preference']['profile_location_ce']['#weight']			=	3;
  $form['Location Preference']['profile_location_cc']['#description']	= '';
  $form['Location Preference']['profile_location_cc']['#weight']				=	4;
  $form['Location Preference']['profile_location_n']['#description']	= '';
  $form['Location Preference']['profile_location_n']['#weight']				=	5;
  $form['Location Preference']['profile_location_nw']['#description']	= '';
  $form['Location Preference']['profile_location_nw']['#weight']			=	6;
  $form['Location Preference']['profile_location_ne']['#description']	= '';
  $form['Location Preference']['profile_location_ne']['#weight']			=	7;
  $form['Location Preference']['profile_location_s']['#description']	= '';
  $form['Location Preference']['profile_location_s']['#weight']				=	8;
  $form['Location Preference']['profile_location_se']['#description']	= '';
  $form['Location Preference']['profile_location_se']['#weight']			=	9;
  $form['Location Preference']['profile_location_sw']['#description']	= '';
  $form['Location Preference']['profile_location_sw']['#weight']			=	10;
  $form['Location Preference']['profile_location_e']['#description']	= '';
  $form['Location Preference']['profile_location_e']['#weight']				=	11;
  $form['Location Preference']['profile_location_w']['#description']	= '';
  $form['Location Preference']['profile_location_w']['#weight']				=	12;
  ?>
  
    <?php print drupal_render($form['Location Preference']); ?>

  <?php
  $form['Time Preference']['#collapsible'] = true;
	$form['Time Preference']['#collapsed']	 = true;
	$form['Time Preference']['#title']			 = 'Time Preference (trainers only)';
	$form['Time Preference']['#prefix']			 = '<div id="time">';
	$form['Time Preference']['#suffix']			 = '</div>';
	$form['Time Preference']['profile_time_sm']['#description'] = '';
	$form['Time Preference']['profile_time_sa']['#description'] = '';
	$form['Time Preference']['profile_time_se']['#description'] = '';
	$form['Time Preference']['profile_time_mm']['#description'] = '';
	$form['Time Preference']['profile_time_ma']['#description'] = '';
	$form['Time Preference']['profile_time_me']['#description'] = '';
	$form['Time Preference']['profile_time_tum']['#description'] = '';
	$form['Time Preference']['profile_time_tua']['#description'] = '';
	$form['Time Preference']['profile_time_tue']['#description'] = '';
	$form['Time Preference']['profile_time_wm']['#description'] = '';
	$form['Time Preference']['profile_time_wa']['#description'] = '';
	$form['Time Preference']['profile_time_we']['#description'] = '';
	$form['Time Preference']['profile_time_thm']['#description'] = '';
	$form['Time Preference']['profile_time_tha']['#description'] = '';
	$form['Time Preference']['profile_time_the']['#description'] = '';
	$form['Time Preference']['profile_time_fm']['#description'] = '';
	$form['Time Preference']['profile_time_fa']['#description'] = '';
	$form['Time Preference']['profile_time_fe']['#description'] = '';
	$form['Time Preference']['profile_time_sam']['#description'] = '';
	$form['Time Preference']['profile_time_saa']['#description'] = '';
	$form['Time Preference']['profile_time_sae']['#description'] = '';
	
	$form['Time Preference']['profile_time_sm']['#title']				= '';
	$form['Time Preference']['profile_time_sa']['#title']				= '';
	$form['Time Preference']['profile_time_se']['#title']				= '';
	$form['Time Preference']['profile_time_mm']['#title']				= '';
	$form['Time Preference']['profile_time_ma']['#title']				= '';
	$form['Time Preference']['profile_time_me']['#title']				= '';
	$form['Time Preference']['profile_time_tum']['#title']				= '';
	$form['Time Preference']['profile_time_tua']['#title']				= '';
	$form['Time Preference']['profile_time_tue']['#title']				= '';
	$form['Time Preference']['profile_time_wm']['#title']				= '';
	$form['Time Preference']['profile_time_wa']['#title']				= '';
	$form['Time Preference']['profile_time_we']['#title']				= '';
	$form['Time Preference']['profile_time_thm']['#title']				= '';
	$form['Time Preference']['profile_time_tha']['#title']				= '';
	$form['Time Preference']['profile_time_the']['#title']				= '';
	$form['Time Preference']['profile_time_fm']['#title']				= '';
	$form['Time Preference']['profile_time_fa']['#title']				= '';
	$form['Time Preference']['profile_time_fe']['#title']				= '';
	$form['Time Preference']['profile_time_sam']['#title']				= '';
	$form['Time Preference']['profile_time_saa']['#title']				= '';
	$form['Time Preference']['profile_time_sae']['#title']				= '';
	

  ?>
		
		<div class="time-collapse">
			<span class="collapsible fieldset-title"><a name="time">Time Preference (trainers only)</a></span>
			<table id="time">
				<th></th>
				<th>Morning</th>
				<th>Afternoon</th>
				<th>Evening</th>
				<tr>
					<td>Sunday</td>
					<td><?php print drupal_render($form['Time Preference']['profile_time_sm']); ?></td>
					<td><?php print drupal_render($form['Time Preference']['profile_time_sa']); ?></td>
					<td><?php print drupal_render($form['Time Preference']['profile_time_se']); ?></td>
				</tr>
				<tr>
					<td>Monday</td>
					<td><?php print drupal_render($form['Time Preference']['profile_time_mm']); ?></td>
					<td><?php print drupal_render($form['Time Preference']['profile_time_ma']); ?></td>
					<td><?php print drupal_render($form['Time Preference']['profile_time_me']); ?></td>
				</tr>
				<tr>
					<td>Tuesday</td>
					<td><?php print drupal_render($form['Time Preference']['profile_time_tum']); ?></td>
					<td><?php print drupal_render($form['Time Preference']['profile_time_tua']); ?></td>
					<td><?php print drupal_render($form['Time Preference']['profile_time_tue']); ?></td>
				</tr>
				<tr>
					<td>Wednesday</td>
					<td><?php print drupal_render($form['Time Preference']['profile_time_wm']); ?></td>
					<td><?php print drupal_render($form['Time Preference']['profile_time_wa']); ?></td>
					<td><?php print drupal_render($form['Time Preference']['profile_time_we']); ?></td>
				</tr>
				<tr>
					<td>Thursday</td>
					<td><?php print drupal_render($form['Time Preference']['profile_time_thm']); ?></td>
					<td><?php print drupal_render($form['Time Preference']['profile_time_tha']); ?></td>
					<td><?php print drupal_render($form['Time Preference']['profile_time_the']); ?></td>
				</tr>
				<tr>
					<td>Friday</td>
					<td><?php print drupal_render($form['Time Preference']['profile_time_fm']); ?></td>
					<td><?php print drupal_render($form['Time Preference']['profile_time_fa']); ?></td>
					<td><?php print drupal_render($form['Time Preference']['profile_time_fe']); ?></td>
				</tr>
				<tr>
					<td>Saturday</td>
					<td><?php print drupal_render($form['Time Preference']['profile_time_sam']); ?></td>
					<td><?php print drupal_render($form['Time Preference']['profile_time_saa']); ?></td>
					<td><?php print drupal_render($form['Time Preference']['profile_time_sae']); ?></td>
				</tr>
			</table>
		</div>
  
  
  <div class="field">
    <?php
    		$form['submit']['#value'] = 'Save';
        print drupal_render($form['submit']); // print the submit button
      ?>
    </div>
  </div>
</div>