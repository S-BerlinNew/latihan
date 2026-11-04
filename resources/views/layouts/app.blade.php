<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <title>@yield('title', 'Latihan')</title>
</head>
<body>
    <!-- NAVIGATION BAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow-sm">
        <div class="container">
            <div>
                <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                    <span>latihan</span>
                </a>
            </div>  
            <div>
                <ul class="navbar-nav d-flex flex-row me-auto mb-2 mb-lg-0 ms-lg-3 gap-3">
                    <li class="nav-item list-unstyled">
                        <a class="nav-link" href="{{ route('mahasiswa.index') }}">Mahasiswa</a>
                    </li>
                    <li class="list-unstyled">
                        <a class="nav-link" href="{{ route('absensi.index') }}">Absensi</a>
                    </li>
                    <li class="list-unstyled">
                        <a class="nav-link" href="{{ route('matakuliah.index') }}">Matakuliah</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> 

    <!-- MAIN CONTENT -->
    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>