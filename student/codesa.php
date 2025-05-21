<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simon Doe - Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    display: flex;
    color: #333;
}

.sidebar {
    width: 250px;
    background: #2e8b57;
    color: white;
    padding: 20px;
    height: 100vh;
}

.profile-img {
    width: 100px;
    border-radius: 50%;
    margin-bottom: 10px;
}

.social-icons a {
    color: white;
    margin-right: 10px;
}

.menu {
    list-style: none;
    padding: 0;
}

.menu li {
    margin: 10px 0;
}

.menu a {
    color: white;
    text-decoration: none;
}

.hire-btn {
    margin-top: 20px;
    padding: 10px;
    background: white;
    color: #2e8b57;
    border: none;
    cursor: pointer;
}

.main-content {
    flex: 1;
    padding: 40px;
}

.btn {
    padding: 10px 20px;
    text-decoration: none;
    margin-right: 10px;
    border-radius: 5px;
}

.btn.green {
    background: #2e8b57;
    color: white;
}

.btn.gray {
    background: #666;
    color: white;
}

.skill-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 15px;
    margin-top: 20px;
}

.skill-item {
    background: #f2f2f2;
    padding: 10px;
    border-radius: 8px;
}
</style>

<body>
    <div class="sidebar">
        <img src="profile.jpg" alt="Simon Doe" class="profile-img">
        <h2>Simon Doe</h2>
        <p> Hello my name is SoungReaksa and I'm a senior software engineer. Welcome to my personal website!</p>
        <div class="social-icons">
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-github"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
        <ul class="menu">
            <li><a href="#">About Me</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Services & Pricing</a></li>
            <li><a href="#">Resume</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <button class="hire-btn">Hire Me</button>
        <div class="toggle-dark-mode">
            <label>Dark Mode</label>
            <input type="checkbox">
        </div>
    </div>

    <div class="main-content">
        <header>
            <h1>Simon Doe</h1>
            <h3>Senior Software Engineer</h3>
            <p>I'm a software engineer specialised in frontend and backend development for complex scalable web apps.</p>
            <a href="#" class="btn green">View Portfolio</a>
            <a href="#" class="btn gray">View Resume</a>
        </header>

        <section class="skills">
            <h2>What I do</h2>
            <p>I have more than 10 years' experience building software for clients all over the world.</p>
            <div class="skill-grid">
                <div class="skill-item"><i class="fab fa-js-square"></i> Vanilla JavaScript</div>
                <div class="skill-item"><i class="fab fa-angular"></i> Angular, React & Vue</div>
                <div class="skill-item"><i class="fab fa-node-js"></i> Node.js</div>
                <div class="skill-item"><i class="fab fa-python"></i> Python & Django</div>
                <div class="skill-item"><i class="fab fa-php"></i> PHP</div>
                <div class="skill-item"><i class="fas fa-tools"></i> npm, Gulp & Grunt</div>
                <div class="skill-item"><i class="fab fa-html5"></i> HTML & CSS</div>
                <div class="skill-item"><i class="fab fa-sass"></i> Sass & LESS</div>
            </div>
        </section>
    </div>
</body>
</html>
