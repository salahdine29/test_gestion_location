@extends('dashbord.layouts.app')
@section('content')
@section('title')
Dashbord | Gestion Location
@endsection
<div class="container-fluid mt--7">
    <div class="row">
    </div>
    <div class="row mt-5">
      <div class="col-xl-8 mb-5 mb-xl-0">
        <div class="card shadow">
          <div class="card-header border-0">
            <div class="row align-items-center">
              <div class="col">
                <h3 class="mb-0">Voitures Reservées</h3>
              </div>
              <div class="col text-right">
                <a href="#!" class="btn btn-sm btn-primary">See all</a>
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <!-- Projects table -->
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th scope="col">image</th>
                  <th scope="col">Matricule</th>
                  <th scope="col">jour</th>
                  <th scope="col"> date loer</th>
                  <th scope="col"> date retour</th>
                  <th scope="col">locataire</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">
                    /argon/
                  </th>
                  <td>
                    4,569
                  </td>
                  <td>
                    340
                  </td>
                  <td>
                    <i class="fas fa-arrow-up text-success mr-3"></i> 46,53%
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    /argon/index.html
                  </th>
                  <td>
                    3,985
                  </td>
                  <td>
                    319
                  </td>
                  <td>
                    <i class="fas fa-arrow-down text-warning mr-3"></i> 46,53%
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-xl-4">
        <div class="card shadow">
          <div class="card-header border-0">
            <div class="row align-items-center">
              <div class="col">
                <h3 class="mb-0">Social traffic</h3>
              </div>
              <div class="col text-right">
                <a href="#!" class="btn btn-sm btn-primary">See all</a>
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <!-- Projects table -->
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th scope="col">Referral</th>
                  <th scope="col">Visitors</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">
                    Facebook
                  </th>
                  <td>
                    1,480
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="mr-2">60%</span>
                      <div>
                        <div class="progress">
                          <div class="progress-bar bg-gradient-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    Facebook
                  </th>
                  <td>
                    5,480
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="mr-2">70%</span>
                      <div>
                        <div class="progress">
                          <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    Google
                  </th>
                  <td>
                    4,807
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="mr-2">80%</span>
                      <div>
                        <div class="progress">
                          <div class="progress-bar bg-gradient-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    Instagram
                  </th>
                  <td>
                    3,678
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="mr-2">75%</span>
                      <div>
                        <div class="progress">
                          <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    twitter
                  </th>
                  <td>
                    2,645
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="mr-2">30%</span>
                      <div>
                        <div class="progress">
                          <div class="progress-bar bg-gradient-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;"></div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  
    
  </div>
@endsection