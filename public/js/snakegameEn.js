var BLOCK_SIZE = 20;
var BLOCK_COUNT = 20;

var gameInterval;
var snack;
var apple;
var score;
var level;

function gameStart() {
    document.body.style.overflow = "hidden";
    document.getElementById("restartbtn").style.display = "none";
    snack = {
        body: [{ x: BLOCK_COUNT / 2, y: BLOCK_COUNT / 2 }],
        size: 5,
        direction: { x: 0, y: -1 },
    };

    putApple();
    updateScore(0);
    updateGameLevel(1);
}

function updateGameLevel(newLevel) {
    level = newLevel;

    if (gameInterval) {
        clearInterval(gameInterval);
    }
    gameInterval = setInterval(gameRoutine, 2000 / (10 + level));
}
//
function updateScore(newScore) {
    score = newScore;
    document.getElementById("score_id").innerHTML = "Now Score :" + score;
}

function putApple() {
    apple = {
        x: Math.floor(Math.random() * BLOCK_COUNT),
        y: Math.floor(Math.random() * BLOCK_COUNT),
    };
    //check whether the apple is generate on the snake or not
    //use for loobF
    // check each snack.body[i]  === apple location
    for (var i = 0; i < snack.body.length; i++) {
        // if generate on the snake, generate again
        if (snack.body[i].x === apple.x && snack.body[i].y === apple.y) {
            putApple();
            break;
        }
    }
}

//if sanke eat apple size +1 and generate new apple
function eatApple() {
    snack.size += 1;
    putApple();
    updateScore(score + 1);
}

function gameRoutine() {
    moveSnack();

    if (snackIsDead()) {
        ggler();
        return;
    }

    if (snack.body[0].x === apple.x && snack.body[0].y === apple.y) {
        eatApple();
    }

    updateCanvas();
}
//check the sanke is touch the wall or body or not
function snackIsDead() {
    // hit walls
    if (snack.body[0].x < 0) {
        return true;
    } else if (snack.body[0].x >= BLOCK_COUNT) {
        return true;
    } else if (snack.body[0].y < 0) {
        return true;
    } else if (snack.body[0].y >= BLOCK_COUNT) {
        return true;
    }

    // hit body
    for (var i = 1; i < snack.body.length; i++) {
        if (
            snack.body[0].x === snack.body[i].x &&
            snack.body[0].y === snack.body[i].y
        ) {
            return true;
        }
    }

    return false;
}

function ggler() {
    document.body.style.overflow = "auto";
    clearInterval(gameInterval);
    document.getElementById("score_id").innerHTML = "Final Score :" + score;
    document.getElementById("restartbtn").style.display = "block";
    document.getElementById("restartbtn").innerHTML = "重新開始";
}

function moveSnack() {
    var newBlock = {
        x: snack.body[0].x + snack.direction.x,
        y: snack.body[0].y + snack.direction.y,
    };

    snack.body.unshift(newBlock);

    while (snack.body.length > snack.size) {
        snack.body.pop();
    }
}

function updateCanvas() {
    var canvas = document.getElementById("canvas_id");
    var context = canvas.getContext("2d");

    context.fillStyle = "black";
    context.fillRect(0, 0, canvas.width, canvas.height);

    context.fillStyle = "lime";
    for (var i = 0; i < snack.body.length; i++) {
        context.fillRect(
            snack.body[i].x * BLOCK_SIZE + 1,
            snack.body[i].y * BLOCK_SIZE + 1,
            BLOCK_SIZE - 1,
            BLOCK_SIZE - 1
        );
    }

    context.fillStyle = "red";
    context.fillRect(
        apple.x * BLOCK_SIZE + 1,
        apple.y * BLOCK_SIZE + 1,
        BLOCK_SIZE - 1,
        BLOCK_SIZE - 1
    );
}
//listen wheater the use press a key of not
window.onload = onPageLoaded;
//if  press a key execute a function
function onPageLoaded() {
    document.addEventListener("keydown", handleKeyDown);
}
// if press up/ down/ left /right arrow change snake direction

function handleKeyDown(event) {
    var originX = snack.direction.x;
    var originY = snack.direction.y;
    // x=== 1 snake is moving  left
    if (snack.direction.x === 1 && snack.direction.y === 0) {
        if (event.keyCode === 38) {
            //up arrow
            snack.direction.x = 0;
            snack.direction.y = -1;
        } else if (event.keyCode === 40) {
            //down arrow
            snack.direction.x = 0;
            snack.direction.y = 1;
        }
        // x=== -1 snake is moving  right
    } else if (snack.direction.x === -1 && snack.direction.y === 0) {
        if (event.keyCode === 38) {
            //up arrow
            snack.direction.x = 0;
            snack.direction.y = -1;
        } else if (event.keyCode === 40) {
            //down arrow
            snack.direction.x = 0;
            snack.direction.y = 1;
        }
    }
    // y=== 1 snake is moving  down
    if (snack.direction.x === 0 && snack.direction.y === 1) {
        if (event.keyCode === 39) {
            //up arrow
            snack.direction.x = 1;
            snack.direction.y = 0;
        } else if (event.keyCode === 37) {
            //down arrow
            snack.direction.x = -1;
            snack.direction.y = 0;
        }
        // y=== 1 snake is moving up
    } else if (snack.direction.x === 0 && snack.direction.y === -1) {
        if (event.keyCode === 37) {
            //up arrow
            snack.direction.x = -1;
            snack.direction.y = 0;
        } else if (event.keyCode === 39) {
            //down arrow
            snack.direction.x = 1;
            snack.direction.y = 0;
        }
    }
}
