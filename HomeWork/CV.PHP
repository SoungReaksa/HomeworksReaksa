
<!DOCTYPE html>
<html lang="en">
    <style>
        body {
  margin: 0;
  font-family: 'Segoe UI', sans-serif;
  background: #f7f7f7;
}

.resume {
  display: flex;
  max-width: 1000px;
  margin: 30px auto;
  background: #fff;
  box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

.left, .right {
  padding: 30px;
}

.left {
  width: 60%;
  border-right: 1px solid #ddd;
}

.right {
  width: 40%;
  background: #f9f9f9;
}

h1 {
  font-size: 28px;
  margin: 0;
}

h1 span {
  color: red;
}

h2 {
  margin-top: 5px;
  font-weight: normal;
  color: #888;
}

.profile-photo {
  width: 120px;
  height: 150px;
  background: #ccc;
  margin: 20px 0;
}

section {
  margin-bottom: 30px;
}

.job h4 {
  margin: 5px 0;
  color: #222;
}

.skills ul,
.hobbies ul,
.lang-chart {
  list-style: none;
  padding: 0;
}

.skills .bar {
  background: #ddd;
  height: 8px;
  margin-top: 5px;
  margin-bottom: 15px;
  border-radius: 5px;
}

.skills .bar span {
  display: block;
  height: 100%;
  background: red;
  border-radius: 5px;
}

.lang-chart li {
  margin-bottom: 10px;
  font-weight: bold;
}

.lang-chart span {
  float: right;
  color: red;
}

    </style>
    
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gary T. Walton - Resume</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="resume">
    <div class="left">
      <h1>GARY T. <span>WALTON</span></h1>
      <h2>GRAPHIC & WEB DESIGNER</h2>

      <div class="profile-photo"></div>

      <section class="about">
        <h3>About Me</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tempor dignissim lorem, non luctus nulla fermentum vel.</p>
        <ul>
          <li><strong>Phone:</strong> +123 456 7890</li>
          <li><strong>Email:</strong> yourname@email.com</li>
          <li><strong>Address:</strong> 123 Main Street</li>
          <li><strong>LinkedIn:</strong> linkedin.com/in/gary</li>
        </ul>
      </section>

      <section class="references">
        <h3>References</h3>
        <p><strong>Darwin B. Magana</strong><br>Email: darwin@email.com</p>
        <p><strong>Robert J. Belvin</strong><br>Email: robert@email.com</p>
      </section>

      <section class="experience">
        <h3>Job Experience</h3>
        <div class="job">
          <h4>Senior Web Designer</h4>
          <p>Creative Agency | 2021–Present</p>
          <p>Handled high-level designs and collaborated with developers for responsive projects.</p>
        </div>
        <div class="job">
          <h4>Graphic Designer</h4>
          <p>Creative Market | 2019–2021</p>
          <p>Designed print and digital materials for clients in various industries.</p>
        </div>
        <div class="job">
          <h4>Marketing Manager</h4>
          <p>Marketing Agency | 2017–2019</p>
          <p>Led marketing campaigns and designed visuals for ads and social media.</p>
        </div>
        <div class="job">
          <h4>Junior Web Designer</h4>
          <p>Creative Market | 2016–2017</p>
          <p>Assisted in layout and front-end development for client websites.</p>
        </div>
      </section>
    </div>

    <div class="right">
      <section class="education">
        <h3>Education</h3>
        <p><strong>Stanford University</strong><br>Master Degree (2014–2016)</p>
        <p><strong>Chicago University</strong><br>Bachelor Degree (2010–2014)</p>
      </section>

      <section class="skills">
        <h3>Skills</h3>
        <ul>
          <li>Adobe Photoshop <span class="bar"><span style="width:95%"></span></span></li>
          <li>Adobe Illustrator <span class="bar"><span style="width:90%"></span></span></li>
          <li>Microsoft Word <span class="bar"><span style="width:80%"></span></span></li>
          <li>PowerPoint <span class="bar"><span style="width:75%"></span></span></li>
          <li>HTML/CSS <span class="bar"><span style="width:85%"></span></span></li>
        </ul>
      </section>

      <section class="hobbies">
        <h3>Hobbies</h3>
        <ul>
          <li>Book Reading</li>
          <li>Traveling</li>
          <li>Playing Chess</li>
          <li>Graphic Design</li>
        </ul>
      </section>

      <section class="languages">
        <h3>Languages</h3>
        <ul class="lang-chart">
          <li>English <span>95%</span></li>
          <li>Spanish <span>60%</span></li>
          <li>French <span>45%</span></li>
        </ul>
      </section>
    </div>
  </div>
</body>
</html>
