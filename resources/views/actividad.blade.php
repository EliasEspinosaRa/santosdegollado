<h4>Subir Actividades</h4>
<div class="row"> 
	<div class="col-lg-12">
		<form method="POST" enctype="multipart/form-data" id="upload" action="{{ route('files.store')}}">
				@csrf
			<div class="row">
				<div class="col-lg-12">
					<div class="form-group">
						<input type="file" name="file" placeholder="Elige un archivo" id="file">
						@error('file')
						<div class="alert-danger mt-1 mb-1">{{ $message}}</div>
						@enderror
					</div>
				</div>
				<div class="col-md-14">
					<button type="submit" class="btn btn-primary" id="submit">Enviar</button>
				</div>
			</div>
		</form>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<table>
			<thead>
				<tr>
				<th>Nombre</th>
				<th>Path</th>
				<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($ficheros as $file)
				<tr>
					<td>{{ $file->name}}</td>
					<td>{{ $file->path}}</td>
					<td>
						Ver
					</td>
				</tr>
				@endforeach
			</tbody>


		</table>

	</div>


</div>
	
	