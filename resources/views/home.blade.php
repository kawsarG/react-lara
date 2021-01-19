@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
<html>

<head>
    <title>Fiber</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzBmP_s-e1BUzOyvk9YnoZtIX40PwWfoM&callback=initMap&libraries=&libraries=places"
        defer></script>
    <link rel="stylesheet" type="text/css" href="{{asset('maps/style.css')}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="{{asset('maps/index.js')}}"></script>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div id="con">
                <h1 class="display-6">Add a Connection</h1>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group first  mb-2">
                        <label for="name">Connection Name</label>
                        <input type="text" class="form-control" placeholder="Connection Name" id="name" name="name"
                               required>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group last mb-2">
                        <label for="sl">Sarting Location</label>
                        <input type="text" class="form-control" placeholder="Starting Location" id="sl" name="sl"
                               required>
                        @error('sl')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group last mb-2">
                        <label for="el">Ending Location</label>
                        <input type="text" class="form-control" placeholder="Ending Location" id="el" name="el"
                               required>

                        @error('el')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group last mb-2">
                        <label for="td">Total Distance</label>
                        <input type="text" class="form-control" placeholder="Total Distance" id="td" name="td"
                               required>

                        @error('td')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group last mb-2">
                        <label for="fc">Fiber core</label>
                        <select class="form-select" aria-label="Default select example" id="fc" name="fc">
                            <option selected>Select Fiber Core</option>
                            <option value="2">2</option>
                            <option value="4">4</option>
                            <option value="8">8</option>
                            <option value="16">16</option>
                        </select>
                        @error('fc')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group last mb-2">
                        <label for="td">Coordinates</label>
                        <input type="text" class="form-control" placeholder="Coordinates" id="co" name="co"
                               required>
                        @error('td')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <input type="submit" value="Submit" class="btn btn-block btn-primary">
                </form>
            </div>

        </div>
        <div class="col-md-8">
            <div id="map"></div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
</script>
</body>

</html>
@endsection
