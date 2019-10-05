@extends('layouts.admin')

@section('content')
<div class="min-h-screen flex cover-bg-gradient">
    <div class="m-auto bg-cool-grey-050 p-4 rounded-lg">
        <div class="col-md-8">
            <div class="card">
                <div class="text-cool-grey-600">Dashboard</div>

                <div class="text-cool-grey-600">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
