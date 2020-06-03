@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 d-md-none d-block ">
            <select id="sub-menu" name="sub-menu">
                <option>aller a...</option>
                <option value="admin/theses">Thèses en cours</option>
                <option value="admin/dir">List des directeurs des thèses</option>
                <option value="admin/doc">List des doctorants</option>
                <option value="admin/soutenances">Demandes de soutenance</option>
<<<<<<< HEAD
                <option value="admin/liaison">lier les theses au doctorants</option>
                <option value="admin/liaison/s">supprimer une liaisone thèse-doctorant</option>
                <option value="admin/validat">valider les nouvelles inscriptions</option>
            </select>
        </div>
    </div>
</div>
<div class="container">
    <div class="row row-content">
=======
                <option value="admin/liaison">Lier les thèses au doctorants</option>
                <option value="admin/liaison/s">Supprimer une liaisone thèse-doctorant</option>
            </select>
        </div>
>>>>>>> b8336c847d28aaa856236ddeb7cf5e2eb5a702fe
        <aside class="sidebar col-lg-4 col-md-4 col-xs-12 mb-5">
            <div class="dynamicDiv" >
                <div class="sidebar-wrapper">
                    <nav>
                        <ul class="nolist d-none d-md-block ">
                        	<li><a href="admin/theses">Thèses en cours</a></li> 
                            <li><a href="admin/dir">List des directeurs des thèses</a></li>            
                            <li><a href="admin/doc">List des doctorants</a></li>
                            <li><a href="admin/soutenances">Demandes de soutenance</a></li>
<<<<<<< HEAD
                            <li><a href="admin/liaison">lier les theses au doctorants</a></li>
                            <li><a href="admin/liaison/s">supprimer une liaisone thèse-doctorant</a></li>
                            <li><a href="admin/validat">valider les nouvelles inscriptions</a></li>
=======
                            <li><a href="admin/liaison">Lier les thèses au doctorants</a></li>
                            <li><a href="admin/liaison/s">Supprimer une liaisone thèse-doctorant</a></li>
>>>>>>> b8336c847d28aaa856236ddeb7cf5e2eb5a702fe
                        </ul>
                    </nav>
                </div><!-- .sidebar-wrapepr -->
            </div>
        </aside>
        <div class="col-8">
            <div class="title"><h1>Bienvenu à votre session</h1></div>
<<<<<<< HEAD
=======
            
            <?php
>>>>>>> b8336c847d28aaa856236ddeb7cf5e2eb5a702fe

$dataPoints1 =$dict;
$dataPoints2 = array(
    array("label"=> "2010", "y"=> 64.61),
    array("label"=> "2011", "y"=> 70.55),
    array("label"=> "2012", "y"=> 72.50),
    array("label"=> "2013", "y"=> 81.30),
    array("label"=> "2014", "y"=> 63.60),
    array("label"=> "2015", "y"=> 69.3328),
    array("label"=> "2016", "y"=> 98.70)
);
    
?>
            <script>
                window.onload = function () {
                 
                var chart = new CanvasJS.Chart("chartContainer", {
                    animationEnabled: true,
                    theme: "light2",
                    title:{
                        text: "Average Amount Spent on Real and Artificial X-Mas Trees in U.S."
                    },
                    legend:{
                        cursor: "pointer",
                        verticalAlign: "center",
                        horizontalAlign: "right",
                        itemclick: toggleDataSeries
                    },
                    data: [{
                        type: "column",
                        name: "Real Trees",
                        indexLabel: "{y}",
                      //  yValueFormatString: "$#0.##",
                        showInLegend: true,
                        dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
                    },{
                        type: "column",
                        name: "Artificial Trees",
                        indexLabel: "{y}",
                         yValueFormatString: "$#0.##",
                        showInLegend: true,
                        dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
                    }]
                });
                chart.render();
                 
                function toggleDataSeries(e){
                    if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                        e.dataSeries.visible = false;
                    }
                    else{
                        e.dataSeries.visible = true;
                    }
                    chart.render();
                }
                 
                }
            </script>
                <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                <script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script>
        </div>
  </div>
</div>      


@endsection
