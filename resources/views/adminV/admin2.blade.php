@extends('layouts.app')
@section('content')
 <section id="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 sidebar d-flex flex-column list-group list-group-flush viewport-max ">
                    <a href="/admin" class="list-group-item list-group-item-action text-center">
                        <img src="img/um5.jpg" alt="" class="img-fluid  mr-2"></a>
                    <a href="admin/theses" class="list-group-item list-group-item-action menu-items">
                       Thèses en cours</a>
                    <a href="admin/dir" class="list-group-item list-group-item-action menu-items">
                        List des directeurs des thèses</a>
                    <a href="admin/doc" class="list-group-item list-group-item-action menu-items">
                      List des doctorants</a>
                    <a href="admin/soutenances" class="list-group-item list-group-item-action menu-items">
                        Demandes de soutenance</a>
                    <a href="admin/liaison" class="list-group-item list-group-item-action menu-items">
                        lier les theses au doctorants</a>
                    <a href="admin/liaison/s" class="list-group-item list-group-item-action menu-items">
                        supprimer une liaisone thèse-doctorant</a>
                    <a href="admin/validat" class="list-group-item list-group-item-action menu-items">
                        valider les nouvelles inscriptions</a>
                </div>
                <!-- MAIN CARDS-->
                <div class="col-lg-10 py-5 bg-light my-3">
                    <div class="row">
                        <div class="col">
                            <h2 class="text-info">Dashboard /
                                <small class="text-muted">administration</small>
                            </h2>
                        </div>
                    </div>
                    <div class="row inform-cards">
                        <div class="col-sm-6 col-md-4 col-lg-3 p-4">
                            <div class="card text-white my-2 rounded">
                                <div class="card-body bg-primary d-flex align-items-center justify-content-between">
                                    <i class="fas fa-users fa-2x"></i>
                                    <div class="inner-text text-right">
                                        <h3><span class="badge badge-danger badge-pill">20</span> New   </h3>
                                        <h5>Users</h5>
                                    </div>
                                </div>
                                <div class="card-footer bg-dark">
                                    <a href="#" class="btn btn-link text-danger">Learn more</a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                                <canvas id="canvas" width="400" height="400"></canvas>
                        </div>
                        <div class="col-sm-4">
                                <canvas id="docs" width="400" height="400"></canvas>
                        </div>
                        <div class="col-sm-4">
                                <canvas id="salare" width="400" height="400"></canvas>
                        </div>
                        <div class="col-sm-4">
                                <canvas id="soutenanc" width="400" height="400"></canvas>
                        </div>
                        <div class="col-sm-4">
                                <canvas id="structurs" width="400" height="400"></canvas>
                        </div>
                        
                    </div>


                </div>
            </div>
    </section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/js/bootstrap-select.min.js" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" charset="utf-8"></script>
<script>
       var url = "{{url('admin/charts')}}";
        let annee = new Array();
        let inscriptions = new Array();
        var nbr_doctorants = new Array();
        let docs_salarie = new Array();
        let annee_soutenances = new Array();
        let soutenances = new Array();
        $(document).ready(function(){
          $.get(url, function(response){

            //data gathering
           response.total_inscriptions.forEach(x =>{ inscriptions.push(x.nbr);
                                                      annee.push(x.year)});
           response.soutenances.forEach(x =>{ soutenances.push(x.nbr);
                                                      annee_soutenances.push(x.year)});


           docs_salarie.push(response.salarie);
           docs_salarie.push(response.total_doctorants - response.salarie);

            //1er canvas inscription fonction annees            
            var inscriptions_bars = document.getElementById("canvas").getContext('2d');
            
                var bars_inscriptions_chart = new Chart(inscriptions_bars, {
                  type: 'bar',
                  data: {
                      labels:annee,
                      datasets: [{
                          label: 'pré-inscriptions',
                          data: inscriptions,

                           backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                               
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                                
                            ],
                            

                          borderWidth: 1
                      }]
                  },

                  options: {
                      scales: {
                          yAxes: [{
                              ticks: {
                                  beginAtZero:true
                              }
                          }]
                      }
                  }
              });

                //2eme canvas doctorant valid salarie /non
                var element_canvas = document.getElementById("salare").getContext('2d');
            
                var salarie_chart = new Chart(element_canvas, {
                  type: 'doughnut',
                  data: {
                      labels:['doctorants salariés', 'doctorants non salariés'],
                      datasets: [{
                          label: 'salarie',
                          data: docs_salarie,
                          backgroundColor: [
                                'rgba(255, 99, 132, 0.4)',
                                'rgba(54, 162, 235, 0.4)',
                                'rgba(255, 206, 86, 0.4)',
                                'rgba(75, 192, 192, 0.4)',
                                'rgba(153, 102, 255, 0.4)',
                                'rgba(255, 159, 64, 0.4)'
                               
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                                
                            ],

                      }]
                  },

                  options: {},
              });
              //3eme canavas doctorant enregistré
              var docs_bars = document.getElementById("docs").getContext('2d');
            
                var docs_chart = new Chart(docs_bars, {
                  type: 'bar',
                  data: {
                      labels:['2020-2021','2022-2023'],
                      datasets: [{
                          label: 'doctorants enregistré dans le centre',
                          data: [20,30],

                           backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                               
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                                
                            ],
                            

                          borderWidth: 1
                      }]
                  },

                  options: {
                      scales: {
                          yAxes: [{
                              ticks: {
                                  beginAtZero:true
                              }
                          }]
                      }
                  }
              });



              //4eme canvas soutenances
              var sout_canavs = document.getElementById("soutenanc").getContext('2d');
            
                var sout_bars = new Chart(sout_canavs, {
                  type: 'line',
                  data: {
                      labels:annee_soutenances,
                      datasets: [{
                          label: 'soutenances',
                          data: soutenances,

                           
                            borderColor: [
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                                
                            ],
                            

                          borderWidth: 1
                      }]
                  },

                  options: {}
              });
              




              //5emm canvas radar des structures
              var structures_canavs = document.getElementById("structurs").getContext('2d');
            
                var structures_radar = new Chart(structures_canavs, {
                  type: 'radar',
                  data: {
                      labels:['reseau', 'logistic','big data'],
                      datasets: [{
                          label: 'soutenances',
                          data: [5,20,10],

                           
                            borderColor: [
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                                
                            ],
                            

                          borderWidth: 1
                      }]
                  },

                  options: {
                      
                  }
              });
              



          });
        });
</script>




@endsection
