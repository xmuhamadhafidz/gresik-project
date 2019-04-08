
 <?php  
include "../connection.php";

 $query = mysqli_query($db, "SELECT nama, count(*) as number FROM ma GROUP BY nama");  
 $result = $query;  
 ?>  
 <!DOCTYPE html>  
           
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['nama', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["nama"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.ScatterChart(document.getElementById('piechart3'));  
                chart.draw(data, options);  
           }  
           </script>  

    

                <div id="piechart3" style="width: 385px; height: 200px;"></div>  

