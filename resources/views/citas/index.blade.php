
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>citas</title>
    <link href='https://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Admin Starter Template : Tailwind Toolbox</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet"> <!--Replace with your tailwind.css once created-->
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet"> <!--Totally optional :) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js" integrity="sha256-xKeoJ50pzbUGkpQxDYHD7o7hxe0LaOGeguUidbq6vis=" crossorigin="anonymous"></script>

</head>
<style>
   .styled-table {
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        font-family: sans-serif;
        min-width: 400px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }
    .styled-table thead tr {
        background-color: #432234;
        color: #ffffff;
        text-align: left;
    }
    .styled-table th,
    .styled-table td {
        padding: 12px 15px;
    }
    .styled-table tbody tr {
        border-bottom: 1px solid #dddddd;
    }

    .styled-table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    .styled-table tbody tr:last-of-type {
        border-bottom: 2px solid #009879;
    }
    .styled-table tbody tr.active-row {
        font-weight: bold;
        color: #009879;
    }
    .myButton {
	box-shadow:inset 0px 1px 0px 0px #5e962d;
	background:linear-gradient(to bottom, #aeeb1e 5%, #8db531 100%);
	background-color:#aeeb1e;
	border-radius:6px;
	border:1px solid #74b807;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #232e10;
}
.myButton:hover {
	background:linear-gradient(to bottom, #8db531 5%, #aeeb1e 100%);
	background-color:#8db531;
}
.myButton:active {
	position:relative;
	top:1px;
}
.myButton2 {
	box-shadow: 3px 4px 0px 0px #e87c72;
	background:linear-gradient(to bottom, #f5756a 5%, #f24437 100%);
	background-color:#f5756a;
	border-radius:18px;
	border:1px solid #d02718;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:17px;
	padding:7px 25px;
	text-decoration:none;
	text-shadow:0px 1px 0px #810e05;
    
}
.myButton2:hover {
	background:linear-gradient(to bottom, #f24437 5%, #f5756a 100%);
	background-color:#f24437;
}
.myButton2:active {
	position:relative;
	top:1px;
}
   
.CenterTable{
    margin-left: 50%;
}

   
</style>
<body>

    <div class="flex flex-col md:flex-row">

        <div class="bg-gray-800 ">

            <div>
                <ul>
                    <li class="mr-3 flex-1">
                        <a href="http://medico.test:8888/user/profile" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-pink-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <circle cx="12" cy="7" r="4" />
                                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                            </svg>
                            <span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Perfíl</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="{{route('centros.index')}}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-purple-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-hospital" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <line x1="3" y1="21" x2="21" y2="21" />
                            <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16" />
                            <path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4" />
                            <line x1="10" y1="9" x2="14" y2="9" />
                            <line x1="12" y1="7" x2="12" y2="11" />
                        </svg><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Centros</span>
                        </a>
                    </li>
                   
                </ul>
            </div>
           

        </div>

        <div class="bg-gray-400 ">
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
                        <th>Mostrar</th>
                    </tr>
                
                </thead>
                <tbody>
                    @foreach($citas as $cita)
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
                                    <button class="myButton2" onclick="eliminadaConExito()">X</n>                               
                                
                                </form>
                            </td>
                            <td>
                                <form action="{{route('citas.edit', $cita)}}" >
                                    @csrf
                                
                                    <button ><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff2825" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
                                        <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
                                        <line x1="16" y1="5" x2="19" y2="8" />
                                        </svg>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{route('citas.show', $cita)}}" method="GET">
                                    @csrf 
                                    <button type="submit" ><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-id" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff2825" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <rect x="3" y="4" width="18" height="16" rx="3" />
                                        <circle cx="9" cy="10" r="2" />
                                        <line x1="15" y1="8" x2="17" y2="8" />
                                        <line x1="15" y1="12" x2="17" y2="12" />
                                        <line x1="7" y1="16" x2="17" y2="16" />
                                        </svg>

                                    </button>
                                </form>
                                
                                
                            </td>
                        </tr>
                    @endforeach
                    
                </tbody>

            </table>
            <a href="{{route('citas.create')}}" class="myButton">añadir</a>
            </div>
    </div>
  
    <script>
        /*Toggle dropdown list*/
        function toggleDD(myDropMenu) {
            document.getElementById(myDropMenu).classList.toggle("invisible");
        }
        /*Filter dropdown options*/
        function filterDD(myDropMenu, myDropMenuSearch) {
            var input, filter, ul, li, a, i;
            input = document.getElementById(myDropMenuSearch);
            filter = input.value.toUpperCase();
            div = document.getElementById(myDropMenu);
            a = div.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }
        }
        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.drop-button') && !event.target.matches('.drop-search')) {
                var dropdowns = document.getElementsByClassName("dropdownlist");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (!openDropdown.classList.contains('invisible')) {
                        openDropdown.classList.add('invisible');
                    }
                }
            }
        }
        function eliminadaConExito() {
            alert("Cita Eliminada");
        }
    </script>
</body>
</html>
    