import Alpine from 'alpinejs';
import AOS from 'aos';

window.Alpine = Alpine;
Alpine.start();

/**
 * =============================================
 * AOS (Animate On Scroll) Initialization
 * =============================================
 */
document.addEventListener('DOMContentLoaded', () => {
    // Respect reduced motion preference
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

    AOS.init({
        duration: 800,
        easing: 'ease-out-cubic',
        once: true,
        offset: 80,
        delay: 50,
        disable: window.matchMedia('(prefers-reduced-motion: reduce)').matches,
    });
});

/**
 * =============================================
 * Scroll Reveal Animation System
 * UI UX Pro Max — Motion-Driven + Micro-interactions
 * =============================================
 */
document.addEventListener('DOMContentLoaded', () => {
    // Respect reduced motion preference
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

    // RAF-based observer for smooth 60fps reveals
    let ticking = false;

    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !ticking) {
                ticking = true;
                requestAnimationFrame(() => {
                    entries.filter(e => e.isIntersecting).forEach(e => {
                        const el = e.target;
                        const delay = parseInt(el.dataset.delay) || 0;
                        
                        setTimeout(() => {
                            el.classList.add('scroll-reveal--visible');
                        }, delay);
                        
                        // Stagger children
                        const stagger = el.dataset.stagger;
                        if (stagger) {
                            const children = el.querySelectorAll('.scroll-reveal');
                            children.forEach((child, index) => {
                                setTimeout(() => {
                                    child.classList.add('scroll-reveal--visible');
                                }, parseInt(stagger) * (index + 1));
                            });
                        }
                        
                        revealObserver.unobserve(el);
                    });
                    ticking = false;
                });
            }
        });
    }, {
        threshold: 0.08,
        rootMargin: '0px 0px -30px 0px'
    });

    document.querySelectorAll('.scroll-reveal').forEach(el => {
        revealObserver.observe(el);
    });
});

/**
 * =============================================
 * Smooth Parallax Hero (RAF-optimized)
 * =============================================
 */
(function() {
    const heroParallax = document.querySelector('[data-parallax]');
    if (!heroParallax) return;
    
    let scrollY = 0;
    let tickingParallax = false;
    
    window.addEventListener('scroll', () => {
        scrollY = window.pageYOffset;
        if (!tickingParallax) {
            requestAnimationFrame(() => {
                heroParallax.style.transform = `translateY(${scrollY * 0.35}px)`;
                tickingParallax = false;
            });
            tickingParallax = true;
        }
    });
})();

/**
 * =============================================
 * Navbar shrink + shadow on scroll
 * =============================================
 */
(function() {
    const nav = document.querySelector('nav');
    if (!nav) return;
    
    let tickingNav = false;
    
    window.addEventListener('scroll', () => {
        if (!tickingNav) {
            requestAnimationFrame(() => {
                nav.classList.toggle('nav-scrolled', window.pageYOffset > 60);
                tickingNav = false;
            });
            tickingNav = true;
        }
    });
})();

/**
 * =============================================
 * Scroll Progress Bar
 * =============================================
 */
(function() {
    const bar = document.createElement('div');
    bar.id = 'scroll-progress';
    bar.setAttribute('aria-hidden', 'true');
    document.body.appendChild(bar);
    
    let tickingProgress = false;
    
    window.addEventListener('scroll', () => {
        if (!tickingProgress) {
            requestAnimationFrame(() => {
                const scrollTop = window.pageYOffset;
                const docHeight = document.documentElement.scrollHeight - window.innerHeight;
                const progress = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;
                bar.style.transform = `scaleX(${progress / 100})`;
                tickingProgress = false;
            });
            tickingProgress = true;
        }
    });
})();

/**
 * =============================================
 * Smooth Anchor Scroll
 * =============================================
 */
