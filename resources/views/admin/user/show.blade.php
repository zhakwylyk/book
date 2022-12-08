@extends('admin.layouts.main')

@section('content')

     <div class="card">
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
            
                  <tbody>
            
                  <tr>
                      <td>id</td>
                      <td>Имя</td>
                      <td>email</td>
                    </tr>
            
                  <tr>
                      <td>{{$user->id}}</td>
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                    </tr>
               
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>


     @endsection