@extends('layouts.app')

@section('cdn')
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.0/dist/chart.min.js"></script>
@endsection

@section('content')
<header class="my-5 d-flex justify-content-between align-items-center">
    <h1 class="text-center w-100">My statistics</h1>
</header>
 <div class="container">
     <div class="row">
         <div class="col-4">@include('admin.includes.links')</div>
         <div class="col-8"><canvas id="myChart" width="400" height="400"></canvas></div>
     </div>
 </div>
@endsection

@section('script')
<script>

    function getTotals(year = 2021){

    };


    var totals = {!! json_encode($totals_year) !!};
    console.log(totals);
const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre'],
            datasets: [{
                label: '# Totale Ordini',
                data: totals,
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
                y: {
                    beginAtZero: true
                }
            }
        }
    });    
</script>
@endsection