 @extends('layouts.app')

@section('content')
    <h1>New Report</h1>
    <a href="/expense_reports" class="btn btn-info">Regresar</a>
    <br><br>
    @if($errors->any())
      @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
          <p>{{ $error }}</p>
        </div>
      @endforeach
    @endif
    <form action="/expense_reports" method="POST">
      @csrf
      <div class="form-group row">
        <label for="title">Titulo</label>
        <input type="text" id="title" name="title" value="{{ old('title') }}" placeholder="Ingrese titulo">
      </div>
      <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection