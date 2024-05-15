<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <!-- ----- -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Mude Capital : Là où vos finances prennent vie." />
    <meta name="keywords" content="MudeCapital, MUDECAPITAL, mudecapital,
    MudeCapital, mude, capital, mude crypto/>
    <meta
      name=" google-site-verification" content="kshYECkpi8M8ueo-W8qZZQrAvxwzgXdYHajloTGYxCo" />
    <link rel="canonical" href="https://mudecapital.com" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="MudeCapital,Mude Capital,mude capital,mudecapital" />

    <!-- facebook -->
    <meta property="og:title" content="Mude Capital" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Mude Capital : Là où vos finances prennent vie." />
    <meta property="og:image" content="/public/assets/images/favicon.png" />

    <title>Mude Capital | Blog</title>
    <link rel="shortcut icon" href="/public/assets/images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/public/assets/css/index.css" />
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "url": "https://mudecapital.com",
            "name": "MudeCapital",
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+243971270823",
                "contactType": "Customer service"
            }
        }
    </script>

    <!-- Theme favicon -->
    <link rel="shortcut icon" href="/public/assets/images/favicon.ico" />

    <!--Swiper slider css-->
    <link href="/public/assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

    <!-- Animation on Scroll css -->
    <link href="/public/assets/libs/aos/aos.css" rel="stylesheet" type="text/css" />

    <!-- Style css -->
    <link href="/public/assets/css/style.min.css" rel="stylesheet" type="text/css" />
    <!-- <link href="/public/assets/css/index.css" rel="stylesheet" type="text/css" /> -->

    <!-- Icons css -->
    <link href="/public/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    <!-- <script src="https://public.bnbstatic.com/unpkg/growth-widget/cryptoCurrencyWidget@0.0.9.min.js"></script> -->

    <style>
        .loader {
            border-radius: 10px;
            box-shadow: 4px 4px 5px#4d4d4d60;
            width: 315px;
            height: 200px;
            background: linear-gradient(0.25turn,
                    transparent,
                    #ffffffa6,
                    transparent),
                linear-gradient(#ddd, #ddd),
                radial-gradient(38px circle at 19px 19px, #ddd 50%, transparent 51%),
                linear-gradient(#ddd, #ddd);
            background-color: #fff;
            background-repeat: no-repeat;
            background-size: 315px 200px, 315px 130px, 100px 100px, 225px 30px;
            background-position: -315px 0, 0 0, 15px 140px, 65px 145px;
            animation: loading 2s infinite;
        }

        @keyframes loading {
            to {
                background-position: 315px 0, 0 0, 15px 140px, 65px 145px;
            }
        }

        #blog-body p {
            margin-bottom: 20px;
            /* color: red; */
        }

        #blog-body ul {
            padding-left: 50px;
            /* padding-left: 10px; */
            /* list-style: dot; */
            list-style: disc;
        }

        #blog-body li {
            /* padding-left: 10px; */
            /* color: red; */
        }

        #blog-body h1 {
            font-size: 32px;
        }

        #blog-body h2 {
            font-size: 28px;
        }

        #blog-body h3 {
            font-size: 24px;
        }

        #blog-body h4 {
            font-size: 20px;
        }

        #blog-body h5 {
            font-size: 16px;
        }

        #blog-body h6 {
            font-size: 14px;
        }
    </style>
</head>

