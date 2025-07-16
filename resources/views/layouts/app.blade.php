<!DOCTYPE html>
<html>
<head>
    <title>Course Management</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        a, button { margin-right: 5px; }
    </style>
</head>
<body>

    <h1>Course Management</h1>

    {{-- Show success messages --}}
    @if (session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    {{-- Render child view --}}
    @yield('content')

</body>
</html>
