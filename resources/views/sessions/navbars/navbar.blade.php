<!-- component -->
<nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between
px-2 py-2 navbar-expand-lg bg-gray-900" x-data="{ open: false }">
  <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
    <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start ">
        <a class="text-lg font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white"
            href="{{ url('app') }}">
            SISTE<span class="text-teal-500 font-bold">MILHAS</span>
        </a>
        {{-- <button class="cursor-pointer text-xl leading-none px-3 py-1
        border border-solid border-transparent rounded bg-transparent block
        lg:hidden outline-none focus:outline-none" type="button" onclick="toggleNavbar('sistemilhas-collapse-navbar')">
            <span class="text-teal-500 fa-solid fa-bars"></span>
        </button> --}}
        <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
            <svg fill="currentColor" viewBox="0 0 20 20" class="w-8 h-8 text-teal-500">
                <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" style="display: none"></path>
            </svg>
        </button>
    </div>
    <div class="flex flex-1 items-center justify-end md:justify-between" :class="{'flex': open, 'hidden': !open}">
        <nav aria-label="Site Nav" class="hidden md:block">
          <ul class="flex items-center gap-6 text-sm">
            <li>
              <a class="text-gray-500 transition hover:text-gray-500/75" href="/">
                About
              </a>
            </li>

            <li>
              <a class="text-gray-500 transition hover:text-gray-500/75" href="/">
                Careers
              </a>
            </li>

            <li>
              <a class="text-gray-500 transition hover:text-gray-500/75" href="/">
                History
              </a>
            </li>

            <li>
              <a class="text-gray-500 transition hover:text-gray-500/75" href="/">
                Services
              </a>
            </li>

            <li>
              <a class="text-gray-500 transition hover:text-gray-500/75" href="/">
                Projects
              </a>
            </li>

            <li>
              <a class="text-gray-500 transition hover:text-gray-500/75" href="/">
                Blog
              </a>
            </li>
          </ul>
        </nav>

        <div class="flex items-center gap-4">
          <div class="sm:flex sm:gap-4">
            <a
              class="block rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white transition hover:bg-teal-700"
              href="/"
            >
              Login
            </a>

            <a
              class="hidden rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-teal-600 transition hover:text-teal-600/75 sm:block"
              href="/"
            >
              Register
            </a>
          </div>

          <button
            class="block rounded bg-gray-100 p-2.5 text-gray-600 transition hover:text-gray-600/75 md:hidden"
          >
            <span class="sr-only">Toggle menu</span>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M4 6h16M4 12h16M4 18h16"
              />
            </svg>
          </button>
        </div>
      </div>
    {{-- <div class="lg:flex flex-grow items-center bg-white lg:bg-opacity-0
    lg:shadow-none hidden bg-gray-900" id="sistemilhas-collapse-navbar" :class="{'flex': open, 'hidden': !open}"
    x-transition:enter="transition ease-out duration-100"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-100"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90">
      <ul class="flex flex-col lg:flex-row list-none lg:ml-auto items-center">
        @auth
            <li class="font-medium">
                <a href="{{ route('user.index') }}" class="flex items-center transform transition-colors border-r-4 border-transparent hover:border-teal-500">
                <div class="mr-3">
                    <i class="fa-solid fa-2x fa-user"></i>
                </div>
                Meu cadastro
                </a>
            </li>
        @endauth
        <li class="inline-block relative">
            <div class="bg-white text-base z-50 float-left
            py-2 list-none text-left rounded shadow-lg min-w-48" id="demo-pages-dropdown">
              @auth
                  <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48" id="demo-pages-dropdown">
                      <div class="divide-y divide-gray-700 Sidebar" id="Sidebar">
                      </div>
                      <div class="flex items-center mr-5">
                          <a href="{{ route('demand.create') }}" class="bg-teal-500
                          hover:bg-gray-900 border-2 border-teal-500
                          active:bg-teal-300 text-white text-xs font-bold uppercase px-6 py-2.5 rounded-full shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-4 ease-linear transition-all duration-150" >
                          FAZER PEDIDO <span class="fa-solid fa-plus"></span>
                          </a>
                      </div>
                      <x-dropdown-user></x-dropdown-user>
                  </div>
              @else
                  <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48" id="demo-pages-dropdown">
                      <a href="{{ route('login') }}" class="bg-teal-500
                      hover:bg-gray-900 border-2 border-teal-500
                      active:bg-teal-300 text-white text-xs font-bold uppercase px-6 py-2.5 rounded-full shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-4 ease-linear transition-all duration-150" >
                      Entrar
                      </a>
                      <a href="{{ route('register') }}" class="
                      border-2 border-teal-500 bg-gray-900 text-white
                      hover:bg-teal-500
                      active:bg-teal-300 active:text-white text-xs font-bold uppercase px-6 py-2.5 rounded-full shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-4 ease-linear transition-all duration-150" >
                          Registrar
                      </a>
                  </div>
              @endauth
            </div>
          </li>

            @if (Route::has('login'))
                <div class="top-0 right-0 px-6 py-5 sm:block">
                    <li class="flex items-center">
                        @auth
                            <div class="flex items-center mr-5">
                                <a href="{{ route('demand.create') }}" class="bg-teal-500
                                hover:bg-gray-900 border-2 border-teal-500
                                active:bg-teal-300 text-white text-xs font-bold uppercase px-6 py-2.5 rounded-full shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-4 ease-linear transition-all duration-150" >
                                FAZER PEDIDO <span class="fa-solid fa-plus"></span>
                                </a>
                            </div>
                            <div class="flex items-center mr-5">
                                <x-dropdown-alerts></x-dropdown-user>
                            </div>
                            <x-dropdown-user></x-dropdown-user>
                        @else
                            <a href="{{ route('login') }}" class="bg-teal-500
                            hover:bg-gray-900 border-2 border-teal-500
                            active:bg-teal-300 text-white text-xs font-bold uppercase px-6 py-2.5 rounded-full shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-4 ease-linear transition-all duration-150" >
                             Entrar
                            </a>
                            <a href="{{ route('register') }}" class="
                            border-2 border-teal-500 bg-gray-900 text-white
                            hover:bg-teal-500
                            active:bg-teal-300 active:text-white text-xs font-bold uppercase px-6 py-2.5 rounded-full shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-4 ease-linear transition-all duration-150" >
                                 Registrar
                            </a>
                        @endauth

                    </li>
                </div>
            @endif
      </ul>
    </div> --}}
  </div>
