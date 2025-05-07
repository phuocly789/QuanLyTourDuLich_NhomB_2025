<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Reset Password</h2>
                        <form method="post" action="{{ route('password.updated') }}">
                            @csrf
                            <input type="hidden" name="email" value="{{ $email }}">

                            <!-- Trường nhập mật khẩu mới -->
                            <div class="mb-3">
                                <label for="password" class="form-label">New Password</label>
                                <input id="password" type="password" name="password" class="form-control" required autocomplete="new-password">
                            </div>

                            <!-- Trường xác nhận mật khẩu mới -->
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Confirm New Password</label>
                                <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" required autocomplete="new-password">
                            </div>

                            <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>