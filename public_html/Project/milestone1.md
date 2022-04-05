<table><tr><td> <em>Assignment: </em> IT202 Milestone1 Deliverable</td></tr>
<tr><td> <em>Student: </em> Adam Ramsey(amr93)</td></tr>
<tr><td> <em>Generated: </em> 4/5/2022 12:45:47 AM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-002-S22/it202-milestone1-deliverable/grade/amr93" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone1 branch</li>
<li>Create a milestone1.md file in your Project folder</li>
<li>Git add/commit/push this empty file to Milestone1 (you&#39;ll need the link later) </li>
<li>Fill in the deliverable items<ol>
<li>For the proposal.md file use the direct link to milestone1.md from the Milestone1 branch for all of the features  </li>
<li>For each feature, add a direct link (or links) to the expected file the implements the feature from Heroku Prod (I.e, <a href="https://mt85-prod.herokuapp.com/Project/register.php">https://mt85-prod.herokuapp.com/Project/register.php</a>)</li>
</ol>
</li>
<li>Ensure your images display correctly in the sample markdown at the bottom</li>
<li>Save the submission items</li>
<li>Copy/paste the markdown from the &quot;Copy markdown to clipboard link&quot;</li>
<li>Paste the code into the milestone1.md file</li>
<li>Git add/commit/push the md file to Milestone1</li>
<li>Double check the images load when viewing the markdown file (points will be lost for invalid/non-loading images)</li>
<li>Make a pull request from Milestone1 to dev and merge it (resolve any conflicts)<ol>
<li>Make sure everything looks ok on heroku</li>
</ol>
</li>
<li>Make a pull request from dev to prod (resolve any conflicts) <ol>
<li>Make sure everything looks ok on heroku</li>
</ol>
</li>
<li>Submit the direct link from github prod branch to the milestone1.md file (no other links will be accepted and will result in 0)</li>
</ol>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Feature: User will be able to register a new account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/161667174-9cfedee3-9794-4d72-907d-a54e5b5340f3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Registration form showing that an email has already been taken and is therefore<br>not available.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/161666980-5713a045-9798-46c7-9d97-d5fe95f01616.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User has entered an invalid username and are shown what qualifies as a<br>valid username. Additionally, their entered passwords are not the same when they must<br>be for the confirmation section. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/161671558-5bb31fee-cf70-4b68-8c9c-9c9b80f4b56e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>A user successfully registering a new account.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Users table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/161671272-0dcc59ac-7bc7-40e4-b184-b149d96a8600.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Users table showing two users.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/amr93njit/IT202-002/pull/10">https://github.com/amr93njit/IT202-002/pull/10</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>Form data is collected using $_POST for each of the required categories, that<br>being email, password, password confirmation, and the username. Relevant information has to be<br>validated to make sure it is valid, done through a series of if<br>statements. If an error is detected, an appropriate message is propagated to the<br>user. These statements largely are about whether or not the entry is valid,<br>such that it cannot be empty, under or over a certain character limit,<br>meeting required characters in the case of email, or, in the sake of<br>confirming passwords, whether or not both are equal. Otherwise, the user is registered<br>into the Users database and their account is created.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Feature: User will be able to login to their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/161668347-49796878-929d-4e07-b973-ecf2d8ef1406.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User attempting to login with an email that has not been registered.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/161668591-ea64471f-4203-47d4-b003-42295590b057.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User attempting to login with a username that has not been registered.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/161674848-433552cd-0440-4b8e-a41d-147b37c23cb8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User attempting to login to an account with an incorrect password.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/161672289-6f8d532f-ea99-438c-a540-f192a671c404.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Entering login information before hitting &quot;login&quot;.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of successful login</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/161668420-9b8fdb40-e839-4728-b83d-d1dd07b02deb.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User &quot;amr93&quot; successfully logging in.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/amr93njit/IT202-002/pull/11">https://github.com/amr93njit/IT202-002/pull/11</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>Form data is collected using $_POST for each of the required categories, that<br>being email and password. Relevant information has to be validated to make sure<br>it is valid, done through a series of if statements.  If an<br>error is detected, an appropriate message is propagated to the user. Otherwise, they<br>are &quot;matched&quot; against an existing user within the User database and matched against<br>their appropriate role from the Roles database. This &quot;matching&quot; process is done with<br>the $_SESSION variable which loads an existing session for that user on the<br>server-side.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Feat: Users will be able to logout </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the successful logout message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/161668927-0ecc539b-83e5-48f6-812c-6c52424ecbae.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User successfully logging out.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the logged out user can't access a login-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/161668967-3e70aa00-d261-4da6-a2f4-5ff632f66d0d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User attempting to access the home page, being redirected back to the login<br>page where they are told that they must be logged in to visit<br>such a page.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/amr93njit/IT202-002/pull/11">https://github.com/amr93njit/IT202-002/pull/11</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>The current session is started to access that current session and is then<br>reset. Resetting the session causes it to be unset, destroyed, and a new<br>one is started. For the user, this logs them out and redirects them<br>back to the login page.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Feature: Basic Security Rules Implemented / Basic Roles Implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the logged out user can't access a login-protected page (may be the same as similar request)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/161668967-3e70aa00-d261-4da6-a2f4-5ff632f66d0d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User attempting to access the home page, being redirected back to the login<br>page where they are told that they must be logged in to visit<br>such a page.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a user without an appropriate role can't access the role-protected page (a test/dummy page is fine)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/161670986-17b2c94d-efaa-4e93-a156-840f1ffa9389.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>A user without an admin roll attempting to access an admin-restricting page.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Roles table with data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/161671131-7619db5c-6f4b-40a1-a135-49e6acdbd851.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Roles table with one role: the admin role.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the UserRoles table with data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/161671223-480661dd-08b3-48d3-bc43-c5f322e44bd2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Userroles table with one entry, designated to set user with an id of<br>1 (amr93) to the role with an id of 1 (Admin).<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add the related pull request(s) for these features</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/amr93njit/IT202-002/pull/37">https://github.com/amr93njit/IT202-002/pull/37</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Explain briefly how the process/code works for login-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>Pages which requires a user to be logged-in check whether or not a<br>user is logged in with a &quot;is_logged_in()&quot; function. If false, this is sent<br>to the user_helper function which is then responsible for displaying a warning message<br>that a user has attempted to access a login-restricted page. They are then<br>redirected back to the login screen in the case that this occurs.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Explain briefly how the process/code works for role-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>Pages which requires a user have a certain role check whether or not<br>a user has the role with a &quot;has_role&quot; function. If false, that page<br>will displaying a warning message that the user does not have permission to<br>view such page. They are then redirected back to the home page.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Feature: Site should have basic styles/theme applied; everything should be styled </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots to show examples of your site's styles/theme</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/161671878-d48fa0c0-0bed-46f6-a23c-03185ccaab5e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Home page, showing a mint green background, blue redirection text with pink backgrounds,<br>and a teal background for &quot;info&quot; messages.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/161672013-03cf66e3-24b6-4db5-970f-46201e64d0b6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Home page, showing a mint green background, blue redirection text with pink backgrounds,<br>and a green background for &quot;success&quot; messages.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/161672113-67c280ba-a246-497c-9b98-7f6c5e2340a7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Home page, showing a mint green background, blue redirection text with pink backgrounds,<br>and a yellow background for &quot;warning&quot; messages.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/161672191-91eb4e75-2ccc-4d4f-aa38-d8ced7a31001.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Home page, showing a mint green background, blue redirection text with pink backgrounds,<br>and a red background for &quot;danger&quot; messages.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/amr93njit/IT202-002/pull/28">https://github.com/amr93njit/IT202-002/pull/28</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain your CSS at a high level</td></tr>
<tr><td> <em>Response:</em> <p>The .alert class is used for generating success, warning, danger, and info messages.<br>Respectively, these messages are assigned with a background-color of green, yellow, red, and<br>teal. For the background of the entire page, the page&#39;s body has a<br>background-color that is mint-green (RGB: 150,189,147) with text being defined with the color<br>attribute as black. The navigation links are colored using the navigation bar, nav<br>li, and the text is colored blue. The background of said text, identified<br>with display:inline;  background-color, is given a light pink color (RGB:288,159,225). <br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Feature: Any output messages/errors should be "user friendly" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of some examples of errors/messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/161673066-676e82e0-73b0-4e45-9b6f-fb7df0123989.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Informing the user they have tried to access a page they do not<br>have permission to access and that they must be logged in to view<br>the page anyways.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/161667174-9cfedee3-9794-4d72-907d-a54e5b5340f3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the user that the email they have entered has already been taken<br>and is therefore not available.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/161666980-5713a045-9798-46c7-9d97-d5fe95f01616.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User has entered an invalid username and are shown what qualifies as a<br>valid username. Additionally, their entered passwords are not the same when they must<br>be for the confirmation section. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a related pull request</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/amr93njit/IT202-002/pull/11">https://github.com/amr93njit/IT202-002/pull/11</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you made messages user friendly</td></tr>
<tr><td> <em>Response:</em> <p>Messages are easy to see, read, and understand. The messages displayed identify exactly<br>what the user has done wrong or simply informs them that their input<br>was received successfully. In general, each area where this could be done, specifically<br>within login, registration, and profile, are packed with if statements to cover cases<br>the user might encounter. For example, if a user&#39;s password differs from the<br>confirmation password during the registration stage, they are informed of this mistake rather<br>than having nothing happen and leaving them to guess what went wrong. <br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Feature: Users will be able to see their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/161673281-a0d1413d-d777-41e6-8573-b1dcf8a869f2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User being able to edit their profile. That is, they are able to<br>change their email, username, or password.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/amr93njit/IT202-002/pull/16">https://github.com/amr93njit/IT202-002/pull/16</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain briefly how the process/code works (view only)</td></tr>
<tr><td> <em>Response:</em> <p>A form is generated to display all relevant categories, that is their email,<br>username, and the field to update their password. The email and username of<br>the user are already shown, with their information being retrieved and set to<br>the value of their respective input fields. This is not the case for<br>the password area for the sake of privacy. <br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Feature: User will be able to edit their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page validation messages and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/161673560-e703873b-e092-4169-800a-36248e398cd0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User successfully changing their name in their profile.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/161673917-e8cc67f1-549d-4b46-b4a4-edac0b59fb9d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User attempting to change their name to one that is already being taken.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add before and after screenshots of the Users table when a user edits their profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/161673654-b1dc27d1-4c19-4ac9-ae61-e01046e95bc8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before edit, user&#39;s name is &quot;test&quot;.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/161673735-e211ae47-5316-4202-9946-513c52a782db.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After edit, user&#39;s name is &quot;test123&quot;.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/amr93njit/IT202-002/pull/16">https://github.com/amr93njit/IT202-002/pull/16</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works (edit only)</td></tr>
<tr><td> <em>Response:</em> <p>For each category that could be edited, that is the user&#39;s email, username,<br>and password, input must be collected and checked against each other. For email<br>and username, they are first checked to see if they are valid and<br>whether or not they match against an already existing name present within the<br>Users database. If they are valid, the $_SESSION variable is used to change<br>their data within the table. This is largely the same for the password,<br>however that field does not use $S_SESSION. Instead, that data is simply updated<br>within the table.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Proposal and Issues </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone1.md accordingly and a direct link to the path on heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/161667295-c5077cb7-694e-4bde-baac-b24a7a6c6c61.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Proposal checklist with evidence.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/161676707-11a3f6ad-ae3a-4bf0-b6ca-45ffa1a6c76b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing that all issues have been completed.<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-002-S22/it202-milestone1-deliverable/grade/amr93" target="_blank">Grading</a></td></tr></table>