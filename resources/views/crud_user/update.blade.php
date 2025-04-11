@extends('dashboard')

@section('content')
    <main class="signup-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header text-center">Update User</h3>
                        <div class="card-body">
                            <form action="{{ route('user.postUpdateUser') }}" method="POST">
                                @csrf
                                <input name="id" type="hidden" value="{{$user->id}}">
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                        value="{{ $user->name }}" required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Mota" id="mota" class="form-control" name="mota"
                                        value="{{ $user->mota }}" required autofocus>
                                    @if ($errors->has('mota'))
                                        <span class="text-danger">{{ $errors->first('mota') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Phone" id="phone" class="form-control" name="phone"
                                        value="{{ $user->phone }}" required autofocus>
                                    @if ($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Address" id="address" class="form-control"
                                        name="address" value="{{ $user->address }}" required autofocus>
                                    @if ($errors->has('address'))
                                        <span class="text-danger">{{ $errors->first('address') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3"> 
                                    <label>Gender</label>
                                    <div>
                                        <input type="radio" id="male" name="gender1" value="male" 
                                        {{ $user->gender1 == 'male' ? 'checked' : '' }} required>
                                        <label for="male">Nam</label>

                                        <input type="radio" id="female" name="gender1" value="female" 
                                        {{ $user->gender1 == 'female' ? 'checked' : '' }} required>
                                        <label for="female">Nữ</label>
                                    </div>
                                    @if ($errors->has('gender1'))
                                    <span class="text-danger">{{ $errors->first('gender1') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <label for="gender2">Gender</label>
                                    <select id="gender2" name="gender2" class="form-control" required>
                                        <option value="" disabled>Chọn giới tính</option>
                                        <option value="male" {{ $user->gender2 == 'male' ? 'selected' : '' }}>Nam</option>
                                        <option value="female" {{ $user->gender2 == 'female' ? 'selected' : '' }}>Nữ</option>
                                    </select>
                                    @if ($errors->has('gender2'))
                                    <span class="text-danger">{{ $errors->first('gender2') }}</span>
                                    @endif
                                    </div>


                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email" id="email_address" class="form-control"
                                        value="{{ $user->email }}" name="email" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Password" id="password" class="form-control"
                                        name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>

                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection