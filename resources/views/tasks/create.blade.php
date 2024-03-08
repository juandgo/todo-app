@extends('layouts.app')
    <h1>Nueva Tarea</h1>
    <form action="" method="post">
        <div class="form-group">
            <label for="description">Descripcion de la tareas</label>
            <input class="form-control" name="description">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Crear Tarea</button>
        </div>
    </form>
