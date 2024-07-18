<!doctype html>
<html lang="en">

<head>
  <title><?php echo isset($title) ? $title : 'Mua đất' ?></title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <link rel="icon" href="favicon.png">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
  <div class="container mt-5">

    <div class="row">
      <div class="col-lg-10 mx-auto">
        <div class="card">
          <div class="card-body">

            <nav class="navbar navbar-expand-sm navbar-light bg-light mb-3">

              <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" href="/" aria-current="page">Home
                    <span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/td.php">Toạ độ</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                  <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="#">Action 1</a>
                    <a class="dropdown-item" href="#">Action 2</a>
                  </div>
                </li>
              </ul>
            </nav>