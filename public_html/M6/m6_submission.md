<table><tr><td> <em>Assignment: </em> HW HTML5 Canvas Game</td></tr>
<tr><td> <em>Student: </em> Adam Ramsey(amr93)</td></tr>
<tr><td> <em>Generated: </em> 3/27/2022 3:25:19 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-002-S22/hw-html5-canvas-game/grade/amr93" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Create a branch for this assignment called <em>M6-HTML5-Canvas</em></li>
<li>Pick a base HTML5 game from <a href="https://bencentra.com/2017-07-11-basic-html5-canvas-games.html">https://bencentra.com/2017-07-11-basic-html5-canvas-games.html</a></li>
<li>Create a folder inside public_html called  <em>M6</em></li>
<li>Create an html5.html file in your M6 folder (do not put it in Project even if you&#39;re doing arcade)</li>
<li>Copy one of the base games (from the above link)</li>
<li>Add/Commit the baseline of the game you&#39;ll mod for this assignment <em>(Do this before you start any mods/changes)</em></li>
<li>Make two significant changes<ol>
<li>Static changes like hard-coded colors/values will not count at all (i.e., changing shapes/colors/values that are globally defined and set only once.</li>
<li>Direct copies of my class example changes will not be accepted (i.e., just having an AI player for pong, rotating canvas, or multi-ball unless you make a significant tweak to it)</li>
<li>Significant changes are things that change with game logic or modify how the game works. Static changes like hard-coded colors/values will not count at all (i.e., changing shapes/colors/values that are globally defined and set only once). You may however change such values through game logic during runtime. (i.e., when points are scored, boundaries are hit, some action occurs, etc)</li>
</ol>
</li>
<li>Evidence/Screenshots<ol>
<li>As best as you can, gather evidence for your first significant change and fill in the deliverable items below.</li>
<li>As best as you can, gather evidence for your significant change and fill in the deliverable items below.</li>
<li>Remember to include your ucid/date as comments in any screenshots that have code</li>
<li>Ensure your screenshots load and are visible from the md file in step 9</li>
</ol>
</li>
<li>In the M6 folder create a new file called m6_submission.md</li>
<li>Save your below responses, generate the markdown, and paste the output to this file</li>
<li>Add/commit/push all related files as necessary</li>
<li>Merge your pull request once you&#39;re satisfied with the .md file and the canvas game mods</li>
<li>Create a new pull request from dev to prod and merge it</li>
<li>Locally checkout dev and pull the merged changes from step 12</li>
</ol>
<p>Each missed or failed to follow instruction is eligible for -0.25 from the final grade</p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Game Info </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> What game did you pick to edit/modify?</td></tr>
<tr><td> <em>Response:</em> <p>Collect the Square Game.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the direct link to the html5.html file from Heroku Prod (i.e., https://mt85-prod.herokuapp.com/M6/html5.html)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://amr93-prod.herokuapp.com/M6/html5.html">https://amr93-prod.herokuapp.com/M6/html5.html</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the pull request link for this assignment from M6-HTML5-Canvas to dev</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/amr93njit/IT202-002/pull/36">https://github.com/amr93njit/IT202-002/pull/36</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Significant Change #1 </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Describe your change/modification</td></tr>
<tr><td> <em>Response:</em> <p>Added another square that can be collided with that ends the game. To<br>offset the immediate game over, a lives system is added and three lives<br>are given. Colliding with the red square (the user square is recolored blue)<br>causes a life to be deducted. The title screen is adjusted to explain<br>to the user what the change is.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Screenshot of the change while playing (try your best as some changes may be nearly impossible to capture)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/160295556-0275ac49-34f0-420f-a49e-1df28aa57a22.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Beginning of the game, showing a score of 0 and the immediately granted<br>three lives.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/160296156-a2a45444-f0e7-4ce1-a2bd-0df4dfc6fbee.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Revised title screen, better explaining what the objective of the game is.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Screenshot of the relevant lines of code that implement your change (make sure your ucid and the date are shown in comments) In the caption briefly describe/explain how the code snippet works.</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/160295828-d9a5b298-4475-41d2-b4a0-269ae50b9e3c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Sets up lives variables and the .  The enemy is drawn in<br>the same way as the target square, but red instead of green. The<br>last part is responsible for colliding with the enemy square, which, upon doing<br>so, will deduct a life and call the moveTarget() function, moving both the<br>enemy and target squares randomly.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/160295866-e7651ec7-ad5b-4068-9d9f-bc42d8ee3666.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Sets up the properties of the enemy square, which are identical to the<br>target square<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/160295904-3881affa-67a5-44fb-a10a-b9e102cb87de.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The moveTarget() function has been adjusted to also move the enemy square whenever<br>called, changing the position of both. Additionally, to somewhat prevent both squares from<br>overlapping eachother, the function is called recusively if their X and Y values<br>are identical.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/160295986-721b47e0-afda-49bb-bdce-c80b8748e9c9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Collision for the enemy square, identical to the collision statement for the target<br>square with the exception that a life is deducted upon collision. Both enemy<br>and target squares have their position changed with the moveTarget() function if the<br>enemy square is collided with.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/160296039-519c0d4a-d49a-4325-8bec-51ba583720cb.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Instead of the game ending on the time remaining being less than or<br>equal to 0, it ends when the lives counter is less than or<br>equal to 0.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/160296062-f6a62507-0890-4a8d-87b9-2c2b5d192476.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Miscellaneous change. The game&#39;s title screen better represents what the objective of the<br>game is by stating that the user must collect the green square and<br>not the red square.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/160296571-ff292273-fd6b-4db3-a904-59ad2f8a7a5c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Miscellaneous change. The game&#39;s UI is adjusted to show the lives remaining in<br>addition to the total score.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/160297000-cc6e1554-3316-4db1-adb0-7a3badfdb7e0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Top part shows a miscellaneous change, where the color of the player square<br>is remade to blue to avoid confusion of which squares are the enemy<br>(red) and which are the target (green). Additionally, the enemy square is drawn,<br>being identical to the target square with the exception of its color being<br>red.<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Significant Change #2 </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Describe your change/modification</td></tr>
<tr><td> <em>Response:</em> <p>Removed the countdown and added a timer to replace it, making the game<br>run forever and changing the dynamic of the game to survival. Every 5<br>seconds, the score is incremented. Every 10 seconds, the size of the aforementioned<br>enemy square is increased alongside the score. At the end of the game,<br>the time elapsed is shown alongside the final score.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Screenshot of the change while playing (try your best as some changes may be nearly impossible to capture)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/160296190-960e39de-17d4-4ac6-af93-2a1f8f686de4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>An in-progress game, where 12 seconds have elapsed, the green square has been<br>hit six times and increased the score to a respective six, and the<br>red square has been hit twice and thereby deducted two of the three<br>total lives.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/160296372-87aa5478-7b56-4b46-9849-cc12eaf385b9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Game-over screen, showing the time elapsed alongside the total score. In this game,<br>two seconds had elapsed and the green square was hit three times before<br>the life counter had been reduced to zero.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Screenshot of the relevant lines of code that implement your change (make sure your ucid and the date are shown in comments) In the caption briefly describe/explain how the code snippet works.</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/160296242-4030485b-69b1-440a-a983-cf6a92e30f5b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Two new variables are added; timer and flag. Timer is responsible for keeping<br>track of the seconds passed whilst flag is used to enforce that time<br>based statements only occur once.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/160296291-8f2b7d74-a0e3-4636-84e6-a63881bc18c2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The startGame() function is revised to have the timer increment, rather than the<br>countdown decrementing, and sets the flag to the condition of 1. At a<br>value of 1, the flag is in a state where time based occurence<br>statements will utilize it.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/160296423-d0b0d818-7086-4471-afe0-15f488d02f36.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>If statements for time based occurences. The first statement only passes if the<br>timer is divisible by 10, the timer is not at 0, the flag<br>is set to 1, and the size of the enemy square is not<br>at 100. Once passed, the size of the enemy square is increased by<br>5, the score by 1, and the flag is reset to 0. The<br>enemy square will have a maximum size of 100, and if has been<br>reached, the statement will be forced to always use the else if statement,<br>which only passes if the timer is divisible by 5, the timer is<br>not at 0, and the flag is at 1. This call is designed<br>to increase the score by 1 in every other case. The flag is<br>used here to prevent the score from increasing by 1 for the duration<br>of a second rather than once per second. After being reset back to<br>0, a false state, it must be set back to 1, a true<br>state, when the timer is incremented, which stops the duration issue from occuring.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/160296578-a8da6e5a-f35e-4692-8393-71e3ac4ef0e9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Miscellaneous change. The UI at the top is adjusted to show both the<br>lives remaining and the time elapsed.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/160296612-46b011d5-6eb4-4dbc-a8cb-96970deb1e3f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Miscellaneous change. The game over screen is adjusted to show both the total<br>score and the time elapsed.<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Discuss </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Talk about what you learned during this assignment and the related HTML5 Canvas readings (at least a few sentences for full credit)</td></tr>
<tr><td> <em>Response:</em> <p>From this assignment, the thing I learned the most was how an if<br>statement can repeatedly be called for the entire duration of a second, or<br>any amount of time, depending on the circumstance. I was aiming to have<br>a statement only pass if the timer was at a certain number, but<br>by using my own integer variable and not using a built-in function for<br>doing so, it would repeatedly pass for the entire duration of that integer<br>being the desired value. Using a flag was useful for resolving this problem.</p><br><p>From<br>the related canvas readings, I had been able to learn how to use<br>a canvas to not only write text, but to also run a &quot;game&quot;<br>on it. Although crude, the game was able to keep score through a<br>counter and recognize collision, through use of a function I also learned how<br>to use in the form of isWithin.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-002-S22/hw-html5-canvas-game/grade/amr93" target="_blank">Grading</a></td></tr></table>