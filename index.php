<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio Website Adila Ramadhan - Quality Assurance Engineer. Specializing in Manual Testing, API testing, and Test Automation.">
    <title>Adila Ramadhan | QA Engineer Portfolio</title>
    
    <!-- Tailwind CSS Play CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        mono: ['"Fira Code"', 'monospace'],
                    }
                }
            }
        }
    </script>
    
    <!-- Animate On Scroll (AOS) CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    
    <!-- AlpineJS CDN (Essential for reactive elements like Mobile Menu & Contact Form transitions) -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-zinc-950 text-zinc-100 dark selection:bg-emerald-500 selection:text-zinc-950">

    <!-- Navbar Component -->
    <?php include 'components/navbar.php'; ?>

    <!-- Main Content Sections -->
    <main>
        <!-- Hero Section -->
        <?php include 'components/hero.php'; ?>

        <!-- About Me Section -->
        <?php include 'components/about.php'; ?>

        <!-- Skills Section -->
        <?php include 'components/skills.php'; ?>

        <!-- Projects Section -->
        <?php include 'components/projects.php'; ?>

        <!-- Experience Section -->
        <?php include 'components/experience.php'; ?>

        <!-- Contact Section -->
        <?php include 'components/contact.php'; ?>
    </main>

    <!-- Footer Component -->
    <?php include 'components/footer.php'; ?>

    <!-- Lucide Icons CDN -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        // Initialize Lucide Icons
        lucide.createIcons();
    </script>

    <!-- Animate On Scroll (AOS) JS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <!-- Custom Main JS -->
    <script src="assets/js/main.js"></script>
</body>
</html>
