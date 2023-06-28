<nav class="pcoded-navbar ">
		<div class="navbar-wrapper">
			<div class="navbar-content scroll-div" id="nav_bar">
				
				<ul class="nav pcoded-inner-navbar " >
					<li class="nav-item <?php if($p == 'dashboard'){ ?> active <?php } ?>">
					    <a href="?p=dashboard" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
					</li>

					<li class="nav-item pcoded-hasmenu <?php if($p == 'profile' || $p == 'multi_center_setup' || $p == 'configure_services' || $p == 'service_based_pricing'){ ?> active pcoded-trigger <?php } ?>">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Settings</span></a>
					    <ul class="pcoded-submenu">
					        <li <?php if($p == 'profile'){ ?> class="active" <?php } ?> ><a href="?p=profile&gr=settings">Doctor Profile</a></li>
					        <li <?php if($p == 'multi_center_setup'){ ?> class="active" <?php } ?> ><a href="?p=multi_center_setup&gr=settings" >Multi-Center Setup </a></li>
					        <li <?php if($p == 'configure_services'){ ?> class="active" <?php } ?> ><a href="?p=configure_services&gr=settings" >Configure Services </a></li>
					        <li <?php if($p == 'service_based_pricing'){ ?> class="active" <?php } ?> ><a href="?p=service_based_pricing&gr=settings" >Service Based Pricing </a></li>
					    </ul>
					</li>

					<li class="nav-item pcoded-hasmenu <?php if($p == 'online_appointment' || $p == 'new_patient_registration' || $p == 'investigation' || $p == 'upload_documents' || $p == 'search_patient' || $p == 'reminder_sms' || $p == 'reply_queries_chat'){ ?> active pcoded-trigger <?php } ?>">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Patient Management</span></a>
						<ul class="pcoded-submenu">
							<li <?php if($p == 'online_appointment'){ ?> class="active" <?php } ?>><a href="https://drpallabsaha.com/contact/" target="blank">Online Appointment</a></li>
							<li <?php if($p == 'new_patient_registration'){ ?> class="active" <?php } ?>><a href="?p=new_patient_registration&gr=p_mgt">New Patient Registration</a></li>
							<li <?php if($p == 'investigation'){ ?> class="active" <?php } ?>><a href="?p=investigation&gr=p_mgt">Investigation</a></li>
							<li <?php if($p == 'upload_documents'){ ?> class="active" <?php } ?>><a href="?p=upload_documents&gr=p_mgt">Upload Documents</a></li>
							<li <?php if($p == 'search_patient'){ ?> class="active" <?php } ?>><a href="?p=search_patient&gr=p_mgt">Search Patient</a></li>
							<li <?php if($p == 'reminder_sms'){ ?> class="active" <?php } ?>><a href="?p=reminder_sms&gr=p_mgt">Reminder SMS</a></li>
							<li <?php if($p == 'reply_queries_chat'){ ?> class="active" <?php } ?>><a href="?p=reply_queries_chat&gr=p_mgt">Reply Queries (Chat)</a></li>
						</li>						
						</ul>
					</li>

					<li class="nav-item pcoded-hasmenu <?php if($p == 'ot_scheduling' || $p == 'view_notifications' || $p == 'hospital_admission' || $p == 'synopsis_surgery' || $p == 'discharge_transfer'){ ?> active pcoded-trigger <?php } ?>">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">OT Management</span></a>
						<ul class="pcoded-submenu">
							<li <?php if($p == 'ot_scheduling'){ ?> class="active" <?php } ?> ><a href="?p=ot_scheduling&gr=ot_mgt">OT Scheduling</a></li>
							<li <?php if($p == 'view_notifications'){ ?> class="active" <?php } ?> ><a href="?p=view_notifications&gr=ot_mgt" >View Notifications</a></li>
							<li <?php if($p == 'hospital_admission'){ ?> class="active" <?php } ?> ><a href="?p=hospital_admission&gr=ot_mgt" >Hospital Admission </a></li>
							<li <?php if($p == 'synopsis_surgery'){ ?> class="active" <?php } ?> ><a href="?p=synopsis_surgery&gr=ot_mgt" >Synopsis of Surgery</a></li>
							<li <?php if($p == 'discharge_transfer'){ ?> class="active" <?php } ?> ><a href="?p=discharge_transfer&gr=ot_mgt" >Discharge/ Transfer</a></li>
						</ul>
					</li>

					<li class="nav-item pcoded-hasmenu <?php if($p == 'patient_fees' || $p == 'hospital_fees' || $p == 'miscel_payment'){ ?> active pcoded-trigger <?php } ?>">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Billing Management</span></a>
						<ul class="pcoded-submenu">
							<li <?php if($p == 'patient_fees'){ ?> class="active" <?php } ?> ><a href="?p=patient_fees&gr=b_mgt">Fees From Patient</a></li>
							<li <?php if($p == 'hospital_fees'){ ?> class="active" <?php } ?> ><a href="?p=hospital_fees&gr=b_mgt" >Fees From Hospital</a></li>
							<li <?php if($p == 'miscel_payment'){ ?> class="active" <?php } ?> ><a href="?p=miscel_payment&gr=b_mgt" >Miscellaneous Payments </a></li>
						</ul>
					</li>

					<li class="nav-item pcoded-hasmenu <?php if($p == 'patient_register' || $p == 'referring_register' || $p == 'ot_register' || $p == 'financial_statement_s' || $p == 'financial_statement_d' || $p == 'issue_e_prescription' || $p == 'issue_medical_certificate'){ ?> active pcoded-trigger <?php } ?>">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Reports</span></a>
						<ul class="pcoded-submenu">
							<li <?php if($p == 'patient_register'){ ?> class="active" <?php } ?>><a href="?p=patient_register&gr=reports">Patient Register</a></li>
							<li <?php if($p == 'referring_register'){ ?> class="active" <?php } ?>><a href="?p=referring_register&gr=reports">Referring Register</a></li>
							<li <?php if($p == 'ot_register'){ ?> class="active" <?php } ?>><a href="?p=ot_register&gr=reports">OT Register</a></li>
							<li <?php if($p == 'financial_statement_s'){ ?> class="active" <?php } ?>><a href="?p=financial_statement_s&gr=reports">Financial Statement - Summary</a></li>
							<li <?php if($p == 'financial_statement_d'){ ?> class="active" <?php } ?>><a href="?p=financial_statement_d&gr=reports">Financial Statement - Detailed</a></li>
							<li <?php if($p == 'issue_e_prescription'){ ?> class="active" <?php } ?>><a href="?p=issue_e_prescription&gr=reports">Issue e-Prescription</a></li>
							<li <?php if($p == 'issue_medical_certificate'){ ?> class="active" <?php } ?>><a href="?p=issue_medical_certificate&gr=reports">Issue Medical certificate</a></li>
						</li>						
						</ul>
					</li>

					<li class="nav-item pcoded-hasmenu <?php if($p == 'group_master'){ ?> active pcoded-trigger <?php } ?>">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Master</span></a>
						<ul class="pcoded-submenu">
							<li <?php if($p == 'group_master'){ ?> class="active" <?php } ?> ><a href="?p=group_master&gr=master">Group Master</a></li>
						</ul>
					</li>
												

				</ul>				
				
			</div>
		</div>
	</nav>