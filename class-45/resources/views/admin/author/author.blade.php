@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-xl-9 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="border p-4 rounded">
                        <div class="card-title d-flex align-items-center">
                            <h5 class="mb-0"> Add Author </h5>
                        </div>
                        <hr/>
                        <form action="{{ route('new.author') }}" method="post">
                            @csrf
                            <div class="row mb-3">
                                <label for="inputEnterAuthorName" class="col-sm-3 col-form-label">Enter Author Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="author_name" class="form-control" id="inputEnterAuthorName" placeholder="Enter Your Name">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-primary px-5"> Submit </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-9 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="border p-4 rounded">
                        <div class="card-title d-flex align-items-center">
                            <h5 class="mb-0"> Manage Author </h5>
                        </div>
                        <table class="table table-hover table-striped table-bordered">
                            <tr>
                                <th>sl</th>
                                <th>author name</th>
                                <th>action</th>
                            </tr>
                            @php $i=1 @endphp
                            @foreach($authors as $author)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $author->author_name }}</td>
                                    <td>
                                        <a href="#" class="btn btn-primary"> Edit </a>
                                        <a href="#" class="btn btn-danger"> Delete </a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
