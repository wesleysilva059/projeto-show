<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  Olá <b>{{$obj->artista->responsavel}}</b>!
  <br>  
  <br>
  Este é um aviso de que um pré-evento de sua banda atingiu o número minimo de fãs interessados.
  <br>
  Abaixo, seguem os dados:
  <br>
  <br>
  <b>Evento:</b> {{$obj->nome}}
  <br>
  <b>Data do aviso:</b> {{date('d/m/Y \a\s h:i:s')}}
  <br>
  <br>
  Att;
  <br>
  Equipe Escolha Seu Show

</body>
</html>