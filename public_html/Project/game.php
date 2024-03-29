<?php
require(__DIR__ . "/../../partials/nav.php");
require(__DIR__ . "/../../partials/flash.php");
?>
<html>
<head>
<body onload = "init();">
	<main>
		<canvas id="canvas" width="600" height="400" tabindex="1"></canvas>
		</canvas>
	</main>
	</body>
<style>
#canvas {
  width: 600px;
  height: 400px;
  border: 1px solid black;
}
</style>
	<script>
		// Collect The Square game

		// Get a reference to the canvas DOM element
		var canvas = document.getElementById('canvas');
		// Get the canvas drawing context
		var context = canvas.getContext('2d');

		// Your score
		var score = 0;

		/* amr93 | 3/27/2022
		   Your lives - when at 0, game ends */
		var lives = 3;
	
		// Properties for your square
		var x = 50; // X position
		var y = 100; // Y position
		var speed = 6; // Distance to move each frame
		var sideLength = 50; // Length of each side of the square

		// Flags to track which keys are pressed
		var down = false;
		var up = false;
		var right = false;
		var left = false;

		// Properties for the target square
		var targetX = 0;
		var targetY = 0;
		var targetLength = 25;

		/* amr93 | 3/27/2022
		   Properties for the enemy square */
		var enemyX = 0;
		var enemyY = 0;
		var enemyLength = 25;

		// Determine if number a is within the range b to c (exclusive)
		function isWithin(a, b, c) {
			return (a > b && a < c);
		}

		/* amr93 | 3/27/2022
		   Timer, counting the time elapsed (in seconds)
		   Flag, preventing issues with timer and related duration. */
		var timer = 0;
		var flag = 0;
		// ID to track the setTimeout
		var id = null;

		// Listen for keydown events
		canvas.addEventListener('keydown', function(event) {
		event.preventDefault();
		console.log(event.key, event.keyCode);
		if (event.keyCode === 40) { // DOWN
			down = true;
		}
		if (event.keyCode === 38) { // UP
			up = true;
		}
		if (event.keyCode === 37) { // LEFT
			left = true;
		}
		if (event.keyCode === 39) { // RIGHT
			right = true;
		}
		});

		// Listen for keyup events
		canvas.addEventListener('keyup', function(event) {
			event.preventDefault();
			console.log(event.key, event.keyCode);
			if (event.keyCode === 40) { // DOWN
				down = false;
			}
			if (event.keyCode === 38) { // UP
				up = false;
			}
			if (event.keyCode === 37) { // LEFT
				left = false;
			}
			if (event.keyCode === 39) { // RIGHT
				right = false;
			}
		});

		// Show the start menu
		function menu() {
			erase();
			context.fillStyle = '#000000';
			context.font = '36px Arial';
			context.textAlign = 'center';
			/* amr93 | 3/27/2022
			   Adjusted title screen to better represent the objective of the game */
			context.fillText('Collect the Green Square!', canvas.width / 2, (canvas.height / 4)-10);
			context.font = '20px Arial';
			context.fillText('and avoid the Red Square!', canvas.width /2, (canvas.height / 4)+25);

			context.font = '24px Arial';
			context.fillText('Click to Start', canvas.width / 2, canvas.height / 2);
			context.font = '18px Arial'
			context.fillText('Use the arrow keys to move', canvas.width / 2, (canvas.height / 4) * 3);
			// Start the game on a click
			canvas.addEventListener('click', startGame);
		}

		// Start the game
		function startGame() {
			/* amr93 | 3/27/2022
			   Increase the timer every second. Flag adjusted here to allow later statements to occur only once. */
			id = setInterval(function() {
				timer++;
				flag=1;
			}, 1000)

			// Stop listening for click events
			canvas.removeEventListener('click', startGame);
			// Put the target at a random starting point
				moveTarget();
				moveEnemy(); //
			// Kick off the draw loop
			draw();
		}

		// Show the game over screen
		function endGame() {
			// Stop the timer
			clearInterval(id);
			// Display the final score
			erase();
			context.fillStyle = '#000000';
			context.font = '24px Arial';
			context.textAlign = 'center';
			/* amr93 | 3/27/2022
			   Adjusting game over screen to include "time elapsed" with score */
			context.fillText('Final Score: ' + score, canvas.width / 2, (canvas.height / 2) -15);
			context.fillText('Time Elapsed (s): ' + timer, canvas.width / 2, (canvas.height / 2) +15);
			
			/* amr93 | 4/16/2022 
			   Upon game completion, add scores to scores table. */
			postData({
				score: score,
			}, "/Project/api/save_score.php").then(data => {
				console.log(data);
				//quick, brief example (you wouldn't want to use alert)
				if (data.status === 200) {
					//saved successfully
					flash(data.message);
				} else {
					//some error occurred, maybe want to handle it before resetting
					flash(data.message);
				}
			})
		}

		// Move the target square to a random position
		function moveTarget() {
			targetX = Math.round(Math.random() * canvas.width - targetLength);
			targetY = Math.round(Math.random() * canvas.height - targetLength);
		}
		function moveEnemy() {
			enemyX = Math.round(Math.random() * canvas.width - enemyLength);
			enemyY = Math.round(Math.random() * canvas.height - enemyLength);
		}

		// Clear the canvas
		function erase() {
			context.fillStyle = '#FFFFFF';
			context.fillRect(0, 0, 600, 400);
		}

		// The main draw loop
		function draw() {
			erase();
			// Move the square
			if (down) {
				y += speed;
			}
			if (up) {
				y -= speed;
			}
			if (right) {
				x += speed;
			}
			if (left) {
				x -= speed;
			}
			// Keep the square within the bounds
			if (y + sideLength > canvas.height) {
				y = canvas.height - sideLength;
			}
			if (y < 0) {
				y = 0;
			}
			if (x < 0) {
				x = 0;
			}
			if (x + sideLength > canvas.width) {
				x = canvas.width - sideLength;
			}
			// Collide with the target
			if (isWithin(targetX, x, x + sideLength) || isWithin(targetX + targetLength, x, x + sideLength)) { // X
				if (isWithin(targetY, y, y + sideLength) || isWithin(targetY + targetLength, y, y + sideLength)) { // Y
				// Respawn the target
				moveTarget();
				moveEnemy(); //
				// Increase the score
				score++;
				}
			}

			/* amr93 | 3/27/2022
			   Collide with the enemy square */
			if (isWithin(enemyX, x, x + sideLength) || isWithin(enemyX + enemyLength, x, x + sideLength)) { // X
				if (isWithin(enemyY, y, y + sideLength) || isWithin(enemyY + enemyLength, y, y + sideLength)) { // Y
				//Move square
					moveTarget();
					moveEnemy(); //
				// Remove a life
					lives--; 
				}
			}

			/* amr93 | 3/27/2022
			   Time based occurences. Flag variable to have if statements only occur once per time condition.
			   i.e. work once per second, not for the duration of a second. 
			   amr93 | 4/15/2022
			   Removed score increment on time. Encouraged player to stand still and do nothing to get a high score.
			*/
			// For every 10 seconds that pass, the size of the enemy square increases. Stop at size 100
			if (timer%10==0 && timer!=0 && flag==1 && enemyLength!=100) {
				enemyLength+=5;
				//score++		//Related to else if statement
				flag=0;
			}
			/* For every 5 seconds that pass, the score increases.
			else if (timer%5==0 && timer!=0 && flag==1) {
				//score++;
				flag=0;
			}*/
			
			// Draw the square
			context.fillStyle = '#0000FF';
			context.fillRect(x, y, sideLength, sideLength);
			// Draw the target 
			context.fillStyle = '#00FF00';
			context.fillRect(targetX, targetY, targetLength, targetLength);

			/* amr93 | 3/27/2022
			   Draw the enemy */
			context.fillStyle = '#FF0000';
			context.fillRect(enemyX, enemyY, enemyLength, enemyLength);

			// Draw the score
			context.fillStyle = '#000000';
			context.font = '24px Arial';
			context.textAlign = 'left';
			context.fillText('Score: ' + score, 10, 24);
			
			/* amr93 | 3/27/2022
			   Adjusted canvas to show lives remaining and time elapsed */
			context.fillText('Lives Remaining: ' + lives, 10, 50)
			context.fillText('Time Elapsed: ' + timer, 10, 78);

			// End the game or keep playing
			/*amr93 | 3/27/2022
			  Changed game condition to be based on lives.*/
			if (lives <= 0) {
				endGame();
			} else {
				window.requestAnimationFrame(draw);
			}
		}

		// Start the game
		menu();
		canvas.focus();

		/* amr93 | 4/16/2022
		   Function for sending scores to table. */
		async function postData(data = {}, url = "/Project/api/save_score.php") {
			console.log(Object.keys(data).map(function(key) {
				return "" + key + "=" + data[key]; // line break for wrapping only
			}).join("&"));
			const response = await fetch(url, {
				method: 'POST', // *GET, POST, PUT, DELETE, etc.
				mode: 'cors', // no-cors, *cors, same-origin
				cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
				credentials: 'same-origin', // include, *same-origin, omit
				headers: {
					'Content-Type': 'application/x-www-form-urlencoded',
				},
				redirect: 'follow', // manual, *follow, error
				referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
				body: Object.keys(data).map(function(key) {
					return "" + key + "=" + data[key]; // line break for wrapping only
				}).join("&") //JSON.stringify(data) // body data type must match "Content-Type" header
			});
			return response.json(); // parses JSON response into native JavaScript objects
		}
	</script>
</head>
</html>
