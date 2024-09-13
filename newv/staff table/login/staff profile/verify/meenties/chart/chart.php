<?php
function get_count($db_name, $table_name, $column_name) {
    $conn = mysqli_connect('localhost', 'root', '', $db_name);
    $query = "SELECT COUNT(*) FROM $table_name WHERE $column_name IS NOT NULL";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    return $row[0];
}

function details($db_name,$table_name,$column_name,$name_input){
  $conn = mysqli_connect("localhost", "root", "",$db_name);
  $result = mysqli_query($conn, "SELECT $column_name FROM $table_name WHERE $column_name=$column_name");
  $col = mysqli_fetch_array($result);
  echo $col[$column_name];}

?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Name', 'Intership', 'Workshop', 'Paper Presentation','sports'],
          ['<?php echo details('meentiesname','meenties1','name1','name1');?>', <?php echo get_count('jairam','filedownload','filename'); ?>, <?php echo get_count('jairam', 'fileworkshop', 'workshop'); ?>, <?php echo get_count('jairam','filepaper','paper'); ?>, <?php echo get_count('jairam','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties1','name2','name2');?>', <?php echo get_count('hari','filedownload','intern'); ?>, <?php echo get_count('hari','fileworkshop','workshop'); ?>, <?php echo get_count('hari','filepaper','paper'); ?>,<?php echo get_count('hari','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties1','name3','name3');?>', <?php echo get_count('example', 'filedownload', 'filename'); ?>, <?php echo get_count('example','fileworkshop','Workshop'); ?>, <?php echo get_count('example','filepaper','paper'); ?>,<?php echo get_count('example','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties1','name4','name4');?>', <?php echo get_count('data4', 'filedownload', 'filename'); ?>, <?php echo get_count('data4','fileworkshop','Workshop'); ?>, <?php echo get_count('data4','filepaper','paper'); ?>,<?php echo get_count('data4','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties1','name5','name5');?>', <?php echo get_count('data5', 'filedownload', 'filename'); ?>, <?php echo get_count('data5','fileworkshop','Workshop'); ?>, <?php echo get_count('data5','filepaper','paper'); ?>,<?php echo get_count('data5','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties1','name6','name6');?>', <?php echo get_count('data6', 'filedownload', 'filename'); ?>, <?php echo get_count('data6','fileworkshop','Workshop'); ?>, <?php echo get_count('data6','filepaper','paper'); ?>,<?php echo get_count('data6','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties1','name7','name7');?>', <?php echo get_count('data7', 'filedownload', 'filename'); ?>, <?php echo get_count('data7','fileworkshop','Workshop'); ?>, <?php echo get_count('data7','filepaper','paper'); ?>,<?php echo get_count('data7','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties1','name8','name8');?>', <?php echo get_count('data8', 'filedownload', 'filename'); ?>, <?php echo get_count('data8','fileworkshop','Workshop'); ?>, <?php echo get_count('data8','filepaper','paper'); ?>,<?php echo get_count('data8','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties1','name9','name9');?>', <?php echo get_count('data9', 'filedownload', 'filename'); ?>, <?php echo get_count('data9','fileworkshop','Workshop'); ?>, <?php echo get_count('data9','filepaper','paper'); ?>,<?php echo get_count('data9','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties1','name10','name10');?>', <?php echo get_count('data10', 'filedownload', 'filename'); ?>, <?php echo get_count('data10','fileworkshop','Workshop'); ?>, <?php echo get_count('data10','filepaper','paper'); ?>,<?php echo get_count('data10','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties1','name11','name11');?>', <?php echo get_count('data11', 'filedownload', 'filename'); ?>, <?php echo get_count('data11','fileworkshop','Workshop'); ?>, <?php echo get_count('data11','filepaper','paper'); ?>,<?php echo get_count('data11','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties1','name12','name12');?>', <?php echo get_count('data12', 'filedownload', 'filename'); ?>, <?php echo get_count('data12','fileworkshop','Workshop'); ?>, <?php echo get_count('data12','filepaper','paper'); ?>,<?php echo get_count('data12','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties1','name13','name13');?>', <?php echo get_count('data13', 'filedownload', 'filename'); ?>, <?php echo get_count('data13','fileworkshop','Workshop'); ?>, <?php echo get_count('data13','filepaper','paper'); ?>,<?php echo get_count('data13','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties1','name14','name14');?>', <?php echo get_count('data14', 'filedownload', 'filename'); ?>, <?php echo get_count('data14','fileworkshop','Workshop'); ?>, <?php echo get_count('data14','filepaper','paper'); ?>,<?php echo get_count('data14','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties1','name15','name15');?>', <?php echo get_count('data15', 'filedownload', 'filename'); ?>, <?php echo get_count('data15','fileworkshop','Workshop'); ?>, <?php echo get_count('data15','filepaper','paper'); ?>,<?php echo get_count('data15','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties1','name16','name16');?>', <?php echo get_count('data16', 'filedownload', 'filename'); ?>, <?php echo get_count('data16','fileworkshop','Workshop'); ?>, <?php echo get_count('data16','filepaper','paper'); ?>,<?php echo get_count('data16','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties1','name17','name17');?>', <?php echo get_count('data17', 'filedownload', 'filename'); ?>, <?php echo get_count('data17','fileworkshop','Workshop'); ?>, <?php echo get_count('data17','filepaper','paper'); ?>,<?php echo get_count('data17','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties1','name18','name18');?>', <?php echo get_count('data18', 'filedownload', 'filename'); ?>, <?php echo get_count('data18','fileworkshop','Workshop'); ?>, <?php echo get_count('data18','filepaper','paper'); ?>,<?php echo get_count('data18','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties1','name19','name19');?>', <?php echo get_count('data19', 'filedownload', 'filename'); ?>, <?php echo get_count('data19','fileworkshop','Workshop'); ?>, <?php echo get_count('data19','filepaper','paper'); ?>,<?php echo get_count('data19','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties1','name20','name20');?>', <?php echo get_count('data20', 'filedownload', 'filename'); ?>, <?php echo get_count('data20','fileworkshop','Workshop'); ?>, <?php echo get_count('data20','filepaper','paper'); ?>,<?php echo get_count('data20','filesports','sports'); ?>]
       
        ]);

        var options = {
          chart: {
            title: 'Chart',
            subtitle: 'Mentees'
          },
          bars: 'horizontal', // Required for Material Bar Charts.
          series: {
            0: { // Configuration options for the first series (Intership)
              barWidth: '40%', // Adjust this value to increase or decrease the width of the bars
            },
            1: { // Configuration options for the second series (Workshop)
              barWidth: '40%', // Adjust this value to increase or decrease the width of the bars
            },
            2: { // Configuration options for the third series (Paper Presentation)
              barWidth: '40%', // Adjust this value to increase or decrease the width of the bars
            },
            3: { // Configuration options for the third series (Paper Presentation)
              barWidth: '40%', // Adjust this value to increase or decrease the width of the bars
            }
          },
          vAxis: {
            viewWindow: {
              min: 0.1, // Set a minimum value for the y-axis
            }
          }
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="barchart_material" style="width: 100%; height:550%;"></div>
  </body>
</html>
