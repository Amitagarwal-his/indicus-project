<?php
// warranty form
add_shortcode('warranty-guide-form', 'warranty_guide_form');
function warranty_guide_form()
{
	ob_start(); ?>
	<div id='crmWebToEntityForm' class='zcwf_lblLeft crmWebToEntityForm waranty_guidform'>
		<meta name='viewport' content='width=device-width, initial-scale=1.0'>
		<META HTTP-EQUIV='content-type' CONTENT='text/html;charset=UTF-8'>
		<form action='https://crm.zoho.in/crm/WebToLeadForm' name=WebToLeads250849000000947058 method='POST' onSubmit='javascript:document.charset="UTF-8"; return checkMandatory250849000000947058()' accept-charset='UTF-8'>
			<input type='text' style='display:none;' name='xnQsjsdp' value='db887390625950606c3528f7d8a1164e190fd3c45d4366921efb4f0891976ab1'></input>
			<input type='hidden' name='zc_gad' id='zc_gad' value=''></input>
			<input type='text' style='display:none;' name='xmIwtLD' value='f3a51ccc724bbca98e66acb567562514f0c2b70292a34b6bc86ced74ebf842d1'></input>
			<input type='text' style='display:none;' name='actionType' value='TGVhZHM='></input>
			<input type='text' style='display:none;' name='returnURL' value='https&#x3a;&#x2f;&#x2f;indicus.co.in&#x2f;contact-us&#x2f;'> </input>
			<!-- Do not remove this code. -->
			<style>
				html,
				body {
					margin: 0px;
				}

				#crmWebToEntityForm.zcwf_lblLeft {
					width: 100%;
					padding: 40px 16px;
					margin: 0 auto;
					box-sizing: border-box;
					border-radius: 25px;
					border: 1px solid #333;
				}

				#crmWebToEntityForm.zcwf_lblLeft * {
					box-sizing: border-box;
				}

				#crmWebToEntityForm {
					text-align: left;
				}

				#crmWebToEntityForm * {
					direction: ltr;
				}

				.zcwf_lblLeft .zcwf_title {
					color: #333;
					/* font-family: Cera Pro; */
					font-family: 'CeraPro-Bold' !important;
					font-size: 20px;
					font-style: normal;
					font-weight: 700;
					line-height: 26px;
					margin-bottom: 16px;
					/* 130% */

				}
				.zcwf_lblLeft .zcwf_col_fld input[type=text], .zcwf_lblLeft .zcwf_col_fld_slt, .zcwf_lblLeft .zcwf_col_fld textarea{
					background: transparent;
				}
				.zcwf_lblLeft .zcwf_col_fld input[type=text].invalid-input,
				.zcwf_lblLeft .zcwf_col_fld_slt.invalid-input,
				.zcwf_lblLeft .zcwf_col_fld textarea.invalid-input{
					border-color: #ED4337;
					padding-right: 30px !important;
				}

				.zcwf_lblLeft .zcwf_col_fld input[type=text],
				.zcwf_lblLeft .zcwf_col_fld textarea,
				.pantingBottomForm input {
					width: 100%;
					border: none;
					border-bottom: 1px solid #6B6B6B;
					padding: 8px 0px;
					align-items: center;
					gap: 10px;
					align-self: stretch;
					font-family: 'CeraPro-Regular' !important;
					color: #333;
					font-size: 14px;
					font-style: normal;
					font-weight: 400;
					line-height: 20px;
					
					/* 142.857% */
					resize: none;
				}

				.zcwf_lblLeft .zcwf_col_fld input:focus,
				.zcwf_lblLeft .zcwf_col_fld textarea:focus {
					outline: none;
				}

				.zcwf_lblLeft .zcwf_col_fld input::placeholder,
				.zcwf_lblLeft .zcwf_col_fld textarea::placeholder {
					color: #333;
				}

				.zcwf_lblLeft .zcwf_col_lab {
					width: 30%;
					word-break: break-word;
					/* padding: 0px 6px 0px; */
					margin-right: 10px;
					margin-top: 5px;
					float: left;
					min-height: 1px;
				}

				.zcwf_lblLeft .zcwf_col_fld {
					float: left;
					width: 100%;
					/* padding: 0px 6px 0px; */
					position: relative;
					display: flex;
					flex-direction: column;
				}

				.zcwf_lblLeft .zcwf_privacy {
					padding: 6px;
				}

				.zcwf_lblLeft .wfrm_fld_dpNn {
					display: none;
				}

				.dIB {
					display: inline-block;
				}

				.zcwf_lblLeft .zcwf_col_fld_slt {
					width: 100%;
					border: none;
					border-bottom: 1px solid #6B6B6B;
					resize: vertical;
					padding: 8px 0px;
					align-items: center;
					gap: 10px;
					align-self: stretch;
					color: #333;
					/* Desktop-B2-14/20 */
					font-family: 'CeraPro-Regular' !important;
					font-size: 14px;
					font-style: normal;
					font-weight: 400;
					line-height: 19px;
				}

				.zcwf_lblLeft .zcwf_col_fld_slt:focus {
					outline: none;
				}

				/* .zcwf_lblLeft .zcwf_row:after,
				.zcwf_lblLeft .zcwf_col_fld:after {
					content: '';
					display: table;
					clear: both;
				} */

				.waranty_guidform .zcwf_row .zcwf_col_fld {
					position: relative;
				}

				.zcwf_lblLeft .zcwf_col_help.invalid-feedback {
					font-size: 14px;
					line-height: 20px;
					color: #ED4337;
					font-family: 'CeraPro-Regular' !important;
					position: absolute;
					bottom: -22px;
					right: 0;
				}
				.waranty_guidform .zcwf_row .zcwf_col_fld .zcwf_col_help.invalid-feedback:after {
					content: '';
					position: absolute;
					right: 0;
					top: -35px;
					background-repeat: no-repeat;
					background-size: contain;
					width: 24px;
					height: 24px;
				}
				/* .zcwf_lblLeft .zcwf_col_help::after{
					content: '';
					position: absolute;
					right: 0;
					top: -38px;
					background-image: url('images/error-symbol.svg');
					background-repeat: no-repeat;
					background-size: contain;
					width: 24px;
					height: 24px;
				} */

				.zcwf_lblLeft .zcwf_help_icon {
					cursor: pointer;
					width: 16px;
					height: 16px;
					display: inline-block;
					background: #fff;
					border: 1px solid #c0c6cc;
					color: #c1c1c1;
					text-align: center;
					font-size: 11px;
					line-height: 16px;
					font-weight: bold;
					border-radius: 50%;
				}

				.zcwf_lblLeft .zcwf_row {
					margin: 16px 0px 0px 0px;
					display: flex;
				}

				.zcwf_lblLeft .formsubmit {
					margin-right: 5px;
					cursor: pointer;
					color: var(--baseColor);
					font-size: 12px;
				}

				.zcwf_lblLeft .zcwf_privacy_txt {
					width: 90%;
					color: rgb(0, 0, 0);
					font-size: 12px;
					font-family: Arial;
					display: inline-block;
					vertical-align: top;
					color: var(--baseColor);
					padding-top: 2px;
					margin-left: 6px;
				}

				.zcwf_lblLeft .zcwf_button {
					display: flex;
					padding: 16px 32px;
					justify-content: center;
					align-items: center;
					gap: 10px;
					border-radius: 134.212px;
					background: #7031BB;
					color: #FFF;
					font-size: 16px;
					font-style: normal;
					font-weight: 700;
					line-height: normal;
					box-shadow: none;
					border: none;
					outline: none;
					text-transform: uppercase;
					font-family: 'CeraPro-Regular' !important;
					cursor: pointer;
					transition: all ease-in-out 0.3s;
				}
				.zcwf_lblLeft .zcwf_button:hover,
				.zcwf_lblLeft .zcwf_button:focus{
					background-color: #8160EC !important;
				}
				.zcwf_lblLeft .zcwf_button.reset{
					background: #333;
				}

				.zcwf_lblLeft .zcwf_tooltip_over {
					position: relative;
				}

				.zcwf_lblLeft .zcwf_tooltip_ctn {
					position: absolute;
					background: #dedede;
					padding: 3px 6px;
					top: 3px;
					border-radius: 4px;
					word-break: break-word;
					min-width: 100px;
					max-width: 150px;
					color: var(--baseColor);
					z-index: 100;
				}

				.zcwf_lblLeft .zcwf_ckbox {
					float: left;
				}

				.zcwf_lblLeft .zcwf_file {
					width: 55%;
					box-sizing: border-box;
					float: left;
				}

				.clearB:after {
					content: '';
					display: block;
					clear: both;
				}

				.topbox {
					padding: 16px;
					margin-bottom: 16px;
				}

				.bottomBox {
					border-top: 1px solid #333;
					padding: 16px 16px 0px;
				}

				.btnGroups {
					display: flex;
					align-items: center;
					justify-content: space-between;
					width: 100%;
					padding-top: 32px;
				}
				.btnGroups .zcwf_col_fld{
					width: auto;
				}
				/*.zcwf_col_help {
					display: none;
				}*/
				.bottom-btn-row{
					margin-left: -16px !important;
    				margin-right: -16px !important;
				}
				.btnGroups .add{
					background-color: transparent;
					border: none;
					display: flex;
				    align-items: center;
				    padding: 0;
				    font-size: 14px;
				    line-height: 20px;
				    color: #333333;
				    font-family: 'CeraPro-Regular' !important;
				    font-weight: 400;
				    cursor: pointer;
				}
				.btnGroups .add svg{
					margin-right: 16px;
				}
				.btnGroups .formsubmit{
					margin-right: 0;
				}
				#buildyourform{
					border: none;
					padding: 0;
					margin: 0;
				}
				#buildyourform .zcwf_row{
					flex-wrap: wrap;
					position: relative;
					padding-top: 16px;
				}
				#buildyourform .zcwf_row:before{
					content: '';
				    position: absolute;
				    top: 16px;
				    width: calc(100% + 32px);
				    height: 1px;
				    background: #333;
				    left: -16px;
				}
				#buildyourform .zcwf_row .three{
					flex: 0 0 100%;
					margin-top: 16px;
				}
				#buildyourform .zcwf_row .remove{
					position: absolute;
				    right: -6px;
				    background: transparent;
				    border: none;
				    color: #f00;
				    bottom: -23px;
				    cursor: pointer;
				}

				/* Css */
				@media screen and (max-width: 767px) {
					.crmWebToEntityForm {
						padding: 30px 12px;
						border-radius: 20px;
					}

					.topbox {
						padding: 16px 4px 0px;
						margin-bottom: 16px;
					}

					.bottomBox {
						padding: 0px 4px;
						margin-top: 0px;
						border: none;
					}

					/* .zcwf_lblLeft .zcwf_row {
						margin: 12px 0px 0px 0px;
					} */

					

					.btnGroups {
						padding-top: 25px;
					}

					.zcwf_lblLeft .zcwf_title {
						text-align: center;
						font-size: 18px;
						margin-bottom: 0px;
					}
					.bottom-btn-row{
						margin-left: 0 !important;
						margin-right: 0 !important;
					}
				}
				@media screen and (max-width: 320px){
					.btnGroups .add svg{
						margin-right: 6px;
					}
				}
			</style>
			<div class='zcwf_title'>ACTIVATE YOUR WARRANTY HERE</div>
			<!-- <div class='zcwf_row'><div class='zcwf_col_lab' style='font-size:12px; font-family: Arial;'><label for='Last_Name'>Name<span style='color:red;'>*</span></label></div><div class='zcwf_col_fld'><input type='text' id='Last_Name' name='Last Name' maxlength='80'></input><div class='zcwf_col_help'></div></div></div>
