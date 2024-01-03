document.addEventListener('DOMContentLoaded', function () {
    // Get the button to open and close the mobile menu
    const mobileMenuButton = document.querySelector('.lg\\:hidden button');

    // Get the mobile menu itself
    const mobileMenu = document.querySelector('.lg\\:hidden[role="dialog"]');

    // Get all the links inside the mobile menu
    const mobileMenuLinks = document.querySelectorAll('.lg\\:hidden a');

    // Add a click event listener to the mobile menu button
    mobileMenuButton.addEventListener('click', function () {
        // Toggle the 'hidden' class on the mobile menu to show/hide it
        mobileMenu.classList.toggle('hidden');
    });

    // Add a click event listener to each mobile menu link
    mobileMenuLinks.forEach(function (link) {
        link.addEventListener('click', function () {
            // Close the mobile menu when a link is clicked
            mobileMenu.classList.add('hidden');
        });
    });
});