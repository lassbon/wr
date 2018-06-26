<?php
include("header.php");
include("class_user.php");
?>
<script src="js/jquerypagination.js"></script>
<script>
$(document).ready(function() { 
    $("table") 
    .tablesorter({widthFixed: true, widgets: ['zebra']}) 
    .tablesorterPager({container: $("#pager")}); 
}); 
</script>
		 <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="index.html">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Users</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page">
				<table class="table" style="color: #000;font-family: 'Muli-Regular'">
				<thead>
					<tr>
						<th style="width:50px"># </th>
						<th> Username</th>
						<th> Email</th>
						<th> Phone Number</th>
						<th> Points</th>
						<th> date</th>
					
					</tr>
				</thead>
				<tbody>
							
				<?php
				$allUser = $userOBJ ->getAllUser();
				//var_dump($allUser);
				foreach($allUser as $eachUser){
					if(!($eachUser['fullname'])){
						$eachUser['fullname']="-";
					}
					if(!($eachUser['phone_number'])){
						$eachUser['phone_number']="-";
					}
					echo " <tr class='table-row'>
							  <td class='table-text'> </td>
							 <td class='table-text'>".  $eachUser['fullname']." </td>
							 <td class='table-text'>".  $eachUser['email'] ."</td>
							<td class='table-text'>".  $eachUser['phone_number'] ."</td>
							<td class='table-text'> 10</td>
							 <td class='table-text'>".  $eachUser['date']  ."</td>
							 
						  </tr>";
				}
				?>
					
				</tbody>
				
				</table>
	        	

			</div>
	       </div>
	
	
	
	<?php include("footer.php"); ?>