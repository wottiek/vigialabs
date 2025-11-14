<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title id="detailTitle">Detalhes do Curso | VigiaLabs</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
:root{--bg-dark:#121214;--panel:#1A1A1D;--card-bg:#212124;--text-color:#E0E0E0;--muted:#888;--accent:#2FD074;--accent-2:#4CAF50;--border-color:#333;--shadow-sm:0 4px 8px rgba(0,0,0,.4);--radius:12px;--accent-rgb:47,208,116}
body{font-family:'Inter',sans-serif;background:var(--bg-dark);color:var(--text-color);margin:0;line-height:1.6}
.header{background:var(--panel);padding:18px 0;border-bottom:1px solid var(--border-color);box-shadow:var(--shadow-sm)}
.header-content{max-width:1200px;margin:0 auto;padding:0 20px;display:flex;justify-content:space-between;align-items:center}
.logo{display:flex;align-items:center;color:var(--accent);font-weight:700;font-size:20px}
.logo i{margin-right:10px;font-size:24px}
.nav .nav-link{color:var(--text-color);text-decoration:none;padding:8px 12px;border-radius:8px;display:inline-flex;align-items:center;transition:background-color .2s}
.nav .nav-link:hover{background:rgba(var(--accent-rgb),0.08);color:var(--accent)}
.dashboard-container{max-width:1200px;margin:24px auto;padding:20px}
.course-header{background:var(--panel);padding:28px;border-radius:var(--radius);border:1px solid var(--border-color);min-height:260px;position:relative;overflow:hidden;background-size:cover;background-position:center;display:flex;flex-direction:column;justify-content:flex-end}
.course-header::before{content:"";position:absolute;inset:0;background:rgba(0,0,0,.45);z-index:1}
.course-header>*{position:relative;z-index:2}
.course-header h1{font-size:36px;margin:0 0 8px;background:rgba(18,18,20,.65);display:inline-block;padding:8px 12px;border-radius:8px}
.course-header .sub-heading{display:inline-block;padding:6px 10px;border-radius:6px;background:rgba(18,18,20,.65)}
.info-badge{display:inline-flex;align-items:center;background:rgba(47,208,116,0.08);color:var(--accent);padding:6px 10px;border-radius:8px;margin-right:10px;font-size:14px}
.details-container{display:grid;grid-template-columns:2fr 1fr;gap:36px;margin-top:36px}
.content-main h2{font-size:22px;color:#fff;margin-top:0;border-left:4px solid var(--accent);padding-left:12px;margin-bottom:12px}
.module-list{list-style:none;padding:0;margin:0}
.module-list li{background:var(--card-bg);padding:14px;border-radius:10px;margin-bottom:10px;border-left:3px solid var(--accent-2);box-shadow:0 2px 5px rgba(0,0,0,.25);transition:transform .18s}
.module-list li:hover{transform:translateY(-3px)}
.sidebar-panel{background:linear-gradient(145deg,var(--card-bg),var(--panel));padding:24px;border-radius:12px;border:1px solid var(--border-color);box-shadow:var(--shadow-sm);position:sticky;top:80px}
.form-group{margin-bottom:12px}
.form-group label{display:block;color:var(--muted);margin-bottom:6px}
.form-group input,.form-group select{width:100%;padding:10px;border-radius:8px;border:1px solid var(--border-color);background:var(--panel);color:#fff}
.btn{display:inline-flex;align-items:center;justify-content:center;padding:12px 16px;border-radius:10px;font-weight:700;border:none;cursor:pointer}
.btn.primary{background:var(--accent);color:var(--bg-dark)}
.modal-overlay{position:fixed;inset:0;background:rgba(0,0,0,.72);display:flex;align-items:center;justify-content:center;z-index:1200;opacity:0;visibility:hidden;transition:opacity .25s,visibility .25s}
.modal-overlay.visible{opacity:1;visibility:visible}
.modal-content{background:var(--card-bg);padding:36px;border-radius:14px;box-shadow:var(--shadow-sm);text-align:center;position:relative;overflow:hidden;max-width:460px;width:92%}
.success-icon-wrapper{width:96px;height:96px;border-radius:50%;background:var(--accent);display:flex;align-items:center;justify-content:center;margin:0 auto 18px}
.success-icon{font-size:48px;color:var(--bg-dark)}
.confetti{position:absolute;width:10px;height:10px;border-radius:2px;opacity:0;animation:confetti-fall 1.8s ease-out forwards}
@keyframes confetti-fall{0%{transform:translate(var(--x),var(--y)) rotateZ(0deg) scale(0);opacity:1}20%{transform:translate(var(--x),var(--y)) rotateZ(var(--r)) scale(1);opacity:1}100%{transform:translate(var(--x-end),100vh) rotateZ(var(--r-end)) scale(.6);opacity:0}}
@media(max-width:900px){.details-container{grid-template-columns:1fr}.sidebar-panel{position:static}}
</style>
</head>
<body>
<header class="header">
  <div class="header-content">
    <div class="logo"><i class="fas fa-microchip"></i> VigiaLabs</div>
    <nav class="nav"><a href="cursos.html" class="nav-link"><i class="fas fa-arrow-left"></i> Voltar ao Catálogo</a></nav>
  </div>
</header>

<main class="dashboard-container" id="courseDetailsContainer">
  <p style="text-align:center;color:var(--muted);margin-top:50px">Carregando detalhes do curso...</p>
</main>

<div id="successModal" class="modal-overlay" aria-hidden="true">
  <div class="modal-content" role="dialog" aria-modal="true">
    <div class="success-icon-wrapper"><i class="fas fa-check success-icon"></i></div>
    <h3 style="color:var(--accent);margin:0 0 8px">Matrícula Concluída!</h3>
    <p style="color:var(--text-color);margin-bottom:18px">Sua matrícula foi enviada. Em breve entraremos em contato.</p>
    <button id="closeModalBtn" class="btn primary">Voltar ao Catálogo</button>
  </div>
</div>

<script>
const STORAGE_KEY_USER = 'vigialabs_user';
const STORAGE_KEY_SESSION = 'vigialabs_session_active';

const coursesData = [
  {id:'informatica',title:'Técnico em Informática e Desenvolvimento de Sistemas',description:'Curso completo em software, redes e lógica de programação.',details:'Ideal para quem busca formação técnica rápida e prática.',cargaHoraria:'800h',duracao:'18 meses',price:'R$ 199,90',image:'https://s5.static.brasilescola.uol.com.br/vestibular/2020/11/analise-desenvolvimento-sistema.jpg',modules:[{title:'Módulo 1: Hardware e Redes',content:'Montagem e manutenção de PCs.'},{title:'Módulo 2: Lógica e POO',content:'Fundamentos de programação e orientação a objetos.'}]},
  {id:'mecanica',title:'Técnico em Mecânica ou Mecatrônica',description:'Curso sobre manutenção e automação industrial.',details:'Aprenda CNC, robótica e controle de qualidade.',cargaHoraria:'1200h',duracao:'24 meses',price:'R$ 249,90',image:'https://westgroup.me/wp-content/uploads/2019/02/tecnico-em-mecatronica.jpg',modules:[{title:'Módulo 1: Desenho Técnico',content:'Leitura de projetos 2D e 3D.'},{title:'Módulo 2: Fabricação e Usinagem',content:'Fresagem, torneamento e soldagem.'}]},
  {id:'eletrica',title:'Técnico em Elétrica ou Eletromecânica',description:'Formação em sistemas elétricos e automação.',details:'Trabalhe com instalações, manutenção e comandos elétricos.',cargaHoraria:'1000h',duracao:'20 meses',price:'R$ 219,90',image:'https://www.proofead.com.br/noticias/wp-content/uploads/2023/06/electrician-working-near-board-with-wires-installation-connection-electrics_169016-5876.jpg',modules:[{title:'Módulo 1: Eletricidade Básica',content:'Circuitos AC/DC e segurança NR10.'},{title:'Módulo 2: PLCs e Comandos',content:'Montagem e programação de CLPs.'}]},
  {id:'marketing',title:'Técnico em Marketing',description:'Crie e execute campanhas digitais de sucesso.',details:'Foco em SEO, Google Ads e análise de métricas.',cargaHoraria:'600h',duracao:'12 meses',price:'R$ 179,90',image:'https://images.unsplash.com/photo-1542435503-914c69cde619?q=80&w=1500',modules:[{title:'Módulo 1: Marketing Digital',content:'Funil de vendas e redes sociais.'},{title:'Módulo 2: Conteúdo',content:'Copywriting e planejamento.'}]},
  {id:'administracao',title:'Técnico em Administração',description:'Gestão empresarial e rotinas de escritório.',details:'Inclui finanças, RH e logística.',cargaHoraria:'800h',duracao:'16 meses',price:'R$ 189,90',image:'https://images.unsplash.com/photo-1521791136064-7986c2920216?q=80&w=1500',modules:[{title:'Módulo 1: Rotinas Administrativas',content:'Documentação e comunicação empresarial.'},{title:'Módulo 2: Gestão Financeira',content:'Fluxo de caixa e orçamentos.'}]},
  {id:'logistica',title:'Qualificação em Logística',description:'Atue com transporte e estoque.',details:'Otimização de estoque e cadeia de suprimentos.',cargaHoraria:'400h',duracao:'8 meses',price:'R$ 159,90',image:'https://images.unsplash.com/photo-1582213782172-aceb85a306c2?q=80&w=1500',modules:[{title:'Módulo 1: Gestão de Estoque',content:'Organização e inventário.'},{title:'Módulo 2: Transporte',content:'Rotas e fretes.'}]}
];

function getUrlParameter(name){
  return new URLSearchParams(window.location.search).get(name) || '';
}

function renderCourseDetails(){
  const id = getUrlParameter('id');
  const course = coursesData.find(c => c.id === id);
  const container = document.querySelector('#courseDetailsContainer');

  if(!course){
    container.innerHTML = `<div style="text-align:center;padding:50px"><h1 style="color:#ff6b6b">Curso Não Encontrado</h1><p style="color:var(--muted)">Verifique o link e tente novamente.</p><a href="cursos.html" class="btn primary">Voltar ao Catálogo</a></div>`;
    return;
  }

  document.title = `${course.title} | VigiaLabs`;

  const modulesHTML = course.modules.map(m => `<li><strong>${m.title}</strong><span style="display:block;color:var(--muted);margin-top:6px">${m.content}</span></li>`).join('');

  container.innerHTML = `
    <section class="course-header" style="background-image:url('${course.image}')">
      <h1>${course.title}</h1>
      <p class="sub-heading">${course.description}</p>
      <div style="margin-top:12px;">
        <span class="info-badge"><i class="fas fa-clock"></i> ${course.cargaHoraria}</span>
        <span class="info-badge"><i class="fas fa-calendar-alt"></i> ${course.duracao}</span>
      </div>
    </section>

    <div class="details-container">
      <section class="content-main">
        <h2>Descrição Detalhada</h2>
        <p>${course.details}</p>
        <h2>Estrutura Curricular</h2>
        <ul class="module-list">${modulesHTML}</ul>
      </section>

      <aside class="sidebar-panel">
        <h3>Faça sua Matrícula</h3>
        <div class="price-tag">${course.price} <small style="color:var(--muted);font-size:14px;margin-left:8px">/ mês</small></div>

        <form id="enrollmentForm" method="post">
          <div class="form-group"><label for="nome">Nome Completo</label><input id="nome" name="nome" required></div>
          <div class="form-group"><label for="telefone">Telefone (WhatsApp)</label><input id="telefone" name="telefone" required placeholder="(XX) XXXXX-XXXX"></div>
          <div class="form-group"><label for="turma">Selecione a Turma</label>
            <select id="turma" name="turma" required>
              <option value="">-- Selecione --</option>
              <option value="ead">EAD - Online</option>
              <option value="presencial">Presencial</option>
            </select>
          </div>

          <input type="hidden" name="curso_nome" value="${course.title}">
          <input type="hidden" name="status" value="Pendente">

          <button type="submit" class="btn primary" style="width:100%">Confirmar Matrícula</button>
        </form>
      </aside>
    </div>
  `;

  setupEnrollmentFormListener();
}

function setupEnrollmentFormListener(){
  const form = document.querySelector('#enrollmentForm');
  if(!form) return;

  form.addEventListener('submit', async (e) => {
    e.preventDefault();

    if(localStorage.getItem(STORAGE_KEY_SESSION) !== 'true'){
      alert('Você precisa estar logado para se matricular.');
      window.location.href = 'login.html';
      return;
    }

    const submitBtn = form.querySelector('button[type="submit"]');
    submitBtn.disabled = true;
    submitBtn.textContent = 'Enviando...';

    const formData = new FormData(form);

    // 🔍 DEBUG: mostrar o que está sendo enviado
    console.log("=== DADOS ENVIADOS AO PHP ===");
    for (let [chave, valor] of formData.entries()) {
        console.log(chave, "=>", valor);
    }
    console.log("================================");

    fetch('salvar2.php', { method:'POST', body:formData })

    .then(res => res.json())
    .then(data => {
      if(data.status === 'success'){
        const userData = JSON.parse(localStorage.getItem('vigialabs_user')) || {};
        userData.matriculas = userData.matriculas || [];
        userData.matriculas.push(data.matricula);
        localStorage.setItem('vigialabs_user', JSON.stringify(userData));

        showSuccessModal();
      } else {
        alert('Erro: ' + data.message);
      }
    })
    .catch(() => alert('Erro ao enviar os dados.'))
    .finally(() => {
      submitBtn.disabled = false;
      submitBtn.textContent = 'Confirmar Matrícula';
    });
  });
}

/* === Modal e confete === */
const successModal = document.querySelector('#successModal');
const closeModalBtn = document.querySelector('#closeModalBtn');

function createConfetti(){
  const modalContent = document.querySelector('.modal-content');
  for(let i=0;i<36;i++){
    const c=document.createElement('div');
    c.className='confetti';
    const x=Math.random()*modalContent.offsetWidth-40;
    const y=-40-Math.random()*60;
    const xEnd=Math.random()*300-150;
    const r=Math.random()*360;
    const rEnd=Math.random()*720;
    c.style.setProperty('--x',`${x}px`);
    c.style.setProperty('--y',`${y}px`);
    c.style.setProperty('--x-end',`${xEnd}px`);
    c.style.setProperty('--r',`${r}deg`);
    c.style.setProperty('--r-end',`${rEnd}deg`);
    c.style.left=`${Math.random()*90}%`;
    c.style.top=`${Math.random()*20}%`;
    c.style.background=['#2FD074','#FFD700','#FF6347','#6A5ACD'][i%4];
    c.style.animationDelay=`${Math.random()*0.4}s`;
    modalContent.appendChild(c);
  }
}

function clearConfetti(){
  document.querySelectorAll('.confetti').forEach(n=>n.remove());
}

function showSuccessModal(){
  clearConfetti();
  createConfetti();
  successModal.classList.add('visible');
  successModal.setAttribute('aria-hidden','false');
}

function hideSuccessModal(){
  successModal.classList.remove('visible');
  successModal.setAttribute('aria-hidden','true');
  clearConfetti();
}

closeModalBtn.addEventListener('click',()=>{hideSuccessModal();window.location.href='cursos.html';});
successModal.addEventListener('click',e=>{if(e.target===successModal){hideSuccessModal();window.location.href='cursos.html';}});

window.addEventListener('DOMContentLoaded',renderCourseDetails);
</script>
</body>
</html>
