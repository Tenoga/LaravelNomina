@extends('components.head')
@section('content')
@role('Admin')
<div class="parallax-container mt-0">
    <div class="parallax-index">
        <br><br><br><br><br><br>
        <div class="card-panel bg-light w-50 m-auto  rounded h-auto">
            <h2 class="center-align">Delete User: {{$dropUser->name}}</h2>
            <h4 class="center-align">ID: {{$dropUser->id}}</h4>
            <div class="row center container m-auto">
                <div class="card orange accent-2">
                    <form action="{{ route('users.destroy', $dropUser->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="card-content white-text">
                            <span for="delete" class="card-title">¿Are you sure you want to delete that user? </span>
                        </div>
                        <div class="card-action">
                            <a href="/users" class="btn-small btn-success rounded-pill" role="button">Back</a>
                            <a type="submit" class="btn-small btn-danger rounded-pill text-white">Delete</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@else('components.authAlert')
@endsection
@endrole