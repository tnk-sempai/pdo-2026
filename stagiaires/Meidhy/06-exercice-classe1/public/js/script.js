$(document).ready(function () {

    // ==================== HAMBURGER MENU ====================
    $('#hamburger').on('click', function () {
        $('#nav-links').toggleClass('open');
    });

    // Fermer le menu au clic sur un lien (mobile)
    $('#nav-links a').on('click', function () {
        $('#nav-links').removeClass('open');
    });

    // ==================== COMPTEUR DE CARACTÈRES ====================
    $('#text_comment').on('input', function () {
        var max = 1000;
        var current = $(this).val().length;
        var remaining = max - current;
        $('#char-count').text(remaining);

        if (remaining < 50) {
            $('#char-count').css('color', '#e74c3c');
        } else {
            $('#char-count').css('color', '');
        }
    });

    // ==================== VALIDATION FRONTEND ====================
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

        // Full name
        var fullName = $('#full_name').val().trim();
        if (fullName.length < 5 || fullName.length > 120) {
            errors.push("Le nom doit contenir entre 5 et 120 caractères.");
        }

        // Title
        var title = $('#title').val().trim();
        if (title.length < 5 || title.length > 180) {
            errors.push("Le titre doit contenir entre 5 et 180 caractères.");
        }

        // Text comment
        var textComment = $('#text_comment').val().trim();
        if (textComment.length < 5 || textComment.length > 1000) {
            errors.push("Le commentaire doit contenir entre 5 et 1000 caractères.");
        }

        // Affichage des erreurs
        if (errors.length > 0) {
            e.preventDefault();
            alert(errors.join("\n"));
        }
    });

});