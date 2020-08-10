<h1>Environment Setup Page</h1>
<p>The base directory for this project is <code><?= ($PROJECT_BASE_DIR) ?></code>.</p>
<form method="POST" action="/init-environment/update">
	<input type="hidden" name="next_page" value="directory-setup">
	<h2>General Settings</h2>
	<div class="form-group">
		<label for="title">Title of Project</label>
		<input type="text" name="title" class="form-control" id="title" placeholder="Awesome App" required value="<?= ($config['title']) ?>">
		<small class="form-text text-muted">This is the title of the project you are working on. (Ex: Cool Todo App)</small>
	</div>
	<a href="/init-environment" type="submit" class="btn btn-primary mb-5">Back</a>
	<button type="submit" class="btn btn-primary mb-5">Next</button>
</form>