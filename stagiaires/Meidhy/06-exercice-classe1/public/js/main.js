/* ══════════════════════════════════════════════
   TANUKI — main.js
   Cursor · Nav · Reveal · Validation
   ══════════════════════════════════════════════ */

$(document).ready(function () {

    /* ── Custom Cursor ── */
    const $cur = $('#cur');
    const $ring = $('#cur-ring');
    let mx = 0, my = 0, rx = 0, ry = 0;

    $(document).on('mousemove', function (e) {
        mx = e.clientX;
        my = e.clientY;
        $cur.css({ left: mx, top: my });
    });

    // Ring lag interpolation
    function animateRing() {
        rx += (mx - rx) * 0.15;
        ry += (my - ry) * 0.15;
        $ring.css({ left: rx, top: ry });
        requestAnimationFrame(animateRing);
    }
    animateRing();

    // Cursor hover grow on interactive elements
    $('a, button, input, textarea, .gallery-card, .comment-card').on('mouseenter', function () {
        $('body').addClass('cursor-hover');
    }).on('mouseleave', function () {
        $('body').removeClass('cursor-hover');
    });

    /* ── Nav scroll state ── */
    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 60) {
            $('nav').addClass('scrolled');
        } else {
            $('nav').removeClass('scrolled');
        }
    });

    /* ── Burger menu (jQuery) ── */
    $('#burger').on('click', function () {
        $(this).toggleClass('open');
        $('#mobile-menu').toggleClass('open');
    });

    // Close mobile menu on link click
    $('#mobile-menu a').on('click', function () {
        $('#burger').removeClass('open');
        $('#mobile-menu').removeClass('open');
    });

    /* ── Reveal on scroll ── */
    if ('IntersectionObserver' in window) {
        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.reveal').forEach(function (el) {
            observer.observe(el);
        });
    }

    /* ── Char counter (textarea) ── */
    $('#text_comment').on('input', function () {
        var max = 1000;
        var current = $(this).val().length;
        var remaining = max - current;
        $('#char-count').text(remaining);

        if (remaining < 50) {
            $('#char-count').css('color', '#ff6b6b');
        } else {
            $('#char-count').css('color', '');
        }
    });

    /* ── Frontend Validation ── */
    $('#guestbook-form').on('submit', function (e) {
        var errors = [];

        // Email
        var email = $('#email').val().trim();
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            errors.push("L'email n'est pas valide.");
        }
        if (email.length > 120) {
            errors.push("L'email ne doit pas dépasser 120 caractères.");
        }

        // Full name (5-120)
        var fullName = $('#full_name').val().trim();
        if (fullName.length < 5 || fullName.length > 120) {
            errors.push("Le nom doit contenir entre 5 et 120 caractères.");
        }

        // Title (5-180)
        var title = $('#title').val().trim();
        if (title.length < 5 || title.length > 180) {
            errors.push("Le titre doit contenir entre 5 et 180 caractères.");
        }

        // Text comment (5-1000)
        var textComment = $('#text_comment').val().trim();
        if (textComment.length < 5 || textComment.length > 1000) {
            errors.push("Le commentaire doit contenir entre 5 et 1000 caractères.");
        }

        if (errors.length > 0) {
            e.preventDefault();
            alert(errors.join("\n"));
        }
    });

});