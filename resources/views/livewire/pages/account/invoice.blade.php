<div class="container-fluid mt-4">
    <div class="row align-items-center">
        <div class="col-4">
            <div class="nav-wrapper position-relative end-0">
                <ul class="nav nav-pills nav-fill p-1" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link mb-0 px-0 py-1 active " data-bs-toggle="tab"
                            href="{{ route('settings') }}" role="tab" aria-controls="profile"
                            aria-selected="true">
                            Messages
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab"
                            href="{{ route('billing') }}" role="tab" aria-controls="dashboard"
                            aria-selected="false">
                            Social
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-0 px-0 py-1  active " data-bs-toggle="tab"
                            href="{{ route('invoice') }}" role="tab" aria-controls="dashboard"
                            aria-selected="false">
                            Notifications
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab"
                            href="{{ route('security') }}" role="tab" aria-controls="dashboard"
                            aria-selected="false">
                            Backup
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid my-3 py-3">
    <div class="row">
        <div class="col-8 mx-auto">
            <form class="" action="index.html" method="post">
                <div class="card my-5">
                    <div class="card-header text-center">
                        <div class="row justify-content-between">
                            <div class="col-md-4 text-start">
                                <img class="mb-2 w-25 p-2" src="../../../assets/img/logo-ct.png" alt="Logo">
                                <h6>
                                    St. Independence Embankment, 050105 Bucharest, Romania
                                </h6>
                                <p class="d-block text-secondary">tel: +4 (074) 1090873</p>
                            </div>
                            <div class="col-lg-3 col-md-7 text-end mt-5">
                                <h6 class="d-block mt-2 mb-0">Billed to: John Doe</h6>
                                <p class="text-secondary">4006 Locust View Drive<br>
                                    San Francisco CA<br>
                                    California
                                </p>
                            </div>
                        </div>
                        <br>
                        <div class="row justify-content-md-between">
                            <div class="col-md-4 mt-auto">
                                <h6 class="mb-0 text-start text-secondary">
                                    Invoice no
                                </h6>
                                <h5 class="text-start mb-0">
                                    #0453119
                                </h5>
                            </div>
                            <div class="col-lg-5 col-md-7 mt-auto">
                                <div class="row mt-5 text-end">
                                    <div class="col-md-6">
                                        <h6 class="text-secondary mb-0">Invoice date:</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="text-dark mb-0">06/03/2019</h6>
                                    </div>
                                </div>
                                <div class="row text-end">
                                    <div class="col-md-6">
                                        <h6 class="text-secondary mb-0">Due date:</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="text-dark mb-0">11/03/2019</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                          <div class="col-12">
                            <div class="table-responsive">
                              <table class="table text-right">
                                <thead class="bg-default">
                                  <tr>
                                    <th scope="col" class="pe-2 text-start ps-2">Item</th>
                                    <th scope="col" class="pe-2">Qty</th>
                                    <th scope="col" class="pe-2" colspan="2">Rate</th>
                                    <th scope="col" class="pe-2">Amount</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="text-start">Premium Support</td>
                                    <td class="ps-4">1</td>
                                    <td class="ps-4" colspan="2">$ 9.00</td>
                                    <td class="ps-4">$ 9.00</td>
                                  </tr>
                                  <tr>
                                    <td class="text-start">Soft UI Design System PRO</td>
                                    <td class="ps-4">3</td>
                                    <td class="ps-4" colspan="2">$ 100.00</td>
                                    <td class="ps-4">$ 300.00</td>
                                  </tr>
                                  <tr>
                                    <td class="text-start">Parts for service</td>
                                    <td class="ps-4">1</td>
                                    <td class="ps-4" colspan="2">$ 89.00</td>
                                    <td class="ps-4">$ 89.00</td>
                                  </tr>
                                </tbody>
                                <tfoot>
                                  <tr>
                                    <th></th>
                                    <th></th>
                                    <th class="h5 ps-4" colspan="2">Total</th>
                                    <th colspan="1" class="text-right h5 ps-4">$ 698</th>
                                  </tr>
                                </tfoot>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    <div class="card-footer mt-5">
                        <div class="row">
                            <div class="col-lg-5 text-left">
                                <h5>Thank you!</h5>
                                <p class="text-secondary text-sm">If you encounter any issues related to the invoice you
                                    can contact us at:</p>
                                <h6 class="text-secondary mb-0">
                                    email:
                                    <span class="text-dark">support@creative-tim.com</span>
                                </h6>
                            </div>
                            <div class="col-lg-5 ms-auto text-end">
                                <button class="btn bg-gradient-info mt-lg-7 mb-0" onClick="window.print()" type="button"
                                    name="button">Print</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
