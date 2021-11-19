@extends('layouts.app')

@section('cdn')
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.0/dist/chart.min.js"></script>
@endsection

@section('content')


     <div class="row w-100 h-100 m-0">
         <div id="links" class="col-3">@include('admin.includes.links')</div>
         <div id="statistics" class="col-9 h-100 w-100">
                <div class="graph">
                    <div class="totals d-flex">
                        <div class="m-3">
                            <h4>Totale {{$current_year}}</h4>
                            <div id="total-current-year"></div>
                        </div>
                        <div class="m-3">
                            <h4>Totale {{$months[$current_month-1]}}</h4>
                            <div id="total-current-month"></div>
                        </div>
                    </div>
                    <select name="type_chart" id="type-chart">
                        <option value="year_chart">Annuale</option>
                        <option selected value="month_chart">Mensile</option>
                    </select>
                    <select name="year" id="year">
                        @foreach ($years as $year)
                            <option value="{{$year}}" @if ($year == $current_year) {{'selected'}} @endif>{{$year}}</option>
                        @endforeach
                    </select>
                                <select name="month" id="month" class="">
                        @for ($i = 0; $i < 12; $i++)
                            <option value="{{$i+1}}" @if (($i+1) == $current_month) {{'selected'}}@endif>{{$months[$i]}} </option>
                        @endfor
                    </select>
                    
                    <canvas id="myChart" ></canvas>
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


    // Get elements on document
    
    const inputYear = document.getElementById('year');
    const inputType = document.getElementById('type-chart');
    const inputMonth = document.getElementById('month');

    const totalYearElement = document.getElementById('total-current-year');
    const totalMonthElement = document.getElementById('total-current-month');

    let labels = getLabels(inputType.value);
    let data = getData(inputType.value, inputYear.value, inputMonth.value);


    function getLabels(type) {
        const labels = [];
        let days;

        if (type == 'year_chart') {
            return ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre'];
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


    function getTotalYear(type, year) {
        const reducer = (previousValue, currentValue) => previousValue + currentValue;
        const total = getData(type, year)
        return total.reduce(reducer)
        
    }
    function getTotalMonth(type, year, month) {
        const reducer = (previousValue, currentValue) => previousValue + currentValue;
        const total = getData(type, year, month)
        return total.reduce(reducer)
        
    }
    totalYearElement.innerText = getTotalYear('year-chart', {{$current_year}})
    totalMonthElement.innerText = getTotalMonth('month-chart', {{$current_year}}, 11)


    function updateChart(type, year, month = 0) {
        const labels = getLabels(type);
        let data = [];

        if (inputType.value == 'month_chart') {
        data = getData(inputType.value, inputYear.value, inputMonth.value)
            
        } else {
        data = getData(inputType.value, inputYear.value)

        }


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
                    'rgba(0, 204, 188, 1)',
                ],
                borderColor: [
                    'rgba(0, 204, 188, 1)',
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