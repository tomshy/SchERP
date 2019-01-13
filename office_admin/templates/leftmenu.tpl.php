<script type="text/javascript" src="includes/js/leftmenu/jquery_google.js"></script>
<script type="text/javascript" src="includes/js/leftmenu/ddaccordion.js"></script>
<script type="text/javascript">
ddaccordion.init({
  headerclass: "expandable", //Shared CSS class name of headers group that are expandable
  contentclass: "categoryitems", //Shared CSS class name of contents group
  revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
  mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
  collapseprev: true, //Collapse previous content (so only one open at any time)? true/false
  defaultexpanded: [0], //index of content(s) open by default [index1, index2, etc]. [] denotes no content
  onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
  animatedefault: false, //Should contents open by default be animated into view?
  persiststate: true, //persist state of opened contents within browser session?
  toggleclass: ["", "openheader"], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
  togglehtml: ["prefix", "", ""], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
  animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
  oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
    //do nothing
  },
  onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
    //do nothing
  }
})
</script>
<style type="text/css">
.arrowlistmenu{
width: 160px; /*width of accordion menu*/
}
.arrowlistmenu .menuheader{ /*CSS class for menu headers in general (expanding or not!)*/
font: bold 10px Arial, Helvetica, sans-serif;
color: #000000;
/*background:url(js/titlebar.png);*/
/*background: black url(titlebar.png) repeat-x center left;*/
/*background-color:#999999;*/
margin-bottom: 2px; /*bottom spacing between header and rest of content*/
text-transform: uppercase;
padding: 3px 0 0px 0px; /*header text is indented 10px*/
cursor: hand;
cursor: pointer;
font-size: 100%;
}
.arrowlistmenu .openheader{ /*CSS class to apply to expandable header when it's expanded*/
/*background-image: url(js/titlebar-active.png);*/
/*background-color:#555B5C;*/
}
.arrowlistmenu ul{ /*CSS for UL of each sub menu*/
list-style-type: none;
margin: 0;
padding: 0;
margin-bottom: 2px; /*bottom spacing between each UL and rest of content*/
}
.arrowlistmenu ul li{
padding-bottom: 2px; /*bottom spacing between menu items*/
color: #000000;
display: block;
padding: 2px 0;
padding-left: 12px;
text-decoration: none;
font-size: 90%;
font: bold 12px Arial, Helvetica, sans-serif;
}
.arrowlistmenu ul li a{
color: #000000;
display: block;
padding: 0 0;
padding-left: 20px; /*link text is indented 19px*/
text-decoration: none;
font-size: 90%;
font: normal 12px Arial, Helvetica, sans-serif;
}
.arrowlistmenu ul li a:visited{
/*color: #555B5C;*/
}
.arrowlistmenu ul li a:hover{ /*hover state CSS*/
color: #990000;
}
.mainsidelink {
color: #000000;
text-decoration:none;
}

.mainsidelink :hover{
color: #000000;
text-decoration:none;
}
</style>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="35" align="center" class="left_admin">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top"><div class="arrowlistmenu">

<?php
// top permitions from apex

$edit_mod = $db->getRow("SELECT * FROM es_modules_alloted  WHERE id=1");
$max_students=$edit_mod['max_no_students'];
$max_courses=$edit_mod['max_no_courses'];
$modules_permissions=$edit_mod['modules_permissions'];

$top_level_permissions= explode(',', $modules_permissions);

$admin_permissions = explode(',', $permissions['admin_permissions']);

        ?>
