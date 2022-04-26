<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/f4ba76eed9.js" crossorigin="anonymous"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Home</title>
</head>
<body>
    <div>
        {{-- navibar --}}
        <div>
            <div class="hidden md:flex flex-row justify-between items-center rounded-t-lg bg-blue-800 h-20">
                <div class="flex justify-center items-center bg-blue-500 rounded-t-lg h-full w-1/5">
                    <img class="px-2" src="storage/logo.png" alt="logo">
                </div>
                <div class="flex justify-around items-center text-sky-50 text-lg font-bold md:w-4/5 lg:w-3/5 mr-3">
                    <a href="#" class="hover:bg-indigo-900 px-3 py-2 rounded-md font-medium mr-2 w-4/5">News</a>
                    <a href="#" class="hover:bg-indigo-900 px-3 py-2 rounded-md font-medium mr-2 w-4/5">Concurso</a>
                    <a href="#" class="hover:bg-indigo-900 px-3 py-2 rounded-md font-medium mr-2 w-4/5">Enquete</a>
                    <a href="#" class="hover:bg-indigo-900 px-3 py-2 rounded-md font-medium mr-2 w-4/5">Galeria</a>
                    <a href="#" class="hover:bg-indigo-900 px-3 py-2 rounded-md font-medium mr-2 w-4/5">Coloborador</a>
                    <button type="button" class="hover:bg-indigo-900 font-medium rounded-full p-2">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M256 32V49.88C328.5 61.39 384 124.2 384 200V233.4C384 278.8 399.5 322.9 427.8 358.4L442.7 377C448.5 384.2 449.6 394.1 445.6 402.4C441.6 410.7 433.2 416 424 416H24C14.77 416 6.365 410.7 2.369 402.4C-1.628 394.1-.504 384.2 5.26 377L20.17 358.4C48.54 322.9 64 278.8 64 233.4V200C64 124.2 119.5 61.39 192 49.88V32C192 14.33 206.3 0 224 0C241.7 0 256 14.33 256 32V32zM216 96C158.6 96 112 142.6 112 200V233.4C112 281.3 98.12 328 72.31 368H375.7C349.9 328 336 281.3 336 233.4V200C336 142.6 289.4 96 232 96H216zM288 448C288 464.1 281.3 481.3 269.3 493.3C257.3 505.3 240.1 512 224 512C207 512 190.7 505.3 178.7 493.3C166.7 481.3 160 464.1 160 448H288z"/>
                        </svg>
                    </button>
                    <button type="button" class="hover:bg-indigo-900 font-medium rounded-full p-2">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M0 128C0 92.65 28.65 64 64 64H448C483.3 64 512 92.65 512 128V384C512 419.3 483.3 448 448 448H64C28.65 448 0 419.3 0 384V128zM48 128V150.1L220.5 291.7C241.1 308.7 270.9 308.7 291.5 291.7L464 150.1V127.1C464 119.2 456.8 111.1 448 111.1H64C55.16 111.1 48 119.2 48 127.1L48 128zM48 212.2V384C48 392.8 55.16 400 64 400H448C456.8 400 464 392.8 464 384V212.2L322 328.8C283.6 360.3 228.4 360.3 189.1 328.8L48 212.2z"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="md:hidden flex flex-col justify-center items-center">
                <div class="flex flex-row justify-between items-center rounded-t-lg bg-blue-800 w-full h-20">
                    <div class="flex justify-center items-center bg-blue-500 rounded-lg h-full w-2/4">
                        <img class="px-2" src="storage/logo.png" alt="logo">
                    </div>
                    <div class="flex justify-around items-center w-2/4">
                        <button type="button" class="hover:bg-indigo-900 font-medium rounded-lg p-2">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96zM416 352H32C14.33 352 0 337.7 0 320C0 302.3 14.33 288 32 288H416C433.7 288 448 302.3 448 320C448 337.7 433.7 352 416 352zM0 192C0 174.3 14.33 160 32 160H416C433.7 160 448 174.3 448 192C448 209.7 433.7 224 416 224H32C14.33 224 0 209.7 0 192zM416 480H32C14.33 480 0 465.7 0 448C0 430.3 14.33 416 32 416H416C433.7 416 448 430.3 448 448C448 465.7 433.7 480 416 480z"/>
                            </svg>
                        </button>
                        <button type="button" class="hover:bg-indigo-900 font-medium rounded-full p-2">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M256 32V49.88C328.5 61.39 384 124.2 384 200V233.4C384 278.8 399.5 322.9 427.8 358.4L442.7 377C448.5 384.2 449.6 394.1 445.6 402.4C441.6 410.7 433.2 416 424 416H24C14.77 416 6.365 410.7 2.369 402.4C-1.628 394.1-.504 384.2 5.26 377L20.17 358.4C48.54 322.9 64 278.8 64 233.4V200C64 124.2 119.5 61.39 192 49.88V32C192 14.33 206.3 0 224 0C241.7 0 256 14.33 256 32V32zM216 96C158.6 96 112 142.6 112 200V233.4C112 281.3 98.12 328 72.31 368H375.7C349.9 328 336 281.3 336 233.4V200C336 142.6 289.4 96 232 96H216zM288 448C288 464.1 281.3 481.3 269.3 493.3C257.3 505.3 240.1 512 224 512C207 512 190.7 505.3 178.7 493.3C166.7 481.3 160 464.1 160 448H288z"/>
                            </svg>
                        </button>
                        <button type="button" class="hover:bg-indigo-900 font-medium rounded-full p-2">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M0 128C0 92.65 28.65 64 64 64H448C483.3 64 512 92.65 512 128V384C512 419.3 483.3 448 448 448H64C28.65 448 0 419.3 0 384V128zM48 128V150.1L220.5 291.7C241.1 308.7 270.9 308.7 291.5 291.7L464 150.1V127.1C464 119.2 456.8 111.1 448 111.1H64C55.16 111.1 48 119.2 48 127.1L48 128zM48 212.2V384C48 392.8 55.16 400 64 400H448C456.8 400 464 392.8 464 384V212.2L322 328.8C283.6 360.3 228.4 360.3 189.1 328.8L48 212.2z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="flex flex-col justify-center items-baseline bg-blue-800 text-sky-50 rounded-b-lg text-lg pt-2 font-bold w-full">
                    <a href="#" class="hover:bg-indigo-900 px-3 py-2 rounded-md font-medium ml-2 w-4/5">News</a>
                    <a href="#" class="hover:bg-indigo-900 px-3 py-2 rounded-md font-medium ml-2 w-4/5">Concurso</a>
                    <a href="#" class="hover:bg-indigo-900 px-3 py-2 rounded-md font-medium ml-2 w-4/5">Enquete</a>
                    <a href="#" class="hover:bg-indigo-900 px-3 py-2 rounded-md font-medium ml-2 w-4/5">Galeria</a>
                    <a href="#" class="hover:bg-indigo-900 px-3 py-2 rounded-md font-medium ml-2 w-4/5">Coloborador</a>
                </div>
            </div>
        </div>
        {{-- body --}}
        <div>
            <div class="hidden md:flex">
                <nav class="flex justify-center items-start">
                    {{-- MENU --}}
                    <div class="flex justify-center items-center">
                        <nav class="flex flex-col justify-center items-center">
                            {{-- MENU.BLOCO.1 --}}
                            <div class="flex flex-col justify-center items-center text-zinc-700">
                                <button type="button" class="hover:bg-indigo-900 flex justify-end w-full font-medium rounded-full p-2">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path d="M560 448H512V113.5c0-27.25-21.5-49.5-48-49.5L352 64.01V128h96V512h112c8.875 0 16-7.125 16-15.1v-31.1C576 455.1 568.9 448 560 448zM280.3 1.007l-192 49.75C73.1 54.51 64 67.76 64 82.88V448H16c-8.875 0-16 7.125-16 15.1v31.1C0 504.9 7.125 512 16 512H320V33.13C320 11.63 300.5-4.243 280.3 1.007zM232 288c-13.25 0-24-14.37-24-31.1c0-17.62 10.75-31.1 24-31.1S256 238.4 256 256C256 273.6 245.3 288 232 288z"/>
                                    </svg>
                                </button>
                                <div class="flex -space-x-2 overflow-hidden justify-center items-end">
                                    <img class="inline-block w-28 h-28 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                    <button type="button" class="hover:bg-indigo-900 font-medium rounded-full inline-block p-2 ring-2 ring-white">
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path d="M464 96h-88l-12.38-32.88C356.6 44.38 338.8 32 318.8 32h-125.5c-20 0-38 12.38-45 31.12L136 96H48C21.5 96 0 117.5 0 144v288C0 458.5 21.5 480 48 480h416c26.5 0 48-21.5 48-48v-288C512 117.5 490.5 96 464 96zM356.9 366.8C332.4 398.1 295.7 416 256 416c-31.78 0-61.37-11.94-84.58-32.61l-19.28 19.29C143.2 411.6 128 405.3 128 392.7V316.3c0-5.453 4.359-9.838 9.775-9.99h76.98c12.35 .3027 18.47 15.27 9.654 24.09l-19.27 19.28C219.3 361.4 237.1 368 256 368c24.8 0 47.78-11.22 63.08-30.78c8.172-10.44 23.25-12.28 33.69-4.125S365.1 356.3 356.9 366.8zM384 259.7c0 5.453-4.359 9.838-9.775 9.99h-76.98c-12.35-.3027-18.47-15.27-9.654-24.09l19.27-19.28C292.7 214.6 274.9 208 256 208c-24.8 0-47.78 11.22-63.08 30.78C184.8 249.2 169.7 251.1 159.2 242.9C148.8 234.8 146.9 219.7 155.1 209.2C179.6 177.9 216.3 160 256 160c31.78 0 61.37 11.94 84.58 32.61l19.28-19.29C368.8 164.4 384 170.7 384 183.3V259.7z"/>
                                        </svg>
                                    </button>
                                </div>
                                <div class="flex flex-col justify-center items-end">

                                    <i class="fa-solid fa-camera text-white "></i>
                                </div>
                                <div class="flex flex-col justify-center items-center">
                                    <a href="#">Arthur de Paula Correa</a>
                                    <a class="text-3786A6" href="#">arthurdepaula.gt@gmail.com</a>
                                </div>
                            </div>
                            {{-- MENU.BLOCO.2 --}}
                            <div class="flex justify-around items-center responsive-block-2-menu">
                                <a class="flex justify-around items-center text-zinc-700 shadow-bxs rounded-lg" href="#">
                                    <div class="flex justify-center items-center">
                                        <i class="fa-regular fa-calendar-check text-3786A6"></i>
                                        <p>Agenda</p>
                                    </div>
                                    <div class="flex justify-center items-start">
                                        <i class="fa-solid fa-circle-plus text-3786A6"></i>
                                    </div>
                                </a>
                            </div>
                            {{-- MENU.BLOCO.3 --}}
                            <div class="flex flex-col justify-center items-center shadow-bxs rounded-lg responsive-block-3-menu">
                                <div class="shadow-bxs rounded-lg bg-3786A6 text-white text-center">
                                    <h1>Aniversariante do mês</h1>
                                </div>
                                <div class="flex flex-col justify-start items-center text-zinc-700 overflow-y-scroll">
                                    <nav class="flex flex-row justify-center items-start my-2">
                                        <div class="flex flex-col justify-center items-center">
                                            <img class="rounded-100" src="../img/model/img-model-02.jpg" alt="">
                                        </div>
                                        <div class="flex flex-col justify-center items-start">
                                            <a href="#">Arthur de Paula</a>
                                            <p>04/03/2022</p>
                                        </div>
                                    </nav>
                                    <nav class="flex flex-row justify-center items-start my-2">
                                        <div class="flex flex-col justify-center items-center">
                                            <img class="rounded-100" src="../img/model/img-model-02.jpg" alt="">
                                        </div>
                                        <div class="flex flex-col justify-center items-start">
                                            <a href="#">Arthur de Paula</a>
                                            <p>04/03/2022</p>
                                        </div>
                                    </nav>
                                    <nav class="flex flex-row justify-center items-start my-2">
                                        <div class="flex flex-col justify-center items-center">
                                            <img class="rounded-100" src="../img/model/img-model-02.jpg" alt="">
                                        </div>
                                        <div class="flex flex-col justify-center items-start">
                                            <a href="#">Arthur de Paula</a>
                                            <p>04/03/2022</p>
                                        </div>
                                    </nav>
                                    <nav class="flex flex-row justify-center items-start my-2">
                                        <div class="flex flex-col justify-center items-center">
                                            <img class="rounded-100" src="../img/model/img-model-02.jpg" alt="">
                                        </div>
                                        <div class="flex flex-col justify-center items-start">
                                            <a href="#">Arthur de Paula</a>
                                            <p>04/03/2022</p>
                                        </div>
                                    </nav>
                                    <nav class="flex flex-row justify-center items-start my-2">
                                        <div class="flex flex-col justify-center items-center">
                                            <img class="rounded-100" src="../img/model/img-model-02.jpg" alt="">
                                        </div>
                                        <div class="flex flex-col justify-center items-start">
                                            <a href="#">Arthur de Paula</a>
                                            <p>04/03/2022</p>
                                        </div>
                                    </nav>
                                    <nav class="flex flex-row justify-center items-start my-2">
                                        <div class="flex flex-col justify-center items-center">
                                            <img class="rounded-100" src="../img/model/img-model-02.jpg" alt="">
                                        </div>
                                        <div class="flex flex-col justify-center items-start">
                                            <a href="#">Arthur de Paula</a>
                                            <p>04/03/2022</p>
                                        </div>
                                    </nav>
                                    <nav class="flex flex-row justify-center items-start my-2">
                                        <div class="flex flex-col justify-center items-center">
                                            <img class="rounded-100" src="../img/model/img-model-02.jpg" alt="">
                                        </div>
                                        <div class="flex flex-col justify-center items-start">
                                            <a href="#">Arthur de Paula</a>
                                            <p>04/03/2022</p>
                                        </div>
                                    </nav>
                                    <nav class="flex flex-row justify-center items-start my-2">
                                        <div class="flex flex-col justify-center items-center">
                                            <img class="rounded-100" src="../img/model/img-model-02.jpg" alt="">
                                        </div>
                                        <div class="flex flex-col justify-center items-start">
                                            <a href="#">Arthur de Paula</a>
                                            <p>04/03/2022</p>
                                        </div>
                                    </nav>
                                    <nav class="flex flex-row justify-center items-start my-2">
                                        <div class="flex flex-col justify-center items-center">
                                            <img class="rounded-100" src="../img/model/img-model-02.jpg" alt="">
                                        </div>
                                        <div class="flex flex-col justify-center items-start">
                                            <a href="#">Arthur de Paula</a>
                                            <p>04/03/2022</p>
                                        </div>
                                    </nav>
                                </div>
                                <div class="bg-3786A6 button-box">
                                    <a href="#">Veja todos</a>
                                </div>
                            </div>
                            {{-- MENU.BLOCO.4 --}}
                            <div class="flex flex-col justify-center items-center text-zinc-700 responsive-block-4-menu">
                                <div class="flex justify-center items-center">
                                    <h1>Boas-vindas</h1>
                                </div>
                                <div class="flex justify-center items-center text-1EA4D9">
                                    <i class="fa-solid fa-circle-chevron-up"></i>
                                </div>
                                <div class="flex flex-col justify-center items-center">
                                    <nav class="flex flex-col justify-center items-center">
                                        <div class="flex flex-col justify-center items-center">
                                            <img class="rounded-100" src="../img/model/img-model-03.jpg" alt="">
                                            <a href="#">Arthur de Paula Correa</a>
                                            <a href="#">Estagiario</a>
                                        </div>
                                        <div class="flex flex-col justify-center items-center">
                                            <img class="rounded-100" src="../img/model/img-model-03.jpg" alt="">
                                            <a href="#">Arthur de Paula Correa</a>
                                            <a href="#">Estagiario</a>
                                        </div>
                                        <div class="flex flex-col justify-center items-center">
                                            <img class="rounded-100" src="../img/model/img-model-03.jpg" alt="">
                                            <a href="#">Arthur de Paula Correa</a>
                                            <a href="#">Estagiario</a>
                                        </div>
                                    </nav>
                                </div>
                                <div class="text-1EA4D9 flex justify-center items-center">
                                    <i class="fa-solid fa-circle-chevron-down"></i>
                                </div>
                            </div>
                            {{-- MENU.BLOCO.5 --}}
                            <div class="flex flex-col justify-center items-center shadow-bxs rounded-lg responsive-block-5-menu">
                                <div class="shadow-bxs rounded-lg bg-1EA4D9 text-white">
                                    <h1>Colaboradores de férias</h1>
                                </div>
                                <div class="flex flex-col justify-start items-center text-zinc-700 overflow-y-scroll">
                                    <nav class="flex flex-row justify-center items-start my-2">
                                        <div class="flex flex-col justify-center items-center">
                                            <img class="rounded-100" src="../img/model/img-model-02.jpg" alt="">
                                        </div>
                                        <div class="flex flex-col justify-center items-start">
                                            <a href="#">Arthur de Paula</a>
                                            <p>04/03/2022</p>
                                        </div>
                                    </nav>
                                    <nav class="flex flex-row justify-center items-start my-2">
                                        <div class="flex flex-col justify-center items-center">
                                            <img class="rounded-100" src="../img/model/img-model-02.jpg" alt="">
                                        </div>
                                        <div class="flex flex-col justify-center items-start">
                                            <a href="#">Arthur de Paula</a>
                                            <p>04/03/2022</p>
                                        </div>
                                    </nav>
                                    <nav class="flex flex-row justify-center items-start my-2">
                                        <div class="flex flex-col justify-center items-center">
                                            <img class="rounded-100" src="../img/model/img-model-02.jpg" alt="">
                                        </div>
                                        <div class="flex flex-col justify-center items-start">
                                            <a href="#">Arthur de Paula</a>
                                            <p>04/03/2022</p>
                                        </div>
                                    </nav>
                                    <nav class="flex flex-row justify-center items-start my-2">
                                        <div class="flex flex-col justify-center items-center">
                                            <img class="rounded-100" src="../img/model/img-model-02.jpg" alt="">
                                        </div>
                                        <div class="flex flex-col justify-center items-start">
                                            <a href="#">Arthur de Paula</a>
                                            <p>04/03/2022</p>
                                        </div>
                                    </nav>
                                    <nav class="flex flex-row justify-center items-start my-2">
                                        <div class="flex flex-col justify-center items-center">
                                            <img class="rounded-100" src="../img/model/img-model-02.jpg" alt="">
                                        </div>
                                        <div class="flex flex-col justify-center items-start">
                                            <a href="#">Arthur de Paula</a>
                                            <p>04/03/2022</p>
                                        </div>
                                    </nav>
                                    <nav class="flex flex-row justify-center items-start my-2">
                                        <div class="flex flex-col justify-center items-center">
                                            <img class="rounded-100" src="../img/model/img-model-02.jpg" alt="">
                                        </div>
                                        <div class="flex flex-col justify-center items-start">
                                            <a href="#">Arthur de Paula</a>
                                            <p>04/03/2022</p>
                                        </div>
                                    </nav>
                                    <nav class="flex flex-row justify-center items-start my-2">
                                        <div class="flex flex-col justify-center items-center">
                                            <img class="rounded-100" src="../img/model/img-model-02.jpg" alt="">
                                        </div>
                                        <div class="flex flex-col justify-center items-start">
                                            <a href="#">Arthur de Paula</a>
                                            <p>04/03/2022</p>
                                        </div>
                                    </nav>
                                    <nav class="flex flex-row justify-center items-start my-2">
                                        <div class="flex flex-col justify-center items-center">
                                            <img class="rounded-100" src="../img/model/img-model-02.jpg" alt="">
                                        </div>
                                        <div class="flex flex-col justify-center items-start">
                                            <a href="#">Arthur de Paula</a>
                                            <p>04/03/2022</p>
                                        </div>
                                    </nav>
                                    <nav class="flex flex-row justify-center items-start my-2">
                                        <div class="flex flex-col justify-center items-center">
                                            <img class="rounded-100" src="../img/model/img-model-02.jpg" alt="">
                                        </div>
                                        <div class="flex flex-col justify-center items-start">
                                            <a href="#">Arthur de Paula</a>
                                            <p>04/03/2022</p>
                                        </div>
                                    </nav>
                                </div>
                                <div class="bg-1EA4D9 button-box">
                                    <a href="#">Veja todos</a>
                                </div>
                            </div>
                        </nav>
                    </div>
                    {{-- HOME --}}
                    <div class="flex flex-col justify-center items-center responsive-home">
                        {{-- HOME.1 --}}
                        <div class="flex flex-row justify-center items-start">
                            {{-- HOME.1.DIV.1 --}}
                            <div class="flex flex-col justify-start items-center responsive-div-1-home-1">
                                {{-- HOME.1.BLOCO.1 --}}
                                <div class="flex justify-center items-center rounded-lg img-bg-01 responsive-block-1-home-1">
                                    <nav class="flex flex-col justify-center items-start">
                                        <main></main>
                                        <div class="text-white">
                                            <h1>Novo espaço</h1>
                                            <p>Venho conhecer o novo espaço de convivência para colaboradores</p>
                                        </div>
                                        <div class="bg-32B2EE button-box">
                                            <a href="#">Saiba mais</a>
                                        </div>
                                        <div class="flex flex-row justify-between items-center text-white">
                                            <div class="text-left">
                                                <i class="fa-regular fa-heart"></i>
                                                <i class="fa-regular fa-message"></i>
                                            </div>
                                            <div class="text-right">
                                                <i class="fa-regular fa-circle"></i>
                                                <i class="fa-regular fa-circle"></i>
                                                <i class="fa-regular fa-circle"></i>
                                                <i class="fa-regular fa-circle"></i>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                                {{-- HOME.1.BLOCO.2 --}}
                                <div class="flex flex-row justify-center items-center responsive-block-2-home-1">
                                    <a class="text-32B2EE shadow-bxs rounded-lg" href="#">
                                        <div class="flex flex-col justify-center items-center">
                                            <i class="fa-solid fa-globe text-zinc-70094"></i>
                                            <h1>Programa Ambiental</h1>
                                        </div>
                                    </a>
                                    <a class="text-32B2EE shadow-bxs rounded-lg" href="#">
                                        <div class="flex flex-col justify-center items-center">
                                            <i class="fa-solid fa-chart-pie text-zinc-70094"></i>
                                            <h1>Convénios da empresa</h1>
                                        </div>
                                    </a>
                                    <a class="text-32B2EE shadow-bxs rounded-lg" href="#">
                                        <div class="flex flex-col justify-center items-center">
                                            <i class="fa-solid fa-users text-zinc-70094"></i>
                                            <h1>Projeto sociais</h1>
                                        </div>
                                    </a>
                                    <a class="text-32B2EE shadow-bxs rounded-lg" href="#">
                                        <div class="flex flex-col justify-center items-center">
                                            <i class="fa-solid fa-comments text-zinc-70094"></i>
                                            <h1>Deixe sua sugestão</h1>
                                        </div>
                                    </a>
                                </div>
                                {{-- HOME.1.BLOCO.3 --}}
                                <div class="flex flex-row justify-center items-center responsive-block-3-home-1">
                                    <img class="rounded-lg flex justify-center items-center" src="../img/model/img-model-04.jpg" alt="">
                                    <div class="flex flex-col justify-center items-center text-zinc-700">
                                        <a class="text-3786A6 font-bold" href="#">PARTICIPE DO CONCURSO</a>
                                        <h1 class="font-bold">Um nome para nossa intranet</h1>
                                        <p>Contribua com ideias para o nome da nova plataforma de comunicação interna. A melhor sugestão ganha um voucher de R$500 na Artte dos Pés. <mid class="font-bold">Confira o regulamento e participe!</mid></p>
                                        <a class="bg-3786A6 button-box" href="#">ENVIE SUA SUGESTÃO</a>
                                    </div>
                                </div>
                                {{-- HOME.1.BLOCO.4 --}}
                                <div class="flex flex-row justify-center items-center rounded-lg bg-DCF0FC responsive-block-4-home-1">
                                    <img class="flex justify-center items-center rounded-l-lg shadow-bxs" src="../img/model/img-model-05.jpg" alt="">
                                    <div class="flex flex-col justify-center items-start text-zinc-700">
                                        <div class="point-box">
                                            <i class="fa-solid fa-circle"></i>
                                            <i class="fa-solid fa-circle"></i>
                                            <i class="fa-solid fa-circle"></i>
                                            <a href="#">Enquete</a>
                                        </div>
                                        <div class="font-bold">
                                            <h1>Quando você fez o último check-up no dentista?</h1>
                                        </div>
                                        <div>
                                            <ul class="flex flex-row justify-sta items-center">
                                                <li class="point-box"><i class="fa-regular fa-circle"></i>Há menos 6 meses</li>
                                                <li class="point-box"><i class="fa-regular fa-circle"></i>Há 12 meses</li>
                                                <li class="point-box"><i class="fa-regular fa-circle"></i>Há mais de 12 meses</li>                                                               </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <a class="bg-1EA4D9 button-box" href="#">Responder</a>
                                            <a class="underline text-zinc-700" href="#">Saiba mais sobre os benefícios de manter a saúde bucal em dia</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- HOME.1.DIV.2 --}}
                            <div class="flex flex-col justify-center items-center responsive-div-2-home-1">
                                {{-- BLOG --}}
                                <div class="flex flex-col justify-center items-center shadow-bxs rounded-lg responsive-blog">
                                    {{-- BLOG.BLOCO.1 --}}
                                    <div class="flex flex-col justify-center items-end responsive-block-1-blog">
                                        <div class="bg-3786A6 rounded-lg text-white">
                                            <h1 class="font-bold">Blog do Colaborador</h1>
                                            <p>Compartilhe e acompanhe em tempo as novidade sobre nossos colaboradores</p>
                                        </div>
                                        <div class="text-1EA4D9">
                                            <a href="#"><i class="fa-solid fa-circle-plus"></i></a>
                                        </div>
                                    </div>
                                    {{-- BLOG.BLOCO.2 --}}
                                    <div class="flex flex-col justify-start items-center overflow-y-scroll responsive-block-2-blog">
                                        <div class="flex flex-col justify-center items-center bg-DCF0FC rounded-lg">
                                            <div class="flex flex-row justify-start items-center">
                                                <img class="rounded-100" src="../img/model/img-model-02.jpg" alt="">
                                                <a href="#">Arthur de Paula Correa</a>
                                            </div>
                                            <div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            </div>
                                            <div class="flex flex-row justify-between items-center text-1EA4D9">
                                                <div class="flex flex-row justify-between items-center text-left">
                                                    <p>07/03/2022</p>
                                                </div>
                                                <div class="flex flex-row justify-between items-center text-right">
                                                    <i class="fa-regular fa-heart"></i>
                                                    <i class="fa-regular fa-message"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col justify-center items-center bg-DCF0FC rounded-lg">
                                            <div class="flex flex-row justify-start items-center">
                                                <img class="rounded-100" src="../img/model/img-model-02.jpg" alt="">
                                                <a href="#">Arthur de Paula Correa</a>
                                            </div>
                                            <div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            </div>
                                            <div class="flex flex-row justify-between items-center text-1EA4D9">
                                                <div class="flex flex-row justify-between items-center text-left">
                                                    <p>07/03/2022</p>
                                                </div>
                                                <div class="flex flex-row justify-between items-center text-right">
                                                    <i class="fa-regular fa-heart"></i>
                                                    <i class="fa-regular fa-message"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col justify-center items-center bg-DCF0FC rounded-lg">
                                            <div class="flex flex-row justify-start items-center">
                                                <img class="rounded-100" src="../img/model/img-model-02.jpg" alt="">
                                                <a href="#">Arthur de Paula Correa</a>
                                            </div>
                                            <div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            </div>
                                            <div class="flex flex-row justify-between items-center text-1EA4D9">
                                                <div class="flex flex-row justify-between items-center text-left">
                                                    <p>07/03/2022</p>
                                                </div>
                                                <div class="flex flex-row justify-between items-center text-right">
                                                    <i class="fa-regular fa-heart"></i>
                                                    <i class="fa-regular fa-message"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col justify-center items-center bg-DCF0FC rounded-lg">
                                            <div class="flex flex-row justify-start items-center">
                                                <img class="rounded-100" src="../img/model/img-model-02.jpg" alt="">
                                                <a href="#">Arthur de Paula Correa</a>
                                            </div>
                                            <div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            </div>
                                            <div class="flex flex-row justify-between items-center text-1EA4D9">
                                                <div class="flex flex-row justify-between items-center text-left">
                                                    <p>07/03/2022</p>
                                                </div>
                                                <div class="flex flex-row justify-between items-center text-right">
                                                    <i class="fa-regular fa-heart"></i>
                                                    <i class="fa-regular fa-message"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col justify-center items-center bg-DCF0FC rounded-lg">
                                            <div class="flex flex-row justify-start items-center">
                                                <img class="rounded-100" src="../img/model/img-model-02.jpg" alt="">
                                                <a href="#">Arthur de Paula Correa</a>
                                            </div>
                                            <div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            </div>
                                            <div class="flex flex-row justify-between items-center text-1EA4D9">
                                                <div class="flex flex-row justify-between items-center text-left">
                                                    <p>07/03/2022</p>
                                                </div>
                                                <div class="flex flex-row justify-between items-center text-right">
                                                    <i class="fa-regular fa-heart"></i>
                                                    <i class="fa-regular fa-message"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col justify-center items-center bg-DCF0FC rounded-lg">
                                            <div class="flex flex-row justify-start items-center">
                                                <img class="rounded-100" src="../img/model/img-model-02.jpg" alt="">
                                                <a href="#">Arthur de Paula Correa</a>
                                            </div>
                                            <div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            </div>
                                            <div class="flex flex-row justify-between items-center text-1EA4D9">
                                                <div class="flex flex-row justify-between items-center text-left">
                                                    <p>07/03/2022</p>
                                                </div>
                                                <div class="flex flex-row justify-between items-center text-right">
                                                    <i class="fa-regular fa-heart"></i>
                                                    <i class="fa-regular fa-message"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col justify-center items-center bg-DCF0FC rounded-lg">
                                            <div class="flex flex-row justify-start items-center">
                                                <img class="rounded-100" src="../img/model/img-model-02.jpg" alt="">
                                                <a href="#">Arthur de Paula Correa</a>
                                            </div>
                                            <div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            </div>
                                            <div class="flex flex-row justify-between items-center text-1EA4D9">
                                                <div class="flex flex-row justify-between items-center text-left">
                                                    <p>07/03/2022</p>
                                                </div>
                                                <div class="flex flex-row justify-between items-center text-right">
                                                    <i class="fa-regular fa-heart"></i>
                                                    <i class="fa-regular fa-message"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col justify-center items-center bg-DCF0FC rounded-lg">
                                            <div class="flex flex-row justify-start items-center">
                                                <img class="rounded-100" src="../img/model/img-model-02.jpg" alt="">
                                                <a href="#">Arthur de Paula Correa</a>
                                            </div>
                                            <div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            </div>
                                            <div class="flex flex-row justify-between items-center text-1EA4D9">
                                                <div class="flex flex-row justify-between items-center text-left">
                                                    <p>07/03/2022</p>
                                                </div>
                                                <div class="flex flex-row justify-between items-center text-right">
                                                    <i class="fa-regular fa-heart"></i>
                                                    <i class="fa-regular fa-message"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col justify-center items-center bg-DCF0FC rounded-lg">
                                            <div class="flex flex-row justify-start items-center">
                                                <img class="rounded-100" src="../img/model/img-model-02.jpg" alt="">
                                                <a href="#">Arthur de Paula Correa</a>
                                            </div>
                                            <div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            </div>
                                            <div class="flex flex-row justify-between items-center text-1EA4D9">
                                                <div class="flex flex-row justify-between items-center text-left">
                                                    <p>07/03/2022</p>
                                                </div>
                                                <div class="flex flex-row justify-between items-center text-right">
                                                    <i class="fa-regular fa-heart"></i>
                                                    <i class="fa-regular fa-message"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col justify-center items-center bg-DCF0FC rounded-lg">
                                            <div class="flex flex-row justify-start items-center">
                                                <img class="rounded-100" src="../img/model/img-model-02.jpg" alt="">
                                                <a href="#">Arthur de Paula Correa</a>
                                            </div>
                                            <div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            </div>
                                            <div class="flex flex-row justify-between items-center text-1EA4D9">
                                                <div class="flex flex-row justify-between items-center text-left">
                                                    <p>07/03/2022</p>
                                                </div>
                                                <div class="flex flex-row justify-between items-center text-right">
                                                    <i class="fa-regular fa-heart"></i>
                                                    <i class="fa-regular fa-message"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col justify-center items-center bg-DCF0FC rounded-lg">
                                            <div class="flex flex-row justify-start items-center">
                                                <img class="rounded-100" src="../img/model/img-model-02.jpg" alt="">
                                                <a href="#">Arthur de Paula Correa</a>
                                            </div>
                                            <div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            </div>
                                            <div class="flex flex-row justify-between items-center text-1EA4D9">
                                                <div class="flex flex-row justify-between items-center text-left">
                                                    <p>07/03/2022</p>
                                                </div>
                                                <div class="flex flex-row justify-between items-center text-right">
                                                    <i class="fa-regular fa-heart"></i>
                                                    <i class="fa-regular fa-message"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col justify-center items-center bg-DCF0FC rounded-lg">
                                            <div class="flex flex-row justify-start items-center">
                                                <img class="rounded-100" src="../img/model/img-model-02.jpg" alt="">
                                                <a href="#">Arthur de Paula Correa</a>
                                            </div>
                                            <div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            </div>
                                            <div class="flex flex-row justify-between items-center text-1EA4D9">
                                                <div class="flex flex-row justify-between items-center text-left">
                                                    <p>07/03/2022</p>
                                                </div>
                                                <div class="flex flex-row justify-between items-center text-right">
                                                    <i class="fa-regular fa-heart"></i>
                                                    <i class="fa-regular fa-message"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- CONTADOR --}}
                                {{-- <div class="flex flex-col justify-center items-center text-center rounded-lg text-zinc-700 img-bg-02 responsive-accountant">
                                    <nav>
                                        <div class="flex flex-row justify-center items-center">
                                            <h1 class="font-bold">Sempre</h1>
                                            <h1>Seguros</h1>
                                        </div>
                                        <div class="bg-1EA4D9 text-white rounded-xl">
                                            <div class="flex flex-row justify-center items-start rounded-lg bg-white text-1EA4D9">
                                                <div>
                                                    <div>00</div>
                                                    <h1>DIAS</h1>
                                                </div>
                                                <p>:</p>
                                                <div>
                                                    <div>00</div>
                                                    <h1>HORAS</h1>
                                                </div>
                                                <p>:</p>
                                                <div>
                                                    <div>00</div>
                                                    <h1>MINUTOS</h1>
                                                </div>
                                                <p>:</p>
                                                <div>
                                                    <div>00</div>
                                                    <h1>SEGUNDOS</h1>
                                                </div>
                                            </div>
                                            <div><h1>Dias sem acidentes</h1></div>
                                        </div>
                                        <div class="flex flex-col justify-center items-center font-bold">
                                            <h1>Último acidente 21/05/2020</h1>
                                            <h1>PIAUÍ CONECTADO</h1>
                                            <a class="underline text-1EA4D9" href="#">Saiba mais sobre práticas de segurança</a>
                                        </div>
                                    </nav>
                                </div> --}}
                            </div>
                        </div>
                        {{-- HOME.2 --}}
                        <div class="flex flex-col justify-center items-center">
                            {{-- HOME.2.DIV.1 --}}
                            <div class="flex 2xl:flex-row justify-center 2xl:items-center responsive-div-1-home-2">
                                {{-- HOME.2.D1.BLOCO.1 --}}
                                <div class="flex flex-col justify-center items-start bg-DCF0FC rounded-lg responsive-block-1-home-2-D1">
                                    <div class="point-box">
                                        <i class="fa-solid fa-circle"></i>
                                        <i class="fa-solid fa-circle"></i>
                                        <i class="fa-solid fa-circle"></i>
                                        <a href="#">TV Piauí Conectado</a>
                                    </div>
                                    <div class="flex flex-row">
                                        <div>
                                            <iframe class="rounded-lg" src="https://www.youtube.com/embed/_sH95v9Wj0A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            <h1>Piauí Conectado inicia projeto de expansão para 224 municípios piauienses</h1>
                                        </div>
                                        <div class="flex flex-col justify-center items-center">
                                            <div class="flex flex-col justify-center items-start">
                                                <p>Mais de 8 mil reunios na plataforma...</p>
                                                <iframe class="flex-1 grow rounded-lg" src="https://www.youtube.com/embed/HuVi-So1fW8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                            <div class="flex flex-col justify-center items-start">
                                                <p>Cursos gratuitos são oferecidos pelo...</p>
                                                <iframe class="flex-1 grow rounded-lg" src="https://www.youtube.com/embed/BxpBRk6ldlY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                            <div class="text-center">
                                                <a class="button-box bg-3786A6" href="#">Mais vídeos</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- HOME.2.D1.BLOCO.2 --}}
                                <div class="flex flex-col justify-center items-center responsive-block-2-home-2-D1">
                                    <div class="point-box">
                                        <i class="fa-solid fa-circle"></i>
                                        <i class="fa-solid fa-circle"></i>
                                        <i class="fa-solid fa-circle"></i>
                                        <a href="#">GALERIA Piauí Conectado</a>
                                    </div>
                                    <div class="flex flex-row">
                                        <div>
                                            <img class="rounded-lg" src="../img/model/img-model-11.jpg" alt="">
                                            <h1 class="">Inscrições abertas de 25 a 31 de maio no Setor de Segurança do Trabalho</h1>
                                        </div>
                                        <div class="flex flex-row justify-center items-center">
                                            <div class="flex flex-col justify-center items-center">
                                                <div class="text-1EA4D9 text-center flex justify-center items-center">
                                                    <i class="fa-solid fa-circle-chevron-up"></i>
                                                </div>
                                                <div class="flex flex-col justify-center items-center">
                                                    <img class="rounded-lg" src="../img/model/img-model-12.jpg" alt="">
                                                    <img class="rounded-lg" src="../img/model/img-model-13.jpg" alt="">
                                                    <img class="rounded-lg" src="../img/model/img-model-14.jpg" alt="">
                                                </div>
                                                <div class="text-1EA4D9 text-center flex justify-center items-center">
                                                    <i class="fa-solid fa-circle-chevron-down"></i>
                                                </div>
                                            </div>
                                            <div class="flex flex-col justify-center items-center">
                                                <div>
                                                    <p>Mais de 8 mil reunios na plataforma...</p>
                                                    <img class="flex-1 grow rounded-lg" src="../img/model/img-model-15.jpg" alt="">
                                                </div>
                                                <div>
                                                    <p>Cursos gratuitos são oferecidos pelo...</p>
                                                    <img class="flex-1 grow rounded-lg" src="../img/model/img-model-16.jpg" alt="">
                                                </div>
                                                <div class="text-center">
                                                    <a class="button-box bg-3786A6" href="#">Mais galerias</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- HOME.2.DIV.2 --}}
                            <div class="flex 2xl:flex-row justify-center items-start responsive-div-2-home-2">
                                {{-- HOME.2.D2.BLOCO.1 --}}
                                <div class="flex flex-row responsive-block-1-home-2-D2">
                                    <div>
                                        <img class="rounded-lg" src="../img/model/img-model-17.jpg" alt="">
                                    </div>
                                    <div class="flex flex-col justify-center items-start">
                                        <div class="point-box">
                                            <i class="fa-solid fa-circle"></i>
                                            <i class="fa-solid fa-circle"></i>
                                            <i class="fa-solid fa-circle"></i>
                                            <a href="#">Notícias</a>
                                        </div>
                                        <div class="text-zinc-700">
                                            <h1 class="font-bold">
                                                Piauí Conectado favorece audiências online na nova sede do Judiciário em Esperantina
                                            </h1>
                                            <h2 class="italic">
                                                O governador Willington Dias participou, nesta segunda-feira(4), da inauguração da nova sede do Judiciário de Esperantina, Fórum Themístocies Sampaio e Juizado.
                                            </h2>
                                            <p>
                                                O governador Wellington Dias participou, nesta seguda-feira (4), da inauguração da nova sede do Judiciário de Esperantina.
                                                Fórum Themístocles Sampaio e Juizado Especial Civil e Criminal Édison Rebelo de Carvalho. O evento contou com a presença dos familiares dos homenageados e autoridades estaduais e municipais. A estrutura vai garantir melhores condições de trabalho aos operadores do dDireito.
                                                O Governo do estado disponibilizou aos moradores e usuários do serviços do fórum um pronto gratuito e de alta qualidade de internet por meio do Piauí Conectado.
                                            </p>
                                        </div>
                                        <div>
                                            <a class="button-box bg-3786A6" href="#">Últimas notícias</a>
                                        </div>
                                        <div class="flex flex-row justify-start items-center overflow-x-auto">
                                            <img class="rounded-lg" src="../img/model/img-model-11.jpg" alt="">
                                            <img class="rounded-lg" src="../img/model/img-model-12.jpg" alt="">
                                            <img class="rounded-lg" src="../img/model/img-model-13.jpg" alt="">
                                            <img class="rounded-lg" src="../img/model/img-model-11.jpg" alt="">
                                            <img class="rounded-lg" src="../img/model/img-model-12.jpg" alt="">
                                            <img class="rounded-lg" src="../img/model/img-model-13.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                {{-- HOME.2.D2.BLOCO.2 --}}
                                <div class="flex flex-col justify-center items-center responsive-block-2-home-2-D2">
                                    <div class="point-box">
                                        <i class="fa-solid fa-circle fa-2xs"></i>
                                        <i class="fa-solid fa-circle fa-2xs"></i>
                                        <i class="fa-solid fa-circle fa-2xs"></i>
                                        <a href="#">Instagram</a>
                                    </div>
                                    <div class="flex flex-col justify-center items-center bg-DCF0FC rounded-lg shadow-bxs">
                                        <div class="flex flex-row text-center">
                                            <h1 class="font-bold">Curta</h1>
                                            <h1>, Comente e Compartilhe</h1>
                                        </div>
                                        <div class="flex flex-row justify-center items-center">
                                            <div class="text-1EA4D9">
                                                <i class="fa-solid fa-circle-chevron-left"></i>
                                            </div>
                                            <div class="flex flex-row justify-center items-center">
                                                <img class="rounded-lg" src="../img/model/img-model-15.jpg" alt="">
                                                <img class="rounded-lg" src="../img/model/img-model-16.jpg" alt="">
                                                <img class="rounded-lg" src="../img/model/img-model-14.jpg" alt="">
                                            </div>
                                            <div class="text-1EA4D9">
                                                <i class="fa-solid fa-circle-chevron-right"></i>
                                            </div>
                                        </div>
                                        <div class="text-1EA4D9">
                                            <a href="#"><i class="fa-brands fa-instagram"></i>piauiconectado</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div></div>
        </div>
        {{-- foot --}}
        <div>
            <div class="hidden md:flex justify-end h-full bg-blue-500">
                <nav class="flex flex-row justify-around items-center py-2 md:w-full lg:w-4/5">
                    <div class="flex justify-center items-center mr-4 h-full">
                        <img class="p-2" src="storage/logo.png" alt="logo">
                    </div>
                    <div class="flex flex-col justify-center items-start mr-4 text-sky-50 text-xs">
                        <a class="hover:bg-indigo-900 px-2 py-1 rounded-md font-medium mr-2" href="#">Home</a>
                        <a class="hover:bg-indigo-900 px-2 py-1 rounded-md font-medium mr-2" href="#">Destaques</a>
                        <a class="hover:bg-indigo-900 px-2 py-1 rounded-md font-medium mr-2" href="#">Concurso</a>
                        <a class="hover:bg-indigo-900 px-2 py-1 rounded-md font-medium mr-2" href="#">Enquete</a>
                        <a class="hover:bg-indigo-900 px-2 py-1 rounded-md font-medium mr-2" href="#">Blog do Colabotador</a>
                    </div>
                    <div class="flex flex-col justify-center items-start mr-4 text-sky-50 text-xs">
                        <a class="hover:bg-indigo-900 px-2 py-1 rounded-md font-medium mr-2" href="#">Sejam bem-vindo</a>
                        <a class="hover:bg-indigo-900 px-2 py-1 rounded-md font-medium mr-2" href="#">Sempre seguros</a>
                        <a class="hover:bg-indigo-900 px-2 py-1 rounded-md font-medium mr-2" href="#">Estou de férias</a>
                        <a class="hover:bg-indigo-900 px-2 py-1 rounded-md font-medium mr-2" href="#">Galeria de fotos</a>
                        <a class="hover:bg-indigo-900 px-2 py-1 rounded-md font-medium mr-2" href="#">Notícias</a>
                    </div>
                    <div class="flex flex-col justify-center items-start mr-4 text-sky-50 text-xs">
                        <a class="hover:bg-indigo-900 px-2 py-1 rounded-md font-medium mr-2" href="#">Programa Ambiental</a>
                        <a class="hover:bg-indigo-900 px-2 py-1 rounded-md font-medium mr-2" href="#">Convênios da empresa</a>
                        <a class="hover:bg-indigo-900 px-2 py-1 rounded-md font-medium mr-2" href="#">Projetos Sociais</a>
                        <a class="hover:bg-indigo-900 px-2 py-1 rounded-md font-medium mr-2" href="#">Deixe sua sugestão</a>
                        <a class="hover:bg-indigo-900 px-2 py-1 rounded-md font-medium mr-2" href="#">Perguntas Frequentes</a>
                    </div>
                    <div class="flex flex-col justify-center items-start mr-4 text-sky-50 text-xs">
                        <div class="flex flex-row">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
                            </svg>
                            <a href="#">piauiconectado</a>
                        </div>
                        <div>
                            Copyright <a href="#" class="underline">Piauí Conectado</a> 2021- Todos direitos reservados.
                        </div>
                    </div>
                </nav>
            </div>
            <div class="md:hidden flex flex-col justify-center items-center w-full text-center bg-blue-500">
                <div class="flex flex-col justify-center items-cenjustify-center w-full ml-4 mb-2 text-sky-50 text-xs">
                    <a class="hover:bg-indigo-900 px-2 py-1 rounded-md font-medium mr-2" href="#">Home</a>
                    <a class="hover:bg-indigo-900 px-2 py-1 rounded-md font-medium mr-2" href="#">Destaques</a>
                    <a class="hover:bg-indigo-900 px-2 py-1 rounded-md font-medium mr-2" href="#">Concurso</a>
                    <a class="hover:bg-indigo-900 px-2 py-1 rounded-md font-medium mr-2" href="#">Enquete</a>
                    <a class="hover:bg-indigo-900 px-2 py-1 rounded-md font-medium mr-2" href="#">Blog do Colabotador</a>
                </div>
                <div class="flex flex-col justify-center items-cenjustify-center w-full ml-4 mb-2 text-sky-50 text-xs">
                    <a class="hover:bg-indigo-900 px-2 py-1 rounded-md font-medium mr-2" href="#">Sejam bem-vindo</a>
                    <a class="hover:bg-indigo-900 px-2 py-1 rounded-md font-medium mr-2" href="#">Sempre seguros</a>
                    <a class="hover:bg-indigo-900 px-2 py-1 rounded-md font-medium mr-2" href="#">Estou de férias</a>
                    <a class="hover:bg-indigo-900 px-2 py-1 rounded-md font-medium mr-2" href="#">Galeria de fotos</a>
                    <a class="hover:bg-indigo-900 px-2 py-1 rounded-md font-medium mr-2" href="#">Notícias</a>
                </div>
                <div class="flex flex-col justify-center items-cenjustify-center w-full ml-4 mb-2 text-sky-50 text-xs">
                    <a class="hover:bg-indigo-900 px-2 py-1 rounded-md font-medium mr-2" href="#">Programa Ambiental</a>
                    <a class="hover:bg-indigo-900 px-2 py-1 rounded-md font-medium mr-2" href="#">Convênios da empresa</a>
                    <a class="hover:bg-indigo-900 px-2 py-1 rounded-md font-medium mr-2" href="#">Projetos Sociais</a>
                    <a class="hover:bg-indigo-900 px-2 py-1 rounded-md font-medium mr-2" href="#">Deixe sua sugestão</a>
                    <a class="hover:bg-indigo-900 px-2 py-1 rounded-md font-medium mr-2" href="#">Perguntas Frequentes</a>
                </div>
                <div class="flex flex-col justify-center items-center ml-4 text-sky-50 text-xs">
                    <div class="flex flex-row">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
                        </svg>
                        <a href="#">piauiconectado</a>
                    </div>
                    <div>
                        Copyright <a href="#" class="underline">Piauí Conectado</a> 2021- Todos direitos reservados.
                    </div>
                </div>
                <div class="flex justify-center items-center mr-4 h-full">
                    <img class="p-2" src="storage/logo.png" alt="logo">
                </div>
            </div>
        </div>
    </div>
</body>
</html>
