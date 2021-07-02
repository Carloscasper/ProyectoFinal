
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

.centrado{
    position: absolute;
    top: 30%;
    left: 40%;
    transform: translate(-50%, -50%);
    
}
.imagenAncho{
    width: 100%;
    height: 100%;
}
ul.a {
  list-style-type: circle;
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
                        <a href="{{route('citas.index')}}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-purple-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <rect x="4" y="5" width="16" height="16" rx="2" />
                            <line x1="16" y1="3" x2="16" y2="7" />
                            <line x1="8" y1="3" x2="8" y2="7" />
                            <line x1="4" y1="11" x2="20" y2="11" />
                            <line x1="11" y1="15" x2="12" y2="15" />
                            <line x1="12" y1="15" x2="12" y2="18" />
                        </svg><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Citas</span>
                        </a>
                    </li>
                    
                    <li class="mr-3 flex-1">
                        <a href="{{route('oncologo')}}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-purple-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-virus-off" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <line x1="3" y1="3" x2="21" y2="21" />
                            <path d="M8.469 8.46a5 5 0 0 0 7.058 7.084m1.386 -2.608a5 5 0 0 0 -5.826 -5.853" />
                            <path d="M12 7v-4m-1 0h2" />
                            <path d="M12 7v-4m-1 0h2" transform="rotate(45 12 12)" />
                            <path d="M12 7v-4m-1 0h2" transform="rotate(90 12 12)" />
                            <line x1="12" y1="3" x2="13" y2="3" transform="rotate(135 12 12)" />
                            <path d="M12 7v-4m-1 0h2" transform="rotate(180 12 12)" />
                            <path d="M12 7v-4m-1 0h2" transform="rotate(225 12 12)" />
                            <path d="M12 7v-4m-1 0h2" transform="rotate(270 12 12)" />
                            <line x1="12" y1="3" x2="11" y2="3" transform="rotate(315 12 12)" />
                        </svg><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Oncologia</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="{{route('dermatologo')}}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-purple-500">
                        <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg">

                            <g>
                            <title>background</title>
                            <rect fill="none" id="canvas_background" height="26" width="26" y="-1" x="-1"/>
                            </g>
                            <g>
                            <title>Layer 1</title>
                            <path stroke="#f4f4f4" stroke-width="0" fill="#ffffff" id="svg_1" d="m19.263503,13.251728c0.001816,-4.08695 1.236168,-8.045136 3.570507,-11.44593l0.376225,-0.548572l-1.191864,0l-0.106403,0.103364c-3.112936,3.024026 -4.827375,7.044653 -4.827375,11.321399l0,0.569739l-4.405756,0c0.502239,-2.817297 1.601136,-5.507946 3.255291,-7.918135l0.376225,-0.548572l-1.191864,0l-0.106403,0.103364c-2.382638,2.314586 -3.942011,5.213375 -4.54448,8.363343l-4.889474,0c0.352257,-3.328827 1.527779,-6.519365 3.456114,-9.329253l0.376225,-0.548572l-1.191864,0l-0.106403,0.103364c-2.734532,2.656429 -4.388688,6.081918 -4.75075,9.774461l-2.618687,0l0,9.877825l22.515402,0l0,-9.877825l-3.994668,0zm3.268365,1.429462c-0.804018,0.083962 -1.26631,0.442738 -1.67994,0.76412c-0.433603,0.337257 -0.808376,0.627947 -1.588425,0.628653l0,-2.116677l3.268365,0l0,0.723903zm-4.720971,3.235341l0,-5.234542c0,-3.372572 1.114876,-6.577926 3.175761,-9.219892c-1.608762,3.020498 -2.449458,6.365906 -2.449458,9.799155l0,4.654925l0.11984,0.105128c0.156882,0.137584 0.243312,0.323146 0.243312,0.522114c0,0.389116 -0.325747,0.705559 -0.726303,0.705559s-0.726303,-0.316443 -0.726303,-0.705559c0,-0.198968 0.08643,-0.38453 0.243312,-0.521761l0.11984,-0.105128zm-0.726303,-3.959244l0,1.075625c-0.361336,-0.209551 -0.811281,-0.370066 -1.455875,-0.370066c-1.035345,0 -1.570268,0.415927 -2.042365,0.782818c-0.355889,0.276932 -0.675825,0.519644 -1.208932,0.59902c0.025784,-0.701326 0.090425,-1.397359 0.188113,-2.087043l4.519059,0l0,-0.000353zm-6.173578,2.252497c0,-3.372572 1.114876,-6.577926 3.175761,-9.219892c-1.608762,3.020498 -2.449458,6.365906 -2.449458,9.799155l0,1.428404l0.217528,0.092428c0.529838,0.225426 0.871927,0.73237 0.871927,1.291878c0,0.778232 -0.651494,1.411118 -1.452607,1.411118s-1.452607,-0.632886 -1.452607,-1.411118c0,-0.559508 0.342089,-1.066452 0.871927,-1.291878l0.217528,-0.092428l0,-2.007668zm-0.562885,-2.252497c-0.063552,0.442385 -0.108945,0.889004 -0.134729,1.339151c-0.430335,-0.321735 -0.951094,-0.633592 -1.847352,-0.633592c-1.034982,0 -1.569905,0.415927 -2.042002,0.782818c-0.274543,0.213432 -0.522212,0.404638 -0.860306,0.518939l0,-0.586319c0,-0.475547 0.018521,-0.94933 0.051568,-1.420643l4.832822,0l0,-0.000353zm-6.336996,3.606465l0,-2.765086c0,-3.372572 1.114876,-6.577926 3.175761,-9.219892c-1.608762,3.020498 -2.449458,6.365906 -2.449458,9.799155l0,2.185469l0.11984,0.105128c0.156882,0.137584 0.243312,0.323146 0.243312,0.522114c0,0.389116 -0.325747,0.705559 -0.726303,0.705559s-0.726303,-0.316443 -0.726303,-0.705559c0,-0.198968 0.08643,-0.38453 0.243312,-0.521761l0.11984,-0.105128zm-0.703062,-3.606465c-0.014889,0.279401 -0.023242,0.559508 -0.023242,0.841379l0,0.749656c-0.045394,-0.034572 -0.090788,-0.066675 -0.136908,-0.102306c-0.413267,-0.321382 -0.875195,-0.680512 -1.67885,-0.764826l0,-0.723903l1.839,0zm-1.839,8.466707l0,-2.089866c0.542912,0.076553 0.86539,0.321735 1.224547,0.601136c0.472097,0.367243 1.00702,0.78317 2.042002,0.78317s1.569905,-0.415927 2.042002,-0.782818c0.433603,-0.337257 0.808376,-0.6283 1.588425,-0.6283l0,-0.705559c-1.035345,0 -1.570268,0.415927 -2.042365,0.78317c-0.433603,0.336904 -0.807649,0.627947 -1.588062,0.627947s-1.154822,-0.291043 -1.588062,-0.6283c-0.413267,-0.321382 -0.875195,-0.680159 -1.678487,-0.764473l0,-4.224887c0.543275,0.076553 0.865754,0.321735 1.224911,0.601489c0.182302,0.141465 0.370052,0.286457 0.590848,0.41381l0,0.852315c-0.23278,0.257176 -0.363152,0.587025 -0.363152,0.92781c0,0.778232 0.651494,1.411118 1.452607,1.411118s1.452607,-0.632886 1.452607,-1.411118c0,-0.340785 -0.130371,-0.670634 -0.363152,-0.92781l0,-0.565153c0.587216,-0.138995 0.971068,-0.434624 1.314246,-0.701326c0.43324,-0.336904 0.808012,-0.627947 1.588062,-0.627947s1.155185,0.291043 1.588788,0.627947c0.075536,0.058561 0.153613,0.114653 0.230964,0.171804c0,0.013758 -0.001089,0.027517 -0.001089,0.041275l0,1.560696c-0.668925,0.375357 -1.089455,1.071038 -1.089455,1.831278c0,1.167347 0.977241,2.116677 2.17891,2.116677s2.17891,-0.94933 2.17891,-2.116677c0,-0.76024 -0.42053,-1.455921 -1.089455,-1.831278l0,-0.98108c0,-0.009525 0.000363,-0.018697 0.000363,-0.028222c0.802202,-0.084667 1.263405,-0.443091 1.676308,-0.76412c0.433966,-0.337257 0.808376,-0.6283 1.588425,-0.6283c0.701972,0 1.074203,0.234246 1.455875,0.525289l0,1.721917c-0.23278,0.257176 -0.363152,0.587025 -0.363152,0.92781c0,0.778232 0.651494,1.411118 1.452607,1.411118s1.452607,-0.632886 1.452607,-1.411118c0,-0.340785 -0.130371,-0.670634 -0.363152,-0.92781l0,-0.836087c1.034619,-0.000353 1.569541,-0.415927 2.042002,-0.782818c0.359883,-0.279754 0.682362,-0.524936 1.226363,-0.601489l0,4.224887c-0.804018,0.083962 -1.26631,0.442738 -1.67994,0.76412c-0.433966,0.33761 -0.809102,0.628653 -1.590241,0.628653c-0.780776,0 -1.155912,-0.291043 -1.589515,-0.6283c-0.47246,-0.366891 -1.007746,-0.782818 -2.043454,-0.782818c-0.59339,0 -1.087276,0.136878 -1.554289,0.430391l0.394383,0.59267c0.249485,-0.15734 0.582495,-0.317502 1.159906,-0.317502c0.780776,0 1.155912,0.291043 1.589515,0.6283c0.47246,0.366891 1.008109,0.782818 2.043454,0.782818c1.036072,0 1.570994,-0.415927 2.043817,-0.782818c0.359883,-0.279754 0.682362,-0.524936 1.226363,-0.601489l0,2.089866l-21.062796,0z"/>
                            </g>
                            </svg>
                        
                        <span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Dermatología</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="pediatra" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-purple-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mood-kid" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <circle cx="12" cy="12" r="9" />
                            <line x1="9" y1="10" x2="9.01" y2="10" />
                            <line x1="15" y1="10" x2="15.01" y2="10" />
                            <path d="M9.5 15a3.5 3.5 0 0 0 5 0" />
                            <path d="M12 3a2 2 0 0 0 0 4" />
                            </svg>
                            <span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Pediatría</span>
                        </a>
                    </li><li class="mr-3 flex-1">
                        <a href="{{route('oftarmologo')}}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-purple-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eyeglass-2" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M8 4h-2l-3 10v2.5" />
                            <path d="M16 4h2l3 10v2.5" />
                            <line x1="10" y1="16" x2="14" y2="16" />
                            <circle cx="17.5" cy="16.5" r="3.5" />
                            <circle cx="6.5" cy="16.5" r="3.5" />
                            </svg>
                            <span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Oftarmología</span>
                        </a>
                    </li>
                </ul>
            </div>
           

        </div>
        <div>
            <div class="imagenAncho">
                <img src="/images/dermatología.jpg " width="1200" height="800">
                    
                
                    <div class="centrado">
                        <p style=" color:white; font-size:25px;" >Departamento de Dermatología
                        <br>Josefa Otíz de Domínguez 612, Oblatos, 44340 
                        <br>Guadalajara, Jalisco
                        <br>3336182359
                        <br>
                        <br>Los dermatólogos son profesionales de la salud que tratan  
                        <br>y diagnostican enfermedades de la piel, pelo, uñas y mucosas
                        <br>(aquellas que se encuentran en párpados, boca, nariz, genitales
                           
                        
                        </p>
                        
                    </div>
            </div>
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
    </script>
</body>
</html>
    