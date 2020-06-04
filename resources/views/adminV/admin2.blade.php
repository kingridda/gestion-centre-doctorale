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
                                <canvas id="salare" width="400" height="400"></canvas>
                        </div>
                        <div class="col-sm-4">
                                <canvas id="villes" width="400" height="400"></canvas>
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
        var Years = new Array();
        var nbr_doctorants = new Array();
        $(document).ready(function(){
          $.get(url, function(response){
            var ctx = document.getElementById("canvas").getContext('2d');
            
                var myChart = new Chart(ctx, {
                  type: 'bar',
                  data: {
                      labels:['2019', '2020'],
                      datasets: [{
                          label: 'pré-inscriptions',
                          data: [20,40],

                           backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                               
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                
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
          });
        });
</script>




@endsection
