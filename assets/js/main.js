/**
 * Logosferia - Main JavaScript
 * Menangani navigasi mobile dan interaksi UI
 */

const navToggle = document.querySelector('.mobile-nav-toggle');
const sidebar = document.querySelector('#sidebar-nav');

if (navToggle && sidebar) {
    // Fungsi buka-tutup sidebar
    navToggle.addEventListener('click', () => {
        sidebar.classList.toggle('active');
        const icon = navToggle.querySelector('i');
        
        // Animasi pergantian ikon
        if (sidebar.classList.contains('active')) {
            icon.classList.replace('fa-bars', 'fa-xmark');
        } else {
            icon.classList.replace('fa-xmark', 'fa-bars');
        }
    });

    // Otomatis tutup sidebar saat menu diklik (khusus mobile)
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', () => {
            if (window.innerWidth <= 992) {
                sidebar.classList.remove('active');
                navToggle.querySelector('i').classList.replace('fa-xmark', 'fa-bars');
            }
        });
    });
}