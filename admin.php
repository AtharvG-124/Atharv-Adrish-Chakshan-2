<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/caladmin.css" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <style>
      .p{
        color: white;
      }

      .h1{
        color: white;
      }

      .searchUp {
        position: absolute;
        margin-left: 5%;
        margin-top: 10%;
        color: white;
      } 

      .results{
        position: absolute;
        margin-left: 5%;
        margin-top: 15%;
        padding-bottom: 1.5rem;
      }
      .order-table {
        padding-top: 4%;
        display: block;
        width: 80%;
        margin: auto;
      }

      table {
          font-family: "Optima", sans-serif;
          border-collapse: collapse;
          width: 100%;
      }
  
      td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        font-weight: 400;
      }

      .table-label {
          font-weight: bold;
          color: white;
      }

      .table-row{
        color:white;
      }
    </style>
</head>
    <body>
      <?php
          include_once 'header.php';
      ?>
      <div class="searchUp">
        <form action="search.php" method="POST">
          Menu Item Filter:
          <input type="text" name="meal" />
          <input type="submit" />
        </form>
        <br>

      </div>
      <div class = "results">
        <table>
          <tr>
              <th class="table-label">First Name</th>
              <th class="table-label">Last Name</th>
              <th class="table-label">Username</th>
              <th class="table-label">Student ID</th>
              <th class="table-label">Date of Order</th>
              <th class="table-label">Menu Item Choosen</th>
          </tr>
      </div>
    </body>
</html>
