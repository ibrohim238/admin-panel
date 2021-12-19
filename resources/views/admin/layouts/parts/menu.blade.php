<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('admin.user.index') }}" class="nav-link {{ Request::routeIs('admin.user*') ? 'active' : '' }}">
        <i class="fas fa-users"></i>
        <p>Пользователи</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link">
        <i class="fas fa-arrow-left"></i>
        <p>Вернуться</p>
    </a>
</li>