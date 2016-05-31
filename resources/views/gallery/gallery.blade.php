@extends('master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>My Galleries</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            @if($galleries->count() > 0)
                <table class="table table-striped table-bordered table-responsive">
                    <thead>
                        <tr class="info">
                            <th>Name of the Gallery</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($galleries as $gallery)
                        <tr>
                            <td>{{ $gallery -> name }}
                                <span class="pull-right">
                                    {{ $gallery->images()->count(). ' pics' }}
                                </span>
                            </td>
                            <td><a href="{{ url('gallery/view/'. $gallery->id) }}">View</a> /
                                <a href="{{ url('gallery/delete/'. $gallery->id) }}">Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
        <div class="col-md-4">
            @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form class="form" method="post" action="{{ url('gallery/save') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <input type="text" name="gallery_name" id="gallery_name" placeholder="Name of The Gallery"
                           class="form-control" value="{{ old('gallery_name') }}" >
                </div>

                <button class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection