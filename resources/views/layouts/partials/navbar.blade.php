@auth
<ul class="nav justify-content-end">
    <li class="nav-item {{ Request::is('home') ? 'active' : '' }}">
        <a class="nav-link" href="/home">Dashboard</a>
    </li>

    <li class="nav-item {{ Request::is('profile') ? 'active' : '' }}">
        <a class="nav-link" href="/profile">Profile</a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="/logout">Logout</a>
    </li>
</ul>
@endauth

<style>
    .nav-item.active .nav-link {
        border: 1px solid #007bff; /* Cambia el color según tus preferencias */
        border-radius: 5px; /* Agrega bordes redondeados si lo deseas */
        padding: 5px 10px; /* Ajusta el espaciado dentro del rectángulo */
    }
</style>
