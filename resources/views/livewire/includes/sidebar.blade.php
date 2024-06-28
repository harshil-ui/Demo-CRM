    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item sidebar-category">
                <p>Navigation</p>
                <span></span>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}" wire:navigate>
                    <i class="mdi mdi-view-quilt menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                    <div class="badge badge-info badge-pill">2</div>
                </a>
            </li>
            <li class="nav-item sidebar-category">
                <p>Components</p>
                <span></span>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                    aria-controls="ui-basic">
                    <i class="mdi mdi-palette menu-icon"></i>
                    <span class="menu-title">UI Elements</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('buttons') }}"
                                wire:click.preventDefault() wire:navigate>Buttons</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('typography') }}"
                                wire:click.preventDefault() wire:navigate>Typography</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('forms') }}" wire:navigate>
                    <i class="mdi mdi-view-headline menu-icon"></i>
                    <span class="menu-title">Form elements</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('charts') }}" wire:navigate>
                    <i class="mdi mdi-chart-pie menu-icon"></i>
                    <span class="menu-title">Charts</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('tables') }}" wire:navigate>
                    <i class="mdi mdi-grid-large menu-icon"></i>
                    <span class="menu-title">Tables</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('icons') }}" wire:navigate>
                    <i class="mdi mdi-emoticon menu-icon"></i>
                    <span class="menu-title">Icons</span>
                </a>
            </li>
            <li class="nav-item sidebar-category">
                <p>Pages</p>
                <span></span>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                    <i class="mdi mdi-account menu-icon"></i>
                    <span class="menu-title">User Pages</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="auth">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('login') }}" wire:navigate> Login </a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('login-2') }}" wire:navigate> Login 2
                            </a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('register') }}" wire:navigate> Register
                            </a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('register-2') }}" wire:navigate>
                                Register
                                2
                            </a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </nav>
