<?php require_once('header.php') ?>

    <main class="main">
      <!-- Hero Section -->
      <section id="hero" class="hero section dark-background">
        <img
          src="assets/img/profile/profile-bg-me-black-hoodie-on.png"
          alt=""
          data-aos="fade-in"
        />

        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
              <h2>Hi, I'm <?php echo $fullName; ?></h2>
              <p>
                I'm a
                <span
                  class="typed"
                  data-typed-items="<?php echo $jobTitle; ?>"
                ></span><span class="typed-cursor" aria-hidden="true"></span>
              </p>
              <div class="social-links">
                <a href="#"><i class="bi bi-twitter-x"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /Hero Section -->

      <!-- About Section -->
      <section id="about" class="about section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <span class="subtitle">About Me</span>
          <h2>About Me</h2>
          <p>
            I help businesses build functional, reliable, and cost-efficient web solutions that meet their goals without unnecessary complexity. Every project is designed around your needs, delivered on time, within budget, and ready to scale as your business grows.
          </p>
        </div>
        <!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row gy-5">
            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="150">
              <div class="profile-card">
                <div class="profile-header">
                  <div class="profile-avatar">
                    <img
                      src="assets/img/profile/profile-2.png"
                      class="img-fluid"
                      alt=""
                    />
                    <div class="status-indicator"></div>
                  </div>
                  <h3><?php echo $fullName; ?></h3>
                  <span class="role"><?php echo $jobTitle; ?></span>
                  <div class="rating d-none">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                    <span>4.8</span>
                  </div>
                </div>

                <div class="profile-stats d-none">
                  <div class="stat-item">
                    <h4>156</h4>
                    <p>Projects</p>
                  </div>
                  <div class="stat-item">
                    <h4>10+</h4>
                    <p>Years</p>
                  </div>
                  <div class="stat-item">
                    <h4>42</h4>
                    <p>Awards</p>
                  </div>
                </div>

                <div class="profile-actions">
                  <a href="#" class="btn-primary"
                    ><i class="bi bi-download"></i> Download CV</a
                  >
                  <a href="#" class="btn-secondary"
                    ><i class="bi bi-envelope"></i> Contact</a
                  >
                </div>

                <div class="social-connect">
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                  <a href="#"><i class="bi bi-github"></i></a>
                  <a href="#"><i class="bi bi-twitter"></i></a>
                  <a href="#"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-8" data-aos="fade-left" data-aos-delay="200">
              <div class="content-wrapper">
                <div class="bio-section">
                  <div class="section-tag">About Me</div>
                  <h2>Transforming Ideas into Digital Reality</h2>
                  <p>
                    Your vision deserves more than just a template. It needs innovation, precision, and world-class engineering. I specialize in turning concepts into fully functional digital products through expert web development, software engineering, and app creation. Whether you're launching a startup, modernizing your business, or building the next big platform, I design and develop custom digital solutions that are fast, secure, and built to scale.
                  </p>
                  <p>
                    From UI/UX design and front-end development to backend architecture, databases, and cloud integration, I deliver end-to-end services that bring your ideas to life with technical excellence and real business impact.
                  </p>
                </div>

                <div class="details-grid">
                  <div
                    class="detail-item"
                    data-aos="fade-up"
                    data-aos-delay="250"
                  >
                    <i class="bi bi-briefcase"></i>
                    <div class="detail-content">
                      <span>Experience</span>
                      <strong><?php echo $yearsOfExperience; ?> Years</strong>
                    </div>
                  </div>

                  <div
                    class="detail-item"
                    data-aos="fade-up"
                    data-aos-delay="300"
                  >
                    <i class="bi bi-mortarboard"></i>
                    <div class="detail-content">
                      <span>Expertise</span>
                      <strong><?php echo $education[1]['degree']; ?></strong>
                    </div>
                  </div>

                  <div
                    class="detail-item"
                    data-aos="fade-up"
                    data-aos-delay="350"
                  >
                    <i class="bi bi-geo-alt"></i>
                    <div class="detail-content">
                      <span>Based In</span>
                      <strong><?php echo $location; ?></strong>
                    </div>
                  </div>

                  <div
                    class="detail-item"
                    data-aos="fade-up"
                    data-aos-delay="100"
                  >
                    <i class="bi bi-envelope"></i>
                    <div class="detail-content">
                      <span>Email</span>
                      <strong><?php echo $email; ?></strong>
                    </div>
                  </div>

                  <div
                    class="detail-item"
                    data-aos="fade-up"
                    data-aos-delay="150"
                  >
                    <i class="bi bi-whatsapp"></i>
                    <div class="detail-content">
                      <span>WhatsApp</span>
                      <strong><?php echo $phone; ?></strong>
                    </div>
                  </div>

                  <div
                    class="detail-item"
                    data-aos="fade-up"
                    data-aos-delay="200"
                  >
                    <i class="bi bi-calendar-check"></i>
                    <div class="detail-content">
                      <span>Availability</span>
                      <strong>Open to Work</strong>
                    </div>
                  </div>
                </div>

                <div
                  class="skills-showcase"
                  data-aos="fade-up"
                  data-aos-delay="250"
                >
                  <div class="section-tag">Core Skills</div>
                  <h3>Technical Proficiency</h3>

                  <div class="skills-list skills-animation">
                    <div class="skill-item">
                      <div class="skill-info">
                        <span class="skill-name">HTML & CSS</span>
                        <span class="skill-percent"><?= $skills['HTML & CSS'] ?>%</span>
                      </div>
                      <div class="progress">
                        <div
                          class="progress-bar"
                          role="progressbar"
                          aria-valuenow="<?= $skills['HTML & CSS']; ?>"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </div>

                    <div class="skill-item">
                      <div class="skill-info">
                        <span class="skill-name">JavaScript & TypeScript</span>
                        <span class="skill-percent"><?= $skills['JavaScript & TypeScript'] ?>%</span>
                      </div>
                      <div class="progress">
                        <div
                          class="progress-bar"
                          role="progressbar"
                          aria-valuenow="<?= $skills['JavaScript & TypeScript']; ?>"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </div>

                    <div class="skill-item">
                      <div class="skill-info">
                        <span class="skill-name">React &amp; Next.js</span>
                        <span class="skill-percent"><?= $skills['React & Next.js'] ?>%</span>
                      </div>
                      <div class="progress">
                        <div
                          class="progress-bar"
                          role="progressbar"
                          aria-valuenow="<?= $skills['React & Next.js']; ?>"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </div>

                    <div class="skill-item">
                      <div class="skill-info">
                        <span class="skill-name">Node.js &amp; Express</span>
                        <span class="skill-percent"><?= $skills['Node.js & Express'] ?>%</span>
                      </div>
                      <div class="progress">
                        <div
                          class="progress-bar"
                          role="progressbar"
                          aria-valuenow="<?= $skills['Node.js & Express']; ?>"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </div>

                    <div class="skill-item">
                      <div class="skill-info">
                        <span class="skill-name">UI/UX. Canva &amp; Photoshop</span>
                        <span class="skill-percent"><?= $skills['UI/UX Design (Canva & Photoshop)'] ?>%</span>
                      </div>
                      <div class="progress">
                        <div
                          class="progress-bar"
                          role="progressbar"
                          aria-valuenow="<?= $skills['UI/UX Design (Canva & Photoshop)']; ?>"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </div>

                    <div class="skill-item">
                      <div class="skill-info">
                        <span class="skill-name">MongoDB &amp; Redis</span>
                        <span class="skill-percent"><?= $skills['MongoDB'] ?>%</span>
                      </div>
                      <div class="progress">
                        <div
                          class="progress-bar"
                          role="progressbar"
                          aria-valuenow="<?= $skills['MongoDB']; ?>"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </div>

                    <div class="skill-item">
                      <div class="skill-info">
                        <span class="skill-name">PHP &amp; SQL</span>
                        <span class="skill-percent"><?= $skills['PHP & SQL'] ?>%</span>
                      </div>
                      <div class="progress">
                        <div
                          class="progress-bar"
                          role="progressbar"
                          aria-valuenow="<?= $skills['PHP & SQL']; ?>"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </div>

                    <div class="skill-item">
                      <div class="skill-info">
                        <span class="skill-name">Docker</span>
                        <span class="skill-percent"><?= $skills['Docker'] ?>%</span>
                      </div>
                      <div class="progress">
                        <div
                          class="progress-bar"
                          role="progressbar"
                          aria-valuenow="<?= $skills['Docker']; ?>"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /About Section -->

      <!-- Resume Section -->
      <section id="resume" class="resume section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <span class="subtitle">Resume</span>
          <h2>Resume</h2>
          <p>
            Innovative Web and Software Developer with a track record of delivering high-performance applications and custom digital solutions. Skilled in full-stack development, API integration, and automation. Committed to helping businesses scale through clean code, optimized performance, and forward-thinking engineering.
          </p>
        </div>
        <!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row gy-5">
            <div class="col-lg-6">
              <div class="experience-section">
                <div
                  class="section-header"
                  data-aos="fade-right"
                  data-aos-delay="200"
                >
                  <div class="header-content">
                    <span class="section-badge">Experience</span>
                    <h2>Professional Journey</h2>
                    <p>
                     I started my career with a passion for building digital products and have grown into a skilled web and software developer. Over time, I’ve worked on projects that focus on functionality, performance, and user experience turning ideas into real, scalable solutions.
                    </p>
                  </div>
                </div>

                <div class="experience-cards">
                   <div
                    class="exp-card featured"
                    data-aos="zoom-in"
                    data-aos-delay="300"
                  >
                    <div class="card-header">
                      <div class="company-logo">
                        <i class="bi bi-buildings"></i>
                      </div>
                      <div class="period-badge">Current</div>
                    </div>
                    <div class="card-body">
                      <h3>Technical Consultant</h3>
                      <p class="company-name">Fantasy Aerial Arts</p>
                      <span class="duration">2025 - Present</span>
                      <p class="description">
                        I provided technical consulting services for an aerial arts and retreat company based in Australia.
                      </p>
                      <div class="skills-tags">
                        <span class="skill-tag">Technical Consultant</span>
                        <span class="skill-tag">Workflow Builder</span>
                        <span class="skill-tag">Workflow Automation</span>
                      </div>
                    </div>
                  </div>

                  <div
                    class="exp-card featured"
                    data-aos="zoom-in"
                    data-aos-delay="300"
                  >
                    <div class="card-header">
                      <div class="company-logo">
                        <i class="bi bi-buildings"></i>
                      </div>
                      <div class="period-badge">Current</div>
                    </div>
                    <div class="card-body">
                      <h3>Lead Web Developer</h3>
                      <p class="company-name">Owna Group Interiors, Ltd.</p>
                      <span class="duration">2025 - Present</span>
                      <p class="description">
                       I led the website development under WordPress for a real estate company based in London, UK.
                      </p>
                      <div class="skills-tags">
                        <span class="skill-tag">Web Development Lead</span>
                        <span class="skill-tag">Website Consultant</span>
                        <span class="skill-tag">WordPress Developer</span>
                      </div>
                    </div>
                  </div>

                  <div class="exp-card" data-aos="zoom-in" data-aos-delay="350">
                    <div class="card-header">
                      <div class="company-logo">
                        <i class="bi bi-laptop"></i>
                      </div>
                    </div>
                    <div class="card-body">
                      <h3>Fullstack React Developer</h3>
                      <p class="company-name">N-LITE Sports</p>
                      <span class="duration">2022 - 2024</span>
                      <p class="description">
                        I joined a team of software developer to build a profiling app for athletes, teams and managers. Collaborated with cross-functional teams to deliver high quality web-based software.
                      </p>
                      <div class="skills-tags">
                        <span class="skill-tag">React & Next.js</span>
                        <span class="skill-tag">Frontend Development</span>
                        <span class="skill-tag">Docker and Containerization</span>
                        <span class="skill-tag">Backend Development</span>
                        <span class="skill-tag">API integration</span>
                      </div>
                    </div>
                  </div>

                  <div class="exp-card" data-aos="zoom-in" data-aos-delay="400">
                    <div class="card-header">
                      <div class="company-logo">
                        <i class="bi bi-palette"></i>
                      </div>
                    </div>
                    <div class="card-body">
                      <h3>Website Developer and Support</h3>
                      <p class="company-name">Leader Publishing Worldwide</p>
                      <span class="duration">2019 - 2024</span>
                      <p class="description">
                        Provided website development and maintenance services for various business coaching clients, ensuring optimal performance and user experience built under WordPress and custom PHP
                      </p>
                       <div class="skills-tags">
                        <span class="skill-tag">WordPress Development</span>
                        <span class="skill-tag">Maintenance & Support</span>
                        <span class="skill-tag">Web Development</span>
                        <span class="skill-tag">PHP & Database Management</span>
                      </div>
                    </div>
                  </div>

                  <div class="exp-card" data-aos="zoom-in" data-aos-delay="400">
                    <div class="card-header">
                      <div class="company-logo">
                        <i class="bi bi-palette"></i>
                      </div>
                    </div>
                    <div class="card-body">
                      <h3>Website Lead Developer and Technical Consultant</h3>
                      <p class="company-name">Fantasy Fitness and Dance</p>
                      <span class="duration">2012 - 2025</span>
                      <p class="description">
                        Website lead developer for a fitness and dance company based in Australia. Responsible for website development, maintenance, and technical consulting using custom PHP solutions.
                      </p>
                       <div class="skills-tags">
                        <span class="skill-tag">Frontend Development</span>
                        <span class="skill-tag">Backend Development</span>
                        <span class="skill-tag">Maintenance and Support</span>
                        <span class="skill-tag">PHP & Database Management</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="education-section">
                <div
                  class="section-header"
                  data-aos="fade-left"
                  data-aos-delay="200"
                >
                  <div class="header-content">
                    <span class="section-badge">Education</span>
                    <h2>Academic Background</h2>
                    <p>
                      I built a strong foundation in technology through formal education and hands-on training, focusing on software development, programming principles, and modern web technologies.
                    </p>
                  </div>
                </div>

                <div
                  class="education-timeline"
                  data-aos="fade-left"
                  data-aos-delay="300"
                >
                  <div class="timeline-track">
                    <div class="timeline-item">
                      <div class="timeline-marker">
                        <i class="bi bi-mortarboard-fill"></i>
                      </div>
                      <div class="timeline-content">
                        <div class="education-meta">
                          <span class="year-range">2016 - 2018</span>
                          <span class="degree-level d-none">Associates</span>
                        </div>
                        <h4>Software Development</h4>
                        <p class="institution">AMA Computer Learning Center</p>
                        <p class="description">
                          The study focused on advanced software development methodologies, programming languages, and project management techniques to prepare for a career in software engineering.
                        </p>
                        <div class="achievement d-none">
                          <i class="bi bi-award"></i>
                          <span>Summa Cum Laude</span>
                        </div>
                      </div>
                    </div>

                    <div class="timeline-item">
                      <div class="timeline-marker">
                        <i class="bi bi-book"></i>
                      </div>
                      <div class="timeline-content">
                        <div class="education-meta">
                          <span class="year-range">2025 - In Progress</span>
                          <span class="degree-level">Bachelor</span>
                        </div>
                        <h4>Bachelor of Science in Computer Science</h4>
                        <p class="institution">AMA University</p>
                        <p class="description">
                          The program covers core computer science concepts including programming, data structures, algorithms, databases, and software engineering principles to prepare for a career in technology.
                        </p>
                      </div>
                    </div>

                    <div class="timeline-item">
                      <div class="timeline-marker">
                        <i class="bi bi-patch-check-fill"></i>
                      </div>
                      <div class="timeline-content">
                        <div class="education-meta">
                          <span class="year-range">2016 - <?php echo date("Y"); ?></span>
                          <span class="degree-level">Certificates</span>
                        </div>
                        <h4>Professional Certifications</h4>
                        <div class="certifications-list">
                          <div class="cert-item">
                            <span class="cert-name">From Relational Model (SQL) to MongoDB's Document Model</span>
                            <span class="cert-year">2025</span>
                          </div>
                          <div class="cert-item">
                            <span class="cert-name">CRUD Operations in MongoDB</span>
                            <span class="cert-year">2025</span>
                          </div>
                          <div class="cert-item">
                            <span class="cert-name">MongoDB Advanced Schema Design Patterns and Anti-patterns Skill Badge</span>
                            <span class="cert-year">2025</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /Resume Section -->

      <!-- Services Section -->
      <section id="services" class="services section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <span class="subtitle">Services</span>
          <h2>Services</h2>
          <p>
            I develop custom web, app, and software solutions designed to solve your challenges, streamline your operations, and help your business grow faster and smarter.
          </p>
        </div>
        <!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row gy-4">
            <div
              class="col-lg-3 col-md-6"
              data-aos="zoom-in"
              data-aos-delay="100"
            >
              <div class="service-item">
                <div class="icon-wrapper">
                  <i class="bi bi-palette"></i>
                </div>
                <h4>Brand Identity</h4>
                <p>
                  Curabitur non nulla sit amet nisl tempus convallis quis ac
                  lectus vivamus magna.
                </p>
                <a href="service-details.php" class="read-more">
                  <span>Explore</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>

            <div
              class="col-lg-3 col-md-6"
              data-aos="zoom-in"
              data-aos-delay="200"
            >
              <div class="service-item">
                <!-- <div class="featured-tag">Featured</div> -->
                <div class="icon-wrapper">
                  <i class="bi bi-layout-text-window-reverse"></i>
                </div>
                <h4>UI/UX Design</h4>
                <p>
                  Vestibulum ac diam sit amet quam vehicula elementum sed sit
                  amet dui donec rutrum.
                </p>
                <a href="service-details.php" class="read-more">
                  <span>Explore</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>

            <div
              class="col-lg-3 col-md-6"
              data-aos="zoom-in"
              data-aos-delay="300"
            >
              <div class="service-item">
                <div class="icon-wrapper">
                  <i class="bi bi-code-slash"></i>
                </div>
                <h4>Development</h4>
                <p>
                  Praesent sapien massa convallis a pellentesque nec egestas non
                  nisi cras ornare arcu.
                </p>
                <a href="service-details.php" class="read-more">
                  <span>Explore</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>

            <div
              class="col-lg-3 col-md-6"
              data-aos="zoom-in"
              data-aos-delay="400"
            >
              <div class="service-item featured">
                <div class="featured-tag">Soon</div>
                <div class="icon-wrapper">
                  <i class="bi bi-phone"></i>
                </div>
                <h4>Mobile Apps</h4>
                <p>
                  Vivamus suscipit tortor eget felis porttitor volutpat quisque
                  velit nisi pretium ut lacinia.
                </p>
                <a href="service-details.php" class="read-more">
                  <span>Explore</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>

            <div
              class="col-lg-3 col-md-6"
              data-aos="zoom-in"
              data-aos-delay="100"
            >
              <div class="service-item">
                <div class="icon-wrapper">
                  <i class="bi bi-megaphone"></i>
                </div>
                <h4>Digital Marketing</h4>
                <p>
                  Nulla porttitor accumsan tincidunt curabitur aliquet quam id
                  dui posuere blandit mauris.
                </p>
                <a href="service-details.php" class="read-more">
                  <span>Explore</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>

            <div
              class="col-lg-3 col-md-6"
              data-aos="zoom-in"
              data-aos-delay="200"
            >
              <div class="service-item">
                <div class="icon-wrapper">
                  <i class="bi bi-search"></i>
                </div>
                <h4>SEO Services</h4>
                <p>
                  Pellentesque in ipsum id orci porta dapibus donec sollicitudin
                  molestie malesuada proin.
                </p>
                <a href="service-details.php" class="read-more">
                  <span>Explore</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>

            <div
              class="col-lg-3 col-md-6"
              data-aos="zoom-in"
              data-aos-delay="300"
            >
              <div class="service-item">
                <div class="icon-wrapper">
                  <i class="bi bi-graph-up-arrow"></i>
                </div>
                <h4>Analytics</h4>
                <p>
                  Sed porttitor lectus nibh curabitur arcu erat accumsan id
                  imperdiet et porttitor at sem.
                </p>
                <a href="service-details.php" class="read-more">
                  <span>Explore</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>

            <div
              class="col-lg-3 col-md-6"
              data-aos="zoom-in"
              data-aos-delay="400"
            >
              <div class="service-item">
                <div class="icon-wrapper">
                  <i class="bi bi-shield-check"></i>
                </div>
                <h4>Security</h4>
                <p>
                  Vivamus magna justo lacinia eget consectetur sed convallis at
                  tellus mauris blandit aliquet.
                </p>
                <a href="service-details.php" class="read-more">
                  <span>Explore</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="row mt-5">
            <div class="col-12" data-aos="fade-up" data-aos-delay="200">
              <div class="cta-box">
                <div class="row align-items-center">
                  <div class="col-lg-8">
                    <h3>Transform Your Vision Into Reality</h3>
                    <p>
                      Partner with us to bring your ideas to life with
                      innovative solutions tailored to your needs
                    </p>
                  </div>
                  <div class="col-lg-4 text-lg-end text-center">
                    <a href="service-details.php" class="cta-btn"
                      >Start Your Project</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /Services Section -->

      <!-- Portfolio Section -->
      <section id="portfolio" class="portfolio section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <span class="subtitle">Portfolio</span>
          <h2>Portfolio</h2>
          <p>
            Necessitatibus eius consequatur ex aliquid fuga eum quidem sint
            consectetur velit. Sed ut perspiciatis unde omnis iste natus error
            sit voluptatem accusantium doloremque laudantium totam rem aperiam
          </p>
        </div>
        <!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div
            class="isotope-layout"
            data-default-filter="*"
            data-layout="masonry"
            data-sort="original-order"
          >
            <ul
              class="portfolio-filters isotope-filters"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <li data-filter="*" class="filter-active">All Work</li>
              <li data-filter=".filter-creative">Creative</li>
              <li data-filter=".filter-digital">Digital</li>
              <li data-filter=".filter-strategy">Strategy</li>
              <li data-filter=".filter-development">Development</li>
            </ul>

            <div
              class="row gy-4 isotope-container"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <div
                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-creative"
              >
                <div class="portfolio-card">
                  <div class="portfolio-image-container">
                    <img
                      src="assets/img/portfolio/portfolio-1.webp"
                      alt="Creative Project"
                      class="img-fluid"
                      loading="lazy"
                    />
                    <div class="portfolio-overlay">
                      <div class="portfolio-info">
                        <span class="project-category">Creative Design</span>
                        <h4>Visual Identity System</h4>
                      </div>
                      <div class="portfolio-actions">
                        <a
                          href="assets/img/portfolio/portfolio-1.webp"
                          class="glightbox portfolio-link"
                        >
                          <i class="bi bi-plus-lg"></i>
                        </a>
                        <a href="#" class="portfolio-details">
                          <i class="bi bi-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="portfolio-meta">
                    <div class="project-tags">
                      <span class="tag">Branding</span>
                      <span class="tag">Identity</span>
                    </div>
                    <div class="project-year">2024</div>
                  </div>
                </div>
              </div>

              <div
                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-digital"
              >
                <div class="portfolio-card">
                  <div class="portfolio-image-container">
                    <img
                      src="assets/img/portfolio/portfolio-2.webp"
                      alt="Digital Project"
                      class="img-fluid"
                      loading="lazy"
                    />
                    <div class="portfolio-overlay">
                      <div class="portfolio-info">
                        <span class="project-category">Digital Experience</span>
                        <h4>Interactive Web Platform</h4>
                      </div>
                      <div class="portfolio-actions">
                        <a
                          href="assets/img/portfolio/portfolio-2.webp"
                          class="glightbox portfolio-link"
                        >
                          <i class="bi bi-plus-lg"></i>
                        </a>
                        <a href="#" class="portfolio-details">
                          <i class="bi bi-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="portfolio-meta">
                    <div class="project-tags">
                      <span class="tag">Web Design</span>
                      <span class="tag">Development</span>
                    </div>
                    <div class="project-year">2024</div>
                  </div>
                </div>
              </div>

              <div
                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-strategy"
              >
                <div class="portfolio-card">
                  <div class="portfolio-image-container">
                    <img
                      src="assets/img/portfolio/portfolio-3.webp"
                      alt="Strategy Project"
                      class="img-fluid"
                      loading="lazy"
                    />
                    <div class="portfolio-overlay">
                      <div class="portfolio-info">
                        <span class="project-category">Brand Strategy</span>
                        <h4>Market Positioning</h4>
                      </div>
                      <div class="portfolio-actions">
                        <a
                          href="assets/img/portfolio/portfolio-3.webp"
                          class="glightbox portfolio-link"
                        >
                          <i class="bi bi-plus-lg"></i>
                        </a>
                        <a href="#" class="portfolio-details">
                          <i class="bi bi-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="portfolio-meta">
                    <div class="project-tags">
                      <span class="tag">Strategy</span>
                      <span class="tag">Consulting</span>
                    </div>
                    <div class="project-year">2023</div>
                  </div>
                </div>
              </div>

              <div
                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-development"
              >
                <div class="portfolio-card">
                  <div class="portfolio-image-container">
                    <img
                      src="assets/img/portfolio/portfolio-4.webp"
                      alt="Development Project"
                      class="img-fluid"
                      loading="lazy"
                    />
                    <div class="portfolio-overlay">
                      <div class="portfolio-info">
                        <span class="project-category">Full Stack</span>
                        <h4>Custom Application</h4>
                      </div>
                      <div class="portfolio-actions">
                        <a
                          href="assets/img/portfolio/portfolio-4.webp"
                          class="glightbox portfolio-link"
                        >
                          <i class="bi bi-plus-lg"></i>
                        </a>
                        <a href="#" class="portfolio-details">
                          <i class="bi bi-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="portfolio-meta">
                    <div class="project-tags">
                      <span class="tag">React</span>
                      <span class="tag">Node.js</span>
                    </div>
                    <div class="project-year">2024</div>
                  </div>
                </div>
              </div>

              <div
                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-creative"
              >
                <div class="portfolio-card">
                  <div class="portfolio-image-container">
                    <img
                      src="assets/img/portfolio/portfolio-5.webp"
                      alt="Creative Project"
                      class="img-fluid"
                      loading="lazy"
                    />
                    <div class="portfolio-overlay">
                      <div class="portfolio-info">
                        <span class="project-category">Art Direction</span>
                        <h4>Campaign Design</h4>
                      </div>
                      <div class="portfolio-actions">
                        <a
                          href="assets/img/portfolio/portfolio-5.webp"
                          class="glightbox portfolio-link"
                        >
                          <i class="bi bi-plus-lg"></i>
                        </a>
                        <a href="#" class="portfolio-details">
                          <i class="bi bi-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="portfolio-meta">
                    <div class="project-tags">
                      <span class="tag">Creative</span>
                      <span class="tag">Campaign</span>
                    </div>
                    <div class="project-year">2024</div>
                  </div>
                </div>
              </div>

              <div
                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-digital"
              >
                <div class="portfolio-card">
                  <div class="portfolio-image-container">
                    <img
                      src="assets/img/portfolio/portfolio-6.webp"
                      alt="Digital Project"
                      class="img-fluid"
                      loading="lazy"
                    />
                    <div class="portfolio-overlay">
                      <div class="portfolio-info">
                        <span class="project-category">Digital Product</span>
                        <h4>Mobile Experience</h4>
                      </div>
                      <div class="portfolio-actions">
                        <a
                          href="assets/img/portfolio/portfolio-6.webp"
                          class="glightbox portfolio-link"
                        >
                          <i class="bi bi-plus-lg"></i>
                        </a>
                        <a href="#" class="portfolio-details">
                          <i class="bi bi-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="portfolio-meta">
                    <div class="project-tags">
                      <span class="tag">Mobile</span>
                      <span class="tag">UI/UX</span>
                    </div>
                    <div class="project-year">2023</div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="portfolio-bottom" data-aos="fade-up" data-aos-delay="400">
            <div class="row align-items-center">
              <div class="col-lg-8">
                <h3>Like what you see?</h3>
                <p>
                  Donec rutrum congue leo eget malesuada. Vivamus suscipit
                  tortor eget felis porttitor volutpat.
                </p>
              </div>
              <div class="col-lg-4 text-lg-end">
                <a href="#contact" class="btn btn-accent"
                  >Let's Work Together</a
                >
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /Portfolio Section -->

      <!-- Testimonials Section -->
      <section id="testimonials" class="testimonials section light-background">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Testimonials</h2>
          <p>
            Necessitatibus eius consequatur ex aliquid fuga eum quidem sint
            consectetur velit
          </p>
        </div>
        <!-- End Section Title -->

        <div class="container">
          <div class="testimonial-masonry">
            <div class="testimonial-item" data-aos="fade-up">
              <div class="testimonial-content">
                <div class="quote-pattern">
                  <i class="bi bi-quote"></i>
                </div>
                <p>
                  Implementing innovative strategies has revolutionized our
                  approach to market challenges and competitive positioning.
                </p>
                <div class="client-info">
                  <div class="client-image">
                    <img src="assets/img/person/person-f-7.webp" alt="Client" />
                  </div>
                  <div class="client-details">
                    <h3>Rachel Bennett</h3>
                    <span class="position">Strategy Director</span>
                  </div>
                </div>
              </div>
            </div>

            <div
              class="testimonial-item highlight"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <div class="testimonial-content">
                <div class="quote-pattern">
                  <i class="bi bi-quote"></i>
                </div>
                <p>
                  Exceptional service delivery and innovative solutions have
                  transformed our business operations, leading to remarkable
                  growth and enhanced customer satisfaction across all
                  touchpoints.
                </p>
                <div class="client-info">
                  <div class="client-image">
                    <img src="assets/img/person/person-m-7.webp" alt="Client" />
                  </div>
                  <div class="client-details">
                    <h3>Daniel Morgan</h3>
                    <span class="position">Chief Innovation Officer</span>
                  </div>
                </div>
              </div>
            </div>

            <div
              class="testimonial-item"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="testimonial-content">
                <div class="quote-pattern">
                  <i class="bi bi-quote"></i>
                </div>
                <p>
                  Strategic partnership has enabled seamless digital
                  transformation and operational excellence.
                </p>
                <div class="client-info">
                  <div class="client-image">
                    <img src="assets/img/person/person-f-8.webp" alt="Client" />
                  </div>
                  <div class="client-details">
                    <h3>Emma Thompson</h3>
                    <span class="position">Digital Lead</span>
                  </div>
                </div>
              </div>
            </div>

            <div
              class="testimonial-item"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <div class="testimonial-content">
                <div class="quote-pattern">
                  <i class="bi bi-quote"></i>
                </div>
                <p>
                  Professional expertise and dedication have significantly
                  improved our project delivery timelines and quality metrics.
                </p>
                <div class="client-info">
                  <div class="client-image">
                    <img src="assets/img/person/person-m-8.webp" alt="Client" />
                  </div>
                  <div class="client-details">
                    <h3>Christopher Lee</h3>
                    <span class="position">Technical Director</span>
                  </div>
                </div>
              </div>
            </div>

            <div
              class="testimonial-item highlight"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <div class="testimonial-content">
                <div class="quote-pattern">
                  <i class="bi bi-quote"></i>
                </div>
                <p>
                  Collaborative approach and industry expertise have
                  revolutionized our product development cycle, resulting in
                  faster time-to-market and increased customer engagement
                  levels.
                </p>
                <div class="client-info">
                  <div class="client-image">
                    <img src="assets/img/person/person-f-9.webp" alt="Client" />
                  </div>
                  <div class="client-details">
                    <h3>Olivia Carter</h3>
                    <span class="position">Product Manager</span>
                  </div>
                </div>
              </div>
            </div>

            <div
              class="testimonial-item"
              data-aos="fade-up"
              data-aos-delay="500"
            >
              <div class="testimonial-content">
                <div class="quote-pattern">
                  <i class="bi bi-quote"></i>
                </div>
                <p>
                  Innovative approach to user experience design has
                  significantly enhanced our platform's engagement metrics and
                  customer retention rates.
                </p>
                <div class="client-info">
                  <div class="client-image">
                    <img
                      src="assets/img/person/person-m-13.webp"
                      alt="Client"
                    />
                  </div>
                  <div class="client-details">
                    <h3>Nathan Brooks</h3>
                    <span class="position">UX Director</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /Testimonials Section -->

      <!-- Contact Section -->
      <section id="contact" class="contact section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <span class="subtitle">Contact</span>
          <h2>Contact</h2>
          <p>
            Necessitatibus eius consequatur ex aliquid fuga eum quidem sint
            consectetur velit. Sed ut perspiciatis unde omnis iste natus error
            sit voluptatem accusantium doloremque laudantium totam rem aperiam
          </p>
        </div>
        <!-- End Section Title -->

        <div class="container">
          <div class="row gy-4">
            <div class="col-lg-4">
              <div class="info-item">
                <div class="icon-wrapper">
                  <i class="bi bi-geo-alt"></i>
                </div>
                <div>
                  <h3>Address</h3>
                  <p>2847 Oak Street, San Francisco, CA 94102</p>
                </div>
              </div>

              <div class="info-item">
                <div class="icon-wrapper">
                  <i class="bi bi-telephone"></i>
                </div>
                <div>
                  <h3>Call Me</h3>
                  <p>+1 (555) 234-5678</p>
                </div>
              </div>

              <div class="info-item">
                <div class="icon-wrapper">
                  <i class="bi bi-envelope"></i>
                </div>
                <div>
                  <h3>Email Me</h3>
                  <p>alex@example.com</p>
                </div>
              </div>
            </div>

            <div class="col-lg-8">
              <form
                action="forms/contact.php"
                method="post"
                class="php-email-form"
              >
                <div class="row gy-4">
                  <div class="col-md-6">
                    <input
                      type="text"
                      name="name"
                      class="form-control"
                      placeholder="Your Name"
                      required=""
                    />
                  </div>

                  <div class="col-md-6">
                    <input
                      type="email"
                      class="form-control"
                      name="email"
                      placeholder="Your Email"
                      required=""
                    />
                  </div>

                  <div class="col-md-12">
                    <input
                      type="text"
                      class="form-control"
                      name="subject"
                      placeholder="Subject"
                      required=""
                    />
                  </div>

                  <div class="col-md-12">
                    <textarea
                      class="form-control"
                      name="message"
                      rows="6"
                      placeholder="Message"
                      required=""
                    ></textarea>
                  </div>

                  <div class="col-md-12 text-center">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">
                      Your message has been sent. Thank you!
                    </div>

                    <button type="submit">Send Message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- /Contact Section -->
    </main>
    <!-- /Main Content -->

<?php require_once('footer.php'); ?>

