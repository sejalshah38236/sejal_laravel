<!DOCTYPE html>
<html lang="en">


@extends('backend.layout.main')

    @section('main_container')
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="text-white mt-5 mb-5">Welcome back, <b>Admin</b></p>
                </div>
            </div>
            <!-- row -->
          
        
               
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                 
                </div>
                <div class="col-12 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
                        <h2 class="tm-block-title">Orders List</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Photo Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">file</th>
                                    <th scope="col">created date</th>
                                    <th scope="col">updated date</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                               @foreach($data as $d)
                               <tr>
                                    <td>{{$d->id}}</td>
                                    <td>{{$d->name}}</td>
                                    <td>{{$d->file}}</td>
                                    <td>{{$d->created_at}}</td>
                                    <td>{{$d->updated_at}}</td>

                               </tr>
                               @endforeach
                             
                                <tr>
                                    <th scope="row"><b>#122339</b></th>
                                    <td>
                                        <div class="tm-status-circle moving">
                                        </div>Moving
                                    </td>
                                    <td><b>Richard Clamon</b></td>
                                    <td>15:00, 12 OCT 2018</td>
                                    <td>09:20, 26 OCT 2018</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
 
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/moment.min.js"></script>
    <!-- https://momentjs.com/ -->
    <script src="js/Chart.min.js"></script>
    <!-- http://www.chartjs.org/docs/latest/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="js/tooplate-scripts.js"></script>
    <script>
        Chart.defaults.global.defaultFontColor = 'white';
        let ctxLine,
            ctxBar,
            ctxPie,
            optionsLine,
            optionsBar,
            optionsPie,
            configLine,
            configBar,
            configPie,
            lineChart;
        barChart, pieChart;
        // DOM is ready
        $(function () {
            drawLineChart(); // Line Chart
            drawBarChart(); // Bar Chart
            drawPieChart(); // Pie Chart

            $(window).resize(function () {
                updateLineChart();
                updateBarChart();                
            });
        })
    </script>
</body>

</html>

@endsection