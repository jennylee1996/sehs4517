var questions = [
    {
        question:
            "What are the main causes of fatty liver? Which of the following is wrong?",
        options: [
            "Excessive drinking",
            "Malnutrition",
            "Hyperlipidemia",
            "Diabetes",
        ],
        answer: "Malnutrition",
    },
    {
        question:
            "What is the <b style='font-size:22.5px'>largest </b>organ in the human body? ",
        options: ["brain", "skin", "heart", "lungs"],
        answer: "skin",
    },
    {
        question:
            "Which of the following protective measures are incorrect during menstruation?",
        options: [
            "Shower",
            "eat ice",
            "stretch",
            "change sanitary napkins regularly",
        ],
        answer: "eat ice",
    },
    {
        question:
            "Do one of the following activities to produce <b style='font-size:22.5px'>the most </b>dopamine",
        options: [
            "Playing games",
            "Smoking methamphetamine",
            "Passing exams",
            "Falling in love",
        ],
        answer: "Smoking methamphetamine",
    },
    {
        question:
            "How many minutes of rest should be taken after every 30 minutes of gaming?",
        options: ["5 minutes", "10 minutes", "15 minutes", "20 minutes"],
        answer: "10 minutes",
    },
    {
        question:
            "Do one of the following activities to produce <b style='font-size:22.5px'>the least </b>amount of dopamine",
        options: [
            "Falling in love",
            "Passing exams",
            "Smoking marijuana",
            "Playing games",
        ],
        answer: "Smoking marijuana",
    },
    {
        question: "What are the benefits of quitting smoking?",
        options: [
            "Reduce medical expenses",
            "Remove bad breath",
            "More expenses",
            "Will not cause secondhand smoke to harm others",
        ],
        answer: "More expenses",
    },
    {
        question: "Which of the following is not a benefit of drinking water?",
        options: [
            "Gain weight",
            "Regulate body temperature",
            " Improve constipation",
            "Transport body nutrients",
        ],
        answer: "Gain weight",
    },
    {
        question: "Which of the following diseases can obesity cause?",
        options: [
            "Fat Nerd Anger Syndrome",
            "Fat Nerd Fear syndrome",
            "Fat Nerd Happy Syndrome",
            "Fat Nerd Sad syndrome",
        ],
        answer: "Fat Nerd Happy Syndrome",
    },
    {
        question:
            "What kind of drinks can be dangerous or even fatal to mix with medications? ",
        options: ["Saliva", "Juice", "Wine", "Milk"],
        answer: "Wine",
    },
];

var currentQuestion = 0;
var score = 0;

var startButton = document.getElementById("startButton");
var nextButton = document.getElementById("nextButton");
var restartButton = document.getElementById("restartButton");
var questionElement = document.getElementById("question");
var optionsElement = document.getElementById("options");
var resultElement = document.getElementById("result");
//add onclick on the start btn
startButton.addEventListener("click", startQuiz);
//add onclick on the next btn
nextButton.addEventListener("click", loadNextQuestion);
//add onclick on the restart btn
restartButton.addEventListener("click", restartQuiz);

restartButton.setAttribute("class", "btn btn-primary btn-sm");
startButton.setAttribute("class", "btn btn-primary btn-lg btn-block");
nextButton.setAttribute("class", "btn btn-primary btn-sm");
//
function startQuiz() {
    startButton.style.display = "none";
    restartButton.style.display = "none";
    loadQuestion();
}

// load question
function loadQuestion() {
    questionElement.innerHTML = questions[currentQuestion].question;
    optionsElement.innerHTML = "";

    for (var i = 0; i < questions[currentQuestion].options.length; i++) {
        var option = document.createElement("button");
        option.innerHTML = questions[currentQuestion].options[i];
        option.value = questions[currentQuestion].options[i];
        option.setAttribute("class", "btn btn-outline-primary");
        option.setAttribute("id", "InOptions");
        //add onclick on the option btn
        option.addEventListener("click", selectOption);
        //place in to option
        optionsElement.appendChild(option);
    }

    nextButton.style.display = "none";
    resultElement.innerHTML = "";
}

// click the option
function selectOption() {
    var selectedOption = this.value;

    if (selectedOption === questions[currentQuestion].answer) {
        resultElement.innerHTML = "<b >Correct!</b>";
        score++;
    } else {
        resultElement.innerHTML = "<b >Wrong!</b>";
    }

    nextButton.style.display = "block";
    // disable the answer btn
    disableOptions();
}

// disable the answer btn
function disableOptions() {
    var options = optionsElement.getElementsByTagName("button");

    for (var i = 0; i < options.length; i++) {
        options[i].disabled = true;
    }
}

//click the next btn
function loadNextQuestion() {
    currentQuestion++;
    // end the wuiz
    if (currentQuestion >= questions.length) {
        endQuiz();
    } else {
        // load next question
        loadQuestion();
    }
}

// show result
function endQuiz() {
    questionElement.innerHTML =
        "Quiz completed! Your score is: " + score + "/" + questions.length;
    optionsElement.innerHTML = "";
    if (score == 0 || score <= 3) {
        resultElement.innerHTML = "Too bad!!! You are a fool!!!";
    }
    if (score > 3 && score <= 5) {
        resultElement.innerHTML = "Bad!!! You are an idiot!!!";
    }
    if (score == 6 || score == 7) {
        resultElement.innerHTML = "Passed!!! You are normal!!!";
    }
    if (score == 9 || score == 8) {
        resultElement.innerHTML = "Awesome!!! You are  smart!!!";
    }
    if (score == 10) {
        resultElement.innerHTML = "Totally correct!!! You are a genius!!!";
    }
    nextButton.style.display = "none";
    restartButton.style.display = "block";
}

// restart
function restartQuiz() {
    currentQuestion = 0;
    score = 0;
    restartButton.style.display = "none";
    startQuiz();
}
