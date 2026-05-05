
const menuBtn = document.getElementById('menuButton');
const navMenu = document.getElementById('navMenu');
if (menuBtn) menuBtn.addEventListener('click', () => navMenu.classList.toggle('hidden'));


(function(){
    const slides = Array.from(document.querySelectorAll('#slideshow [data-index]'));
    let idx = 0;
    const show = (i) => {
        slides.forEach((s, j) => s.style.opacity = j===i? '1' : '0');
    };
    const prev = document.getElementById('prevBtn');
    const next = document.getElementById('nextBtn');
    if (prev) prev.addEventListener('click', ()=>{ idx = (idx-1+slides.length)%slides.length; show(idx); });
    if (next) next.addEventListener('click', ()=>{ idx = (idx+1)%slides.length; show(idx); });
    setInterval(()=>{ idx = (idx+1)%slides.length; show(idx); }, 5000);
})();