@extends('include/base')

@section('content')
    <div class="container flex">
        <div class="w-1/4  p-5 h-screen">
            @include('include/side')
        </div>
        <div class="w-3/4">
            <div class="flex h-32 mt-4">
                <div class="w-1/2 h-auto">
                    <canvas id="pie" width="150px" height="150px"></canvas>
                </div>
                <div class="w-1/2 h-auto">
                    <canvas id="bar" width="150px" height="150px"></canvas>
                </div>
            </div>
        </div>
    </div>

    <script>
        var xValues = ["Active", "Inactive"];
        var yValues = [55,39];
        var barColors = ["green","red","blue", "orange", "brown"];

        let pie_values = [10,20,30]
        pie_labels = ['mouse','keyboard',"monitor"]

        let pieChart=  new Chart("pie", {
            type: "pie",
            data: {
                labels: pie_labels,
                datasets: [{
                    backgroundColor: barColors,
                    data: pie_values
                }]
            }
        });

        let barChart = new Chart("bar", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            }
        });
    </script>
@endsection
