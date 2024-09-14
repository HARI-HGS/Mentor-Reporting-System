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
          ['<?php echo details('meentiesname','meenties3','name1','name1');?>', <?php echo get_count('data41','filedownload','filename'); ?>, <?php echo get_count('data41', 'fileworkshop', 'workshop'); ?>, <?php echo get_count('data41','filepaper','paper'); ?>, <?php echo get_count('data41','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties3','name2','name2');?>', <?php echo get_count('data42','filedownload','filename'); ?>, <?php echo get_count('data42','fileworkshop','workshop'); ?>, <?php echo get_count('data42','filepaper','paper'); ?>,<?php echo get_count('data42','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties3','name3','name3');?>', <?php echo get_count('data43', 'filedownload', 'filename'); ?>, <?php echo get_count('data43','fileworkshop','Workshop'); ?>, <?php echo get_count('data43','filepaper','paper'); ?>,<?php echo get_count('data43','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties3','name4','name4');?>', <?php echo get_count('data44', 'filedownload', 'filename'); ?>, <?php echo get_count('data44','fileworkshop','Workshop'); ?>, <?php echo get_count('data44','filepaper','paper'); ?>,<?php echo get_count('data44','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties3','name5','name5');?>', <?php echo get_count('data45', 'filedownload', 'filename'); ?>, <?php echo get_count('data45','fileworkshop','Workshop'); ?>, <?php echo get_count('data45','filepaper','paper'); ?>,<?php echo get_count('data45','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties3','name6','name6');?>', <?php echo get_count('data46', 'filedownload', 'filename'); ?>, <?php echo get_count('data46','fileworkshop','Workshop'); ?>, <?php echo get_count('data46','filepaper','paper'); ?>,<?php echo get_count('data46','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties3','name7','name7');?>', <?php echo get_count('data47', 'filedownload', 'filename'); ?>, <?php echo get_count('data47','fileworkshop','Workshop'); ?>, <?php echo get_count('data47','filepaper','paper'); ?>,<?php echo get_count('data47','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties3','name8','name8');?>', <?php echo get_count('data48', 'filedownload', 'filename'); ?>, <?php echo get_count('data48','fileworkshop','Workshop'); ?>, <?php echo get_count('data48','filepaper','paper'); ?>,<?php echo get_count('data48','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties3','name9','name9');?>', <?php echo get_count('data49', 'filedownload', 'filename'); ?>, <?php echo get_count('data49','fileworkshop','Workshop'); ?>, <?php echo get_count('data49','filepaper','paper'); ?>,<?php echo get_count('data49','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties3','name10','name10');?>', <?php echo get_count('data50', 'filedownload', 'filename'); ?>, <?php echo get_count('data50','fileworkshop','Workshop'); ?>, <?php echo get_count('data50','filepaper','paper'); ?>,<?php echo get_count('data50','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties3','name11','name11');?>', <?php echo get_count('data51', 'filedownload', 'filename'); ?>, <?php echo get_count('data51','fileworkshop','Workshop'); ?>, <?php echo get_count('data51','filepaper','paper'); ?>,<?php echo get_count('data51','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties3','name12','name12');?>', <?php echo get_count('data52', 'filedownload', 'filename'); ?>, <?php echo get_count('data52','fileworkshop','Workshop'); ?>, <?php echo get_count('data52','filepaper','paper'); ?>,<?php echo get_count('data52','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties3','name13','name13');?>', <?php echo get_count('data53', 'filedownload', 'filename'); ?>, <?php echo get_count('data53','fileworkshop','Workshop'); ?>, <?php echo get_count('data53','filepaper','paper'); ?>,<?php echo get_count('data53','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties3','name14','name14');?>', <?php echo get_count('data54', 'filedownload', 'filename'); ?>, <?php echo get_count('data54','fileworkshop','Workshop'); ?>, <?php echo get_count('data54','filepaper','paper'); ?>,<?php echo get_count('data54','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties3','name15','name15');?>', <?php echo get_count('data55', 'filedownload', 'filename'); ?>, <?php echo get_count('data55','fileworkshop','Workshop'); ?>, <?php echo get_count('data55','filepaper','paper'); ?>,<?php echo get_count('data55','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties3','name16','name16');?>', <?php echo get_count('data56', 'filedownload', 'filename'); ?>, <?php echo get_count('data56','fileworkshop','Workshop'); ?>, <?php echo get_count('data56','filepaper','paper'); ?>,<?php echo get_count('data56','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties3','name17','name17');?>', <?php echo get_count('data57', 'filedownload', 'filename'); ?>, <?php echo get_count('data57','fileworkshop','Workshop'); ?>, <?php echo get_count('data57','filepaper','paper'); ?>,<?php echo get_count('data57','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties3','name18','name18');?>', <?php echo get_count('data58', 'filedownload', 'filename'); ?>, <?php echo get_count('data58','fileworkshop','Workshop'); ?>, <?php echo get_count('data58','filepaper','paper'); ?>,<?php echo get_count('data58','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties3','name19','name19');?>', <?php echo get_count('data59', 'filedownload', 'filename'); ?>, <?php echo get_count('data59','fileworkshop','Workshop'); ?>, <?php echo get_count('data59','filepaper','paper'); ?>,<?php echo get_count('data59','filesports','sports'); ?>],
          ['<?php echo details('meentiesname','meenties3','name20','name20');?>', <?php echo get_count('data60', 'filedownload', 'filename'); ?>, <?php echo get_count('data60','fileworkshop','Workshop'); ?>, <?php echo get_count('data60','filepaper','paper'); ?>,<?php echo get_count('data60','filesports','sports'); ?>]
       
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