<div class='zcwf_row'><div class='zcwf_col_lab' style='font-size:12px; font-family: Arial;'><label for='Mobile'>Mobile<span style='color:red;'>*</span></label></div><div class='zcwf_col_fld'><input type='text' id='Mobile' name='Mobile' maxlength='30'></input><div class='zcwf_col_help'></div></div></div>
<div class='zcwf_row'><div class='zcwf_col_lab' style='font-size:12px; font-family: Arial;'><label for='Email'>Email</label></div><div class='zcwf_col_fld'><input type='text' ftype='email' id='Email' name='Email' maxlength='100'></input><div class='zcwf_col_help'></div></div></div>
<div class='zcwf_row'><div class='zcwf_col_lab' style='font-size:12px; font-family: Arial;'><label for='Zip_Code'>Pin Code</label></div><div class='zcwf_col_fld'><input type='text' id='Zip_Code' name='Zip Code' maxlength='30'></input><div class='zcwf_col_help'></div></div></div>
<div class='zcwf_row'><div class='zcwf_col_lab' style='font-size:12px; font-family: Arial;'><label for='Description'>Message</label></div><div class='zcwf_col_fld'><textarea id='Description' name='Description'></textarea><div class='zcwf_col_help'></div></div></div>
<div class='zcwf_row'><div class='zcwf_col_lab' style='font-size:12px; font-family: Arial;'><label for='LEADCF6'>Requirement</label></div><div class='zcwf_col_fld'><input type='text' id='LEADCF6' name='LEADCF6' maxlength='255'></input><div class='zcwf_col_help'></div></div></div>
<div class='zcwf_row'><div class='zcwf_col_lab' style='font-size:12px; font-family: Arial;'><label for='Street'>Street</label></div><div class='zcwf_col_fld'><input type='text' id='Street' name='Street' maxlength='250'></input><div class='zcwf_col_help'></div></div></div>
<div class='zcwf_row'><div class='zcwf_col_lab' style='font-size:12px; font-family: Arial;'><label for='City'>Location</label></div><div class='zcwf_col_fld'><input type='text' id='City' name='City' maxlength='100'></input><div class='zcwf_col_help'></div></div></div>
<div class='zcwf_row'><div class='zcwf_col_lab' style='font-size:12px; font-family: Arial;'><label for='LEADCF2'>Area</label></div><div class='zcwf_col_fld'><input type='text' id='LEADCF2' name='LEADCF2' maxlength='255'></input><div class='zcwf_col_help'></div></div></div>
<div class='zcwf_row'><div class='zcwf_col_lab' style='font-size:12px; font-family: Arial;'><label for='LEADCF4'>District</label></div><div class='zcwf_col_fld'><select class='zcwf_col_fld_slt' id='LEADCF4' name='LEADCF4'  > -->

			<div class="topbox">
				<div class='zcwf_row'>
					<div class='zcwf_col_fld'><input type='text' placeholder="Full Name" id='Last_Name' name='Last Name' maxlength='80'></input>
						<div class='zcwf_col_help'></div>
					</div>
				</div>
				<div class='zcwf_row'>
					<div class='zcwf_col_fld'><input type='text' placeholder="Mobile Number" id='Mobile' name='Mobile' maxlength='30'></input>
						<div class='zcwf_col_help'></div>
					</div>
				</div>
				<div class='zcwf_row'>
					<div class='zcwf_col_fld'><input type='text' placeholder="Email Id" ftype='email' id='Email' name='Email' maxlength='100'></input>
						<div class='zcwf_col_help'></div>
					</div>
				</div>
				<div class='zcwf_row'>
					<div class='zcwf_col_fld'><input type='text' placeholder="Pincode" id='Zip_Code' name='Zip Code' maxlength='30'></input>
						<div class='zcwf_col_help'></div>
					</div>
				</div>
				<div class='zcwf_row'>
					<div class='zcwf_col_fld'><textarea placeholder="Message" rows="1" id='Description' name='Description'></textarea>
						<div class='zcwf_col_help'></div>
					</div>
				</div>
				<div class='zcwf_row'>
					<div class='zcwf_col_fld'><input type='text' placeholder="Requirement" id='LEADCF6' name='LEADCF6' maxlength='255'></input>
						<div class='zcwf_col_help'></div>
					</div>
				</div>
				<div class='zcwf_row'>
					<div class='zcwf_col_fld'><input type='text' placeholder="Street" id='Street' name='Street' maxlength='250'></input>
						<div class='zcwf_col_help'></div>
					</div>
				</div>
				<div class='zcwf_row'>
					<div class='zcwf_col_fld'><input type='text' placeholder="Location" id='City' name='City' maxlength='100'></input>
						<div class='zcwf_col_help'></div>
					</div>
				</div>
				<div class='zcwf_row'>
					<div class='zcwf_col_fld'><input type='text' placeholder="Area" id='LEADCF2' name='LEADCF2' maxlength='255'></input>
						<div class='zcwf_col_help'></div>
					</div>
				</div>
			</div>
			<div class="bottomBox">
				<div class='zcwf_row' style="margin-top: 0px;">
					<div class='zcwf_col_fld'><select class='zcwf_col_fld_slt' id='LEADCF4' name='LEADCF4'>
							<option value='-None-'>District</option>
							<option value='Adilabad'>Adilabad</option>
							<option value='Alappuzha'>Alappuzha</option>
							<option value='Anantapur'>Anantapur</option>
							<option value='Ariyalur'>Ariyalur</option>
							<option value='Bagalkot'>Bagalkot</option>
							<option value='Bangalore'>Bangalore</option>
							<option value='Bangalore&#x20;Rural'>Bangalore Rural</option>
							<option value='Belgaum'>Belgaum</option>
							<option value='Bellary'>Bellary</option>
							<option value='Bidar'>Bidar</option>
							<option value='Bijapur'>Bijapur</option>
							<option value='Chamarajanagar'>Chamarajanagar</option>
							<option value='Chengalpet'>Chengalpet</option>
							<option value='Chennai'>Chennai</option>
							<option value='Chikkaballapura'>Chikkaballapura</option>
							<option value='Chikmagalur'>Chikmagalur</option>
							<option value='Chitradurga'>Chitradurga</option>
							<option value='Chittoor'>Chittoor</option>
							<option value='Coimbatore'>Coimbatore</option>
							<option value='Cuddalore'>Cuddalore</option>
							<option value='Dakshina&#x20;Kannada'>Dakshina Kannada</option>
							<option value='Davanagere'>Davanagere</option>
							<option value='Dharmapuri'>Dharmapuri</option>
							<option value='Dharwad'>Dharwad</option>
							<option value='Dindigul'>Dindigul</option>
							<option value='East&#x20;Godavari'>East Godavari</option>
							<option value='Ernakulam'>Ernakulam</option>
							<option value='Erode'>Erode</option>
							<option value='Gadag'>Gadag</option>
							<option value='Gulbarga'>Gulbarga</option>
							<option value='Guntur'>Guntur</option>
							<option value='Hassan'>Hassan</option>
							<option value='Haveri'>Haveri</option>
							<option value='Hyderabad'>Hyderabad</option>
							<option value='Idukki'>Idukki</option>
							<option value='Kadappa'>Kadappa</option>
							<option value='Kallakurichi'>Kallakurichi</option>
							<option value='Kancheepuram'>Kancheepuram</option>
							<option value='Kannur'>Kannur</option>
							<option value='Kanyakumari'>Kanyakumari</option>
							<option value='Karaikal'>Karaikal</option>
							<option value='Karimnagar'>Karimnagar</option>
							<option value='Karur'>Karur</option>
							<option value='Kasaragod'>Kasaragod</option>
							<option value='Khammam'>Khammam</option>
							<option value='Kodagu'>Kodagu</option>
							<option value='Kolar'>Kolar</option>
							<option value='Kollam'>Kollam</option>
							<option value='Koppal'>Koppal</option>
							<option value='Kottayam'>Kottayam</option>
							<option value='Kozhikode'>Kozhikode</option>
							<option value='Krishna'>Krishna</option>
							<option value='Krishnagiri'>Krishnagiri</option>
							<option value='Kurnool'>Kurnool</option>
							<option value='Madurai'>Madurai</option>
							<option value='Mahbubnagar'>Mahbubnagar</option>
							<option value='Mahe'>Mahe</option>
							<option value='Malappuram'>Malappuram</option>
							<option value='Mandya'>Mandya</option>
							<option value='Mayiladuthurai'>Mayiladuthurai</option>
							<option value='Medak'>Medak</option>
							<option value='Mysore'>Mysore</option>
							<option value='Nagapattinam'>Nagapattinam</option>
							<option value='Nalgonda'>Nalgonda</option>
							<option value='Namakkal'>Namakkal</option>
							<option value='Nellore'>Nellore</option>
							<option value='Nizamabad'>Nizamabad</option>
							<option value='Palakkad'>Palakkad</option>
							<option value='Pathanamthitta'>Pathanamthitta</option>
							<option value='Perambalur'>Perambalur</option>
							<option value='Prakasam'>Prakasam</option>
							<option value='Puducherry'>Puducherry</option>
							<option value='Pudukottai'>Pudukottai</option>
							<option value='Raichur'>Raichur</option>
							<option value='Ramanagara'>Ramanagara</option>
							<option value='Ramanathapuram'>Ramanathapuram</option>
							<option value='Rangareddy'>Rangareddy</option>
							<option value='Ranipet'>Ranipet</option>
							<option value='Salem'>Salem</option>
							<option value='Shimoga'>Shimoga</option>
							<option value='Sivagangai'>Sivagangai</option>
							<option value='Srikakulam'>Srikakulam</option>
							<option value='Tenkasi'>Tenkasi</option>
							<option value='Thanjavur'>Thanjavur</option>
							<option value='The&#x20;Nilgiris'>The Nilgiris</option>
							<option value='Theni'>Theni</option>
							<option value='Thiruvallur'>Thiruvallur</option>
							<option value='Thiruvananthapuram'>Thiruvananthapuram</option>
							<option value='Thiruvarur'>Thiruvarur</option>
							<option value='Thrissur'>Thrissur</option>
							<option value='Tirunelveli'>Tirunelveli</option>
							<option value='Tirupathur'>Tirupathur</option>
							<option value='Tiruppur'>Tiruppur</option>
							<option value='Tiruvannamalai'>Tiruvannamalai</option>
							<option value='Trichirappalli'>Trichirappalli</option>
							<option value='Tumkur'>Tumkur</option>
							<option value='Tuticorin'>Tuticorin</option>
							<option value='Udupi'>Udupi</option>
							<option value='Uttara&#x20;Kannada'>Uttara Kannada</option>
							<option value='Vellore'>Vellore</option>
							<option value='Viluppuram'>Viluppuram</option>
							<option value='Virudhunagar'>Virudhunagar</option>
							<option value='Visakhapatnam'>Visakhapatnam</option>
							<option value='Vizianagaram'>Vizianagaram</option>
							<option value='Warangal'>Warangal</option>
							<option value='Wayanad'>Wayanad</option>
							<option value='West&#x20;Godavari'>West Godavari</option>
							<option value='Yadgir'>Yadgir</option>
							<option value='Yanam'>Yanam</option>
						</select>
						<div class='zcwf_col_help'></div>
					</div>
				</div>
				<div class='zcwf_row'>
					<div class='zcwf_col_fld'><select class='zcwf_col_fld_slt' id='Lead_Source' name='Lead Source'>
							<option value='-None-'>Source</option>
							<option value='Indiamart'>Indiamart</option>
							<option value='Dealer&#x20;Referral'>Dealer Referral</option>
							<option value='Dealer&#x27;s&#x20;Flex&#x20;Board'>Dealer&#x27;s Flex Board</option>
							<option value='Dinakaran&#x20;Vivasayi&#x20;Supplement'>Dinakaran Vivasayi Supplement</option>
							<option value='Advertisement&#x20;Board'>Advertisement Board</option>
							<option value='Expo&#x20;&#x28;Madurai&#x29;'>Expo &#x28;Madurai&#x29;</option>
							<option value='Expo&#x20;&#x28;Viluppuram&#x29;'>Expo &#x28;Viluppuram&#x29;</option>
							<option value='Expo&#x20;&#x28;Erode&#x29;'>Expo &#x28;Erode&#x29;</option>
							<option value='Expo&#x20;&#x28;Tirunelveli&#x29;'>Expo &#x28;Tirunelveli&#x29;</option>
							<option value='Aashiyana&#x20;Website'>Aashiyana Website</option>
							<option value='Live&#x20;Chat'>Live Chat</option>
							<option value='Direct'>Direct</option>
							<option value='Dinakaran&#x20;NewsPaper'>Dinakaran NewsPaper</option>
							<option value='Dinathanthi&#x20;News&#x20;Paper'>Dinathanthi News Paper</option>
							<option value='Justdial'>Justdial</option>
							<option value='Expo&#x20;&#x28;Codissia&#x29;'>Expo &#x28;Codissia&#x29;</option>
							<option value='Toll&#x20;Free'>Toll Free</option>
							<option value='Telephone'>Telephone</option>
							<option value='Email'>Email</option>
							<option value='Fax'>Fax</option>
							<option value='Instagram'>Instagram</option>
							<option value='Letter'>Letter</option>
							<option value='Employee'>Employee</option>
							<option value='Enquiry'>Enquiry</option>
							<option value='Referral'>Referral</option>
							<option value='Railway&#x20;Station&#x20;Branding'>Railway Station Branding</option>
							<option value='Advertisement'>Advertisement</option>
							<option value='Trade&#x20;Press'>Trade Press</option>
							<option value='Tradeshow'>Tradeshow</option>
							<option value='Import'>Import</option>
							<option value='Fabricators'>Fabricators</option>
							<option value='Social&#x20;Media'>Social Media</option>
							<option value='Website'>Website</option>
							<option value='Internet'>Internet</option>
							<option value='Toll&#x20;Free&#x20;Wall&#x20;Painting'>Toll Free Wall Painting</option>
							<option value='Toll&#x20;Free&#x20;Auto&#x20;Branding'>Toll Free Auto Branding</option>
							<option value='Toll&#x20;Free&#x20;Bus&#x20;Branding'>Toll Free Bus Branding</option>
							<option value='Toll&#x20;Free&#x20;Bus&#x20;Shelter'>Toll Free Bus Shelter</option>
							<option value='Toll&#x20;Free&#x20;Hoarding'>Toll Free Hoarding</option>
							<option value='Toll&#x20;Free&#x20;Magazine&#x20;Ad'>Toll Free Magazine Ad</option>
							<option value='Toll&#x20;Free&#x20;Name&#x20;Board'>Toll Free Name Board</option>
							<option value='Toll&#x20;Free&#x20;Product&#x20;Label'>Toll Free Product Label</option>
							<option value='ExportersIndia'>ExportersIndia</option>
							<option value='TradeIndia'>TradeIndia</option>
							<option value='Useit&#x20;Yellow&#x20;Pages'>Useit Yellow Pages</option>
							<option value='Nithra&#x20;Mobile&#x20;App'>Nithra Mobile App</option>
							<option value='VAN&#x20;Campaign'>VAN Campaign</option>
							<option value='Product&#x20;Leaflet'>Product Leaflet</option>
							<option value='Facebook'>Facebook</option>
							<option value='News18'>News18</option>
							<option value='Manvasanai'>Manvasanai</option>
							<option value='GoogleAds'>GoogleAds</option>
							<option value='Pasumai&#x20;Vikatan'>Pasumai Vikatan</option>
							<option value='Missed&#x20;Call'>Missed Call</option>
							<option value='Vijay&#x20;TV'>Vijay TV</option>
							<option value='Short&#x20;Code&#x20;Message'>Short Code Message</option>
							<option value='Painters&#x20;meet'>Painters meet</option>
							<option value='Bestimes'>Bestimes</option>
							<option value='Calendar'>Calendar</option>
							<option value='YouTube'>YouTube</option>
							<option value='Digital&#x20;display&#x20;ad'>Digital display ad</option>
							<option value='GoDry&#x20;Landing&#x20;Page'>GoDry Landing Page</option>
							<option value='Warranty'>Warranty</option>
							<option value='Vijayabaratham'>Vijayabaratham</option>
							<option value='Vehicle&#x20;Branding'>Vehicle Branding</option>
							<option value='Discovery&#x20;Tamil&#x20;Channel'>Discovery Tamil Channel</option>
							<option value='Repeated&#x20;customer'>Repeated customer</option>
							<option value='News7'>News7</option>
							<option value='GoogleAds&#x28;NewsWebsite&#x29;'>GoogleAds&#x28;NewsWebsite&#x29;</option>
							<option value='GoogleAds&#x28;Youtube&#x29;'>GoogleAds&#x28;Youtube&#x29;</option>
							<option value='TataSteel'>TataSteel</option>
							<option value='GoDry&#x20;Roofshield&#x20;Landing&#x20;Page'>GoDry Roofshield Landing Page</option>
							<option value='GoDry&#x20;Uniproof&#x20;Landing&#x20;Page'>GoDry Uniproof Landing Page</option>
							<option value='GoDry&#x20;Maxcoat2X&#x20;Landing&#x20;Page'>GoDry Maxcoat2X Landing Page</option>
							<option value='Polimernews'>Polimernews</option>
							<option value='Sun&#x20;News'>Sun News</option>
							<option value='Indicus&#x20;Website'>Indicus Website</option>
							<option value='Indicus&#x20;Landing&#x20;Page'>Indicus Landing Page</option>
							<option value='Tiscon&#x20;Landing&#x20;Page'>Tiscon Landing Page</option>
							<option value='Whatsapp'>Whatsapp</option>
							<option value='Consumer&#x20;Meet'>Consumer Meet</option>
							<option value='Dinamalar&#x20;Newspaper'>Dinamalar Newspaper</option>
							<option value='Patchai&#x20;Boomi&#x20;Expo&#x20;Pollachi'>Patchai Boomi Expo Pollachi</option>
							<option value='Outlook&#x20;Magazine'>Outlook Magazine</option>
							<option value='WhatsApp&#x20;-&#x20;VNC&#x20;Group'>WhatsApp - VNC Group</option>
						</select>
						<div class='zcwf_col_help'></div>
					</div>
				</div>
				<div class='zcwf_row'>
					<div class='zcwf_col_fld'><select class='zcwf_col_fld_slt' id='LEADCF15' name='LEADCF15'>
					</div>
					<option value='-None-'>Brand</option>
					<option value='BESTARC'>BESTARC</option>
					<option value='BESTFENCE'>BESTFENCE</option>
					<option value='BESTWIRE'>BESTWIRE</option>
					<option value='GECO'>GECO</option>
					<option value='GI&#x20;BINDING&#x20;WIRE'>GI BINDING WIRE</option>
					<option value='GODRY'>GODRY</option>
					<option value='INDICUS'>INDICUS</option>
					<option value='OTHERS'>OTHERS</option>
					<option value='TATA'>TATA</option>
					<option value='TATA&#x20;GI&#x20;WIRE'>TATA GI WIRE</option>
					<option value='VOLTWIRE'>VOLTWIRE</option>
					</select>
					<div class='zcwf_col_help'></div>
				</div>
			</div>
			<fieldset id="buildyourform"></fieldset>
			<div class='zcwf_row bottom-btn-row'>
				<!-- <div class='zcwf_col_lab'></div> -->
				<div class="btnGroups">
					<div class="zcwf_col_fld">
						<!-- <input type="button" value="Add Product" class="add" id="add"> -->
						<button type="button" class="add" id="add"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
