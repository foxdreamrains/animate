@extends('layouts.appadmin')
@section('title', 'Animate By Yunna Marcier')
@section('content')
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="material-icons">dashboard</i>
          <p>Dashboard</p>
      </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('userEdit') }}">
      <i class="material-icons">person</i>
      <p>Edit User</p>
  </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('produk') }}">
      <i class="material-icons">content_paste</i>
      <p>Produk</p>
  </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('pesan') }}">
      <i class="material-icons">forum</i>
      <p>Pesan</p>
  </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('kategori') }}">
      <i class="material-icons">layers</i>
      <p>Kategori</p>
  </a>
</li>
</ul>
</div>
</div>
<div class="main-panel">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
    <div class="container-fluid">
      <div class="navbar-wrapper">
        <a class="navbar-brand" href="javascript:;">Dashboard</a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end">
        <form class="navbar-form">
          <div class="input-group no-border">
            <input type="text" value="" class="form-control" placeholder="Search...">
            <button type="submit" class="btn btn-white btn-round btn-just-icon">
              <i class="material-icons">search</i>
              <div class="ripple-container"></div>
          </button>
      </div>
  </form>
  <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="javascript:;">
          <i class="material-icons">dashboard</i>
          <p class="d-lg-none d-md-block">
            Stats
        </p>
    </a>
</li>
<li class="nav-item dropdown">
    <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="material-icons">notifications</i>
      <span class="notification">5</span>
      <p class="d-lg-none d-md-block">
        Some Actions
    </p>
</a>
<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
  <a class="dropdown-item" href="#">Mike John responded to your email</a>
  <a class="dropdown-item" href="#">You have 5 new tasks</a>
  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
  <a class="dropdown-item" href="#">Another Notification</a>
  <a class="dropdown-item" href="#">Another One</a>
</div>
</li>
<li class="nav-item dropdown">
    <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="material-icons">person</i>
      <p class="d-lg-none d-md-block">
        Account
    </p>
</a>
<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
  <a class="dropdown-item" href="#"><strong>Master Admin Aku Sale</strong></a>
  <a class="dropdown-item" href="#">Profile</a>
  <a class="dropdown-item" href="#">Settings</a>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="#">Log out</a>
</div>
</li>
</ul>
</div>
</div>
</nav>
<!-- End Navbar -->
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">content_copy</i>
            </div>
            <p class="card-category">Laporan</p>
            <h3 class="card-title">49/200
                <small>Halaman</small>
            </h3>
        </div>
        <div class="card-footer">
          <div class="stats">
            <!-- <i class="material-icons text-danger">warning</i>
            <a href="javascript:;">Get More Space...</a> -->
        </div>
    </div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
  <div class="card card-stats">
    <div class="card-header card-header-success card-header-icon">
      <div class="card-icon">
        <i class="material-icons">store</i>
    </div>
    <p class="card-category">Pendapatan</p>
    <?php $hargaTotal = 0 ?>
    @foreach($produkJumlah as $harga)
    <?php $hargaTotal +=$harga['harga'];?>
    @endforeach
    <h3 class="card-title"><?php $rupiah = $hargaTotal; echo "Rp. ".number_format($rupiah,0,".",".");?></h3>
</div>
<div class="card-footer">
  <div class="stats">
    <i class="material-icons">date_range</i> Last 24 Hours
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
  <div class="card card-stats">
    <div class="card-header card-header-danger card-header-icon">
      <div class="card-icon">
        <i class="material-icons">add_shopping_cart</i>
    </div>
    <p class="card-category">Total Produk</p>
    <h3 class="card-title">{{ $produkJumlah->count() }}</h3>
</div>
<div class="card-footer">
  <div class="stats">
    <i class="material-icons">local_offer</i> Tag Toko
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
  <div class="card card-stats">
    <div class="card-header card-header-info card-header-icon">
      <div class="card-icon">
        <i class="fa fa-twitter"></i>
    </div>
    <p class="card-category">Followers</p>
    <h3 class="card-title">4327</h3>
</div>
<div class="card-footer">
  <div class="stats">
    <i class="material-icons">update</i> Just Updated
