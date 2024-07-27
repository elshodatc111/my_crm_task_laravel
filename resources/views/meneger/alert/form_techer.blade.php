@extends('layouts.meneger_src')
@section('title', 'Balans')
@section('content')
@extends('layouts.meneger_header')
@extends('layouts.meneger_menu')
  <script src="https://d3js.org/d3.v7.min.js"></script>
  <style>
    .chart-container {display: flex;justify-content: center;align-items: center;height: 500px;}
    .funnel-label {font-size: 14px;font-weight: bold;fill: #333;}
    .funnel-stilt {stroke: #666;stroke-width: 2;stroke-dasharray: 4, 2;}
    .funnel-segment {cursor: pointer;transition: fill 0.2s;}
    .funnel-segment:hover {fill: #ff5733 !important;}
    .funnel-value {font-size: 14px;font-weight: bold;fill: bleak;text-anchor: middle;dominant-baseline: middle;}
    @media (max-width: 767px) {.chart-container {height: 300px;}.funnel-label {font-size: 12px;}}
  </style>
<main id="main" class="main">

<div class="pagetitle">
  <h1>Form</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('meneger.home') }}">Bosh sahifa</a></li>
      <li class="breadcrumb-item active">Form Statistika</li>
    </ol>
  </nav>
</div>

<section class="section dashboard">

    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle me-1"></i>
                {{Session::get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif (Session::has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle me-1"></i>
                {{Session::get('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row">
        <div class="col-lg-3 col-6 pt-2">
            <a href="{{ route('form') }}" class="btn btn-secondary w-100">Form Murojat</a>
        </div>
        <div class="col-lg-3 col-6 pt-2">
            <a href="{{ route('form_techer') }}" class="btn btn-primary w-100">Form Statistika</a>
        </div>
        <div class="col-lg-3 col-6 pt-2">
            <a href="{{ route('form_arxiv') }}" class="btn btn-secondary w-100">Arxiv</a>
        </div>
        <div class="col-lg-3 col-6 pt-2">
            <a href="{{ route('form_url') }}" class="btn btn-secondary w-100">Form Manzil</a>
        </div>
    </div>


    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <h2 class="card-title text-center">Oxirgi 30 kunli statistik</h2>
                <div id="funnelChart1" class="chart-container"></div>
            </div>
            <div class="col-md-6 col-sm-12">
                <h2 class="card-title text-center">Oxirgi 365 kunli statistik</h2>
                <div id="funnelChart2" class="chart-container"></div>
            </div>
        </div>
    </div>

    
</section>

</main>

<footer id="footer" class="footer">
<div class="copyright">
  &copy; <strong><span>CodeStart</span></strong>. development center
</div>
<div class="credits">
  Qarshi 2024
</div>
</footer>


<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const data1 = [
            { stage: 'Form orqali murojatlar', value: {{ $oylik['all'] }} },
            { stage: 'Ro`yhatga olindi', value: {{ $oylik['register'] }} },
            { stage: 'Guruhlarga biriktirildi', value: {{ $oylik['guruh'] }} },
            { stage: 'To`lov qildi', value: {{ $oylik['tulov'] }} },
        ];
        const data2 = [
            { stage: 'Form orqali murojatlar', value: {{ $yillik['all'] }} },
            { stage: 'Ro`yhatga olindi', value: {{ $yillik['register'] }} },
            { stage: 'Guruhlarga biriktirildi', value: {{ $yillik['guruh'] }} },
            { stage: 'To`lov qildi', value: {{ $yillik['tulov'] }} },
        ];
        const createFunnelChart = (containerId, data) => {
            const container = d3.select(containerId);
            const containerWidth = container.node().getBoundingClientRect().width;
            const width = containerWidth;
            const height = 500;
            const chartWidth = width * 0.6;
            const chartHeight = 300;

            const svg = container.append("svg")
            .attr("width", width)
            .attr("height", height);

            const x = d3.scaleLinear()
            .domain([0, d3.max(data, d => d.value)])
            .range([0, chartWidth]);

            const y = d3.scaleBand()
            .domain(data.map(d => d.stage))
            .range([0, chartHeight])
            .padding(0.1);

            const colors = d3.scaleOrdinal(d3.schemeCategory10);

            const funnelLayer = svg.append("g")
            .attr("transform", `translate(${(width - chartWidth) / 2}, ${(height - chartHeight) / 2})`);

            funnelLayer.selectAll(".funnel-segment")
            .data(data)
            .enter()
            .append("path")
            .attr("class", "funnel-segment")
            .attr("d", (d, i) => {
                const topWidth = x(d.value);
                const bottomWidth = i < data.length - 2 ? x(data[i + 1].value) : topWidth;
                const yPos = y(d.stage);
                if (i === data.length - 1) {
                // Rectangular path for the last stage
                return `
                    M ${(chartWidth - topWidth) / 2} ${yPos}
                    L ${(chartWidth + topWidth) / 2} ${yPos}
                    L ${(chartWidth + topWidth) / 2} ${yPos + y.bandwidth()}
                    L ${(chartWidth - topWidth) / 2} ${yPos + y.bandwidth()}
                    Z
                `;
                } else {
                return `
                    M ${(chartWidth - topWidth) / 2} ${yPos}
                    L ${(chartWidth + topWidth) / 2} ${yPos}
                    L ${(chartWidth + bottomWidth) / 2} ${yPos + y.bandwidth()}
                    L ${(chartWidth - bottomWidth) / 2} ${yPos + y.bandwidth()}
                    Z
                `;
                }
            })
            .attr("fill", (d, i) => colors(i));

            funnelLayer.selectAll(".funnel-value")
            .data(data)
            .enter()
            .append("text")
            .attr("class", "funnel-value")
            .attr("x", chartWidth / 2)
            .attr("y", d => y(d.stage) + y.bandwidth() / 2)
            .attr("dy", ".35em")
            .text(d => `${d.stage}: ${d.value}`);




        };
        createFunnelChart("#funnelChart1", data1);
        createFunnelChart("#funnelChart2", data2);
        window.addEventListener('resize', () => {
            d3.selectAll("svg").remove();
            createFunnelChart("#funnelChart1", data1);
            createFunnelChart("#funnelChart2", data2);
        });
    });
</script>
@endsection