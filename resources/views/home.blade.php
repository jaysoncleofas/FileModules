@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">
                  Contacts
                  <a href="{{ route('contact.export','xls') }}" class="btn btn-primary">Excel xls</a>
                  <a href="{{ route('contact.export','xlsx') }}" class="btn btn-primary">Excel xlsx</a>
                  <a href="{{ route('contact.export','CSV') }}" class="btn btn-primary">Excel CSV</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                      <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Month</th>
                            <th scope="col">Year</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($contact as $contacts)
                            <tr>
                              <th scope="row">{{ $contacts->id }}</th>
                              <td>{{ $contacts->first_name }}</td>
                              <td>{{ $contacts->last_name }}</td>
                              <td>{{ $contacts->email }}</td>
                              <td>{{ $contacts->phone_number }}</td>
                              <td>{{ $contacts->created_at->format('M') }}</td>
                              <td>{{ $contacts->created_at->format('Y') }}</td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
