document.addEventListener("DOMContentLoaded", function () {
    // Get the navigation bar element
    const navbar = document.getElementById("navbar");
    const logo = document.getElementById("siteLogo")

    // Function to handle the scroll event
    function handleScroll() {
        const offset = 100; // Adjust this value as needed

        if (window.scrollY) {
            // Add the 'fixed' class to make the navigation bar sticky
            navbar.classList.add("fixed", "top-0", "left-0", "right-0", "z-50", "bg-white", "dark:text-supernova-500");
            logo.classList.add("scale-75");
            document.querySelectorAll('#navbarList li a').forEach((link) => {
                link.classList.remove("dark:text-white");
                link.classList.add("dark:text-supernova-700");
            });
        } else {
            // Remove the 'fixed' class when scrolling up
            navbar.classList.remove("fixed", "top-0", "left-0", "right-0", "z-50", "bg-white");
            logo.classList.remove("scale-75");
            document.querySelectorAll('#navbarList li a').forEach((link) => {
                link.classList.add("dark:text-white");
                link.classList.remove("dark:text-supernova-700");
            });
        }
    }

    // Add scroll event listener
    window.addEventListener("scroll", handleScroll);
});