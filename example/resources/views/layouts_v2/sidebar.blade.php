<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle">AdminKit</span>
        </a>
        <ul class="sidebar-nav">
            <li class="sidebar-item {{ request()->route()->getName() == 'home' ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('home') }}">
                    <i class="align-middle" data-feather="sliders"></i>
                    <span class="align-middle">Home</span>
                </a>
            </li>
            <li class="sidebar-item {{ request()->route()->getName() == 'detail' ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('detail') }}">
                    <i class="align-middle" data-feather="sliders"></i>
                    <span class="align-middle">Detail</span>
                </a>
            </li>
            <li class="sidebar-item {{ request()->route()->getName() == 'test.data' ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('test.data') }}">
                    <i class="align-middle" data-feather="sliders"></i>
                    <span class="align-middle">Test Data</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
