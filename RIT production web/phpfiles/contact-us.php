<?php
$_SERVER['current']="Contact";
include('header.php');
$PageTitle = "Contact Us";

?>

<div id="contact_content">
	<?php
		for ($i = 0; $i < count($contacts); $i++) {
			//if even mod add to left side otherwise add to right side	 
			if($i % 2 == 0){
				print "<div id='left_contact'>
							<div id='left_image'>
								<img alt='Dr Jennifer Schneider' src='" . $contacts[$i]->image . "' />
							</div>
							<div id='left_content'>
								<h2 style='color:rgb(247,109,44)'>" . $contacts[$i]->name . "</h2>
								<p><b> " . $contacts[$i]->title . "</b></p>
								<p>Phone: <b>" . $contacts[$i]->get_phone() . "</b></p>
								<p>Email: <b><a href='mailto:" . $contacts[$i]->email . "target='_top' style ='color:rgb(247,109,44);text-decoration:none;'>" . $contacts[$i]->email . "</a></b>
								<br><br>
								<a id='accordion_1' style='color:rgb(247,109,44)'><u>Read more</u></a>
						
							</div>
							<div id='accordion_1_response'>
								<p>
									Dr. Schneider's research interests include critical infrastructure (community resiliency & sustainability), Hazardous Materials/Process Safety, and Risk and Decision-making.</br></br>
									Dr. Schneider is a full professor and the Russell C. McCarthy endowed chair in CAST. She joined RIT full time in fall 1997, creating and teaching courses in corporate EHS 
									management system design, occupational health & safety and risk management. She previously served CAST as the faculty associate for scholarly affairs, guiding scholarship & 
									research with CAST. She is the Region 2 OSHA Ed center Technical PI, and is a member of the NIH peer review for her health and risk expertise. She has served on the 
									NIOSH - National Institute of Occupational Safety & Health NORA (research agenda) review committee, testified before the House Committee on Transportation & Infrastructure 
									concerning infrastructure risk management, and is a member of the National Academy of Sciences Committee on Offshore Windfarm Safety & Health. She also serves as treasurer 
									of the Genesee Valley Safety Conference Board, and is a former chemist for the local hazmat team.</br></br> Previous to RIT, Dr. Schneider was the Director of EHS for ITT/Goulds 
									Engineered products (Fluids) Division, Safety & Health Manager for Mobil, and an Environmental Engineer for ITCorp/ Eastman Kodak Company. She earned her doctorate (Sc.D.) 
									from UMASS Lowell, her MS in Industrial Hygiene from University of Rochester School of Medicine & Dentistry, and her BA in Comprehensive Science: Chemistry & Biology from 
									Roberts Wesleyan College. Her recognitions include being the only person to certify three separate facilities to OSHA VPP STAR status (best in class), Commendation for 
									meritorious service for hazmat response, NYS Pollution Prevention award, ITT excellence in engineering award and multiple nominations for the Eisenhart Award.
								</p>	
							</div>                                                                                                                                                    
					</div>";
			}
			else{
				print "<div id='right_contact'>
							<div id='right_image'>
								<img alt='Elaine Lewis' src='" . $contacts[$i]->image . "' />
							</div>
							<div id='right_content'>
								<h2 style='color:rgb(247,109,44)'>" . $contacts[$i]->name . "</h2>
								<p><b> " . $contacts[$i]->title . "</b></p>
								<p>Phone: <b>" . $contacts[$i]->get_phone() . "</b></p>
								<p>Email: <b><a href='mailto:" . $contacts[$i]->email . "target='_top' style ='color:rgb(247,109,44);text-decoration:none;'>" . $contacts[$i]->email . "</a></b></br>
								<p id='accordion_2' style='color:rgb(247,109,44)'><u>Read more</u></p>
							</div>
						<div id='accordion_2_response'>
							<p>
								Ms. Elaine Lewis, administration and analyst at RIT has a B.S. in Chemistry from LeMoyne College, Syracuse, NY. She has over 15 years&apos; experience in grant/ external 
								project development and  management.  Ms. Lewis joined RIT in 2006 as a program coordinator for various outreach initiatives, developing and managing programs. She 
								has completed SPARC (Sponsored Programs Accounting & Regulatory Certifications) Training at RIT.  Prior to RIT, Ms. Lewis was a process development engineer at Eastman 
								Kodak Co., Lockheed-Martin and General Electric Co.
							</p>
						</div>                                                                                                                                                        
					</div>";
			}
		}
	?>
</div>

<?php
include('footer.php');
?>