document.addEventListener('click', (e) => {
    const link = e.target.closest('a[href^="#"]');
    if (link) {
        e.preventDefault();
        const target = document.querySelector(link.getAttribute('href'));
        if (target) {
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    }
});

/**
 * =============================================
 * Hero Slideshow — Cinematic (UI UX Pro Max)
 * Auto-advancing crossfade with Ken Burns,
 * per-slide content, overlays, labels & stats
 * =============================================
 */
(function() {
    const hero = document.getElementById('hero');
    if (!hero) return;

    // Respect reduced motion
    const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    const slides = hero.querySelectorAll('.hero-slide');
    const overlays = hero.querySelectorAll('.hero-overlay');
    const contents = hero.querySelectorAll('.hero-slide-content');
    const dots = hero.querySelectorAll('.hero-dot');
    const labels = hero.querySelectorAll('.hero-slide-label');
    const counterCurrent = hero.querySelector('.hero-counter-current');
    const slideCount = slides.length;
    let current = 0;
    let interval;
    const SLIDE_DURATION = 6000; // 6 seconds per slide

    function goToSlide(index) {
        if (index === current) return;
        if (index < 0 || index >= slideCount) return;

        // Update background slides
        slides.forEach(s => s.classList.remove('active'));
        slides[index].classList.add('active');

        // Update overlays
        overlays.forEach(o => o.classList.remove('active'));
        if (overlays[index]) overlays[index].classList.add('active');

        // Update content blocks (remove inline display for active, hide others)
        contents.forEach((c, i) => {
            c.classList.remove('active');
            if (i === index) {
                c.style.display = '';
            } else {
                c.style.display = 'none';
            }
        });
        contents[index].classList.add('active');

        // Update dots
        dots.forEach(d => d.classList.remove('active'));
        dots[index].classList.add('active');

        // Update labels
        labels.forEach(l => l.style.display = 'none');
        if (labels[index]) labels[index].style.display = 'block';

        // Update counter
        if (counterCurrent) {
            counterCurrent.textContent = String(index + 1).padStart(2, '0');
        }

        current = index;

        // Dispatch custom event for React BlurText to replay animations
        hero.dispatchEvent(new CustomEvent('slide-changed', { detail: { index } }));
    }

    function nextSlide() {
        const next = (current + 1) % slideCount;
        goToSlide(next);
    }

    function prevSlide() {
        const prev = (current - 1 + slideCount) % slideCount;
        goToSlide(prev);
    }

    function startAutoplay() {
        stopAutoplay();
        if (!prefersReduced) {
            interval = setInterval(nextSlide, SLIDE_DURATION);
        }
    }

    function stopAutoplay() {
        if (interval) {
            clearInterval(interval);
            interval = null;
        }
    }

    // Dot click handlers
    dots.forEach((dot, i) => {
        dot.addEventListener('click', () => {
            if (i === current) return;
            goToSlide(i);
            startAutoplay();
        });
    });

    // Keyboard navigation
    hero.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowRight' || e.key === 'ArrowDown') {
            nextSlide();
            startAutoplay();
        } else if (e.key === 'ArrowLeft' || e.key === 'ArrowUp') {
            prevSlide();
            startAutoplay();
        }
    });

    // Make hero focusable for keyboard
    hero.setAttribute('tabindex', '0');
    hero.setAttribute('role', 'region');
    hero.setAttribute('aria-label', 'Hero slideshow');
    hero.setAttribute('aria-roledescription', 'slideshow');

    // Initial state setup
    function setInitialState() {
        // Show first slide content, hide others
        contents.forEach((c, i) => {
            c.style.display = i === 0 ? '' : 'none';
            if (i === 0) c.classList.add('active');
        });
        slides[0].classList.add('active');
        if (overlays[0]) overlays[0].classList.add('active');
        dots[0].classList.add('active');
        if (labels[0]) labels[0].style.display = 'block';
        if (counterCurrent) counterCurrent.textContent = '01';
    }

    // Reduced motion: show first slide static
    if (prefersReduced) {
        setInitialState();
        return;
    }

    setInitialState();

    // Start autoplay
    startAutoplay();

    // Dispatch initial slide-changed event for React BlurText animations
    setTimeout(() => {
        hero.dispatchEvent(new CustomEvent('slide-changed', { detail: { index: 0 } }));
    }, 1500);
})();

/**
 * =============================================
 * Professional Loading Screen
 * Smooth entrance with progress bar, then
 * gracefully fades out when ready
 * =============================================
 */
(function() {
    const loader = document.getElementById('page-loader');
    if (!loader) return;

    const body = document.body;
    const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // Mark body as loading to prevent scroll
    body.classList.add('loading');

    function hideLoader() {
        loader.classList.add('loaded');
        body.classList.remove('loading');
        
        // Remove loader from DOM after transition
        setTimeout(() => {
            loader.remove();
        }, 800);
    }

    if (prefersReduced) {
        // Instant hide for reduced motion
        loader.style.display = 'none';
        body.classList.remove('loading');
        return;
    }

    // Wait for everything to be ready
    let resourcesLoaded = false;
    let minTimePassed = false;
    let startTime = performance.now();

    // Minimum display time so the animation is clearly visible
    const MIN_DISPLAY = 1200;

    function tryHide() {
        if (resourcesLoaded && minTimePassed) {
            setTimeout(hideLoader, 200);
        }
    }

    function markMinTimePassed() {
        minTimePassed = true;
        tryHide();
    }

    // Check minimum time
    setTimeout(markMinTimePassed, MIN_DISPLAY);

    // Wait for window load (images, etc.)
    if (document.readyState === 'complete') {
        resourcesLoaded = true;
    } else {
        window.addEventListener('load', () => {
            resourcesLoaded = true;
            tryHide();
        });
    }
})();

/**
 * =============================================
 * Enhanced Scroll Reveal System
 * RAF-powered, staggered, parallax-ready
 * =============================================
 */
(function() {
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

    const revealElements = document.querySelectorAll('.reveal-section, .reveal-left, .reveal-right, .reveal-scale');

    if (!revealElements.length) return;

    let tickingReveal = false;

    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                if (!tickingReveal) {
                    requestAnimationFrame(() => {
                        entries.filter(e => e.isIntersecting).forEach(e => {
                            const el = e.target;
                            const delay = parseInt(el.dataset.delay) || 0;
                            const stagger = el.dataset.stagger;

                            setTimeout(() => {
                                el.classList.add('revealed');
                            }, delay);

                            // Stagger children
                            if (stagger) {
                                const children = el.querySelectorAll('.reveal-section, .reveal-left, .reveal-right, .reveal-scale');
                                children.forEach((child, index) => {
                                    const childDelay = parseInt(child.dataset.delay) || 0;
                                    setTimeout(() => {
                                        child.classList.add('revealed');
                                    }, childDelay + parseInt(stagger) * (index + 1));
                                });
                            }

                            revealObserver.unobserve(el);
                        });
                        tickingReveal = false;
                    });
                    tickingReveal = true;
                }
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });

    revealElements.forEach(el => revealObserver.observe(el));
})();

/**
 * =============================================
 * Parallax Background on Scroll
 * For elements with data-parallax-bg attribute
 * =============================================
 */
(function() {
    const parallaxElements = document.querySelectorAll('[data-parallax-bg]');
    if (!parallaxElements.length) return;

    let tickingPara = false;

    const updateParallax = () => {
        parallaxElements.forEach(el => {
            const rect = el.getBoundingClientRect();
            const speed = parseFloat(el.dataset.parallaxSpeed) || 0.15;
            const scrolled = window.innerHeight - rect.top;
            const offset = scrolled * speed;

            if (rect.top < window.innerHeight && rect.bottom > 0) {
                el.style.backgroundPosition = `center ${offset}px`;
            }
        });
    };

    window.addEventListener('scroll', () => {
        if (!tickingPara) {
            requestAnimationFrame(() => {
                updateParallax();
                tickingPara = false;
            });
            tickingPara = true;
        }
    });
})();

/**
 * =============================================
 * Smooth appearance counter animation
 * For elements with data-count-to attribute
 * =============================================
 */
(function() {
    const counters = document.querySelectorAll('[data-count-to]');
    if (!counters.length) return;

    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const el = entry.target;
                const target = parseInt(el.dataset.countTo);
                const duration = parseInt(el.dataset.countDuration) || 2000;
                const suffix = el.dataset.countSuffix || '';
                const startTime = performance.now();

                function animateCounter(currentTime) {
                    const elapsed = currentTime - startTime;
                    const progress = Math.min(elapsed / duration, 1);
                    // Ease out cubic
                    const eased = 1 - Math.pow(1 - progress, 3);
                    const current = Math.round(eased * target);

                    el.textContent = current + suffix;

                    if (progress < 1) {
                        requestAnimationFrame(animateCounter);
                    } else {
                        el.textContent = target + suffix;
                    }
                }

                requestAnimationFrame(animateCounter);
                counterObserver.unobserve(el);
            }
        });
    }, { threshold: 0.5 });

    counters.forEach(el => counterObserver.observe(el));
})();
