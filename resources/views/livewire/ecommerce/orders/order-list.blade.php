<div class="container-fluid py-4">
    <div class="d-flex justify-content-between">
        <div>
            <a href="javascript:;" class="btn btn-icon bg-gradient-primary">
                New order
            </a>
        </div>
        <div class="">
            <div class="dropdown d-inline">
                <a href="#" class="btn btn-outline-dark dropdown-toggle " data-bs-toggle="dropdown"
                    id="navbarDropdownMenuLink2">
                    Filters
                </a>
                <ul class="dropdown-menu dropdown-menu-lg-start px-2 py-3" aria-labelledby="navbarDropdownMenuLink2"
                    data-popper-placement="left-start">
                    <li><a class="dropdown-item border-radius-md" href="javascript:;">Status: Paid</a></li>
                    <li><a class="dropdown-item border-radius-md" href="javascript:;">Status: Refunded</a></li>
                    <li><a class="dropdown-item border-radius-md" href="javascript:;">Status: Canceled</a></li>
                    <li>
                        <hr class="horizontal dark my-2">
                    </li>
                    <li><a class="dropdown-item border-radius-md text-danger" href="javascript:;">Remove Filter</a></li>
                </ul>
            </div>
            <button class="btn btn-icon btn-outline-dark ms-2 export" data-type="csv" type="button">
                <span class="btn-inner--icon"><i class="ni ni-archive-2"></i></span>
                <span class="btn-inner--text">Export CSV</span>
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-flush" id="datatable-search">
                        <thead class="thead-light">
                            <tr>
                                <th>Id</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Customer</th>
                                <th>Product</th>
                                <th>Revenue</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="customCheck2">
                                        </div>
                                        <p class="text-xs font-weight-bold ms-2 mb-0">#10421</p>
                                    </div>
                                </td>
                                <td class="font-weight-bold">
                                    <span class="my-2 text-xs">1 Nov, 10:20 AM</span>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <div class="d-flex align-items-center">
                                        <button
                                            class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                class="fas fa-check" aria-hidden="true"></i></button>
                                        <span>Paid</span>
                                    </div>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <div class="d-flex align-items-center">
                                        <img src="../../../assets/img/team-2.jpg" class="avatar avatar-xs me-2">
                                        <span>Orlando Imieto</span>
                                    </div>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <span class="my-2 text-xs">Nike Sport V2</span>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <span class="my-2 text-xs">$140.20</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="form-check pt-0">
                                            <input class="form-check-input" type="checkbox" id="customCheck2">
                                        </div>
                                        <p class="text-xs font-weight-bold ms-2 mb-0">#10422</p>
                                    </div>
                                </td>
                                <td class="font-weight-bold">
                                    <span class="my-2 text-xs">1 Nov, 10:53 AM</span>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <div class="d-flex align-items-center">
                                        <button
                                            class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                class="fas fa-check" aria-hidden="true"></i></button>
                                        <span>Paid</span>
                                    </div>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <div class="d-flex align-items-center">
                                        <img src="../../../assets/img/team-1.jpg" class="avatar avatar-xs me-2">
                                        <span>Alice Murinho</span>
                                    </div>
                                </td>
                                <td class="font-weight-bold">
                                    <span class="my-2 text-xs">Valvet T-shirt</span>
                                </td>
                                <td class="font-weight-bold">
                                    <span class="my-2 text-xs">$42.00</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="customCheck2">
                                        </div>
                                        <p class="text-xs font-weight-bold ms-2 mb-0">#10423</p>
                                    </div>
                                </td>
                                <td class="font-weight-bold">
                                    <span class="my-2 text-xs">1 Nov, 11:13 AM</span>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <div class="d-flex align-items-center">
                                        <button
                                            class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                class="fas fa-undo" aria-hidden="true"></i></button>
                                        <span>Refunded</span>
                                    </div>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-xs me-2 bg-gradient-dark">
                                            <span>M</span>
                                        </div>
                                        <span>Michael Mirra</span>
                                    </div>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <span class="my-2 text-xs">
                                        Leather Wallet
                                        <span class="text-secondary ms-2"> +1 more </span>
                                    </span>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <span class="my-2 text-xs">$25.50</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="customCheck2">
                                        </div>
                                        <p class="text-xs font-weight-bold ms-2 mb-0">#10424</p>
                                    </div>
                                </td>
                                <td class="font-weight-bold">
                                    <span class="my-2 text-xs">1 Nov, 12:20 PM</span>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <div class="d-flex align-items-center">
                                        <button
                                            class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                class="fas fa-check" aria-hidden="true"></i></button>
                                        <span>Paid</span>
                                    </div>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex align-items-center">
                                            <img src="../../../assets/img/team-3.jpg" class="avatar avatar-xs me-2">
                                            <span>Andrew Nichel</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <span class="my-2 text-xs">
                                        Bracelet Onu-Lino
                                    </span>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <span class="my-2 text-xs">$19.40</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="customCheck2">
                                        </div>
                                        <p class="text-xs font-weight-bold ms-2 mb-0">#10425</p>
                                    </div>
                                </td>
                                <td class="font-weight-bold">
                                    <span class="my-2 text-xs">1 Nov, 1:40 PM</span>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <div class="d-flex align-items-center">
                                        <button
                                            class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                class="fas fa-times" aria-hidden="true"></i></button>
                                        <span>Canceled</span>
                                    </div>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex align-items-center">
                                            <img src="../../../assets/img/team-4.jpg" class="avatar avatar-xs me-2">
                                            <span>Sebastian Koga</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <span class="my-2 text-xs">
                                        Phone Case Pink
                                        <span class="text-secondary ms-2"> x 2 </span>
                                    </span>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <span class="my-2 text-xs">$44.90</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="customCheck2">
                                        </div>
                                        <p class="text-xs font-weight-bold ms-2 mb-0">#10426</p>
                                    </div>
                                </td>
                                <td class="font-weight-bold">
                                    <span class="my-2 text-xs">1 Nov, 2:19 AM</span>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <div class="d-flex align-items-center">
                                        <button
                                            class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                class="fas fa-check" aria-hidden="true"></i></button>
                                        <span>Paid</span>
                                    </div>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-xs me-2 bg-gradient-primary">
                                            <span>L</span>
                                        </div>
                                        <span>Laur Gilbert</span>
                                    </div>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <span class="my-2 text-xs">
                                        Backpack Niver
                                    </span>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <span class="my-2 text-xs">$112.50</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="customCheck2">
                                        </div>
                                        <p class="text-xs font-weight-bold ms-2 mb-0">#10427</p>
                                    </div>
                                </td>
                                <td class="font-weight-bold">
                                    <span class="my-2 text-xs">1 Nov, 3:42 AM</span>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <div class="d-flex align-items-center">
                                        <button
                                            class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                class="fas fa-check" aria-hidden="true"></i></button>
                                        <span>Paid</span>
                                    </div>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-xs me-2 bg-gradient-dark">
                                            <span>I</span>
                                        </div>
                                        <span>Iryna Innda</span>
                                    </div>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <span class="my-2 text-xs">
                                        Adidas Vio
                                    </span>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <span class="my-2 text-xs">$200.00</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="customCheck2">
                                        </div>
                                        <p class="text-xs font-weight-bold ms-2 mb-0">#10428</p>
                                    </div>
                                </td>
                                <td class="font-weight-bold">
                                    <span class="my-2 text-xs">2 Nov, 9:32 AM</span>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <div class="d-flex align-items-center">
                                        <button
                                            class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                class="fas fa-check" aria-hidden="true"></i></button>
                                        <span>Paid</span>
                                    </div>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-xs me-2 bg-gradient-dark">
                                            <span>A</span>
                                        </div>
                                        <span>Arrias Liunda</span>
                                    </div>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <span class="my-2 text-xs">
                                        Airpods 2 Gen
                                    </span>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <span class="my-2 text-xs">$350.00</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="customCheck2">
                                        </div>
                                        <p class="text-xs font-weight-bold ms-2 mb-0">#10429</p>
                                    </div>
                                </td>
                                <td class="font-weight-bold">
                                    <span class="my-2 text-xs">2 Nov, 10:14 AM</span>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <div class="d-flex align-items-center">
                                        <button
                                            class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                class="fas fa-check" aria-hidden="true"></i></button>
                                        <span>Paid</span>
                                    </div>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex align-items-center">
                                            <img src="../../../assets/img/team-5.jpg" class="avatar avatar-xs me-2">
                                            <span>Rugna Ilpio</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <span class="my-2 text-xs">
                                        Bracelet Warret
                                    </span>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <span class="my-2 text-xs">$15.00</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="customCheck2">
                                        </div>
                                        <p class="text-xs font-weight-bold ms-2 mb-0">#10430</p>
                                    </div>
                                </td>
                                <td class="font-weight-bold">
                                    <span class="my-2 text-xs">2 Nov, 12:56 PM</span>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <div class="d-flex align-items-center">
                                        <button
                                            class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                class="fas fa-undo" aria-hidden="true"></i></button>
                                        <span>Refunded</span>
                                    </div>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex align-items-center">
                                            <img src="../../../assets/img/ivana-squares.jpg"
                                                class="avatar avatar-xs me-2">
                                            <span>Anna Landa</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <span class="my-2 text-xs">
                                        Watter Bottle India
                                        <span class="text-secondary ms-2"> x 3 </span>
                                    </span>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <span class="my-2 text-xs">$25.00</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="customCheck2">
                                        </div>
                                        <p class="text-xs font-weight-bold ms-2 mb-0">#10431</p>
                                    </div>
                                </td>
                                <td class="font-weight-bold">
                                    <span class="my-2 text-xs">2 Nov, 3:12 PM</span>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <div class="d-flex align-items-center">
                                        <button
                                            class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                class="fas fa-check" aria-hidden="true"></i></button>
                                        <span>Paid</span>
                                    </div>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-xs me-2 bg-gradient-dark">
                                            <span>K</span>
                                        </div>
                                        <span>Karl Innas</span>
                                    </div>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <span class="my-2 text-xs">
                                        Kitchen Gadgets
                                    </span>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <span class="my-2 text-xs">$164.90</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="customCheck2">
                                        </div>
                                        <p class="text-xs font-weight-bold ms-2 mb-0">#10432</p>
                                    </div>
                                </td>
                                <td class="font-weight-bold">
                                    <span class="my-2 text-xs">2 Nov, 5:12 PM</span>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <div class="d-flex align-items-center">
                                        <button
                                            class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                class="fas fa-check" aria-hidden="true"></i></button>
                                        <span>Paid</span>
                                    </div>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-xs me-2 bg-gradient-info">
                                            <span>O</span>
                                        </div>
                                        <span>Oana Kilas</span>
                                    </div>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <span class="my-2 text-xs">
                                        Office Papers
                                    </span>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <span class="my-2 text-xs">$23.90</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Kanban scripts -->
<script src="../../../assets/js/plugins/datatables.js"></script>
<script>
    const dataTableSearch = new simpleDatatables.DataTable("#datatable-search", {
        searchable: true,
        fixedHeight: false,
        perPageSelect: false
    });

    document.querySelectorAll(".export").forEach(function(el) {
        el.addEventListener("click", function(e) {
            var type = el.dataset.type;

            var data = {
                type: type,
                filename: "soft-ui-" + type,
            };

            if (type === "csv") {
                data.columnDelimiter = "|";
            }

            dataTableSearch.export(data);
        });
    });

</script>
