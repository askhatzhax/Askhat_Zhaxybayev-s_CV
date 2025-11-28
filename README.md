<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Жаксыбаев Асхат - WEB Engineer</title>
<link rel="icon" href="Images/flag.png" type="image/png">
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
<div class="skill">💻 PHP · Laravel · ООП · MVC</div>
<div class="skill">🗄️ MySQL · PostgreSQL · Git</div>
<div class="skill">🟨 JavaScript · AJAX(ES6)</div>    
<div class="skill">🌐 HTML5 · CSS · Apache </div>
<div class="skill">🐧 Linux · bash · nginx</div>
<div class="skill">🎯 Jira · mantis · Atlasian</div> 
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
<p>Email: <a href="mailto:skhat.zhax.4work@gmail.com">askhat.zhax.4work@gmail.com</a></p>
<p>GitHub: <a href="#">github.com/askhat_zhax</a></p>
<p>Telegram: <a href="#">@skht_zh</a></p>
</section>

<footer>
Icon by <a href="https://www.flaticon.com/free-icons/hacker" target="_blank" style="color:#58a6ff;">Freepik</a> from <a href="https://www.flaticon.com/" target="_blank" style="color:#58a6ff;">Flaticon</a>
</footer>
</div>

<script>
const data = {
  ru: {
    name: "Жаксыбаев Асхат Мухамеджанович",
    title: "Backend Developer",
    about_title: "О себе",
    about_text: "Я backend разработчик и системный администратор. Пишу на PHP (MVC, ООП), работаю с БД, занимаюсь развёртыванием серверов, автоматизацией и DevOps задачами.",
    skills_title: "Навыки",
    exp_title: "Опыт работы",
    exp1_title: "Практикант (DITUM ACADEMY)",
    exp1_date: "Июль 2022 — Август 2022",
    exp1_text: "Разработка REST API, Разработка приложения на Flutter.",
    exp2_title: "Специалист технической поддержки (KafeSoft)",
    exp2_date: "Август 2023 — Октябрь 2023",
    exp2_text: "Обеспечивал непрерывную работу пользователей с системой IIKO, настраивал подключения различного оборудования к сети, сборка пк и настройка комплектующих.",
    exp3_title: "Специалист технической поддержки (Dilau)",
    exp3_date: "Декабрь 2023 — Май 2024",
    exp3_text: "Поддержка и обучение пользователей приложения, поиск и регистрация багов приложения, работа с postgresql, jira, mantis.",
    exp4_title: "Разработчик BPM (Simourg)",
    exp4_date: "Май 2024 — Август 2024",
    exp4_text: "Настройка системы BPM Simbase, работа с бд, написание lowcode. Создание отчетов, техническая поддержка клиентов при поддержке бизнес процессов",
    exp5_title: "Системный администратор (АСАЙ)",
    exp5_date: "Сентябрь 2024 — сейчас",
    exp5_text: "Поддержка парка компьютеров и систем видеонаблюдения, аналитика предприятие, мониторинг исполнения задач.", 
    contact_title: "Контакты"
  },
  en: {
    name: "Zhaxybaev Askhat",
    title: "Backend Developer",
    about_title: "About Me",
    about_text: "I am a backend developer and system administrator. I work with PHP (OOP, MVC), databases, Linux servers, automation and DevOps tasks.",
    skills_title: "Skills",
    exp_title: "Experience",
    exp1_title_en: "Intern (DITUM ACADEMY)",
exp1_date_en: "July 2022 — August 2022",
exp1_text_en: "Developed REST APIs and a mobile application using Flutter.",

exp2_title_en: "Technical Support Specialist (KafeSoft)",
exp2_date_en: "August 2023 — October 2023",
exp2_text_en: "Ensured uninterrupted user operation with the IIKO system, configured various equipment, assembled PCs and set up hardware components.",

exp3_title_en: "Technical Support Specialist (Dilau)",
exp3_date_en: "December 2023 — May 2024",
exp3_text_en: "Supported and trained users of the application, identified and reported application bugs, worked with PostgreSQL, Jira, and Mantis.",

exp4_title_en: "BPM Developer (Simourg)",
exp4_date_en: "May 2024 — August 2024",
exp4_text_en: "Configured the Simbase BPM system, worked with databases, developed low-code solutions, created reports, and provided technical support for business processes.",

exp5_title_en: "System Administrator (ASAI)",
exp5_date_en: "September 2024 — Present",
exp5_text_en: "Maintained the computer fleet and video surveillance systems, performed enterprise analytics, and monitored task execution."
    contact_title: "Contacts"
  },
  kz: {
    name: "Жаксыбаев Асхат Мухамеджанович",
    title: "Backend Developer",
    about_title: "Өзім туралы",
    about_text: "Мен backend әзірлеуші және жүйе әкімшісімін. PHP, деректер базалары, Linux серверлері және DevOps тапсырмаларымен жұмыс істеймін.",
    skills_title: "Дағдылар",
    exp_title: "Жұмыс тәжірибесі",
    exp1_title_kz: "Тәжірибеші (DITUM ACADEMY)",
exp1_date_kz: "2022 ж. Шілде — 2022 ж. Тамыз",
exp1_text_kz: "REST API әзірлеу, Flutter арқылы мобильді қосымша жасау.",

exp2_title_kz: "Техникалық қолдау маманы (KafeSoft)",
exp2_date_kz: "2023 ж. Тамыз — 2023 ж. Қазан",
exp2_text_kz: "IIKO жүйесімен тұрақты жұмысты қамтамасыз ету, әртүрлі жабдықтарды желіге қосу, компьютер жинау және компоненттерін баптау.",

exp3_title_kz: "Техникалық қолдау маманы (Dilau)",
exp3_date_kz: "2023 ж. Желтоқсан — 2024 ж. Мамыр",
exp3_text_kz: "Қолданушыларды қолдау және оқыту, қосымшаның багтарын іздеу және тіркеу, PostgreSQL, Jira және Mantis жүйелерімен жұмыс.",

exp4_title_kz: "BPM әзірлеуші (Simourg)",
exp4_date_kz: "2024 ж. Мамыр — 2024 ж. Тамыз",
exp4_text_kz: "Simbase BPM жүйесін баптау, дерекқормен жұмыс, low-code шешімдер жазу, есептер дайындау және бизнес-процестерді қолдау.",

exp5_title_kz: "Жүйелік администратор (АСАЙ)",
exp5_date_kz: "2024 ж. Қыркүйек — қазір",
exp5_text_kz: "Компьютерлік техника мен бейнебақылау жүйелерін қолдау, кәсіпорын аналитикасы, тапсырмалардың орындалуын мониторингтеу."

    contact_title: "Байланыс"
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

  document.querySelectorAll(".lang button").forEach(btn=>btn.classList.remove("active"));
  document.querySelector(`.lang button[data-lang=${lang}]`).classList.add("active");
}

// старт
setLanguage("ru");

document.querySelectorAll(".lang button").forEach(btn=>{
  btn.addEventListener("click", ()=>setLanguage(btn.dataset.lang));
});
</script>
</body>
</html>
