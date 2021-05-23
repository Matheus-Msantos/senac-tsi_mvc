<!DOCTYPE html>
<html>
	<body>
		<table border='1' bgcolor="#dedede">
			<tr><th>Nome</th><th>Endereço</th></tr>

			@foreach($clientes as $cliente)

				<tr>
					<td>{{$cliente->nome}}</td>
					<td>{{$cliente->endereco}}</td>
				</tr>

			@endforeach

		</table>
	</body>
</html>
