<?php
$con  = mysqli_connect("localhost","root","","facultyadvisor");
 if (!$con) {
     # code...
    echo "Problem in database connection! Contact administrator!" ;
 }else{
         $sql ="SELECT sgpa,bck FROM acedemics";
         $result = mysqli_query($con,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) { 
 
            $sgpa[]  = $row['sgpa']  ;
            $bck[] = $row['bck'];
        }
 
 
 }
 
 
?>
<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Progress</title> 
    </head>
    <body>
        <div style="width:60%;height:20%;text-align:center">
            <h2 class="page-header" >Student Progress </h2>
            <div>SGPA </div>
            <canvas  id="chartjs_bar"></canvas> 
            <div>Backlogs </div>
            <canvas  id="chartjs_bar"></canvas> 
        </div>    
    </body>
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script type="text/javascript">
      var ctx = document.getElementById("chartjs_bar").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels:<?php echo json_encode($sgpa); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#5969ff",
                               "#333"
                               "#00000"
                                
                            ],
                            data:<?php echo json_encode($sgpa); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: true,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                        }
                    },
 
 
                }
                });
    </script>
    
</html>