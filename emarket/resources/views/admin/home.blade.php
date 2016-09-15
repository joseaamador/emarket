@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Administration Options</div>

                <div class="panel-body">
                    <ul>
                        <li>
                            {{link_to_route('users.index', 'User Management')}}
                        </li>
                        <li>
                            {{link_to_route('products.index', 'Storage Management')}}
                        </li>
                        <li>
                            {{link_to_route('users.index', 'Application Approval')}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection