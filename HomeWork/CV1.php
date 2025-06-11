<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gary T. Walton - Resume</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: #e5e5e5;
    }

    .resume {
      display: flex;
      max-width: 1000px;
      margin: 40px auto;
      background: #fff;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      border-radius: 8px;
      overflow: hidden;
    }

    .left, .right {
      padding: 30px;
    }

    .left {
      width: 60%;
      border-right: 1px solid #ccc;
      background-color: #ffffff;
    }

    .right {
      width: 40%;
      background-color: #f9f9f9;
    }

    h1 {
      font-size: 28px;
      margin: 0;
      color: #000;
    }

    h1 span {
      color: #d32f2f;
    }

    h2 {
      margin-top: 5px;
      font-weight: normal;
      color: #777;
      font-size: 16px;
    }

    h3 {
      color: #d32f2f;
      font-size: 18px;
      margin-top: 20px;
      margin-bottom: 10px;
    }

    .profile-photo {
      width: 120px;
      height: 150px;
      background-image: url('your-photo.jpg');
      background-size: cover;
      background-position: center;
      border-radius: 8px;
      margin: 20px 0;
    }

    section {
      margin-bottom: 25px;
    }

    .job h4 {
      margin: 5px 0;
      color: #333;
      font-size: 16px;
    }

    .job p {
      margin: 4px 0;
      font-size: 14px;
      color: #555;
    }

    ul {
      list-style: none;
      padding-left: 0;
      margin: 0;
    }

    ul li {
      margin-bottom: 10px;
      font-size: 14px;
    }

    .skills .bar {
      background: #ddd;
      height: 8px;
      margin-top: 5px;
      margin-bottom: 15px;
      border-radius: 5px;
      overflow: hidden;
    }

    .skills .bar span {
      display: block;
      height: 100%;
      background: #d32f2f;
      border-radius: 5px;
    }

    .lang-chart li {
      margin-bottom: 10px;
      font-weight: bold;
      font-size: 14px;
    }

    .lang-chart span {
      float: right;
      color: #d32f2f;
    }

    .education p,
    .references p {
      font-size: 14px;
      color: #444;
      line-height: 1.4;
    }

    @media (max-width: 768px) {
      .resume {
        flex-direction: column;
      }

      .left, .right {
        width: 100%;
        border: none;
      }

      .right {
        background-color: #f1f1f1;
      }
    }
  </style>
</head>
<body>
<?php
$profile = [
  'name' => 'GARY T. WALTON',
  'title' => 'GRAPHIC & WEB DESIGNER',
  'phone' => '+123 456 7890',
  'email' => 'yourname@email.com',
  'address' => '123 Main Street',
  'linkedin' => 'linkedin.com/in/gary'
];
$references = [
  ['name' => 'Darwin B. Magana', 'email' => 'darwin@email.com'],
  ['name' => 'Robert J. Belvin', 'email' => 'robert@email.com']
];
$experiences = [
  ['title' => 'Senior Web Designer', 'company' => 'Creative Agency', 'duration' => '2021–Present', 'desc' => 'Handled high-level designs and collaborated with developers.'],
  ['title' => 'Graphic Designer', 'company' => 'Creative Market', 'duration' => '2019–2021', 'desc' => 'Designed print and digital materials for various industries.'],
  ['title' => 'Marketing Manager', 'company' => 'Marketing Agency', 'duration' => '2017–2019', 'desc' => 'Led campaigns and designed visuals for marketing.'],
  ['title' => 'Junior Web Designer', 'company' => 'Creative Market', 'duration' => '2016–2017', 'desc' => 'Assisted with front-end design and layout.']
];
$education = [
  ['school' => 'Stanford University', 'degree' => 'Master Degree', 'years' => '2014–2016'],
  ['school' => 'Chicago University', 'degree' => 'Bachelor Degree', 'years' => '2010–2014']
];
$skills = [
  ['name' => 'Adobe Photoshop', 'level' => 95],
  ['name' => 'Adobe Illustrator', 'level' => 90],
  ['name' => 'Microsoft Word', 'level' => 80],
  ['name' => 'PowerPoint', 'level' => 75],
  ['name' => 'HTML/CSS', 'level' => 85]
];
$hobbies = ['Book Reading', 'Traveling', 'Playing Chess', 'Graphic Design'];
$languages = [
  ['name' => 'English', 'level' => '95%'],
  ['name' => 'Spanish', 'level' => '60%'],
  ['name' => 'French', 'level' => '45%']
];
?>

<div class="resume">
  <div class="left">
    <h1><?= $profile['name']; ?></h1>
    <h2><?= $profile['title']; ?></h2>

    <div class="profile-photo"></div>

    <section class="about">
      <h3>About Me</h3>
      <ul>
        <li><strong>Phone:</strong> <?= $profile['phone']; ?></li>
        <li><strong>Email:</strong> <?= $profile['email']; ?></li>
        <li><strong>Address:</strong> <?= $profile['address']; ?></li>
        <li><strong>LinkedIn:</strong> <?= $profile['linkedin']; ?></li>
      </ul>
    </section>

    <section class="references">
      <h3>References</h3>
      <?php foreach($references as $ref): ?>
        <p><strong><?= $ref['name']; ?></strong><br>Email: <?= $ref['email']; ?></p>
      <?php endforeach; ?>
    </section>

    <section class="experience">
      <h3>Job Experience</h3>
      <?php foreach($experiences as $job): ?>
        <div class="job">
          <h4><?= $job['title']; ?></h4>
          <p><?= $job['company']; ?> | <?= $job['duration']; ?></p>
          <p><?= $job['desc']; ?></p>
        </div>
      <?php endforeach; ?>
    </section>
  </div>

  <div class="right">
    <section class="education">
      <h3>Education</h3>
      <?php foreach($education as $edu): ?>
        <p><strong><?= $edu['school']; ?></strong><br><?= $edu['degree']; ?> (<?= $edu['years']; ?>)</p>
      <?php endforeach; ?>
    </section>

    <section class="skills">
      <h3>Skills</h3>
      <ul>
        <?php foreach($skills as $skill): ?>
          <li><?= $skill['name']; ?>
            <span class="bar"><span style="width:<?= $skill['level']; ?>%"></span></span>
          </li>
        <?php endforeach; ?>
      </ul>
    </section>

    <section class="hobbies">
      <h3>Hobbies</h3>
      <ul>
        <?php foreach($hobbies as $hobby): ?>
          <li><?= $hobby; ?></li>
        <?php endforeach; ?>
      </ul>
    </section>

    <section class="languages">
      <h3>Languages</h3>
      <ul class="lang-chart">
        <?php foreach($languages as $lang): ?>
          <li><?= $lang['name']; ?> <span><?= $lang['level']; ?></span></li>
        <?php endforeach; ?>
      </ul>
    </section>
  </div>
</div>
</body>
</html>
