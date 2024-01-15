<main id="main" class="main">
  <div class="pagetitle">
    <h1>Order</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Order</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <div class="card">
    <div class="card-header">
      Data Orderan
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col d-flex justify-content-end">
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Buat Order</button>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Kode Order</th>
              <th scope="col">Pelanggan</th>
              <th scope="col">Pesanan</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Arya Gunawan</td>
              <td>Milk Boba</td>
              <td>
                <button class="btn btn-info"><i class="bi bi-trash"></i></button>
              </td>

              <!-- Hapus Modal -->
              <div class="modal" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Modal title</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <p>Modal body text goes here.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                      <button type="button" class="btn btn-primary">Hapus</button>
                    </div>
                  </div>
                </div>
              </div>

            </tr>
          </tbody>
        </table>
      </div>

      <!-- Modal Buat Order-->

      <form enctype="multipart/form-data" wire:submit.prevent="addPesanan" class="modal fade" id="exampleModal"
        tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-fullscreen-md-down">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Buat Order</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col">
                  <select class="form-select" id="autoSizingSelect" wire:model="chosenFood" name="chosenFood"
                    id="chosenFood" autocomplete="chosenFood">
                    <option selected>Choose...</option>
                    @foreach ($foods as $food)
                    <option value="{{ $food->id }}">{{ $food->name }}</option>
                    @endforeach
                  </select>
                  @error('chosenFood')
                  <strong style="font-size: 15px">{{ $message }}</strong>
                  @enderror
                </div>
                <div class="col">
                  <input wire:model="jumlah" name="jumlah" id="jumlah" autocomplete="jumlah" type="text"
                    class="form-control" placeholder="Jumlah" aria-label="Jumlah">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Buat Pesanan</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
</main>