</div>
</div>
</div>
</div>
</div>
<div class="row">
    <div class="col-md-4">
      <div class="card card-chart">
        <div class="card-header card-header-success">
          <div class="ct-chart" id="dailySalesChart"></div>
      </div>
      <div class="card-body">
          <h4 class="card-title">Daily Sales</h4>
          <p class="card-category">
            <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
        </div>
        <div class="card-footer">
          <div class="stats">
            <i class="material-icons">access_time</i> updated 4 minutes ago
        </div>
    </div>
</div>
</div>
<div class="col-md-4">
  <div class="card card-chart">
    <div class="card-header card-header-warning">
      <div class="ct-chart" id="websiteViewsChart"></div>
  </div>
  <div class="card-body">
      <h4 class="card-title">Email Subscriptions</h4>
      <p class="card-category">Last Campaign Performance</p>
  </div>
  <div class="card-footer">
      <div class="stats">
        <i class="material-icons">access_time</i> campaign sent 2 days ago
    </div>
</div>
</div>
</div>
<div class="col-md-4">
  <div class="card card-chart">
    <div class="card-header card-header-danger">
      <div class="ct-chart" id="completedTasksChart"></div>
  </div>
  <div class="card-body">
      <h4 class="card-title">Completed Tasks</h4>
      <p class="card-category">Last Campaign Performance</p>
  </div>
  <div class="card-footer">
      <div class="stats">
        <i class="material-icons">access_time</i> campaign sent 2 days ago
    </div>
</div>
</div>
</div>
</div>
<div class="row">
    <div class="col-lg-6 col-md-12">
      <div class="card">
        <div class="card-header card-header-tabs card-header-primary">
          <div class="nav-tabs-navigation">
            <div class="nav-tabs-wrapper">
              <span class="nav-tabs-title">Tasks:</span>
              <ul class="nav nav-tabs" data-tabs="tabs">
                <li class="nav-item">
                  <a class="nav-link active" href="#profile" data-toggle="tab">
                    <i class="material-icons">bug_report</i> Bugs
                    <div class="ripple-container"></div>
                </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#messages" data-toggle="tab">
                <i class="material-icons">code</i> Website
                <div class="ripple-container"></div>
            </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#settings" data-toggle="tab">
            <i class="material-icons">cloud</i> Server
            <div class="ripple-container"></div>
        </a>
    </li>
</ul>
</div>
</div>
</div>
<div class="card-body">
  <div class="tab-content">
    <div class="tab-pane active" id="profile">
      <table class="table">
        <tbody>
          <tr>
            <td>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" value="" checked>
                  <span class="form-check-sign">
                    <span class="check"></span>
                </span>
            </label>
        </div>
    </td>
    <td>Sign contract for "What are conference organizers afraid of?"</td>
    <td class="td-actions text-right">
      <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
        <i class="material-icons">edit</i>
    </button>
    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
        <i class="material-icons">close</i>
    </button>
</td>
</tr>
<tr>
    <td>
      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" value="">
          <span class="form-check-sign">
            <span class="check"></span>
        </span>
    </label>
</div>
</td>
<td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
<td class="td-actions text-right">
  <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
    <i class="material-icons">edit</i>
</button>
<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
    <i class="material-icons">close</i>
</button>
</td>
</tr>
<tr>
    <td>
      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" value="">
          <span class="form-check-sign">
            <span class="check"></span>
        </span>
    </label>
</div>
</td>
<td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
</td>
<td class="td-actions text-right">
  <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
    <i class="material-icons">edit</i>
</button>
<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
    <i class="material-icons">close</i>
</button>
</td>
</tr>
<tr>
    <td>
      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" value="" checked>
          <span class="form-check-sign">
            <span class="check"></span>
        </span>
    </label>
</div>
</td>
<td>Create 4 Invisible User Experiences you Never Knew About</td>
<td class="td-actions text-right">
  <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
    <i class="material-icons">edit</i>
</button>
<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
    <i class="material-icons">close</i>
</button>
</td>
</tr>
</tbody>
</table>
</div>
<div class="tab-pane" id="messages">
  <table class="table">
    <tbody>
      <tr>
        <td>
          <div class="form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="" checked>
              <span class="form-check-sign">
                <span class="check"></span>
            </span>
        </label>
    </div>
</td>
<td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
</td>
<td class="td-actions text-right">
  <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
    <i class="material-icons">edit</i>
</button>
<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
    <i class="material-icons">close</i>
