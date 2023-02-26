<?php
session_start();
if (!isset($_SESSION['stu_login']))
{
  ?>
  <script>
    alert("You are not logged in");
    window.location.href = "../Frontend1/student_login.php";
  </script>

  <?php
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<!-- JS for jQuery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
	<!-- bootstrap css and js -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<!-- CSS for full calender -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" rel = "stylesheet"/>
	<!-- JS for full calender -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>


</head>
<body>
    <div class ="container">
        <div class ="row">
            <div class="col-lg-12">
                <br>
                <br>
                <h3>Welcome to your dashboard</h3>
                
                <button class="logged"><a href="../backend/logout.php">logout</a></button>
               
                <div id="calendar"></div>  
            </div>
        </div>
    </div>
    
   
</body>
<style>
    .logged{
        margin-left:1050px;
        margin-bottom: 20px;
        border-color: transparent;
        border-radius: 5px;
        border:2px;
    }
    .logged:hover{
        cursor:pointer;
        background-color:#EEEEEE;
    }
    </style>
<script>
$(document).ready(function() {
	display_events();
}); 

function display_events() {
	var events = new Array();
$.ajax({
    url: 'display_event.php',  
    dataType: 'json',
    success: function (response) {
         
    var result=response.data;
    $.each(result, function (i, item) {
    	events.push({
            event_id: result[i].id,
            srl_id: result[i].srl_id,
            date: result[i].date,
            title: result[i].meal,
            color: result[i].color,
           
        }); 	
    })
	var calendar = $('#calendar').fullCalendar({
	    defaultView: 'month',
		 timeZone: 'local',
	    editable: false,
        selectable: false,
		selectHelper: true,
       
        events: events,
	    
		}); 
	  },
	  error: function (xhr, status) {
		console.log(status);
		console.log(xhr);
	    alert(status); 
		  }
	});	
}

</script>
</html>