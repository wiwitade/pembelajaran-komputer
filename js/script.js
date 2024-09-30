// Fungsi untuk memeriksa jawaban
function checkAnswers() {
    const correctAnswers = {
        quiz1: 'eniac',
        quiz2: 'babbage',
        quiz3: 'alu',
        quiz4: 'cloud',
        quiz5: 'second'
    };

    let score = 0;
    let answers = {};
    const userId = 'user123'; // Ganti dengan mekanisme pengenalan pengguna yang lebih sesuai

    // Menggunakan Object.entries untuk iterasi yang lebih efisien
    Object.entries(correctAnswers).forEach(([question, correctAnswer]) => {
        const selectedRadio = document.querySelector(`input[name="${question}"]:checked`);
        if (selectedRadio) {
            const selectedValue = selectedRadio.value;
            const isCorrect = selectedValue === correctAnswer;
            highlightAnswer(selectedRadio, isCorrect);
            if (isCorrect) score++;
            
            answers[question] = {
                answer: selectedValue,
                is_correct: isCorrect
            };
        }
    });

    clearInterval(timer);
    showExplanations();
    displayResult(score);
    saveAnswers(userId, answers);
}

// Fungsi untuk menampilkan hasil
function displayResult(score) {
    const result = document.getElementById('result');
    result.textContent = `Kamu menjawab ${score} dari 5 soal dengan benar!`;
    result.style.color = score === 5 ? 'green' : 'orange';
}

// Fungsi untuk mengirim jawaban ke server menggunakan Fetch API
function saveAnswers(userId, answers) {
    fetch('save_answers.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ user_id: userId, answers: answers }),
    })
    .then(response => response.json())
    .then(data => console.log('Jawaban berhasil disimpan:', data))
    .catch(error => console.error('Error saat menyimpan jawaban:', error));
}

// Fungsi untuk menyorot jawaban
function highlightAnswer(radio, isCorrect) {
    const allLabels = document.querySelectorAll(`label[for="${radio.name}"]`);
    allLabels.forEach(label => {
        label.style.backgroundColor = '';
        label.style.color = '';
    });

    const selectedLabel = radio.parentElement;
    selectedLabel.style.backgroundColor = isCorrect ? '#4CAF50' : '#F44336';
    selectedLabel.style.color = 'white';
}

// Fungsi untuk mengelola timer
function startTimer() {
    timer = setInterval(() => {
        timeLeft--;
        updateTimerDisplay();
        if (timeLeft <= 0) {
            clearInterval(timer);
            finishQuiz();
        }
    }, 1000);
}

function updateTimerDisplay() {
    const minutes = Math.floor(timeLeft / 60);
    const seconds = timeLeft % 60;
    document.getElementById('timer').textContent = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
}

// Fungsi untuk navigasi pertanyaan
function showQuestion(index) {
    const questions = document.querySelectorAll('.question');
    questions.forEach((q, i) => {
        q.style.display = i === index ? 'block' : 'none';
    });
    updateNavButtons();
}

function updateNavButtons() {
    document.getElementById('prevBtn').disabled = currentQuestion === 0;
    document.getElementById('nextBtn').disabled = currentQuestion === 4;
}

function nextQuestion() {
    if (currentQuestion < 4) {
        currentQuestion++;
        showQuestion(currentQuestion);
    }
}

function prevQuestion() {
    if (currentQuestion > 0) {
        currentQuestion--;
        showQuestion(currentQuestion);
    }
}

// Fungsi untuk menampilkan penjelasan setelah kuis selesai
function showExplanations() {
    const explanations = {
        quiz1: "ENIAC adalah komputer elektronik pertama untuk tujuan umum.",
        quiz2: "Charles Babbage dikenal sebagai 'Bapak Komputer' karena konsep mesin analitisnya.",
        quiz3: "ALU (Arithmetic Logic Unit) adalah komponen inti dalam CPU yang melakukan operasi aritmatika dan logika.",
        quiz4: "Cloud computing memungkinkan akses sumber daya komputasi melalui internet.",
        quiz5: "Generasi kedua komputer menggunakan transistor sebagai pengganti tabung vakum."
    };

    let explanationHTML = "<h2>Penjelasan:</h2>";
    Object.entries(explanations).forEach(([question, explanation]) => {
        explanationHTML += `<p><strong>${question}:</strong> ${explanation}</p>`;
    });

    document.getElementById('explanations').innerHTML = explanationHTML;
    document.getElementById('explanations').style.display = 'block';
}

// Fungsi untuk memulai kuis
function startQuiz() {
    currentQuestion = 0;
    showQuestion(currentQuestion);
    startTimer();
    document.getElementById('startBtn').style.display = 'none';
    document.getElementById('quizContent').style.display = 'block';
}

// Fungsi untuk menyelesaikan kuis
function finishQuiz() {
    checkAnswers();
    document.getElementById('quizContent').style.display = 'none';
    document.getElementById('result').style.display = 'block';
}

// Event listener untuk tombol mulai
document.getElementById('startBtn').addEventListener('click', startQuiz);

// Event listener untuk tombol navigasi
document.getElementById('prevBtn').addEventListener('click', prevQuestion);
document.getElementById('nextBtn').addEventListener('click', nextQuestion);

// Event listener untuk tombol selesai
document.getElementById('finishBtn').addEventListener('click', finishQuiz);

// Event listener untuk responsivitas
window.addEventListener('resize', () => {
    adjustLayoutForScreenSize();
});

// Fungsi untuk menyesuaikan tata letak berdasarkan ukuran layar
function adjustLayoutForScreenSize() {
    const quizContainer = document.querySelector('.quiz-container');
    if (window.innerWidth < 768) {
        quizContainer.classList.add('mobile-layout');
    } else {
        quizContainer.classList.remove('mobile-layout');
    }
}

// Panggil fungsi ini saat halaman dimuat
document.addEventListener('DOMContentLoaded', () => {
    adjustLayoutForScreenSize();
});

let currentQuestion = 0;
let timer;
let timeLeft = 300; // 5 menit dalam detik

document.addEventListener('DOMContentLoaded', function() {
    const quizForm = document.getElementById('quizForm');
    const resultDiv = document.getElementById('result');

    const correctAnswers = {
        quiz1: 'eniac',
        quiz2: 'babbage',
        quiz3: 'alu',
        quiz4: 'cloud',
        quiz5: 'second',
        quiz6: 'central',
        quiz7: 'os',
        quiz8: 'ram',
        quiz9: 'javascript',
        quiz10: 'security'
    };

    quizForm.addEventListener('submit', function(e) {
        e.preventDefault();
        let score = 0;
        const userAnswers = new FormData(quizForm);

        for (let [name, value] of userAnswers) {
            if (value === correctAnswers[name]) {
                score++;
            }
        }

        const percentage = (score / 10) * 100;
        resultDiv.innerHTML = `<h2>Hasil Kuis</h2>
                               <p>Anda menjawab ${score} dari 10 pertanyaan dengan benar.</p>
                               <p>Nilai Anda: ${percentage}%</p>`;
        resultDiv.style.display = 'block';
    });
});