<?php


include("header.php");
?>





<div role="main">


	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="dashboard_graph">

				<div class="row x_title">
					<div class="col-md-6">
						<h3>Mobile No Information<small></small></h3>
<br/>
<br/>
						<form id="form">

		<label>Phone</label>
		<input type="text" name="phone1" style="width:30px" value="+92" disabled />
			<input type="text" name="phone" id="phone" style="width:150px" />

		<input type="button" value="Search" id="display" onclick="getRecord()"/>
	</form>

					</div>
					<br/>
					<br/>

					</div>
					<div id="messages">

					</div>
				<div >

			</div>
		</div>

</div>
<script type="text/javascript">
function getRecord() {
		 $phone = $("#phone").val();

		 $.ajax({    //create an ajax request to display.php
			 type: "POST",
			 url: "ajaxPost.php",
			 data: {"phone":$phone},
			 dataType: "html",   //expect html to be returned
			 success: function(response){
					 $("#messages").html(response);
					 //alert(response);
			 }

	 });
}

</script>
<?php
include("footer.php");
?>
