function createParticle() {
    const hero = document.querySelector('.hero');
    const particle = document.createElement('div');
    particle.className = 'particle';
    particle.style.left = Math.random() * 100 + '%';
    hero.appendChild(particle);
    setTimeout(() => { particle.remove(); }, 15000);
}
setInterval(createParticle, 250);