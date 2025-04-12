let current = 0;
let score = 0;
let questions = [];

document.addEventListener("DOMContentLoaded", () => {
  const startBtn = document.getElementById("startBtn");
  const intro = document.getElementById("intro");
  const quizContainer = document.getElementById("quiz-container");

  startBtn.addEventListener("click", () => {
    intro.classList.add("hidden");
    quizContainer.classList.remove("hidden");
    loadQuestions();
  });
});

function loadQuestions() {
  fetch('/js/soal.json')
    .then(res => res.json())
    .then(data => {
      questions = data;
      showQuestion();
    })
    .catch(err => {
      document.getElementById('quiz-container').innerHTML = `<p class="text-red-600">Gagal memuat soal kuis.</p>`;
      console.error("Gagal load JSON soal:", err);
    });
}

function showQuestion() {
  const q = questions[current];
  const container = document.getElementById('quiz-container');
  const nextBtn = document.getElementById('nextBtn');

  let html = `
    <div class="animate-fade-in">
      <h3 class="text-xl font-semibold mb-4">${q.pertanyaan}</h3>
  `;

  q.pilihan.forEach((p, i) => {
    html += `
      <div class="text-left mb-2">
        <label>
          <input type="radio" name="answer" value="${p}" class="mr-2">
          ${p}
        </label>
      </div>
    `;
  });

  html += `</div>`;
  container.innerHTML = html;
  nextBtn.classList.remove('hidden');
  nextBtn.onclick = checkAnswer;
}

function checkAnswer() {
  const selected = document.querySelector('input[name="answer"]:checked');
  if (!selected) return alert("Pilih salah satu jawaban!");

  const benar = questions[current].jawaban;
  if (selected.value === benar) score++;

  current++;
  if (current < questions.length) {
    showQuestion();
  } else {
    showResult();
  }
}

function showResult() {
  const container = document.getElementById('quiz-container');
  container.innerHTML = `
    <div class="animate-fade-in">
      <h3 class="text-2xl font-bold">Kuis Selesai!</h3>
      <p class="mt-4 text-lg">Skor kamu: ${score} dari ${questions.length}</p>
    </div>
  `;
  document.getElementById('nextBtn').classList.add('hidden');
}