<rect x="0.5" y="0.700684" width="15" height="15" rx="7.5" stroke="#1E1E1E" stroke-dasharray="1 1"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M8 4.20068C8.13261 4.20068 8.25979 4.25336 8.35355 4.34713C8.44732 4.4409 8.5 4.56808 8.5 4.70068V7.70068H11.5C11.6326 7.70068 11.7598 7.75336 11.8536 7.84713C11.9473 7.9409 12 8.06808 12 8.20068C12 8.33329 11.9473 8.46047 11.8536 8.55424C11.7598 8.64801 11.6326 8.70068 11.5 8.70068H8.5V11.7007C8.5 11.8333 8.44732 11.9605 8.35355 12.0542C8.25979 12.148 8.13261 12.2007 8 12.2007C7.86739 12.2007 7.74021 12.148 7.64645 12.0542C7.55268 11.9605 7.5 11.8333 7.5 11.7007V8.70068H4.5C4.36739 8.70068 4.24021 8.64801 4.14645 8.55424C4.05268 8.46047 4 8.33329 4 8.20068C4 8.06808 4.05268 7.9409 4.14645 7.84713C4.24021 7.75336 4.36739 7.70068 4.5 7.70068H7.5V4.70068C7.5 4.56808 7.55268 4.4409 7.64645 4.34713C7.74021 4.25336 7.86739 4.20068 8 4.20068V4.20068Z" fill="black"/>
</svg>Add Product</button>
					</div>
					<!-- <div class='zcwf_col_fld'>
						<input type='reset' class='zcwf_button reset' name='reset' value='Reset' title='Reset'>
					</div> -->
					<div class='zcwf_col_fld' style="display: flex; justify-content: end;">
						<input type='submit' id='formsubmit' class='formsubmit zcwf_button' value='Submit' title='Submit'>
					</div>
				</div>
			</div>
			<script>
				function validateEmail250849000000947058() {
					var form = document.forms['WebToLeads250849000000947058'];
					var emailFld = form.querySelectorAll('[ftype=email]');
					var i;
					for (i = 0; i < emailFld.length; i++) {
						var emailVal = emailFld[i].value;
						if ((emailVal.replace(/^\s+|\s+$/g, '')).length != 0) {
							var atpos = emailVal.indexOf('@');
							var dotpos = emailVal.lastIndexOf('.');
							if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= emailVal.length) {
								alert('Please enter a valid email address. ');
								emailFld[i].focus();
								return false;
							}
						}
					}
					return true;
				}

				function checkMandatory250849000000947058() {
				    var mndFileds = new Array('Last Name', 'Mobile', 'Lead Source', 'LEADCF15', 'CASECF19', 'CASECF12', 'CASECF14');
				    var fldLangVal = new Array('Full Name', 'Mobile number', 'Source', 'Brand', 'Product', 'Batch number', 'Purchased quantity');
				    var form = document.forms['WebToLeads250849000000947058'];
				    
				    for (var i = 0; i < mndFileds.length; i++) {
				        var fieldObj = form[mndFileds[i]];
				        var helpElement = fieldObj.parentElement.querySelector('.zcwf_col_help');

				        if (fieldObj) {
				            if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length == 0) {
				                if (fieldObj.type == 'file') {
				                    helpElement.textContent = 'Please select a file to upload.';
				                    fieldObj.focus();
				                    fieldObj.classList.add('invalid-input');
				                    helpElement.classList.add('invalid-feedback');
				                    return false;
				                }

				                helpElement.textContent = fldLangVal[i] + ' cannot be empty.';
				                fieldObj.focus();
				                fieldObj.classList.add('invalid-input');
				                helpElement.classList.add('invalid-feedback');
				                return false;
					        } else if (fieldObj.nodeName == 'SELECT') {
				                if (fieldObj.options[fieldObj.selectedIndex].value == '-None-') {
				                    helpElement.textContent = fldLangVal[i] + ' cannot be none.';
				                    fieldObj.focus();
				                    fieldObj.classList.add('invalid-input');
				                    helpElement.classList.add('invalid-feedback');
				                    return false;
				                }
				            } else if (fieldObj.type == 'checkbox') {
				                if (fieldObj.checked == false) {
				                    helpElement.textContent = 'Please accept ' + fldLangVal[i];
				                    fieldObj.focus();
				                    fieldObj.classList.add('invalid-input');
				                    helpElement.classList.add('invalid-feedback');
				                    return false;
				                }
				            }
				            
				            helpElement.textContent = '';
				            helpElement.classList.remove('invalid-feedback');
				            fieldObj.classList.remove('invalid-input');

				            try {
				                if (fieldObj.name == 'Last Name') {
				                    name = fieldObj.value;
				                }
				            } catch (e) {}
				        }
			    	}

				    if (!validateEmail250849000000947058()) {
				        return false;
				    }

			    	document.querySelector('.crmWebToEntityForm .formsubmit').setAttribute('disabled', true);
				}


				function tooltipShow250849000000947058(el) {
					var tooltip = el.nextElementSibling;
					var tooltipDisplay = tooltip.style.display;
					if (tooltipDisplay == 'none') {
						var allTooltip = document.getElementsByClassName('zcwf_tooltip_over');
						for (i = 0; i < allTooltip.length; i++) {
							allTooltip[i].style.display = 'none';
						}
						tooltip.style.display = 'block';
					} else {
						tooltip.style.display = 'none';
					}
				}
			</script>
			<script>
				$(document).ready(function() {
				    $("#add").click(function() {
				    	var lastField = $("#buildyourform div.zcwf_row:last");
				     //   alert(lastField.attr("data-idx"));
				        var intId = (lastField && lastField.length && parseInt(lastField.attr("data-idx")) + 1) || 1;
				        var fieldWrapper = $('<div class="zcwf_row"  style="display: flex;">');
				        fieldWrapper.attr("data-idx", intId);
				        var fName = $("<div class='three'><div class='zcwf_col_fld'><select class='zcwf_col_fld_slt' id='CASECF19' name='CASECF19'><option value='-None-'>Product</option><option value='INDICUS&#x20;DRAPER'>DRAPER</option><option value='INDICUS&#x20;CALIBRE'>CALIBRE</option><option value='INDICUS&#x20;HEATSEAL'>HEATSEAL</option><option value='INDICUS&#x20;ULTRACOAT'>ULTRACOAT</option><option value='INDICUS&#x20;ULTRAPRIME'>ULTRAPRIME</option></select><div class='zcwf_col_help'></div></div></div>");
				        var fType = $("<div class='three'><div class='zcwf_col_fld'><input type='text' id='CASECF12' name='CASECF12' maxlength='50' placeholder='Batch number'></input><div class='zcwf_col_help'></div></div></div><div class='three'><div class='zcwf_col_fld'><input type='text' id='CASECF14' name='CASECF14' maxlength='20' placeholder='Purchased quantity (L)'></input><div class='zcwf_col_help'></div></div></div>");
				        var removeButton = $('<button type=\"button\" class=\"remove\"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M0.97034 0.968875C1.04001 0.899031 1.12277 0.843616 1.21389 0.805806C1.30501 0.767997 1.40269 0.748535 1.50134 0.748535C1.59999 0.748535 1.69767 0.767997 1.78879 0.805806C1.87991 0.843616 1.96267 0.899031 2.03234 0.968875L6.00134 4.93938L9.97034 0.968875C10.0401 0.899143 10.1229 0.843829 10.214 0.80609C10.3051 0.768352 10.4027 0.748928 10.5013 0.748928C10.6 0.748928 10.6976 0.768352 10.7887 0.80609C10.8798 0.843829 10.9626 0.899143 11.0323 0.968875C11.1021 1.03861 11.1574 1.12139 11.1951 1.2125C11.2329 1.30361 11.2523 1.40126 11.2523 1.49988C11.2523 1.59849 11.2329 1.69614 11.1951 1.78725C11.1574 1.87836 11.1021 1.96114 11.0323 2.03088L7.06184 5.99988L11.0323 9.96887C11.1021 10.0386 11.1574 10.1214 11.1951 10.2125C11.2329 10.3036 11.2523 10.4013 11.2523 10.4999C11.2523 10.5985 11.2329 10.6961 11.1951 10.7873C11.1574 10.8784 11.1021 10.9611 11.0323 11.0309C10.9626 11.1006 10.8798 11.1559 10.7887 11.1937C10.6976 11.2314 10.6 11.2508 10.5013 11.2508C10.4027 11.2508 10.3051 11.2314 10.214 11.1937C10.1229 11.1559 10.0401 11.1006 9.97034 11.0309L6.00134 7.06037L2.03234 11.0309C1.96261 11.1006 1.87982 11.1559 1.78872 11.1937C1.69761 11.2314 1.59996 11.2508 1.50134 11.2508C1.40272 11.2508 1.30507 11.2314 1.21396 11.1937C1.12286 11.1559 1.04007 11.1006 0.97034 11.0309C0.900608 10.9611 0.845294 10.8784 0.807555 10.7873C0.769817 10.6961 0.750393 10.5985 0.750393 10.4999C0.750393 10.4013 0.769817 10.3036 0.807555 10.2125C0.845294 10.1214 0.900608 10.0386 0.97034 9.96887L4.94084 5.99988L0.97034 2.03088C0.900495 1.96121 0.845081 1.87844 0.807271 1.78733C0.769462 1.69621 0.75 1.59853 0.75 1.49988C0.75 1.40122 0.769462 1.30354 0.807271 1.21242C0.845081 1.12131 0.900495 1.03854 0.97034 0.968875Z" fill="#FF0000"/></svg></button>');
				        removeButton.click(function() {
				            $(this).parent().remove();
				            if(intId >= 5)
				            {
				                $("#add").hide();
				            }
				            else
				            {
				                $("#add").show();
				            }
				        });
				        fieldWrapper.append(fName);
				        fieldWrapper.append(fType);
				        fieldWrapper.append(removeButton);
				        $("#buildyourform").append(fieldWrapper);
				       // alert(intId);
				        if(intId >= 4)
				        {
				            $("#add").hide();
				        }
				        else
				        {
				            $("#add").show();
				        }
				    });
				 
				});

			</script>
		</form>
	</div>
