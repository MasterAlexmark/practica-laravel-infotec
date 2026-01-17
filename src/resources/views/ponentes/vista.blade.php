<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ponentes</title>
    <link href="[https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css](https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css)" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Gestión de Ponentes</h1>

        <!-- Mensajes de éxito o error -->
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <!-- Formulario para Crear -->
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">Nuevo Ponente</div>
            <div class="card-body">
                <form action="{{ route('ponentes.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" name="nombre" class="form-control" placeholder="Nombre completo" required>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="especialidad" class="form-control" placeholder="Especialidad">
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="biografia" class="form-control" placeholder="Biografía breve">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-3">Agregar Ponente</button>
                </form>
            </div>
        </div>

        <!-- Tabla de Listado -->
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Especialidad</th>
                    <th>Biografía</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ponentes as $p)
                <tr>
                    <td>{{ $p->nombre }}</td>
                    <td>{{ $p->especialidad }}</td>
                    <td>{{ $p->biografia }}</td>
                    <td>
                        <form action="{{ route('ponentes.destroy', $p->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar a este ponente?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