</button>
</td>
</tr>
<tr>
    <td>
      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" value="">
          <span class="form-check-sign">
            <span class="check"></span>
        </span>
    </label>
</div>
</td>
<td>Sign contract for "What are conference organizers afraid of?"</td>
<td class="td-actions text-right">
  <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
    <i class="material-icons">edit</i>
</button>
<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
    <i class="material-icons">close</i>
</button>
</td>
</tr>
</tbody>
</table>
</div>
<div class="tab-pane" id="settings">
  <table class="table">
    <tbody>
      <tr>
        <td>
          <div class="form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
              <span class="form-check-sign">
                <span class="check"></span>
            </span>
        </label>
    </div>
</td>
<td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
<td class="td-actions text-right">
  <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
    <i class="material-icons">edit</i>
</button>
<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
    <i class="material-icons">close</i>
</button>
</td>
</tr>
<tr>
    <td>
      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" value="" checked>
          <span class="form-check-sign">
            <span class="check"></span>
        </span>
    </label>
</div>
</td>
<td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
</td>
<td class="td-actions text-right">
  <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
    <i class="material-icons">edit</i>
</button>
<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
    <i class="material-icons">close</i>
</button>
</td>
</tr>
<tr>
    <td>
      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" value="" checked>
          <span class="form-check-sign">
            <span class="check"></span>
        </span>
    </label>
</div>
</td>
<td>Sign contract for "What are conference organizers afraid of?"</td>
<td class="td-actions text-right">
  <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
    <i class="material-icons">edit</i>
</button>
<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
    <i class="material-icons">close</i>
</button>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
  <div class="card">
    <div class="card-header card-header-warning">
      <h4 class="card-title">Employees Stats</h4>
      <p class="card-category">New employees on 15th September, 2016</p>
  </div>
  <div class="card-body table-responsive">
      <table class="table table-hover">
        <thead class="text-warning">
          <th>ID</th>
          <th>Name</th>
          <th>Salary</th>
          <th>Country</th>
      </thead>
      <tbody>
          <tr>
            <td>1</td>
            <td>Dakota Rice</td>
            <td>$36,738</td>
            <td>Niger</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Minerva Hooper</td>
            <td>$23,789</td>
            <td>Curaçao</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Sage Rodriguez</td>
            <td>$56,142</td>
            <td>Netherlands</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Philip Chaney</td>
            <td>$38,735</td>
            <td>Korea, South</td>
        </tr>
    </tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<footer class="footer">
    <div class="container-fluid">
      <nav class="float-left">
        <ul>
          <li>
            <a href="https://www.creative-tim.com">
              Creative Tim
          </a>
      </li>
      <li>
        <a href="https://creative-tim.com/presentation">
          About Us
      </a>
  </li>
  <li>
    <a href="http://blog.creative-tim.com">
      Blog
  </a>
</li>
<li>
    <a href="https://www.creative-tim.com/license">
      Licenses
  </a>
</li>
</ul>
</nav>
<div class="copyright float-right">
    &copy;
    <script>
      document.write(new Date().getFullYear())
  </script>, made with <i class="material-icons">favorite</i> by
  <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
</div>
</div>
</footer>
</div>
</div>
<div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
    </a>
    <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Filters</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger active-color">
            <div class="badge-colors ml-auto mr-auto">
              <span class="badge filter badge-purple" data-color="purple"></span>
              <span class="badge filter badge-azure" data-color="azure"></span>
              <span class="badge filter badge-green" data-color="green"></span>
              <span class="badge filter badge-warning" data-color="orange"></span>
              <span class="badge filter badge-danger" data-color="danger"></span>
              <span class="badge filter badge-rose active" data-color="rose"></span>
          </div>
          <div class="clearfix"></div>
      </a>
      <li class="button-container">
          <a href="https://demos.creative-tim.com/material-dashboard/docs/2.1/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block">
            View Documentation
          </a>
        </li>
        <li class="button-container github-star">
          <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
        </li>
        <li class="header-title">Thank you for 95 shares!</li>
        <li class="button-container text-center">
          <button id="twitter" class="btn btn-round btn-twitter"><i class="fa fa-twitter"></i> &middot; 45</button>
          <button id="facebook" class="btn btn-round btn-facebook"><i class="fa fa-facebook-f"></i> &middot; 50</button>
          <br>
          <br>
        </li>
      </ul>
    </div>
  </div>
@endsection
