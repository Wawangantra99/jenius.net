<x-app-layout>

    <!-- Latest Orders-->
    <div class="col-12">
        <div class="card mb-4 h-100">
            <div class="card-header justify-content-between align-items-center d-flex">
                <h6 class="card-title m-0">Latest orders</h6>
                <a href="#" class="btn btn-outline-secondary btn-sm text-body"><i class="ri-download-2-line align-middle"></i> Export</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table m-0 table-striped">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Billing Name</th>
                                <th>Date</th>
                                <th>Payment Method</th>
                                <th>Items</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <span class="fw-bolder">#1234-5679</span>
                                </td>
                                <td>Patria Nelson</td>
                                <td class="text-muted">24th June, 2021</td>
                                <td class="text-muted">
                                    <div class="d-flex align-items-center">
                                        <i class="ri-visa-line ri-lg me-2"></i> **** 6789
                                    </div>
                                </td>
                                <td class="text-muted">5</td>
                                <th class="text-muted">$123.99</th>
                                <td><span class="badge rounded-pill bg-success-faded text-success">completed</span></td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                            id="dropdownOrder-0" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-2-line"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown" aria-labelledby="dropdownOrder-0">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fw-bolder">#1235-7755</span>
                                </td>
                                <td>Dominic Patterson</td>
                                <td class="text-muted">22nd June, 2021</td>
                                <td class="text-muted">
                                    <div class="d-flex align-items-center">
                                        <i class="ri-mastercard-fill ri-lg me-2"></i> **** 1233
                                    </div>
                                </td>
                                <td class="text-muted">5</td>
                                <th class="text-muted">$123.99</th>
                                <td><span class="badge rounded-pill bg-info-faded text-info">processing</span></td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                            id="dropdownOrder-1" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-2-line"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown" aria-labelledby="dropdownOrder-1">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fw-bolder">#1236-6579</span>
                                </td>
                                <td>Steven Smith</td>
                                <td class="text-muted">21st June, 2021</td>
                                <td class="text-muted">
                                    <div class="d-flex align-items-center">
                                        <i class="ri-paypal-line ri-lg me-2"></i> **** 7766
                                    </div>
                                </td>
                                <td class="text-muted">5</td>
                                <th class="text-muted">$123.99</th>
                                <td><span class="badge rounded-pill bg-danger-faded text-danger">cancelled</span></td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                            id="dropdownOrder-2" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-2-line"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown" aria-labelledby="dropdownOrder-2">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fw-bolder">#1237-1122</span>
                                </td>
                                <td>Courtney Lawes</td>
                                <td class="text-muted">19th June, 2021</td>
                                <td class="text-muted">
                                    <div class="d-flex align-items-center">
                                        <i class="ri-mastercard-fill ri-lg me-2"></i> **** 9087
                                    </div>
                                </td>
                                <td class="text-muted">5</td>
                                <th class="text-muted">$123.99</th>
                                <td><span class="badge rounded-pill bg-success-faded text-success">completed</span></td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                            id="dropdownOrder-3" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-2-line"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown" aria-labelledby="dropdownOrder-3">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fw-bolder">#1238-4433</span>
                                </td>
                                <td>Haley Jackson</td>
                                <td class="text-muted">19th June, 2021</td>
                                <td class="text-muted">
                                    <div class="d-flex align-items-center">
                                        <i class="ri-visa-line ri-lg me-2"></i> **** 6789
                                    </div>
                                </td>
                                <td class="text-muted">5</td>
                                <th class="text-muted">$123.99</th>
                                <td><span class="badge rounded-pill bg-success-faded text-success">completed</span></td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                            id="dropdownOrder-4" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-2-line"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown" aria-labelledby="dropdownOrder-4">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fw-bolder">#1239-8865</span>
                                </td>
                                <td>Sairaj Tackoo</td>
                                <td class="text-muted">18th June, 2021</td>
                                <td class="text-muted">
                                    <div class="d-flex align-items-center">
                                        <i class="ri-mastercard-fill ri-lg me-2"></i> **** 1233
                                    </div>
                                </td>
                                <td class="text-muted">5</td>
                                <th class="text-muted">$123.99</th>
                                <td><span class="badge rounded-pill bg-info-faded text-info">processing</span></td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                            id="dropdownOrder-5" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-2-line"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown" aria-labelledby="dropdownOrder-5">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>    
                <nav>
                    <ul class="pagination justify-content-end mt-3 mb-0">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                    </nav>
            </div>
        </div>
    </div>
    <!-- Latest Orders-->

</x-app-layout>