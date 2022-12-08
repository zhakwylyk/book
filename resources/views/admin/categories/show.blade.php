@extends('admin.layouts.main')

@section('content')

     <div class="card">
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
            
                  <tbody>
            
                  <tr>
                      <td>id</td>
                      <td>Называния</td>
                    </tr>
            
                  <tr>
                      <td>{{$category->id}}</td>
                      <td>{{$category->title}}</td>
                    </tr>
               
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>


     @endsection