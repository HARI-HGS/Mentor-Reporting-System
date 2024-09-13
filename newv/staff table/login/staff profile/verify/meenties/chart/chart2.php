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
          ['<?php echo details('meentiesname','meenties2','name1','name1');?>', <?php echo get_count('data21','filedownload','filename'); ?>, <?php echo get_count('data21', 'fileworkshop', 'workshop'); ?>, <?php echo get_count('data21','filepaper','paper'); ?>, <?php echo get_count('data21','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties2','name2','name2');?>', <?php echo get_count('data22','filedownload','filename'); ?>, <?php echo get_count('data22','fileworkshop','workshop'); ?>, <?php echo get_count('data22','filepaper','paper'); ?>,<?php echo get_count('data22','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties2','name3','name3');?>', <?php echo get_count('data23', 'filedownload', 'filename'); ?>, <?php echo get_count('data23','fileworkshop','Workshop'); ?>, <?php echo get_count('data23','filepaper','paper'); ?>,<?php echo get_count('data23','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties2','name4','name4');?>', <?php echo get_count('data24', 'filedownload', 'filename'); ?>, <?php echo get_count('data24','fileworkshop','Workshop'); ?>, <?php echo get_count('data24','filepaper','paper'); ?>,<?php echo get_count('data24','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties2','name5','name5');?>', <?php echo get_count('data25', 'filedownload', 'filename'); ?>, <?php echo get_count('data25','fileworkshop','Workshop'); ?>, <?php echo get_count('data25','filepaper','paper'); ?>,<?php echo get_count('data25','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties2','name6','name6');?>', <?php echo get_count('data26', 'filedownload', 'filename'); ?>, <?php echo get_count('data26','fileworkshop','Workshop'); ?>, <?php echo get_count('data26','filepaper','paper'); ?>,<?php echo get_count('data26','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties2','name7','name7');?>', <?php echo get_count('data27', 'filedownload', 'filename'); ?>, <?php echo get_count('data27','fileworkshop','Workshop'); ?>, <?php echo get_count('data27','filepaper','paper'); ?>,<?php echo get_count('data27','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties2','name8','name8');?>', <?php echo get_count('data28', 'filedownload', 'filename'); ?>, <?php echo get_count('data28','fileworkshop','Workshop'); ?>, <?php echo get_count('data28','filepaper','paper'); ?>,<?php echo get_count('data28','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties2','name9','name9');?>', <?php echo get_count('data29', 'filedownload', 'filename'); ?>, <?php echo get_count('data29','fileworkshop','Workshop'); ?>, <?php echo get_count('data29','filepaper','paper'); ?>,<?php echo get_count('data29','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties2','name10','name10');?>', <?php echo get_count('data30', 'filedownload', 'filename'); ?>, <?php echo get_count('data30','fileworkshop','Workshop'); ?>, <?php echo get_count('data30','filepaper','paper'); ?>,<?php echo get_count('data30','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties2','name11','name11');?>', <?php echo get_count('data31', 'filedownload', 'filename'); ?>, <?php echo get_count('data31','fileworkshop','Workshop'); ?>, <?php echo get_count('data31','filepaper','paper'); ?>,<?php echo get_count('data31','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties2','name12','name12');?>', <?php echo get_count('data32', 'filedownload', 'filename'); ?>, <?php echo get_count('data32','fileworkshop','Workshop'); ?>, <?php echo get_count('data32','filepaper','paper'); ?>,<?php echo get_count('data32','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties2','name13','name13');?>', <?php echo get_count('data33', 'filedownload', 'filename'); ?>, <?php echo get_count('data33','fileworkshop','Workshop'); ?>, <?php echo get_count('data33','filepaper','paper'); ?>,<?php echo get_count('data33','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties2','name14','name14');?>', <?php echo get_count('data34', 'filedownload', 'filename'); ?>, <?php echo get_count('data34','fileworkshop','Workshop'); ?>, <?php echo get_count('data34','filepaper','paper'); ?>,<?php echo get_count('data34','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties2','name15','name15');?>', <?php echo get_count('data35', 'filedownload', 'filename'); ?>, <?php echo get_count('data35','fileworkshop','Workshop'); ?>, <?php echo get_count('data35','filepaper','paper'); ?>,<?php echo get_count('data35','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties2','name16','name16');?>', <?php echo get_count('data36', 'filedownload', 'filename'); ?>, <?php echo get_count('data36','fileworkshop','Workshop'); ?>, <?php echo get_count('data36','filepaper','paper'); ?>,<?php echo get_count('data36','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties2','name17','name17');?>', <?php echo get_count('data37', 'filedownload', 'filename'); ?>, <?php echo get_count('data37','fileworkshop','Workshop'); ?>, <?php echo get_count('data37','filepaper','paper'); ?>,<?php echo get_count('data37','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties2','name18','name18');?>', <?php echo get_count('data38', 'filedownload', 'filename'); ?>, <?php echo get_count('data38','fileworkshop','Workshop'); ?>, <?php echo get_count('data38','filepaper','paper'); ?>,<?php echo get_count('data38','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties2','name19','name19');?>', <?php echo get_count('data39', 'filedownload', 'filename'); ?>, <?php echo get_count('data39','fileworkshop','Workshop'); ?>, <?php echo get_count('data39','filepaper','paper'); ?>,<?php echo get_count('data39','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties2','name20','name20');?>', <?php echo get_count('data40', 'filedownload', 'filename'); ?>, <?php echo get_count('data40','fileworkshop','Workshop'); ?>, <?php echo get_count('data40','filepaper','paper'); ?>,<?php echo get_count('data40','filesports','sports'); ?>]
       
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