<?php
	$content = ob_get_clean();
	return $content;
}


/* callback form */

add_shortcode('estimate-panting-form', 'estimate_panting_form');
function estimate_panting_form()
{
	ob_start(); ?>
	<div class="elementor-widget-container">
		<div id="crmWebToEntityForm" class="zcwf_lblLeft crmWebToEntityForm appointmentForm" style="color: #2a2a2a;">
			<form name="WebToLeads250849000000947058" onsubmit="javascript:document.charset=&quot;UTF-8&quot;; return checkMandatory250849000000947058()" accept-charset="UTF-8" action="https://crm.zoho.in/crm/WebToLeadForm" method="POST">
				<input type="hidden" name="xnQsjsdp" value="db887390625950606c3528f7d8a1164e190fd3c45d4366921efb4f0891976ab1">
				<input type="hidden" name="zc_gad" id="zc_gad" value="">
				<input type="hidden" name="xmIwtLD" value="f3a51ccc724bbca98e66acb567562514f0c2b70292a34b6bc86ced74ebf842d1">
				<input type="hidden" name="actionType" value="TGVhZHM=">
				<input type="hidden" name="returnURL" value="https://indicus.in/thank-you/">
				<input type="hidden" name="Lead Source" value="Indicus Website">
				<input type="hidden" name="LEADCF15" value="INDICUS">
				<style>
					html,
					body {
						margin: 0px;
					}

					#crmWebToEntityForm.zcwf_lblLeft {
						width: 100%;
						box-sizing: border-box;
					}

					#crmWebToEntityForm.zcwf_lblLeft * {
						box-sizing: border-box;
					}

					#crmWebToEntityForm {
						text-align: left;
					}

					#crmWebToEntityForm * {
						direction: ltr;
					}

					.zcwf_lblLeft .zcwf_title {
						word-wrap: break-word;
						padding: 0px 30px 10px;
						font-weight: bold;
					}

					.zcwf_lblLeft .zcwf_col_fld input[type=text],
					.zcwf_lblLeft .zcwf_col_fld textarea {
						width: 100%;
						border: 1px solid #ccc !important;
						background-color: transparent;
						resize: vertical;
						border-radius: 12px;
						float: left;
						padding: 10px 15px;
						margin-bottom: 0px;
					}

					.zcwf_lblLeft .zcwf_col_lab {
						width: 100%;
						word-break: break-word;
						padding: 0px 30px 0px 0px;
						margin-right: 10px;
						margin-top: 5px;
						float: left;
						min-height: 1px;
					}

					.zcwf_lblLeft .zcwf_col_fld {
						float: left;
						width: calc(33.33% - 24px);
						/* padding: 0px 0px 40px 0px; */
						position: relative;
						/* margin-top: 5px; */
						margin-right: 24px;
					}
					.zcwf_lblLeft .zcwf_col_fld.button{
						margin-right: 0;
						margin-left: 20px;
					}
					

					.zcwf_lblLeft .zcwf_privacy {
						padding: 6px;
					}

					.zcwf_lblLeft .wfrm_fld_dpNn {
						display: none;
					}

					.dIB {
						display: inline-block;
					}

					.zcwf_lblLeft .zcwf_col_fld_slt {
						width: 60%;
						border: 1px solid #ccc;
						background: #fff;
						border-radius: 4px;
						font-size: 12px;
						float: left;
						resize: vertical;
					}

					/* .zcwf_lblLeft .zcwf_row:after,
					.zcwf_lblLeft .zcwf_col_fld:after {
						content: '';
						display: table;
						clear: both;
					} */

					.appointmentForm .pantingBottomForm .zcwf_col_help.invalid-feedback {
						font-size: 14px;
						line-height: 20px;
						color: #ED4337;
						font-family: 'CeraPro-Regular' !important;
						position: absolute;
						bottom: -18px;
						right: 0;
					}
					.appointmentForm .pantingBottomForm .zcwf_col_help.invalid-feedback::after{
						content: '';
						position: absolute;
						right: 0;
						top: -30px;
						background-repeat: no-repeat;
						background-size: contain;
						width: 24px;
						height: 24px;
					}

					.zcwf_lblLeft .zcwf_help_icon {
						cursor: pointer;
						width: 16px;
						height: 16px;
						display: inline-block;
						background: #fff;
						border: 1px solid #ccc;
						color: #ccc;
						text-align: center;
						font-size: 11px;
						line-height: 16px;
						font-weight: bold;
						border-radius: 50%;
					}

					.zcwf_lblLeft .zcwf_row {
						margin: 0px 0px 0px 0px;
					}

					.zcwf_lblLeft .formsubmit {
						cursor: pointer;
						color: #333;
						font-size: 12px;
					}

					.zcwf_lblLeft .zcwf_privacy_txt {
						color: rgb(0, 0, 0);
						font-size: 12px;
						font-family: Arial;
						display: inline-block;
						vertical-align: top;
						color: #333;
						padding-top: 2px;
						margin-left: 6px;
					}

					.zcwf_lblLeft .zcwf_button {
						display: flex;
						padding: 16px 32px;
						justify-content: center;
						align-items: center;
						gap: 10px;
						border-radius: 134.212px;
						background: #7031BB;
						color: #FFF;
						font-family: Cera Pro;
						font-size: 16px;
						font-style: normal;
						font-weight: 700;
						line-height: normal;
						box-shadow: none;
						box-shadow: none;
						border: none;
						outline: none;
						text-transform: uppercase;
						font-family: 'CeraPro-Regular' !important;
						cursor: pointer;
						transition: all ease-in-out 0.3s;
					}
					.zcwf_lblLeft .zcwf_button:hover{
						background-color: #8160EC;}

					.zcwf_lblLeft .zcwf_tooltip_over {
						position: relative;
					}

					.zcwf_lblLeft .zcwf_tooltip_ctn {
						position: absolute;
						background: #dedede;
						padding: 3px 6px;
						top: 3px;
						border-radius: 4px;
						word-break: break-all;
						min-width: 50px;
						max-width: 150px;
						color: #333;
					}

					.zcwf_lblLeft .zcwf_ckbox {
						float: left;
					}

					.zcwf_lblLeft .zcwf_file {
						width: 55%;
						box-sizing: border-box;
						float: left;
					}

					.clearB:after {
						content: '';
						display: block;
						clear: both;
					}

					#formsubmit {
						/* margin-top: -90px; */
						border-color: transparent;
					}
					
					.pantingBottomForm.zcwf_row input[type=text].invalid-input{
						border-color: #ED4337 !important;
						padding-right: 30px !important;
					}

					.pantingBottomForm.zcwf_row input[type=text] {
						/* width: 100%; */
						border-top: none !important;
						border-left: none !important;
						border-right: none !important;
						border-bottom: 1px solid #747474 !important;
						border-radius: 0px !important;
						resize: vertical;
						padding: 8px 0px;
						box-sizing: border-box;
						color: #747474;
						font-family: 'CeraPro-Regular';
						font-size: 18px;
						font-style: normal;
						font-weight: 400;
						line-height: 26px; /* 144.444% */
					}
					.pantingBottomForm .inputfeild input::-webkit-input-placeholder{
						color: #747474;
						opacity: 1;
					}
					.pantingBottomForm .inputfeild input::-moz-placeholder{
						color: #747474;
						opacity: 1;
					}
					.pantingBottomForm .inputfeild input::placeholder{
						color: #747474;
						opacity: 1;
					}
					.pantingBottomForm.zcwf_row input[type=text]:focus{
						outline: none;
					}
					.pantingBottomForm {
						display: flex;
						align-items: start;
					}
					.notice-callback-form {
						display: flex;
						width: 100%;
						flex-direction: column;
						padding-top: 18px;
					}
					.notice-callback-form p{
						color: #000;
						font-family: 'CeraPro-Regular';
						font-size: 10px;
						font-style: normal;
						font-weight: 400;
						line-height: 20px; /* 200% */
						margin: 0px;
					}
					.notice-callback-form p a {
					    color: #000;
					    font-family: 'CeraPro-Regular' !important;
					}
					.pantingBottomForm .inputfeild .zcwf_col_fld{
						position: relative;
					}
					@media screen and (min-width: 768px) and (max-width: 1024px){
						.appointmentForm .pantingBottomForm .zcwf_col_help.invalid-feedback{
							font-size: 10px;
						}
						.zcwf_lblLeft .zcwf_col_fld.button{
							margin-left: 0;
						}
						.zcwf_lblLeft .zcwf_button{
							padding: 16px;
						}
						.zcwf_lblLeft .zcwf_col_fld{
							width: calc(33.33% - 14px);
							margin-right: 14px;
						}
					}

					@media all and (max-width: 767px) {
						.pantingBottomForm{
							flex-wrap: wrap;
						}
						.zcwf_lblLeft .zcwf_col_fld.button{
							margin-left: 0;
							margin-top: 20px;
						}
						.pantingBottomForm .inputfeild{
							width: 100%;
						}
						.zcwf_lblLeft .zcwf_col_lab,
						.zcwf_lblLeft .zcwf_col_fld {
							width: auto;
							float: none !important;
						}

						/* .zcwf_lblLeft .zcwf_col_help {
							width: 40%;
						} */

						.zcwf_lblLeft .zcwf_col_fld {
							padding: 0px 0px 24px 0px;
							width: 100%;
							margin-right: 0px;
							display: flex;
						}
						.zcwf_lblLeft .inputfeild .zcwf_col_fld:nth-last-child(2){
							padding-bottom: 0px !important;
						}

						#formsubmit {
							margin-top: 0px;
							border-color: transparent;
						}
						.pantingBottomForm.zcwf_row input[type=text] {
						font-size: 16px;
						line-height: 24px;
					}
					.notice-callback-form p{
						line-height: 14px;
					}
					.appointmentForm .pantingBottomForm .zcwf_col_help.invalid-feedback {
						font-size: 14px;
						bottom: 2px;
					}
					.appointmentForm .pantingBottomForm .zcwf_col_help.invalid-feedback::after{
						top: -35px;
					}
					}
				</style>
				<div class="zcwf_row pantingBottomForm">
					<div class="inputfeild">
						<div class="zcwf_col_fld">
							<input type="text" id="First_Name" name="First Name" maxlength="80" placeholder="First Name" style="display: none;">
							<input type="text" id="Last_Name" name="Last Name" maxlength="80" placeholder="Your name">
							<div class='zcwf_col_help'></div>
						</div>
						<div class="zcwf_col_fld"><input placeholder="Mobile number" type="text" id="Mobile" name="Mobile" maxlength="10">
							<div class='zcwf_col_help'></div>
						</div>
						<!-- <div class="zcwf_col_fld">
							<input type="text" placeholder="Email ID" ftype="email" id="Email" name="Email" maxlength="100">
							<div class='zcwf_col_help'></div>
						</div> -->
						<div class="zcwf_col_fld">
							<input placeholder="Pincode" type="text" id="Zip_Code" name="Zip Code" maxlength="6">
							<div class='zcwf_col_help'></div>
						</div>
						<div class="notice-callback-form">
							<p>By proceeding, you are authorizing Indicus and its contractors to get in touch with you through calls, messages, or email.</p>
							</p>
						</div>
					</div>
					<div class="zcwf_col_fld button" style="padding-bottom: 0;">
						<input type="submit" id="formsubmit" class="formsubmit submitForm zcwf_button" value="BOOK YOUR APPOINTMENT" title="Submit">
					</div>
				</div>
				<!-- <div class="zcwf_row">
					<div class="zcwf_col_fld" style="padding-bottom: 0;">
						<input type="submit" id="formsubmit" class="formsubmit zcwf_button" value="Submit" title="Submit">
					</div>
				</div> -->
			</form>
		</div>
		<script>
			$(document).ready(function() {
				$('form[name="WebToLeads250849000000947058"]').attr('action', 'https://crm.zoho.in/crm/WebToLeadForm');
				$('form[name="WebToLeads250849000000947058"]').attr('method', 'POST');
			});

			function validateEmail250849000000947058() {
				var form = document.forms['WebToLeads250849000000947058'];
				var emailFld = form.querySelectorAll('[ftype=email]');
				var i;
				for (i = 0; i < emailFld.length; i++) {
					var emailVal = emailFld[i].value;
					if ((emailVal.replace(/^\s+|\s+$/g, '')).length != 0) {
						var atpos = emailVal.indexOf('@');
						var dotpos = emailVal.lastIndexOf('.');
						if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= emailVal.length) {
							alert('Please enter a valid email address. ');
							emailFld[i].focus();
							return false;
						}
					}
				}
				return true;
			}

			function checkMandatory250849000000947058() {
				//var firstName = document.getElementById('First_Name').value;
				var mndFileds = new Array('Last Name', 'Mobile', 'Zip Code');
				var fldLangVal = new Array('Name', 'Mobile number', 'Pincode');
				var form = document.forms['WebToLeads250849000000947058'];

				for (var i = 0; i < mndFileds.length; i++) {
			        var fieldObj = form[mndFileds[i]];
			        var helpElement = fieldObj.parentElement.querySelector('.zcwf_col_help');

			        if (fieldObj) {
			            if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length == 0) {
			                if (fieldObj.type == 'file') {
			                    // Handle file error
			                    helpElement.textContent = 'Please select a file to upload.';
			                    fieldObj.focus();
			                    fieldObj.classList.add('invalid-input');
			                    helpElement.classList.add('invalid-feedback');
			                    return false;
			                }

			                // Handle other input types
			                helpElement.textContent = fldLangVal[i] + ' cannot be empty.';
			                fieldObj.focus();
			               	fieldObj.classList.add('invalid-input');
			                helpElement.classList.add('invalid-feedback');
			                return false;
			            } else if (fieldObj.nodeName == 'SELECT') {
			                if (fieldObj.options[fieldObj.selectedIndex].value == '-None-') {
			                    // Handle select error
			                    helpElement.textContent = fldLangVal[i] + ' cannot be none.';
			                    fieldObj.focus();
			                   	fieldObj.classList.add('invalid-input');
			                    helpElement.classList.add('invalid-feedback');
			                    return false;
			                }
			            } else if (fieldObj.type == 'checkbox') {
			                if (fieldObj.checked == false) {
			                    // Handle checkbox error
			                    helpElement.textContent = 'Please accept ' + fldLangVal[i];
			                    fieldObj.focus();
			                   	fieldObj.classList.add('invalid-input');
			                    helpElement.classList.add('invalid-feedback');
			                    return false;
			                }
			            }
			            
			            // Clear the error message if the field is valid
			            helpElement.textContent = '';
			            helpElement.classList.remove('invalid-feedback');
			            fieldObj.classList.remove('invalid-input');

			            try {
			                if (fieldObj.name == 'Last Name') {
			                    name = fieldObj.value;
			                }
			            } catch (e) {}
			        }
			    }
				if (!validateEmail250849000000947058()) {
					return false;
				}
				document.querySelector('.crmWebToEntityForm .formsubmit').setAttribute('disabled', true);
			}

			function tooltipShow250849000000947058(el) {
				var tooltip = el.nextElementSibling;
				var tooltipDisplay = tooltip.style.display;
				if (tooltipDisplay == 'none') {
					var allTooltip = document.getElementsByClassName('zcwf_tooltip_over');
					for (i = 0; i < allTooltip.length; i++) {
						allTooltip[i].style.display = 'none';
					}
					tooltip.style.display = 'block';
				} else {
					tooltip.style.display = 'none';
				}
			}
		</script>
	</div>
