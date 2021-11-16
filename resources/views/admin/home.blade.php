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
         <div class="col-8">
             <select name="year" id="year">
                 @foreach ($years as $year)
                     <option value="{{$year}}">{{$year}}</option>
                 @endforeach
             </select>
             <canvas id="myChart" width="400" height="400"></canvas>
            </div>
     </div>
 </div>
@endsection

@section('script')
<script>
    var totals = {!! json_encode($totals) !!};
    var totalsYear = {!! json_encode($totals_current_year) !!};
    const inputYear = document.getElementById('year');

    function updateChart() {
        const data = [];
    for (let i = 1; i < 13; i++) {
        if (totals[inputYear.value][i]) {
            data.push(parseFloat(totals[inputYear.value][i]['total']))
        }else{
            data.push(0);
        }
        
    }
    console.log(data);

    myChart.data.datasets[0].data = data;
    myChart.update();  
    }



    inputYear.addEventListener('change', function(){
        updateChart();
    });
    
    data = [];
    var years = {!! json_encode($years) !!};
    for (let i = 1; i < 13; i++) {
        if (totals[inputYear.value][i]) {
            data.push(totals[inputYear.value][i]['total'])
        }else{
            data.push(0);
        }
        
    }
    console.log(data);
const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre'],
            datasets: [{
                label: '# Totale Ordini',
                data: data,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
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