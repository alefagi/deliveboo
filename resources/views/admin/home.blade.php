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
             <select name="type_chart" id="type-chart">
                 <option value="year_chart">Annuale</option>
                 <option selected value="month_chart">Mensile</option>
             </select>
             <select name="year" id="year">
                 @foreach ($years as $year)
                     <option value="{{$year}}">{{$year}}</option>
                 @endforeach
             </select>
            <select name="month" id="month" class="">
                @for ($i = 0; $i < 12; $i++)
                    <option value="{{$i+1}}">{{$months[$i]}}</option>                   
                @endfor

             </select>
             <canvas id="myChart" width="400" height="400"></canvas>
            </div>
     </div>
 </div>
@endsection

<style>
    .hidden {
        visibility: hidden;
    }
</style>

@section('script')
<script>

    // Get data from controller
    var totals = {!! json_encode($totals) !!};
    var totalsYear = {!! json_encode($totals_current_year) !!};

    // Get elements on document
    
    const inputYear = document.getElementById('year');
    const inputType = document.getElementById('type-chart');
    const inputMonth = document.getElementById('month');

    let labels = getLabels(inputType.value);
    let data = getData(inputType.value, inputYear.value, inputMonth.value);


    function getLabels(type) {
        const labels = [];
        let days;

        if (type == 'year_chart') {
            return ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre']
        };

        switch (inputMonth.value)
        {
        case '2':
            days = 28
            break;
        case '4', '6', '9', '11':
            days = 30
            break;

        default:
            days = 31
            break;
        }
        for (let i = 0; i < days; i++) {
            labels.push(`${i + 1}/${inputMonth.value}`)
            
        }
        console.log(days)
        return labels;
        
    }

    function getData(type, year, month = 0) {
        const data = [];
        let days;

        

        if (month) {
            switch (month)
            {
                case '2':
                    days = 28
                    break;
                case '4', '6', '0', '11':
                    days = 30
                    break;

                default:
                    days = 31
                    break;
            }

            for (let i = 0 ; i < days; i++) {
                if (totals[year][month]) {
                    if (totals[year][month][i+1]) {
                    data.push(parseFloat(totals[year][month][i+1]))                     
                    }else{
                    data.push(0);
                }
                }else{
                    data.push(0);
                }
            
        }

        }else{
            
                for (let i = 0 ; i < 12; i++) {
                    if (totals[year][i+1]) {

                        data.push(parseFloat(totals[year][i+1]['total']))
                            
                       
                    } else{
                        data.push(0);
                    }
            
        }

        }

  

     return data;
    }




    function updateChart(type, year, month = 0) {
        const labels = getLabels(type);
        let data = [];

        if (inputType.value == 'month_chart') {
        data = getData(inputType.value, inputYear.value, inputMonth.value)
            
        } else {
        data = getData(inputType.value, inputYear.value)

        }

    console.log(data);

    myChart.data.labels = labels;
    myChart.data.datasets[0].data = data;
    myChart.update();  
    }

//  EVENT LISTENER

    inputYear.addEventListener('change', function(){
        updateChart(inputType.value, inputYear.value, inputMonth.value);
    });
    inputType.addEventListener('change', function(){
        if (inputType.value == 'year_chart') {
            inputMonth.classList.add('hidden')
        } else {
            inputMonth.classList.remove('hidden')

        }
        updateChart(inputType.value, inputYear.value, inputMonth.value);
    });
    inputMonth.addEventListener('change', function(){
        updateChart(inputType.value, inputYear.value, inputMonth.value);
    });
    

    console.log(totals);

//  !! CHART

    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: getLabels(inputType.value),
            datasets: [{
                label: '# Totale Ordini',
                data: getData(inputType.value, inputYear. value, inputMonth.value),
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