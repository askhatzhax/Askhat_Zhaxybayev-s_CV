<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Жаксыбаев Асхат - WEB / IT Engineer</title>
<style>
body {
    margin:0;
    padding:0;
    font-family: "Inter", Arial, sans-serif;
    background: #0d1117;
    color: #c9d1d9;
}
.container {
    max-width: 900px;
    margin:auto;
    padding:40px 20px;
}
header {
    text-align:center;
    margin-top: 60px;
    margin-bottom:40px;
}
header img {
    width:120px;
    height:120px;
    border-radius:50%;
    object-fit:cover;
    margin-bottom:15px;
    border:2px solid #21262d;
}
h1 { font-size:36px; margin:0; }
h2 { font-size:18px; font-weight:400; margin-top:5px; color:#8b949e; }

.lang {
    position:absolute;
    top:25px;
    right:25px;
}
.lang button {
    background:none;
    border:none;
    color:#8b949e;
    margin-left:12px;
    cursor:pointer;
    font-weight:bold;
}
.lang button.active { color:#58a6ff; border-bottom:2px solid #58a6ff; }

section { margin:45px 0; border-bottom:1px solid #21262d; padding-bottom:25px; }
h3 { margin-bottom:10px; }
.skill-list { display:flex; flex-direction:column; gap:12px; }
.skill { display:flex; gap:10px; align-items:center; }
.exp-item { margin:20px 0; }
.exp-date { font-size:13px; color:#8b949e; }
.btn {
    display:inline-block;
    padding:12px 25px;
    background:#21262d;
    color:#e6edf3;
    border:1px solid #30363d;
    border-radius:6px;
    text-decoration:none;
    transition:0.2s;
}
.btn:hover { background:#30363d; }
section#contact a { color:#58a6ff; text-decoration:none; }
section#contact a:hover { text-decoration:underline; }
footer { font-size:12px; color:#8b949e; text-align:center; margin-top:40px; }
</style>
</head>
<body>
<div class="lang">
<button data-lang="ru" class="active">RU</button>
<button data-lang="en">EN</button>
<button data-lang="kz">KZ</button>
</div>

<div class="container">
<header>
<img src="https://cdn-icons-png.flaticon.com/512/924/924915.png" alt="Avatar">
<h1 id="name"></h1>
<h2 id="title"></h2>
</header>

<section id="about">
<h3 id="about_title"></h3>
<p id="about_text"></p>
</section>

<section id="skills">
<h3 id="skills_title"></h3>
<div class="skill-list">
<div class="skill">💻 PHP · ООП · MVC</div>
<div class="skill">🗄️ MySQL · PostgreSQL</div>
<div class="skill">🟨 JavaScript (ES6)</div>
<div class="skill">🌐 HTML5 · CSS3</div>
<div class="skill">🐧 Linux · bash · nginx</div>
</div>
</section>

<section id="experience">
<h3 id="exp_title"></h3>
<div class="exp-item">
<h4 id="exp1_title"></h4>
<div class="exp-date" id="exp1_date"></div>
<p id="exp1_text"></p>
</div>
<div class="exp-item">
<h4 id="exp2_title"></h4>
<div class="exp-date" id="exp2_date"></div>
<p id="exp2_text"></p>
</div>
</section>

<section id="contact">
<h3 id="contact_title"></h3>
<p>Email: <a href="mailto:askhat@example.com">askhat@example.com</a></p>
<p>GitHub: <a href="#">github.com/yourprofile</a></p>
<p>Telegram: <a href="#">@yourtg</a></p>
</section>

<a class="btn" href="resume.pdf" download id="download_btn">Скачать резюме</a>

<footer>
Icon by <a href="https://www.flaticon.com/free-icons/hacker" target="_blank" style="color:#58a6ff;">Freepik</a> from <a href="https://www.flaticon.com/" target="_blank" style="color:#58a6ff;">Flaticon</a>
</footer>
</div>

<script>
const data = {
ru:{
name:"Жаксыбаев Асхат",
title:"WEB / IT Engineer · Backend Developer",
about_title:"О себе",
about_text:"Я backend разработчик и системный администратор. Пишу на PHP (MVC, ООП), работаю с БД, занимаюсь развёртыванием серверов, автоматизацией и DevOps задачами.",
skills_title:"Навыки",
exp_title:"Опыт работы",
exp1_title:"Backend разработчик (Freelance)",
exp1_date:"2023 — 2024",
exp1_text:"Разработка REST API, оптимизация БД, сервисы на PHP, настройка Linux-серверов.",
exp2_title:"Full-stack стажёр",
exp2_date:"2022",
exp2_text:"Верстка, интеграция UI, работа с MySQL, фиксы багов и поддержка проекта.",
contact_title:"Контакты",
download:"Скачать резюме"
},
en:{
name:"Zhaxybaev Askhat",
title:"WEB / IT Engineer · Backend Developer",
about_title:"About Me",
about_text:"I am a backend developer and system administrator. I work with PHP (OOP, MVC), databases, Linux servers, automation and DevOps tasks.",
skills_title:"Skills",
exp_title:"Experience",
exp1_title:"Backend Developer (Freelance)",
exp1_date:"2023 — 2024",
exp1_text:"Development of REST API, DB optimization, PHP services, Linux server setup.",
exp2_title:"Full-stack Intern",
exp2_date:"2022",
exp2_text:"UI integration, layout, MySQL work, bug fixing and project support.",
contact_title:"Contacts",
download:"Download CV"
},
kz:{
name:"Жақсыбаев Асхат",
title:"WEB / IT Engineer · Backend Developer",
about_title:"Өзім туралы",
about_text:"Мен backend әзірлеуші және жүйе әкімшісімін. PHP, деректер базалары, Linux серверлері және DevOps тапсырмаларымен жұмыс істеймін.",
skills_title:"Дағдылар",
exp_title:"Жұмыс тәжірибесі",
exp1_title:"Backend әзірлеуші (Freelance)",
exp1_date:"2023 — 2024",
exp1_text:"REST API, деректер базасын оңтайландыру, PHP сервистері, Linux серверлерін баптау.",
exp2_title:"Full-stack тағылымдамашы",
exp2_date:"2022",
exp2_text:"UI интеграциясы, беттеу, MySQL, қателерді түзету және қолдау.",
contact_title:"Байланыс",
download:"Резюме жүктеу"
}
};

function setLanguage(lang){
document.getElementById("name").innerText = data[lang].name;
document.getElementById("title").innerText = data[lang].title;
document.getElementById("about_title").innerText = data[lang].about_title;
document.getElementById("about_text").innerText = data[lang].about_text;
document.getElementById("skills_title").innerText = data[lang].skills_title;
document.getElementById("exp_title").innerText = data[lang].exp_title;
document.getElementById("exp1_title").innerText = data[lang].exp1_title;
document.getElementById("exp1_date").innerText = data[lang].exp1_date;
document.getElementById("exp1_text").innerText = data[lang].exp1_text;
document.getElementById("exp2_title").innerText = data[lang].exp2_title;
document.getElementById("exp2_date").innerText = data[lang].exp2_date;
document.getElementById("exp2_text").innerText = data[lang].exp2_text;
document.getElementById("contact_title").innerText = data[lang].contact_title;
document.getElementById("download_btn").innerText = data[lang].download;

// Активная кнопка
document.querySelectorAll(".lang button").forEach(btn=>btn.classList.remove("active"));
document.querySelector(`.lang button[data-lang=${lang}]`).classList.add("active");
}

// Инициализация
setLanguage("ru");

// Обработчик кнопок
document.querySelectorAll(".lang button").forEach(btn=>{
btn.addEventListener("click", ()=>setLanguage(btn.dataset.lang));
});
</script>
</body>
</html>
