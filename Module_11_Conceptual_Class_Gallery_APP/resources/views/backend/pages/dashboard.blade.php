@extends('backend.layouts.master')


@section('content')

<div class="page-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="h-100">
          <div class="row mb-3 pb-1">
            <div class="col-12">
              <div
                class="d-flex align-items-lg-center flex-lg-row flex-column"
              >
                <div class="flex-grow-1">
                  <h4 class="fs-16 mb-1">Good Morning, Prince!</h4>
                  <p class="text-muted mb-0">
                    Here's what's happening with your store today.
                  </p>
                </div>
              </div>
              <!-- end card header -->
            </div>
            <!--end col-->
          </div>
          <!--end row-->

          <div class="row">
            <div class="col-xl-3 col-md-6">
              <!-- card -->
              <div class="card card-animate">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="flex-grow-1 overflow-hidden">
                      <p
                        class="text-uppercase fw-medium text-muted text-truncate mb-0"
                      >
                        Total Earnings
                      </p>
                    </div>
                    <div class="flex-shrink-0">
                      <h5 class="text-success fs-14 mb-0">
                        <i
                          class="ri-arrow-right-up-line fs-13 align-middle"
                        ></i>
                        +16.24 %
                      </h5>
                    </div>
                  </div>
                  <div
                    class="d-flex align-items-end justify-content-between mt-4"
                  >
                    <div>
                      <h4 class="fs-22 fw-semibold ff-secondary mb-4">
                        $<span
                          class="counter-value"
                          data-target="559.25"
                          >0</span
                        >k
                      </h4>
                      <a
                        href="#"
                        class="link-secondary text-decoration-underline"
                        >View net earnings</a
                      >
                    </div>
                    <div class="avatar-sm flex-shrink-0">
                      <span
                        class="avatar-title bg-primary-subtle rounded fs-3"
                      >
                        <i class="bx bx-dollar-circle text-primary"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <!-- end card body -->
              </div>
              <!-- end card -->
            </div>
            <!-- end col -->

            <div class="col-xl-3 col-md-6">
              <!-- card -->
              <div class="card card-animate">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="flex-grow-1 overflow-hidden">
                      <p
                        class="text-uppercase fw-medium text-muted text-truncate mb-0"
                      >
                        Orders
                      </p>
                    </div>
                    <div class="flex-shrink-0">
                      <h5 class="text-danger fs-14 mb-0">
                        <i
                          class="ri-arrow-right-down-line fs-13 align-middle"
                        ></i>
                        -3.57 %
                      </h5>
                    </div>
                  </div>
                  <div
                    class="d-flex align-items-end justify-content-between mt-4"
                  >
                    <div>
                      <h4 class="fs-22 fw-semibold ff-secondary mb-4">
                        <span class="counter-value" data-target="36894"
                          >0</span
                        >
                      </h4>
                      <a
                        href="#"
                        class="link-secondary text-decoration-underline"
                        >View all orders</a
                      >
                    </div>
                    <div class="avatar-sm flex-shrink-0">
                      <span
                        class="avatar-title bg-primary-subtle rounded fs-3"
                      >
                        <i class="bx bx-shopping-bag text-primary"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <!-- end card body -->
              </div>
              <!-- end card -->
            </div>
            <!-- end col -->

            <div class="col-xl-3 col-md-6">
              <!-- card -->
              <div class="card card-animate">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="flex-grow-1 overflow-hidden">
                      <p
                        class="text-uppercase fw-medium text-muted text-truncate mb-0"
                      >
                        Customers
                      </p>
                    </div>
                    <div class="flex-shrink-0">
                      <h5 class="text-success fs-14 mb-0">
                        <i
                          class="ri-arrow-right-up-line fs-13 align-middle"
                        ></i>
                        +29.08 %
                      </h5>
                    </div>
                  </div>
                  <div
                    class="d-flex align-items-end justify-content-between mt-4"
                  >
                    <div>
                      <h4 class="fs-22 fw-semibold ff-secondary mb-4">
                        <span class="counter-value" data-target="183.35"
                          >0</span
                        >M
                      </h4>
                      <a
                        href="#"
                        class="link-secondary text-decoration-underline"
                        >See details</a
                      >
                    </div>
                    <div class="avatar-sm flex-shrink-0">
                      <span
                        class="avatar-title bg-primary-subtle rounded fs-3"
                      >
                        <i class="bx bx-user-circle text-primary"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <!-- end card body -->
              </div>
              <!-- end card -->
            </div>
            <!-- end col -->

            <div class="col-xl-3 col-md-6">
              <!-- card -->
              <div class="card card-animate">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="flex-grow-1 overflow-hidden">
                      <p
                        class="text-uppercase fw-medium text-muted text-truncate mb-0"
                      >
                        My Balance
                      </p>
                    </div>
                    <div class="flex-shrink-0">
                      <h5 class="text-muted fs-14 mb-0">+0.00 %</h5>
                    </div>
                  </div>
                  <div
                    class="d-flex align-items-end justify-content-between mt-4"
                  >
                    <div>
                      <h4 class="fs-22 fw-semibold ff-secondary mb-4">
                        $<span
                          class="counter-value"
                          data-target="165.89"
                          >0</span
                        >k
                      </h4>
                      <a
                        href="#"
                        class="link-secondary text-decoration-underline"
                        >Withdraw money</a
                      >
                    </div>
                    <div class="avatar-sm flex-shrink-0">
                      <span
                        class="avatar-title bg-primary-subtle rounded fs-3"
                      >
                        <i class="bx bx-wallet text-primary"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <!-- end card body -->
              </div>
              <!-- end card -->
            </div>
            <!-- end col -->
          </div>
          <!-- end row-->

          {{-- Revenue --}}
          {{-- <div class="row">
            <div class="col-xl-8">
              <div class="card">
                <div
                  class="card-header border-0 align-items-center d-flex"
                >
                  <h4 class="card-title mb-0 flex-grow-1">Revenue</h4>
                  <div>
                    <button
                      type="button"
                      class="btn btn-soft-secondary btn-sm"
                    >
                      ALL
                    </button>
                    <button
                      type="button"
                      class="btn btn-soft-secondary btn-sm"
                    >
                      1M
                    </button>
                    <button
                      type="button"
                      class="btn btn-soft-secondary btn-sm"
                    >
                      6M
                    </button>
                    <button
                      type="button"
                      class="btn btn-soft-primary btn-sm"
                    >
                      1Y
                    </button>
                  </div>
                </div>
                <!-- end card header -->

                <div class="card-header p-0 border-0 bg-light-subtle">
                  <div class="row g-0 text-center">
                    <div class="col-6 col-sm-3">
                      <div
                        class="p-3 border border-dashed border-start-0"
                      >
                        <h5 class="mb-1">
                          <span class="counter-value" data-target="7585"
                            >0</span
                          >
                        </h5>
                        <p class="text-muted mb-0">Orders</p>
                      </div>
                    </div>
                    <!--end col-->
                    <div class="col-6 col-sm-3">
                      <div
                        class="p-3 border border-dashed border-start-0"
                      >
                        <h5 class="mb-1">
                          $<span
                            class="counter-value"
                            data-target="22.89"
                            >0</span
                          >k
                        </h5>
                        <p class="text-muted mb-0">Earnings</p>
                      </div>
                    </div>
                    <!--end col-->
                    <div class="col-6 col-sm-3">
                      <div
                        class="p-3 border border-dashed border-start-0"
                      >
                        <h5 class="mb-1">
                          <span class="counter-value" data-target="367"
                            >0</span
                          >
                        </h5>
                        <p class="text-muted mb-0">Refunds</p>
                      </div>
                    </div>
                    <!--end col-->
                    <div class="col-6 col-sm-3">
                      <div
                        class="p-3 border border-dashed border-start-0 border-end-0"
                      >
                        <h5 class="mb-1 text-primary">
                          <span
                            class="counter-value"
                            data-target="18.92"
                            >0</span
                          >%
                        </h5>
                        <p class="text-muted mb-0">
                          Conversation Ratio
                        </p>
                      </div>
                    </div>
                    <!--end col-->
                  </div>
                </div>
                <!-- end card header -->

                <div class="card-body p-0 pb-2">
                  <div class="w-100">
                    <div
                      id="customer_impression_charts"
                      data-colors='["--vz-light", "--vz-primary", "--vz-info"]'
                      class="apex-charts"
                      dir="ltr"
                    ></div>
                  </div>
                </div>
                <!-- end card body -->
              </div>
              <!-- end card -->
            </div>
            <!-- end col -->

            <div class="col-xl-4">
              <!-- card -->
              <div class="card card-height-100">
                <div class="card-header align-items-center d-flex">
                  <h4 class="card-title mb-0 flex-grow-1">
                    Sales by Locations
                  </h4>
                  <div class="flex-shrink-0">
                    <button
                      type="button"
                      class="btn btn-soft-primary btn-sm"
                    >
                      Export Report
                    </button>
                  </div>
                </div>
                <!-- end card header -->

                <!-- card body -->
                <div class="card-body">
                  <div
                    id="sales-by-locations"
                    data-colors='["--vz-light", "--vz-secondary", "--vz-primary"]'
                    style="height: 269px"
                    dir="ltr"
                  ></div>

                  <div class="px-2 py-2 mt-1">
                    <p class="mb-1">
                      Canada <span class="float-end">75%</span>
                    </p>
                    <div class="progress mt-2" style="height: 6px">
                      <div
                        class="progress-bar progress-bar-striped bg-primary"
                        role="progressbar"
                        style="width: 75%"
                        aria-valuenow="75"
                        aria-valuemin="0"
                        aria-valuemax="75"
                      ></div>
                    </div>

                    <p class="mt-3 mb-1">
                      Greenland <span class="float-end">47%</span>
                    </p>
                    <div class="progress mt-2" style="height: 6px">
                      <div
                        class="progress-bar progress-bar-striped bg-primary"
                        role="progressbar"
                        style="width: 47%"
                        aria-valuenow="47"
                        aria-valuemin="0"
                        aria-valuemax="47"
                      ></div>
                    </div>

                    <p class="mt-3 mb-1">
                      Russia <span class="float-end">82%</span>
                    </p>
                    <div class="progress mt-2" style="height: 6px">
                      <div
                        class="progress-bar progress-bar-striped bg-primary"
                        role="progressbar"
                        style="width: 82%"
                        aria-valuenow="82"
                        aria-valuemin="0"
                        aria-valuemax="82"
                      ></div>
                    </div>
                  </div>
                </div>
                <!-- end card body -->
              </div>
              <!-- end card -->
            </div>
            <!-- end col -->
          </div> --}}
          {{-- Revenue --}}
        </div>
  
      </div>

    </div>
  </div>
  <!-- container-fluid -->
</div>

@endsection