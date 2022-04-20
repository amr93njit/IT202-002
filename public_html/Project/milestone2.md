<table><tr><td> <em>Assignment: </em> IT202 Milestone 2 Arcade Project</td></tr>
<tr><td> <em>Student: </em> Adam Ramsey(amr93)</td></tr>
<tr><td> <em>Generated: </em> 4/18/2022 11:20:20 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-002-S22/it202-milestone-2-arcade-project/grade/amr93" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone2 branch </li>
<li>Create a new markdown file called milestone2.md</li>
<li>git add/commit/push immediate</li>
<li>Fill in the milestone2.md link (from Milestone2) into the proposal.md file under each milestone2 feature</li>
<li>For each feature in the proposal add a related direct link to Heroku prod for a file related to it the feature</li>
<li>Fill in the below deliverables</li>
<li>At the end copy the markdown and paste it into milestone2.md</li>
<li>Add/commit/push the changes to Milestone2</li>
<li>PR Milestone2 to dev and verify</li>
<li>PR dev to prod and verify</li>
<li>Checkout dev locally and pull changes to get ready for Milestone 3</li>
<li>Submit the direct link to this new milestone2.md file from your GitHub prod branch to Canvas</li>
</ol>
<p>Note: Ensure all images appear properly on github and everywhere else.
Images are only accepted from dev or prod, not local host.
All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod). </p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Pick a game... </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> What game will you be doing?</td></tr>
<tr><td> <em>Response:</em> <p>Collect the Square<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly describe it and its mechanics</td></tr>
<tr><td> <em>Response:</em> <p>The player controls a blue square and their objective is to collect green<br>squares and avoid red squares. Hitting a green square increments the score by<br>one and hitting a red square decrements the lives counter by 1. The<br>game goes on infinitely and every ten seconds the size of the red<br>square slightly increases.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot showing something of the game</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/163912159-355576ed-a820-4c42-90d9-caa9c3905b17.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>In-progress game where 3 green squares have been collected, 0 red squares have<br>been hit and therefore 3 lives are remaining, and 6 seconds of time<br>have elapsed.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/amr93njit/IT202-002/pull/51">https://github.com/amr93njit/IT202-002/pull/51</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://amr93-prod.herokuapp.com/Project/game.php">https://amr93-prod.herokuapp.com/Project/game.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Saving Score </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing a notice telling the user their score was saved</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="//(THIS IS NOT A VALID URL) See: Deliverable 2: Sub-Task 2 for the screenshot on the score being saved.">(THIS IS NOT A VALID URL) See: Deliverable 2: Sub-Task 2 for the screenshot on the score being saved.</a> </td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a notice telling the user their score wasn't saved because they're logged out</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/163912520-85f2db79-73a1-4489-a715-df8a8f61cc1e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>A message is displayed to the user indicating that their score was not<br>saved because they were not logged in.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/163912565-391ecc41-d6f3-4991-ab4a-61e5fd01545b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>A message is displayed to the user indicating that their score was saved<br>because they were logged in. (This screenshot is in this sub-task as sub-task<br>1 is for URLs and not screenshots.)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of your scores table with some score entries (preferably different users with multiple scores each)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/163904322-3d982174-23fd-4fbe-be95-ca32dd01e43d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Scores table with input from 3 different users. The highest score, 39, by<br>user_id 13 was changed to have occured a month prior to show evidence<br>for other tables.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly describe the code flow of saving a score from the game</td></tr>
<tr><td> <em>Response:</em> <p>Upon the game ending, a call is made to the async function postData.<br>The data being recorded is only the score but parameters are left to<br>be easily modified in the future if need be. The function also works<br>closely with &#39;save_score.php&#39;, which functions as an API. AJAX is used in the<br>form of fetch, where a POST form containing the score is sent to<br>the &#39;save_score.php&#39; API in the form of JSON. The API then simply adds<br>the score to the table alongside the user&#39;s ID and the date of<br>the score taking place. If the user is not logged in, the score<br>is not added to the database and an accompanying message is displayed.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/amr93njit/IT202-002/pull/52">https://github.com/amr93njit/IT202-002/pull/52</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User's last 10 scores </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the latest scores for the user from their profile page (show at least a few scores)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/163912620-9da2d3ec-7bb0-4e5d-9145-73ca6585fdd7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Profile page of a user showing their latest 10 scores. One of their<br>latest scores happens to also be their best score.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the scores are being pulled and displayed</td></tr>
<tr><td> <em>Response:</em> <p>In the user&#39;s profile page, a call is made to show their best<br>score via &#39;get_best_score&#39; and a call to the latest score data table. The<br>latest call is sent to the partial file &#39;scores_table.php&#39; which checks to see<br>which table is being called, and upon getting the call for &quot;latest&quot;, moves<br>to the lib file &#39;score_helpers.php&#39;. This is where the &#39;get_best_score&#39; function immediately calls<br>to, which searches the scores table for the user&#39;s highest score. For the<br>latest table, the scores table is checked for the user&#39;s last ten scores.<br></p><br><p>In both cases, the same logic is applied to check the table. The<br>SQL server is queried to check for either which score is the highest<br>or which scores were created most recently. A statement is prepared and then<br>a try statement is used to execute the statement and fetchall data for<br>the table.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/amr93njit/IT202-002/pull/53">https://github.com/amr93njit/IT202-002/pull/53</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://amr93-prod.herokuapp.com/Project/profile.php">https://amr93-prod.herokuapp.com/Project/profile.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Create function(s) for outputiting the 3 different scoreboard durations (weekly, monthly, lifetime) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot (or screenshots) showing the function(s)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/163912818-16e6d986-e9d2-456b-9229-c14fdbd83e04.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Functions for displaying scoreboards for the three different durations, held in the lib<br>file &#39;score_helpers.php&#39;.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain the process of how the code works</td></tr>
<tr><td> <em>Response:</em> <p>&#39;scores_table.php&#39; is responsible for retrieving what duration of data is being requested, that<br>being either day, week, month, lifetime, or latest. The title is set for<br>the respective request and then a call is made to the lib file<br><code>score_helpers.php</code>. In this file, several functions exist for outputting tables and data based<br>on what is being requested. For weekly, monthly, and lifetime that function is<br><code>get_top_10($duration)</code>. In that function, the database is retrieved, the server is queried, and<br>depending on the duration the query is adjusted to meet that time frame.<br>Afterwards a statement is prepared and a try statement is used to execute<br>the statement and fetchall data for the table.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/amr93njit/IT202-002/pull/53">https://github.com/amr93njit/IT202-002/pull/53</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Home Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the scoreboads, the link to the game and description, and the proper heading</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/163912885-fb690cb6-9769-4377-83f3-ad805d55817f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Home page showing the game&#39;s name, description, and a link to play it.<br>Two of the four scoreboards are shown for the top scores of the<br>day (04/19/2022) and the top scores of the month.  <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/163913002-691d0c03-a5ed-4d99-aa7c-3ab4cd2ee2f4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The remaining two of the scoreboards are shown, that being for the top<br>scores of the month and the all time top scores. The top score<br>of all time is present in no other scoreboard as it had occured<br>a month prior and therefore means it cannot be featured in any other<br>scoreboard. The scores made on 04/17/2022 are not present in the weekly scores<br>because the week resets on Monday, meaning that those scores are displayed in<br>the monthly and all-time scoreboards. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the different pieces are retrieved and shown to the user</td></tr>
<tr><td> <em>Response:</em> <p>The home page has 4 calls made to the partials file &#39;scores_table.php&#39; for<br>each duration: day, week, month, and lifetime. Once there, the appropriate table title<br>is set for each case and whilst a call is made to get<br>the actual table output in the lib file <code>score_helpers.php</code>. Much like the case<br>on the user&#39;s profile, the server is queried and statements are prepared and<br>tried to output matching data for their table. For example, the daily table<br>will output the ten highest scores for the current day whilst the monthly<br>one will look for the highest scores made throughout the current month. <br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/amr93njit/IT202-002/pull/53">https://github.com/amr93njit/IT202-002/pull/53</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/amr93njit/IT202-002/pull/54">https://github.com/amr93njit/IT202-002/pull/54</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://amr93-prod.herokuapp.com/Project/home.php">https://amr93-prod.herokuapp.com/Project/home.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Proposal.md </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em>  Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone1.md accordingly and a direct link to the path on Heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/163913275-1f97fe07-928d-4e2d-b628-9e12df1bb9d9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Updated proposal.md file for all Milestone2 requirements.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone2 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/163829507-c38eb5b5-6add-4a83-b632-9b2dfebecaf3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>5/5 issues being completed and marked accordingly.</p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-002-S22/it202-milestone-2-arcade-project/grade/amr93" target="_blank">Grading</a></td></tr></table>