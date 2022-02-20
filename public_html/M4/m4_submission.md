<table><tr><td> <em>Assignment: </em> Init DB Setup</td></tr>
<tr><td> <em>Student: </em> Adam Ramsey(amr93)</td></tr>
<tr><td> <em>Generated: </em> 2/20/2022 6:03:24 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-002-S22/init-db-setup/grade/amr93" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <p>Reminder: Make sure you start in dev and it&#39;s up to date</p>
<ul>
<li>git checkout dev</li>
<li>git pull origin dev</li>
<li>git checkout -b ProjectSetup</li>
</ul>
<p>Steps:</p>
<ol>
<li>Create a new folder in public_html called Project</li>
<li>create a new folder in Project called sql</li>
<li>Create a new file in sql called init_db.php</li>
<li>Paste the content from <a href="https://gist.github.com/MattToegel/6a8310e3ac19fe505870e5ebfa8cf4ea">https://gist.github.com/MattToegel/6a8310e3ac19fe505870e5ebfa8cf4ea</a><ul>
<li>You will get errors if this is not in the proper location</li>
</ul>
</li>
<li>Create another file in sql called 001_create_table_users.sql</li>
<li>Paste the content from <a href="https://gist.github.com/MattToegel/f3b39da97fba38bd04fc7073ad0a627e">https://gist.github.com/MattToegel/f3b39da97fba38bd04fc7073ad0a627e</a> </li>
<li>Add/commit/push these to the new branch (if you haven&#39;t yet)</li>
<li>Create the pull request on github but do not complete it yet</li>
<li>Create a new folder in public_html called M4</li>
<li>Create a new file in the M4 folder called m4_submission.md</li>
<li>Fill out the below deliverables and paste the generated markdown in the file</li>
<li>Add/commit/push the new changes</li>
<li>Verify all of the files appear as expected in the ProjectSetup branch<ol>
<li>M4/m4_submission.md</li>
<li>Project/sql/init_db.php</li>
<li>Project/sql/001_create_table_users.sql</li>
</ol>
</li>
<li>Complete the merge/pull request from step 8</li>
<li>Create a new pull request from dev to prod and complete it</li>
<li>Go back to your local repo</li>
<li><code>git checkout dev</code></li>
<li><code>git pull origin dev</code></li>
<li>On github, navigate to the prod branch</li>
<li>Go to the M4 folder</li>
<li>Click the m4_submission.md</li>
<li>Paste that url to Canvas as the submission</li>
</ol>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Verify Proper Setup </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Visit the init_db.php file in the browser on heroku dev and screenshot the working output (If it says blocked this is still valid)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/154865885-40e8fb36-26c6-4be6-981e-10b1ab7928eb.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing init_db.php with the drop-down menus extended.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Go to your MySQL VS Code extension, click the new table that was generated, screenshot the table shown</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98342831/154866638-9f8805b0-6daf-430a-a00a-132e209d42f1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Table 001 with empty values<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Briefly talk about something you learned (from the readings is preferred over the slides/class)</td></tr>
<tr><td> <em>Response:</em> <p>The table function was something I was surprised to see work like a<br>table and is the first time I&#39;ve seen something work like a venn<br>diagram, specifically something akin to statistics. Its functions are very similar to union,<br>disjoint, etc. and is very familiar. Additionally, I knew about integer limits but<br>not know that their range changed on whether or not they were signed<br>or unsigned.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Talk about any issues or difficulties you had in any of the processes and how you resolved them. If you didn't have issues this HW mentions a recently resolved issue that wasn't discussed before. Otherwise, just mention "no issues"</td></tr>
<tr><td> <em>Response:</em> <p>I had a problem with the php server, specifically that I was setting<br>up the connection inside a nonexistent folder. Unknowingly, I made a typo multiple<br>times in the directory and I was convinced that there was something wrong<br>with my php setup, the server, and the files I downloaded; not that<br>I messed it up on my own. It took me about 6 hours<br>to figure out that I misspelt something.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the pull request link (ProjectSetup to Dev)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/amr93njit/IT202-002/pull/4">https://github.com/amr93njit/IT202-002/pull/4</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Paste the direct link from heroku prod to the init_db.php file (i.e., https://mt85-prod.herokuapp.com/Project/sql/init_db.php)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://amr93-dev.herokuapp.com/Project/sql/init_db.php">https://amr93-dev.herokuapp.com/Project/sql/init_db.php</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-002-S22/init-db-setup/grade/amr93" target="_blank">Grading</a></td></tr></table>