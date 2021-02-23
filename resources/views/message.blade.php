@extends('layouts.dev')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Form') }}</div>

                <div class="card-body">

                <form method="post" action="{{ route('message.post') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="name" class="form-control" name="name" placeholder="Name" />
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <input type="email" class="form-control" name="email" placeholder="Email" required />
                            <input type="text" class="form-control" name="siteUrl" placeholder="Site URL" />
                            <br />
                            <input type="checkbox" name="technology1" value="php" checked>PHP<Br>
                            <input type="checkbox" name="technology2" value="js">JS<Br>
                            <input type="checkbox" name="technology3" value="html">HTML<Br>
                            <input type="checkbox" name="technology4" value="css">CSS<Br>
                            <input type="checkbox" name="technology5" value="git">GIT<Br>
                        </div>

                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
