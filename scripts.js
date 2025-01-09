// زر التنبيه
document.getElementById('alert-btn').addEventListener('click', () => {
    alert("You are awesome! Thanks for visiting our website!");
});

// عرض الوقت الحالي
function updateTime() {
    const now = new Date();
    document.getElementById('current-time').innerText = `Current Time: ${now.toLocaleTimeString()}`;
}
setInterval(updateTime, 1000);
updateTime();

// زر العودة إلى الأعلى
const backToTopButton = document.getElementById('back-to-top');

window.addEventListener('scroll', () => {
    if (window.scrollY > 200) {
        backToTopButton.style.display = 'block';
    } else {
        backToTopButton.style.display = 'none';
    }
});

backToTopButton.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});
