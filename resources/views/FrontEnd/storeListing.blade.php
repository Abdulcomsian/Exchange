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
            <a class="list-group-item list-group-item-action list-2" href="#"
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
            <table class="table table-striped" >
              <thead>
                <tr style="border-top: 1px solid black">
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Creation Date</th>
                  <th scope="col">status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Scambled</td>
                  <td>12-feb-2022</td>
                  <td><span class="bdg bdg--primary">Active</span></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>22-feb-2022</td>
                  <td><span class="bdg bdg--danger">Sold</span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>


    @endsection()