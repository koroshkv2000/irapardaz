@extends("main")
@section("content")
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">

        <div class="d-flex flex-column flex-column-fluid">

            <div class="card card-flush py-4">

                <div class="card-header">
                    <div class="card-title">
                        <h2>افزودن لینک جدید</h2>
                    </div>
                </div>


                <div class="card-body p-20">

                    <form action="" method="post">
                        @csrf
                        <div class="mb-10 fv-row">

                            <label class="required form-label">لینک مورد نظر:</label>
                            <input type="text" name="url" class="form-control mb-2 w-25" dir="ltr" placeholder="https://google.com" value="" />
                            <ul class="text-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>



                        </div>
                        <input type="submit" value="ثبت" class="btn btn-outline ">


                    </form>

                </div>

            </div>

        </div>



    </div>
@endsection
