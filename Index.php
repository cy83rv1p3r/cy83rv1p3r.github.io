<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kislay Kumar - Cybersecurity Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        /* General Styles */
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            color: #ccd6f6;
            background-color: #0a192f;
            scroll-behavior: smooth;
        }
        a {
            text-decoration: none;
            color: #64ffda;
        }
        a:hover {
            text-decoration: underline;
        }
        section {
            padding: 100px 20px;
            max-width: 900px;
            margin: auto;
        }
        header {
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            background: #0a192f;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
        }
        header nav a {
            margin: 0 15px;
            font-weight: 600;
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .hero h1 {
            font-size: 2.5rem;
            color: #64ffda;
        }
        .hero p {
            font-size: 1.2rem;
            color: #8892b0;
        }

        /* Section Headers */
        .section-title {
            font-size: 1.8rem;
            color: #64ffda;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        /* Skills and Experience */
        ul {
            list-style: none;
            padding: 0;
        }
        ul li {
            margin: 10px 0;
            color: #8892b0;
        }
        ul li span {
            color: #64ffda;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 20px;
            background: #0a192f;
            color: #8892b0;
        }
        footer p {
            margin: 5px 0;
        }

        /* Smooth Scrolling Animation */
        .animate {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.8s ease-out;
        }
        .animate.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>

<header>
    <div>
        <a href="#about">About</a>
        <a href="#skills">Skills</a>
        <a href="#experience">Experience</a>
        <a href="#achievements">Achievements</a>
        <a href="#contact">Contact</a>
    </div>
</header>

<section class="hero">
    <div>
        <h1>Hi, I'm Kislay Kumar</h1>
        <p>OSCP | Security Consultant | Penetration Tester | Synack Red Teamer</p>
    </div>
</section>

<section id="about" class="animate">
    <h2 class="section-title">About Me</h2>
    <p>
        I am a passionate cybersecurity professional with expertise in ethical hacking, penetration testing, and vulnerability assessments. My focus is on securing digital infrastructures and staying at the forefront of emerging security technologies.
    </p>
</section>

<section id="skills" class="animate">
    <h2 class="section-title">Skills</h2>
    <ul>
        <li><span>Web Application Pentesting:</span> Identify and mitigate vulnerabilities.</li>
        <li><span>Mobile & Network Pentesting:</span> Comprehensive testing for Android, iOS, and networks.</li>
        <li><span>Tools:</span> Nmap, BurpSuite, Nessus, Metasploit.</li>
        <li><span>Languages:</span> Python, C++, JavaScript, Linux scripting.</li>
    </ul>
</section>

<section id="experience" class="animate">
    <h2 class="section-title">Experience</h2>
    <ul>
        <li><span>Information Security Consultant - Firmus (2022 - Present):</span> Conducted application security assessments and external red team engagements.</li>
        <li><span>Consultant (Cyber Security) - SkillCube (2021 - 2022):</span> Specialized in web, mobile, and AS/400 pentesting.</li>
        <li><span>Red Team Analyst - Cyber Sapiens United (2019 - 2021):</span> Conducted red team assessments and advanced vulnerability research.</li>
    </ul>
</section>

<section id="achievements" class="animate">
    <h2 class="section-title">Achievements</h2>
    <ul>
        <li>Published <span>6 Exploits</span> on Exploit-DB.</li>
        <li>Earned <span>3 CVEs</span>: CVE-2020-35263, CVE-2020-36011, CVE-2020-36012.</li>
        <li>Named one of the <span>Top 15 Security Researchers</span> by NCIIPC, India.</li>
        <li>Recognition from organizations like Apple, Dell, Intel, and Sony.</li>
    </ul>
</section>

<section id="contact" class="animate">
    <h2 class="section-title">Contact Me</h2>
    <p>Email: <a href="mailto:kislaysingh00@gmail.com">kislaysingh00@gmail.com</a></p>
    <p>Phone: <a href="tel:+601162182032">+601162182032</a></p>
    <p>LinkedIn: <a href="https://linkedin.com/in/kislay00" target="_blank">linkedin.com/in/kislay00</a></p>
</section>

<footer>
    <p>© 2024 Kislay Kumar | Cybersecurity Portfolio</p>
    <p>Built with 💻 and ❤️ for cybersecurity.</p>
</footer>

<script>
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        },
        { threshold: 0.1 }
    );

    document.querySelectorAll('.animate').forEach((section) => {
        observer.observe(section);
    });
</script>
</body>
</html>
