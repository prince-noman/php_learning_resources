<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
      <!-- Dark Logo-->
      <a href="{{ route('admin.dashboard') }}" class="logo logo-dark mt-3">
        <span class="logo-sm">
          {{-- <img src=" {{ asset('assets/images') }}/logo-sm.png" alt="" height="22" /> --}}
          <h2>Prince</h2>
        </span>
        <span class="logo-lg">
          <h2>Prince</h2>
          {{-- <img src=" {{ asset('assets/images') }}/logo-dark.png" alt="" height="17" /> --}}
        </span>
      </a>
      <!-- Light Logo-->
      <a href="index.html" class="logo logo-light mt-3">
        <span class="logo-sm">
          <h2>Prince</h2>
          {{-- <img src=" {{ asset('assets/images') }}/logo-sm.png" alt="" height="22" /> --}}
        </span>
        <span class="logo-lg">
          <h2>Prince</h2>
          {{-- <img src=" {{ asset('assets/images') }}/logo-light.png" alt="" height="17" /> --}}
        </span>
      </a>
      <button
        type="button"
        class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
        id="vertical-hover"
      >
        <i class="ri-record-circle-line"></i>
      </button>
    </div>

    <div id="scrollbar">
      <div class="container-fluid">
        <div id="two-column-menu"></div>
        <ul class="navbar-nav" id="navbar-nav">
          <li class="menu-title"><span data-key="t-menu">Menu</span></li>
          {{-- Apps Menu  --}}
          <li class="nav-item">
            <a
              class="nav-link menu-link"
              href="#sidebarApps"
              data-bs-toggle="collapse"
              role="button"
              aria-expanded="false"
              aria-controls="sidebarApps"
            >
              <i data-feather="grid" class="icon-dual"></i>
              <span data-key="t-apps">Tasks</span>
            </a>
            <div class="collapse menu-dropdown" id="sidebarApps">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a
                    href="{{ route('admin.tasks.index') }}"
                    class="nav-link"
                    {{-- data-bs-toggle="collapse" --}}
                    role="button"
                    aria-expanded="false"
                    aria-controls="sidebarTasks"
                    data-key="t-tasks"
                  >
                    All Tasks
                  </a>
                  {{-- Task's Submenu --}}
                  {{-- <div class="collapse menu-dropdown" id="sidebarTasks">
                    <ul class="nav nav-sm flex-column">
                      <li class="nav-item">
                        <a
                          href="apps-tasks-kanban.html"
                          class="nav-link"
                          data-key="t-kanbanboard"
                        >
                          Kanban Board
                        </a>
                      </li>
                      <li class="nav-item">
                        <a
                          href="apps-tasks-list-view.html"
                          class="nav-link"
                          data-key="t-list-view"
                        >
                          List View
                        </a>
                      </li>
                      <li class="nav-item">
                        <a
                          href="apps-tasks-details.html"
                          class="nav-link"
                          data-key="t-task-details"
                        >
                          Task Details
                        </a>
                      </li>
                    </ul>
                  </div> --}}
                  {{-- Task's Submenu --}}
                </li>
                <li class="nav-item">
                  <a
                    href="{{ route('admin.tasks.create') }}"
                    class="nav-link"
                  >
                    Create Task
                  </a>
                </li>
              </ul>
            </div>
          </li>
          {{-- Apps Menu  --}}
          <li class="nav-item">
            <a
              class="nav-link menu-link"
              href="#sidebarImageApps"
              data-bs-toggle="collapse"
              role="button"
              aria-expanded="false"
              aria-controls="sidebarApps"
            >
              <i data-feather="grid" class="icon-dual"></i>
              <span data-key="t-apps">Image Upload</span>
            </a>
            <div class="collapse menu-dropdown" id="sidebarImageApps">
              <ul class="nav nav-sm flex-column">
                {{-- Single Image Upload in Public --}}
                <li class="nav-item">
                  <a
                    href="{{ route('admin.pub-single') }}"
                    class="nav-link {{ request()->routeIs('admin.pub-single') ? 'active' : '' }}"
                    {{-- data-bs-toggle="collapse" --}}
                    role="button"
                    aria-expanded="false"
                    aria-controls="sidebarTasks"
                    data-key="t-tasks"
                  >
                    Public Single Image
                  </a>
                  {{-- Task's Submenu --}}
                  {{-- <div class="collapse menu-dropdown" id="sidebarTasks">
                    <ul class="nav nav-sm flex-column">
                      <li class="nav-item">
                        <a
                          href="apps-tasks-kanban.html"
                          class="nav-link"
                          data-key="t-kanbanboard"
                        >
                          Kanban Board
                        </a>
                      </li>
                      <li class="nav-item">
                        <a
                          href="apps-tasks-list-view.html"
                          class="nav-link"
                          data-key="t-list-view"
                        >
                          List View
                        </a>
                      </li>
                      <li class="nav-item">
                        <a
                          href="apps-tasks-details.html"
                          class="nav-link"
                          data-key="t-task-details"
                        >
                          Task Details
                        </a>
                      </li>
                    </ul>
                  </div> --}}
                  {{-- Task's Submenu --}}
                </li>
                {{-- Multiple Image Upload in Public --}}
                <li class="nav-item">
                  <a
                    href="{{ route('admin.pub-multiple') }}"
                    class="nav-link {{ request()->routeIs('admin.pub-multiple') ? 'active' : '' }}"
                    {{-- data-bs-toggle="collapse" --}}
                    role="button"
                    aria-expanded="false"
                    aria-controls="sidebarTasks"
                    data-key="t-tasks"
                  >
                    Public Multiple Image
                  </a>
                  {{-- Task's Submenu --}}
                  {{-- <div class="collapse menu-dropdown" id="sidebarTasks">
                    <ul class="nav nav-sm flex-column">
                      <li class="nav-item">
                        <a
                          href="apps-tasks-kanban.html"
                          class="nav-link"
                          data-key="t-kanbanboard"
                        >
                          Kanban Board
                        </a>
                      </li>
                      <li class="nav-item">
                        <a
                          href="apps-tasks-list-view.html"
                          class="nav-link"
                          data-key="t-list-view"
                        >
                          List View
                        </a>
                      </li>
                      <li class="nav-item">
                        <a
                          href="apps-tasks-details.html"
                          class="nav-link"
                          data-key="t-task-details"
                        >
                          Task Details
                        </a>
                      </li>
                    </ul>
                  </div> --}}
                  {{-- Task's Submenu --}}
                </li>
                {{-- Single Image Upload in Storage --}}
                <li class="nav-item">
                  <a
                    href="{{ route('admin.store-single') }}"
                    class="nav-link {{ request()->routeIs('admin.store-single') ? 'active' : '' }}"
                    {{-- data-bs-toggle="collapse" --}}
                    role="button"
                    aria-expanded="false"
                    aria-controls="sidebarTasks"
                    data-key="t-tasks"
                  >
                    Storage Single Image
                  </a>
                  {{-- Task's Submenu --}}
                  {{-- <div class="collapse menu-dropdown" id="sidebarTasks">
                    <ul class="nav nav-sm flex-column">
                      <li class="nav-item">
                        <a
                          href="apps-tasks-kanban.html"
                          class="nav-link"
                          data-key="t-kanbanboard"
                        >
                          Kanban Board
                        </a>
                      </li>
                      <li class="nav-item">
                        <a
                          href="apps-tasks-list-view.html"
                          class="nav-link"
                          data-key="t-list-view"
                        >
                          List View
                        </a>
                      </li>
                      <li class="nav-item">
                        <a
                          href="apps-tasks-details.html"
                          class="nav-link"
                          data-key="t-task-details"
                        >
                          Task Details
                        </a>
                      </li>
                    </ul>
                  </div> --}}
                  {{-- Task's Submenu --}}
                </li>
                {{-- Multiple Image Upload in Storage --}}
                <li class="nav-item">
                  <a
                    href="{{ route('admin.store-multiple') }}"
                    class="nav-link {{ request()->routeIs('admin.store-multiple') ? 'active' : '' }}"
                    {{-- data-bs-toggle="collapse" --}}
                    role="button"
                    aria-expanded="false"
                    aria-controls="sidebarTasks"
                    data-key="t-tasks"
                  >
                    Storage Multiple Image
                  </a>
                </li>
              </ul>
            </div>
          </li>
          {{-- Album Project --}}
          <li class="nav-item">
            <a
              class="nav-link menu-link"
              href="#sidebarAlbumApps"
              data-bs-toggle="collapse"
              role="button"
              aria-expanded="false"
              aria-controls="sidebarApps"
            >
              <i data-feather="grid" class="icon-dual"></i>
              <span data-key="t-apps">Gallery App</span>
            </a>
            <div class="collapse menu-dropdown" id="sidebarAlbumApps">
              <ul class="nav nav-sm flex-column">
                {{-- All Albums Menu --}}
                <li class="nav-item">
                  <a
                    href="{{ route('admin.album.index') }}"
                    class="nav-link "
                    {{-- data-bs-toggle="collapse" --}}
                    role="button"
                    aria-expanded="false"
                    aria-controls="sidebarTasks"
                    data-key="t-tasks"
                  >
                    All Albums
                  </a>
                </li>
                {{-- Create Album --}}
                <li class="nav-item">
                  <a
                    href=""
                    class="nav-link "
                    {{-- data-bs-toggle="collapse" --}}
                    role="button"
                    aria-expanded="false"
                    aria-controls="sidebarTasks"
                    data-key="t-tasks"
                  >
                    Create Album
                  </a>
                </li>
               
              </ul>
            </div>
          </li>
          {{-- Album Project --}}
          {{-- @include('backend.layouts.includes.extra_menus') --}}
        </ul>
      </div>
      {{-- Sidebar  --}}
    </div>
    <div class="sidebar-background"></div>
  </div>