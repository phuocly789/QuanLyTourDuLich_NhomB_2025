public function register(Request $request)
{
    $validated = $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => [
            'required',
            'string',
            'email',
            'max:50',
            'regex:/^[a-zA-Z0-9._%+-]+@gmail\.com$/',
            'unique:users,email',
        ],
        'password' => ['required', 'string', 'min:8', 'max:32', 'confirmed'],
    ]);

    // Tạo user
    User::create([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'password' => Hash::make($validated['password']),
    ]);

    // Redirect hoặc login user
    return redirect()->route('login')->with('status', 'Đăng ký thành công!');
}