</nav>

<header aria-label="Site Header" class="bg-white">
    <div
      class="mx-auto flex h-16 max-w-screen-xl items-center gap-8 px-4 sm:px-6 lg:px-8"
    >
      <a class="block text-teal-600" href="/">
        <span class="sr-only">Home</span>
        <svg
          class="h-8"
          viewBox="0 0 28 24"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M0.41 10.3847C1.14777 7.4194 2.85643 4.7861 5.2639 2.90424C7.6714 1.02234 10.6393 0 13.695 0C16.7507 0 19.7186 1.02234 22.1261 2.90424C24.5336 4.7861 26.2422 7.4194 26.98 10.3847H25.78C23.7557 10.3549 21.7729 10.9599 20.11 12.1147C20.014 12.1842 19.9138 12.2477 19.81 12.3047H19.67C19.5662 12.2477 19.466 12.1842 19.37 12.1147C17.6924 10.9866 15.7166 10.3841 13.695 10.3841C11.6734 10.3841 9.6976 10.9866 8.02 12.1147C7.924 12.1842 7.8238 12.2477 7.72 12.3047H7.58C7.4762 12.2477 7.376 12.1842 7.28 12.1147C5.6171 10.9599 3.6343 10.3549 1.61 10.3847H0.41ZM23.62 16.6547C24.236 16.175 24.9995 15.924 25.78 15.9447H27.39V12.7347H25.78C24.4052 12.7181 23.0619 13.146 21.95 13.9547C21.3243 14.416 20.5674 14.6649 19.79 14.6649C19.0126 14.6649 18.2557 14.416 17.63 13.9547C16.4899 13.1611 15.1341 12.7356 13.745 12.7356C12.3559 12.7356 11.0001 13.1611 9.86 13.9547C9.2343 14.416 8.4774 14.6649 7.7 14.6649C6.9226 14.6649 6.1657 14.416 5.54 13.9547C4.4144 13.1356 3.0518 12.7072 1.66 12.7347H0V15.9447H1.61C2.39051 15.924 3.154 16.175 3.77 16.6547C4.908 17.4489 6.2623 17.8747 7.65 17.8747C9.0377 17.8747 10.392 17.4489 11.53 16.6547C12.1468 16.1765 12.9097 15.9257 13.69 15.9447C14.4708 15.9223 15.2348 16.1735 15.85 16.6547C16.9901 17.4484 18.3459 17.8738 19.735 17.8738C21.1241 17.8738 22.4799 17.4484 23.62 16.6547ZM23.62 22.3947C24.236 21.915 24.9995 21.664 25.78 21.6847H27.39V18.4747H25.78C24.4052 18.4581 23.0619 18.886 21.95 19.6947C21.3243 20.156 20.5674 20.4049 19.79 20.4049C19.0126 20.4049 18.2557 20.156 17.63 19.6947C16.4899 18.9011 15.1341 18.4757 13.745 18.4757C12.3559 18.4757 11.0001 18.9011 9.86 19.6947C9.2343 20.156 8.4774 20.4049 7.7 20.4049C6.9226 20.4049 6.1657 20.156 5.54 19.6947C4.4144 18.8757 3.0518 18.4472 1.66 18.4747H0V21.6847H1.61C2.39051 21.664 3.154 21.915 3.77 22.3947C4.908 23.1889 6.2623 23.6147 7.65 23.6147C9.0377 23.6147 10.392 23.1889 11.53 22.3947C12.1468 21.9165 12.9097 21.6657 13.69 21.6847C14.4708 21.6623 15.2348 21.9135 15.85 22.3947C16.9901 23.1884 18.3459 23.6138 19.735 23.6138C21.1241 23.6138 22.4799 23.1884 23.62 22.3947Z"
            fill="currentColor"
          />
        </svg>
      </a>

      <div class="flex flex-1 items-center justify-end md:justify-between">
        <nav aria-label="Site Nav" class="hidden md:block">
          <ul class="flex items-center gap-6 text-sm">
            <li>
              <a class="text-gray-500 transition hover:text-gray-500/75" href="/">
                About
              </a>
            </li>

            <li>
              <a class="text-gray-500 transition hover:text-gray-500/75" href="/">
                Careers
              </a>
            </li>

            <li>
              <a class="text-gray-500 transition hover:text-gray-500/75" href="/">
                History
              </a>
            </li>

            <li>
              <a class="text-gray-500 transition hover:text-gray-500/75" href="/">
                Services
              </a>
            </li>

            <li>
              <a class="text-gray-500 transition hover:text-gray-500/75" href="/">
                Projects
              </a>
            </li>

            <li>
              <a class="text-gray-500 transition hover:text-gray-500/75" href="/">
                Blog
              </a>
            </li>
          </ul>
        </nav>

        <div class="flex items-center gap-4">
          <div class="sm:flex sm:gap-4">
            <a
              class="block rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white transition hover:bg-teal-700"
              href="/"
            >
              Login
            </a>

            <a
              class="hidden rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-teal-600 transition hover:text-teal-600/75 sm:block"
              href="/"
            >
              Register
            </a>
          </div>

          <button
            class="block rounded bg-gray-100 p-2.5 text-gray-600 transition hover:text-gray-600/75 md:hidden"
          >
            <span class="sr-only">Toggle menu</span>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M4 6h16M4 12h16M4 18h16"
              />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </header>
