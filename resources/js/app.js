//Navbar Collector
const btn = document.querySelector("button.mobile-menu-button");
const menu = document.querySelector(".mobile-menu");

//Event Listener - Mobile Button
btn.addEventListener("click", () => {
    const isOpen = menu.classList.toggle("grid-rows-[1fr]");
    menu.classList.toggle("grid-rows-[0fr]", !isOpen);
    btn.setAttribute("aria-expanded", isOpen);
});
menu.querySelectorAll("a").forEach((link) => {
    link.addEventListener("click", () => {
        menu.classList.remove("grid-rows-[1fr]");
        menu.classList.add("grid-rows-[0fr]");
        btn.setAttribute("aria-expanded", "false");
    });
});

//Newsletter Validation
import Swal from 'sweetalert2';

const form = document.querySelector('#newsletter-form');

if (form) {
    const input = form.querySelector('#newsletter-email');
    const button = form.querySelector('button[type="submit"]');

    const EMAIL_PATTERN = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;

    const validate = (email) => {
        if (!email) return 'Email wajib diisi.';
        if (!EMAIL_PATTERN.test(email)) return 'Format email tidak valid.';
        return '';
    };

    // Reset Input
    input.addEventListener('input', () => input.removeAttribute('aria-invalid'));

    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        const email = input.value.trim();
        const message = validate(email);

        // Validation Failed
        if (message) {
            input.setAttribute('aria-invalid', 'true');
            await Swal.fire({
                icon: 'error',
                title: 'Gagal berlangganan',
                text: message,
                confirmButtonText: 'Coba lagi',
                confirmButtonColor: '#0ea5e9',
            });
            input.focus();
            return;
        }

        // Loading Simulation
        button.disabled = true;
        Swal.fire({
            title: 'Memproses...',
            allowOutsideClick: false,
            allowEscapeKey: false,
            showConfirmButton: false,
            didOpen: () => Swal.showLoading(),
        });

        await new Promise((resolve) => setTimeout(resolve, 800));

        form.reset();
        button.disabled = false;

        // Validation Success
        Swal.fire({
            icon: 'success',
            title: 'Berhasil terdaftar!',
            text: `Terima kasih telah berlangganan newsletter kami :)`,
            confirmButtonText: 'Tutup',
            confirmButtonColor: '#0ea5e9',
        });
    });
}

// Bahan Lainnya Accordion
import Alpine from 'alpinejs'
import collapse from '@alpinejs/collapse'

Alpine.plugin(collapse)

Alpine.data('accordion', () => ({
    open: false,
    toggle() {
        this.open = !this.open
    },
}))

window.Alpine = Alpine
Alpine.start()

// Slide + Carousel
const track = document.getElementById('track');
const dots = document.getElementById('dots');
const slides = track.children.length;
let i = 0;

for (let n = 0; n < slides; n++) {
    const d = document.createElement('button');
    d.className = 'h-0.5 w-6 bg-white/50';
    d.onclick = () => go(n);
    dots.appendChild(d);
}

function go(n) {
    i = (n + slides) % slides;
    track.style.transform = `translateX(-${i * 100}%)`;
    [...dots.children].forEach((d, k) => {
        d.className = `h-0.5 w-6 ${k === i ? 'bg-white' : 'bg-white/50'}`;
    });
}

document.getElementById('prev').onclick = () => go(i - 1);
document.getElementById('next').onclick = () => go(i + 1);

setInterval(() => go(i + 1), 4000); // auto-slide
go(0);