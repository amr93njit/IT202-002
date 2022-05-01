<table><tr><td> <em>Assignment: </em> IT202 Milestone 3 Arcade Project</td></tr>
<tr><td> <em>Student: </em> Adam Ramsey(amr93)</td></tr>
<tr><td> <em>Generated: </em> 5/1/2022 5:43:31 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-002-S22/it202-milestone-3-arcade-project/grade/amr93" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone3 branch </li>
<li>Create a new markdown file called milestone3.md</li>
<li>git add/commit/push immediate</li>
<li>Fill in the milestone3.md link (from Milestone3) into the proposal.md file under each milestone3 feature</li>
<li>For each feature in the proposal add a related direct link to Heroku prod for a file related to it the feature</li>
<li>Fill in the below deliverables</li>
<li>At the end copy the markdown and paste it into milestone3.md</li>
<li>Add/commit/push the changes to Milestone3</li>
<li>PR Milestone3 to dev and verify</li>
<li>PR dev to prod and verify</li>
<li>Checkout dev locally and pull changes to get ready for Milestone 4</li>
<li>Submit the direct link to this new milestone3.md file from your GitHub prod branch to Canvas</li>
</ol>
<p>Note: Ensure all images appear properly on GitHub and everywhere else.
Images are only accepted from dev or prod, not localhost.
All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod). </p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> User will have credits associated with their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the user's table with the new credits column with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/166115069-cb188fcf-a4d1-415d-ba13-12740597ab3c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Users table showing credits column, where one user has 13 credits and the<br>others have 0.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the code/sql that properly updates the credit/balance value based on CreditHistory</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/166115160-e7c7a333-c4ae-465b-a71a-b830e0474479.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Code showing function for give_credits, responsible for adding credits to a users account.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot showing the credits displaying on the user's profile page (a value > 0 must show)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/166161060-5bde5b6c-5702-4366-bdc6-0685ed329378.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Profile page showing the amount of credits this user has (22).<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot showing the code snippet of how the credits are fetched/displayed on the profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/166115210-b9cff755-da2a-445b-af03-19b21e98c633.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Code showing function get_credits, responsible for receiving a users credits from the Users<br>table.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/166115247-37ec3ebc-c266-49ce-819e-2914075499e2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Snippit of code from profile.php, where a users credits must be displayed. The<br>get_credits helper function is used to display a user&#39;s credits on their profile.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain the code process for updating the credit/balance value and displaying it on the profile page</td></tr>
<tr><td> <em>Response:</em> <p>give_credits works by receiving a user&#39;s id, the amount of credits being added,<br>and the reason for this addition. A query is made to insert these<br>values into the credit history table and a statement is prepared and executed<br>based on these parameters. The users table must then also be updated but<br>with use of the SUM method. This allows for the credit_diff to be<br>either positive or negative depending on the passed credits parameter. credit_diff is summed<br>against the users current credit value and a statement is executed based on<br>this. <br>Note that credits check for nonzero values rather than greater than 0<br>as a related helper function, deduct_credits, passes negative credits to give_credits and must<br>utilize numbers less than 0.</p><br><p>get_credits works by simply querying through the Users able<br>for the credits that a specific user_id holds. This statement is then prepared,<br>tried, and executed and the amount of credits they have is returned.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/amr93njit/IT202-002/pull/61">https://github.com/amr93njit/IT202-002/pull/61</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/amr93njit/IT202-002/pull/62">https://github.com/amr93njit/IT202-002/pull/62</a> </td></tr>
<tr><td> <em>Sub-Task 7: </em> Add a direct link to heroku prod for this file (profile page)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://amr93-prod.herokuapp.com/Project/profile.php">https://amr93-prod.herokuapp.com/Project/profile.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Create a CreditHistory Table </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the CreditHistory table with valid records having been recorded</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/166115479-983c45f0-7b63-4b38-8909-48a2fb0348d7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>A user who has been given 15 credits total for testing purposes and<br>deducted 2 credits for creating a competition. Reasons are specified in the table.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/amr93njit/IT202-002/pull/62">https://github.com/amr93njit/IT202-002/pull/62</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Competitions Table </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the Competitions table with valid records having been recorded</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/166160779-163e2738-9014-48dc-8a17-3352d44651ce.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Competitions table with 4 created competitions. Names are largely indicative of testing implementations.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/amr93njit/IT202-002/pull/66">https://github.com/amr93njit/IT202-002/pull/66</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> User will be able to create a competition </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the Create Competition form with valid date filled in (including the expected cost)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/166161305-d39f0129-504e-452a-a3e7-c8847fe8d685.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Create competition form with default values filled in.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot(s) showing success and error messages of the creation process</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/166161330-d03b543f-72e3-42d3-83ea-cc768ff024f6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Success message for creating a competition, where the user is informed that they<br>have both created and have automatically joined their own competition.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/166161351-ec2c0b43-334c-48cd-8b2d-e78e8459c2c3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Error messages for an invalid title, first/second/third earnings not totalling to 100%, the<br>duration not being a day, the starting reward not being greater than 0,<br>and not meeting the 3 user requirements.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/166161402-50da522e-a351-42dd-b168-440f9a0d8cb0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User entering data that does not meet the minimum requirements will be prompted<br>with a related message to this. Applies to every input that has a<br>minimum required value.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the new record in the Competitions table</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/166161444-97ee08ed-d4ef-4470-9002-3fff300fe38a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The successfully created competition has been added to the table.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the CreditHistory related to creating this competition</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/166161513-9b232718-44fe-45ab-9ec7-136f6027edff.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The user being charged for creating the competition.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a screenshot of the CompetitionParticipants table with the new record for this competition</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/166161754-1465f9be-57fd-4d4e-92e2-9988a952064d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The last value in the table shows the competition organizer joining their competition.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td> <em>Response:</em> <p><a href="https://github.com/amr93njit/IT202-002/pull/67">https://github.com/amr93njit/IT202-002/pull/67</a><br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly explain the code flow for the creation process</td></tr>
<tr><td> <em>Response:</em> <p>The user is given a form with input boxes assigned to each required<br>bit of information. Adding input to the boxes for starting reward and cost<br>to join trigger an javascript function to update the cost so that the<br>user can see what the updated cost for creating the competition is. Upon<br>submitting the form, all data is checked to make sure it is valid.<br>Once validity is confirmed, all data is inserted into the competitions table and<br>the values. Values such as current_participants are automatically set to 1 as the<br>user automatically joins and cost of creating is equivalent to the starting reward<br>plus 1. The user has credits deducted and a function for joining the<br>competition is triggered.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 8: </em> Add a direct link to heroku prod for this file (create competition)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://amr93-prod.herokuapp.com/Project/active_competitions.php">https://amr93-prod.herokuapp.com/Project/active_competitions.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Each new participant causes the Reward value to increase by 50% of the joining fee rounded up </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add before and after screenshots of the Competition record in the DB when a user joins (showing the reward change)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/166162276-3e2a2182-f896-4e89-9fbf-f764ec4e44a2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before joining competition &quot;Test: Reward Increase&quot;, which has a reward value of 1<br>and a join fee of 5. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/166162308-12604ece-0a4e-4dbd-8d06-8b5e7ef7e625.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After joining competition &quot;Test: Reward Increase&quot;, which now has a reward value of<br>4. 50% of 5 is 2.5, rounded up is 3, so the score<br>increases by 3, from 1 to 4.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the reward calculation logic</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/166163280-ba0cc75a-34f9-405c-8517-158ac5923c1c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Reward calculation logic to increase the value by 50% of the join cost.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the calculation</td></tr>
<tr><td> <em>Response:</em> <p>A subquery is used to calculate the reward increase. The amount of users<br>in the competition are counted and this is set to the value of<br>current_participants in the Competitions table. If the join_fee is greater than 0, the<br>current_reward is added to the join_fee, which is multiplied by 0.5 and rounded<br>up.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/amr93njit/IT202-002/pull/68">https://github.com/amr93njit/IT202-002/pull/68</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file (join competition)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://amr93-prod.herokuapp.com/Project/active_competitions.php">https://amr93-prod.herokuapp.com/Project/active_competitions.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Have a page where the user can see active competitions </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the active competitions page list with a few active competitions</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/166162635-1191a50a-2007-4f6d-8a3b-5872b1d0fdfb.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Active competitions table with some active competitions.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the query including the WHERE clause</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/166162702-63ee8367-d051-4dfe-ae21-90cab62653ad.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Query where the data is selected to show the active competitions.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the query and the code used to display this data</td></tr>
<tr><td> <em>Response:</em> <p>All data is first selected from the competitions table, where data is then<br>given an alias as joining tables requires aliasing. The competitions participants table is<br>joined to make sure the user cannot join a competition they are already.<br>The competitions shown are then made sure to only be ones that have<br>not expired, have been paid out, or have been calculated (ending WHERE clause).<br>Data shown is limited to 10 and ordered in ascending order of expiration<br>date.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/amr93njit/IT202-002/pull/68">https://github.com/amr93njit/IT202-002/pull/68</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file (list competitions)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://amr93-prod.herokuapp.com/Project/active_competitions.php">https://amr93-prod.herokuapp.com/Project/active_competitions.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> CompetitionParticipants table </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the table with validate data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/166161754-1465f9be-57fd-4d4e-92e2-9988a952064d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Table showing valid competitions and users who have joined them. Identical to the<br>screenshot used in deliverable 4.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/amr93njit/IT202-002/pull/63">https://github.com/amr93njit/IT202-002/pull/63</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> User can join active competitions </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a before and after screenshot of the CompetitionHistory table</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/166163367-d198d6ac-38f0-47ad-a4a6-8a1300546532.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before screenshot of competitions table. The competition is &quot;Deliverable 8&quot; and currently has<br>1 participant: the organizer.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a before and after screenshot of the Competitions table showing the participant count update</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/166163412-1cf7198b-988c-417b-aded-056afcdb5c2e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After screenshot of competitions table. The competition is &quot;Deliverable 8&quot; and currently has<br>2 participants: the organizer and the user who just joined.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot(s) showing proper error and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/166162784-688164d3-dd57-4fe4-8f0f-4cef13423bc4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>A user successfully joining a competition. In this case, it was the one<br>at the bottom, &quot;Reward Increase&quot;.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/166162832-4d614c02-7c33-4623-87ff-6b8a716258ec.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Message the displays if a user attempts to join a competition they have<br>already entered.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/amr93njit/IT202-002/pull/68">https://github.com/amr93njit/IT202-002/pull/68</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain the logic/code for joining a competition and the involved steps</td></tr>
<tr><td> <em>Response:</em> <p>To join a competition, a user must either create a competition, where they<br>are automatically added to that competition, or join one via the active competitions<br>page. Upon joining, the join_competition helper function is called. This function first determines<br>that the competition being joined is not expired and has not been paid<br>out. It also checks to make sure the user&#39;s credits are greater than<br>the join fee. Upon verifying this data, the user is added to the<br>CompetitionParticipants table for the competition id they are joining and are then faced<br>with having their credits deducted and the participants count updated in the competitions<br>table. This is also where the reward value gets increased.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add a direct link to heroku prod for this file (any join page)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://amr93-prod.herokuapp.com/Project/active_competitions.php">https://amr93-prod.herokuapp.com/Project/active_competitions.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Create a function to calculate winners </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the whole code process with the clear comments (ensure your ucid and date are shown)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/166163855-a0757210-0ff7-43c4-bc49-0494f19b3043.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>First half of code, showing initial query and setting variables for calculating payouts.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/166163899-3d32ffae-8fd9-4e9d-a272-0fc138ba6994.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Second half of code, distributing prize money and initial steps of identifying that<br>the competition has closed.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/166163926-7322b44a-2c33-4493-b25a-aaec4d103bda.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Third half of code, setting tables to correctly show that a competition has<br>ended and that the winners have been paid out.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/166164998-242f0ddc-720f-4fc0-9a8e-2ca68c7bef08.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Get top scores function, used for finding the top 3 placements.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Mention which winner calculation you chose (copy the text from the proposal for your choice)</td></tr>
<tr><td> <em>Response:</em> <p>Option 2: Where the individual score was earned/created between when the user joined<br>the competition and when the Competition expires<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add before and after screenshots of the Competitions table of valid and invalid competitions being successfully processed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/166165200-852bf5f8-31ea-4d03-9e2a-a834300bb256.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Competiton &quot;expired&quot; before being calculated.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/166165225-29bc7eff-4ddc-4955-af28-90f9adb7036c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Competiton &quot;expired&quot; after being calculated.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain the calculation steps and payout process</td></tr>
<tr><td> <em>Response:</em> <p>First, the score_helpers function get_top_scores_for_comp calculates the top scores made for a competition.<br>It takes a users score, their ID, and when they made such a<br>score and uses DENSERANK() to partition by the user&#39;s score, making that a<br>rank. This rank identifies a user&#39;s best score made for a competition. Then<br>other related tables, competitions and competitionsparticipants, are joined to verify that user is<br>in the competition and sorts by scores.</p><br><p>get_top_scores is then called by the competition_helpers<br>function calc_winners(), which is only accessible through the admin page. It looks through<br>the competition table to see if a competition has expired by being past<br>its expiration date. Then the scores from get_top_scores are used to identify the<br>winners of the competition and their pay outs are determined by taking the<br>float value of their winning percentage distribution and multiplying that by the reward<br>value, rounded up, distributed through the give_credits function. That competition is then considered<br>calculated and added to the calced_comps array. That array is then used to<br>update the competition at hand to identify that it has been calculated and<br>has paid out. <br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/amr93njit/IT202-002/pull/70">https://github.com/amr93njit/IT202-002/pull/70</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 10: </em> Proposal.md </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em>  Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone3.md accordingly and a direct link to the path on Heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/166163592-ac849e0a-c874-42d5-9042-30fcc1ef38b2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Updated proposal.md file with checkmarks/dates/links. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone3 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/166165736-86ffa49a-48e7-4346-bfb7-76fe5f405f76.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Project board shown where all completed issues are closed.<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-002-S22/it202-milestone-3-arcade-project/grade/amr93" target="_blank">Grading</a></td></tr></table>