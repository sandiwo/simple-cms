<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        {{-- <h3>General</h3> --}}
        <ul class="nav side-menu">
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard </a></li>
            <li><a href="{{ route('tag') }}"><i class="fa fa-hashtag"></i> Tag </a></li>
            <li><a href="{{ route('kategori') }}"><i class="fa fa-tag"></i> Kategori </a></li>
            <li><a><i class="fa fa-pencil"></i> Post <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ route('halaman', 'format=page') }}">Halaman</a></li>
                    <li><a href="{{ route('post') }}">Data Post</a></li>
                    <li><a href="{{ route('post-create') }}">Tambah Post</a></li>
                </ul>
            </li>
            <li><a href="{{ route('media') }}"><i class="fa fa-image"></i> Media </a></li>
            <li><a href="{{ route('komentar') }}"><i class="fa fa-comments"></i> Komentar </a></li>
            <li><a href="{{ route('daftarMenu', ['id' => 1]) }}"><i class="fa fa-bars"></i> Menu </a></li>
            <li><a><i class="fa fa-users"></i> User <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ route('grup') }}">Grup</a></li>
                    <li><a href="{{ route('user') }}">User</a></li>
                </ul>
            </li>
        </li>
    </ul>
</div>
</div>
