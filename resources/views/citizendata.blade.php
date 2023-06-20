@extends('layouts.app')

@section('content')
    {{-- <div class="container">
    <div class="flex justify-center text align center">
        <div class="card">
            
            <div class="card-header text-center">DATA WARGA KAMPUNG DURIAN RUNTUH</div>
            <form action="{{ route('dataByDate') }}" method="GET">
                <table class="table table-striped">
                    <tr class="text-center">
                        <td colspan="3">
                            <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="form-control" required>
                        </td>
                        <td colspan="3">
                            <input type="date" name="tanggal_selesai" id="tanggal_selesai" class="form-control" required>
                        </td>
                        <td colspan="2">
                            <button type="submit" class="btn btn-primary">Filter</button>
                            
                        </td>
                    </tr>
                
                    <tr>
                        <th>No</th>
                        <th>Nama Kepala Keluarga</th>
                        <th>Nomor Rumah</th>
                        <th>RT</th>
                        <th>RW</th>
                        <th>Status</th>
                        <th>Tanggal</th>
                        <th>Opsi</th>
                    </tr>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item['namakk'] }}</td>
                        <td>{{ $item['norumah'] }}</td>
                        <td>{{ $item['rt'] }}</td>
                        <td>{{ $item['rw'] }}</td>
                        <td>{{ $item['status'] }}</td>
                        <td>{{ $item['created_at'] }}</td>
                        <td>
                            <a href="{{ url('update', $item->id) }}" class="btn btn-info">Edit</a>
                            <a href="{{ url('delete', $item->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                   
                    @endforeach
                </table>
                <div>
                    {!! $chart->container() !!}
                </div>
                
            </form>
        </div>
      
    </div>
</div> --}}

    <div class="card w-full bg-neutral text-neutral-content py-5 overflow-x-auto relative">
        <div class="card-body items-center text-center">
            <h2 class="card-title">DATA WARGA KAMPUNG DURIAN RUNTUH</h2>
            <div class="justify-center card-actions">
                <form action="{{ route('dataByDate') }}" method="GET" class="flex flex-col justify-center">
                    <div class="overflow-x-auto">
                        <div class="inline-block min-w-full overflow-hidden">

                            <table class="table-striped table min-w-full">
                                <tr class="text-center">
                                    <td colspan="3">
                                        <input type="date" name="tanggal_mulai" id="tanggal_mulai"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:ring-opacity-50"
                                            required>
                                    </td>
                                    <td colspan="4">
                                        <input type="date" name="tanggal_selesai" id="tanggal_selesai"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:ring-opacity-50"
                                            required>
                                    </td>
                                    <td colspan="1">
                                        <button type="submit" class="btn btn-primary">Filter</button>
                                    </td>
                                    {{-- <td colspan="2">
                                        <a class="btn btn-primary" href="{{ route('citizen.data') }}">Tambah Data</a>
        
                                    </td> --}}
                                </tr>
        
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kepala Keluarga</th>
                                    <th>Nomor Rumah</th>
                                    <th>RT</th>
                                    <th>RW</th>
                                    <th>Status</th>
                                    <th>Tanggal</th>
                                    <th>Opsi</th>
                                </tr>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item['namakk'] }}</td>
                                        <td>{{ $item['norumah'] }}</td>
                                        <td>{{ $item['rt'] }}</td>
                                        <td>{{ $item['rw'] }}</td>
                                        <td>{{ $item['status'] }}</td>
                                        <td>{{ $item['created_at'] }}</td>
                                        <td>
                                            <a href="{{ url('update', $item->id) }}" class="btn btn-info">Edit</a>
                                            <a href="{{ url('delete', $item->id) }}" class="btn btn-error">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    <div class="py-6"
                        {!! $chart->container() !!}
                    </div>

                </form>
            </div>
        </div>

        <script src="{{ $chart->cdn() }}"></script>

        {{ $chart->script() }}
    @endsection