<?php
          if (in_array('1_p', $top_level_permissions) ){
  if (in_array('1_p', $admin_permissions) ){?>
<div class="menuheader expandable">

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="37px"><img src="images/administrator_32.png" /></td>
    <td>Administration</td>
  </tr>
</table>
</div>
<ul class="categoryitems">
<li><a href="?pid=42&action=adminlist">Admin List</a></li>
<?php if (in_array("1_3", $admin_permissions)) {?><li><a href="?pid=42&action=addadmin">Add Admin</a></li><?php }?>
</ul>
<?php } }
if (in_array('2_p', $top_level_permissions) ){
if (in_array('2_p', $admin_permissions)){?>

<div class="menuheader expandable">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="37px"><img src="images/setup_32.png" /></td>
    <td > Setup</td>
  </tr>
</table></div>
<ul class="categoryitems">
<li><a href="?pid=22&action=school_details">Institute Details</a></li>
<li><a href="?pid=20&action=manageclasses">Add Classes/Subject Groups/Subjects</a></li>
<!--<li><a href="?pid=97&action=list">Add Classes</a></li>-->
<!--<li><a href="?pid=20&action=htmlcode">API for Login</a></li>-->
<!--<li><a href="?pid=121&page=castecategory">Caste </a></li>-->
<!--<li><a href="?pid=94&page=caste">Caste Categories</a></li>-->
<!--<li><a href="?pid=121&page=cat">Categories & Caste </a></li>-->
<!--<li><a href="?pid=94&page=int">Other Institutes</a></li>-->
<!--<li><a href="?pid=94&page=transport">Student Pick-up Point </a></li>-->
<!--<li><a href="?pid=94&page=subject&action=list">Subjects Categorization</a></li>-->
</ul>
<?php }?>
<?php }
// Certificates
 // Government
 /*?>if (in_array('35_p', $top_level_permissions) ){if (in_array('35_p', $admin_permissions)){?>
<div class="menuheader expandable"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="37px"><img src="images/government_icon.jpg" width="30" height="35" /></td>
    <td >Government Rules</td>
  </tr>
</table></div>
<ul class="categoryitems">
<li><a href="?pid=122&action=list">Association Executive Committee </a></li>
<!--<li><a href="?pid=120&action=list">Bonafied for Bank_Acount</a></li>
<li><a href="?pid=119&action=list">Bonafied for IncomeTax Rebate</a></li>-->
<? //if (in_array('5_6', $admin_permissions)){?>
<li><a href="?pid=123&action=list">School Committee</a></li>
<?php //} ?>
<li><a href="?pid=126&action=list">Academic Council</a></li>
<li><a href="?pid=128&action=list">Meeting</a></li>
<li><a href="?pid=130&action=list">School Year Planning</a></li>
</ul><?php */?>

 <?php //}//} // end of certificate ?>

