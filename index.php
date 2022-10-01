<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<title></title>
</head>
<body>


<?php include"navbar.php"; ?>




<!-- newsfeed -->

<div class="card d-flex" style="width: 100%">
  <div class="card-body">
    <!--Table-->
    <table class="table-responsive">
    </table>
    <table class="table table-hover table-forum text-center">
      <!--Table head-->
      <thead>
        <tr>
          <th></th>
          <th class="text-left">Topic</th>
          <th>Comments</th>
        </tr>
      </thead>
      <!--Table head-->
      <!--Table body-->
      <tbody>
        <tr>
          <td scope="row" class="text-nowrap">

            <a href="#" type="button" class="btn btn-outline-dark-green btn-sm p-1 m-0 waves-effect">
              <span class="value">0</span>
              <i class="fas fa-thumbs-up ml-1"></i>
            </a>
            <a href="#" button" class="btn btn-outline-danger btn-sm p-1 m-0 waves-effect">
              <span class="value">0</span>
              <i class="fas fa-thumbs-down ml-1"></i>
            </a>
          </td>
          <td class="text-start">
            <a href="#" class="font-weight-bold blue-text">
              Styling in the Shadow DOM With CSS Shadow Parts
            </a>
            <div class="my-2">
              <a href="#" class="blue-text">
                <strong>MDBootstrap</strong>
              </a>
              <span class="badge bg-secondary mx-1">staff</span><span
                class="badge bg-primary mx-1">pro</span><span class="badge bg-warning mx-1">premium</span>
              <span>a year ago</span>
              <div></div>
            </div>
          </td>
          <td>
            <a href="#" class="text-dark">
              <span>0</span>
              <i class="fas fa-comments ml-1"></i>
            </a>
          </td>
        </tr>
             </tbody>
      <!--Table body-->
    </table>

    <!-- Table -->

    <!--Bottom Table UI-->
    <div class="d-flex justify-content-center">
      <!--Pagination -->
      <nav class="my-2 pt-2">
        <ul class="pagination pagination-circle pg-info mb-0">
          <!--First-->
          <li class="page-item clearfix d-none d-md-block">
            <a href="#" class="page-link waves-effect">
              First </a>
          </li>
          <!--Arrow left-->
          <li class="page-item">
            <a href="#" class="page-link waves-effect" aria-label="Previous">
              <span aria-hidden="true">«</span>
              <span class="sr-only">
                Previous </span>
            </a>
          </li>
          <!--Numbers-->
          <li class="page-item">
            <a href="#" class="page-link waves-effect">11</a>
          </li>
          <li class="page-item">
            <a href="#" class="page-link waves-effect">12</a>
          </li>
          <li class="page-item active">
            <a href="#" class="page-link waves-effect">13</a>
          </li>
          <li class="page-item">
            <a href="#" class="page-link waves-effect">14</a>
          </li>
          <li class="page-item">
            <a href="#" class="page-link waves-effect">15</a>
          </li>
          <!--Arrow right-->
          <li class="page-item">
            <a href="#" class="page-link waves-effect" aria-label="Next">
              <span aria-hidden="true">»</span>
              <span class="sr-only">Next</span>
            </a>
          </li>
          <!--First-->
          <li class="page-item clearfix d-none d-md-block">
            <a href="#" class="page-link waves-effect">
              Last </a>
          </li>
        </ul>
      </nav>
      <!--/Pagination -->
    </div>
    <!--Bottom Table UI-->
  </div>
</div>

 
</body>
</html>