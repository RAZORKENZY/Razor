<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>PT. DAYA MAKMUR PERKASA</title>
  <link href="/data_motor/assets/logo.png" rel='shortcut icon'>
</head>

<body class="bg-dark text-light text-center">
  <nav class="navbar navbar-expand-lg navbar-dark bg-black text-light sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">PT. DAYA MAKMUR PERKASA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/data_motor/utama.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/data_motor/showroom/showroom.php">Motorcycle Online Showrooom </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Others
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/data_motor/contact">Contact</a></li>
              <li><a class="dropdown-item" href="" >Soon</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
            </ul>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Coming Soon!" aria-label="Search">
          <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

<head>
    <title>Data Penjualan Sepeda Motor</title>
    <style>
        table {
            border-collapse: collapse;
            width: device-width;
        }

        th, td {
            padding: 6px;
            text-align: left;
            border-bottom: 3px solid white;
            border-top: 3px solid white;
            border-left: 3px solid white;
            border-right: 3px solid white;
        }
    </style>
</head>
<body>
    <h2>Data Pembeli</h2>
    <a class="btn btn-primary" href="/data_motor/utama.php">Back</a>
    <br> </br>
    <?php
    // Koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "data_motor");

    // Periksa koneksi
    if (!$conn) {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }

    // Query untuk mendapatkan data penjualan
    $motor = mysqli_query(
        $conn, 
        "SELECT motor.nama_motor AS nama, motor.jenis_motor AS jenis, motor.harga AS harga
         FROM pembelian 
         JOIN motor ON pembelian.motor_id = motor.id");
    
                 

    

    if (mysqli_num_rows($motor) > 0) {
        // Menampilkan data dalam tabel
        echo "<table align=center>";
        echo "<tr>
                <th>Nama Pembeli</th>
                <th>Alamat Pembeli</th>
                <th>Nomor Telepon Pembeli</th>
                
            </tr>";

        while ($row = mysqli_fetch_assoc($motor)) {
            echo "<tr>";
            echo "<td>" . $row['nama'] . "</td>";
            echo "<td>" . $row['jenis'] . "</td>";
            echo "<td>" . $row['harga'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Tidak ada data penjualan.";
    }

    // Menutup koneksi database
    mysqli_close($conn);
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
          src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>
</html>
<footer class="bg-grey text-center fw-bold p-2 text-light">
      <p>Copyright ©️ PT. DAYA MAKMUR PERKASA. All right reserved.</p>
    </footer>
</body>
</html>

