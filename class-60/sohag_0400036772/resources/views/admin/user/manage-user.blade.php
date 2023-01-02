@extends('admin.master')
@section('title') 
User Product
@endsection
@section('content') 
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">User Manage</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                @if(session('message')) <span class="text-success"> {{ session('message') }} </span> @else All Users @endif 
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>sl</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $sl=1 @endphp
                                        @foreach($users as $user)
                                        <tr>
                                            <td>{{$sl++}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <a href="{{route('edit.user',['id'=>$user->id])}}" class="btn btn-outline-primary btn-sm">Edit</a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
@endsection