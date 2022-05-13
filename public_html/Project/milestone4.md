<table><tr><td> <em>Assignment: </em> IT202 Milestone 4 Arcade Project</td></tr>
<tr><td> <em>Student: </em> Adam Ramsey(amr93)</td></tr>
<tr><td> <em>Generated: </em> 5/12/2022 11:18:57 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-002-S22/it202-milestone-4-arcade-project/grade/amr93" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone4 branch </li>
<li>Create a new markdown file called milestone4.md</li>
<li>git add/commit/push immediate</li>
<li>Fill in the milestone4.md link (from Milestone4) into the proposal.md file under each milestone4 feature</li>
<li>For each feature in the proposal add a related direct link to Heroku prod for a file related to it the feature</li>
<li>Fill in the below deliverables</li>
<li>At the end copy the markdown and paste it into milestone4.md</li>
<li>Add/commit/push the changes to Milestone4</li>
<li>PR Milestone4 to dev and verify</li>
<li>PR dev to prod and verify</li>
<li>Checkout dev locally and pull changes</li>
<li>Submit the direct link to this new milestone4.md file from your GitHub prod branch to Canvas</li>
</ol>
<p>Note: Ensure all images appear properly on GitHub and everywhere else.
Images are only accepted from dev or prod, not localhost.
All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod). </p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> User can set their profile to public or private </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of new column on the Users table</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/168200034-80abca21-3d58-4407-b551-5f1e55d9797c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Users table with new visibility column.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of updated profile edit view</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/168200717-0abc9cfb-3f31-497b-b2f3-51887d5ce76f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Updated profile edit view<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot of profile view view (ensure email isn't shown publicly)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/168200776-4d63b8e9-e9f4-4924-bf60-9b6aa503ed04.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Updated profile view<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request(s) links</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/amr93njit/IT202-002/pull/82">https://github.com/amr93njit/IT202-002/pull/82</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add direct link to a public profile from heroku</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/168204659-83ef80d0-5613-4455-b89e-94c76d1b514c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>[Link: <a href="https://amr93-prod.herokuapp.com/Project/profile.php?id=12%5D">https://amr93-prod.herokuapp.com/Project/profile.php?id=12]</a> A public profile.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly explain the logic behind how public/private profile works</td></tr>
<tr><td> <em>Response:</em> <p>There are variables, isMe and isEdit, to check whether or not the user<br>is the one who owns the profile in question and whether or not<br>they are in edit mode. If they own the profile, they made edit<br>it and access the edit page. There is also a profile_link partial function<br>set up to designate whether or not the user is in the edit<br>portion of their profile.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> User will be able to see their competition history </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of competition history view ( competition name, participant count, reward, the expiry date if active otherwise “expired”, whether or not they are the creator) Demonstrate pagination</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/168200985-4642072e-695d-4f45-936e-604cf557c7c2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The first page of this user&#39;s competitions, where most are still active.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/168201024-9a2cd797-3d69-44b3-a917-35d205e8955f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The third page of this user&#39;s competitions, where most have expired.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/amr93njit/IT202-002/pull/85">https://github.com/amr93njit/IT202-002/pull/85</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add link to the related page on heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://amr93-prod.herokuapp.com/Project/competition_history.php">https://amr93-prod.herokuapp.com/Project/competition_history.php</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain the logic behind generating this view</td></tr>
<tr><td> <em>Response:</em> <p>A table is generated that pulls competition data for ones that a user<br>has entered, matching competition IDs with competition participant IDs. For pagination, a partials<br>file, pagination.php, and a lib file, paginate.php, have been added. Pagination.php deals with<br>disabling or enabling pagination UI buttons, that is the previous/next button and the<br>button indicating what page the user is on as well as finding out<br>the total number of pages for whatever is being shown. Paginate.php deals with<br>offsetting the data of a table depending on how much data is shown<br>per page. In all tables, it is limited to showing 10 per page<br>before offsetting. The total pages and offset value are made global so that<br>the function calling with paginate() can utilize them. In the actual competition_history.php, two<br>queries are used to start the pagination process: a base query for the<br>table showing data and a total query to find the total data. Subqueries<br>are used for determining the ordering for the tables in question and how<br>to appropriately limit and offset. Values of offset and the data per page<br>are binded and thus allows pagination.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User with the role of admin can edit non-paid out competitions </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot showing the list of competitions the admin can view along with the link to edit it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/168201696-5d4356e1-0820-43a9-85b7-1f99483cbd99.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Active competitions where an admin can edit.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the competition edit form</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/168201738-b3c630b2-fc80-4412-aa61-012ac2b021f8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Competition edit form that is almost identical to the create competition form, as<br>these are the default form values that are available for users. The only<br>exception is that the admin can change the current reward but not the<br>starting reward at this stage.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot showing related message of not being able to edit a competition that's been paid out</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/168201842-3ce82e06-237c-4131-9733-bfb67d0d0099.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>An admin trying to edit an already paid out competition (accessed through editing<br>the URL).<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add before and after screenshots of an edited competition</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/168201909-146a2886-db5e-46ce-aa1b-2c7463d8aed0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>A competition named &quot;7&quot; with the following values.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/168201974-777300e1-882a-4a6f-ae9c-06639b83324d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The competition named &quot;7&quot; with most of its values having now been changed.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/amr93njit/IT202-002/pull/87">https://github.com/amr93njit/IT202-002/pull/87</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Add link to the admin list page and a link to the edit competition edit page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://amr93-prod.herokuapp.com/Project/active_competitions.php">https://amr93-prod.herokuapp.com/Project/active_competitions.php</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://amr93-prod.herokuapp.com/Project/admin/edit_competition.php">https://amr93-prod.herokuapp.com/Project/admin/edit_competition.php</a> </td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <p>The active competitions page that all users have access to has a button<br>hidden for admins, that being the edit button. It functions almost identically to<br>the create_competition.php file, with the exception that it updates the values rather than<br>inserts them. Every competition that is accessed through this edit page has a<br>unique URL for that competition&#39;s ID and the admin is able to edit<br>values whilst still being confided to normal rules (i.e. cost cannot be negative,<br>etc.). All values of the edit form must be filled in.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Add pagination to the active competitions view </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the view showing the pagination working</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/168204280-9db8c2c5-2948-436c-93c6-6aae44f471df.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>First page of active competitions page<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/168204319-8667a4b2-4a73-4ecc-a92e-f39e60f736e3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Second page of active competitions page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/amr93njit/IT202-002/pull/84">https://github.com/amr93njit/IT202-002/pull/84</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a link to the related page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://amr93-prod.herokuapp.com/Project/active_competitions.php?page=1">https://amr93-prod.herokuapp.com/Project/active_competitions.php?page=1</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Anywhere username is displayed should link to that user's profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the score boards with the username links</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/168202964-70c323b6-263e-4abd-bbfc-029ccc039548.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Top scores showing links to each of the listed users profiles.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/168203421-afd8bc50-906f-42b6-8aeb-dfa442a18b8b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Scoreboard view page is partially implemented and does not show a link to<br>a user&#39;s profile.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot showing a public profile of another users</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/168203187-db843c6f-7b62-410d-a4fe-2621f89180be.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>A user whose profile is public<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot of a private profile or private profile message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/168203158-db2cf0ac-b2f5-4314-99f3-c1ce96908d5e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>A user whose profile is private<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/amr93njit/IT202-002/pull/82">https://github.com/amr93njit/IT202-002/pull/82</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a link to a public profile</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://amr93-prod.herokuapp.com/Project/profile.php?id=1">https://amr93-prod.herokuapp.com/Project/profile.php?id=1</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Competition Scoreboard </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the view competition page showing an accurate scoreboard for that competition</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/168203421-afd8bc50-906f-42b6-8aeb-dfa442a18b8b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Competition with a scoreboard, with a user who has submitted 1 score.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the code that generates this scoreboard (include ucid and date)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/168203520-1ecc57dc-ff79-4cb8-b767-fd2de8493f0b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Code for generating scoreboard<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/amr93njit/IT202-002/pull/68">https://github.com/amr93njit/IT202-002/pull/68</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related url(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://amr93-prod.herokuapp.com/Project/view_competition.php">https://amr93-prod.herokuapp.com/Project/view_competition.php</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain the code logic for generating the scoreboard and the approach you took</td></tr>
<tr><td> <em>Response:</em> <p>The scoreboard is generated in a very similar fashion to other scoreboards via<br>the scores_table.php partials file. A duration is set to &quot;competition&quot; and included to<br>the partials file. That file then calls a function located in scores_helpers. The<br>score_helpers function get_top_scores_for_comp calculates the top scores made for a competition. It takes<br>a users score, their ID, and when they made such a score and<br>uses DENSERANK() to partition by the user&#39;s score, making that a rank. This<br>rank identifies a user&#39;s best score made for a competition. Then other related<br>tables, competitions and competitionsparticipants, are joined to verify that user is in the<br>competition and sorts by scores. <br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Game should be fully implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the game in progress</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/168203828-8d4847c0-ea45-4f44-8012-fbd871b853e5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>A game in progress<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the message showing a score can't be generated when logged in (was recorded in milestone2)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/168203947-8b0a5ff3-6352-4295-86dd-26aca5596212.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>A user&#39;s score not being saved because they were Not logged in.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the message showing score was saved if logged in (was recorded in milestone2)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/168203856-c77e8ed0-aa2b-49b0-8cfe-55ec36a1caf3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Message notifying the user that their score was saved.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/amr93njit/IT202-002/pull/51">https://github.com/amr93njit/IT202-002/pull/51</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add link to game</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://amr93-prod.herokuapp.com/Project/game.php">https://amr93-prod.herokuapp.com/Project/game.php</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly explain the logic used for showing the related messages</td></tr>
<tr><td> <em>Response:</em> <p>Upon the game ending, a call is made to the async function postData.<br>The data being recorded is only the score but parameters are left to<br>be easily modified in the future if need be. The function also works<br>closely with &#39;save_score.php&#39;, which functions as an API. AJAX is used in the<br>form of fetch, where a POST form containing the score is sent to<br>the &#39;save_score.php&#39; API in the form of JSON. The API then simply adds<br>the score to the table alongside the user&#39;s ID and the date of<br>the score taking place. If the user is not logged in, the score<br>is not added to the database and an accompanying message is displayed.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> User's score history will include pagination </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Show screenshots of paginated scores</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/168203734-93d2ae35-a885-4b09-80d9-aaed540ac69e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Users score page with pagination<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Show screenshot if no results are available</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/168203614-c7283894-716c-4573-bb57-1d71ff323e0d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>A user who has no scores to display.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/amr93njit/IT202-002/pull/86">https://github.com/amr93njit/IT202-002/pull/86</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add link to home page with high score lists</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://amr93-prod.herokuapp.com/Project/home.php">https://amr93-prod.herokuapp.com/Project/home.php</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add link to public profile page showing paginated latest scores</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://amr93-prod.herokuapp.com/Project/profile.php">https://amr93-prod.herokuapp.com/Project/profile.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Proposal.md </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em>  Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone4.md accordingly and a direct link to the path on Heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/168202318-76798cef-1c6a-404f-9dfb-96557b4ff848.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Completed proposal file<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone4 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/168202364-b16e4aed-0937-4b1a-9112-fc0c53194df4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Completed project board<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-002-S22/it202-milestone-4-arcade-project/grade/amr93" target="_blank">Grading</a></td></tr></table>