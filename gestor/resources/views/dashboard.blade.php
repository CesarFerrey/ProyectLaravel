@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h1 class="text-center mb-4">Gestión de Citas</h1>

        <!-- Formulario para agregar cita -->
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Nueva Cita</h4>
            </div>
            <div class="card-body">
                <form id="formNuevaCita">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="nombrePaciente" class="form-label">Nombre del Paciente</label>
                            <input type="text" class="form-control" id="nombrePaciente" placeholder="Nombre completo" required>
                        </div>
                        <div class="col-md-6">
                            <label for="doctorAsignado" class="form-label">Doctor Asignado</label>
                            <select class="form-select" id="doctorAsignado" required>
                                <option value="" selected disabled>Seleccione un doctor</option>
                                <option value="Dr. Pérez">Dr. Pérez</option>
                                <option value="Dra. López">Dra. López</option>
                                <option value="Dr. García">Dr. García</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="fechaCita" class="form-label">Fecha</label>
                            <input type="date" class="form-control" id="fechaCita" required>
                        </div>
                        <div class="col-md-6">
                            <label for="horaCita" class="form-label">Hora</label>
                            <input type="time" class="form-control" id="horaCita" required>
                        </div>
                    </div>
                    <div class="mt-3 text-end">
                        <button type="submit" class="btn btn-primary">Agregar Cita</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Tabla de citas -->
        <div class="card">
            <div class="card-header bg-secondary text-white">
                <h4 class="mb-0">Listado de Citas</h4>
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre del Paciente</th>
                            <th>Doctor</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="listaCitas">
                        <!-- Las filas se generarán dinámicamente -->
                        <tr>
                            <td>1</td>
                            <td>Juan Pérez</td>
                            <td>Dr. García</td>
                            <td>2025-01-18</td>
                            <td>10:30 AM</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Editar</button>
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
