@extends('layouts.default')

@section('content')
    @if(session('user')->is_admin == 0)
        <div class="pt-4 pb-16">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-lg-6 col-md-10 m-auto">
                        <div class="row">
                            <div class="col text-center">
                                <h1 class="mt-6 mb-5">Notifications</h1>
                                <div>
                                    @if(!$notifications->isEmpty())
                                        @foreach ($notifications as $notification)
                                            <div class="mb-3">
                                                <h5>
                                                    {{ $notification->title }}
                                                </h5>
                                                <span>
                                                    {{ $notification->message }}
                                                </span>
                                            </div>
                                        @endforeach
                                    @else
                                        <span>
                                            No notification !
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="pt-4 pb-16">
            <div class="container">
                <div class="row mt-5 pt-3">
                    <div class="col-lg-6 col-md-10 m-auto">
                        <div class="row">
                            <div class="col text-center">
                                <h1 class="mt-6 mb-5">Notifications</h1>
                            </div>
                        </div>
                        <div class="card-block px-lg-7 px-4 pb-5">
                            <h5 class="mb-3">Add form</h5>
                            <form method="post" action='/addNotification' enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <input class="form-control rounded" type="text" name="title" placeholder="Title" value="{{ old('title') }}">
                                    @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <input class="form-control rounded" type="text" name="message" placeholder="Message" value="{{ old('message') }}">
                                    @error('message')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button class="btn btn-dark mb-4 w-100" type="submit">Add</button>
                            </form>
                            <div class="mt-5">
                                <h5 class="mb-3">Notifications list</h5>
                                 @if(!$notifications->isEmpty())
                                    <table class="table table-bordered">
                                        <thead>
                                            <th>Title</th>
                                            <th>Message</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($notifications as $notification)
                                                <tr>
                                                    <td>
                                                        {{ $notification->title }}
                                                    </td>
                                                    <td>
                                                        {{ $notification->message }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                 @else
                                    <span class="danger">No notifications !</span>
                                 @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
@endsection
