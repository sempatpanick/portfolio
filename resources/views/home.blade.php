<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Portfolio | Muhammad Dadang Saputra</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
    <style>
        :root {
            --bs-primary: #7ec8e3;
            /* sky light blue */
            --bs-primary-rgb: 126, 200, 227;
        }

        body {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
            background: #f8fafc;
            color: #212529;
        }

        /* Navbar transparent with shadow on scroll */
        .navbar {
            transition: background-color 0.3s, box-shadow 0.3s;
            padding: 1rem 2rem;
            background-color: transparent;
        }

        .navbar.scrolled {
            background-color: white !important;
            box-shadow: 0 3px 10px rgb(0 0 0 / 0.1);
        }

        .nav-link {
            font-weight: 600;
            color: var(--bs-primary);
            transition: color 0.3s;
        }

        .nav-link:hover {
            color: #15574a;
        }

        /* Hero Section */
        #hero {
            min-height: 100vh;
            background: linear-gradient(135deg, #d0e8fc 0%, #7ec8e3 100%);
            display: flex;
            align-items: center;
            text-align: center;
            color: white;
            padding: 0 1rem;
        }

        #hero h1 {
            font-weight: 700;
            font-size: 3rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.25);
        }

        #hero p {
            font-weight: 400;
            font-size: 1.25rem;
            margin-top: 1rem;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.15);
        }

        #hero .btn-primary {
            background-color: var(--bs-primary);
            border: none;
            padding: 0.75rem 2rem;
            font-weight: 600;
            box-shadow: 0 4px 15px rgba(126, 200, 227, 0.6);
            transition: box-shadow 0.3s ease;
        }

        #hero .btn-primary:hover {
            box-shadow: 0 6px 25px rgba(126, 200, 227, 0.9);
        }

        /* Sections common styling */
        section {
            padding: 5rem 1rem;
        }

        .section-title {
            font-weight: 700;
            font-size: 2.5rem;
            color: var(--bs-primary);
            margin-bottom: 3rem;
            text-align: center;
            position: relative;
        }

        .section-title::after {
            content: "";
            display: block;
            width: 60px;
            height: 4px;
            background: var(--bs-primary);
            margin: 0.75rem auto 0 auto;
            border-radius: 2px;
        }

        /* About Section */
        #about .content {
            max-width: 720px;
            margin: 0 auto;
            font-weight: 400;
            font-size: 1.125rem;
            color: #34495e;
            line-height: 1.7;
            background: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(126, 200, 227, 0.3);
            transition: box-shadow 0.3s;
        }

        #about .content:hover {
            box-shadow: 0 15px 35px rgba(126, 200, 227, 0.5);
        }

        /* Portfolio Section */
        #portfolio .card {
            border: none;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(126, 200, 227, 0.2);
            transition: transform 0.3s, box-shadow 0.3s;
            cursor: pointer;
            background: white;
        }

        #portfolio .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 35px rgba(126, 200, 227, 0.5);
        }

        #portfolio .card img {
            border-bottom: 1px solid #e9ecef;
            height: 180px;
            object-fit: contain;
            background-color: #333;
            width: 100%;
        }

        #portfolio .card-body {
            padding: 1rem 1.25rem;
        }

        #portfolio .card-title {
            color: var(--bs-primary);
            font-weight: 700;
            font-size: 1.25rem;
        }

        #portfolio .card-text {
            font-size: 0.95rem;
            color: #55606a;
            margin-top: 0.5rem;
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .carousel-item img {
            object-fit: contain;
            height: 400px;
            background-color: #333;
        }

        /* Skills Section */
        #skills .badge {
            background-color: var(--bs-primary);
            font-weight: 600;
            font-size: 1rem;
            margin: 0.3rem 0.6rem 0.6rem 0;
            padding: 0.6rem 1rem;
            color: white;
            border-radius: 50px;
            box-shadow: 0 4px 12px rgba(126, 200, 227, 0.5);
            transition: background-color 0.3s ease;
            cursor: default;
        }

        #skills .badge:hover {
            background-color: #5ca6d3;
        }

        /* Contact Section */
        #contact form {
            max-width: 600px;
            margin: 0 auto;
        }

        #contact .form-control:focus {
            border-color: var(--bs-primary);
            box-shadow: 0 0 8px rgba(126, 200, 227, 0.6);
        }

        #contact button.btn-primary {
            background-color: var(--bs-primary);
            border: none;
            padding: 0.75rem 1.5rem;
            font-weight: 600;
            box-shadow: 0 4px 15px rgba(126, 200, 227, 0.7);
            transition: box-shadow 0.3s ease;
        }

        #contact button.btn-primary:hover {
            box-shadow: 0 6px 25px rgba(126, 200, 227, 0.9);
        }

        /* Footer */
        footer {
            background-color: #e7f1fa;
            padding: 1rem 0;
            text-align: center;
            font-size: 0.9rem;
            color: #6c757d;
            font-weight: 400;
        }

        /* Responsive tweaks */
        @media (max-width: 576px) {
            #hero h1 {
                font-size: 2.25rem;
            }

            #hero p {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold fs-4 text-white" href="#hero">Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu"
                aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link text-white active" href="#hero">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="hero" class="d-flex flex-column justify-content-center">
        <div class="container">
            <h1>Hello, I'm Muhammad Dadang Saputra</h1>
            <p class="lead mt-3">A passionate mobile developer crafting beautiful and write a clean code.</p>
            <a href="#portfolio" class="btn btn-primary mt-4">View My Work</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <h2 class="section-title">About Me</h2>
        <div class="content">
            <p>I'm a Mobile Developer, especially using Flutter. Proficient in implementing clean architecture
                principles to ensure maintainable and scalable code. I have strong ability to identify and resolve
                issues efficiently. I have experience providing apps on the Play Store and App Store. </p>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio">
        <h2 class="section-title">Portfolio</h2>
        <div class="container">
            <div class="row g-4 justify-content-center">
                @foreach ($projects as $project)
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card shadow-sm" data-bs-toggle="modal" data-bs-target="#projectModal{{ $project->id }}">
                        <img src="{{ $project->url_headline_image ?: (isset($project->url_images[0]) ? $project->url_images[0] : '') }}"
                            class="card-img-top" alt="Project 1"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" />
                        <div
                            style="display: none; justify-content: center; align-items: center; height: 180px; background: #f0f0f0;">
                            No Image
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $project->title }}</h5>
                            <p class="card-text">{{ $project->description }}</p>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="projectModal{{ $project->id }}" tabindex="-1"
                    aria-labelledby="projectModalLabel{{ $project->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="projectModalLabel{{ $project->id }}">{{ $project->title }}
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                @if (!is_null($project->url_images) && count($project->url_images) != 0)
                                <!-- Carousel -->
                                <div id="carousel{{ $project->id }}" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($project->url_images as $index => $image)
                                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                            <img src="{{ $image }}" class="d-block w-100" alt="Project Image">
                                        </div>
                                        @endforeach
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carousel{{ $project->id }}" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carousel{{ $project->id }}" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                                @endif
                                <h4 class="mt-3">{{ $project->title }}</h4>
                                <p class="mt-1">{{ $project->description }}</p>
                                @if (!is_null($project->url_links) && count($project->url_links) != 0)
                                <div class="mt-3">
                                    @foreach ($project->url_links as $link)
                                    <a href="{{ $link['url'] }}" class="btn btn-primary" target="_blank">{{
                                        $link['title'] }}</a>
                                    @endforeach
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills">
        <h2 class="section-title">Skills</h2>
        <div class="container d-flex flex-wrap justify-content-center">
            <span class="badge">Flutter</span>
            <span class="badge">Kotlin</span>
            <span class="badge">Git</span>
            <span class="badge">Clean Architecture</span>
            <span class="badge">Firebase Services</span>
            <span class="badge">Publishing Play Store and App Store</span>
            <span class="badge">CI/CD Mobile Apps</span>
            <span class="badge">Problem Solver</span>
            <span class="badge">Rest API</span>
            <span class="badge">Databases (MySQL, SQLite)</span>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <h2 class="section-title">Contact Me</h2>
        <div class="container">
            <form action="{{ route('home.sendMail') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required />
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com"
                        required />
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="4"
                        placeholder="Your message here..." required></textarea>
                </div>
                <div class="mb-3">
                    {!! NoCaptcha::display() !!}
                    {!! NoCaptcha::renderJs() !!}
                </div>
                @if ($errors->has('g-recaptcha-response'))
                <div class="mb-3">
                    <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                </div>
                @endif
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        &copy; 2025 Muhammad Dadang Saputra. All rights reserved.
    </footer>

    <!-- Bootstrap JS Bundle CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        window.addEventListener('scroll', function () {
        const navbar = document.querySelector('.navbar');
        const navbarBrand = document.querySelector('.navbar-brand');
        const navLinks = document.querySelectorAll('.nav-link');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
            navbarBrand.classList.remove('text-white');
            navbarBrand.classList.add('text-primary');
            navLinks.forEach(link => {
                link.classList.remove('text-white');
                link.classList.add('text-primary');
            });
        } else {
            navbar.classList.remove('scrolled');
            navbarBrand.classList.remove('text-primary');
            navbarBrand.classList.add('text-white');
            navLinks.forEach(link => {
                link.classList.remove('text-primary');
                link.classList.add('text-white');
            });
        }
    });
    </script>
</body>

</html>