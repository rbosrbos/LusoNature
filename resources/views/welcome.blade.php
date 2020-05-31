<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LusoNature</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>

<body>
    <header class="h-screen">
        <div id="nav_container" class="fixed z-20 w-full top-0 h-24">
            <div id="blackboard" class="-mt-5 -mt-24 absolute w-full bg-black bg-opacity-50 h-full"></div>
            <nav class="xl:w-3/5 lg:w-4/5 w-5/5 z-20 flex justify-between items-center px-5 m-auto text-white">
            <div id="logo">
                    <p class="text-center relative z-20 mt-6">Luso</p>
                    <p class="text-center absolute top-0 mt-2 z-10">
                        <svg xmlns='http://www.w3.org/2000/svg' width='90' height='75' viewBox='0 0 512 512'>
                            <path d='M215.08,156.92c-4.89-24-10.77-56.27-10.77-73.23A51.36,51.36,0,0,1,256,32h0c28.55,0,51.69,23.69,51.69,51.69,0,16.5-5.85,48.95-10.77,73.23' style='fill:none;stroke:green;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px' />
                            <path d='M215.08,355.08c-4.91,24.06-10.77,56.16-10.77,73.23A51.36,51.36,0,0,0,256,480h0c28.55,0,51.69-23.69,51.69-51.69,0-16.54-5.85-48.93-10.77-73.23' style='fill:none;stroke:green;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px' />
                            <path d='M355.08,215.08c24.06-4.91,56.16-10.77,73.23-10.77A51.36,51.36,0,0,1,480,256h0c0,28.55-23.69,51.69-51.69,51.69-16.5,0-48.95-5.85-73.23-10.77' style='fill:none;stroke:green;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px' />
                            <path d='M156.92,215.07c-24-4.89-56.25-10.76-73.23-10.76A51.36,51.36,0,0,0,32,256h0c0,28.55,23.69,51.69,51.69,51.69,16.5,0,48.95-5.85,73.23-10.77' style='fill:none;stroke:green;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px' />
                            <path d='M296.92,156.92c13.55-20.48,32.3-47.25,44.37-59.31a51.35,51.35,0,0,1,73.1,0h0c20.19,20.19,19.8,53.3,0,73.1-11.66,11.67-38.67,30.67-59.31,44.37' style='fill:none;stroke:green;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px' />
                            <path d='M156.92,296.92c-20.48,13.55-47.25,32.3-59.31,44.37a51.35,51.35,0,0,0,0,73.1h0c20.19,20.19,53.3,19.8,73.1,0,11.67-11.66,30.67-38.67,44.37-59.31' style='fill:none;stroke:green;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px' />
                            <path d='M355.08,296.92c20.48,13.55,47.25,32.3,59.31,44.37a51.35,51.35,0,0,1,0,73.1h0c-20.19,20.19-53.3,19.8-73.1,0-11.69-11.69-30.66-38.65-44.37-59.31' style='fill:none;stroke:green;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px' />
                            <path d='M215.08,156.92c-13.53-20.43-32.38-47.32-44.37-59.31a51.35,51.35,0,0,0-73.1,0h0c-20.19,20.19-19.8,53.3,0,73.1,11.61,11.61,38.7,30.68,59.31,44.37' style='fill:none;stroke:green;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px' />
                            <circle cx='256' cy='256' r='64' style='fill:none;stroke:green;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px' />
                        </svg>
                    </p>
                    <p class="text-center relative z-20 -mt-3">Nature</p>
                </div>
                <div class="flex flex-col">
                    <div class="flex justify-end text-xs font-bold">
                        <a class="login" href="#">Login / Signup</a>
                    </div>
                    <ul class="mt-3 text-lg">
                        <li class="inline mr-6"><a href="#">Lorem</a></li>
                        <li class="inline mr-6"><a href="#">Doloribus</a></li>
                        <li class="inline mr-6"><a href="#">Mollitia</a></li>
                        <li class="inline mr-6"><a href="#">Dolores</a></li>
                        <li class="inline mr-6"><a href="#">Labore</a></li>
                        <li class="inline mr-6"><a href="#">Labore</a></li>
                        <li class="inline">
                            <a href="#">
                                <svg class="inline" xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 512 512'>
                                    <path d='M221.09,64A157.09,157.09,0,1,0,378.18,221.09,157.1,157.1,0,0,0,221.09,64Z' style='fill:none;stroke:#e0d9cb;stroke-miterlimit:10;stroke-width:64px' />
                                    <line x1='338.29' y1='338.29' x2='448' y2='448' style='fill:none;stroke:#e0d9cb;stroke-linecap:round;stroke-miterlimit:10;stroke-width:64px' />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div id="main_slider_container" class="relative">
            <div class="main_slide w-full absolute max-h-screen active">
                <div class="overlay bg-black bg-opacity-25 w-full h-full flex flex-col justify-center items-center p-20 text-white">
                    <h1 class="">There is no sincerer love</h1>
                    <h2>asdasdasd</h2>
                    <h3>asdasdasd</h3>
                    <p class="">than the love of food</p>
                </div>
            </div>
            <div class="main_slide w-full absolute max-h-screen">
                <div class="overlay bg-black bg-opacity-25 w-full h-full flex flex-col justify-center items-center p-20 text-white">
                    <h1 class="">There is no sincerer love 2</h1>
                    <h2>asdasdasd</h2>
                    <h3>asdasdasd</h3>
                    <p class="">than the love of food</p>
                </div>
            </div>
            <div class="main_slide w-full absolute max-h-screen">
                <div class="overlay bg-black bg-opacity-25 w-full h-full flex flex-col justify-center items-center p-20 text-white">
                    <h1 class="">There is no sincerer love 3</h1>
                    <h2>asdasdasd</h2>
                    <h3>asdasdasd</h3>
                    <p class="">than the love of food</p>
                </div>
            </div>
            <div id="main_slider_pager" class="h-full absolute w-full flex items-end justify-center pb-5">
                <div class="page cursor-pointer rounded-full w-3 h-3 mr-2 bg-black bg-white"></div>
                <div class="page cursor-pointer rounded-full w-3 h-3 mr-2 bg-black"></div>
                <div class="page cursor-pointer rounded-full w-3 h-3 bg-black"></div>
            </div>
        </div>
    </header>
    <main>
        <section id="sections" class="-mt-40 pt-16 bg-green-100">
            <p class="text-center w-full text-6xl">Let's Go!</p>
            <p class="text-center m-auto w-3/5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt quibusdam numquam, possimus quae quisquam nisi dicta unde libero excepturi voluptates obcaecati aspernatur vitae ea sapiente, laboriosam nostrum autem! Aliquam, eum?</p>
            <div class="flex flex-wrap justify-center mt-16">
                <div class="card m-10">
                    <div>
                        <div class="bg-white">
                            <img src="https://www.themediterraneantraveller.com/wp-content/uploads/2018/04/portugal-praia-do-camilo-1.jpeg" alt="image description" class="w-full rounded-t-lg">
                            <div class="bg-orange-300 z-20 relative w-24 m-auto h-24 p-5 rounded-full -mt-12">
                                <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path style="fill:white;fill-rule:nonzero;" d="m506.218 465.887c-85.233-66.401-184.4-28.25-286.003-1.759l-36.295-135.456c-10.092-3.912-21.858-1.05-28.947 7.874l36.094 134.71c-57.347 12.893-114.974 17.961-169.803-7.172-7.53-3.452-16.433-.145-19.885 7.385-3.452 7.531-.146 16.434 7.386 19.886 171.867 78.78 352.352-100.488 479.017-1.803 6.534 5.09 15.959 3.92 21.051-2.614 5.09-6.535 3.92-15.96-2.615-21.051z" />
                                        <path style="fill:white;fill-rule:nonzero;" d="m97.584 122.362c9.959-3.506 19.178-5.914 28.983-7.742l-.882-3.293c-2.144-8.001-10.367-12.751-18.371-10.606-8.002 2.144-12.75 10.369-10.606 18.371z" />
                                        <path style="fill:white;fill-rule:nonzero;" d="m285.291 135.96h15.95c8.284 0 15-6.716 15-15s-6.716-15-15-15h-15.95c-8.284 0-15 6.716-15 15s6.716 15 15 15z" />
                                        <ellipse style="fill:white;fill-rule:nonzero;" cx="391.053" cy="120.96" rx="50.403" ry="50.402" transform="matrix(.04 -.999 .999 .04 254.562 506.867)" />
                                        <path style="fill:white;fill-rule:nonzero;" d="m391.053 45.96c8.284 0 15-6.716 15-15v-15.95c0-8.284-6.716-15-15-15s-15 6.716-15 15v15.95c0 8.284 6.716 15 15 15z" />
                                        <path style="fill:white;fill-rule:nonzero;" d="m316.809 67.927c5.856 5.858 15.355 5.859 21.212 0 5.858-5.858 5.858-15.355 0-21.213l-11.278-11.278c-5.857-5.858-15.355-5.858-21.212 0-5.858 5.858-5.858 15.355 0 21.213z" />
                                        <path style="fill:white;fill-rule:nonzero;" d="m316.809 173.993-11.278 11.278c-5.858 5.858-5.858 15.355 0 21.213 5.856 5.858 15.355 5.859 21.212 0l11.278-11.278c5.858-5.858 5.858-15.355 0-21.213-5.857-5.858-15.355-5.858-21.212 0z" />
                                        <path style="fill:white;fill-rule:nonzero;" d="m376.053 210.96v15.95c0 8.284 6.716 15 15 15s15-6.716 15-15v-15.95c0-8.284-6.716-15-15-15s-15 6.716-15 15z" />
                                        <path style="fill:white;fill-rule:nonzero;" d="m444.084 173.993c-5.858 5.858-5.858 15.355 0 21.213l11.278 11.278c5.856 5.858 15.355 5.859 21.212 0 5.858-5.858 5.858-15.355 0-21.213l-11.278-11.278c-5.857-5.858-15.355-5.858-21.212 0z" />
                                        <path style="fill:white;fill-rule:nonzero;" d="m466.05 120.96c0 8.284 6.716 15 15 15h15.95c8.284 0 15-6.716 15-15s-6.716-15-15-15h-15.95c-8.284 0-15 6.716-15 15z" />
                                        <path style="fill:white;fill-rule:nonzero;" d="m465.296 67.927 11.278-11.278c5.858-5.858 5.858-15.355 0-21.213-5.857-5.858-15.355-5.858-21.212 0l-11.278 11.278c-5.858 5.858-5.858 15.355 0 21.213 5.857 5.858 15.355 5.859 21.212 0z" />
                                        <path style="fill:white;fill-rule:nonzero;" d="m132.52 316.632c14.738-17.49 38.703-24.07 60.272-16.641-4.206-57.398-28.811-97.047-65.392-123.113-19.025 41.869-19.689 88.209 5.12 139.754z" />
                                        <path style="fill:white;fill-rule:nonzero;" d="m33.055 349.107c14.908-24.718 45.81-33.735 71.498-21.366-4.599-9.426-15.343-28.241-19.604-63.396-4.808-39.665 2.793-78.816 21.986-113.461-78.612 28.107-123.566 112.432-101.195 194.425 3.464 12.694 20.492 15.112 27.315 3.798z" />
                                        <path style="fill:white;fill-rule:nonzero;" d="m207.88 231.405c12.562 29.468 13.57 48.264 14.777 65.58 15.791-24.323 47.551-32.451 73.157-18.407 11.537 6.328 25.073-4.268 21.716-16.982-21.745-82.329-103.176-132.867-185.495-117.502 33.979 20.406 60.165 50.528 75.845 87.311z" />
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="p-5 flex flex-col items-center text-holder bg-white rounded-b-lg">
                            <h3>Beaches</h3>
                            <p class="text-center">Aenean efficitur diam enim, eu ultrices quam imperdiet sed. Cras non egestas ipsum. Donec dictum diam vel nulla porttitor, ac posuere tortor porta. In sed amet.</p>
                            <button class="bg-transparent mt-5 hover:bg-orange-300 text-orange-500 font-semibold hover:text-white py-2 px-4 border border-orange-300 hover:border-transparent rounded">
                                View Section
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card m-10">
                    <div>
                        <div class="bg-white">
                            <img src="https://img.itinari.com/page/content/original/9cbf0950-125c-465b-b2d2-70e3c852a09e-istock-879069748.jpg?ch=DPR&dpr=1&w=994&s=303c3d5a1149e73e208296d2a17dcbc6" alt="image description" class="w-full rounded-t-lg">
                            <div class="bg-orange-300 z-20 relative w-24 m-auto h-24 p-5 rounded-full -mt-12">
                                <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path style="fill:white;fill-rule:nonzero;" d="m505.51 481.74c-26.505-18.266-54.52-33.31-83.511-45.136v-103.772c-9.977 1.433-20.006 1.436-30 0v92.788c-13.207-4.296-26.573-7.951-40.051-10.964l4.64-4.624c5.868-5.848 5.883-15.346.035-21.213-5.848-5.868-15.346-5.884-21.213-.035l-4.426 4.411-4.361-4.376c-5.848-5.868-15.346-5.884-21.213-.035-4.826 4.81-5.684 12.084-2.586 17.781-10.581-1.133-21.195-1.872-31.82-2.236v-101.255c-9.793 1.084-19.689 1.141-30 0v101.251c-10.877.369-21.745 1.132-32.58 2.31 3.133-5.69 2.304-12.981-2.512-17.815-5.849-5.868-15.346-5.884-21.213-.035l-4.426 4.411-4.361-4.376c-5.849-5.867-15.346-5.885-21.213-.035-5.868 5.848-5.884 15.345-.036 21.213l4.766 4.782c-13.265 2.985-26.424 6.597-39.433 10.829v-92.776c-9.977 1.433-20.006 1.436-30 0v103.759c-28.97 11.822-56.981 26.868-83.508 45.148-12.071 8.32-6.184 27.352 8.512 27.352h481.999c14.661-.001 20.609-19.014 8.511-27.352z" />
                                        <path style="fill:white;fill-rule:nonzero;" d="m406.999 247.7 19.39-19.4c5.86-5.86 15.36-5.86 21.22 0 5.85 5.86 5.85 15.36 0 21.21l-25.61 25.61v57.71c50.82-7.3 90-51.12 90-103.92 0-53.172-39.724-97.231-91.055-104.072 3.147 38.59-7.208 76.504-28.974 107.826z" />
                                        <path style="fill:white;fill-rule:nonzero;" d="m321.835 290.236c16.308 22.584 41.368 38.459 70.164 42.594v-57.71l-19.383-19.383c-14.754 14.669-31.989 26.331-50.781 34.499z" />
                                        <path style="fill:white;fill-rule:nonzero;" d="m90 332.83v-57.71l-25.61-25.61c-5.86-5.85-5.86-15.35 0-21.21s15.36-5.86 21.21 0l19.4 19.4 15.034-15.042c-21.741-31.289-32.12-69.193-28.97-107.821-51.335 6.837-91.064 50.897-91.064 104.073 0 52.8 39.18 96.62 90 103.92z" />
                                        <path style="fill:white;fill-rule:nonzero;" d="m120 275.12v57.71c28.798-4.14 53.858-20.011 70.159-42.6-18.79-8.17-36.023-19.832-50.775-34.501z" />
                                        <path style="fill:white;fill-rule:nonzero;" d="m241.004 273.074v-82.736l-40.775-40.775c-5.858-5.857-5.858-15.355 0-21.213 5.857-5.857 15.355-5.857 21.213 0l34.346 34.346 34.242-34.242c5.857-5.857 15.355-5.857 21.213 0s5.858 15.355 0 21.213l-40.238 40.238v83.169c67.681-7.488 120.5-65.02 120.5-134.665 0-74.715-60.785-135.5-135.5-135.5s-135.5 60.785-135.5 135.5c0 69.644 52.818 127.176 120.499 134.665z" />
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="p-5 flex flex-col items-center text-holder bg-white rounded-b-lg">
                            <h3>Forests</h3>
                            <p class="text-center">Aenean efficitur diam enim, eu ultrices quam imperdiet sed. Cras non egestas ipsum. Donec dictum diam vel nulla porttitor, ac posuere tortor porta. In sed amet.</p>
                            <button class="bg-transparent mt-5 hover:bg-orange-300 text-orange-500 font-semibold hover:text-white py-2 px-4 border border-orange-300 hover:border-transparent rounded">
                                View Section
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card m-10">
                    <div>
                        <div class="bg-white">
                            <img src="https://3dcomunicacaovisual.com/wp-content/uploads/2019/09/image1.jpg" alt="image description" class="w-full rounded-t-lg">
                            <div class="bg-orange-300 z-20 relative w-24 m-auto h-24 p-5 rounded-full -mt-12">
                                <svg viewBox="0 0 511.919 511.919" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path style="fill:white;fill-rule:nonzero;" d="m300.919 413.459h60v-240h-60z" />
                                        <path style="fill:white;fill-rule:nonzero;" d="m.018 233.459h90.9v-60h-84.975c-7.955 28.702-5.444 49.293-5.925 60z" />
                                        <path style="fill:white;fill-rule:nonzero;" d="m496.919 338.459c-8.284 0-15 6.716-15 15v30h-31v-225c0-57.897-47.103-105-105-105h-182.233c-63.764 0-119.121 36.657-146.124 90h208.356c8.284 0 15 6.716 15 15v90c0 8.284-6.716 15-15 15h-225.9v135c0 8.284 6.716 15 15 15h31.257c-9.295-55.165 33.439-105 88.743-105 49.626 0 90 40.374 90 90 0 5.11-.435 10.12-1.257 15h47.157v-255c0-8.284 6.716-15 15-15h90c8.284 0 15 6.716 15 15v255h106c8.284 0 15-6.716 15-15v-45c.001-8.284-6.715-15-14.999-15z" />
                                        <path style="fill:white;fill-rule:nonzero;" d="m120.919 173.459h90v60h-90z" />
                                        <path style="fill:white;fill-rule:nonzero;" d="m135.018 338.459c-33.084 0-60 26.916-60 60s26.916 60 60 60 60-26.916 60-60-26.916-60-60-60zm.901 75c-8.284 0-15-6.716-15-15s6.716-15 15-15 15 6.716 15 15-6.716 15-15 15z" />
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="p-5 flex flex-col items-center text-holder bg-white rounded-b-lg">
                            <h3>Camping</h3>
                            <p class="text-center">Aenean efficitur diam enim, eu ultrices quam imperdiet sed. Cras non egestas ipsum. Donec dictum diam vel nulla porttitor, ac posuere tortor porta. In sed amet.</p>
                            <button class="bg-transparent mt-5 hover:bg-orange-300 text-orange-500 font-semibold hover:text-white py-2 px-4 border border-orange-300 hover:border-transparent rounded">
                                View Section
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card m-10">
                    <div>
                        <div class="bg-white">
                            <img src="https://www.paraeles.pt/wp-content/uploads/2018/07/AP-1W8R6CH5N2111_hires_jpeg_24bit_rgb_resized.jpg" alt="image description" class="w-full rounded-t-lg">
                            <div class="bg-orange-300 z-20 relative w-24 m-auto h-24 p-5 rounded-full -mt-12">
                                <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path style="fill:white;fill-rule:nonzero;" d="m457.399 393.763c-14.118-14.12-34.848-16.643-51.227-8.802l-279.152-279.154c7.967-16.724 5.045-37.381-8.782-51.208l-50.203-50.205c-5.856-5.857-15.354-5.858-21.213 0l-42.426 42.426c-5.854 5.853-5.858 15.356 0 21.213l50.204 50.204c14.118 14.12 34.848 16.643 51.227 8.802l279.152 279.155c-7.967 16.724-5.045 37.381 8.782 51.208l50.204 50.205c5.857 5.858 15.355 5.858 21.213 0l42.426-42.426c5.854-5.853 5.858-15.356 0-21.213z" />
                                        <path style="fill:white;fill-rule:nonzero;" d="m183.395 349.818-116.651 116.652c-5.857 5.857-15.355 5.859-21.213 0-5.858-5.858-5.858-15.355 0-21.213l116.613-116.614c-14.571-27.502-3.315-63.609 12.744-90.117l-41.127-41.128c-52.377 63.059-84.481 132.586-102.921 183.223-23.554 64.676-30.411 112.289-30.691 114.284-1.27 9.027 5.75 17.087 14.852 17.087 6.746 0 58.642-9.812 116.375-30.836 50.637-18.44 120.164-50.542 183.222-102.917l-41.114-41.114c-26.54 16.06-62.681 27.044-90.089 12.693z" />
                                        <path style="fill:white;fill-rule:nonzero;" d="m328.613 162.172 116.642-116.642c5.858-5.858 15.356-5.858 21.213 0 5.858 5.858 5.858 15.355 0 21.213l-116.613 116.613c14.571 27.502 3.315 63.608-12.744 90.117l41.127 41.128c52.377-63.058 84.481-132.585 102.921-183.221 23.554-64.677 30.411-112.29 30.691-114.285 1.392-9.889-7.103-18.332-16.94-16.941-1.995.28-49.609 7.137-114.287 30.69-50.637 18.44-120.164 50.542-183.223 102.917l41.12 41.12c32.804-19.849 66.658-24.979 90.093-12.709z" />
                                        <path style="fill:white;fill-rule:nonzero;" d="m251.506 315.146-54.61-54.611c-9.217 17.266-17.964 44.87-4.74 58.885 10.157 10.496 33.538 9.46 59.35-4.274z" />
                                        <path style="fill:white;fill-rule:nonzero;" d="m260.431 196.998 54.61 54.611c13.735-25.812 14.771-49.193 4.274-59.351-14.014-13.224-41.618-4.477-58.884 4.74z" />
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="p-5 flex flex-col items-center text-holder bg-white rounded-b-lg">
                            <h3>Fun</h3>
                            <p class="text-center">Aenean efficitur diam enim, eu ultrices quam imperdiet sed. Cras non egestas ipsum. Donec dictum diam vel nulla porttitor, ac posuere tortor porta. In sed amet.</p>
                            <button class="bg-transparent mt-5 hover:bg-orange-300 text-orange-500 font-semibold hover:text-white py-2 px-4 border border-orange-300 hover:border-transparent rounded">
                                View Section
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>

    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>