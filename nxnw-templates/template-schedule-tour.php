<?php /* Template Name: Schedule Tour Page Template */ get_header(); ?>
<?php 
	session_start();
	if (!empty($_SESSION['SourceID'])) {
	    $SourceID = $_SESSION['SourceID'];
	} else if (!empty($_REQUEST['SourceID'])){
	    $SourceID = $_REQUEST['SourceID'];
	} else {
	    $SourceID = '704403';
	}
?>
<main id="main">
	<h1 class="page-title"><?php the_title(); ?></h1>
	<section class="main-content">
		<div class="content">
			<div class="row clearfix">
				<div class="col-12">
					<?php the_content(); ?>
					<div id="requestinfo" class="schedule opt1">
						<form name="enterpriseform" id="enterpriseform" action="<?php echo $form_submission_url; ?>" method="post" class="enterpriseform schedule placeholders-initialized steps-initialized" novalidate="novalidate">
							<div class="field-wrapper" data-field-name="LocationID" data-field-type="select">
								<div class="field placeholder-show">
									<div class="inner">
										<select name="LocationID" id="LocationID" title="Location" data-validate="required" data-placeholder="Select a Campus"></select>
									</div><!-- inner -->
								</div><!-- field -->
							</div><!-- field-wrapper -->
							<div class="field-wrapper" data-field-name="CurriculumID" data-field-type="select">
								<div class="field placeholder-show">
									<div class="inner">
										<select name="CurriculumID" id="CurriculumID" title="Program" data-validate="required" data-placeholder="Select a Program" data-placeholder-alternate="Select a Location First"><option value="" selected="selected">Select a Location First</option></select>
									</div><!-- inner -->
								</div><!-- field -->
							</div><!-- field-wrapper -->
							<div class="field-wrapper" data-field-name="BestDayToContact" data-field-type="select">
								<div class="field placeholder-show">
									<div class="inner">
										<select name="BestDayToContact" id="BestDayToContact" title="Preferred Day to visit">
											<option value="">Preferred Day to Visit</option>
											<option value="Monday">Monday</option>
											<option value="Tuesday">Tuesday</option>
											<option value="Wednesday">Wednesday</option>
											<option value="Thursday">Thursday</option>
											<option value="Friday">Friday</option>
											<option value="Saturday">Saturday</option>
										</select>
									</div><!-- inner -->
								</div><!-- field -->
							</div><!-- field-wrapper -->
							<div class="field-wrapper" data-field-name="BestPeriodToContact" data-field-type="select">
								<div class="field placeholder-show">
									<div class="inner">
										<select name="BestPeriodToContact" id="BestPeriodToContact" title="Preferred time to visit" disabled="">
											<option value="">Preferred Time to Visit</option>
											<option value="Morning">Morning</option>
											<option value="Afternoon">Afternoon</option>
											<option value="Evening">Evening</option>
										</select>
									</div><!-- inner -->
								</div><!-- field -->
							</div><!-- field-wrapper -->
							<div class="field-wrapper" data-field-name="firstname" data-field-type="text">
								<div class="field">
									<div class="inner">
										<input name="firstname" id="firstname" value="" placeholder="First Name" title="First Name" type="text" data-validate="required matchTitle matchPlaceholder">
									</div><!-- inner -->
								</div><!-- field -->
							</div><!-- field-wrapper -->
							<div class="field-wrapper" data-field-name="lastname" data-field-type="text">
								<div class="field">
									<div class="inner">
										<input name="lastname" id="lastname" value="" placeholder="Last Name" title="Last Name" type="text" data-validate="required matchTitle matchPlaceholder">
									</div><!-- inner -->
								</div><!-- field -->
							</div><!-- field-wrapper -->
							<div class="field-wrapper" data-field-name="address" data-field-type="text">
								<div class="field">
									<div class="inner">
										<input name="address" id="address" value="" placeholder="Address" title="Address" type="text" data-validate="required matchTitle matchPlaceholder" data-validate-message="Please enter a valid address.">
									</div><!-- inner -->
								</div><!-- field -->
							</div><!-- field-wrapper -->
							<div class="field-wrapper" data-field-name="city" data-field-type="text">
								<div class="field">
									<div class="inner">
										<input name="city" id="city" value="" placeholder="City" title="City" type="text" data-validate="required matchTitle matchPlaceholder">
									</div><!-- inner -->
								</div><!-- field -->
							</div><!-- field-wrapper -->
							<div class="field-wrapper" data-field-name="state" data-field-type="select">
								<div class="field placeholder-show">
									<div class="inner">
										<select name="state" id="state" title="State" data-validate="required">
											<option value="">State</option>
											<option value="AL">Alabama</option>
											<option value="AK">Alaska</option>
											<option value="AS">American Samoa</option>
											<option value="AZ">Arizona</option>
											<option value="AR">Arkansas</option>
											<option value="AA">Armed Forces Americas, except Canada.</option>
											<option value="AE">Armed Forces Europe, the Middle East, &amp; Canada.</option>
											<option value="AP">Armed Forces Pacific</option>
											<option value="CA">California</option>
											<option value="CO">Colorado</option>
											<option value="NN">Commonwealth of Northern Mariana Islands</option>
											<option value="CT">Connecticut</option>
											<option value="DE">Delaware</option>
											<option value="DC">District of Columbia</option>
											<option value="FM">Federated States of Micronesia</option>
											<option value="FL">Florida</option>
											<option value="GA">Georgia</option>
											<option value="GU">Guam</option>
											<option value="HI">Hawaii</option>
											<option value="ID">Idaho</option>
											<option value="IL">Illinois</option>
											<option value="IN">Indiana</option>
											<option value="IA">Iowa</option>
											<option value="KS">Kansas</option>
											<option value="KY">Kentucky</option>
											<option value="LA">Louisiana</option>
											<option value="ME">Maine</option>
											<option value="MH">Marshall Island</option>
											<option value="MD">Maryland</option>
											<option value="MA">Massachusetts</option>
											<option value="MI">Michigan</option>
											<option value="MN">Minnesota</option>
											<option value="MS">Mississippi</option>
											<option value="MO">Missouri</option>
											<option value="MT">Montana</option>
											<option value="NE">Nebraska</option>
											<option value="NV">Nevada</option>
											<option value="NH">New Hampshire</option>
											<option value="NJ">New Jersey</option>
											<option value="NM">New Mexico</option>
											<option value="NY">New York	</option>
											<option value="NC">North Carolina</option>
											<option value="ND">North Dakota	</option>
											<option value="MP">Northern Mariana Islands</option>
											<option value="OH">Ohio	</option>
											<option value="OK">Oklahoma	</option>
											<option value="OR">Oregon</option>
											<option value="PW">Palau</option>
											<option value="PA">Pennsylvania	</option>
											<option value="PR">Puerto Rico</option>
											<option value="RI">Rhode Island</option>
											<option value="SC">South Carolina</option>
											<option value="SD">South Dakota</option>
											<option value="TN">Tennessee</option>
											<option value="TX">Texas</option>
											<option value="UT">Utah</option>
											<option value="VT">Vermont</option>
											<option value="VI">Virgin Islands</option>
											<option value="VA">Virginia	</option>
											<option value="WA">Washington</option>
											<option value="WV">West Virginia</option>
											<option value="WI">Wisconsin</option>
											<option value="WY">Wyoming</option>
										</select>
									</div><!-- inner -->
								</div><!-- field -->
							</div><!-- field-wrapper -->
							<div class="field-wrapper" data-field-name="zip" data-field-type="number">
								<div class="field">
									<div class="inner">
										<input name="zip" id="zip" value="" placeholder="Zip" title="Zip" type="tel" data-validate="required zipUS matchTitle matchPlaceholder">
									</div><!-- inner -->
								</div><!-- field -->
							</div><!-- field-wrapper -->
							<div class="field-wrapper" data-field-name="email" data-field-type="email">
								<div class="field">
									<div class="inner">
										<input name="email" id="email" value="" placeholder="Email" title="Email" type="email" data-validate="required email">
									</div><!-- inner -->
								</div><!-- field -->
							</div><!-- field-wrapper -->
							<div class="field-wrapper" data-field-name="dayphone" data-field-type="tel">
								<div class="field">
									<div class="inner">
										<input name="dayphone" id="dayphone" value="" placeholder="Phone" title="Phone" type="tel" data-validate="required phoneUS">
									</div><!-- inner -->
								</div><!-- field -->
							</div><!-- field-wrapper -->
							<div class="field-wrapper actions" data-field-name="submit" data-field-type="submit">
								<div class="field">
									<button name="submit" id="submit" title="Schedule A Tour" type="submit">Schedule A Tour</button>
								</div><!-- field -->
							</div><!-- field-wrapper -->
							<div class="field-wrapper" data-field-name="disclaimer" data-field-type="html">
								<div class="disclaimer">
									<p>By providing my contact information in this form and clicking the "Schedule A Tour" button, I provide my signature and consent to receive text messages and telephone calls from Concorde Career Colleges via automated technology at the mobile telephone number I have provided. I understand that I am not required to enter into this agreement as a condition of any purchase. I also understand that I may revoke my consent at any time.</p>
								</div><!-- field -->
							</div><!-- field-wrapper -->
							<input name="FormID" id="FormID" value="6723" type="hidden">
							<input name="SourceID" id="SourceID" value="<?php echo $SourceID ?>" type="hidden">
							<input name="ActualUrl" id="ActualUrl" value="<?=$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]?>" type="hidden">
						</form>
					</div><!-- requestinfo -->
				</div><!-- col-12 -->
			</div><!-- row -->
		</div><!-- content -->
	</section><!-- main-content -->
</main>
<?php get_footer(); ?>