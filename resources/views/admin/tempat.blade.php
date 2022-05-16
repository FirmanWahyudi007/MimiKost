@extends('admin.layouts.admin')
@section('title')
    MimiKost - Tempat Kost
@endsection
@section('content')
    <!-- Sales Overview -->
    <div class="card mt-6">

        <!-- header -->
        <div class="card-header flex flex-row justify-between">
            <h1 class="h6">Tempat Kost</h1>
        </div>
        <!-- end header -->

        <!-- body -->
        <div class="card-body grid grid-cols-2 gap-6 lg:grid-cols-1">
            <table class="table-fixed">
                <thead>
                    <tr>
                    <th>Song</th>
                    <th>Artist</th>
                    <th>Year</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                    <td>Malcolm Lockyer</td>
                    <td>1961</td>
                    </tr>
                    <tr>
                    <td>Witchy Woman</td>
                    <td>The Eagles</td>
                    <td>1972</td>
                    </tr>
                    <tr>
                    <td>Shining Star</td>
                    <td>Earth, Wind, and Fire</td>
                    <td>1975</td>
                    </tr>
                </tbody>
                </table>
        </div>
        <!-- end body -->

    </div>
    <!-- end Sales Overview -->
@endsection