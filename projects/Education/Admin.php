<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="css/index.css">
  <!-- jquery  cdn-->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</head>

<body>
  <!-- <menu-btn -->
  <div class="container-fluid d-flex justify-content-end bg-black text-white">
    <div>
      <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions"
        aria-controls="offcanvasWithBothOptions" style="font-weight: 700;"><i class="bi bi-list " style="font-size: 40px;
      color: white;"></i></button>

    </div>
  </div>
  <!-- side menu -->


  <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
    aria-labelledby="offcanvasWithBothOptionsLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Menu</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="user">
        <div>
          <img src="img/profile9.jpg" alt="">
        </div>
      </div>
      <ul class="menu_btns">
        <li class="menu_list_btn" onclick="container_switcher(0)">Home</li>
        <li class="menu_list_btn" onclick="container_switcher(1)">Requests</li>
        <li class="menu_list_btn" onclick="container_switcher(2)">Teachers</li>
        <li class="menu_list_btn" onclick="container_switcher(3)">students</li>
        <li class="menu_list_btn" onclick="container_switcher(4)">Notes</li>
        <li class="menu_list_btn" onclick="container_switcher(5)"> Books</li>
        <li class="menu_list_btn" onclick="container_switcher(6)">Notification</li>
        <li class="menu_list_btn" onclick="container_switcher(7)">Add New</li>
        <li class="menu_list_btn" onclick="container_switcher(8)"><button class="btn btn-primary">Edit</button></li>
        <li class="menu_list_btn" onclick="container_switcher()"><button class="btn btn-primary">Log-Out</button></li>
      </ul>
    </div>
  </div>
  <!-- seprate_data_divs -->
  <div class="container-fluid ">
    <div class="row">
      <div class="col-12 data_con" >
        <div class="data">
          <h1>Home</h1>
          <br>
          <table id="myTable" class="display">
            <thead>
              <tr>
                <th style="text-align: center;">Column 1</th>
                <th style="text-align: center;">Column 2</th>
                <th style="text-align: center;">Column 3</th>
                <th style="text-align: center;">Column 4</th>
                <th style="text-align: center;">Column 5</th>
                <th style="text-align: center;">Column 6</th>
              
                
                
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Row 1 Data 1</td>
                <td>Row 1 Data 2</td>
                <td>Row 1 Data 1</td>
                <td>Row 1 Data 2</td>
                <td>Row 1 Data 1</td>
                <td>Row 1 Data 2</td>
                
              </tr>
              <tr>
                <td>Row 2 Data 1</td>
                <td>Row 2 Data 2</td>
                <td>Row 2 Data 1</td>
                <td>Row 2 Data 2</td>
                <td>Row 2 Data 1</td>
                <td>Row 2 Data 1</td>
              </tr>
              
            </tbody>
          </table>
        </div>
        <div class="data">
          <h1>Requests</h1>
        </div>
        <div class="data">
          <h1>Teachers</h1>
        </div>
        <div class="data">
          <h1>students</h1>
        </div>
        <div class="data">
          <h1>Notes</h1>
        </div>
        <div class="data">
          <h1>Books</h1>
        </div>
        <div class="data">
          <h1>Notification</h1>
        </div>
        <div class="data">
          <h1>Add New</h1>
        </div>
        <div class="data">
          <h1>Edit</h1>
        </div>

      </div>
    </div>

  </div>
  <div class="container-fluid text-center">
    <h3>UditDhiman</h3>
  </div>
  <!-- Bootstrap js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <!-- jquery script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable();
      $('#Request').DataTable();
      $('#Student_table').DataTable();
    }
    );
  </script>

  <!-- SELF SCRIPT -->
  <script src="js/index.js"></script>

</body>

</html>
