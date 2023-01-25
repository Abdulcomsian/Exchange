@extends('layouts.frontEnd.master')
@section('content')
    @include('layouts.frontEnd.header')
    <div class="container store-listing">
        <div class="row">
            <div class="col-md-12 text-center mt-5 mb-4 store-listing--title">
                Store Listing
            </div>
            <div class="col-md-3 store-listing--content">
                <div id="list-example" class="list-group">
                    <a
                        class="list-group-item list-group-item-action list-1 active"
                        href="#"
                    >Store Listing</a
                    >
                    <a class="list-group-item list-group-item-action list-2" href="{{route('logout')}}"
                    >Logout</a
                    >
                </div>
            </div>
            <div class="col-md-8 store-listing--table">
                <div
                    data-spy="scroll"
                    data-target="#list-example"
                    data-offset="0"
                    class="scrollspy-example"
                >
                    <table class="table table-striped">
                        <thead>
                        <tr style="border-top: 1px solid black">
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Creation Date</th>
                            <th scope="col">status</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($stores as $store)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$store->store_name}}</td>
                                <td>{{$store->created_at}}</td>
                                <td>
                                    @if($store->status == 'approved')
                                        <span class="bdg bdg--primary">Approved</span>
                                    @elseif($store->status == 'rejected')
                                        <span class="bdg bdg--danger">Rejected</span>
                                    @else
                                        <span class="bdg bdg--primary">Pending</span>
                                    @endif
                                </td>
                                {{--                  <td><span class="bdg bdg--primary">Active</span></td>--}}
                                <td>
                                    <a href="{{route('sell_your_business.edit', $store->id)}}"
                                       class="btn btn-sm btn-info"><i class="fa fa-pencil"></i></a>
                                    <a href="{{route('single_business',$store->id)}}"
                                       class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection()

@section('script')
    <script>
        const btnLink1 = document.querySelector(".list-1");
        const btnLink2 = document.querySelector(".list-2");

        btnLink1.addEventListener("click", function () {
            this.classList.add("active");
            btnLink2.classList.remove("active");
        });
        btnLink2.addEventListener("click", function () {
            this.classList.add("active");
            btnLink1.classList.remove("active");
        });
    </script>

@endsection
