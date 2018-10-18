<nav class="navbar navbar-expand-lg bg-info justify-content-center align-content-lg-center">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('article.create') }}">
                <span>Добавить статью </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('main-article.create') }}">
                <span>Добавить главную статью</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('section.create') }}">
                <span>Добавить раздел учета</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('department.create') }}">
                <span>Добавить отдел</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('structural-unit.create') }}">
                <span>Добавить дапартамент</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('payment.create') }}">
                <span>Добавить операцию</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('payment.index') }}">
                <span>Бюджет</span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Отчеты
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('department.index') }}" style="color: #0d47a1;">Бюджет отдела</a>
            </div>
        </li>
    </ul>
</nav>
