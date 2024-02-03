<!-- resources/views/home.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Appointments</h2>
        <a href="{{ route('create-appointment') }}" class="btn btn-primary mb-3">Create Appointment</a>

        <div class="row">
            @foreach ($appointments as $appointment)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $appointment->name }}</h5>
                            <p class="card-text">Date: {{ $appointment->date }}</p>
                            <p class="card-text">Pet's Name: {{ $appointment->pet_name }}</p>
                            <p class="card-text">Pet's Type: {{ $appointment->pet_type }}</p>
                            <p class="card-text">Concern: {{ $appointment->concern }}</p>
                            <form action="{{ route('appointment.destroy', $appointment->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
