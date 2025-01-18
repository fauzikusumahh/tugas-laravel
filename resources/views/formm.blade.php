@extends('template.master')
@section('judul', 'Form')
@section('conten')

          <!-- left column -->
<div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                  <label for="namaGenre">Nama Genre</label>
                  <input type="text" class="form-control" id="namaGenre" name="nama" placeholder="Masukkan Nama Genre">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
              </form>
            </div>

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Film</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="judul">Judul Film</label>
                    <input type="text" class="form-control" id="judul" placeholder="Masukan Judul">
                  </div>
                  <div class="form-group">
                    <label for="ringkasan">Ringkasan</label>
                    <input type="text" class="form-control" id="ringkasan" placeholder="Masukin Ringkasan">
                  </div>
                  <div class="form-group">
                    <label for="tahun">Tahun</label>
                    <input type="number" class="form-control" id="tahun" placeholder="Masukin Tahun">
                  </div>
                  <div class="form-group">
                    <label for="poster">Poster</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="poster">
                        <label class="custom-file-label" for="poster">Pilih File</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Unggah</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
              </form>
            </div>
</div>
            <!-- /.card -->
@endsection