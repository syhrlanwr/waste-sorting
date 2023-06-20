@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="flex justify-center">
        <div class="card">
            <div class="card-header">MASUKKAN DATA WARGA</div>
            
            <div class="card-body">
                <form method="POST" action="{{ route('qrcitizen.data') }}">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                      <div class="form-group col-sm">
                        <label for="nama">Nama Kepala Keluarga</label>
                        <input type="name" name='namakk'class="form-control" id="namakk">
                      </div>

                      <div class="form-row">
                        <div class="form-group col-sm">
                          <label for="nama">Nomor Rumah</label>
                          <input type="number" name='norumah' class="form-control" id="norumah">
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group col-sm">
                              <label for="nama">RT</label>
                              <input type="number" name='rt' class="form-control" id="rt">
                        </div>

                        <div class="form-row">
                            <div class="form-group col-sm">
                              <label for="nama">RW</label>
                              <input type="number" name='rw' class="form-control" id="rw">
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="status" value="Memilah Sampah" checked>
                            <label class="form-check-label" for="status">
                              Memilah Sampah
                            </label>
                        </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="status" value="Tidak Memilah Sampah">
                            <label class="form-check-label" for="status">
                              Tidak Memilah Sampah
                            </label>
                            </div>

                            <div class="form-group row">
                                <label class="flex justify-center"></label>
                                <div class="flex justify-center">
                                <button type="submit" class="btn btn-primary">SIMPAN</button>
                                </div>
                            </div>

        </div>
        
    </div>
</div> --}}

<div class="h-screen flex justify-center items-center">
  <div class="card w-full bg-neutral text-neutral-content">
      <div class="card-body items-center text-start">
          <h2 class="card-title">MASUKKAN DATA WARGA</h2>
          <form method="POST" action="{{ route('qrcitizen.data') }}" class="flex flex-col px-4 py-6 space-y-3 w-full">
              @csrf
              @method('PUT')
              <div>
                  <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Kepala
                      Keluarga</label>
                  <input type="name" name="namakk" id="nama"
                      class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                      placeholder="Nama Kepala Keluarga" required>
              </div>
              <div>
                  <label for="norumah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                      Rumah</label>
                  <input type="number" name="norumah" id="norumah"
                      class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                      placeholder="Nomor Rumah" required>
              </div>
              <div>
                  <label for="rt"
                      class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">RT</label>
                  <input type="number" name="rt" id="rt"
                      class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                      placeholder="RT" required>
              </div>
              <div>
                  <label for="rw"
                      class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">RW</label>
                  <input type="number" name="rw" id="rw"
                      class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                      placeholder="RW" required>
              </div>
              <div class="flex flex-row py-2">
                  <div class="flex items-center me-4">
                      <input type="radio" name="status" id="status" value="Memilah Sampah" checked class="mr-2">
                      <label for="status"
                          class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Memilah Sampah</label>
                  </div>
                  <div class="flex items-center">
                      <input type="radio" name="status" id="status" value="Tidak Memilah Sampah" class="mr-2">
                      <label for="status" class=" mb-2 text-sm font-medium text-gray-900 dark:text-white">Tidak
                          Memilah Sampah</label>
                  </div>
              </div>
              <div class="flex flex-row justify-center">
                  <button type="submit"
                      class="btn btn-primary px-4 py-2 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">SIMPAN</button>
              </div>

          </form>
      </div>
  </div>
</div>
@endsection