<?php

 if (in_array('4_p', $top_level_permissions) ){if (in_array('4_p', $admin_permissions)){?>
<div class="menuheader" style="cursor: default">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
    <td width="37px"><img src="images/preadmission_32.png" /></td>
    <td ><a href="?pid=5&action=pre_admission" class="mainsidelink">Admission Form</a></td>
  </tr>
  <!--<li><a href="?pid=107&action=feedet">New Registration Form</a></li>-->
</table></div>
<?php } }if (in_array('5_p', $top_level_permissions) ){if (in_array('5_p', $admin_permissions)){?>
<div class="menuheader expandable"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="37px"><img src="images/student_32.png" /></td>
    <td >Student</td>
  </tr>
</table></div>
<ul class="categoryitems">

<li><a href="?pid=21&action=serchclass">Search Student Record</a></li>

<li><a href="?pid=21&action=classrecards">Update Student Record</a></li>
<!--<li><a href="?pid=21&action=malefemalestudents">Male-Female</a></li>-->
<?php if (in_array('5_5', $admin_permissions)){?>
<li><a href="?pid=23&action=issuetcforstudent">Transferred Students</a></li>
<?php } ?>

<!--<li><a href="?pid=3&action=cast_list">Category&nbsp;Wise&nbsp;Data </a></li>
<li><a href="?pid=3&action=age_wise">Age&nbsp;Wise&nbsp;Data</a></li>-->

<li><a href="?pid=21&action=studentlist2">Students&nbsp;List&nbsp;</a></li>
</ul>

<?php }}if (in_array('10_p', $top_level_permissions) ){if (in_array('10_p', $admin_permissions)){?>
<div class="menuheader expandable"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="37px"><img src="images/staff_32.png" /></td>
    <td>STAFF</td>
  </tr>
</table></div>
<ul class="categoryitems">

<li><a href="?pid=49&action=department">Add Department</a></li>
<li><a href="?pid=46&action=addnewstaff">Add Staff</a></li>
<li><a href="?pid=15&action=staffviewing">View Staff</a></li>
<li><a href="?pid=64&action=asignincharge">Assign Incharge</a></li>
</ul>
<?php }}if (in_array('6_p', $top_level_permissions) ){if (in_array('6_p', $admin_permissions)){?>
<div class="menuheader expandable"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="37px"><img src="images/feepayment_32.png" /></td>
    <td >Fee Payment</td>
  </tr>
</table></div>
<ul class="categoryitems">
<li><a href="?pid=17&action=createfeetypes" >Add Fees Category</a></li>
<!--<li><a href="?pid=79&action=addfine"><span id="internal-source-marker_0.5963001342130408">Late Fee Fine</span></a></li>-->
<!--<li><a href="?pid=79&action=add_lastdate">Fee Due Date</a></li>-->
<li><a href="?pid=17&action=viewfees">Fee Details</a></li>
<?php /*?><li><a href="?pid=105&action=add_examfee"> Add Exam Fee</a></li>
<?php if(in_array('6_20',$admin_permissions)){?>
<li><a href="?pid=105&action=view_list">Exam Fee Collection</a></li>
<?php } ?>
<?php */?><li><a href="?pid=40&action=payfee">Pay Fee</a></li>
<li><a href="?pid=40&action=receipt_list">Print Receipt</a></li>
<!--<li><a href="?pid=40&action=fee_card">Student Fee Card</a></li>-->
<li><a href="?pid=40&action=ad_fee_card">Student Fee Card</a></li>
<!--<li><a href="?pid=40&action=classwise_fee_card">Class Wise Fee Status</a></li>-->
<li><a href="?pid=40&action=ad_classwise_fee_card">Class Wise Fee Status</a></li>
<li><a href="?pid=40&action=feepaidlist&pre_class=ALL">Paid Fee List</a></li>
<li><a href="?pid=40&action=fee_paid_list">Category Wise Paid Fee</a></li>
<!--<li><a href="?pid=40&action=classwisepayment_list">Paid Fee [Class wise]</a></li>
<li><a href="?pid=40&action=categorywisefee">Category Wise Details</a></li>
<li><a href="?pid=40&action=outstandingfees&pre_class=ALL">Outstanding Fees</a></li>
<li><a href="?pid=40&action=installment_fines">Late Fee Paid</a></li>
<?php //if(in_array('6_14',$admin_permissions)){?>
<li><a href="?pid=79&action=add_otherfines"> Add Misc. Fine</a></li>
<?php //}?>
<li><a href="?pid=79&action=view_list">Misc Fine Collection</a></li>
<li><a href="?pid=79&action=view_oldbalances">View Old Balances</a></li>-->
</ul>
<?php }} if (in_array('15_p', $top_level_permissions) ){if(in_array('15_p', $admin_permissions)){?>
<div class="menuheader expandable">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
    <td width="37px"><img src="images/time_table_32.png" /></td>
    <td >Time Table</td>
  </tr>
</table></div>
<ul class="categoryitems">
<!--<li><a href="?pid=31&action=timetable">Class wise timetables</a></li>
<li><a href="?pid=90&action=timetable">Staff wise timetables</a></li>
<li><a href="?pid=104&action=addtmimes">Period&nbsp;Durations</a></li>
<li><a href="?pid=104&action=timetable">Time&nbsp;Tables</a></li>
<li><a href="?pid=104&action=staff_wise">Staff&nbsp;Time&nbsp;Table</a></li>-->
<li><a href="?pid=106&action=timetable">Class wise timetables</a></li>
<li><a href="?pid=90&action=staff">Staff wise timetables</a></li>
<!--<li><a href="#" onclick="window.open('?pid=90&action=free_staff')">View Free Staff</a></li>-->
</ul>
<?php }}if (in_array('17_p', $top_level_permissions) ){if (in_array('17_p', $admin_permissions)){?>
<div class="menuheader expandable"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="37px"><img src="images/exam_32.png" /></td>
    <td >Examination</td>
  </tr>
</table></div>
<ul class="categoryitems">
<li><a href="?pid=47&action=manageexams" >Add Exams</a></li>
<?php if (in_array("17_1", $admin_permissions)) {?>
<li><a href="?pid=36&action=createxam">Create Exam</a></li>
<?php }?>
<?php if (in_array("17_6", $admin_permissions)) {?>
<li><a href="?pid=36&action=createxamexport">Export Exam</a></li>
<?php }?>
<?php if (in_array("17_2", $admin_permissions)) {?>
<li><a href="?pid=36&action=marksentry">Enter Marks</a></li>
<?php }?>
<?php if (in_array("17_3", $admin_permissions)) {?>
<!--<li><a href="?pid=36&action=stdmarksentry">Studentwise Marks</a></li>-->
<?php }?>
<?php if (in_array("17_7", $admin_permissions)) {?>
<li><a href="?pid=36&action=allstudents">Report</a></li>
<?php }?>
<?php if (in_array("17_4", $admin_permissions)) {?>
<li><a href="?pid=36&action=allstudentsexport">Export Report</a></li>
<?php }?>
<?php if (in_array("17_5", $admin_permissions)) {?>
<li><a href="?pid=36&action=stud_report">Student Report</a></li>
<?php }?>
<?php if (in_array("17_8", $admin_permissions)) {?>
<li><a href="?pid=36&action=chatreports">Examination Report</a></li>
<?php }?>
<?php if (in_array("17_9", $admin_permissions)) {?>
<li><a href="?pid=36&action=chatreports_schoolwise">Institute Report</a></li>
<?php }?>
<li><a href="?pid=100">Student Ranks</a></li>
<li><a href="?pid=102"></a></li>
</ul>
<?php } }if (in_array('18_p', $top_level_permissions) ){if (in_array('18_p', $admin_permissions)){?>
<div class="menuheader expandable"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="37px"><img src="images/attendance_32.png" /></td>
    <td >Attendance</td>
  </tr>
</table></div>
<ul class="categoryitems">
<!--<li><a href="?pid=27&action=slip">Attendance Slips</a></li>-->
<li><a href="?pid=27&action=stud_attend">Student Attendance</a></li>
<li><a href="?pid=27&action=edit_stud_attendence">Edit Attendance</a></li>
<li><a href="?pid=27&action=staff_attend">Staff Attendance</a></li>
<li><a href="?pid=27&action=edit_staff_attendence">Edit Attendance</a></li>
<li><a href="?pid=27&action=stud_report">Student Report</a></li>
<li><a href="?pid=27&action=class_report">Class Report</a></li>

<li><a href="?pid=134&action=class-report1">Class Report1</a></li>

<li><a href="?pid=27&action=staff_wise_report">Employee Report</a></li>
<li><a href="?pid=27&action=staff_report">Staff  Report</a></li>
<li><a href="?pid=27&action=descriptive_notes">Descriptive Notes</a></li>
</ul>
<?php }}
if (in_array('19_p', $top_level_permissions) ){if (in_array('19_p', $admin_permissions)){?>
<div class="menuheader expandable"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="37px"><img src="images/hostel_32.png" /></td>
    <td >Dormitory</td>
  </tr>
</table></div>
<ul class="categoryitems">
<li><a href="?pid=19&action=addbuilding">Add Building</a></li>
<li><a href="?pid=19&action=addroom">Add Bed</a></li>
<li><a href="?pid=19&action=buildreport">Bed Availability</a></li>
<li><a href="?pid=19&action=student_roomallotment">Bed Allocation</a></li>
<li><a href="?pid=19&action=view_persons">View Dorm Persons</a></li>
<!--<li><a href="?pid=19&action=collect_items">Collect Items</a></li>
<li><a href="?pid=19&action=prepare_bill">Prepare Bill</a></li>-->
<li><a href="?pid=19&action=viewdetails">View Details</a></li>
</ul>
<?php }}if (in_array('21_p', $top_level_permissions) ){if (in_array('21_p', $admin_permissions)){?>
<div class="menuheader expandable"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="37px"><img src="images/sms_32.png" /></td>
    <td >SMS</td>
  </tr>
</table></div>
<ul class="categoryitems">
<?php if (in_array("21_1", $admin_permissions)) {?><li><a href="?pid=62&action=smstostaff">To Staff</a></li><?php }?>
<?php if (in_array("21_2", $admin_permissions)) {?><li><a href="?pid=62&action=smstostudents">To Students</a></li><?php }?>
<?php if (in_array("21_1", $admin_permissions)) {?><li><a href="?pid=62&action=smstoall">To All</a></li><?php }?>
<?php /*?><li><a href="?pid=62&action=balance">Check Balance</a></li><?php */?>
<?php if (in_array("21_3", $admin_permissions)) {?><li><a href="?pid=62&action=enquirylist">Enquiry List</a></li><?php }?>
<?php ?><li><a href="?pid=62&action=smssetup">SMS Setup</a></li><?php ?>
</ul>
 <?php }}?>


</div></td>
  </tr>
</table>

