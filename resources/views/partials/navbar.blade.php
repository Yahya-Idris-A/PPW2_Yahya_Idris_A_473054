<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/home">Portofolio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{($title === "Home") ? 'active' : ''}}" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{($title === "About") ? 'active' : ''}}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{($title === "Education") ? 'active' : ''}}" href="/education">Education</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{($title === "Projects") ? 'active' : ''}}" href="/projects">Projects</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


