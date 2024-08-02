<?php $__env->startSection('content'); ?>
<!--Cards-->
<div>
    <div class="col-xl-12">
        <div class="row">
            <div class="col-xl-6 col-sm-6">
                <div class="card">
                    <div class="card-body d-flex px-4 pb-0 justify-content-between">
                        <div>
                            <h4 class="fs-18 font-w600 mb-4 text-nowrap">Total de Detecciones</h4>
                            <div class="d-flex align-items-center">
                                <h2 class="fs-32 font-w700 mb-0"><?php echo e($total_detection); ?></h2>
                                <span class="d-block ms-4">
                                    <svg width="21" height="11" viewbox="0 0 21 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.49217 11C0.590508 11 0.149368 9.9006 0.800944 9.27736L9.80878 0.66117C10.1954 0.29136 10.8046 0.291359 11.1912 0.661169L20.1991 9.27736C20.8506 9.9006 20.4095 11 19.5078 11H1.49217Z" fill="#09BD3C"></path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div id="columnChart"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-sm-6">
                <div class="card">
                    <div class="card-body d-flex px-4  justify-content-between">
                        <div>
                            <div class="">
                                <h2 class="fs-32 font-w700"><?php echo e($total_crash); ?></h2>
                                <h4 class="fs-18 font-w600 mb-4 text-nowrap">Total de Colisiones Detectadas</h4>
                            </div>
                        </div>
                        <div id="NewCustomers"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-sm-6">
                <div class="card">
                    <div class="card-body d-flex px-4  justify-content-between">
                        <div>
                            <div class="">
                                <h2 class="fs-32 font-w700"><?php echo e($total_cars); ?></h2>
                                <h4 class="fs-18 font-w600 mb-4 text-nowrap">Total de Automoviles Detectados</h4>
                            </div>
                        </div>
                        <div id="NewCustomers1"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-sm-6">
                <div class="card">
                    <div class="card-body d-flex px-4  justify-content-between">
                        <div>
                            <div class="">
                                <h2 class="fs-32 font-w700"><?php echo e($total_bus); ?></h2>
                                <h4 class="fs-18 font-w600 mb-4 text-nowrap">Total de Autobuses Detectados</h4>
                            </div>
                        </div>
                        <div id="NewCustomers1"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12    col-sm-6">
                <div class="card">
                    <div class="card-body d-flex px-4  justify-content-between">
                        <div>
                            <div class="">
                                <h2 class="fs-32 font-w700"><?php echo e($total_motos); ?></h2>
                                <h4 class="fs-18 font-w600 mb-4 text-nowrap">Total de Motocicletas Detectadas</h4>
                            </div>
                        </div>
                        <div id="NewCustomers1"></div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
<div class="col-xl-12">
    <div class="card">
        <div class="card-header border-0 flex-wrap">
            <h4 class="fs-20 font-w700 mb-2">Estadisticas de Detecciones</h4>
            <div class="d-flex align-items-center project-tab mb-2">	
                <div class="card-tabs mt-3 mt-sm-0 mb-3 ">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#Today" role="tab">Hoy</a>
                        </li>
                    </ul>
                </div>
                <div class="dropdown ms-2">
                    <div class="btn-link" data-bs-toggle="dropdown">
                        <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5"></circle>
                            <circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5"></circle>
                            <circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5"></circle>
                        </svg>
                    </div>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                        <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                    </div>
                </div>
            </div>	
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <div class="d-flex">
                    <div class="d-inline-block position-relative donut-chart-sale mb-3">
                        <span class="donut1" data-peity='{ "fill": ["rgba(136,108,192,1)", "rgba(241, 234, 255, 1)"],   "innerRadius": 20, "radius": 15}'>5/8</span>
                    </div>
                    <div class="ms-3">
                        <h4 class="fs-24 font-w700 "><?php echo e($total_detection); ?></h4>
                        <span class="fs-16 font-w400 d-block">Total de Detecciones</span>
                    </div>
                </div>
                <div class="d-flex">	
                    <div class="d-flex me-5">
                        <div class="mt-2">
                            <svg width="13" height="13" viewbox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="6.5" cy="6.5" r="6.5" fill="#FFCF6D"></circle>
                            </svg>
                        </div>
                        <div class="ms-3">
                            <h4 class="fs-24 font-w700 "><?php echo e($total_cars); ?></h4>
                            <span class="fs-16 font-w400 d-block">Carros</span>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="mt-2">
                            <svg width="13" height="13" viewbox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="6.5" cy="6.5" r="6.5" fill="#FFA7D7"></circle>
                            </svg>

                        </div>
                        <div class="ms-3">
                            <h4 class="fs-24 font-w700 "><?php echo e($total_motos); ?></h4>
                            <span class="fs-16 font-w400 d-block">Motocicletas</span>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="mt-2">
                            <svg width="13" height="13" viewbox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="6.5" cy="6.5" r="6.5" fill="#FFA7D7"></circle>
                            </svg>

                        </div>
                        <div class="ms-3">
                            <h4 class="fs-24 font-w700 "><?php echo e($total_bus); ?></h4>
                            <span class="fs-16 font-w400 d-block">Autobuses</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade active show" id="monthly">
                
            </div>
            <div class="tab-content">
                <div class="tab-pane fade active show" id="monthly">
                    <canvas id="barChart"></canvas>
                </div>
                
            </div>
            <div class="d-flex align-items-center">
                <label class="form-check-label font-w400 fs-16 mb-0" for="flexSwitchCheckChecked1"><strong>Automoviles |</strong></label>
                <label class="form-check-label font-w400 fs-16 mb-0" for="flexSwitchCheckChecked1"><strong>Motocicletas |</strong></label>
                <label class="form-check-label font-w400 fs-16 mb-0" for="flexSwitchCheckChecked1"><strong>Autobuses</strong></label>
                
            </div>
        </div>
    </div>
    
