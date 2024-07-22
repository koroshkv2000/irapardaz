@extends("main")
@section("content")
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">

        <div class="d-flex flex-column flex-column-fluid">

            <div class="card card-flush py-4">

                <div class="card-header">
                    <div class="card-title">
                        <h2>لینک های ساخته شده</h2>
                    </div>
                </div>


                <div class="card-body p-20">
                    <table class="table table-striped">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">تعداد نمایش</th>
                            <th scope="col">لینک</th>
                            <th scope="col">لینک</th>
                        </tr>

                   @foreach($links as $i => $link)
                            <tr>
                                <td>{{ $i + 1 }}</td>
                                <td>{{ $link["view"]  }}</td>
                                <td>{{ $link["url"] }}</td>
                                <td><a href="{{ url("/s/" . $link["shortCode"]) }}" target="_blank">{{ url("/s/" . $link["shortCode"])  }}</a></td>
                            </tr>
                   @endforeach
                    </table>

                </div>

            </div>

        </div>



    </div>
@endsection
