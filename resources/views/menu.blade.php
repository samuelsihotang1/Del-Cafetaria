<main id="main" class="main">
  <div class="pagetitle">
    <h1>Daftar Makanan dan Minuman</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Menu</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <div class="card">
    <div class="card-header">
      Data Makanan dan Minuman
    </div>
    <div class="card-body">
      <div class="row"></div>

      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Jenis</th>
              <th scope="col">Nama</th>
              <th scope="col">Gambar</th>
              <th scope="col">Harga</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($foods as $food)
            <tr>
              <th scope="row">{{ $food->id }}</th>
              <td>{{ $food->jenis }}</td>
              <td>{{ $food->name }}</td>
              <td>
                <img src="{{ $food->image }}" class="img-thumbnail" alt="...">
              </td>
              <td>{{ $food->price }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div><!-- End #main -->
</main>