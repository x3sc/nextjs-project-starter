<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Interativo - Transições Infinitas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bg-gray-900 text-white font-inter overflow-x-hidden">
    <!-- Header -->
    <header class="fixed top-0 left-0 right-0 z-50 bg-gray-900/80 backdrop-blur-md border-b border-gray-800">
        <nav class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="text-2xl font-bold bg-gradient-to-r from-blue-400 to-purple-500 bg-clip-text text-transparent">
                    Portfolio
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="#home" class="hover:text-blue-400 transition-colors duration-300">Início</a>
                    <a href="#projects" class="hover:text-blue-400 transition-colors duration-300">Projetos</a>
                    <a href="#about" class="hover:text-blue-400 transition-colors duration-300">Sobre</a>
                    <a href="#contact" class="hover:text-blue-400 transition-colors duration-300">Contato</a>
                </div>
                <button class="md:hidden text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="home" class="min-h-screen flex items-center justify-center relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-900/20 to-purple-900/20"></div>
        <div class="container mx-auto px-6 text-center relative z-10">
            <h1 class="text-5xl md:text-7xl font-bold mb-6 animate-fade-in">
                <span class="bg-gradient-to-r from-blue-400 via-purple-500 to-pink-500 bg-clip-text text-transparent">
                    Experiências
                </span>
                <br>
                <span class="text-white">Interativas</span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-300 mb-8 max-w-3xl mx-auto animate-fade-in-delay">
                Descubra um portfólio com transições infinitas e interações envolventes
            </p>
            <button class="bg-gradient-to-r from-blue-500 to-purple-600 hover:from-blue-600 hover:to-purple-700 px-8 py-4 rounded-full text-lg font-semibold transition-all duration-300 transform hover:scale-105 animate-fade-in-delay-2">
                Explorar Projetos
            </button>
        </div>
        
        <!-- Floating Elements -->
        <div class="absolute top-20 left-10 w-20 h-20 bg-blue-500/20 rounded-full animate-float"></div>
        <div class="absolute bottom-20 right-10 w-32 h-32 bg-purple-500/20 rounded-full animate-float-delay"></div>
        <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-pink-500/20 rounded-full animate-float-delay-2"></div>
    </section>

    <!-- Projects Grid with Infinite Scroll -->
    <section id="projects" class="py-20 relative">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-16">
                <span class="bg-gradient-to-r from-blue-400 to-purple-500 bg-clip-text text-transparent">
                    Projetos em Destaque
                </span>
            </h2>
            
            <!-- Masonry Grid -->
            <div id="projects-grid" class="masonry-grid">
                <?php
                // Simulated project data
                $projects = [
                    [
                        'title' => 'Dashboard Analytics',
                        'category' => 'Web App',
                        'image' => 'https://placehold.co/400x600?text=Dashboard+Analytics+Interface',
                        'description' => 'Interface moderna para análise de dados',
                        'tech' => ['React', 'TypeScript', 'Chart.js'],
                        'height' => 'tall'
                    ],
                    [
                        'title' => 'E-commerce Platform',
                        'category' => 'Website',
                        'image' => 'https://placehold.co/400x400?text=E-commerce+Platform+Design',
                        'description' => 'Plataforma completa de vendas online',
                        'tech' => ['Next.js', 'Stripe', 'Tailwind'],
                        'height' => 'medium'
                    ],
                    [
                        'title' => 'Mobile Banking App',
                        'category' => 'Mobile',
                        'image' => 'https://placehold.co/400x500?text=Mobile+Banking+App+UI',
                        'description' => 'App bancário com UX intuitiva',
                        'tech' => ['React Native', 'Firebase'],
                        'height' => 'medium'
                    ],
                    [
                        'title' => 'AI Chat Interface',
                        'category' => 'AI/ML',
                        'image' => 'https://placehold.co/400x700?text=AI+Chat+Interface+Design',
                        'description' => 'Interface conversacional com IA',
                        'tech' => ['Vue.js', 'OpenAI', 'WebSocket'],
                        'height' => 'tall'
                    ],
                    [
                        'title' => 'Portfolio Website',
                        'category' => 'Website',
                        'image' => 'https://placehold.co/400x350?text=Portfolio+Website+Layout',
                        'description' => 'Site pessoal com animações',
                        'tech' => ['HTML', 'CSS', 'JavaScript'],
                        'height' => 'short'
                    ],
                    [
                        'title' => 'Task Management',
                        'category' => 'Productivity',
                        'image' => 'https://placehold.co/400x550?text=Task+Management+Dashboard',
                        'description' => 'Sistema de gestão de tarefas',
                        'tech' => ['Angular', 'Node.js', 'MongoDB'],
                        'height' => 'medium'
                    ]
                ];

                foreach ($projects as $index => $project) {
                    echo '<div class="project-card ' . $project['height'] . '" data-index="' . $index . '">';
                    echo '<div class="project-content">';
                    echo '<div class="project-image-container">';
                    echo '<img src="' . $project['image'] . '" alt="' . $project['title'] . '" class="project-image">';
                    echo '<div class="project-overlay">';
                    echo '<div class="project-info">';
                    echo '<span class="project-category">' . $project['category'] . '</span>';
                    echo '<h3 class="project-title">' . $project['title'] . '</h3>';
                    echo '<p class="project-description">' . $project['description'] . '</p>';
                    echo '<div class="project-tech">';
                    foreach ($project['tech'] as $tech) {
                        echo '<span class="tech-tag">' . $tech . '</span>';
                    }
                    echo '</div>';
                    echo '<button class="project-btn">Ver Projeto</button>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>

            <!-- Loading Indicator -->
            <div id="loading" class="text-center py-8 hidden">
                <div class="inline-block animate-spin rounded-full h-8 w-8 border-b-2 border-blue-500"></div>
                <p class="mt-2 text-gray-400">Carregando mais projetos...</p>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-gray-800/50">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl md:text-5xl font-bold mb-8">
                    <span class="bg-gradient-to-r from-blue-400 to-purple-500 bg-clip-text text-transparent">
                        Sobre o Projeto
                    </span>
                </h2>
                <p class="text-xl text-gray-300 leading-relaxed">
                    Este portfólio demonstra o poder das transições infinitas e interações fluidas na web. 
                    Utilizando PHP no backend e tecnologias modernas no frontend, criamos uma experiência 
                    imersiva que mantém os usuários engajados através de animações suaves e carregamento 
                    dinâmico de conteúdo.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-8">
                <span class="bg-gradient-to-r from-blue-400 to-purple-500 bg-clip-text text-transparent">
                    Vamos Conversar
                </span>
            </h2>
            <p class="text-xl text-gray-300 mb-8">
                Interessado em criar algo incrível juntos?
            </p>
            <button class="bg-gradient-to-r from-blue-500 to-purple-600 hover:from-blue-600 hover:to-purple-700 px-8 py-4 rounded-full text-lg font-semibold transition-all duration-300 transform hover:scale-105">
                Entrar em Contato
            </button>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-8 border-t border-gray-800">
        <div class="container mx-auto px-6 text-center text-gray-400">
            <p>&copy; 2024 Portfolio Interativo. Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="assets/js/script.js"></script>
</body>
</html>
