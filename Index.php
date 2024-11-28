<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kislay Kumar - Cybersecurity Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Roboto Mono', monospace;
            background-color: #0a192f;
            color: #ccd6f6;
            line-height: 1.6;
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            background-color: #0a192f;
        }
        header a {
            text-decoration: none;
            color: #64ffda;
            margin: 0 1rem;
            font-size: 1rem;
        }
        header a:hover {
            text-decoration: underline;
        }
        .hero {
            text-align: center;
            padding: 5rem 1rem;
        }
        .hero h1 {
            font-size: 2.5rem;
            color: #64ffda;
        }
        .hero p {
            font-size: 1.2rem;
            color: #8892b0;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 2rem 1rem;
        }
        .section {
            margin-bottom: 4rem;
        }
        .section h2 {
            font-size: 2rem;
            color: #64ffda;
            border-bottom: 2px solid #64ffda;
            display: inline-block;
            margin-bottom: 1rem;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        ul li {
            margin-bottom: 0.5rem;
        }
        ul li span {
            color: #64ffda;
        }
        footer {
            text-align: center;
            padding: 2rem 1rem;
            background-color: #0a192f;
            color: #8892b0;
            font-size: 0.9rem;
        }
        footer a {
            color: #64ffda;
            text-decoration: none;
        }
        footer a:hover {
            text-decoration: underline;
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
        <h1>Hi, I'm Kislay Kumar</h1>
        <p>OSCP | Security Consultant | Penetration Tester | Synack Red Teamer</p>
    </section>

    <div class="container">
        <section id="about" class="section">
            <h2>About Me</h2>
            <p>
                I am a self-taught and passionate cybersecurity professional with expertise in penetration testing, ethical hacking, and vulnerability assessment. My mission is to secure digital infrastructures by identifying and mitigating potential threats.
            </p>
        </section>

        <section id="skills" class="section">
            <h2>Skills</h2>
            <ul>
                <li><span>Web Application Pentesting:</span> Expert in identifying and mitigating web vulnerabilities.</li>
                <li><span>Mobile & Network Pentesting:</span> Comprehensive testing for Android, iOS, and network infrastructures.</li>
                <li><span>Tools:</span> Nmap, BurpSuite, Nessus, Metasploit Framework, SQLmap.</li>
                <li><span>Languages:</span> Python, C++, JavaScript, Linux Scripting.</li>
            </ul>
        </section>

        <section id="experience" class="section">
            <h2>Experience</h2>
            <ul>
                <li><span>Information Security Consultant - Firmus (2022 - Present):</span> Leading security assessments and red team engagements.</li>
                <li><span>Consultant (Cyber Security) - SkillCube (2021 - 2022):</span> Specializing in web and mobile pentesting, including AS/400 systems.</li>
                <li><span>Red Team Analyst - Cyber Sapiens United (2019 - 2021):</span> Conducted red team assessments and advanced vulnerability research.</li>
            </ul>
        </section>

        <section id="achievements" class="section">
            <h2>Achievements</h2>
            <ul>
                <li>Published <span>6 Exploits</span> on Exploit-DB.</li>
                <li>Earned <span>3 CVEs</span>: CVE-2020-35263, CVE-2020-36011, CVE-2020-36012.</li>
                <li>Named one of the <span>Top 15 Security Researchers</span> by NCIIPC, India.</li>
                <li>Recognition from major organizations like Apple, Dell, Intel, and Sony.</li>
            </ul>
        </section>

        <section id="contact" class="section">
            <h2>Contact Me</h2>
            <p>Email: <a href="mailto:kislaysingh00@gmail.com">kislaysingh00@gmail.com</a></p>
            <p>Phone: <a href="tel:+601162182032">+601162182032</a></p>
            <p>LinkedIn: <a href="https://linkedin.com/in/kislay00" target="_blank">linkedin.com/in/kislay00</a></p>
        </section>
    </div>

    <footer>
        <p>© 2024 Kislay Kumar | Cybersecurity Portfolio</p>
        <p>Built with 💻 and passion for cybersecurity.</p>
    </footer>
</body>
</html>
