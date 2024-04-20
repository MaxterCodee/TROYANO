<?php $__env->startSection('content'); ?>
<div class="col-xl-12">
    <div class="card">
        <div class="card-header border-0 flex-wrap">
            <h4 class="fs-20 font-w700 mb-2">Project Statistics</h4>
            <div class="d-flex align-items-center project-tab mb-2">	
                <div class="card-tabs mt-3 mt-sm-0 mb-3 ">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#monthly" role="tab">Mensual</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#Weekly" role="tab">Semanal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#Today" role="tab">Hoy</a>
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
                        <h4 class="fs-24 font-w700 ">246</h4>
                        <span class="fs-16 font-w400 d-block">Total Projects</span>
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
                            <h4 class="fs-24 font-w700 ">246</h4>
                            <span class="fs-16 font-w400 d-block">On Going</span>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="mt-2">
                            <svg width="13" height="13" viewbox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="6.5" cy="6.5" r="6.5" fill="#FFA7D7"></circle>
                            </svg>

                        </div>
                        <div class="ms-3">
                            <h4 class="fs-24 font-w700 ">28</h4>
                            <span class="fs-16 font-w400 d-block">Unfinished</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade active show" id="monthly">
                    <div id="chartBar" class="chartBar"></div>
                </div>	
                <div class="tab-pane fade" id="Weekly">
                    <div id="chartBar1" class="chartBar"></div>
                </div>
                <div class="tab-pane fade" id="Today">
                    <div id="chartBar2" class="chartBar"></div>
                </div>
            </div>
            <div class="d-flex align-items-center">
                <label class="form-check-label font-w400 fs-16 mb-0" for="flexSwitchCheckChecked1">Number</label>
                <div class="form-check form-switch toggle-switch">
                    <input class="form-check-input custome" type="checkbox" id="flexSwitchCheckChecked1" checked="">
                 
                </div>
                <label class="form-check-label font-w400 fs-16 mb-0 ms-3" for="flexSwitchCheckChecked2">Analytics</label>	
                <div class="form-check form-switch toggle-switch">
                  <input class="form-check-input custome" type="checkbox" id="flexSwitchCheckChecked2" checked="">
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/maximiliano/Desktop/TROYANO/resources/views/dashboard.blade.php ENDPATH**/ ?>