</div>
<!--New card-->
<div class="col-xl-12">
    <div class="card">
        <div class="card-header border-0 flex-wrap">
            <h4 class="fs-20 font-w700 mb-2">Estadisticas de Colisiones</h4>
            <div class="d-flex align-items-center project-tab mb-2">	
                <div class="card-tabs mt-3 mt-sm-0 mb-3 ">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#monthly" role="tab">Mensual</a>
                        </li>
                    </ul>
                </div>
                <div class="dropdown ms-2">
                    <div class="btn-link" data-bs-toggle="dropdown">
                        <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5"></circle>
                            <circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5"></circle>
                            <circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5"></circle>
                        </svg>
                    </div>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                        <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                    </div>
                </div>
            </div>	
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <div class="d-flex">
                    <div class="d-inline-block position-relative donut-chart-sale mb-3">
                        <span class="donut1" data-peity='{ "fill": ["rgba(136,108,192,1)", "rgba(241, 234, 255, 1)"],   "innerRadius": 20, "radius": 15}'>5/8</span>
                    </div>
                    <div class="ms-3">
                        <h4 class="fs-24 font-w700 "><?php echo e($total_detection); ?></h4>
                        <span class="fs-16 font-w400 d-block">Total de Colisiones</span>
                    </div>
                </div>
                <div class="d-flex">	
                    <div class="d-flex me-5">
                        <div class="mt-2">
                            <svg width="13" height="13" viewbox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="6.5" cy="6.5" r="6.5" fill="#FFCF6D"></circle>
                            </svg>
                        </div>
                        <div class="ms-3">
                            <h4 class="fs-24 font-w700 "><?php echo e($total_cars); ?></h4>
                            <span class="fs-16 font-w400 d-block">Carros</span>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="mt-2">
                            <svg width="13" height="13" viewbox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="6.5" cy="6.5" r="6.5" fill="#FFA7D7"></circle>
                            </svg>

                        </div>
                        <div class="ms-3">
                            <h4 class="fs-24 font-w700 "><?php echo e($total_motos); ?></h4>
                            <span class="fs-16 font-w400 d-block">Motocicletas</span>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="mt-2">
                            <svg width="13" height="13" viewbox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="6.5" cy="6.5" r="6.5" fill="#FFA7D7"></circle>
                            </svg>

                        </div>
                        <div class="ms-3">
                            <h4 class="fs-24 font-w700 "><?php echo e($total_bus); ?></h4>
                            <span class="fs-16 font-w400 d-block">Autobuses</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade active show" id="monthly">
                
            </div>
            <div class="tab-content">
                <div class="tab-pane fade active show" id="monthly">
                    <canvas id="barChart2"></canvas>
                </div>
                
            </div>
            <div class="d-flex align-items-center">
                <label class="form-check-label font-w400 fs-16 mb-0" for="flexSwitchCheckChecked1"><strong>Cantidad De Colisiones Por Mes</strong></label>
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="monthly">
                        <canvas id="barChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

<?php $__env->stopSection(); ?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var ctx = document.getElementById('barChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Carros', 'Motocicletas', 'Autobuses'],
                datasets: [{
                    label: 'Cantidad',
                    data: [<?php echo e($total_cars); ?>, <?php echo e($total_motos); ?>, <?php echo e($total_bus); ?>],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)'
                    ],
                    borderWidth: 1,
                    borderRadius: 10,
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Cantidad'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Tipos'
                        }
                    }
                }
            }
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var ctx = document.getElementById('barChart2').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                datasets: [{
                    label: 'Colisiones por Mes',
                    data: <?php echo json_encode($total_crashes_by_month); ?>,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Cantidad de Colisiones'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Mes'
                        }
                    }
                }
            }
        });
    });
</script>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/leonardo/TROYANO/resources/views/dashboard.blade.php ENDPATH**/ ?>