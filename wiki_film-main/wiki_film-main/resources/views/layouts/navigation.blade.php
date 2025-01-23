<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
     <!--Nav Start-->
     <header class="header-center-home header-default header-sticky">
         <nav class="nav navbar navbar-expand-xl navbar-light iq-navbar header-hover-menu py-xl-0">
            <div class="container-fluid navbar-inner">
               <div class="d-flex align-items-center justify-content-between w-100 landing-header">
                  <div class="d-flex gap-3 gap-xl-0 align-items-center">
                     <div>
                        <button type="button" data-bs-toggle="offcanvas" data-bs-target="#navbar_main"
                           aria-controls="navbar_main"
                           class="d-xl-none btn btn-primary rounded-pill p-1 pt-0 toggle-rounded-btn">
                           <svg width="20px" class="icon-20" viewBox="0 0 24 24">
                              <path fill="currentColor"
                                 d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                           </svg>
                        </button>
                     </div>
                     <!--Logo -->
                     <div class="logo-default">
                         <a class="navbar-brand text-primary" href="index.html">                                              
                            <img src="assets/images/logo.png" alt="imdb logo" class="img-fluid logo  ">
                         </a>
                     </div>
                     
                  </div>
                  <nav id="navbar_main" class="offcanvas mobile-offcanvas nav navbar navbar-expand-xl hover-nav horizontal-nav mega-menu-content py-xl-0">
                    <div class="container-fluid p-lg-0">
                      <div class="offcanvas-header px-0">
                        <div class="navbar-brand ms-3">
                          <!--Logo -->
                          <div class="logo-default">
                              <a class="navbar-brand text-primary" href="index.html">                                              
                                  <img src="assets/images/logo.png" alt="imdb logo" class="img-fluid logo  ">
                              </a>
                          </div>
                        </div>
                        <button type="button" class="btn-close float-end px-3" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                      </div>
                      <ul class="navbar-nav iq-nav-menu  list-unstyled" id="header-menu">
                        <li class="nav-item">
                          <a class="nav-link"  href="{{ route('dashboard') }}" role="button" aria-expanded="false">
                            <span class="item-name">Accueil</span>
                            <span class="menu-icon">
                              <span class="toggle-menu">
                                <i class="fa fa-plus  arrow-active text-white" aria-hidden="true"></i>
                                <i class="fa fa-minus  arrow-hover text-white" aria-hidden="true"></i>
                              </span>
                            </span>
                          </a>
                          
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('films.index') }}" role="button" aria-expanded="false" aria-controls="homePages">
                            <span class="item-name">Films</span>
                            <span class="menu-icon">
                              <i class="fa fa-caret-down toggledrop-desktop right-icon" aria-hidden="true"></i>
                              <span class="toggle-menu">
                                <i class="fa fa-plus  arrow-active text-white" aria-hidden="true"></i>
                                <i class="fa fa-minus  arrow-hover text-white" aria-hidden="true"></i>
                              </span>
                            </span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link"href="{{ route('acteurs.index') }}" role="button" aria-expanded="false" aria-controls="homePages">
                            <span class="item-name">Acteurs</span>
                            <span class="menu-icon">
                              <i class="fa fa-caret-down toggledrop-desktop right-icon" aria-hidden="true"></i>
                              <span class="toggle-menu">
                                <i class="fa fa-plus  arrow-active text-white" aria-hidden="true"></i>
                                <i class="fa fa-minus  arrow-hover text-white" aria-hidden="true"></i>
                              </span>
                            </span>
                          </a>
                        </li>
                        
                      </ul>
                    </div>
                    <!-- container-fluid.// -->
                  </nav>            <div class="right-panel">
                     <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-btn">
                           <span class="navbar-toggler-icon"></span>
                        </span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav align-items-center ms-auto mb-2 mb-xl-0">
                           <li class="nav-item dropdown iq-responsive-menu">
                              <div class="search-box">
                                 <a href="#" class="nav-link p-0" id="search-drop" data-bs-toggle="dropdown">
                                    <div class="btn-icon btn-sm rounded-pill btn-action">
                                       <span class="btn-inner">
                                          <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                             </circle>
                                             <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round">
                                             </path>
                                          </svg>
                                       </span>
                                    </div>
                                 </a>
                                 <ul class="dropdown-menu p-0 dropdown-search m-0 iq-search-bar" style="width: 20rem;">
                                    <li class="p-0">
                                       <div class="form-group input-group mb-0">
                                          <input type="text" class="form-control border-0" placeholder="Search...">
                                          <button type="submit" class="search-submit">
                                             <svg class="icon-15" width="15" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor"
                                                   stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </circle>
                                                <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5"
                                                   stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                             </svg>
                                          </button>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                           </li>
                           <li class="nav-item dropdown" id="itemdropdown1">
                              <a class="nav-link d-flex align-items-center" href="#" id="navbarDropdown" role="button"
                                 data-bs-toggle="dropdown" aria-expanded="false">
                                 <div class="btn-icon rounded-pill user-icons">
                                    <span class="btn-inner">
                                       <svg class="icon-18" width="18" viewBox="0 0 24 24" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" clip-rule="evenodd"
                                             d="M9.87651 15.2063C6.03251 15.2063 2.74951 15.7873 2.74951 18.1153C2.74951 20.4433 6.01251 21.0453 9.87651 21.0453C13.7215 21.0453 17.0035 20.4633 17.0035 18.1363C17.0035 15.8093 13.7415 15.2063 9.87651 15.2063Z"
                                             stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                             stroke-linejoin="round"></path>
                                          <path fill-rule="evenodd" clip-rule="evenodd"
                                             d="M9.8766 11.886C12.3996 11.886 14.4446 9.841 14.4446 7.318C14.4446 4.795 12.3996 2.75 9.8766 2.75C7.3546 2.75 5.3096 4.795 5.3096 7.318C5.3006 9.832 7.3306 11.877 9.8456 11.886H9.8766Z"
                                             stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                             stroke-linejoin="round"></path>
                                          <path d="M19.2036 8.66919V12.6792" stroke="currentColor" stroke-width="1.5"
                                             stroke-linecap="round" stroke-linejoin="round"></path>
                                          <path d="M21.2497 10.6741H17.1597" stroke="currentColor" stroke-width="1.5"
                                             stroke-linecap="round" stroke-linejoin="round"></path>
                                       </svg>
                                    </span>
                                 </div>
                              </a>
                              <ul class="dropdown-menu dropdown-menu-end dropdown-user border-0 p-0 m-0"
                                 aria-labelledby="navbarDropdown">
                                 <li class="user-info d-flex align-items-center gap-3 mb-3">
                                    <img src="assets/images/user/user1.html" class="img-fluid" alt="" loading="lazy">
                                    <span class="font-size-14 fw-500 text-capitalize text-white">
                                    @if (Auth::check())
                                       <p>Bonjour, {{ Auth::user()->name }} !</p>
                                    @else
                                       <p>Vous n'êtes pas connecté.</p>
                                    @endif
                                 </span>
                                 </li>
                                 <li>
                                    <a href="{{ route('profile.edit') }}" class="iq-sub-card d-flex align-items-center gap-3">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 22" fill="none">
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M7.84455 20.6621C4.15273 20.6621 1 20.0876 1 17.7868C1 15.486 4.13273 13.3621 7.84455 13.3621C11.5364 13.3621 14.6891 15.4654 14.6891 17.7662C14.6891 20.066 11.5564 20.6621 7.84455 20.6621Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M7.83725 10.1738C10.26 10.1738 12.2236 8.21015 12.2236 5.78742C12.2236 3.36469 10.26 1.40015 7.83725 1.40015C5.41452 1.40015 3.44998 3.36469 3.44998 5.78742C3.4418 8.20196 5.3918 10.1656 7.80634 10.1738C7.81725 10.1738 7.82725 10.1738 7.83725 10.1738Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       </svg>
                                       <h6 class="mb-0 font-size-14 fw-normal">Mon compte</h6>
                                    </a>
               
                                 <li>
                                 <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </nav>
      </header>     
      <!--Nav End-->
</nav>
