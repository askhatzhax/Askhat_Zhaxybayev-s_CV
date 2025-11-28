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
<div class="exp-item">
<h4 id="exp3_title"></h4>
<div class="exp-date" id="exp3_date"></div>
<p id="exp3_text"></p>
</div>
<div class="exp-item">
<h4 id="exp4_title"></h4>
<div class="exp-date" id="exp4_date"></div>
<p id="exp4_text"></p>
</div>
<div class="exp-item">
<h4 id="exp5_title"></h4>
<div class="exp-date" id="exp5_date"></div>
<p id="exp5_text"></p>
</div>
</section>

<section id="contact">
<h3 id="contact_title"></h3>
<p>Email: <a href="mailto:skhat.zhax.4work@gmail.com">askhat.zhax.4work@gmail.com</a></p>
<p>GitHub: <a href="https://github.com/askhatzhax">github.com/askhat_zhax</a></p>
<p>Telegram: <a href="https://web.telegram.org/k/skht_zh">@skht_zh</a></p>
</section>


</div>

<script>
const data = {
    ru: {
        name: "Жаксыбаев Асхат Мухамеджанович",
    title: "Backend Developer",
    about_title: "О себе",
    about_text: "Я backend разработчик и системный администратор. Пишу на PHP, работаю с БД, занимаюсь развёртыванием серверов, автоматизацией и DevOps задачами. Я — ответственный и целеустремленный специалист, стремящийся к постоянному развитию и достижению высоких результатов. Умею быстро адаптироваться к новым задачам и эффективно работать как самостоятельно, так и в команде. Обладаю аналитическим мышлением, вниманием к деталям и стремлением улучшать процессы. Ищу возможности для реализации своих профессиональных навыков, приобретения нового опыта и внесения вклада в успешное развитие компании.",
    skills_title: "Навыки",
    exp_title: "Опыт работы",
        exp1_title: "Практикант (DITUM ACADEMY)",
        exp1_date: "Июль 2022 — Август 2022",
        exp1_text: "Разработка REST API, Разработка приложения на Flutter.",

        exp2_title: "Специалист технической поддержки (KafeSoft)",
        exp2_date: "Август 2023 — Октябрь 2023",
        exp2_text: "Обеспечивал непрерывную работу пользователей с системой IIKO, настраивал подключения различного оборудования к сети, сборка ПК и настройка комплектующих.",

        exp3_title: "Специалист технической поддержки (Dilau)",
        exp3_date: "Декабрь 2023 — Май 2024",
        exp3_text: "Поддержка и обучение пользователей приложения, поиск и регистрация багов, работа с PostgreSQL, Jira, Mantis.",

        exp4_title: "Разработчик BPM (Simourg)",
        exp4_date: "Май 2024 — Август 2024",
        exp4_text: "Настройка системы BPM Simbase, работа с базами данных, написание low-code логики, создание отчетов, техническая поддержка бизнес-процессов.",

        exp5_title: "Системный администратор (АСАЙ)",
        exp5_date: "Сентябрь 2024 — сейчас",
        exp5_text: "Поддержка парка компьютеров и систем видеонаблюдения, аналитика предприятия, мониторинг исполнения задач."
    },

    en: {
        name: "Zhaxybaev Askhat",
    title: "Backend Developer",
    about_title: "About Me",
    about_text: "I am a backend developer and system administrator. I work with PHP, databases, server deployment, automation, and DevOps tasks. I am a responsible and goal-oriented specialist who strives for continuous improvement and high results. I quickly adapt to new tasks and work effectively both independently and in a team. I have strong analytical thinking, attention to detail, and a desire to optimize processes. I am looking for opportunities to apply my professional skills, gain new experience, and contribute to the successful growth of a company.",
    skills_title: "Skills",
    exp_title: "Experience",
        exp1_title: "Intern (DITUM ACADEMY)",
        exp1_date: "July 2022 — August 2022",
        exp1_text: "Developed REST APIs and a mobile application using Flutter.",

        exp2_title: "Technical Support Specialist (KafeSoft)",
        exp2_date: "August 2023 — October 2023",
        exp2_text: "Ensured uninterrupted operation of users with the IIKO system, configured equipment, assembled PCs and set up components.",

        exp3_title: "Technical Support Specialist (Dilau)",
        exp3_date: "December 2023 — May 2024",
        exp3_text: "Provided user support and training, identified and registered bugs, worked with PostgreSQL, Jira, and Mantis.",

        exp4_title: "BPM Developer (Simourg)",
        exp4_date: "May 2024 — August 2024",
        exp4_text: "Configured the Simbase BPM system, worked with databases, wrote low-code logic, created reports, and supported business processes.",

        exp5_title: "System Administrator (ASAI)",
        exp5_date: "September 2024 — Present",
        exp5_text: "Maintained the computer fleet and video surveillance systems, performed enterprise analytics, and monitored task execution."
    },

    kz: {
        name: "Жаксыбаев Асхат Мухамеджанович",
    title: "Backend Developer",
    about_title: "Өзім туралы",
    about_text: "Мен backend әзірлеуші және жүйелік администратормын. PHP-мен жұмыс істеймін, дерекқормен жұмыс жасаймын, серверлерді орнату, автоматтандыру және DevOps міндеттерін атқарамын. Мен — жауапты әрі мақсатқа бағытталған маманмын, үнемі дамуға және жоғары нәтижелерге ұмтыламын. Жаңа тапсырмаларға тез бейімделемін және жеке де, командамен де тиімді жұмыс істей аламын. Аналитикалық ойлау қабілетім, ұқыптылығым және процестерді жақсартуға деген талпынысым бар. Кәсіби дағдыларымды іске асыруға, жаңа тәжірибе алуға және компанияның табысты дамуына үлес қосуға мүмкіндік іздеймін.",
    skills_title: "Дағдылар",
    exp_title: "Жұмыс тәжірибесі",
        exp1_title: "Тәжірибеші (DITUM ACADEMY)",
        exp1_date: "2022 ж. Шілде — 2022 ж. Тамыз",
        exp1_text: "REST API әзірлеу және Flutter арқылы мобильді қосымша жасау.",

        exp2_title: "Техникалық қолдау маманы (KafeSoft)",
        exp2_date: "2023 ж. Тамыз — 2023 ж. Қазан",
        exp2_text: "IIKO жүйесінің тұрақты жұмысын қамтамасыз ету, жабдықтарды баптау, компьютер жинау және компоненттерді орнату.",

        exp3_title: "Техникалық қолдау маманы (Dilau)",
        exp3_date: "2023 ж. Желтоқсан — 2024 ж. Мамыр",
        exp3_text: "Қолданушыларды қолдау және оқыту, багтарды анықтау және тіркеу, PostgreSQL, Jira және Mantis жүйелерімен жұмыс.",

        exp4_title: "BPM әзірлеуші (Simourg)",
        exp4_date: "2024 ж. Мамыр — 2024 ж. Тамыз",
        exp4_text: "Simbase BPM жүйесін баптау, дерекқормен жұмыс, low-code логика жазу, есептер дайындау және бизнес-процестерді қолдау.",

        exp5_title: "Жүйелік администратор (АСАЙ)",
        exp5_date: "2024 ж. Қыркүйек — қазір",
        exp5_text: "Компьютерлік парк пен бейнебақылау жүйелерін қолдау, кәсіпорын аналитикасы, тапсырмалардың орындалуын бақылау."
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
  document.getElementById("exp3_title").innerText = data[lang].exp3_title;
  document.getElementById("exp3_date").innerText = data[lang].exp3_date;
  document.getElementById("exp3_text").innerText = data[lang].exp3_text;
  document.getElementById("exp4_title").innerText = data[lang].exp4_title;
  document.getElementById("exp4_date").innerText = data[lang].exp4_date;
  document.getElementById("exp4_text").innerText = data[lang].exp4_text;
  document.getElementById("exp5_title").innerText = data[lang].exp5_title;
  document.getElementById("exp5_date").innerText = data[lang].exp5_date;
  document.getElementById("exp5_text").innerText = data[lang].exp5_text;
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
