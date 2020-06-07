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
  <div id="app">
    @if ($section === 'main')
    <header>
      @else
      <header class="h-64">
        @endif
        <div id="nav_container" class="fixed z-20 w-full top-0 h-24 scrolled">
          <div id="blackboard" class="absolute w-full bg-green-900 bg-opacity-75 mt-2 -mt-32 h-24 sm:h-32"></div>
          <nav class="xl:w-3/5 lg:w-4/5 w-5/5 z-20 flex justify-between items-center px-5 m-auto text-white relative">
            <div id="logo" class="mt-3 pt-1 sm:pt-0 sm:mt-4 text-green-900 scrolled">
              <svg class="w-24 sm:w-32 fill-current stroke-current" viewBox="0 0 2134 2134" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-miterlimit:10;">
                <g class="logo_anim">
                  <path d="M896.167,653.833c-20.375,-100 -44.875,-234.458 -44.875,-305.125c-0.003,-0.459 -0.005,-0.919 -0.005,-1.379c0,-117.397 96.603,-214 214,-214c0.46,0 0.92,0.001 1.38,0.004c118.958,0 215.375,98.709 215.375,215.375c0,68.75 -24.375,203.959 -44.875,305.125" style="fill:none;fill-rule:nonzero;stroke-width:133.33px;" />
                  <path d="M896.167,1479.5c-20.459,100.25 -44.875,234 -44.875,305.125c-0.003,0.46 -0.005,0.92 -0.005,1.379c0,117.397 96.603,214 214,214c0.46,0 0.92,-0.001 1.38,-0.004c118.958,0 215.375,-98.708 215.375,-215.375c0,-68.917 -24.375,-203.875 -44.875,-305.125" style="fill:none;fill-rule:nonzero;stroke-width:133.33px;" />
                  <path d="M1479.5,896.167c100.25,-20.459 234,-44.875 305.125,-44.875c0.46,-0.003 0.92,-0.005 1.379,-0.005c117.397,0 214,96.603 214,214c0,0.46 -0.001,0.92 -0.004,1.38c0,118.958 -98.708,215.375 -215.375,215.375c-68.75,0 -203.958,-24.375 -305.125,-44.875" style="fill:none;fill-rule:nonzero;stroke-width:133.33px;" />
                  <path d="M653.833,896.125c-100,-20.375 -234.375,-44.833 -305.125,-44.833c-0.459,-0.003 -0.919,-0.005 -1.379,-0.005c-117.397,0 -214,96.603 -214,214c0,0.46 0.001,0.92 0.004,1.38c0,118.958 98.709,215.375 215.375,215.375c68.75,0 203.959,-24.375 305.125,-44.875" style="fill:none;fill-rule:nonzero;stroke-width:133.33px;" />
                  <path d="M1237.17,653.833c56.458,-85.333 134.583,-196.875 184.875,-247.125c40.187,-40.724 95.077,-63.674 152.291,-63.674c57.215,0 112.104,22.95 152.292,63.674c84.125,84.125 82.5,222.084 0,304.584c-48.583,48.625 -161.125,127.791 -247.125,184.875" style="fill:none;fill-rule:nonzero;stroke-width:133.33px;" />
                  <path d="M653.833,1237.17c-85.333,56.458 -196.875,134.583 -247.125,184.875c-40.724,40.187 -63.674,95.077 -63.674,152.291c0,57.215 22.95,112.104 63.674,152.292c84.125,84.125 222.084,82.5 304.584,0c48.625,-48.583 127.791,-161.125 184.875,-247.125" style="fill:none;fill-rule:nonzero;stroke-width:133.33px;" />
                  <path d="M1479.5,1237.17c85.333,56.458 196.875,134.583 247.125,184.875c40.724,40.187 63.674,95.077 63.674,152.291c0,57.215 -22.95,112.104 -63.674,152.292c-84.125,84.125 -222.083,82.5 -304.583,0c-48.709,-48.708 -127.75,-161.042 -184.875,-247.125" style="fill:none;fill-rule:nonzero;stroke-width:133.33px;" />
                  <path d="M896.167,653.833c-56.375,-85.125 -134.917,-197.166 -184.875,-247.125c-40.188,-40.724 -95.077,-63.674 -152.292,-63.674c-57.215,0 -112.104,22.95 -152.292,63.674c-84.125,84.125 -82.5,222.084 0,304.584c48.375,48.375 161.25,127.833 247.125,184.875" style="fill:none;fill-rule:nonzero;stroke-width:133.33px;" />
                  <circle cx="1066.67" cy="1066.67" r="266.667" style="fill:none;stroke-width:133.33px;" />
                </g>
                <g transform="matrix(4.16667,0,0,4.16667,81.4249,-371.841)">
                  <text x="50.232px" y="327.003px" style="font-family:'Lobster-Regular', 'Lobster';font-size:117px;fill:#fff;stroke:none;">Luso</text>
                  <text x="-5.635px" y="444.003px" style="font-family:'Lobster-Regular', 'Lobster';font-size:117px;fill:#fff;stroke:none;">Nature</text></g>
              </svg>
            </div>
            <div class="flex flex-col absolute right-0 top-0 pt-1">
              <div class="hidden lg:flex justify-end items-start text-xs font-bold">
                <a class="login" href="/dashboard">
                  @if (!empty($user->name))
                  Hello {{ $user->name }}
                  @else
                  Login / Signup
                  @endif
                </a>
              </div>
              <div id="menu-mob" class="flex lg:hidden menu-mob w-16 h-32 items-center justify-center relative cursor-pointer z-10">
                <div class="menu-mob_burger"></div>
              </div>
              <ul class="lg:ml-0 lg:mt-12 hidden flex flex-col justify-center items-center lg:block text-lg">
                <li class="p-5 lg:p-0 lg:inline lg:mr-6"><a href="#">Lorem</a></li>
                <li class="p-5 lg:p-0 lg:inline lg:mr-6"><a href="#">Doloribus</a></li>
                <li class="p-5 lg:p-0 lg:inline lg:mr-6"><a href="#">Mollitia</a></li>
                <li class="p-5 lg:p-0 lg:inline lg:mr-6"><a href="#">Dolores</a></li>
                <li class="p-5 lg:p-0 lg:inline lg:mr-6"><a href="#">Labore</a></li>
                <li class="p-5 lg:p-0 lg:inline lg:mr-6"><a href="#">Labore</a></li>
                <li class="p-5 lg:p-0 lg:inline">
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
        @if ($section === 'main')
        <div id="main_slider_container" class="relative">
          <div class="main_slide w-full absolute active overflow-hidden">
            <div class="main_slide_bg w-full absolute z-0"></div>
            <div class="overlay bg-black bg-opacity-50 w-full h-full z-10 relative flex flex-col justify-center items-center px-20 text-white">
              <h1 class="text-center text-4xl sm:text-6xl">There is no sincerer love</h1>
              <h3 class="text-center text-xl sm:text-2xl">than the love of food</h3>
            </div>
          </div>
          <div class="main_slide w-full absolute overflow-hidden">
            <div class="main_slide_bg w-full absolute z-0"></div>
            <div class="overlay bg-black bg-opacity-50 w-full h-full z-10 relative flex flex-col justify-center items-center px-20 text-white">
              <h1 class="text-center text-4xl sm:text-6xl">There is no sincerer love 2</h1>
              <h3 class="text-center text-xl sm:text-2xl">than the love of food</h3>
            </div>
          </div>
          <div class="main_slide w-full absolute overflow-hidden">
            <div class="main_slide_bg w-full absolute z-0"></div>
            <div class="overlay bg-black bg-opacity-50 w-full h-full z-10 relative flex flex-col justify-center items-center px-20 text-white">
              <h1 class="text-center text-4xl sm:text-6xl">There is no sincerer love 3</h1>
              <h3 class="text-center text-xl sm:text-2xl">than the love of food</h3>
            </div>
          </div>
          <div id="main_slider_pager" class="absolute w-full flex items-end z-10 justify-center pb-5">
            <div class="page cursor-pointer rounded-full w-3 h-3 mr-2 bg-black bg-white"></div>
            <div class="page cursor-pointer rounded-full w-3 h-3 mr-2 bg-black"></div>
            <div class="page cursor-pointer rounded-full w-3 h-3 bg-black"></div>
          </div>
        </div>
        @else
        <div id="section_topper" class="w-full">
          <div class="w-full bg-opacity-50 bg-black"></div>
        </div>
        @endif
      </header>
      <main class="relative">