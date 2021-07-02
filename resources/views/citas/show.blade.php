<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar</title>
</head>
<body>
    <table class="styled-table">
            <thead>
                <tr >
                    <th>ID Cita</th>
                    <th>User_id</th>
                    <th>Centro_id</th>
                    <th>Fecha</th>
                    <th>Centro</th>
                    <th>Eliminar</th>
                    <th>Editar</th>
                </tr>
            
            </thead>
            <tbody>
               
                    <tr>
                        <td>{{ $cita->id}}</td>
                        <td>{{ $cita->user_id}}</td>
                        <td>{{ $cita->centro_id}}</td>
                        <td>{{ $cita->fecha}}</td>
                        <td>{{ $cita->centro->nombre}}</td>
                        
                        <td>
                            <form action="{{route('citas.destroy', $cita)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="myButton2" ><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <line x1="4" y1="7" x2="20" y2="7" />
                                    <line x1="10" y1="11" x2="10" y2="17" />
                                    <line x1="14" y1="11" x2="14" y2="17" />
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                    </svg></n>                               
                            
                            </form>
                        </td>
                        <td>
                            <form action="{{route('citas.edit', $cita)}}" >
                                @csrf
                                
                                <button ><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="28" height="28" viewBox="0 0 24 24" stroke-width="1" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
                                    <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
                                    <line x1="16" y1="5" x2="19" y2="8" />
                                    </svg></button>
                            </form>
                        </td>
                    </tr>
                
        </tbody>

    </table>
</body>
</html>