<!-- resources/views/create-appointment.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">{{ __('Create Appointment') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('appointments.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="name" class="font-weight-bold">Name</label>
                                <input type="text" name="name" id="name" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="date" class="font-weight-bold">Date</label>
                                <input type="date" name="date" id="date" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="pet_name" class="font-weight-bold">Pet's Name</label>
                                <input type="text" name="pet_name" id="pet_name" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="pet_type" class="font-weight-bold">Pet's Type</label>
                                <input type="text" name="pet_type" id="pet_type" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="concern" class="font-weight-bold">Appointment Concern</label>
                                <textarea name="concern" id="concern" class="form-control" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block">Create Appointment</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
