<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Weibo App</a>
        <ul class="navbar-nav justify-content-end">
            @if (Auth::check())
                <li class="nav-item"><a class="nav-link" href="{{ route('users.index') }}">用户列表</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="{{ route('users.show', Auth::user()) }}" class="dropdown-item">个人中心</a>
                        <a href="{{ route('users.edit', Auth::user()) }}" class="dropdown-item">编辑资料</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item" id="logout">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="submit" class="btn btn-block btn-danger">退出</button>
                            </form>
                        </a>
                    </div>
                </li>
            @else
                <li class="nav-item"><a class="nav-link" href="{{ route('help') }}">帮助</a></li>
                <li class="nav-item" ><a class="nav-link" href="{{ route('login') }}">登录</a></li>
            @endif
        </ul>
    </div>
</nav>
