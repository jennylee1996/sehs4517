var questions = [
    {
        question: "造成脂肪肝的主要原因為何？下列何者為非？",
        options: ["飲酒過量", "營養不良", "高血脂", "糖尿病"],
        answer: "營養不良",
    },
    {
        question: "人體體內的最<b style='font-size:22.5px'>大</b>器官為何？ ",
        options: ["腦", "皮膚", "心", "肺"],
        answer: "皮膚",
    },
    {
        question: "月經來時，下列何種防護措施有誤？",
        options: ["淋浴", "吃冰", "伸展運動", "定期更換衛生棉"],
        answer: "吃冰",
    },
    {
        question:
            "進行以下那一樣活動，產生最<b style='font-size:22.5px'>多</b>多巴胺",
        options: ["打遊戲", "吸食冰毒", "通過考試", "談戀愛"],
        answer: "吸食冰毒",
    },
    {
        question: "每打30分鐘遊戲後，應該要休息幾分鐘？",
        options: ["5分鐘", "10分鐘", "15分鐘", "20分鐘"],
        answer: "10分鐘",
    },
    {
        question:
            "進行以下那一樣活動，產生最<b style='font-size:22.5px'>少</b>多巴胺",
        options: ["談戀愛", "通過考試", "吸食大麻", "打遊戲"],
        answer: "吸食大麻",
    },
    {
        question: "何者不是戒菸的好處？",
        options: [
            "減少醫療費用",
            "去除口臭",
            "花費變多",
            "不會造成二手菸危害他人",
        ],
        answer: "花費變多",
    },
    {
        question: "下列那一項不是喝水的好處？",
        options: ["增加體重", "調節體溫", " 改善便秘", "運輸身體養份"],
        answer: "增加體重",
    },
    {
        question: "肥胖會引導致以下那一種病?",
        options: [
            "肥宅憤怒綜合症",
            "肥宅害怕綜合症",
            "肥宅快樂綜合症",
            "肥宅傷心綜合症",
        ],
        answer: "肥宅快樂綜合症",
    },
    {
        question: "服用藥物時，混和什麼飲品會容易產生危險，甚至會致命？ ",
        options: ["口水", "果汁", "酒", "牛奶"],
        answer: "酒",
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
        resultElement.innerHTML = "Correct!";
        score++;
    } else {
        resultElement.innerHTML = "Wrong!";
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
        resultElement.innerHTML = "太差了!!!你是傻瓜!!!";
    }
    if (score > 3 && score <= 5) {
        resultElement.innerHTML = "有點差!!!你是笨蛋!!!";
    }
    if (score == 6 || score == 7) {
        resultElement.innerHTML = "合格!!!你是正常人!!!";
    }
    if (score == 9 || score == 8) {
        resultElement.innerHTML = "你真捧!!!你很聰明!!!";
    }
    if (score == 10) {
        resultElement.innerHTML = "全對!!!你是天才!!!";
    }

    nextButton.style.display = "none";
    restartButton.style.display = "block";
}

// restart
function restartQuiz() {
    currentQuestion = 0;
    score = 0;
    restartButton.style.display = "none";
    resultElement.innerHTML = "";
    startQuiz();
}