<body>
    <!-- =========== Navbar Start =========== -->
    <header id="navbar" class="light fixed flex flex-col top-0 inset-x-0 items-center gap-2 z-40 w-full lg:bg-transparent bg-white transition-all pt-5">
        <div class="container">
            <nav class="flex items-center">
                <!-- Navbar Brand Logo -->
                <a href="/">
                    <!-- <img src="/public/assets/images/logo-dark.png" class="h-8 logo-dark" alt="Logo Dark"> -->
                    <!-- <img src="/public/assets/images/logo-light.png" class="h-8 logo-light" alt="Logo Light"> -->
                    <span class="font-bold text-2xl text-blue-700"> MUDE </span>
                    <span class="font-bold text-2xl"> | CAPITAL </span>
                </a>

                <!-- Nevigation Menu -->
                <div class="hidden lg:block ms-auto">
                    <ul class="navbar-nav flex gap-x-3 items-center justify-center">
                        <!-- Home Page Link -->
                        <li class="nav-item">
                            <a class="nav-link" href="/">Acceuil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/company">Nous Connaitre</a>
                        </li>

                    </ul>
                </div>

                <!-- Moblie Menu Toggle Button (Offcanvas Button) -->
                <div class="lg:hidden flex items-center ms-auto px-2.5">
                    <button type="button" data-fc-target="mobileMenu" data-fc-type="offcanvas">
                        <i class="fa-solid fa-bars text-2xl text-gray-500"></i>
                    </button>
                </div>
            </nav>
        </div>
        <div>
            <div class="h-full w-full bg-red-500"></div>
            <div class="binance-widget-marquee" data-cmc-ids="1,1027,3408,825" data-theme="light" data-transparent="true" data-locale="fr" data-powered-by="En Partenariat avec" data-disclaimer="Disclaimer"></div>
        </div>
    </header>
    <!-- =========== Navbar End =========== -->

    <!-- =========== Mobile Menu Start (Offcanvas) =========== -->
    <div id="mobileMenu" class="fc-offcanvas-open:translate-x-0 translate-x-full fixed top-0 end-0 transition-all duration-200 transform h-full w-full max-w-md z-50 bg-white border-s hidden">
        <div class="flex flex-col h-full divide-y-2 divide-gray-200">
            <!-- Mobile Menu Topbar Logo (Header) -->
            <div class="p-6 flex items-center justify-between">
                <a href="/">
                    <span class="font-bold text-2xl text-blue-700"> MUDE </span>
                    <span class="font-bold text-2xl"> | CAPITAL </span>
                </a>

                <button data-fc-dismiss class="flex items-center px-2">
                    <i class="fa-solid fa-xmark text-xl"></i>
                </button>
            </div>

            <!-- Mobile Menu Link List -->
            <div class="p-6 overflow-scroll h-full">
                <ul class="navbar-nav flex flex-col gap-2" data-fc-type="accordion">
                    <!-- Home Page Link -->
                    <li class="nav-item">
                        <a href="/" class="nav-link">Acceuil</a>
                    </li>
                    <li class="nav-item">
                        <a href="/#services" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="/blog" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="/company" class="nav-link">Nous Connaitre</a>
                    </li>
                    <li class="nav-item">
                        <a href="/contact" class="nav-link">Nous Contacter</a>
                    </li>
                    <li class="nav-item">
                        <a href="/policy" class="nav-link">Mentions Legale</a>
                    </li>
                    <li class="nav-item">
                        <a href="/help" class="nav-link">Aide</a>
                    </li>

                    <!-- Contact Page Link -->
                    <li class="nav-item">
                        <a class="nav-link" href="contact">Contact us</a>
                    </li>
                </ul>
            </div>

            <!-- Mobile Menu Download Button (Footer) -->
            <div class="p-6 flex gap-2 items-center justify-center">
                <a href="https://app.mudecapital.com/register" target="_blank" class="border-primary w-full text-primary border p-3 rounded flex items-center justify-center text-sm">Créer
                    un Compte</a>
                <a href="https://app.mudecapital.com/" target="_blank" class="bg-primary w-full text-white p-3 rounded flex items-center justify-center text-sm">Connexion</a>
            </div>
        </div>
    </div>
    <!-- =========== Mobile Menu End =========== -->

    <script></script>
    <div class="container flex flex-col items-center justify-center pt-20 p-5">
        <div class="md:pt-8 w-full">
            <div class="flex flex-wrap items-center gap-2 bg-gray-100 py-2 px-3">
                <a href="#" class="transition-all hover:text-primary">Acceuil</a>
                / <a href="#" class="transition-all hover:text-primary">Blog</a> /
                <p class="text-gray-500">Announcing-the-free-upgrade</p>
            </div>
        </div>
        <div id="blog-loader" class="loader"></div>
    </div>
    <main id="blog-container" class="hidden">
        <section class="">
            <div class="container">
                <div class="lg:w-4/5">
                    <span id="blog-cat" class="bg-orange-500/10 text-orange-500 font-medium rounded-md text-xs py-1 px-2">Announcement</span>
                    <h1 id="blog-title" class="lg:text-5xl/snug text-3xl/snug mt-3">
                        Announcing the free upgrae for the subscribed plans
                    </h1>
                </div>

                <div class="mb-8">
                    <div class="flex flex-wrap items-center justify-between gap-6">
                        <div class="flex items-center gap-3 mt-7">
                            <img src="/public/assets/images/avatars/amos.jpg" alt="avatar" class="h-11 w-11 rounded-full" />

                            <div>
                                <h6 class="text-sm transition-all hover:text-primary">
                                    Admin
                                </h6>
                                <p class="text-sm text-gray-500">11 Mar, 2020 · 3 min read</p>
                            </div>
                        </div>

                        <div class="flex gap-2">
                            <p class="text-sm text-gray-500">PARTAGER:</p>
                            <div class="flex gap-3">
                                <span>
                                    <a href="#">
                                        <svg class="w-5 h-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                            </path>
                                        </svg>
                                    </a>
                                </span>

                                <span>
                                    <a href="#">
                                        <svg class="w-5 h-5 text-teal-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                                            </path>
                                        </svg>
                                    </a>
                                </span>

                                <span>
                                    <a href="#">
                                        <svg class="w-5 h-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                        </svg>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container flex items-center flex-col mb-5">
            <div style="
      background-image: url('/public/assets/images/blog/hero-post.png');
      height:400px;
      background-position: center;
      width: 100%;
      background-repeat: no-repeat;
      background-size: cover;" id="blog-cover" class="rounded-md h-96 w-full bg-center bg-no-repeat bg-cover"></div>
            <p class="text-xs text-gray-500 mt-2 text-center">
                The image caption referencing the above image
            </p>
        </div>
        <!-- =========== post Section Start =========== -->
        <section>
            <div id="blog-body" class="container">
                <p class="text-sm/relaxed tracking-wider text-gray-600 mb-5">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit
                    officia neque beatae at inventore excepturi numquam sint commodi
                    alias, quam consequuntur corporis ex, distinctio eaque sapiente
                    pariatur iure ad necessitatibus in quod obcaecati natus consequatur.
                    Sed dicta maiores, eos culpa.
                </p>
                <p class="text-sm/relaxed tracking-wider text-gray-600 mb-6">
                    Voluptatum animi, voluptate sint aperiam facere a nam, ex reiciendis
                    eum nemo ipsum nobis, rem illum cupiditate at quaerat amet qui
                    recusandae hic, atque laboriosam perspiciatis? Esse quidem minima,
                    voluptas necessitatibus, officia culpa quo nulla, cupiditate iste
                    vel unde magni.
                </p>

                <h1 class="text-xl mb-3 mt-10">
                    Itaque earum rerum hic tenetur sapiente delectu
                </h1>
                <p class="text-sm/relaxed tracking-wider text-gray-600 mb-6">
                    Sed ut perspiciatis unde omnis iste natus the error sit voluptatem
                    accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae
                    ab illo inventore veritatis et quasi architecto beatae vitae dicta
                    sunt explicabo Et harum quidem rerum facilis est et expedita
                    distinctio nam libero tempore cum soluta nobis est eligendi optio
                    cumque nihil impedit quo minus id quod maxime placeat facere
                    possimus omnis voluptas assumenda est omnis dolor repellendus.
                </p>

                <div class="bg-gray-100 p-8 mb-6">
                    <h5 class="text-base sm:text-lg font-normal text-gray-600 mb-3">
                        Perspiciatis unde omnis iste natus error voluptatem accusantium
                        doloremque laudantium totam rem aperiam eaque ipsa quae ab illo
                        inventore veritatis et quasi architecto beataevitae dicta sunt
                        explicabo tempore cum soluta.
                    </h5>
                    <p class="text-gray-500 font-light text-sm">
                        <i class="fa-solid fa-minus me-2"></i> Christian Hall
                    </p>
                </div>

                <p class="text-sm/relaxed tracking-wider text-gray-600 mb-5">
                    At vero eos et accusamus et iusto odio dignissimos ducimus that qui
                    blanditiis praesentium voluptatum deleniti atque corrupti quos
                    dolores et quas molestias excepturi sint occaecati cupiditate
                    provident similique sunt in culpa qui officia deserunt mollitia
                    animi id est laborum et fuga.
                </p>
                <p class="text-sm/relaxed tracking-wider text-gray-600 mb-5">
                    Itaque earum rerum hic tenetur sapiente delectu aut reiciendis
                    voluptatibus maiores alias consequ perferendis doloribus asperiores
                    repellat. Sed ut perspiciatis unde omnis iste natus error sit
                    voluptatem accusantium doloremque laudantium totam rem aperiam eaque
                    ipsa quae ab illo inventore veritatisquasi architecto beatae vitae
                    dicta sunt explicabo.
                </p>
                <p class="text-sm/relaxed tracking-wider text-gray-600 mb-5">
                    Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
                    suscipit laboriosam nisi aliquid ex ea commodi consequatur? Quis
                    autem vel eum iure reprehenderit qui in ea voluptate lit esse quam
                    nihil molestiae consequatur eligendi optio cumque nihil impedit quo
                    minus id quod maxime placeat facere possimus omnis voluptas
                    assumenda est vel illum qui dolorem eum fugiat quo voluptas aperiam,
                    eaque ipsa quae ab illo inventore.
                </p>

                <div>
                    <div class="grid sm:grid-cols-2 grid-cols-1 gap-8 my-10">
                        <div>
                            <img src="/public/assets/images/photos/3.jpg" class="rounded" />
                        </div>
                        <div>
                            <img src="/public/assets/images/photos/4.jpg" class="rounded" />
                        </div>
                        <div>
                            <img src="/public/assets/images/photos/5.jpg" class="rounded" />
                        </div>
                        <div>
                            <img src="/public/assets/images/photos/6.jpg" class="rounded" />
                        </div>
                    </div>
                </div>

                <h6 class="text-sm/relaxed tracking-wider mb-3">Conclusion</h6>
                <p class="text-sm/relaxed tracking-wider text-gray-600 mb-5">
                    Itaque earum rerum hic tenetur sapiente delectus aut reiciendis
                    voluptatibus maiores alias consequatur aut perferendis doloribus
                    asperiores repellat qui dolorem ipsum quia dolor sit amet
                    consectetur velitsedquia non numquam eius modi tempora incidunt.
                </p>
                <p class="text-sm/relaxed tracking-wider text-gray-600 mb-5">
                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                    fugit sed quia consequuntur magni dolores eos qui ratione voluptatem
                    sequi nesciunt.
                </p>

                <div class="flex flex-col gap-3">
                    <p class="text-sm tracking-wider text-gray-600">
                        <i class="fa-solid fa-minus me-3"></i>Dream places
                    </p>
                    <p class="text-sm tracking-wider text-gray-600">
                        <i class="fa-solid fa-minus me-3"></i>Walking/Hiking tours
                    </p>
                    <p class="text-sm tracking-wider text-gray-600">
                        <i class="fa-solid fa-minus me-3"></i>Tennis lessons with expert
                        coaches
                    </p>
                    <p class="text-sm tracking-wider text-gray-600">
                        <i class="fa-solid fa-minus me-3"></i>Sailing adventures
                    </p>
                </div>

                <div class="flex flex-wrap sm:gap-2 gap-5 mt-10">
                    <div>
                        <a href="#" class="text-xs bg-gray-200 rounded-md font-medium transition-all hover:shadow-md hover:bg-gray-300/80 focus:bg-gray-300/80 py-2 px-4">Finance</a>
                    </div>
                    <div>
                        <a href="#" class="text-xs bg-gray-200 rounded-md font-medium transition-all hover:shadow-md hover:bg-gray-300/80 focus:bg-gray-300/80 py-2 px-4">Trading
                            Pro</a>
                    </div>
                    <div>
                        <a href="#" class="text-xs bg-gray-200 rounded-md font-medium transition-all hover:shadow-md hover:bg-gray-300/80 focus:bg-gray-300/80 py-2 px-4">Cryptos</a>
                    </div>
                    <div>
                        <a href="#" class="text-xs bg-gray-200 rounded-md font-medium transition-all hover:shadow-md hover:bg-gray-300/80 focus:bg-gray-300/80 py-2 px-4">Mude
                            Capital</a>
                    </div>
                </div>

                <div class="flex gap-2 mt-8 mb-14">
                    <p class="text-sm text-gray-500">PARTAGER:</p>
                    <div class="flex gap-3">
                        <span>
                            <a href="#">
                                <svg class="w-5 h-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                </svg>
                            </a>
                        </span>
                        <span>
                            <a href="#">
                                <svg class="w-5 h-5 text-teal-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                                    </path>
                                </svg>
                            </a>
                        </span>
                        <span>
                            <a href="#">
                                <svg class="w-5 h-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                </svg>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- =========== post Section End =========== -->

    <script>
        const loadBlogData = () => {
            console.log(12);
            return fetch("/api/blogs/<?= $id ?>")
                .then((res) => {
                    return res.json();
                })
                .then((data) => {
                    const blogContainer = document.getElementById("blog-container");
                    const blogBody = document.getElementById("blog-body");
                    const blogCat = document.getElementById("blog-cat");
                    const blogTitle = document.getElementById("blog-title");
                    const blogLoader = document.getElementById("blog-loader");
                    const BlogCover = document.getElementById("blog-cover");
                    if (data && data?.title) {
                        blogCat.innerHTML = data?.category;
                        blogTitle.innerHTML = data?.title;
                        blogBody.innerHTML = data?.body;
                        blogContainer.classList.remove("hidden");
                        blogLoader.classList.add("hidden");
                        BlogCover.style.backgroundImage =
                            "url('/public/assets/images/" + data.cover + "')";
                        //   console.log(data);
                    }
                })
                .catch((err) => console.error(err));
        };
        loadBlogData();
    </script>

    <section class="py-20">
        <div class="container">
            <div class="text-center">
                <h1 class="text-3xl font-medium my-3">Nos Derniers Articles</h1>
                <p class="text-slate-500 mt-5 mb-4">
                    Trouvez ici les dernière Nouvelles et articles poster par notre
                    équipe.
                </p>
            </div>

            <div id="blogs" class="grid lg:grid-cols-3 grid-cols-1 gap-5 mt-12 justify-center md:items-center">
                <script>
                    const root = document.getElementById("blogs");
                    const loadData = (root) =>
                        (root.innerHTML = `
              <span class="loader"></span>
              <span class="loader hidden md:block"></span>
              <span class="loader hidden md:block"></span>
              `);
                    fetch("/api/blogs/latest")
                        .then((res) => {
                            return res.json();
                        })
                        .then((blogs) => {
                            let container = ``;
                            blogs.forEach(
                                ({
                                    id,
                                    title,
                                    category,
                                    description,
                                    cover,
                                    author
                                }) => {
                                    container += `
                    <div>
                        <div class="relative" data-aos="fade-up" data-aos-duration="300">
                            <span
                                class="absolute top-3 bg-orange-500 p-1 pe-6 text-sm font-semibold text-white"
                                style="
                                clip-path: polygon(0% 0%, 100% 0, 90% 49%, 100% 99%, 0% 100%);
                                "
                                >${category}</span
                            >
                            <div
                                  style="background-image: url('/public/assets/images/${cover}');     
                                  height: 250px;
                                  background-position: center;
                                  width: 100%;
                                  background-repeat: no-repeat;
                                  background-size: cover;
                                  border-radius : 10px;
                                  "
                                  class="bg-center bg-cover bg-no-repeat rounded-mb mb-5"
                                ></div>
                            </div>
                            <p class="text-slate-500 mt-5">May 19 2020 . 5 min read</p>
                            <h4 class="mt-1 text-lg">
                            <a href="/blog-post/${id}" class='transition-all hover:text-primary'>${title}</a>
                            <p class="text-sm/relaxed tracking-wider text-gray-500">
                                ${description} <a href="/blog-post/${id}" class="text-primary">read more</a>
                            </p>
                        </h4>
                    </div>
                `;
                                }
                            );

                            root.innerHTML = container;
                        })
                        .catch((err) => console.error(err));

                    loadData(root);
                </script>
            </div>
        </div>
    </section>
    <!-- =========== Blog Section End =========== -->

    <section class="bg-gradient-to-r from-gray-100/70 to-gray-100 relative xl:py-24 py-16">
        <div class="absolute top-0 inset-x-0 hidden sm:block">
            <img src="/public/assets/images/shapes/white-wave.svg" alt="svg" class="w-full -scale-x-100" />
        </div>

        <div class="py-5">
            <div class="container" data-aos="fade-up" data-aos-duration="300">
                <div class="text-center">
                    <span class="text-sm font-medium py-1 px-3 rounded-full text-primary bg-primary/10">Moyens de
                        Paiement</span>
                    <h1 class="text-3xl/tight font-medium mt-3 mb-4">
                        Achetez et Vendez vos cryptomonnaies en toute sécurité.
                    </h1>
                    <p class="text-gray-500">
                        En utilisant les differents Moyens de
                        <span class="text-primary">Paiement Mobile</span> locaux.
                    </p>
                </div>

                <div class="flex flex-wrap items-center justify-center lg:gap-24 gap-10 mt-14">
                    <div>
                        <img src="/public/assets/images/brands/airtel.png" class="h-16 rounded" />
                    </div>
                    <div>
                        <img src="/public/assets/images/brands/voda.png" class="h-16 rounded" />
                    </div>
                    <div>
                        <img src="/public/assets/images/brands/orange.jpeg" class="h-16 rounded" />
                    </div>
                    <div>
                        <img src="/public/assets/images/brands/afrimoney.png" class="h-16 rounded" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========== clients Section end =========== -->

    <!-- =========== Footer Section Start =========== -->

    <footer class="bg-gray-100">
        <div class="container">
            <div class="grid xl:grid-cols-5 gap-6 py-12">
                <div class="col-span-2">
                    <a href="index">
                        <span class="font-bold text-2xl text-blue-700"> MUDE </span>
                        <span class="font-bold text-2xl"> | CAPITAL </span>
                    </a>
                    <p class="text-sm text-gray-500/80 mt-5 lg:w-4/5">
                        Une plateforme transparente, flexible et diversifiée pour acheter,
                        vendre et gérer votre portefeuille de cryptomonnaies.
                    </p>
                </div>
                <div class="xl:col-span-3 col-span-4">
                    <div class="flex flex-col sm:flex-row gap-6 flex-wrap justify-between">
                        <div>
                            <div class="flex flex-col gap-3">
                                <h5 class="mb-3 uppercase">PLATFORM</h5>
                                <div class="text-gray-500/80">
                                    <a href="/">Acceuil</a>
                                </div>
                                <div class="text-gray-500/80">
                                    <a href="https://app.mudecapital.com">App</a>
                                </div>
                                <!-- <div class="text-gray-500/80">
                        <a href="javascript:void(0);">Integrations</a>
                      </div>
                      <div class="text-gray-500/80">
                        <a href="javascript:void(0);">Status</a>
                      </div> -->
                            </div>
                        </div>
                        <div>
                            <div class="flex flex-col gap-3">
                                <h5 class="mb-3 uppercase">Services</h5>
                                <div class="text-gray-500/80">
                                    <a href="app.mudecapital.com">Achat des Cryptos</a>
                                </div>
                                <div class="text-gray-500/80">
                                    <a href="app.mudecapital.com">Vente des Cryptos</a>
                                </div>
                                <div class="text-gray-500/80">
                                    <a href="app.mudecapital.com">Echange des Cryptos</a>
                                </div>
                                <!-- <div class="text-gray-500/80">
                        <a href="javascript:void(0);"> Center</a>
                      </div>
                      <div class="text-gray-500/80">
                        <a href="javascript:void(0);">Sales Tools catalog</a>
                      </div>
                      <div class="text-gray-500/80">
                        <a href="javascript:void(0);">API</a>
                      </div> -->
                            </div>
                        </div>
                        <div>
                            <div class="flex flex-col gap-3">
                                <h5 class="mb-3 uppercase">Entreprise</h5>
                                <div class="text-gray-500/80">
                                    <a href="/company">Apropos de Nous</a>
                                </div>
                                <!-- <div class="text-gray-500/80">
                        <a href="javascript:void(0);">Career</a>
                      </div> -->
                                <div class="text-gray-500/80">
                                    <a href="/contact">Nous Contacter</a>
                                </div>
                                <div class="text-gray-500/80">
                                    <a href="/blog">Blog</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex flex-col gap-3">
                                <h5 class="mb-3 uppercase">Mention Legal</h5>
                                <div class="text-gray-500/80">
                                    <a href="/policy">Politique d'Utilisation</a>
                                </div>
                                <div class="text-gray-500/80">
                                    <a href="/policy">Politique de Confidentialité</a>
                                </div>
                                <div class="text-gray-500/80">
                                    <a href="/help">FAQ</a>
                                </div>
                                <!-- <div class="text-gray-500/80">
                        <a href="javascript:void(0);">Terms of Service</a>
                      </div> -->
                                <!-- <div class="text-gray-500/80">
                    <a href="javascript:void(0);">Confiance</a>
                  </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-t py-6">
                <div class="grid sm:grid-cols-2 text-center sm:text-start gap-6">
                    <div>
                        <p class="text-gray-500/80 text-sm flex gap-1">
                            <script>
                                2024;
                            </script>
                            © MUDE | CAPITAL. Tout Droit Réservé. Propulsé par
                            <a href="https://kwetutech.com" target="_blank" class="text-gray-800 hover:text-primary transition-all flex gap-2 items-center"><span>KwetuTech</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5" />
                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z" />
                                </svg>
                            </a>
                        </p>
                    </div>

                    <div class="flex justify-center sm:justify-end gap-7">
                        <div>
                            <a href="https://web.facebook.com/profile.php?id=61559167035660">
                                <svg class="w-5 h-5 text-gray-500 hover:text-primary transition-all" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                </svg>
                            </a>
                        </div>
                        <div>
                            <a href="https://twitter.com/MudeCapital">
                                <svg class="w-5 h-5 text-gray-500 hover:text-primary transition-all" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                    <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                                </svg>
                            </a>
                        </div>
                        <div>
                            <a href="https://www.instagram.com/mudecapital">
                                <svg class="w-5 h-5 text-gray-500 hover:text-pink-600 transition-all" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                                </svg>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <svg class="w-5 h-5 text-gray-500 hover:text-red-600 transition-all" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                    <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- =========== Footer Section End =========== -->

    <!-- =========== Back To Top Start =========== -->
    <button data-toggle="back-to-top" class="fixed text-sm rounded-full z-10 bottom-5 end-5 h-9 w-9 text-center bg-primary/20 text-primary flex justify-center items-center">
        <i class="fa-solid fa-arrow-up text-base"></i>
    </button>
    <!-- =========== Back To Top End =========== -->
    <!-- Frost Plugin Js -->
    <script src="/public/assets/libs/@frostui/tailwindcss/frostui.js"></script>

    <!-- Swiper Plugin Js -->
    <script src="/public/assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- Animation on Scroll Plugin Js -->
    <script src="/public/assets/libs/aos/aos.js"></script>

    <!-- Theme Js -->
    <script src="/public/assets/js/theme.min.js"></script>
</body>

</html>