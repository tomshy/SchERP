<?php
$home_image  = str_replace("css", "", $_SESSION['eschools']['user_theme']);

?>
<html>
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://d3js.org/d3.v5.min.js"></script>
</head>
<body>
<?php 
if($action=='birthday_students')
{?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td height="3" colspan="3"></td>
    </tr>
    
    <tr>
        <td height="25" colspan="3" class="bgcolor_02"><strong>&nbsp;&nbsp;<span id="internal-source-marker_0.052443267584382114">This Month Student's Birthday List</span></strong></td>
    </tr>
    
    <tr>
        <td width="1" class="bgcolor_02"></td>
        <td align="left" valign="top"><br />
            <table width="100%" border="0">
                <tr height="30" class="bgcolor_02">
                    <td width="7%" align="center" valign="middle">&nbsp;S No</td>
                    <td width="26%" align="left" valign="middle">&nbsp;Student Name</td>
                    <td width="11%" align="left" valign="middle">&nbsp;Class</td>
                    <td width="32%" align="left" valign="middle">&nbsp;Father Name</td>
                    <td width="9%" align="center" valign="middle">&nbsp;Reg ID </td>
                    <td width="15%" align="center" valign="middle">&nbsp;DOB</td>
                </tr>
                <?php 
                
                //$students_det = $db->getrows($sql_todaybirth);
                
                
                /*if(count($students_det)>=1){
                $i=0; 
                foreach($students_det as $each)
                {
                //  echo $each['es_preadmissionid'];
                
                list($year, $month) = explode('-', date('Y-n'));
                $date = getdate();
                $year = $date['year'];
                $month = $date['mon'];
                echo substr($each['pre_dateofbirth'],5,2);
                if(substr($each['pre_dateofbirth'],5,2)==$month)
                {
                $i++;                
                ?>
                <tr>
                <td>&nbsp;<?php echo $i;?></td>
                <td>&nbsp;<?php echo ucwords($each['pre_name']);?></td>
                <td>&nbsp;<?php echo classname($each['pre_class']);?></td>
                <td>&nbsp;<?php echo ucwords($each['pre_fathername']);?></td>
                
                </tr>
                
                <?php
                }
                
                
                }
                
                }*/
                //array_print($students_det);


   if(count($students_det)>=1)
   {
        $i=0;
        foreach($students_det as $each)
        {
            list($year, $month) = explode('-', date('Y-n'));
            $date = getdate();
            $year = $date['year'];
            $month = $date['mon'];
 
            //echo substr($each['pre_dateofbirth'],5,2);

            if(substr($each['pre_dateofbirth'],5,2)==$month)
            {
                $i++;
?>
                <tr>
                    <td align="center" valign="middle">&nbsp;<?php echo $i;?></td>
                    <td align="left" valign="middle">&nbsp;<?php echo ucwords($each['pre_name']);?></td>
                    <td align="left" valign="middle">&nbsp;<?php echo classname($each['pre_class']);?></td>
                    <td align="left" valign="middle">&nbsp;<?php echo ucwords($each['pre_fathername']);?></td>
                    <td align="center" valign="middle">&nbsp;
                    <?php echo ucwords($each['es_preadmissionid']);
                    /*  $section_det1 = "SELECT * FROM es_sections_student SS , es_sections S WHERE SS.student_id='".$each['es_preadmissionid']."' AND SS.course_id='".$each['pre_class']."' AND SS.section_id=S.section_id ";
                    //   $section_det=$db->getrows(section_det1);
                    $res=mysql_query($section_det1);
                    $row=mysql_fetch_array($res);
                    echo $row['section_name'];*/
                    /*?>     
                    if($section_det['section_name']!=""){
                    echo ucwords($section_det['section_name']);}else{echo "---";}?></td>
                    <td>&nbsp;<?php  if($section_det['roll_no']!=""){
                    echo $section_det['roll_no'];}else{echo "---";}?><?php */?></td>
                    <td align="center" valign="middle">&nbsp;<?php echo displaydate($each['pre_dateofbirth']);?></td>
                </tr>
<?php       }// End of if(substr($each['pre_dateofbirth'],5,2)==$month)
        }// End of foreach($students_det as $each)
    }//End of if(count($students_det)>=1)
    else
    {
?>
        <tr>
            <td colspan="6" align="center">No Students Found</td>
        </tr>
<?php
    }
?>
</table>
              </td>
                <td width="1" class="bgcolor_02"></td>
              </tr>
                <td height="1" colspan="3" class="bgcolor_02"></td>
                </tr>
            </table>
<?php
}//End of if($action=='birthday_students')
else
{?>
    <table width="100%" height="144" border="0" cellspacing="0" cellpadding="0">
        <tr height="100">
            <td valign="top">
                <table>
                    <tr><td rowspan="2"><i style="font-size:60px" class="fas fa-user-graduate"></i></td><td align="center"><?php echo count($student_num);?><hr></td></tr>
                    <tr><td>Students</td></tr>
                </table>
            </td>            
            <td valign="top">
                <table>
                    <tr><td rowspan="2"><i style="font-size:60px" class="fas fa-users"></i></td><td align="center"><?php echo count($staff_num);?><hr></td></tr>
                    
                    <tr><td>Staff</td></tr>
                </table>
            </td>
            <td valign="top">
                <table>
                    <tr><td rowspan="2"><i style="font-size:60px" class="fas fa-school"></i></td><td align="center"><?php echo count($class_num);?><hr></td></tr>
                    
                    <tr><td>Classes</td></tr>
                </table>
            </td>
            <td valign="top">
                <table>
                    <tr><td rowspan="2"><i style="font-size:60px" class="fas fa-dollar-sign"></i></td><td align="center">Ksh 100,000,000<hr></td></tr>
                    
                    <tr><td>Fee Balance</td></tr>
                </table>
            </td>
        </tr>
        <tr height="5">
            
            <td valign="top"><h2>KCSE Performance - last 5 years</h2></td>

        </tr>
    </table>
    
    <div>
        <style type="text/css">
            svg{
                margin-left: 30px;
            }
            .bar:hover{
                background-color: brown;

            }
        </style>
        <svg></svg>
    </div>
<?php
}?>
</body>
<script type="text/javascript">
    var height=350;
    var width=630;
    var svg=d3.select("svg").attr("height",height+50).attr("width",width);
    
    d3.select("h2").style("color","darkblue");
    var kcse=[4.2,6.0,5.6,3.8,5.3];
    var y_scale=d3.scaleLinear()
            .domain([0,7])
            .range([350,0]);
    var years=[2013,2014,2015,2016,2017];
    var x_scale=d3.scaleBand()
            .domain([2013,2014,2015,2016,2017])
            .range([0,498]);
    var x_axis=d3.axisBottom()
            .scale(x_scale);
    var y_axis=d3.axisLeft()
            .scale(y_scale);
    var bar_width=100;
    var bar_height=55;
    var bar_graph=d3.select("svg")
            .selectAll("rect")
            .data(kcse)
            .enter()
            .append("rect")
            .attr("y", function(d){return y_scale(d);})
            .attr("width",bar_width-1)
            .attr("height",function(d){return height-y_scale(d);})
            .attr("transform", function(d, i) {
            var translate=[30+bar_width*i,0];
            return "translate("+translate+")";
          }).style("fill","#27d4a8");
    svg.selectAll("text")
        .data(kcse)
        .enter()
        .append("text")
        .text(function(d,i){return d;})
        .attr("y",function(d,i){return y_scale(d)-1;})//y position of bar labels
        .attr("x",function(d,i){return bar_width*i+70;})//x position of bar labels
        .style("fill","#999999");
    svg.append("g")
        .attr("transform","translate(30,0)")
        .call(y_axis);
    svg.append("g")
        .attr("transform","translate(30,"+height+")")
        .call(x_axis);
    svg.append('text')
      .attr('class', 'label')
      .attr('x', width / 2)
      .attr('y', height+45)
      .attr('text-anchor', 'middle')
      .text('Years');    
    </script>
</html>