<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veille Technologique | Jordan Kamguia Siri</title>
    <meta name="description" content="Découvrez ma veille technologique sur le développement web durable et l'éco-conception.">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: 'rgb(39, 39, 42)', // Un gris très foncé, presque noir (zinc-800)
                        secondary: 'rgb(244, 244, 245)', // Un gris très clair (zinc-100)
                    },
                    fontFamily: {
                        heading: ['Montserrat', 'sans-serif'],
                        body: ['Roboto', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <!-- AOS pour les animations au défilement -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-secondary text-gray-800">

    <header class="bg-primary text-white sticky top-0 w-full z-50 shadow-lg">
        <nav class="flex flex-col md:flex-row justify-between items-center py-4 px-8">
            <a href="index.php" class="font-heading text-xl text-white no-underline hover:scale-110 transition-transform">JK</a>
            <a href="index.php" class="text-white no-underline font-bold hover:text-gray-300 transition-colors mt-4 md:mt-0">Retour au Portfolio</a>
        </nav>
    </header>

    <main class="py-20 px-5 max-w-4xl mx-auto">
        <section id="veille-synthese" class="text-center" data-aos="fade-up">
            <h1 class="font-heading text-4xl mb-12">Ma Veille Technologique</h1>
            <div class="text-left bg-white p-8 rounded-lg shadow-xl">
                <h2 class="font-heading text-2xl text-primary mb-4">Synthèse et Thème</h2>
                <p class="text-gray-700">Pour ma veille technologique j’ai choisi le thème de la robotique.  La robotique est l’ensemble des techniques permettant la conception et la réalisation de machines automatiques ou de robots. Il y a plusieurs types de robotique : la robotique spatiale, humanoïde, industrielle et même médical.</p>
                <div class="mt-6">
                    <h3 class="font-heading text-xl text-primary">Outils de Veille</h3>
                    <ul class="list-disc list-inside mt-2 text-gray-700">
                        <li>Newsletters : Je suis abonné à des newsletters spécialisées comme : "Robotics Weekly", "TechCrunch Robotics" et "AI & Robotics Digest".</li>
                        <li>Blogs et sites spécialisés : Je consulte régulièrement:  "Robotics Business Review", "Robohub" et "RobotShop Blog".</li>
                        <li>Réseaux sociaux : J'utilise instagram et LinkedIn pour suivre des hashtags pertinents comme `#robot` et `#robotique`.</li>
                        <li>Applications : J'utilise:  "Google Alerte", "Pocket", "Feedly" et "Flipboard".</li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="veille-actualites" class="mt-16" data-aos="fade-up">
            <h2 class="font-heading text-4xl mb-8 text-center">Actualités de ma Veille</h2>
            <div class="space-y-6">
                <!-- Exemple d'actualité 1 -->
                <article class="bg-white p-6 rounded-lg shadow-md flex flex-col md:flex-row items-center md:items-start gap-6">
                    <div class="flex-shrink-0 w-full md:w-1/3">
                        <img src="1.png"  class="w-full h-auto rounded-md object-cover">
                    </div>
                    <div class="flex-grow">
                        <p class="text-sm text-gray-500 mb-1">Date : 27 septembre 2022</p>
                        <h3 class="font-heading text-xl text-primary mb-2">Robotique : définition, cas d'application et lois</h3>
                        <p class="text-gray-700 mb-4">Cet article relate des différentes questions que l’on peut se poser concernant ce thème tel que ce qu’est un robot, Quelle est l'origine du mot robot, les différents types de robot, les 3 grandes évolutions des robots ou encore les métiers lié a la robotique.</p>
                        <a href="https://www.journaldunet.fr/intelligence-artificielle/guide-de-l-intelligence-artificielle/1501853-robot/#:~:text=La%20robotique%20est%20un%20domaine,en%20%C3%A9lectronique%20et%20en%20m%C3%A9canique." class="text-blue-500 hover:underline font-bold">En savoir plus</a>
                    </div>
                </article>
                
                <!-- Exemple d'actualité 2 -->
                <article class="bg-white p-6 rounded-lg shadow-md flex flex-col md:flex-row items-center md:items-start gap-6">
                    <div class="flex-shrink-0 w-full md:w-1/3">
                        <img src="2.png"  class="w-full h-auto rounded-md object-cover">
                    </div>
                    <div class="flex-grow">
                        <p class="text-sm text-gray-500 mb-1">Date : 01 Novembre 2022</p>
                        <h3 class="font-heading text-xl text-primary mb-2">Quels sont les différents types de robots ?</h3>
                        <p class="text-gray-700 mb-4">Cette article explique les différèrent type de robots et les différentes catégories.</p>
                        <a href="https://www.robotique.tech/blog/quels-sont-les-differents-types-de-robots/" class="text-blue-500 hover:underline font-bold">En savoir plus</a>
                    </div>
                </article>

                <!-- Exemple d'actualité 3 -->
                <article class="bg-white p-6 rounded-lg shadow-md flex flex-col md:flex-row items-center md:items-start gap-6">
                    <div class="flex-shrink-0 w-full md:w-1/3">
                        <img src="3.png"  class="w-full h-auto rounded-md object-cover">
                    </div>
                    <div class="flex-grow">
                        <p class="text-sm text-gray-500 mb-1">Date : 23 mai 2022</p>
                        <h3 class="font-heading text-xl text-primary mb-2">Robotisation : un atout pour les entreprises et l’emploi</h3>
                        <p class="text-gray-700 mb-4">Cette article met en avant les avantages de la robotique dans le monde industrielle</p>
                        <a href="https://www.cfecgc.org/actualites/robotisation-un-atout-pour-les-entreprises-et-lemploi" class="text-blue-500 hover:underline font-bold">En savoir plus</a>
                    </div>
                </article>

                <!-- Exemple d'actualité 4 -->
                <article class="bg-white p-6 rounded-lg shadow-md flex flex-col md:flex-row items-center md:items-start gap-6">
                    <div class="flex-shrink-0 w-full md:w-1/3">
                        <img src="4.png"  class="w-full h-auto rounded-md object-cover">
                    </div>
                    <div class="flex-grow">
                        <p class="text-sm text-gray-500 mb-1">Date : 26 août 2019</p>
                        <h3 class="font-heading text-xl text-primary mb-2">AU DELÀ DE NOS LIMITES</h3>
                        <p class="text-gray-700 mb-4">Cet article nous Explique qu'en tant qu’être humain, nous possédons des limites physiques et c’est pour cela qu’un des objectifs principaux des robots est de nous permettre d’accéder à des lieux ou nous ne pouvons pas aller. Que se soit, pour se déplacer dans les airs, conquérir l’espace, ou visiter les profondeurs de l’océan, de multiples versions de robots ont été crées. Parlons de Fiodor, un robot a forme humanoïde envoyé dans le Station Spatiale Internationale, ISS le mardi 27 août par les russes. Il aide les cosmonautes dans les tâches les plus répétitives et quotidiennes et peut sortir de la Station sans mettre de vie en danger. Il deviendra à terme, l’assistant spatial parfait. Il bénéficie d’une forme humanoïde, puisqu’au sein de l’ISS, l’espace est crucial, il faut donc éviter d’encombrer les cosmonautes avec des outils adaptés pour Fiodor, il est donc préférable que celui-ci puisse utiliser les mêmes outils.</p>
                        <a href="https://www.20minutes.fr/planete/2589815-20190826-video-fiodor-robot-humanoide-arrive-iss-represente-futur-conquete-spatiale" class="text-blue-500 hover:underline font-bold">En savoir plus</a>
                    </div>
                </article>

                <!-- Exemple d'actualité 5 -->
                <article class="bg-white p-6 rounded-lg shadow-md flex flex-col md:flex-row items-center md:items-start gap-6">
                    <div class="flex-shrink-0 w-full md:w-1/3">
                        <img src="5.avif" class="w-full h-auto rounded-md object-cover">
                    </div>
                    <div class="flex-grow">
                        <p class="text-sm text-gray-500 mb-1">Date : 20 septembre 2019</p>
                        <h3 class="font-heading text-xl text-primary mb-2">LES ROBOTS COMPLÈTEMENT AUTONOMES ?</h3>
                        <p class="text-gray-700 mb-4">Cet article nous explique que de nos jours, les drones sont de plus en plus communs à notre environnement et se développent énormément dans de nombreux domaines et surtout dans la livraison. Boeing, un géant de l’aéronautique, a développé un drone autonome avec comme objectif principal de réapprovisionner en fuel des avions en plein vol.</p>
                        <a href="https://www.cnet.com/news/boeing-tests-drone-for-aerial-refueling/" class="text-blue-500 hover:underline font-bold">En savoir plus</a>
                    </div>
                </article>

                <!-- Exemple d'actualité 6 -->
                <article class="bg-white p-6 rounded-lg shadow-md flex flex-col md:flex-row items-center md:items-start gap-6">
                    <div class="flex-shrink-0 w-full md:w-1/3">
                        <img src="6.png" alt="Icône de code ou d'un framework léger" class="w-full h-auto rounded-md object-cover">
                    </div>
                    <div class="flex-grow">
                        <p class="text-sm text-gray-500 mb-1">Date : 20 août 2025</p>
                        <h3 class="font-heading text-xl text-primary mb-2">Avec l'IA, l'ère des robots intelligents peut commencer</h3>
                        <p class="text-gray-700 mb-4">Cet article nous explique les impacts de transformations que les robot intélligents vont apporter au monde.</p>
                        <a href="https://www.lesechos.fr/tech-medias/intelligence-artificielle/avec-lia-lere-des-robots-intelligents-peut-commencer-2181661" class="text-blue-500 hover:underline font-bold">En savoir plus</a>
                    </div>
                </article>
            </div>
        </section>
    </main>

    <footer class="bg-gray-900 text-white text-center py-8 mt-16">
        <p>&copy; 2023 Jordan Kamguia. Tous droits réservés.</p>
    </footer>
    
    <!-- AOS (Animate On Scroll) -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1200, // Durée de l'animation en ms
            once: true, // Animations uniquement à la première apparition
        });
    </script>
</body>
</html>
