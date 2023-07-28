import './bootstrap';
import JSConfetti from 'js-confetti';
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const jsConfetti = new JSConfetti();
window.confetti = () => jsConfetti.addConfetti();
