<?php
    require 'header.php';
?>

    <div class="container">
        <div class="page-header">
            <h1>Experiment Results (All example data)</h1>
            <p>Hypothesis: </p>
        </div>

        <div class="row">
            <div class="span12">
                <h3>Quick Stats</h3>
            </div>
        </div>
        
        <div class="row">
            <div class="span3">
                <div class="well well-small">
                <p>Total tickets handed out: <strong>c. 70</strong></p>
                </div>
            </div>
            <div class="span3">
                <div class="well well-small">
                <p>Site hits from tickets handed out: 
                <strong>c. 8</strong>
                </p>
                </div>
            </div>
            <div class="span3">
                <div class="well well-small">
                <p>Average conversion rate:
                <strong>c. 10%</strong>
                </p>
                </div>
            </div>
            <div class="span3">
                <div class="well well-small">
                <p>Hours spent doing field testing: 
                <strong>c. 4</strong>
                </p>
                </div>
            </div>
        </div>
        
        <hr>
        
        <div class="row">
            <div class="span12">
                <h3>Detailed Information</h3>
            </div>
        </div>
        
        <div class="row">
            <div class="span4">
                <p>
                The bar chart shows the percentage of interactions between robot and human which lead to the human
                visiting our site using the unique link printed on the ticket given to them by CHARLES. Each bar represents 
                a different mode of interaction. In mode 0, CHARLES doesn't attempt to interact, he just prints out tickets. 
                In mode 1, he will only print a ticket when someone is detected infront of him. In mode 2 CHARLES will announce himself
                and track passers by, printing a ticket for the person he is tracking. In mode 3, CHARLES holds a full conversation with
                someone ending in the printing of a ticket if the person is interested in finding out more information.
                </p>
            </div>
            <div class="span7"
                <div id="chart_div" style="width: 700px; height: 400px;"></div>
            </div>
        </div>
        

    </div> <!-- container -->
    
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Mode', 'Memorable Interactions %'],
          ['0',  6],
          ['1',  4],
          ['2',  10],
          ['3',  12]
        ]);

        var options = {
          title: 'Memorability of Interactions VS Interaction Mode',
          hAxis: {title: 'Interaction Mode', titleTextStyle: {color: 'grey'}},
          vAxis: {title: 'Percentage of Memorable Interactions', titleTextStyle: {color: 'grey'}}
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>

    
    
<?php
    require 'footer.php';
?>  