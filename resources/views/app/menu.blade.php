<div id="fixed-menu">
    <ul>
        <li {{{ (Request::is('home') ? 'class=active' : '') }}}><a href="{{ url('/home') }}"><i class="icon-house"></i></a></li>
        <li {{{ (Request::is('my-courses') ? 'class=active' : '') }}}><a href="{{ url('/my-courses') }}"><i class="icon-courses"></i></a></li>
        <li {{{ (Request::is('library') ? 'class=active' : '') }}}><a href="{{ url('/library') }}"><i class="icon-course"></i></a></li>
        <li {{{ (Request::is('profile') ? 'class=active' : '') }}}><a href="{{ url('/profile') }}"><i class="icon-zen-2"></i></a></li>
    </ul>
</div>