<?php
	$content = ob_get_clean();
	return $content;
}


/* callback form - home */

add_shortcode('callback-home-form', 'callback_home_form');
function callback_home_form()
{
	ob_start(); ?>
	<div class="elementor-widget-container">
		<div id="crmWebToEntityForm" class="zcwf_lblLeft crmWebToEntityForm appointmentForm" style="color: #2a2a2a;">
			<form name="WebToLeads250849000000947058" onsubmit="javascript:document.charset=&quot;UTF-8&quot;; return checkMandatory250849000000947058()" accept-charset="UTF-8" action="https://crm.zoho.in/crm/WebToLeadForm" method="POST">
				<input type="hidden" name="xnQsjsdp" value="db887390625950606c3528f7d8a1164e190fd3c45d4366921efb4f0891976ab1">
				<input type="hidden" name="zc_gad" id="zc_gad" value="">
				<input type="hidden" name="xmIwtLD" value="f3a51ccc724bbca98e66acb567562514f0c2b70292a34b6bc86ced74ebf842d1">
				<input type="hidden" name="actionType" value="TGVhZHM=">
				<input type="hidden" name="returnURL" value="https://indicus.in/thank-you/">
				<input type="hidden" name="Lead Source" value="Indicus Website">
				<input type="hidden" name="LEADCF15" value="INDICUS">
				<style>
					html,
					body {
						margin: 0px;
					}

					#crmWebToEntityForm.zcwf_lblLeft {
						width: 100%;
						box-sizing: border-box;
					}

					#crmWebToEntityForm.zcwf_lblLeft * {
						box-sizing: border-box;
					}

					#crmWebToEntityForm {
						text-align: left;
					}

					#crmWebToEntityForm * {
						direction: ltr;
					}

					.zcwf_lblLeft .zcwf_title {
						word-wrap: break-word;
						padding: 0px 30px 10px;
						font-weight: bold;
					}

					.zcwf_lblLeft .zcwf_col_fld input[type=text],
					.zcwf_lblLeft .zcwf_col_fld textarea {
						width: 100%;
						border: 1px solid #ccc !important;
						background-color: transparent;
						resize: vertical;
						border-radius: 12px;
						float: left;
						padding: 10px 15px;
						margin-bottom: 0px;
					}

					.zcwf_lblLeft .zcwf_col_lab {
						width: 100%;
						word-break: break-word;
						padding: 0px 30px 0px 0px;
						margin-right: 10px;
						margin-top: 5px;
						float: left;
						min-height: 1px;
					}

					.zcwf_lblLeft .zcwf_col_fld {
						float: left;
						width: calc(33.33% - 20px);
						/* padding: 0px 0px 40px 0px; */
						position: relative;
						/* margin-top: 5px; */
						margin-right: 20px;
					}
					.zcwf_lblLeft .zcwf_col_fld.button{
						margin-right: 0;
						margin-left: 0;
					}
					

					.zcwf_lblLeft .zcwf_privacy {
						padding: 6px;
					}

					.zcwf_lblLeft .wfrm_fld_dpNn {
						display: none;
					}

					.dIB {
						display: inline-block;
					}

					.zcwf_lblLeft .zcwf_col_fld_slt {
						width: 60%;
						border: 1px solid #ccc;
						background: #fff;
						border-radius: 4px;
						font-size: 12px;
						float: left;
						resize: vertical;
					}

					/* .zcwf_lblLeft .zcwf_row:after,
					.zcwf_lblLeft .zcwf_col_fld:after {
						content: '';
						display: table;
						clear: both;
					} */

					.appointmentForm .pantingBottomForm .zcwf_col_help.invalid-feedback {
						font-size: 14px;
						line-height: 20px;
						color: #ED4337;
						font-family: 'CeraPro-Regular' !important;
						position: absolute;
						bottom: -18px;
						right: 0;
					}
					.appointmentForm .pantingBottomForm .zcwf_col_help.invalid-feedback::after{
						content: '';
						position: absolute;
						right: 0;
						top: -30px;
						background-repeat: no-repeat;
						background-size: contain;
						width: 24px;
						height: 24px;
					}

					.zcwf_lblLeft .zcwf_help_icon {
						cursor: pointer;
						width: 16px;
						height: 16px;
						display: inline-block;
						background: #fff;
						border: 1px solid #ccc;
						color: #ccc;
						text-align: center;
						font-size: 11px;
						line-height: 16px;
						font-weight: bold;
						border-radius: 50%;
					}

					.zcwf_lblLeft .zcwf_row {
						margin: 0px 0px 0px 0px;
					}

					.zcwf_lblLeft .formsubmit {
						cursor: pointer;
						color: #333;
						font-size: 12px;
					}

					.zcwf_lblLeft .zcwf_privacy_txt {
						color: rgb(0, 0, 0);
						font-size: 12px;
						font-family: Arial;
						display: inline-block;
						vertical-align: top;
						color: #333;
						padding-top: 2px;
						margin-left: 6px;
					}

					.zcwf_lblLeft .zcwf_button {
						display: flex;
						padding: 16px 32px;
						justify-content: center;
						align-items: center;
						gap: 10px;
						border-radius: 134.212px;
						background: #7031BB;
						color: #FFF;
						font-family: Cera Pro;
						font-size: 16px;
						font-style: normal;
						font-weight: 700;
						line-height: normal;
						box-shadow: none;
						box-shadow: none;
						border: none;
						outline: none;
						text-transform: uppercase;
						font-family: 'CeraPro-Regular' !important;
						cursor: pointer;
						transition: all ease-in-out 0.3s;
					}
					.zcwf_lblLeft .zcwf_button:hover{
						background-color: #8160EC;}

					.zcwf_lblLeft .zcwf_tooltip_over {
						position: relative;
					}

					.zcwf_lblLeft .zcwf_tooltip_ctn {
						position: absolute;
						background: #dedede;
						padding: 3px 6px;
						top: 3px;
						border-radius: 4px;
						word-break: break-all;
						min-width: 50px;
						max-width: 150px;
						color: #333;
					}

					.zcwf_lblLeft .zcwf_ckbox {
						float: left;
					}

					.zcwf_lblLeft .zcwf_file {
						width: 55%;
						box-sizing: border-box;
						float: left;
					}

					.clearB:after {
						content: '';
						display: block;
						clear: both;
					}

					#formsubmit {
						/* margin-top: -90px; */
						border-color: transparent;
					}
					
					.pantingBottomForm .inputfeild{
						flex: 0 0 75%;
					}

					.pantingBottomForm.zcwf_row input[type=text].invalid-input{
						border-color: #ED4337 !important;
						padding-right: 28px !important;
					}

					.pantingBottomForm.zcwf_row input[type=text] {
						/* width: 100%; */
						border-top: none !important;
						border-left: none !important;
						border-right: none !important;
						border-bottom: 1px solid #747474 !important;
						border-radius: 0px !important;
						resize: vertical;
						padding: 8px 0px;
						box-sizing: border-box;
						color: #747474;
						font-family: 'CeraPro-Regular';
						font-size: 18px;
						font-style: normal;
						font-weight: 400;
						line-height: 26px; /* 144.444% */
					}
					.pantingBottomForm .inputfeild input::-webkit-input-placeholder{
						color: #747474;
						opacity: 1;
					}
					.pantingBottomForm .inputfeild input::-moz-placeholder{
						color: #747474;
						opacity: 1;
					}
					.pantingBottomForm .inputfeild input::placeholder{
						color: #747474;
						opacity: 1;
					}
					.pantingBottomForm.zcwf_row input[type=text]:focus{
						outline: none;
					}
					.pantingBottomForm {
						display: flex;
						align-items: start;
					}
					.notice-callback-form {
						display: flex;
						width: 100%;
						flex-direction: column;
						padding-top: 18px;
					}
					.notice-callback-form p{
						color: #000;
						font-family: 'CeraPro-Regular';
						font-size: 10px;
						font-style: normal;
						font-weight: 400;
						line-height: 20px; /* 200% */
						margin: 0px;
					}
					.notice-callback-form p a {
					    color: #000;
					    font-family: 'CeraPro-Regular' !important;
					}
					.pantingBottomForm .inputfeild .zcwf_col_fld{
						position: relative;
					}
					@media screen and (min-width: 768px) and (max-width: 1024px){
						/*.appointmentForm .pantingBottomForm .zcwf_col_help.invalid-feedback{
							font-size: 10px;
						}
						.zcwf_lblLeft .zcwf_col_fld.button{
							margin-left: 0;
						}
						.zcwf_lblLeft .zcwf_button{
							padding: 16px;
						}
						.zcwf_lblLeft .zcwf_col_fld{
							width: calc(33.33% - 14px);
							margin-right: 14px;
						}*/
					}

					@media all and (max-width: 767px) {
						.pantingBottomForm{
							flex-wrap: wrap;
						}
						.zcwf_lblLeft .zcwf_col_fld.button{
							margin-left: 0;
							margin-top: 0;
							justify-content: center;
						}
						.pantingBottomForm .inputfeild{
							width: 100%;
						}
						.zcwf_lblLeft .zcwf_col_lab,
						.zcwf_lblLeft .zcwf_col_fld {
							width: auto;
							float: none !important;
						}

						/* .zcwf_lblLeft .zcwf_col_help {
							width: 40%;
						} */

						.zcwf_lblLeft .zcwf_col_fld {
							padding: 0px 0px 20px 0px;
							width: 100%;
							margin-right: 0px;
							display: flex;
						}
						/*.zcwf_lblLeft .inputfeild .zcwf_col_fld:nth-last-child(2){
							padding-bottom: 0px !important;
						}*/

						#formsubmit {
							margin-top: 0px;
							border-color: transparent;
						}
						.pantingBottomForm.zcwf_row input[type=text] {
						font-size: 16px;
						line-height: 24px;
					}
					.notice-callback-form p{
						line-height: 14px;
					}
					.appointmentForm .pantingBottomForm .zcwf_col_help.invalid-feedback {
						font-size: 14px;
						bottom: 2px;
					}
					.appointmentForm .pantingBottomForm .zcwf_col_help.invalid-feedback::after{
						top: -35px;
					}
					.pantingBottomForm .inputfeild{
						flex: 0 0 100%;
					}
					}
				</style>
				<div class="zcwf_row pantingBottomForm">
					<div class="inputfeild">
						<div class="zcwf_col_fld">
							<input type="text" id="First_Name" name="First Name" maxlength="80" placeholder="First Name" style="display: none;">
							<input type="text" id="Last_Name" name="Last Name" maxlength="80" placeholder="Your name">
							<div class='zcwf_col_help'></div>
						</div>
						<div class="zcwf_col_fld"><input placeholder="Mobile number" type="text" id="Mobile" name="Mobile" maxlength="10">
							<div class='zcwf_col_help'></div>
						</div>
						<!-- <div class="zcwf_col_fld">
							<input type="text" placeholder="Email ID" ftype="email" id="Email" name="Email" maxlength="100">
							<div class='zcwf_col_help'></div>
						</div> -->
						<div class="zcwf_col_fld">
							<input placeholder="Pincode" type="text" id="Zip_Code" name="Zip Code" maxlength="6">
							<div class='zcwf_col_help'></div>
						</div>
						<!-- <div class="notice-callback-form">
							<p>By proceeding, you are authorizing Indicus and its contractors to get in touch with you through calls, messages, or email.</p>
							<p><a href="/terms-and-conditions/">Terms and Conditions</a></p>
						</div> -->
					</div>
					<div class="zcwf_col_fld button" style="padding-bottom: 0;">
						<input type="submit" id="formsubmit" class="formsubmit submitForm zcwf_button" value="SUBMIT" title="Submit">
					</div>
				</div>
				<!-- <div class="zcwf_row">
					<div class="zcwf_col_fld" style="padding-bottom: 0;">
						<input type="submit" id="formsubmit" class="formsubmit zcwf_button" value="Submit" title="Submit">
					</div>
				</div> -->
			</form>
		</div>
		<script>
			$(document).ready(function() {
				$('form[name="WebToLeads250849000000947058"]').attr('action', 'https://crm.zoho.in/crm/WebToLeadForm');
				$('form[name="WebToLeads250849000000947058"]').attr('method', 'POST');
			});

			function validateEmail250849000000947058() {
				var form = document.forms['WebToLeads250849000000947058'];
				var emailFld = form.querySelectorAll('[ftype=email]');
				var i;
				for (i = 0; i < emailFld.length; i++) {
					var emailVal = emailFld[i].value;
					if ((emailVal.replace(/^\s+|\s+$/g, '')).length != 0) {
						var atpos = emailVal.indexOf('@');
						var dotpos = emailVal.lastIndexOf('.');
						if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= emailVal.length) {
							alert('Please enter a valid email address. ');
							emailFld[i].focus();
							return false;
						}
					}
				}
				return true;
			}

			function checkMandatory250849000000947058() {
				//var firstName = document.getElementById('First_Name').value;
				var mndFileds = new Array('Last Name', 'Mobile', 'Zip Code');
				var fldLangVal = new Array('Name', 'Mobile number', 'Pincode');
				var form = document.forms['WebToLeads250849000000947058'];

				for (var i = 0; i < mndFileds.length; i++) {
			        var fieldObj = form[mndFileds[i]];
			        var helpElement = fieldObj.parentElement.querySelector('.zcwf_col_help');

			        if (fieldObj) {
			            if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length == 0) {
			                if (fieldObj.type == 'file') {
			                    // Handle file error
			                    helpElement.textContent = 'Please select a file to upload.';
			                    fieldObj.focus();
			                    fieldObj.classList.add('invalid-input');
			                    helpElement.classList.add('invalid-feedback');
			                    return false;
			                }

			                // Handle other input types
			                if(fldLangVal[i] == 'Pincode') {
			                	helpElement.textContent = 'Invalid Pincode';
			                } else if(fldLangVal[i] == 'Mobile number') {
			                	helpElement.textContent = 'Invalid mobile number';
			                } else {
			                	helpElement.textContent = 'This field is required.';
			                }
			                fieldObj.focus();
			               	fieldObj.classList.add('invalid-input');
			                helpElement.classList.add('invalid-feedback');
			                return false;
			            } else if (fieldObj.nodeName == 'SELECT') {
			                if (fieldObj.options[fieldObj.selectedIndex].value == '-None-') {
			                    // Handle select error
			                    helpElement.textContent = fldLangVal[i] + ' cannot be none.';
			                    fieldObj.focus();
			                   	fieldObj.classList.add('invalid-input');
			                    helpElement.classList.add('invalid-feedback');
			                    return false;
			                }
			            } else if (fieldObj.type == 'checkbox') {
			                if (fieldObj.checked == false) {
			                    // Handle checkbox error
			                    helpElement.textContent = 'Please accept ' + fldLangVal[i];
			                    fieldObj.focus();
			                   	fieldObj.classList.add('invalid-input');
			                    helpElement.classList.add('invalid-feedback');
			                    return false;
			                }
			            }
			            
			            // Clear the error message if the field is valid
			            helpElement.textContent = '';
			            helpElement.classList.remove('invalid-feedback');
			            fieldObj.classList.remove('invalid-input');

			            try {
			                if (fieldObj.name == 'Last Name') {
			                    name = fieldObj.value;
			                }
			            } catch (e) {}
			        }
			    }
				if (!validateEmail250849000000947058()) {
					return false;
				}
				document.querySelector('.crmWebToEntityForm .formsubmit').setAttribute('disabled', true);
			}

			function tooltipShow250849000000947058(el) {
				var tooltip = el.nextElementSibling;
				var tooltipDisplay = tooltip.style.display;
				if (tooltipDisplay == 'none') {
					var allTooltip = document.getElementsByClassName('zcwf_tooltip_over');
					for (i = 0; i < allTooltip.length; i++) {
						allTooltip[i].style.display = 'none';
					}
					tooltip.style.display = 'block';
				} else {
					tooltip.style.display = 'none';
				}
			}
		</script>
	</div>
<?php
	$content = ob_get_clean();
	return $content;
}